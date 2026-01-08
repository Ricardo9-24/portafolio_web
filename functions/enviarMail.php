<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require '../lib/PHPMailer/src/Exception.php';
require '../lib/PHPMailer/src/PHPMailer.php';
require '../lib/PHPMailer/src/SMTP.php';
$mail = new PHPMailer(true);

try {
    $from = (isset($_POST['email'])) ? $_POST['email'] : '';
    $nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : '';
    $mensaje = (isset($_POST['mensaje'])) ? $_POST['mensaje'] : '';

    if (empty($from) || empty($nombre) || empty($mensaje)) {
        echo json_encode(['status' => 'error', 'message' => 'Faltan campos obligatorios.']);
        throw new Exception('Faltan campos obligatorios.');
    }

    // print_r($_POST);
    // exit();
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'hernandez12erick@gmail.com';
    $mail->Password   = 'pwqdfbqlcymjfzit';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;
    // $mail->setFrom('hernandez12erick@gmail.com', 'Ricardo Hernandez');
    $mail->setFrom('hernandez12erick@gmail.com', 'Ricardo Hernandez');
    $mail->addAddress('hernandez12erick@gmail.com', 'Ricardo Hernandez');
    $mail->addReplyTo($from, $nombre);
    $mail->isHTML(true);
    $mail->Subject = 'Correo de contacto desde el portafolio';
    $mail->Body  = $mensaje;
    $mail->AltBody = 'Contenido del correo en texto plano para los clientes de correo que no soporten HTML, 
    mensaje enviado desde el portafolio, de: ' . $nombre . ' (' . $from . '): ';
    $mail->send();
    echo json_encode(['status' => 'success', 'message' => 'El mensaje se ha enviado']);
} catch (Exception $e) {
    echo json_encode(['status' => 'error', 'message' => "El mensaje no se ha enviado. Mailer Error: {$mail->ErrorInfo}"]);
}
