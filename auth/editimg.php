<?php

include "../connect/connect.php";


$id      =  filterRequset('id');
$img     =  filterRequset('image_name');

// هنا قام بالتأكد هل انه تم رفع ملف جديد 
// في حال رفع ملف جديد سيدخل هنا
if (isset($_FILES['file'])) {
deleteFile('../upload/',$img); // سيقوم بحذف الصورة القديمة
$img = uploadfile('file'); // ويضيف هنا الصورة الجديدة
}


$stmt = $con->prepare("UPDATE `employees` SET `image_name`= ? WHERE `id`= ? ");
$stmt->execute(array($img,$id));
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
$count = $stmt->rowCount();
if ($count>0) {
    echo json_encode(array("status"=>"sucsees" , "data" => $data ));
} else {
    echo json_encode(array("status"=>"failed"));
}