<?php
$name = $_POST['name'];
$mess = $_POST['mess'];
$email = 'example@gmail.com';

$to = "tgaccbot@gmail.com";
$date = date("d.m.Y");
$time = date("h:i");
$from = $email;
$subject = "Заявка c сайта";


$msg = "
    Имя: $name /n
    Текст: $mess /n";
mail($to, $subject, $msg, "From: $from ");

?>