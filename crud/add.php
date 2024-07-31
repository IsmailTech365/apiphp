<?php

include "../Connect/connect.php";

$id           = filterRequset('id');
$code         = filterRequset('code');
$name         = filterRequset("Name");
$depart       = filterRequset("Department");
$date         = filterRequset("Date");
$target       = filterRequset("Target");
$team         = filterRequset("Team");
$destination  = filterRequset("Destination");
$point        = filterRequset("Point");
$supoort      = filterRequset("Supoort");
$driver       = filterRequset("Driver");
$secu         = filterRequset("security");
$admin        = filterRequset("administrator");
$hr           = filterRequset("HR");


$stmt = $con->prepare("INSERT INTO `tasks_data`(`id`, `code`, `Name`, `Department`, `Date`, `Target`, `Destination`, `Team`, `Supoort`, `Point`, `Driver`, `security`, `administrator`, `HR`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
$stmt->execute(array($id,$code,$name,$depart,$date,$target,$destination,$team,$supoort,$point,$driver,$secu,$admin,$hr));


$count = $stmt->rowCount();

if ($count>0) {
    echo json_encode(array("status"=>"sucsees"));
} else {
    echo json_encode(array("status"=>"failed"));
}