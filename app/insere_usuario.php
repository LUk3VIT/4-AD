<?php

session_start();





//if(isset($_POST['verificar'])){
    //if($_POST['verificar'] == $_SESSION['codigo']){
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
                $_SESSION['email_usuario'] = $_POST['email'];
                $_SESSION['nome_usuario'] = $_POST['nome'];              
                header('Location: perfil.php');
            } else {
                unset($_SESSION['nome_usuario']);
                unset($_SESSION['email_usuario']);
                unset($_SESSION['senha_usuario']);
                $_SESSION['msg'] = "Nome de usuário não disponível, tente outro!!!";
                header('Location: cadastro.php');
            }
    //} else {
    //    $_SESSION['msg'] = "Código de verificação não válido!!!";
    //    header('Location: cadastro.php');
    //}
    
//} else {
//    header('Location: verificar_email.php');
//}


