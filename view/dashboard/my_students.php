<?php
session_start();
require_once '../../Model/User.php';
require_once '../../Model/Teacher.php';
$user=new User();
$teacher = new Teacher();

$usr = $user->fecthPersonalDetails()[0];
$students = $teacher->fetchStudents();

$amount_classes = $teacher->amountOfClasees();
$amount_students =count($students);
$amount_classes =count($amount_classes);
$amount_students =count($amount_students);
$amount_classes =count($amount_classes); //
?>


<?php include_once '../includes/head.php'?>
<link rel="stylesheet" type="text/css" href="../../css/main.css">
<link rel="stylesheet" href="../../css/dashboard/nav.css">
<link rel="stylesheet" href="../../css/dashboard/index.css">
<link rel="stylesheet" href="../../css/dashboard/my_students.css">

<?php include_once '../includes/end_head.php'?>
<?php include_once '../includes/nav.php'?>
<div class="board minimize bactive">
    <div class="flex-row top">
      <h1>My Students</h1>
    </div>
 <table>
 <tr class="main_tr">
 <th>#</th>
 <th class="fullname">Full Name</th>
 <th>Email/Number</th>
 <th>City</th>
 <th>Update / Delete</th>
 </tr>
 <?php foreach($students as $student){?>
 <tr>
 <td><?=$student['id']?></td>
 <td><?=$student['full_name']?></td>
 <td><?=$student['email']?></td>
 <td><?=$student['city']?></td>
 <td>Update / Delete</td>
 </tr>
 <?php }?>
 </table>
</div>
<script src="../../js/dashboard/nav.js"></script>
<script src="../../js/dashboard/index.js"></script>

<?php include_once '../includes/footer.php'?>
