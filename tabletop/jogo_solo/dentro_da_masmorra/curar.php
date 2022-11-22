<?php

session_start();
require_once '../../classes/repositorioTabletop.php'; 
$repositorio = new RepositorioTabletopMySQL();

if($_SESSION['turno'] == $_SESSION['personagem1']){
    $b = 1;
} else if($_SESSION['turno'] == $_SESSION['personagem2']){
    $b = 2;
} else if($_SESSION['turno'] == $_SESSION['personagem3']){
    $b = 3;
}
else if($_SESSION['turno'] == $_SESSION['personagem4']){
    $b = 4;
}

if($_SESSION["cura_personagem$b"] == 0){
    $_SESSION['erro'] = "Esse Clérigo já usou a cura 3 vezes, só poderar usar novamente na próxima aventura";
    unset($_SESSION['escolher_cura']);
    header('Location: tabletop.php');
    exit;
}

$id = $_SESSION['turno'];
$personagem = $repositorio->MostrarPersonagem($id);
foreach ($personagem as $key) {
    $nivel = $key['nivel'];
}

if(isset($_GET['curar'])){
    $_SESSION['escolher_cura'] = true;
    header('Location: tabletop.php');
} else {
    unset($_SESSION['escolher_cura']);
    $a = $_GET['alvo'];
    $id = $_SESSION["personagem$a"];
    $personagem = $repositorio->MostrarPersonagem($id);
    foreach ($personagem as $key) {
        $vida;
    }
    $dado = rand(1,6);
    $curar = $dado + $nivel;
    $_SESSION["vida_atual_personagem$a"] = $_SESSION["vida_atual_personagem$a"] + $curar;
    if($_SESSION["vida_atual_personagem$a"] > $vida){
        $_SESSION["vida_atual_personagem$a"] = $vida;
    }
    $id = $_SESSION['turno'];
    $_SESSION["cura_personagem$b"] = $_SESSION["cura_personagem$b"] - 1;
    header("Location: passar_turno.php?id=$id");
}

?>