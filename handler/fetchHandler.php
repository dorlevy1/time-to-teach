<?php

require_once '../Model/Calendar.php';
require_once '../Model/User.php';
$calendar = new Calendar();

$user = new User();
if($user->fecthPersonalDetails()[0]['user_type']=='1'){

    return $calendar->fetchTeacherClasses($_SESSION['user_id']);
}else{
    return $calendar->fetchStudentClasses($_SESSION['user_id']);

}

