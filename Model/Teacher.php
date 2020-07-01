<?php
require_once 'Connection.php';
class Teacher{
   public $db;
   
   function __CONSTRUCT(){
      $this->db = new PDO(DBCON, USR,PSW);
      // $sql = $this->db->prepare("INSERT INTO tests (test) VALUES(?)");
      //  if($sql->execute(['testt'])){
      //     echo 'goodie';
      //  }else{
      //     echo 'no goodie';
      //  }
    }

    function insertNewTeacher(){
      $allowedExts = array("jpg", "jpeg", "gif", "png");
      $extension = pathinfo($_FILES['teacherfile']['name'], PATHINFO_EXTENSION);
      if (( ($_FILES["teacherfile"]["type"] == "image/jpeg")
      || ($_FILES["teacherfile"]["type"] == "image/gif")
      || ($_FILES["teacherfile"]["type"] == "image/jpg")
      || ($_FILES["teacherfile"]["type"] == "image/png"))
      && in_array($extension, $allowedExts))
      {
          if ($_FILES["teacherfile"]["error"] > 0){
              echo "Return Code: " . $_FILES["teacherfile"]["error"] . "<br />";
          }else{
              $usertype= 2;
              $newname = explode('.',$_FILES['teacherfile']['name']);
              $name = $newname[0] . date("Y-m-dH-i-s").'.'.$newname[1];
      $sql = $this->db->prepare("INSERT INTO teachers (user_id,name,city,description,password,teacherfile) VALUES (?,?,?,?,?,?) ");
      $id= $_SESSION['user_id'];
      $sql->bindParam(1,$_SESSION['user_id']);
      $sql->bindParam(2,$_POST['name']);
      $sql->bindParam(3,$_POST['city']);
      $sql->bindParam(4,$_POST['description']);
      $password =password_hash($_POST['password'],PASSWORD_ARGON2ID);
      $sql->bindParam(5,$password);
      $sql->bindParam(6,$name);
      $sql->execute();

      $sql = $this->db->prepare("UPDATE users SET user_type = ? WHERE id=$id");
      $sql->bindParam(1,$usertype);
      $sql->execute();
      header('Location: index.php');
      if (file_exists("../uploads/" . $name))
      {
          echo $name . " already exists. ";
      }
      else  {
          move_uploaded_file($_FILES["teacherfile"]["tmp_name"],
          "../uploads/".$name);
      }
  }
}
else
{
  echo "Invalid file";
}

   }
    function insertNewTeacherClass(){
        $sql = $this->db->prepare("INSERT INTO teacher_class (user_id,study_category,freeday,films,hoursavailable) VALUES (?,?,?,?,?) ");
        $sql->bindParam(1,$_SESSION['user_id']);
        $id=$sql->bindParam(2,$_POST['study_category']);
        $sql->bindParam(3,$_POST['freeday']);
        $sql->bindParam(5,$_POST['films']);
        $sql->bindParam(4,$_POST['hoursavailable']);
        $sql->execute();
        $sql = $this->db->prepare("UPDATE users SET user_type = ? WHERE id=$id");
        $sql->bindParam(1,2);
        $sql->execute();
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
        $sql= $this->db->prepare("SELECT * FROM users,teachers WHERE teachers.user_id = ?");
        $sql->bindParam(1,$_GET['id']);
        $sql->execute();
        $teacher = $sql->fetch();
     }

     function fetchRequests(){
        $sql= $this->db->prepare("SELECT * FROM requests WHERE teacher_id = ?");
        $sql->bindParam(1,$_SESSION['user_id']);
        $sql->execute();
        $teacher = $sql->fetch();
     }

     function registerNewStudent(){
        $sql = $db->prepare("INSERT INTO datastudents (teacher_id,student_id) VALUES(?,?)");
        $sql->bindParam(1,$_SESSION['user_id']);
        $sql->bindParam(2,$_POST['student_id']);
        $sql->execute();
     }
     function deleteStudent(){
        $sql = $db->prepare("DELETE FROM datastudents WHERE student_id = ? AND teacher_id = ?");
        $sql->bindParam(1,$_POST['student_id']);
        $sql->bindParam(2,$_SESSION['user_id']);
        $sql->execute();
     }
}

$teacher = new Teacher();