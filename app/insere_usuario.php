<?php

session_start();

if(isset($_SESSION['nome_usuario'])){
    if(isset($_SESSION['email_usuario'])){
        if(isset($_SESSION['senha_usuario'])){

        } else {
            $_SESSION['senha_usuario'] = $_POST['senha']; 
        }
    } else {
        $_SESSION['email_usuario'] = $_POST['email'];
    }
} else {
    $_SESSION['nome_usuario'] = $_POST['nome'];
}




if(isset($_POST['verificar'])){
    if($_POST['verificar'] == $_SESSION['codigo']){
        require_once '../classes/repositorioUsuario.php';
        $repositorio = new RepositorioUsuariosMySQL(); 
        
        $nome_usuario = $_SESSION['nome_usuario'];  
        $email_usuario = $_SESSION['email_usuario'];  
        $senha_usuario = password_hash($_SESSION['senha_usuario'], PASSWORD_DEFAULT);

            $numeroLinhas = $repositorio->VerificarNome($nome_usuario);
            if($numeroLinhas < 1){
                $Usuario = new Usuario($nome_usuario,NULL,$email_usuario,$senha_usuario,NULL);
                $cadastra_usuario = $repositorio->CadastraUsuario($Usuario);
                $numeroLinhas = $repositorio->LoginUsuario($nome_usuario,$senha_usuario);
                $id_usuario = $repositorio->GuardaID($nome_usuario,$senha_usuario);
                $_SESSION['id_usuario'] = $id_usuario;
                header('Location: perfil.php');
            } else {
                echo "OI";
                exit;
                $_SESSION['msg'] = "Nome de usuário não disponível, tente outro!!!";
                header('Location: cadastro.php');
            }
    } else {
        $_SESSION['msg'] = "Código de verificação não válido!!!";
        header('Location: cadastro.php');
    }
    
} else {
    header('Location: verificar_email.php');
}


