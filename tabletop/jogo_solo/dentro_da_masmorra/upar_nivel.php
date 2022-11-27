<?php

session_start();
require_once '../../classes/repositorioTabletop.php'; 
$repositorio = new RepositorioTabletopMySQL();

$id = $_GET['id'];
if($id == $_SESSION['personagem1']){
    $a = "1";
} else if($id == $_SESSION['personagem2']){
    $a = "2";
} else if($id == $_SESSION['personagem3']){
    $a = "3";
} else if($id == $_SESSION['personagem4']){
    $a = "4";
}
$personagem = $repositorio->MostrarPersonagem($id);
foreach ($personagem as $key) {
    $nivel = $key['nivel'];
    $vida = $key['vida'];
}

$dado = rand(1,6);
if($dado > $nivel){
    $_SESSION['upar'] = "Upou de nível com sucesso";
    $_SESSION['subir_nivel'] = false;
    $nivel = $nivel + 1;
    $vida = $vida + 1;
    $_SESSION["vida_atual_personagem$a"] = $_SESSION["vida_atual_personagem$a"] + 1;
    $upar = $repositorio->UparNivel($id,$nivel,$vida);
    header('Location: tabletop.php');
} else {
    $_SESSION['upar'] = "Não conseguiu upar de nível, falhou no teste!!!";
    $_SESSION['subir_nivel'] = false;
    header('Location: tabletop.php');
}

?>