<?php

include "../Connect/connect.php";

$id = filterRequset('id');

$stmt = $con->prepare("DELETE FROM `tasks_data` WHERE id = ?");
$stmt->execute(array($id));


$count = $stmt->rowCount();

if ($count>0) {
    echo json_encode(array("status"=>"sucsees"));
} else {
    echo json_encode(array("status"=>"failed"));
}