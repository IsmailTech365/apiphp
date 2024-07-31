<?php
include "../connect/connect.php";
$id = filterRequset('id');
$pass = filterRequset('Password');
$stmt = $con->prepare("SELECT * FROM `employees` WHERE `id` = ? AND `Password` = ? ");
$stmt->execute(array($id, $pass));
$data = $stmt->fetch(PDO::FETCH_ASSOC);
$count = $stmt->rowCount();
if ($count > 0) {
echo json_encode(array("status" => "sucsees", "data" => $data));
} else {
echo json_encode(array("status" => "failed"));
}
?>