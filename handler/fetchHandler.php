<?php

require_once '../Model/Calendar.php';
$calendar = new Calendar();
return $calendar->fetchAllClasses();