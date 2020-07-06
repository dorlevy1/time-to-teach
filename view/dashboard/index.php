<?php
// session_start();
require_once '../../Model/User.php';
require_once '../../Model/Teacher.php';
$user=new User();
$teacher = new Teacher();
$usr = $user->fecthPersonalDetails()[0];
$amount_students = $teacher->fetchStudents();
$amount_classes = $teacher->amountOfClasees();
$amount_students =count($amount_students);
$amount_classes =count($amount_classes);
?>


<?php include_once '../includes/head.php'?>
<link rel="stylesheet" type="text/css" href="../../css/main.css">
<link rel="stylesheet" href="../../css/dashboard/nav.css">
<link rel="stylesheet" href="../../css/dashboard/index.css">

<?php include_once '../includes/end_head.php'?>
<?php include_once '../includes/nav.php'?>
<div class="board minimize bactive">
    <div class="flex-row top">
        <div class="box-top" style="background:#22c6ab">
            <div class="title">
                Amount of Students 
            </div>
            <p>
            <?=$amount_students?>
            </p>
        </div>
        <div class="box-top" style="background:#01c0c8">
            <div class="title">
                Amount of payments
            </div>
            
        </div>
        <div class="box-top" style="background:#7460ee">
            <div class="title">
                Amount of classes
            </div>
            <p>
            <?=$amount_classes?>
            </p>
        </div>
    </div>
    <div class="ganres flex-row ">
        <div class="box-class btlr30"style="background-color:#dc1c1c;">
            <div class="ganre-shadow btlr30">
            <div class="title">
            <h1>Add new student</h1>
        </div>
                <div class="icon">
                    <img src="../../images/dashboard/plus.svg" alt="">
            </div>
            </div>
        </div>
        <div class="box-class "style="background:aqua;"> 
               <div class="ganre-shadow">
               <div class="title">
            <h1>View Schedule</h1>
            </div>
            <div class="icon">
                <img src="../../images/dashboard/schedule.svg" alt="">
</div>
               </div>
        </div>
        <div class="box-class btrr30" style="background:#f96c93;">   

        
             <div class="ganre-shadow btrr30">
             <div class="title">
            <h1>Make a list</h1>
            </div>
            <div class="icon">
                <img src="../../images/dashboard/list.svg" alt="">
</div>
             </div>
        </div>
        <div class="box-class bblr30"style="background:#2cec29;">   
             <div class="ganre-shadow bblr30" >
             <div class="title">
            <h1>Sent NoteMessage</h1>
            </div>
            <div class="icon">
                <img src="../../images/dashboard/plus.svg" alt="">
                <img src="../../images/dashboard/message.svg" alt="">
</div>
             </div>
        </div>
        <div class="box-class"style="background:#1891ad;">      
          <div class="ganre-shadow">
          <div class="title">
            <h1>View Payments</h1>
            </div>
            <div class="icon">
                <img src="../../images/dashboard/check.svg" alt="">
</div>
          </div>
        </div>
        <div class="box-class bbrr30"style="background:#dada19;">     
           <div class="ganre-shadow bbrr30">
           <div class="title">
            <h1>Sale!</h1>
            </div>
                <div class="icon">
                    <img src="../../images/dashboard/!.svg" alt="">
                    <img src="../../images/dashboard/message.svg" alt="">
                </div>
           </div>
        </div>
        <div id="calendar"></div>
    </div>
</div>
<script src="../../js/dashboard/nav.js"></script>
<script src="../../js/dashboard/index.js"></script>

<?php include_once '../includes/footer.php'?>
