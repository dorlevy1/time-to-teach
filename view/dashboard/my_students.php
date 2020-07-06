<?php
// session_start()  ;
require_once '../../Model/User.php';
require_once '../../Model/Teacher.php';
$user=new User();
$teacher = new Teacher();

$usr = $user->fecthPersonalDetails()[0];
$students = $teacher->fetchStudents();
if(isset($_REQUEST['update'])){
$student=$teacher->fetchStudent($_GET['update'])[0];
  
}
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
<?php if(isset($_REQUEST['update'])){ ?>
  <h1>Edit <?=$student['first_name'] . ' ' .$student['last_name']?></h1>
<?php }?>   
    
   <p style="margin-left:40px"> 

       Add New User <a href="add_student">+</a>
   </p>
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
   
 <td><?=$student['user_id']?></td>
 <td><?=$student['first_name'].''.$student['last_name']?></td>
 <td><?=$student['email']?></td>
 <td><?=$student['city']?></td>
 <td><a href="?update=<?=$student['user_id']?>">Update </a>/ <a href="?remove=<?=$student['user_id']?>">Delete</a></td>
 </tr>
 <?php }?>
 </table>
</div>
<script src="../../js/dashboard/nav.js"></script>
<script src="../../js/dashboard/index.js"></script>

<?php include_once '../includes/footer.php'?>
