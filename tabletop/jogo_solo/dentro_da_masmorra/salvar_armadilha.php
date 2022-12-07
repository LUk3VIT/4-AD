<?php

session_start();
require_once '../../classes/repositorioTabletop.php'; 
$repositorio = new RepositorioTabletopMySQL();

if(isset($_SESSION['pers_caido'])){
    header('Location: passar_turno.php');
    exit;
}

$id = $_GET['id'];


if($id == $_SESSION['personagem1']){
    $_SESSION['personagem1_salvo'] = true;
    $a = "1";
} else if($id == $_SESSION['personagem2']){
    $_SESSION['personagem2_salvo'] = true;
    $a = "2";
} else if($id == $_SESSION['personagem3']){
    $_SESSION['personagem3_salvo'] = true;
    $a = "3";
} else if($id == $_SESSION['personagem4']){
    $_SESSION['personagem4_salvo'] = true;
    $a = "4";
}

$dado = rand(1,6);

if($_SESSION['alvo'] == "todos"){
    if($dado >= 3){
        $_SESSION["msg$a"] = "<h2 style='color:green'>Se Salvou!!!</h2>";
    } else {
        $_SESSION["vida_atual_personagem$a"] = $_SESSION["vida_atual_personagem$a"] - 1;
        $_SESSION["msg$a"] = "<h2 style='color:red'>Não se Salvou!!!</h2>";
        $_SESSION["dano_t$a"] = 1;
    }
    header('Location: tabletop.php');
    exit;
} else if($_SESSION['alvo'] == "1º" && $_SESSION['nome_armadilha'] == "Alçapão"){
    $personagem = $repositorio->MostrarPersonagem($id);
    foreach ($personagem as $key) {
        $classe = $key['classe'];
        $nivel = $key['nivel'];
    }

    if($classe == "Elfo" || $classe == "Halfling"){
        $dado = $dado + 1;
    } else if($classe == "Ladino"){
        $dado = $dado + $nivel;
    }

    if(strtolower($_SESSION["armadura_personagem$a"]) == "armadura de malha"){
        $dado = $dado - 1;
    } else if(strtolower($_SESSION["armadura_personagem$a"]) == "armadura de aço"){
        $dado = $dado - 2;
    }

    if($dado >= 4){
        $_SESSION['pers_salvo'] = true;
        $_SESSION["msg"] = "<h2 style='color:green'>Não Caiu!!!</h2>";
    } else {
        $_SESSION['pers_alç'] = true;
        $_SESSION["vida_atual_personagem$a"] = $_SESSION["vida_atual_personagem$a"] - 1;
        $_SESSION["msg"] = "<h2 style='color:red'>Caiu!!!</h2>";
        $_SESSION["dano_alç"] = 1;
    }
    header('Location: tabletop.php');
    exit;
} else if($_SESSION['nome_armadilha'] == "Armadilha de Urso"){
    $_SESSION['arm_urs'] = true;
    if($dado >= 4){
        $_SESSION["msg"] = "<h2 style='color:green'>Não Caiu!!!</h2>";
    } else {
        $_SESSION["vida_atual_personagem$a"] = $_SESSION["vida_atual_personagem$a"] - 1;
        $_SESSION["msg"] = "<h2 style='color:red'>Caiu!!!</h2>";
        $_SESSION["dano_t"] = 1;
    }
    header('Location: tabletop.php');
    exit;
} else if($_SESSION['nome_armadilha'] == "Dardo"){
    if($dado >= 2){
        $_SESSION["msg"] = "<h2 style='color:green'>Se Salvou!!!</h2>";
    } else {
        $_SESSION["vida_atual_personagem$a"] = $_SESSION["vida_atual_personagem$a"] - 1;
        $_SESSION["msg"] = "<h2 style='color:red'>Não se Salvou!!!</h2>";
        $_SESSION["dano_t"] = 1;
    }
    header('Location: tabletop.php');
    exit;
} else if($_SESSION['nome_armadilha'] == "Lanças"){
    if($id == $_SESSION['id_pers1']){
        $dado = rand(1,6);
        if($dado >= 5){
            $_SESSION["msg1"] = "<h2 style='color:green'>Se Salvou!!!</h2>";
        } else {
            $_SESSION["vida_atual_personagem$a"] = $_SESSION["vida_atual_personagem$a"] - 1;
            $_SESSION["msg1"] = "<h2 style='color:red'>Não se Salvou!!!</h2>";
            $_SESSION["dano_t1"] = 1;
        }
        header('Location: tabletop.php');
        exit;
    } else if($id == $_SESSION['id_pers2']){
        $dado = rand(1,6);
        if($dado >= 5){
            $_SESSION["msg2"] = "<h2 style='color:green'>Se Salvou!!!</h2>";
        } else {
            $_SESSION["vida_atual_personagem$a"] = $_SESSION["vida_atual_personagem$a"] - 1;
            $_SESSION["msg2"] = "<h2 style='color:red'>Não se Salvou!!!</h2>";
            $_SESSION["dano_t2"] = 1;
        }
        header('Location: tabletop.php');
        exit;
    }
} else if($_SESSION['nome_armadilha'] == "Pedra Gigante"){
    $dado = rand(1,6);
    if(strtolower($_SESSION["armadura_personagem$a"]) == "armadura de malha"){
        $dado = $dado + 1;
    } else if(strtolower($_SESSION["armadura_personagem$a"]) == "armadura de aço"){
        $dado = $dado + 2;
    }

    if($dado >= 5){
        $_SESSION["msg"] = "<h2 style='color:green'>Se Salvou!!!</h2>";
    } else {
        $_SESSION["vida_atual_personagem$a"] = $_SESSION["vida_atual_personagem$a"] - 2;
            $_SESSION["msg"] = "<h2 style='color:red'>Não se Salvou!!!</h2>";
            $_SESSION["dano_t"] = 2;
    }
    header('Location: tabletop.php');
    exit;
}

?>