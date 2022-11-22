<?php
session_start();

require_once('esquece_a_senha/src/PHPMailer.php');
require_once('esquece_a_senha/src/SMTP.php');
require_once('esquece_a_senha/src/Exception.php');

use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\SMTP; 
use PHPMailer\PHPMailer\Exception;

if(isset($_SESSION['email_usuario'])){

} else {
    header('Location: cadastro.php');
}

    $_SESSION['codigo'] = rand(1000,4000);
    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.office365.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'unending_darkness@outlook.com';
        $mail->Password = '4ad_2022';
        $mail->Port = 587;
    
        $mail->setFrom('unending_darkness@outlook.com');
        $mail->addAddress($_SESSION['email_usuario']);
    
        $mail->isHTML(true);
        $mail->Subject = 'CODIGO PARA VERIFICAR EMAIL';
        $mail->Body = 'Codigo: '.$_SESSION['codigo'];
    
        if($mail->send()) {
            header('Location: codigo_verif.php');
        } else {
            echo 'Email nao enviado';
        }
    } catch (Exception $e) {
        echo "Erro ao enviar mensagem: {$mail->ErrorInfo}";
    }

?>
