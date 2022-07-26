<?php

require_once '../classes/repositorioUsuario.php';
$repositorio = new RepositorioUsuariosMySQL();

$nome_usuario =$_POST['nome'];
$email_usuario = $_POST['email']; 
$senha_usuario = $_POST['senha'];

    $Usuario = new Usuario($nome_usuario,NULL,$email_usuario,$senha_usuario,NULL);
    $cadastra_usuario = $repositorio->CadastraUsuario($Usuario);
    header('Location: login.php');
