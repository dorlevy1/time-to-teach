<?php
session_start();
require_once '../../Model/Calendar.php';
require_once '../../Model/Teacher.php';

$calendar = new Calendar();
$teacher = new Teacher();

$data = $teacher->amountOfClasees();
// var_dump($data);
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="container">

    <a href="add_lesson.php" class="btn btn-success mt-5">+ add Lesson</a>

    <table class="table table-hover mt-5">
        <thead>
            <tr>
                <th>Num</th>
                <th>Title</th>
                <th>Start Lesson</th>
                <th>End Lesson</th>
                <th>Description</th>

            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $d) : ?>
                <tr>
                    <td><?= $d['id'] ?></td>
                    <td><?= $d['title'] ?></td>
                    <td><?= $d['start_class'] ?></td>
                    <td><?= $d['end_class'] ?></td>
                    <td><?= $d['description'] ?></td>
                    <td><a href="edit_lesson.php">Edit</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>

    </table>
</div>