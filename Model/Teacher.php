<?php
require_once 'Connection.php';
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
         $sql->execute([self::stam()[0]['teacher_id'],$last_id]);
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
   function stam(){
      $sql= $this->db->prepare("SELECT * FROM students WHERE students.user_id = ?");
      $sql->bindParam(1,$_SESSION['user_id']);
  $sql->execute();
return $result = $sql->fetchAll();
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
        $sql= $this->db->prepare("SELECT * FROM user_details WHERE user_details.user_id = ?");
        $sql->bindParam(1,$_SESSION['user_id']);
        $sql->execute();
        return $sql->fetch();
     }

     function fetchStudents(){
         $sql = $this->db->prepare("SELECT * FROM users,students WHERE students.teacher_id = ? AND users.id = students.user_id ");
         $sql->bindParam(1,$_SESSION['user_id']);
         $sql->execute();
        return  $sql->fetchAll(PDO::FETCH_ASSOC);
     }
     function amountOfClasees(){
            $sql = $this->db->prepare("SELECT * FROM classes WHERE classes.teacher_id = ?");
            $sql->bindParam(1,$_SESSION['user_id']);
            $sql->execute();
           return  $sql->fetchAll(PDO::FETCH_ASSOC);
        
     }

     function deleteStudent(){
        $sql = $this->db->prepare("DELETE FROM datastudents WHERE student_id = ? AND teacher_id = ?");
        $sql->bindParam(1,$_POST['student_id']);
        $sql->bindParam(2,$_SESSION['user_id']);
        $sql->execute();
     }
}

$teacher = new Teacher();