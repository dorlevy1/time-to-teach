<?php
session_start();
require_once '../Model/User.php';
if(isset($_SESSION['user_id']) && isset($_SESSION['login']) === true){
    echo 'you are loged in ';
}else{
    echo ' you are not loged in';
}
$user =new User();

if(isset($_POST['submit'])){
    $user->insertNewUser();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST" enctype='multipart/form-data'>
    <input type="text" name="first_name"><br>
    <input type="text" name="last_name"><br>
    <input type="text" name="email"><br>
    <input type="password" name="password"><br>
    <input type="num" name="age"><br>
    <input type="date" name="birthday"><br>
    <input type="file" name="namefile"><br>
    <input type="submit" value="send" name="submit">
    </form>
</body>
</html>