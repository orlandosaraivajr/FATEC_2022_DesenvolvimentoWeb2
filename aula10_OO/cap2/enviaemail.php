<?php
require_once 'PHPMailer.php';
require_once 'classes/PHPMailerAdapter.php';
$mail = new PHPMailerAdapter;
$mail->setUseSmtp();
$mail->setSmtpHost('smtp.gmail.com', 465);
$mail->setSmtpUser('usuario@gmail.com', 'minhasenha');
$mail->setFrom('usuario@gmail.com',     'Meu nome');
$mail->addAddress('destinatario@gmail.com',  'Destinatário');
$mail->setSubject('Oi Cara');
$mail->setHtmlBody('<b>Isso é um <i>teste</i></b>');
$mail->send();
