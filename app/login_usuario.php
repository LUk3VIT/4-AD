<?php

    session_start();
    require_once '../classes/repositorioUsuario.php';
    $repositorio = new RepositorioUsuariosMySQL();
 
    $nome_usuario = $_POST['nome']; 
    $senha_usuario = $_POST['senha'];

    $numeroLinhas = $repositorio->LoginUsuario($nome_usuario,$senha_usuario);
    if($numeroLinhas > 0){
        $id_usuario = $repositorio->GuardaID($nome_usuario,$senha_usuario);
        $_SESSION['id_usuario'] = $id_usuario;
        header('Location: perfil.php');
    } else {
        $mensagem = "Login invalido!!!!";  
        $_SESSION['mensagem']=$mensagem;
        header('Location: cadastro.php');
}

?>