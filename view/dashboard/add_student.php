<?php
require_once '../../Model/Teacher.php';
require_once '../../Model/User.php';
$user=new User();
$teacher=new Teacher();

$usr = $user->fecthPersonalDetails()[0];

if(isset($_POST['submit'])){
$teacher->insertNewStudent();
}

?>


<?php include_once '../includes/head.php'?>
<link rel="stylesheet" type="text/css" href="../../css/main.css">
<link rel="stylesheet" href="../../css/dashboard/nav.css">
<link rel="stylesheet" href="../../css/dashboard/become_teacher.css">

<?php include_once '../includes/end_head.php'?>
<?php include_once '../includes/nav.php'?>
<div class="board minimize bactive">

<div class="title">
    <h1>Become A Teacher</h1>
</div>
<div class="procces-bar">
    <div class="line">
        <div class="one bgc-white">1</div>
        <div class="two bgc-white">2</div>
        <div class="three bgc-white">3</div>
        <div class="four bgc-white  ">4</div>
    </div>
    <div class="procces-bar2">
        <div class="otef">
            <div class="line2">
                
                <div class="one2 bgc-white2">1</div>
                <div class="two2 bgc-white2">2</div>
                <div class="three2 bgc-white2">3</div>
                <div class="four2 bgc-white2">4</div>
            </div>
        </div>
    </div>
</div>
<div class="big-div">
    <div class="form flex-row">

    <form action="" method="POST" enctype='multipart/form-data' class="flex-row">
    <div class="div">

        <label for="name">Full Name*</label>
        <input type="text" name="fname" id="name" placeholder="Your First name ...">
        <input type="text" name="lname" id="name" placeholder="Your Last name ...">
        <p>*First Name and Last Name</p>
        
        <input type="submit" id="stageone" name="stageone" class="btn" value="Continue Next Stage"> 
    </div>
        <div class="div">

            <label for="city">City</label>
            <input type="text" name="city" id="city" placeholder="Your City ...">
            
            <input type="submit" id="stagetwo" class="btn" value="Continue Next Stage"> 
        </div>
<div class="div">

    
    <label for="description">Tell about yourself..</label>
    <input type="text" name="email" id="email" placeholder="Your email ...">
    <p>*Min 60 letters.</p>
    <input id="stagethree" type="submit" class="btn" value="Continue Next Stage"> 
</div>
<div class="div">

    <label for="password">Password</label>
    <input type="password" name="password" id="password">
    <p>*Password for the student</p>
    <input type="submit" id="submit" name="submit" class="btn" value="Continue Next Stage"> 
</div>
    </form> 
    </div>
</div>



</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="../../js/dashboard/nav.js"></script>
<script src="../../js/dashboard/become_teacher.js"></script>
<?php include_once '../includes/footer.php'?>
