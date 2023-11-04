<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/../vendors/PHPMailer/src/Exception.php';
require __DIR__ . '/../vendors/PHPMailer/src/PHPMailer.php';
require __DIR__ . '/../vendors/PHPMailer/src/SMTP.php';
require_once __DIR__ . '/../config.php';


class Mailer {
    private $subject;
    private $body;
    private $address;

    public function sendEmail() {
        $phpmailer = new PHPMailer();

        try {
            //Server settings
            $phpmailer->isSMTP();
            $phpmailer->Host = HOST_SMTP;
            $phpmailer->SMTPAuth = true;
            $phpmailer->Port = PORT_SMTP;
            $phpmailer->Username = USERNAME_SMTP;
            $phpmailer->Password = PASSWORD_SMTP;

            //Recipients
            $phpmailer->setFrom('info@mailtrap.io', 'Mailtrap');
            $phpmailer->addAddress('recipient1@mailtrap.io', 'Tim');

            //Content
            $phpmailer->isHTML(true);
            $phpmailer->Subject = $this->subject;
            $phpmailer->Body    = $this->body;
            $phpmailer->CharSet = 'UTF-8';

            $phpmailer->send();
            return "Mensaje enviado";
        } catch (Exception $e) {
            echo "El mensaje no pudo ser enviado. Mailer Error: {$phpmailer->ErrorInfo}";
        }
    }

    public function setAddress($newAddress) {
        $this->address = $newAddress;
    }

    public function setBody($newBody) {
        $this->body = $newBody;
    }

    public function setSubject($newSubject) {
        $this->subject = $newSubject;
    }
}