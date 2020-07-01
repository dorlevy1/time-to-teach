<?php
require_once 'Connection.php';
class Video extends DBConnection{
    public $db;

    function __construct(){
        $this->db = new PDO(DBCON, USR,PSW);

    }
    function insertNewFile(){
        
        $allowedExts = array("jpg", "jpeg", "gif", "png", "mp3", "mp4", "wma");
        $extension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
        
        if ((($_FILES["file"]["type"] == "video/mp4")
        || ($_FILES["file"]["type"] == "audio/mp3")
        || ($_FILES["file"]["type"] == "audio/wma")
        || ($_FILES["file"]["type"] == "image/pjpeg")
        || ($_FILES["file"]["type"] == "image/gif")
        || ($_FILES["file"]["type"] == "image/jpeg"))
        && ($_FILES["file"]["size"] < 200000)
        && in_array($extension, $allowedExts))
        {
            if ($_FILES["file"]["error"] > 0){
                echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
            }else{
                $name = $_FILES["file"]["name"] + NOW();
                $sql = $this->db->prepare("INSERT INTO videos (id,user_id,namefile,description) VALUES (?,?,?) ");
                $sql->bindParam(1,$_SESSION['user_id']);
                $sql->bindParam(2,$name);
                $sql->bindParam(3,$_POST['description']);
                $sql->execute();
                
                if (file_exists("upload/" . $name))
                {
                    echo $name . " already exists. ";
                }
                else  {
                    move_uploaded_file($_FILES["file"]["tmp_name"],
                    "upload/" . $name);
                }
            }
        }
        else
        {
            echo "Invalid file";
        }
    }
    
    
    function updateFile(){
        $sql = $this->db->prepare("UPDATE videos SET id = ? ,description =? WHERE id= ?");
        $sql->bindParam(1,$_GET['id']);
        $sql->bindParam(2,$_POST['description']);
        $sql->execute();
    }
    
    function deleteFile(){
        $sql = $this->db->prepare("DELETE teachers WHERE id= ?");
        $sql->bindParam(1,$_GET['id']);
        $sql->execute();
    }
}
