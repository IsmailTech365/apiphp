<?php

include "../connect/connect.php";

$code  = filterRequset('code');



$stmt = $con->prepare("SELECT * FROM `vacations` WHERE `code` = ?");
$stmt->execute(array($code));

$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

$count = $stmt->rowCount();

if ($count>0) {
    echo json_encode(array("status"=>"sucsees" , "data" => $data));
} else {
    echo json_encode(array("status"=>"failed"));
}