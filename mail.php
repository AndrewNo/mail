<?php
require_once "vendor/autoload.php";

if ($_POST) {
    $mail = new PHPMailer();

    $mail->isSMTP();

    $mail->Host = "smtp.ukr.net";
    $mail->SMTPAuth = true;
    $mail->Username = "тут был мой эл. ящик для проверки";
    $mail->Password = "тут был пароль от моего ящика";
    $mail->SMTPSecure = "ssl";
    $mail->Port = 465;


    $mail->CharSet = "UTF-8";
    $mail->setFrom('andrew86@ukr.net');

    $mail->addAddress($_POST['email_to'], "For Me");
    if ($_POST['copy']) {
        $mail->addCC($_POST['copy']);
    }

    $mail->isHTML(true);

    $mail->Subject = $_POST['subject'];

    $mail->Body = $_POST['message'];
    if ($_FILES) {
        if (!empty($_FILES['files']['tmp_name'])) {

            $i = 0;
            foreach (($_FILES['files']['tmp_name']) as $tmp_file) {
                move_uploaded_file($tmp_file, 'files/' . $_FILES['files']['name'][$i]);
                $file = dirname(dirname(__FILE__)) . '/files/' . $_FILES['files']['name'][$i];

                $mail->addAttachment($file);
                $i++;

            }
        }


    }


    if ($mail->send()) {
        echo "Message sent";

    } else {
        echo "Can not send message";

    }
} else {
    return false;
}

