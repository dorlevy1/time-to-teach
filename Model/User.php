<?php
require_once 'Connection.php';
class User{//
    public $db;

    function __construct(){
        $this->db = new PDO(DBCON, USR,PSW);
    }

    function insertNewUser(){

        $allowedExts = array("jpg", "jpeg", "gif", "png");
        $extension = pathinfo($_FILES['namefile']['name'], PATHINFO_EXTENSION);
        if (( ($_FILES["namefile"]["type"] == "image/jpeg")
        || ($_FILES["namefile"]["type"] == "image/gif")
        || ($_FILES["namefile"]["type"] == "image/jpg")
        || ($_FILES["namefile"]["type"] == "image/png"))
        && in_array($extension, $allowedExts))
        {
            if ($_FILES["namefile"]["error"] > 0){
                echo "Return Code: " . $_FILES["namefile"]["error"] . "<br />";
            }else{
                $usertype= 1;
                $newname = explode('.',$_FILES['namefile']['name']);
                $name = $newname[0] . date("Y-m-dH-i-s").'.'.$newname[1];
                $sql = $this->db->prepare("INSERT INTO users (user_type,first_name,last_name,email,password,namefile,age,birthday) VALUES (?,?,?,?,?,?,?,?)");
                $sql->bindParam(1,$usertype);
                $sql->bindParam(2,$_POST['first_name']);
                $sql->bindParam(3,$_POST['last_name']);
                $sql->bindParam(4,$_POST['email']);
                $password =password_hash($_POST['password'],PASSWORD_ARGON2ID);
                $sql->bindParam(5,$password);
                $sql->bindParam(6,$name);
                $sql->bindParam(7,$_POST['age']);
                $sql->bindParam(8,$_POST['birthday']);
        $sql->execute();
        
                if (file_exists("../uploads/" . $name))
                {
                    echo $name . " already exists. ";
                }
                else  {
                    move_uploaded_file($_FILES["namefile"]["tmp_name"],
                    "../uploads/".$name);
                }
            }
        }
        else
        {
            echo "Invalid file";
        }
    }


    function loginUser(){
        $sql= $this->db->prepare("SELECT * FROM users WHERE email = ?");
        $sql->execute([$_POST['email']]);
        $user=$sql->fetch();
        if(password_verify($_POST['password'],$user['password'])){
            $_SESSION['user_id']= $user['id'];
            $_SESSION['login'] = true;
            header('Location: dashboard/index.php');  
              }else{
                return false;
            }
// var_dump($users);
        }

    
    function updateUser(){
        $sql = $this->db->prepare("UPDATE users SET user_type = ? ,first_name = ?,last_name =?,age=?,birthday=? WHERE id= ?");
        $sql->bindParam(1,$_POST['user_type']);
        $sql->bindParam(2,$_POST['first_name']);
        $sql->bindParam(3,$_POST['last_name']);
        $sql->bindParam(4,$_POST['age']);
        $sql->bindParam(5,$_POST['birthday']);
        $sql->bindParam(6,$_SESSION['user_id']);
        $sql->execute();
    }
         
    function fetchUserDetails(){
        $sql= $this->db->prepare("SELECT * FROM user_details WHERE user_details.user_id = ?");
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
    function fecthPersonalDetails(){
        $sql= $this->db->prepare("SELECT * FROM users WHERE id = ?");
        $sql->execute([$_SESSION['user_id']]);
    
      return  $sql->fetchAll(PDO::FETCH_ASSOC);
     
    }

 


}