<?php
$fio = $_POST['fio'];
$number = $_POST['number'];
$fio = htmlspecialchars($fio);
$number = htmlspecialchars($number);
$fio = urldecode($fio);
$number = urldecode($number);
$fio = trim($fio);
$number = trim($number);
if (mail("reksadorus@gmail.com", "Заявка с сайта", "ФИО:".$fio.". E-mail: ".$number ,"From: reksadorus@gmail.com \r\n"))
 {     header('Location: index.html'); 
} else { 
    echo "при отправке сообщения возникли ошибки";
}?>