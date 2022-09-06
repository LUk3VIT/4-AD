<?php

    session_start();
    require_once '../classes/repositorioUsuario.php';
    $repositorio = new RepositorioUsuariosMySQL();

    $email_dig = $_POST['email'];

    $numeroLinhas = $repositorio->VerificarEmail($email_dig);
    if($numeroLinhas > 0){
        $nova_senha = password_hash(rand(0,1000), PASSWORD_DEFAULT);
        $redefinir = $repositorio->RedefinirSenha($email_dig,$nova_senha);
        mail('unendingdarkness@gmail.com','Nova Senha','Aqui está a nova senha temporária: '.$nova_senha.' LEMBRE-SE!!! É UMA SENHA TEMPORÁRIA, ASSIM QUE POSSÍVEL MUDAR A SENHA PARA UMA QUE SEJA FÁCIL AO USUÁRIO','From: '.$email_dig);
    } else {
        $mensagem = "Email invalido!!!!";  
        $_SESSION['mensagem']=$mensagem;
        header('Location: esq_senha.php');
    }

?>