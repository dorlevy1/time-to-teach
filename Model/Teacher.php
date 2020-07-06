<?php
require_once 'Connection.php';
require_once 'User.php';
class Teacher{
   public $db;
   
   function __CONSTRUCT(){
      $this->db = new PDO(DBCON, USR,PSW); //

    }
      function insertNewStudent(){
    //   $allowedExts = array("jpg", "jpeg", "gif", "png");
    //   $extension = pathinfo($_FILES['teacherfile']['name'], PATHINFO_EXTENSION);
    //   if (( ($_FILES["teacherfile"]["type"] == "image/jpeg")
    //   || ($_FILES["teacherfile"]["type"] == "image/gif")
    //   || ($_FILES["teacherfile"]["type"] == "image/jpg")
    //   || ($_FILES["teacherfile"]["type"] == "image/png"))
    //   && in_array($extension, $allowedExts))
    //   {
    //       if ($_FILES["teacherfile"]["error"] > 0){
    //           echo "Return Code: " . $_FILES["teacherfile"]["error"] . "<br />";
    //       }else{
            //   $newname = explode('.',$_FILES['teacherfile']['name']);
            //   $name = $newname[0] . date("Y-m-dH-i-s").'.'.$newname[1];
            $usertype = 2;
      $sql = $this->db->prepare("INSERT INTO users (user_type,first_name,last_name,email,password) VALUES (?,?,?,?,?)");
      $sql->bindParam(1,$usertype);
      $sql->bindParam(2,$_POST['fname']);
      $sql->bindParam(3,$_POST['lname']);
      $sql->bindParam(4,$_POST['email']);
      $password =password_hash($_POST['password'],PASSWORD_ARGON2ID);
      $sql->bindParam(5,$password);
    //   $sql->bindParam(6,$name);
      $sql->execute();  
         $last_id = $this->db->lastInsertId();
         $sql = $this->db->prepare("INSERT INTO students (teacher_id,user_id) VALUES(?,?)");
         $sql->execute([$_SESSION['user_id'],$last_id]);
      header('Location: ./');
    //   $sql = $this->db->prepare("UPDATE users SET user_type = ? WHERE id=$id");
    //   $sql->bindParam(1,$usertype);
    //   $sql->execute();
//       if (file_exists("../uploads/" . $name))
//       {
//           echo $name . " already exists. ";
//       }
//       else  {
//           move_uploaded_file($_FILES["teacherfile"]["tmp_name"],
//           "../uploads/".$name);
//       }
//   }
// }
// else
// {
//   echo "Invalid file";
// }

   }
     function updateTeacher(){
         $sql = $this->db->prepare("UPDATE teachers SET study_category = ? ,freeday = ?,films =?,hoursavailable=? WHERE user_id= ?");
             $sql->bindParam(1,$_POST['study_category']);
             $sql->bindParam(2,$_POST['freeday']);
             $sql->bindParam(3,$_POST['films']);
             $sql->bindParam(4,$_POST['hoursavailable']);
             $sql->bindParam(5,$_SESSION['user_id']);
             $sql->execute();
     }

     function fetchTeacherDetails(){
      $user = new User();
      if($user->fecthPersonalDetails()[0]['user_type']==2){
      $sql= $this->db->prepare
      ("SELECT * FROM teacher_details,students 
      WHERE teacher_details.user_id = students.teacher_id 
      AND students.user_id = ?");
      } else {
      $sql= $this->db->prepare("SELECT * FROM teacher_details 
      WHERE teacher_details.user_id = ?");
      }
      $sql->bindParam(1,$_SESSION['user_id']);
      $sql->execute();
      $d =$sql->fetchAll(PDO::FETCH_ASSOC);
          $data[]=[
             'hours'=> $d[0]['available_hours'],
             'class_options'=> $d[0]['class_option'],
             'days'=> $d[0]['available_days']
          ];
      $data[0]['hours']=explode(',',$data[0]['hours']);
      $data[0]['class_options']=explode(',',$data[0]['class_options']);

for ($i=0; $i < count($data[0]['hours']) ; $i++) { 
  $data[0]['hours'][$i] .= ':00';
}

return $data;
  }

     function fetchStudents(){
         $sql = $this->db->prepare("SELECT * FROM users,students WHERE students.teacher_id = ? AND users.id = students.user_id ");
         $sql->bindParam(1,$_SESSION['user_id']);
         $sql->execute();
        return  $sql->fetchAll(PDO::FETCH_ASSOC);
     }

     function fetchStudent($user_id){
      $sql = $this->db->prepare("SELECT first_name,last_name,students.age,students.birthday,students.city,phone,email,namefile FROM users INNER JOIN students WHERE students.user_id = ? LIMIT 1");
      $sql->bindParam(1,$user_id);
      $sql->execute();
     return  $sql->fetchAll(PDO::FETCH_ASSOC);
     }
     function amountOfClasees(){
        $user = new User();
        if($user->fecthPersonalDetails()[0]['user_type']==2){
           $sql = $this->db->prepare("SELECT * FROM classes WHERE classes.student_id = ?");
         }else{
            $sql = $this->db->prepare("SELECT * FROM classes WHERE classes.teacher_id = ?");

        }
            $sql->bindParam(1,$_SESSION['user_id']);
            $sql->execute();
           return  $sql->fetchAll(PDO::FETCH_ASSOC);
        
     }
     function updateStudent($user_id){
        $sql = $this->db->prepare("UPDATE users SET first_name = ?, last_name = ? , email = ? ,namefile = ? WHERE users.id = ?");
        $sql->bindParam(1,$_POST['fname']);
        $sql->bindParam(2,$_POST['lname']);
        $sql->bindParam(3,$_POST['email']);
        $sql->bindParam(4,$_POST['namefile']);
        $sql->bindParam(5,$user_id);
        $sql->execute();
        $sql = $this->db->prepare("UPDATE students SET  age = ? , birthday = ?,phone = ?,city = ? WHERE students.user_id = ?");
        $sql->bindParam(1,$_POST['age']);
        $sql->bindParam(2,$_POST['birthday']);
        $sql->bindParam(3,$_POST['phone']);
        $sql->bindParam(4,$_POST['city']);
        $sql->bindParam(5,$user_id);
      $sql->execute();

      header('Location: my_students?update='.$user_id);
     }

     function deleteStudent(){
        $sql = $this->db->prepare("DELETE FROM datastudents WHERE student_id = ? AND teacher_id = ?");
        $sql->bindParam(1,$_POST['student_id']);
        $sql->bindParam(2,$_SESSION['user_id']);
        $sql->execute();
     }
}

$teacher = new Teacher();