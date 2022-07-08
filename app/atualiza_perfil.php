<?php

require_once '../classes/repositorioUsuario.php';
$repositorio = new RepositorioUsuariosMySQL();

$nome_usuario =$_POST['nome']; 
$nick_usuario = $_POST['nick'];
$email_usuario = $_POST['email']; 
$senha_usuario = $_POST['senha'];
$bio_usuario = $_POST['bio'];



    $Usuario = new Usuario($nome_usuario,$nick_usuario,$email_usuario,$senha_usuario,$bio_usuario);
    $atualiza_perfil = $repositorio->atualizarPerfil($Usuario);
    header('Location: ../perfil.php');
 