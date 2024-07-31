<?php

include "../connect/connect.php";


$id      =  filterRequset('id');
$name    =  filterRequset('Name');
$dep     =  filterRequset('Departement');
$Pos     =  filterRequset('Position');
$pass    =  filterRequset('Password');
$img     =  uploadfile('file');

if ($img != 'null') {
$stmt = $con->prepare("INSERT INTO `employees`(`id`, `Name`, `Departement`,`Position`,`Password`,`image_name`) VALUES (?,?,?,?,?,?)");
$stmt->execute(array($id,$name,$dep,$Pos,$pass,$img));
$count = $stmt->rowCount();
if ($count>0) {
    echo json_encode(array("status"=>"sucsees"));
} else {
    echo json_encode(array("status"=>"failed"));
}
}else{
    echo json_encode(array("status"=>"failed_null"));
}