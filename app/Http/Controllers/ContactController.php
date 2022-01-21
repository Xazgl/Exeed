<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
class ContactController extends Controller
{
    public function send(Request $request) {

        $name = $request->name;
        $phone = $request->phone;
        $phoneAndName=$name.'  '.$phone;

        $mail = new PHPMailer(true);
        $mail->SMTPDebug = 0;
        $mail->isSMTP();
        $mail->Host = env('EMAIL_HOST');
        $mail->SMTPAuth = 'true';
        $mail->Username = env('EMAIL_USERNAME');
        $mail->Password = env('email_password');
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;
        $mail->setFrom('UriyAPKOHT@yandex.ru','$name');
        $mail->addAddress('UriyAPKOHT@yandex.ru');
        $mail->isHTML(true);
        $mail->Subject = 'Запись на ТО с arkont-exeed.ru';
        $mail-> Body = $phoneAndName;
       $result =  $mail->send();
       if($result) {
           echo 'Заявка отправлена';
       }else{
           echo'error';
       }

        return redirect(route('index'));









    }
}
