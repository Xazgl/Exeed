<?php

$to = "UriyAPKOHT@yandex.ru"; // емайл получателя данных из формы
$main = "Форма обратной связи"; // тема полученного емайла
$message = "Имя:" . $_POST['name'] . "<br>";//присвоить переменной значение, полученное из формы name=name
$message = "Номер телефона:" . $_POST['phone'] . "<br>"; //полученное из формы name=phone
$headers = 'MIME-Version: 1.0' . "\r\n"; // заголовок соответствует формату плюс символ перевода строки
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n"; // указывает на тип посылаемого контента
mail($to, $main, $message, $headers); //отправляет получателю на емайл значения переменных

?>
