<?php

// يستعمل هذا الكود لإرسال إيميل ٍ
$to = "ismail@mail.ru";
$title = "Hello Ismail";
$body = "I am Omar How are You Tody ?";
$header ="From: support@mail.ru"."\n"."CC: Mostfa@mail.ru";

mail($to,$title,$body,$header);



