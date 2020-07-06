<?php
session_start();
require_once '../../Model/User.php';
require_once '../../Model/Teacher.php';
$user=new User();
$teacher = new Teacher();

$usr = $user->fecthPersonalDetails()[0];
$amount_students = $teacher->fetchStudents();
$amount_classes = $teacher->amountOfClasees();
$amount_students =count($amount_students);
$amount_classes =count($amount_classes); //
?>


<?php include_once '../includes/head.php'?>
<link rel="stylesheet" type="text/css" href="../../css/main.css">
<link rel="stylesheet" href="../../css/dashboard/nav.css">
<link rel="stylesheet" href="../../css/dashboard/index.css">

<?php include_once '../includes/end_head.php'?>
<?php include_once '../includes/nav.php'?>
<div class="board minimize bactive">
    <div class="flex-row top">
      <h1>My Students</h1>
    </div>
 <table>
 <tr>
 <th>#</th>
 <th>Full Name</th>
 <th>Email/Number</th>
 <th>Update/Delete</th>
 </tr>
 </table>
</div>
<script src="../../js/dashboard/nav.js"></script>
<script src="../../js/dashboard/index.js"></script>

<?php include_once '../includes/footer.php'?>
