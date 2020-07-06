<?php
session_start();
include_once '../../Model/Calendar.php';

$calentar = new Calendar();
// var_dump($_GET['title'],$_GET['start'],$_GET['end'],$_GET['description']);
// $calentar->InsertNewClass('1',$_GET['title'],$_GET['start'],$_GET['end'],$_GET['description']);

?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="container">

<h1>welcome to edit lesson</h1>

<div class="container">

    <form action="" method="GET">
        <div class="form-group">
            <label for="">Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="title">
        </div>

        <div class="form-group">
            <label for="start-lesson">Start Lesson</label>
            <input type="text" class="form-control" id="start-lesson" name="start" placeholder="start lesson">
        </div>

        <div class="form-group">
            <label for="end-lesson">End Lesson</label>
            <input type="text" class="form-control" id="end-lesson" name="end" placeholder="end lesson">
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea type="text" class="form-control" id="description" name="description" placeholder="description"></textarea>
        </div>

        <input class="btn btn-primary" type="submit" value="update">
    </form>

</div>