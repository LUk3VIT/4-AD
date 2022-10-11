<?php

require_once '../classes/repositorioUsuario.php';
$repositorio = new RepositorioUsuariosMySQL(); 
session_start();

$nome_usuario =$_POST['nome'];  
$nick_usuario = $_POST['nick'];
$email_usuario = $_POST['email']; 
$senha_usuario = password_hash($_POST['senha'], PASSWORD_DEFAULT);
$bio_usuario = $_POST['bio'];

$id_usuario = $_SESSION['id_usuario'];

// verifica se foi enviado um arquivo
if ( isset( $_FILES[ 'arquivo' ][ 'name' ] ) && $_FILES[ 'arquivo' ][ 'error' ] == 0 ) {
    
    $arquivo_tmp = $_FILES[ 'arquivo' ][ 'tmp_name' ];
    $nome = $_FILES[ 'arquivo' ][ 'name' ];
    // Pega a extensão
    $extensao = pathinfo ( $nome, PATHINFO_EXTENSION );
 
    // Converte a extensão para minúsculo
    $extensao = strtolower ( $extensao );
 
    // Somente imagens, .jpg;.jpeg;.gif;.png
    // Aqui eu enfileiro as extensões permitidas e separo por ';'
    // Isso serve apenas para eu poder pesquisar dentro desta String
    if ( strstr ( '.jpg;.jpeg;.gif;.png', $extensao ) ) {
        // Cria um nome único para esta imagem
        // Evita que duplique as imagens no servidor.
        // Evita nomes com acentos, espaços e caracteres não alfanuméricos
        $novoNome = uniqid ( time () ) . '.' . $extensao;
 
        // Concatena a pasta com o nome 
        $destino = '../assets/img/img_usuario/' . $novoNome;
 
        // tenta mover o arquivo para o destino
        if ( @move_uploaded_file ( $arquivo_tmp, $destino ) ) {
            $numeroLinhas = $repositorio->VerificarImagem($id_usuario);
            if($numeroLinhas > 0){
                $resultado = $repositorio->UploadImagemNova($destino,$id_usuario);
            } else {
                $resultado = $repositorio->UploadImagem($destino,$id_usuario);
            }
            $_SESSION['img_usuario'] = $destino;
        }else{
            echo 'Erro ao salvar o arquivo. Aparentemente você não tem permissão de escrita.<br />';
        }
    }else{
        echo 'Você poderá enviar apenas arquivos "*.jpg;*.jpeg;*.gif;*.png"<br />';
    }
}else{
    echo 'Você não enviou nenhum arquivo!';
    $img = $repositorio->SetarImagemUsuario($id_usuario);
    $_SESSION['img'] = $img;
}


        
        $numeroLinhas = $repositorio->VerificarNickExist($nick_usuario,$id_usuario);
        if($numeroLinhas < 1){
            $numeroLinhas = $repositorio->VerificarNick($nick_usuario);
            if($numeroLinhas < 1){
                $Usuario = new Usuario($nome_usuario,$nick_usuario,$email_usuario,$senha_usuario,$bio_usuario);
                $atualiza_perfil = $repositorio->atualizarPerfil($Usuario, $id_usuario);
                header('Location: perfil.php');
            } else {
                 $_SESSION['mensagem'] = "Nick não disponível, tente outro!!!";
                header('Location: perfil-edit.php');
            }
        } else {
            $Usuario = new Usuario($nome_usuario,$nick_usuario,$email_usuario,$senha_usuario,$bio_usuario);
            $atualiza_perfil = $repositorio->atualizarPerfil($Usuario, $id_usuario);
            header('Location: perfil.php');
        }
        
        