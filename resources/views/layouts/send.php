<?php
// Подключаем библиотеку PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
require 'PHPMailer/PHPMailer.php';

// Создаем письмо
$mail = new PHPMailer();
$mail->setFrom('UriyAPKOHT@yandex.ru', 'Иван Иванов'); // от кого (email и имя)
$mail->addAddress('UriyAPKOHT@yandex.ru', 'Вася Петров');  // кому (email и имя)
$mail->Subject = 'Тест';                         // тема письма
// html текст письма
$mail->msgHTML("vd");
// Отправляем
if ($mail->send()) {
    echo 'Письмо отправлено!';
} else {
    echo 'Ошибка: ' . $mail->ErrorInfo;
}
