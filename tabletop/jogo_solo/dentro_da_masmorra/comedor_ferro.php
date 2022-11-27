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
    $nome = $key['nome'];
}

$inventario = $repositorio->MostrarInventario($nome);
foreach ($inventario as $key) {
    $item1 = $key['item1'];
    $item2 = $key['item2'];
    $item3 = $key['item3'];
    $item4 = $key['item4'];
    $item5 = $key['item5'];
    $item6 = $key['item6'];
    $item7 = $key['item7'];
    $item8 = $key['item8'];
    $item9 = $key['item9'];
    $item10 = $key['item10'];
    $item12 = $key['item12'];
    $item13 = $key['item13'];
    $item14 = $key['item14'];
    $item15 = $key['item15'];
    $item17 = $key['item17'];
    $item18 = $key['item18'];
    $item19 = $key['item19'];
    $item20 = $key['item20'];
    $item21 = $key['item21'];
    $item22 = $key['item22'];
    $item23 = $key['item23'];
    $item24 = $key['item24'];
    $item25 = $key['item25'];
}

if($_SESSION["armadura_personagem$a"] == "armadura de aço"){

} else if($_SESSION["armadura_personagem$a"] == "armadura de malha"){

} 



?>