<?php

include "../connect/connect.php";

$code  = filterRequset('id');



$stmt = $con->prepare("SELECT * FROM `employees` WHERE `id` = ?");
$stmt->execute(array($code));

$data = $stmt->fetch(PDO::FETCH_ASSOC);

$count = $stmt->rowCount();

if ($count>0) {
    echo json_encode(array("status"=>"sucsees" , "data" => $data));
} else {
    echo json_encode(array("status"=>"failed"));
}