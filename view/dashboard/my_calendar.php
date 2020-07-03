<?php
session_start();
require_once '../../Model/User.php';
require_once '../../Model/Calendar.php';
require '../../Model/quickstart.php';
$user=new User();

$usr = $user->fecthPersonalDetails()[0];
$detail = $user->fetchUserDetails();
// var_dump($detail);
$calendar = new Calendar();
$hours = $detail[0]['hours'];
$class = $detail[0]['class_options'];

// echo $_POST['title'];
// echo $_POST['heyo'];
?>


<?php include_once '../includes/head.php'?>
<link rel="stylesheet" type="text/css" href="../../css/main.css">
<link rel="stylesheet" href="../../css/dashboard/nav.css">
<link rel="stylesheet" href="../../css/dashboard/calendar.css">
<link rel="stylesheet" href="../../fullcalendar/lib/main.css">

<title>My Calendar</title>

<?php include_once '../includes/end_head.php'?>
<?php include_once '../includes/nav.php'?>
<div class="board minimize bactive">

<div id="calendar"></div>
<div class="create_class disabled">
    <form action="" method="POST">
        <h1>
        </h1>
        <label class="" for="hour">Pick an hour</label>
        <div class="start_time">
     <?php foreach ($hours as $v) {?>
        <div class="time_pick" name="tim2e_pick">
        <h5><?=$v?></h5>
        </div>
        <?php } ?>
        </div>
        <br>
        <label for="class_time">Class Duration:</label>
        <div class="start_time" style="justify-content:normal !important;">
     <?php foreach ($class as $v) {?>
        <div class="duration_pick" name="tim2e_pick">
<h5 name="<?php if($v == '1/2') {?>30:00<?php }elseif ($v == '3/4') {?>45:00<?php }elseif ($v == '1') {?>1:00:00<?php }elseif ($v == '1 1/2') {?>1:30:00<?php }elseif ($v == '2') {?>2:00:00<?php } ?>"><?=$v?></h5>
        </div>
        <?php } ?>
        </div>
        <label for="student">Student Name</label>
        <select name="" id="">
            <option name="" value=""></option>
        </select>
        <br>
        <input type="submit" id="submit" name="submit" class="btn" value="Check!">
    </form>
</div>

</div>
<script>

</script>
<script src="https://momentjs.com/downloads/moment.js"></script>
<script src="../../fullcalendar/lib/main.js"></script>
<script src="../../js/dashboard/fullCalendar.js"></script>
<script src="../../js/dashboard/nav.js"></script>
<script src="../../js/dashboard/index.js"></script>
<?php include_once '../includes/footer.php'?>
