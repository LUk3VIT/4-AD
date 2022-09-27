<?php

session_start();
require_once '../classes/repositorioUsuario.php';
$repositorio = new RepositorioUsuariosMySQL();
 
$nome_usuario = $_POST['nome']; 
$email_usuario = $_POST['email'];  
$senha_usuario = password_hash($_POST['senha'], PASSWORD_DEFAULT);

    $numeroLinhas = $repositorio->VerificarNome($nome_usuario);
    if($numeroLinhas < 1){
        $Usuario = new Usuario($nome_usuario,NULL,$email_usuario,$senha_usuario,NULL);
        $cadastra_usuario = $repositorio->CadastraUsuario($Usuario);
        $numeroLinhas = $repositorio->LoginUsuario($nome_usuario,$senha_usuario);
        $id_usuario = $repositorio->GuardaID($nome_usuario,$senha_usuario);
        $_SESSION['id_usuario'] = $id_usuario;
        $_SESSION['senha_usuario'] = $_POST['senha'];
        header('Location: perfil.php');
    } else {
        $_SESSION['mensagem'] = "Nome de usuário não disponível, tente outro!!!";
    }
