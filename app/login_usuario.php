<?php
    session_destroy();
    session_start();
    require_once '../classes/repositorioUsuario.php'; 
    $repositorio = new RepositorioUsuariosMySQL();
   
    $nome_usuario = $_POST['nome']; 
    $senha_usuario = $_POST['senha']; 

    $senha = $repositorio->VerifSenha($nome_usuario);
 
    $numeroLinhas = $repositorio->LoginUsuario($nome_usuario);
    if($numeroLinhas > 0){
        if(password_verify($senha_usuario, $senha)){
            $id_usuario = $repositorio->GuardaID($nome_usuario);
            $_SESSION['nome_usuario'] = $nome_usuario;
            $_SESSION['id_usuario'] = $id_usuario;
            $_SESSION['senha_usuario'] = $_POST['senha'];
            header('Location: perfil.php');
        } else {  
            $_SESSION['msg']= "Login invalido!!!!";
            header('Location: login.php');
        }
    } else {  
        $_SESSION['msg']= "Login invalido!!!!";
        header('Location: login.php');
}

?>