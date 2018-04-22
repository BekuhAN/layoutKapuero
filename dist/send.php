<meta charset="UTF-8" />
<?php
if (isset($_POST['name'])) {$name = $_POST['name']; if ($name == '') {unset($name);}}
if (isset($_POST['phone'])) {$phone = $_POST['phone']; if ($phone == '') {unset($phone);}}
  
if (isset($name) && isset($phone)){
  
$temma = "Запись на занятие ";
$address = "bekuh988@rambler.ru";
$mes = "Тема: $temma \nИмя: $name \nТелефон: $phone";
$headers = "From: <info@your_site_mail.ru\r\n"; 
$send = mail ($address,$temma,$mes,$headers);
if ($send == 'true'){
	echo "Сообщение отправлено";
	}
	else {
		echo "Ой, что-то пошло не так";}
	}
	else {
		echo "Заполните все поля";
	}
?>