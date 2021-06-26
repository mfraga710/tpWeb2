<?php

require_once(DIR_BASE.'vendor/autoload.php');
require_once(DIR_BASE.'config/mail.php');

function sendMail($data){
    $transport = (new Swift_SmtpTransport($GLOBALS['mail_smtp_addr'],$GLOBALS['mail_smtp_port']))
    ->setUsername($GLOBALS['mail_smtp_user'])
    ->setPassword($GLOBALS['mail_smtp_pass']);

    $mailer = new Swift_Mailer($transport);

    $message = (new Swift_Message('Contacto desde el carrito'))
    ->setFrom([$data['email'] =>$data['name']])
    ->setTo([$GLOBALS['mail_smtp_user'] => 'Formulario de contacto de carrito'])
    ->setBody(processMailBody($data))
    ->setContentType("text/html");

    var_dump($message);
   // return $mailer->send($message);
}

    function processMailBody($data){
    $body = file_get_contents(DIR_BASE.'contact.html');
    foreach($data as $key=>$value){
        $body= str_replace("{".$key."}",$value,$body);
        
    }
    return $body;
}









