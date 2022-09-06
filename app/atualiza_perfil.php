<?php

require_once '../classes/repositorioUsuario.php';
$repositorio = new RepositorioUsuariosMySQL(); 
session_start();

$nome_usuario =$_POST['nome']; 
$nick_usuario = $_POST['nick'];
$email_usuario = $_POST['email']; 
$senha_usuario = password_hash($_POST['senha'], PASSWORD_DEFAULT);
$bio_usuario = $_POST['bio'];

$id_usuario = $_SESSION['id_usuario'];
    
        $numeroLinhas = $repositorio->VerificarNick($nick_usuario);
        if($numeroLinhas < 1){
            $Usuario = new Usuario($nome_usuario,$nick_usuario,$email_usuario,$senha_usuario,$bio_usuario);
            $atualiza_perfil = $repositorio->atualizarPerfil($Usuario, $id_usuario);
            header('Location: perfil.php');
        } else {
            $_SESSION['mensagem'] = "Nick não disponível, tente outro!!!";
            header('Location: perfil-edit.php');
        }
 