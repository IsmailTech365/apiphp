<?php

include "../Connect/connect.php";


$id           = filterRequset('id');
$date         = filterRequset("Date");
$target       = filterRequset("Target");
$team         = filterRequset("Team");
$destination  = filterRequset("Destination");
$point        = filterRequset("Point");
$supoort      = filterRequset("Supoort");



$stmt = $con->prepare("UPDATE `tasks_data` SET `Date`=?,`Target`=?,`Destination`=?,`Point`=?,`Team`=?,`Supoort`=? WHERE `id` = ?");
$stmt->execute(array($date,$target,$destination,$point,$team,$supoort,$id));


$count = $stmt->rowCount();

if ($count>0) {
    echo json_encode(array("status"=>"sucsees"));
} else {
    echo json_encode(array("status"=>"failed"));
}