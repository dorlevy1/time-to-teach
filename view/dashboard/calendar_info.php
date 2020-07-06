<?php

require_once '../../Model/Calendar.php';
$calendar = new Calendar();
$data =json_decode($calendar->fetchAllClasses());
print_r($data)

?>

<div class="">
    <table border="1">
    
        <thead>
            <tr>
                <th>id</th>
                <th>start</th>
                <th>end</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($data as $d):?>
            <tr>
                <td><?= $d->title?> </td>
            </tr>
            <?php endforeach;?>
        </tbody>
        
    </table>
</div>