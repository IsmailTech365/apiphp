<?php

include "../connect/connect.php";


$code    =  filterRequset('code');
$numvac  =  filterRequset('num_vac');
$name    =  filterRequset('name');
$dep     =  filterRequset('departement');
$Pos     =  filterRequset('position');
$type    =  filterRequset('type_vac');
$startd  =  filterRequset('date_vac');
$time    =  filterRequset('time');
$Period  =  filterRequset('Period');

$stmt = $con->prepare("INSERT INTO `vacations` (`code`,`num_vac`,`name`,`departement`,`position`,`type_vac`,`date_vac`,`time`,`Period`) VALUES (?,?,?,?,?,?,?,?,?)");
$stmt->execute(array($code,$numvac,$name,$dep,$Pos,$type,$startd,$time,$Period));
$count = $stmt->rowCount();
if ($count>0) {
    echo json_encode(array("status"=>"sucsees"));
} else {
    echo json_encode(array("status"=>"failed"));
}
