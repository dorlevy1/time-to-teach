<?php

require_once '../../Model/Calendar.php';

$calendar = new Calendar();

var_dump($calendar->fetchAllClasses());

?>

<div class="contaner-table">
    <table border="1">
        <thead>
            <tr>
                <th>id</th>
                <th>start</th>
                <th>end</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td></td>
            </tr>
            
        </tbody>
    </table>
</div>