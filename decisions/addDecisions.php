<?php

include "../Connect/connect.php";

$num        = filterRequset("numdecisions");
$date       = filterRequset("date");
$decisions  = filterRequset("title");


$stmt = $con->prepare("INSERT INTO `decisions`(`numdecisions`, `date`, `title`) VALUES (?,?,?)");
$stmt->execute(array($num,$date,$decisions));


$count = $stmt->rowCount();

if ($count>0) {
    echo json_encode(array("status"=>"sucsees"));
} else {
    echo json_encode(array("status"=>"failed"));
}