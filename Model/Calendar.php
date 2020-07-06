<?php
require_once 'Connection.php';
class Calendar{
    public $db;

    function __construct(){
    $this->db = new PDO(DBCON, USR,PSW);

// Print the next 10 events on the user's calendar.
    }


    function InsertNewClass($title,$etc,$start,$end,$color){
        $sql =$this->db->prepare("INSERT INTO classes(teacher_id,title,key_id,description,start_class,end_class,color_class) VALUES(?,?,?,?,?,?,?)");
        $sql->bindParam(1,$_SESSION['user_id']);
        $sql->bindParam(2,$title);
        $sql->bindParam(3,rand());
        $sql->bindParam(4,$etc);
        $sql->bindParam(5,$start);
        $sql->bindParam(6,$end);
        $sql->bindParam(7,$color);
        $sql->execute();
        $last_id = $this->db->lastInsertId();
        $sql = $this->db->prepare("UPDATE classes SET key_id= ? WHERE id = ?");
        $sql->execute([$last_id,$last_id]);

    }

    function InsertNewClassGoogle($title,$key,$start,$end){
        $sql =$this->db->prepare("SELECT key_id FROM classes");
        $sql->execute();
        $r= $sql->fetch();
if($r['key_id'] == $key){
    var_dump('dor');
    // header('Location: ./');
}else{
    $sql =$this->db->prepare("INSERT INTO classes(title,key_id,start_class,end_class) VALUES(?,?,?,?)");
    // $sql->bindParam(1,$_SESSION['user_id']);
    $sql->bindParam(1,$title);
    $sql->bindParam(2,$key);
    $sql->bindParam(3,$start);
    $sql->bindParam(4,$end);
    $sql->execute();
}   
            
        }
    


    function fetchAllClasses(){
        $data=[];
        $sql =$this->db->prepare("SELECT * FROM classes");
        $sql->execute();
        $result =$sql->fetchAll();
    
    
        foreach($result as $row){
            $data[]=array(
    
                
                'id'=>$row['id'],
                'title'=>$row['title'],
                'start'=>$row['start_class'],
                'end'=>$row['end_class']
            );    
        }
        echo json_encode($data);
    }
    function fetchLastInsertLesson(){
        $sql =$this->db->prepare("SELECT * FROM classes WHERE classes.title = ? ORDER BY classes.id DESC LIMIT 1");
        $sql->execute(['Lesson']);
      return  $result =$sql->fetchAll();
    }
    
}


    ?>