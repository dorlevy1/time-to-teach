<?php
require_once 'Connection.php';
class Calendar{
    public $db;
    static $hours =['08:00','09:00','10:00','11:00','12:00','13:00','14:00','15:00','16:00','17:00','18:00','19:00','20:00'];
    function __construct(){
    $this->db = new PDO(DBCON, USR,PSW);

// Print the next 10 events on the user's calendar.
    }


    function InsertNewClass($title,$start,$end,$color){
        $sql =$this->db->prepare("INSERT INTO classes(title,key_id,start_class,end_class,color_class) VALUES(?,?,?,?,?)");
        // $sql->bindParam(1,$_SESSION['user_id']);
        $sql->bindParam(1,$title);
        $sql->bindParam(2,rand());
        $sql->bindParam(3,$start);
        $sql->bindParam(4,$end);
        $sql->bindParam(5,$color);
        $sql->execute();


    }

    function InsertNewClassGoogle($title,$key,$start,$end){
//         $sql =$this->db->prepare("SELECT key_id FROM classes");
//         $sql->execute();
//         $r= $sql->fetch();
// if($r['key_id'] == $key){
//     var_dump('dor');
// }else if($r['key_id'] !== $key){
    $sql =$this->db->prepare("INSERT INTO classes(title,key_id,start_class,end_class) VALUES(?,?,?,?)");
    // $sql->bindParam(1,$_SESSION['user_id']);
    $sql->bindParam(1,$title);
    $sql->bindParam(2,$key);
    $sql->bindParam(3,$start);
    $sql->bindParam(4,$end);
    $sql->execute();
// }
            
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
}


    ?>