<?php

require_once '../classes/repositorioUsuario.php';
$repositorio = new RepositorioUsuariosMySQL();

$nome_usuario =$_POST['nome'];
$email_usuario = $_POST['email'];
$senha_usuario = $_POST['senha'];

    $Usuario = new Usuario(NULL,$nome_usuario,$email_usuario,$senha_usuario);
    $cadastra_usuario = $repositorio->CadastraUsuario($Usuario);
    header('Location: login.php');
