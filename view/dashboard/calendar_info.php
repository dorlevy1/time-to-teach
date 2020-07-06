<?php
session_start();
require_once '../../Model/Calendar.php';
require_once '../../Model/Teacher.php';
$calendar = new Calendar();
$teacher = new Teacher();
$data =$teacher->amountOfClasees();
var_dump($data);
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