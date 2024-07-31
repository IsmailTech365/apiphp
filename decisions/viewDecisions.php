<?php

include "../connect/connect.php";

$stmt = $con->prepare("SELECT * FROM `decisions`");
$stmt->execute(array());

$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

$count = $stmt->rowCount();

if ($count>0) {
    echo json_encode(array("status"=>"sucsees" , "data" => $data));
} else {
    echo json_encode(array("status"=>"failed"));
}