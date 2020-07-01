<?php
require_once 'Connection.php';
class Student{
    public $db;

    function __construct(){
        $this->db = new PDO(DBCON, USR,PSW);
    }

    function addToSchedule(){
        $n=0;
        $sql = $this->db->prepare("INSERT INTO schedules (teacher_id,user_id,whichday,whichhours,lession_nuber,whichstudy) VALUES (?,?,?,?,?,?)");
        $sql->execute([$_POST['teacher_id'],$_SESSION['user_id'],$_POST['whichday'],$_POST['whichhours'],++$n,$_POST['whichstudy']]);
    }

    function removeFromSchedule(){
        $sql= $this->db->prepare("DELETE FROM schedules WHERE teacher_id = ? AND user_id = ? and whichstudy=? AND lession_number = ?");
        $sql->execute([$_POST['teacher_id'],$_SESSION['user_id'],$_POST['whichstudy'],++$n]);
    }

    function removeStudent(){
        $sql = $db->prepare("DELETE FROM datastudents WHERE student_id = ? AND teacher_id = ?");
        $sql->bindParam(1,$_SESSION['user_id']);
        $sql->bindParam(2,$_POST['teacher_id']);
        $sql->execute();
     }

    }