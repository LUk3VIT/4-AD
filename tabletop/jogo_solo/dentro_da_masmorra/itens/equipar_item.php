<?php

session_start();
require_once '../../../classes/repositorioTabletop.php'; 
$repositorio = new RepositorioTabletopMySQL();

$id = $_SESSION['turno'];

$personagem = $repositorio->MostrarPersonagem($id);
foreach ($personagem as $key) {
    $classe = $key['classe'];
    $item = $_GET['item'];
    $numeroLinhas = $repositorio->VerificarArmaClasse($classe,$item);
    if($numeroLinhas > 0){
        echo $_SESSION['erro'] = "Seu personagem não pode equipar itens iguais esse!!!";
        header('Location: ../tabletop.php');
        exit;
    }
}

if($_SESSION['turno'] == $_SESSION['personagem1']){
    $a = "1";
} else if($_SESSION['turno'] == $_SESSION['personagem2']){
    $a = "2";
} else if($_SESSION['turno'] == $_SESSION['personagem3']){
    $a = "31";
} else if($_SESSION['turno'] == $_SESSION['personagem4']){
    $a = "4";
}

if($_GET['item'] == "armadura de malha" || $_GET['item'] == "armadura de aço"){
    if($_SESSION["armadura_personagem$a"] != "N" || $_SESSION["armadura_personagem$a"] != NULL){
        $_SESSION["armadura_personagem$a"] = $_GET['item'];
        header("Location: ../passar_turno.php?id=$id");
    } else {
        $_SESSION['erro'] = "Você já tem uma armadura equipada!! Desequipe a atual para poder equipar essa";
        header('Location: ../tabletop.php');
    }
} else if($_GET['item'] == "martelo de guerra" || $_GET['item'] == "espada montante" || $_GET['item'] == "arco"){
    if($_SESSION["arma1_personagem$a"] == NULL && $_SESSION["arma2_personagem$a"] == NULL){
        $_SESSION["arma1_personagem$a"] = $_GET['item'];
        header("Location: ../passar_turno.php?id=$id");
    } else {
        $_SESSION['erro'] = "Esse item é uma arma de duas mãos, para equipa-lo precisa-se desequipar todas as armas equipadas";
        header('Location: ../tabletop.php');
    }
} else {
    if($_SESSION["arma1_personagem$a"] == NULL){
        echo $_SESSION["arma1_personagem$a"] = $_GET['item'];
        header("Location: ../passar_turno.php?id=$id");
    } else if($_SESSION["arma2_personagem$a"] == NULL){
        $_SESSION["arma2_personagem$a"] = $_GET['item'];
        header("Location: ../passar_turno.php?id=$id");
    } else {
        echo $_SESSION['erro'] = "Você tem dois itens equipados, desequipe um deles para equipar esse item";
        header('Location: ../tabletop.php');
    }
}





?>