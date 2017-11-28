<?php

$app->get('/', function ($request, $response) {
    return $this->view->render($response, 'home.twig');
})->setName('home');

$app->post('/home/contact', function ($request, $response) {
    $mail = new PHPMailer;

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $mail->setFrom($email, $name);
    $mail->addAddress('jackiepagano@msn.com ');  // Add a recipient
    $mail->addReplyTo($email, $name);

    $mail->isHTML(true);  // Set email format to HTML

    $mail->Subject = 'A new message from' . $name;
    $mail->Body    = "Name: $name <br>" . "Email: $email <br>" . "Message: $message";
    $mail->AltBody = "Name: $name\r\n" . "Email: $email\r\n" . "Message: $message";
})->setName('home.contact');