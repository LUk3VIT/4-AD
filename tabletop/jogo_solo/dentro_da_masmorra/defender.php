<?php

session_start();
require_once '../../classes/repositorioTabletop.php'; 
$repositorio = new RepositorioTabletopMySQL();

unset($_SESSION['mensagem']);
unset($_SESSION['vida_perdida']);



$id = $_GET['id'];
if($id == $_SESSION['personagem1']){
    $a = "1";
} else if($id == $_SESSION['personagem2']){
    $a = "2";
} else if($id == $_SESSION['personagem3']){
    $a = "3";
} else {
    $a = "4";
}
$vida = $_SESSION["vida_atual_personagem$a"];

// Bônus de defesa
$personagem = $repositorio->MostrarPersonagem($id);
foreach ($personagem as $key) {
    $classe = $key['classe'];
    $nivel = $key['nivel'];
    $defesa = $key['defesa'];
    if($defesa == "+Nível"){
        $bonus_defesa = $nivel;
    } else {
        $bonus_defesa = 0;
    }
}

// DADO
$dado = rand(1,6);

// Bonus Equipamento
if(strtolower($_SESSION["armadura_personagem$a"]) == "armadura de malha"){
    $bonus_equipamento = 1;
} else if(strtolower($_SESSION["armadura_personagem$a"]) == "armadura de aço"){
    $bonus_equipamento = 2;
} else {
    $bonus_equipamento = 0;
}

if(strtolower($_SESSION["arma1_personagem$a"]) == "escudo" || strtolower($_SESSION["arma2_personagem$a"]) == "escudo"){
    $bonus_equipamento = $bonus_equipamento + 1;
}

// Bonus classe
if($classe == "Anão"){
    if($_SESSION['nome_monstro'] == "Trolls"){
        $bonus_classe = 1;
    }
} else if($classe = "Halfling"){
    if($_SESSION['nome_monstro'] == "Trolls"){
        $bonus_classe = 1;
    }
}



if(isset($bonus_classe)){
    $_SESSION['defesa_total'] = $defesa = $dado + $bonus_defesa + $bonus_equipamento + $bonus_classe;
    $_SESSION['bonus'] = $bonus_defesa + $bonus_equipamento + $bonus_classe;
} else {
    $_SESSION['defesa_total'] = $defesa = $dado + $bonus_defesa + $bonus_equipamento;
    $_SESSION['bonus'] = $bonus_defesa + $bonus_equipamento + $bonus_classe;
}

if($dado == 1){
    $_SESSION["vida_atual_personagem$a"] = $_SESSION["vida_atual_personagem$a"] - 1;
    if($_SESSION['nome_monstro'] == "Ratos"){
        $chance = rand(1,6);
        if($chance == 1){
            $_SESSION["vida_atual_personagem$a"] = $_SESSION["vida_atual_personagem$a"] - 1;
            $_SESSION['efeito_bonus'] = true;
        }
    } else if($_SESSION['nome_monstro'] == "Centopéia Gigante"){
        $chance = rand(1,6);
        if($chance > 2){

        } else {
            $_SESSION["vida_atual_personagem$a"] = $_SESSION["vida_atual_personagem$a"] - 1;
            $_SESSION['efeito_bonus'] = true;
        }
    }

    $_SESSION['vida_perdida'] = $vida - $_SESSION["vida_atual_personagem$a"];
    $_SESSION['defesa'] = true;
    $_SESSION['defensor'] = $id;
    $_SESSION['monstros_defender'] = $_SESSION['monstros_defender'] - 1;
    $_SESSION['mensagem'] = "Tirou 1 no dado!!!";
    header('Location: tabletop.php');
    exit;
}


if(isset($_SESSION["proteger_personagem$a"])){
    $_SESSION['defesa_total'] = $defesa = $defesa + 1;
    $_SESSION['bonus'] = $_SESSION['bonus'] + 1;
}

if($defesa > $_SESSION['nivel_monstro'] || $dado == 6){
    $_SESSION['defesa'] = true;
    $_SESSION['dado'] = $dado;
    $_SESSION['defensor'] = $id;
    $_SESSION['monstros_defender'] = $_SESSION['monstros_defender'] - 1;
    header('Location: tabletop.php');
    exit;
} else {
    $_SESSION["vida_atual_personagem$a"] = $_SESSION["vida_atual_personagem$a"] - 1;
    if($_SESSION['nome_monstro'] == "Ratos"){
        $chance = rand(1,6);
        if($chance == 1){
            $_SESSION["vida_atual_personagem$a"] = $_SESSION["vida_atual_personagem$a"] - 1;
            $_SESSION['efeito_bonus'] = true;
        }
    } else if($_SESSION['nome_monstro'] == "Centopéia Gigante"){
        $chance = rand(1,6);
        if($chance > 2){

        } else {
            $_SESSION["vida_atual_personagem$a"] = $_SESSION["vida_atual_personagem$a"] - 1;
            $_SESSION['efeito_bonus'] = true;
        }
    } else if($_SESSION['nome_monstro'] == "Povo Fungo"){
        $chance = rand(1,6);
        if($chance > 3){

        } else {
            $_SESSION["vida_atual_personagem$a"] = $_SESSION["vida_atual_personagem$a"] - 1;
            $_SESSION['efeito_bonus'] = true;
        }
    }
}

$_SESSION['vida_perdida'] = $vida - $_SESSION["vida_atual_personagem$a"];
$_SESSION['defesa'] = true;
$_SESSION['defensor'] = $id;
$_SESSION['monstros_defender'] = $_SESSION['monstros_defender'] - 1;
header('Location: tabletop.php');



?>