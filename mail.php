<?php
$txt = "hello";

// 以下的邮箱地址改成你的
$mail = 'anjingdelonglong@gmail.com';  

// 发送邮件
mail($mail, "My subject", $txt);

echo 'message was sent!';
?>