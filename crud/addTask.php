<?php 
include "../connect/connect.php";

$table ='tasks_data';

$id           = filterRequset("id");
$code         = filterRequset("code");
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


$data  = array(
"id" => $id,
"code"=>$code,
"Name"=>$name,
"Department"=>$depart,
"Date"=>$date,
"Target"=>$target,
"Destination"=>$destination,
"Team"=>$team, 
"Supoort"=>$supoort,
"Point"=>$point,
"Driver"=>$driver,
"security"=>$secu,
"administrator"=>$admin,
"HR"=>$hr,
);

insertData($table,$data);
