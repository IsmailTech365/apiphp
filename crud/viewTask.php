<?php 
include "../connect/connect.php";

$alldata =array();

$alldata['status']='success';
$task = getAllData('tasks_data',null,null,false);
$alldata['data']=$task;
echo json_encode($alldata);
