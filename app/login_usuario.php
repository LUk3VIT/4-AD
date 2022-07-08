<?php

    require_once '../classes/repositorioUsuario.php';
    $repositorio = new RepositorioUsuariosMySQL();

    $nome_usuario = $_POST['nome'];
    $senha_usuario = $_POST['senha'];

    $numeroLinhas = $repositorio->LoginUsuario($nome_usuario,$senha_usuario);
    if($numeroLinhas < 1){
        header('Location: ../perfil.php');
    } else {
        session_start();
        $mensagem = "Login inválido!!!!";
        $_SESSION['mensagem']=$mensagem;
        header('Location: cadastro.php');
}

?>