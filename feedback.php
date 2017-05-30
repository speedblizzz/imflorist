<?php
        $txtname = trim($_POST['txtname']);

        $txtemail = trim($_POST['txtemail']);

        $txtphone = trim($_POST['txtphone']);

        $txtmessage = trim($_POST['txtmessage']);

        // от кого
        $fromMail = $txtemail;
        $fromName = $txtname;

        // Сюда введите Ваш email
        $emailTo = 'we.florists@gmail.com';

        $subject = 'Форма обратной связи';
        $subject = '=?utf-8?b?'. base64_encode($subject) .'?=';
        $headers = "Content-type: text/plain; charset=\"utf-8\"\r\n";
        $headers .= "From: ". $fromName ." <". $fromMail ."> \r\n";

        // тело письма
        $body = "Получено письмо с сайта ImFlorist.ru\n\nИмя: $txtname\nТелефон: $txtphone\ne-mail: $txtemail \nСообщение: $txtmessage";
        $mail = mail($emailTo, $subject, $body, $headers, '-f'. $fromMail );


        echo 'ok';
?>