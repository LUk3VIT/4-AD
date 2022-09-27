<?php

require_once('src/PHPMailer.php');
require_once('src/SMTP.php');
require_once('src/Exception.php');
 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP; 
use PHPMailer\PHPMailer\Exception;

if(isset($_POST['email'])){

} else {
	header('Location: ../login.php');
}

session_start();
require_once '../../classes/repositorioUsuario.php';
$repositorio = new RepositorioUsuariosMySQL();

$email_dig = $_POST['email'];
$numeroLinhas = $repositorio->VerificarEmail($email_dig);
if($numeroLinhas > 0){
	$senha = md5(rand(0,200));
	$nova_senha = password_hash($senha, PASSWORD_DEFAULT);
	$redefinir = $repositorio->RedefinirSenha($email_dig,$nova_senha);

	$mail = new PHPMailer(true);
 
	try {
		$mail->SMTPDebug = SMTP::DEBUG_SERVER;
		$mail->isSMTP();
		$mail->Host = 'smtp.office365.com';
		$mail->SMTPAuth = true;
		$mail->Username = 'unending_darkness@outlook.com';
		$mail->Password = '4ad_2022';
		$mail->Port = 587;
	
		$mail->setFrom('unending_darkness@outlook.com');
		$mail->addAddress($email_dig);
	
		$mail->isHTML(true);
		$mail->Subject = 'SUA NOVA SENHA';
		$mail->Body = 'Sua nova Senha: '.$senha.'. Lembre-se de alterar ela assim  que possivel!!!!';
	
		if($mail->send()) {
			header('Location: ../login.php');
		} else {
			echo 'Email nao enviado';
		}
	} catch (Exception $e) {
		echo "Erro ao enviar mensagem: {$mail->ErrorInfo}";
	}
} else {
	header('Location: ../login.php');
}

?>