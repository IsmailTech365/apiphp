<?php

include "../connect/connect.php";


$id      =  filterRequset('id');
$img     =  uploadfile('file');

if ($img != 'null') {
$stmt = $con->prepare("INSERT INTO `employees`(`id`,`image_name`) VALUES (?,?)");
$stmt->execute(array($id,$img));
$count = $stmt->rowCount();
if ($count>0) {
    echo json_encode(array("status"=>"sucsees"));
} else {
    echo json_encode(array("status"=>"failed"));
}
}else{
    echo json_encode(array("status"=>"failed_null"));
}