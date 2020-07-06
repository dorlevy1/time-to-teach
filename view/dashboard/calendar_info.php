<?php
session_start();
require_once '../../Model/Calendar.php';
$calendar = new Calendar();
$data =$calendar->fetchTeacherClasses();
echo $data;
?>

<div class="">
    <table border="1">
    
        <thead>
            <tr>
                <th>id</th>
                <th>start</th>
                <th>end</th>
            </tr>
        </thead>
        <tbody>
           
        </tbody>
        
    </table>
</div>