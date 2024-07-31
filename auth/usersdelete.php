<?php

include "../Connect/connect.php";

$id       = filterRequset('id');
$filename = filterRequset('image_name');

$stmt = $con->prepare("DELETE FROM `employees` WHERE id = ?");
$stmt->execute(array($id));


$count = $stmt->rowCount();

if ($count>0) {
    deleteFile('../upload/', $filename);
    echo json_encode(array("status"=>"sucsees"));
} else {
    echo json_encode(array("status"=>"failed"));
}