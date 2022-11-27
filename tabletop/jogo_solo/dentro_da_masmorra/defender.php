<?php

session_start();
require_once '../../classes/repositorioTabletop.php'; 
$repositorio = new RepositorioTabletopMySQL();

unset($_SESSION['mensagem']);
unset($_SESSION['vida_perdida']);

if(isset($_SESSION['defensor2'])){
    $_SESSION['ataque2'] = true;
}

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
if($_SESSION['nome_boss'] == "Minotauro"){
    if(isset($_SESSION['ataq_touro'])){

    } else {
        $dado = 1;
        $_SESSION['ataq_touro'] = true;
    }
}

// Bonus Equipamento
if(strtolower($_SESSION["armadura_personagem$a"]) == "armadura de malha"){
    $bonus_equipamento = 1;
} else if(strtolower($_SESSION["armadura_personagem$a"]) == "armadura de aço"){
    if(isset($_SESSION['boss']) && $_SESSION['nome_boss'] == "Comedor de Ferro"){
        $bonus_equipamento = 0;
    } else {
        $bonus_equipamento = 2;
    }
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
    if($_SESSION['nome_boss'] == "Ogro"){
        $_SESSION["vida_atual_personagem$a"] = $_SESSION["vida_atual_personagem$a"] - 2;
    } else {
        $_SESSION["vida_atual_personagem$a"] = $_SESSION["vida_atual_personagem$a"] - 1;
    }

    if(isset($_SESSION['dreno_energia'])){
        $chance = rand(1,6);
        if($chance < 4){
            $id = $_SESSION["personagem$a"];
            $personagem = $repositorio->MostrarPersonagem($id);
            foreach ($personagem as $key) {
                $nivel = $key['nivel'];
                $vida = $key['vida'];
            }
            if($vida == $_SESSION["vida_atual_personagem$a"]){
                $_SESSION["vida_atual_personagem$a"] = $_SESSION["vida_atual_personagem$a"] - 1;
            }
            $vida = $vida - 1;
            $nivel = $nivel - 1;
            $upar = $repositorio->UparNivel($id,$nivel,$vida);
        }
    }
    
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
    } else if($_SESSION['nome_boss'] == "Aranha Gigante"){
        $chance = rand(1,6);
        if($chance >= 3){

        } else {
            $_SESSION["vida_atual_personagem$a"] = $_SESSION["vida_atual_personagem$a"] - 1;
            $_SESSION['efeito_bonus'] = true;
        }
    }

    if($_SESSION['nome_boss'] == "Comedor de Ferro"){
        header("Location: comedor_ferro.php?id=$id");
        exit;
    }

    $_SESSION['vida_perdida'] = $vida - $_SESSION["vida_atual_personagem$a"];
    $_SESSION['defesa'] = true;
    $_SESSION['defensor'] = $id;
    if(isset($_SESSION['ataques_defender'])){
        $_SESSION['ataques_defender'] = $_SESSION['ataques_defender'] - 1;
    } else {
        $_SESSION['monstros_defender'] = $_SESSION['monstros_defender'] - 1;
    }
    $_SESSION['mensagem'] = "Tirou 1 no dado!!!";
    header('Location: tabletop.php');
    exit;
} else if(isset($_SESSION['mau_olhado_1']) && $dado < 4){
    $_SESSION["vida_atual_personagem$a"] = $_SESSION["vida_atual_personagem$a"] - 1;
    $_SESSION['vida_perdida'] = $vida - $_SESSION["vida_atual_personagem$a"];
    $_SESSION['defesa'] = true;
    $_SESSION['defensor'] = $id;
    $_SESSION['ataques_defender'] = $_SESSION['ataques_defender'] - 1;
    header('Location: tabletop.php');
    exit;
}


if(isset($_SESSION["proteger_personagem$a"])){
    $_SESSION['defesa_total'] = $defesa = $defesa + 1;
    $_SESSION['bonus'] = $_SESSION['bonus'] + 1;
}

if(isset($_SESSION['mau_olhado_2'])){
    $_SESSION['defesa_total'] = $_SESSION['defesa_total'] - 1;
    $defesa = $defesa -1;
    $_SESSION['bonus'] = $_SESSION['bonus'] - 1;
}


if($defesa > $_SESSION['nivel_monstro'] && $defesa > $_SESSION['nivel_boss'] || $dado == 6){
    $_SESSION['defesa'] = true;
    $_SESSION['dado'] = $dado;
    $_SESSION['defensor'] = $id;
    if(isset($_SESSION['ataques_defender'])){
        $_SESSION['ataques_defender'] = $_SESSION['ataques_defender'] - 1;
    } else {
        $_SESSION['monstros_defender'] = $_SESSION['monstros_defender'] - 1;
    }
    header('Location: tabletop.php');
    exit;
} else {
    if($_SESSION['nome_boss'] == "Comedor de Ferro"){
        header("Location: comedor_ferro.php?id=$id");
        exit;
    }

    if($_SESSION['nome_boss'] == "Ogro"){
        $_SESSION["vida_atual_personagem$a"] = $_SESSION["vida_atual_personagem$a"] - 2;
    } else {
        $_SESSION["vida_atual_personagem$a"] = $_SESSION["vida_atual_personagem$a"] - 1;
    }
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
        if($classe == "Halfling"){
            $chance = $chance + $_SESSION["nivel_personagem$a"];
        }
        if($chance > 3){

        } else {
            $_SESSION["vida_atual_personagem$a"] = $_SESSION["vida_atual_personagem$a"] - 1;
            $_SESSION['efeito_bonus'] = true;
        }
    }

    if(isset($_SESSION['dreno_energia'])){
        $chance = rand(1,6);
        if($chance < 4){
            $id = $_SESSION["personagem$a"];
            $personagem = $repositorio->MostrarPersonagem($id);
            foreach ($personagem as $key) {
                $nivel = $key['nivel'];
                $vida = $key['vida'];
            }
            if($vida == $_SESSION["vida_atual_personagem$a"]){
                $_SESSION["vida_atual_personagem$a"] = $_SESSION["vida_atual_personagem$a"] - 1;
            }
            $vida = $vida - 1;
            $nivel = $nivel - 1;
            $upar = $repositorio->UparNivel($id,$nivel,$vida);
        }
    }
}

$_SESSION['vida_perdida'] = $vida - $_SESSION["vida_atual_personagem$a"];
$_SESSION['defesa'] = true;
$_SESSION['defensor'] = $id;
if(isset($_SESSION['ataques_defender'])){
    $_SESSION['ataques_defender'] = $_SESSION['ataques_defender'] - 1;
} else {
    $_SESSION['monstros_defender'] = $_SESSION['monstros_defender'] - 1;
}
header('Location: tabletop.php');



?>