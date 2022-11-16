<?php

session_start();
require_once '../classes/repositorioTabletop.php'; 
$repositorio = new RepositorioTabletopMySQL();

$id = $_SESSION['id_usuario'];
$nome_pers = $nome = $_SESSION['nome_pers'];
$img = $_SESSION['img'];
$classe = $_SESSION['classe'];
$nivel = $_SESSION['nivel'];
$nivel_maximo = $_SESSION['nivel_maximo'];
$vida = $_SESSION['vida_base'] + $_SESSION['nivel'];
$dinheiro = $_SESSION['dinheiro'];
if(isset($_SESSION['ataque'])){
    $ataque = $_SESSION['ataque'];
} else {
    $ataque = "";
}
if(isset($_SESSION['defesa'])){
    $defesa = $_SESSION['defesa'];
} else {
    $defesa = "";
}

$item1 = $_SESSION['item1'];
$item2 = $_SESSION['item2'];
if(isset($_SESSION['item3'])){
    $item3 = $_SESSION['item3'];
} else {
    $item3 = "";
}
if(isset($_SESSION['item4'])){
    $item4 = $_SESSION['item4'];
} else {
    $item4 = "";
}

$criar_inventario = $repositorio->CriarInventario($id,$nome_pers,$item1,$item2,$item3,$item4);
$id_inventario = $repositorio->PuxarIdInventario($nome_pers);

if(isset($_SESSION['magia1'])){
    $mag1 = $_SESSION['magia1'];
} else {
    $mag1 = "";
}
if(isset($_SESSION['magia2'])){
    $mag2 = $_SESSION['magia2'];
} else {
    $mag2 = "";
}
if(isset($_SESSION['magia3'])){
    $mag3 = $_SESSION['magia3'];
} else {
    $mag3 = "";
}

$criar_pers = $repositorio->CriarPersonagem($id,$nome,$img,$classe,$nivel,$nivel_maximo,$vida,$dinheiro,$ataque,$defesa,$id_inventario,$mag1,$mag2,$mag3);
header('Location: voltar_classe.php');

?>