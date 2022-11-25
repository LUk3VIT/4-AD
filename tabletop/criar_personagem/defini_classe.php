<?php

session_start();
require_once '../classes/repositorioTabletop.php'; 
$repositorio = new RepositorioTabletopMySQL(); 


$nome_pers = $_POST['nome'];
$numeroLinhas = $repositorio->VerificarNome($nome_pers);
if($numeroLinhas > 0){
    $_SESSION['msg'] = "Nome de personagem não disponível, tente outro";
    header('Location: form_pers.php');
} else {
    if(isset($_POST['nome'])){
        $_SESSION['nome_pers'] = $_POST['nome']; 
        $_SESSION['classe'] = $_POST['classe'];
        if(isset($_POST['masculino'])){
            $_SESSION['sexo'] = $_POST['masculino'];
        } else if(isset($_POST['feminino'])){
            $_SESSION['sexo'] = $_POST['feminino'];
        }
        

        header('Location: form_pers.php');
    }
}

?>