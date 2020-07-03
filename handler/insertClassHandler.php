<?php
session_start();
require_once '../Model/quickstart.php';
require_once '../Model/Calendar.php';
$calendar = new Calendar();
if(isset($_POST['title'])){
  $calendar->InsertNewClass($_POST['title'],$_POST['start'],$_POST['end'],$_POST['color']);
      }