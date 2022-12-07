<?php

session_start();
require_once '../../classes/repositorioTabletop.php'; 
$repositorio = new RepositorioTabletopMySQL();

$num_itens = rand(1,6) + 3;
$_SESSION['num_itens_levados'] = $num_itens;

if($num_itens == 5){
    $item_pers1 = 2;
    $item_pers2 = 1;
    $item_pers3 = 1;
    $item_pers4 = 1;
} else if($num_itens == 6){
    $item_pers1 = 2;
    $item_pers2 = 2;
    $item_pers3 = 1;
    $item_pers4 = 1;
} else if($num_itens == 7){
    $item_pers1 = 2;
    $item_pers2 = 2;
    $item_pers3 = 2;
    $item_pers4 = 1;
} else if($num_itens == 8){
    $item_pers1 = 2;
    $item_pers2 = 2;
    $item_pers3 = 2;
    $item_pers4 = 2;
} else if($num_itens == 9){
    $item_pers1 = 2;
    $item_pers2 = 2;
    $item_pers3 = 2;
    $item_pers4 = 1;
} else {
    $item_pers1 = 1;
    $item_pers2 = 1;
    $item_pers3 = 1;
    $item_pers4 = 1;
}

$id = $_SESSION['personagem1'];
$personagem = $repositorio->MostrarPersonagem($id);
foreach ($personagem as $key) {
    $nome = $key['nome'];
}
$inventario = $repositorio->MostrarInventario($nome);
foreach ($inventario as $key) {
    $id_inventario = $key['id_inventario'];
    $id_usuario = $key['id_usuario'];
    $nome_pers = $key['nome_pers'];
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
    $item11 = $key['item11'];
    $item12 = $key['item12'];
    $item13 = $key['item13'];
    $item14 = $key['item14'];
    $item15 = $key['item15'];
    $item16 = $key['item16'];
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
while($item_pers1 > 0){
    if($item1 != NULL){
        $item1 = "";
    } else if($item2 != NULL){
        $item2 = "";
    } else if($item3 != NULL){
        $item3 = "";
    } else if($item4 != NULL){
        $item4 = "";
    } else if($item5 != NULL){
        $item5 = "";
    } else if($item6 != NULL){
        $item6 = "";
    } else if($item7 != NULL){
        $item7 = "";
    } else if($item8 != NULL){
        $item8 = "";
    } else if($item9 != NULL){
        $item9 = "";
    } else if($item10 != NULL){
        $item10 = "";
    } else if($item11 != NULL){
        $item11 = "";
    } else if($item12 != NULL){
        $item12 = "";
    } else if($item13 != NULL){
        $item13 = "";
    } else if($item14 != NULL){
        $item14 = "";
    } else if($item15 != NULL){
        $item15 = "";
    } else if($item16 != NULL){
        $item16 = "";
    } else if($item17 != NULL){
        $item17 = "";
    } else if($item18 != NULL){
        $item18 = "";
    } else if($item19 != NULL){
        $item19 = "";
    } else if($item20 != NULL){
        $item20 = "";
    } else if($item21 != NULL){
        $item21 = "";
    } else if($item22 != NULL){
        $item22 = "";
    } else if($item23 != NULL){
        $item23 = "";
    } else if($item24 != NULL){
        $item24 = "";
    } else if($item25 != NULL){
        $item25 = "";
    }

    $item_pers1 = $item_pers1 - 1;
}

$usuario = $nome;
$apagar = $repositorio->ApagarItem($usuario);
$recolocar = $repositorio->AdicionarItem($id_inventario,$id_usuario,$nome_pers,$item1,$item2,$item3,$item4,$item5,$item6,$item7,$item8,$item9,$item10,$item11,$item12,$item13,$item14,$item15,$item16,$item17,$item18,$item19,$item20,$item21,$item22,$item23,$item24,$item25);
    


$id = $_SESSION['personagem2'];
$personagem = $repositorio->MostrarPersonagem($id);
foreach ($personagem as $key) {
    $nome = $key['nome'];
}
$inventario = $repositorio->MostrarInventario($nome);
foreach ($inventario as $key) {
    $id_inventario = $key['id_inventario'];
    $id_usuario = $key['id_usuario'];
    $nome_pers = $key['nome_pers'];
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
    $item11 = $key['item11'];
    $item12 = $key['item12'];
    $item13 = $key['item13'];
    $item14 = $key['item14'];
    $item15 = $key['item15'];
    $item16 = $key['item16'];
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
while($item_pers2 > 0){
    if($item1 != NULL){
        $item1 = "";
    } else if($item2 != NULL){
        $item2 = "";
    } else if($item3 != NULL){
        $item3 = "";
    } else if($item4 != NULL){
        $item4 = "";
    } else if($item5 != NULL){
        $item5 = "";
    } else if($item6 != NULL){
        $item6 = "";
    } else if($item7 != NULL){
        $item7 = "";
    } else if($item8 != NULL){
        $item8 = "";
    } else if($item9 != NULL){
        $item9 = "";
    } else if($item10 != NULL){
        $item10 = "";
    } else if($item11 != NULL){
        $item11 = "";
    } else if($item12 != NULL){
        $item12 = "";
    } else if($item13 != NULL){
        $item13 = "";
    } else if($item14 != NULL){
        $item14 = "";
    } else if($item15 != NULL){
        $item15 = "";
    } else if($item16 != NULL){
        $item16 = "";
    } else if($item17 != NULL){
        $item17 = "";
    } else if($item18 != NULL){
        $item18 = "";
    } else if($item19 != NULL){
        $item19 = "";
    } else if($item20 != NULL){
        $item20 = "";
    } else if($item21 != NULL){
        $item21 = "";
    } else if($item22 != NULL){
        $item22 = "";
    } else if($item23 != NULL){
        $item23 = "";
    } else if($item24 != NULL){
        $item24 = "";
    } else if($item25 != NULL){
        $item25 = "";
    }

    $item_pers2 = $item_pers2 - 1;
}

$usuario = $nome;
$apagar = $repositorio->ApagarItem($usuario);
$recolocar = $repositorio->AdicionarItem($id_inventario,$id_usuario,$nome_pers,$item1,$item2,$item3,$item4,$item5,$item6,$item7,$item8,$item9,$item10,$item11,$item12,$item13,$item14,$item15,$item16,$item17,$item18,$item19,$item20,$item21,$item22,$item23,$item24,$item25);
    

$id = $_SESSION['personagem3'];
$personagem = $repositorio->MostrarPersonagem($id);
foreach ($personagem as $key) {
    $nome = $key['nome'];
}
$inventario = $repositorio->MostrarInventario($nome);
foreach ($inventario as $key) {
    $id_inventario = $key['id_inventario'];
    $id_usuario = $key['id_usuario'];
    $nome_pers = $key['nome_pers'];
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
    $item11 = $key['item11'];
    $item12 = $key['item12'];
    $item13 = $key['item13'];
    $item14 = $key['item14'];
    $item15 = $key['item15'];
    $item16 = $key['item16'];
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
while($item_pers3 > 0){
    if($item1 != NULL){
        $item1 = "";
    } else if($item2 != NULL){
        $item2 = "";
    } else if($item3 != NULL){
        $item3 = "";
    } else if($item4 != NULL){
        $item4 = "";
    } else if($item5 != NULL){
        $item5 = "";
    } else if($item6 != NULL){
        $item6 = "";
    } else if($item7 != NULL){
        $item7 = "";
    } else if($item8 != NULL){
        $item8 = "";
    } else if($item9 != NULL){
        $item9 = "";
    } else if($item10 != NULL){
        $item10 = "";
    } else if($item11 != NULL){
        $item11 = "";
    } else if($item12 != NULL){
        $item12 = "";
    } else if($item13 != NULL){
        $item13 = "";
    } else if($item14 != NULL){
        $item14 = "";
    } else if($item15 != NULL){
        $item15 = "";
    } else if($item16 != NULL){
        $item16 = "";
    } else if($item17 != NULL){
        $item17 = "";
    } else if($item18 != NULL){
        $item18 = "";
    } else if($item19 != NULL){
        $item19 = "";
    } else if($item20 != NULL){
        $item20 = "";
    } else if($item21 != NULL){
        $item21 = "";
    } else if($item22 != NULL){
        $item22 = "";
    } else if($item23 != NULL){
        $item23 = "";
    } else if($item24 != NULL){
        $item24 = "";
    } else if($item25 != NULL){
        $item25 = "";
    }

    $item_pers3 = $item_pers3 - 1;
}

$usuario = $nome;
$apagar = $repositorio->ApagarItem($usuario);
$recolocar = $repositorio->AdicionarItem($id_inventario,$id_usuario,$nome_pers,$item1,$item2,$item3,$item4,$item5,$item6,$item7,$item8,$item9,$item10,$item11,$item12,$item13,$item14,$item15,$item16,$item17,$item18,$item19,$item20,$item21,$item22,$item23,$item24,$item25);
    

$id = $_SESSION['personagem4'];
$personagem = $repositorio->MostrarPersonagem($id);
foreach ($personagem as $key) {
    $nome = $key['nome'];
}
$inventario = $repositorio->MostrarInventario($nome);
foreach ($inventario as $key) {
    $id_inventario = $key['id_inventario'];
    $id_usuario = $key['id_usuario'];
    $nome_pers = $key['nome_pers'];
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
    $item11 = $key['item11'];
    $item12 = $key['item12'];
    $item13 = $key['item13'];
    $item14 = $key['item14'];
    $item15 = $key['item15'];
    $item16 = $key['item16'];
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
while($item_pers4 > 0){
    if($item1 != NULL){
        $item1 = "";
    } else if($item2 != NULL){
        $item2 = "";
    } else if($item3 != NULL){
        $item3 = "";
    } else if($item4 != NULL){
        $item4 = "";
    } else if($item5 != NULL){
        $item5 = "";
    } else if($item6 != NULL){
        $item6 = "";
    } else if($item7 != NULL){
        $item7 = "";
    } else if($item8 != NULL){
        $item8 = "";
    } else if($item9 != NULL){
        $item9 = "";
    } else if($item10 != NULL){
        $item10 = "";
    } else if($item11 != NULL){
        $item11 = "";
    } else if($item12 != NULL){
        $item12 = "";
    } else if($item13 != NULL){
        $item13 = "";
    } else if($item14 != NULL){
        $item14 = "";
    } else if($item15 != NULL){
        $item15 = "";
    } else if($item16 != NULL){
        $item16 = "";
    } else if($item17 != NULL){
        $item17 = "";
    } else if($item18 != NULL){
        $item18 = "";
    } else if($item19 != NULL){
        $item19 = "";
    } else if($item20 != NULL){
        $item20 = "";
    } else if($item21 != NULL){
        $item21 = "";
    } else if($item22 != NULL){
        $item22 = "";
    } else if($item23 != NULL){
        $item23 = "";
    } else if($item24 != NULL){
        $item24 = "";
    } else if($item25 != NULL){
        $item25 = "";
    }

    $item_pers4 = $item_pers4 - 1;
}

$usuario = $nome;
$apagar = $repositorio->ApagarItem($usuario);
$recolocar = $repositorio->AdicionarItem($id_inventario,$id_usuario,$nome_pers,$item1,$item2,$item3,$item4,$item5,$item6,$item7,$item8,$item9,$item10,$item11,$item12,$item13,$item14,$item15,$item16,$item17,$item18,$item19,$item20,$item21,$item22,$item23,$item24,$item25);

$id = $_SESSION['personagem1'];
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
    $item11 = $key['item11'];
    $item12 = $key['item12'];
    $item13 = $key['item13'];
    $item14 = $key['item14'];
    $item15 = $key['item15'];
    $item16 = $key['item16'];
    $item17 = $key['item17'];
    $item18 = $key['item18'];
    $item19 = $key['item19'];
    $item20 = $key['item20'];
    $item21 = $key['item21'];
    $item22 = $key['item22'];
    $item23 = $key['item23'];
    $item24 = $key['item24'];
    $item25 = $key['item25'];

    if($item1 == strtolower($_SESSION["arma1_personagem1"])){
        $a = true;
    } else if($item2 == strtolower($_SESSION["arma1_personagem1"])){
        $a = true;
    } else if($item3 == strtolower($_SESSION["arma1_personagem1"])){
        $a = true;
    } else if($item4 == strtolower($_SESSION["arma1_personagem1"])){
        $a = true;
    } else if($item5 == strtolower($_SESSION["arma1_personagem1"])){
        $a = true;
    } else if($item6 == strtolower($_SESSION["arma1_personagem1"])){
        $a = true;
    } else if($item7 == strtolower($_SESSION["arma1_personagem1"])){
        $a = true;
    } else if($item8 == strtolower($_SESSION["arma1_personagem1"])){
        $a = true;
    } else if($item9 == strtolower($_SESSION["arma1_personagem1"])){
        $a = true;
    } else if($item10 == strtolower($_SESSION["arma1_personagem1"])){
        $a = true;
    } else if($item11 == strtolower($_SESSION["arma1_personagem1"])){
        $a = true;
    } else if($item12 == strtolower($_SESSION["arma1_personagem1"])){
        $a = true;
    } else if($item13 == strtolower($_SESSION["arma1_personagem1"])){
        $a = true;
    } else if($item14 == strtolower($_SESSION["arma1_personagem1"])){
        $a = true;
    } else if($item15 == strtolower($_SESSION["arma1_personagem1"])){
        $a = true;
    } else if($item16 == strtolower($_SESSION["arma1_personagem1"])){
        $a = true;
    } else if($item17 == strtolower($_SESSION["arma1_personagem1"])){
        $a = true;
    } else if($item18 == strtolower($_SESSION["arma1_personagem1"])){
        $a = true;
    } else if($item19 == strtolower($_SESSION["arma1_personagem1"])){
        $a = true;
    } else if($item20 == strtolower($_SESSION["arma1_personagem1"])){
        $a = true;
    } else if($item21 == strtolower($_SESSION["arma1_personagem1"])){
        $a = true;
    } else if($item22 == strtolower($_SESSION["arma1_personagem1"])){
        $a = true;
    } else if($item23 == strtolower($_SESSION["arma1_personagem1"])){
        $a = true;
    } else if($item24 == strtolower($_SESSION["arma1_personagem1"])){
        $a = true;
    } else if($item25 == strtolower($_SESSION["arma1_personagem1"])){
        $a = true;
    }

    if($item1 == strtolower($_SESSION["arma2_personagem1"])){
        $b = true;
    } else if($item2 == strtolower($_SESSION["arma2_personagem1"])){
        $b = true;
    } else if($item3 == strtolower($_SESSION["arma2_personagem1"])){
        $b = true;
    } else if($item4 == strtolower($_SESSION["arma2_personagem1"])){
        $b = true;
    } else if($item5 == strtolower($_SESSION["arma2_personagem1"])){
        $b = true;
    } else if($item6 == strtolower($_SESSION["arma2_personagem1"])){
        $b = true;
    } else if($item7 == strtolower($_SESSION["arma2_personagem1"])){
        $b = true;
    } else if($item8 == strtolower($_SESSION["arma2_personagem1"])){
        $b = true;
    } else if($item9 == strtolower($_SESSION["arma2_personagem1"])){
        $b = true;
    } else if($item10 == strtolower($_SESSION["arma2_personagem1"])){
        $b = true;
    } else if($item11 == strtolower($_SESSION["arma2_personagem1"])){
        $b = true;
    } else if($item12 == strtolower($_SESSION["arma2_personagem1"])){
        $b = true;
    } else if($item13 == strtolower($_SESSION["arma2_personagem1"])){
        $b = true;
    } else if($item14 == strtolower($_SESSION["arma2_personagem1"])){
        $b = true;
    } else if($item15 == strtolower($_SESSION["arma2_personagem1"])){
        $b = true;
    } else if($item16 == strtolower($_SESSION["arma2_personagem1"])){
        $b = true;
    } else if($item17 == strtolower($_SESSION["arma2_personagem1"])){
        $b = true;
    } else if($item18 == strtolower($_SESSION["arma2_personagem1"])){
        $b = true;
    } else if($item19 == strtolower($_SESSION["arma2_personagem1"])){
        $b = true;
    } else if($item20 == strtolower($_SESSION["arma2_personagem1"])){
        $b = true;
    } else if($item21 == strtolower($_SESSION["arma2_personagem1"])){
        $b = true;
    } else if($item22 == strtolower($_SESSION["arma2_personagem1"])){
        $b = true;
    } else if($item23 == strtolower($_SESSION["arma2_personagem1"])){
        $b = true;
    } else if($item24 == strtolower($_SESSION["arma2_personagem1"])){
        $b = true;
    } else if($item25 == strtolower($_SESSION["arma2_personagem1"])){
        $b = true;
    }

    if($item1 == strtolower($_SESSION["armadura_personagem1"])){
        $c = true;
    } else if($item2 == strtolower($_SESSION["armadura_personagem1"])){
        $c = true;
    } else if($item3 == strtolower($_SESSION["armadura_personagem1"])){
        $c = true;
    } else if($item4 == strtolower($_SESSION["armadura_personagem1"])){
        $c = true;
    } else if($item5 == strtolower($_SESSION["armadura_personagem1"])){
        $c = true;
    } else if($item6 == strtolower($_SESSION["armadura_personagem1"])){
        $c = true;
    } else if($item7 == strtolower($_SESSION["armadura_personagem1"])){
        $c = true;
    } else if($item8 == strtolower($_SESSION["armadura_personagem1"])){
        $c = true;
    } else if($item9 == strtolower($_SESSION["armadura_personagem1"])){
        $c = true;
    } else if($item10 == strtolower($_SESSION["armadura_personagem1"])){
        $c = true;
    } else if($item11 == strtolower($_SESSION["armadura_personagem1"])){
        $c = true;
    } else if($item12 == strtolower($_SESSION["armadura_personagem1"])){
        $c = true;
    } else if($item13 == strtolower($_SESSION["armadura_personagem1"])){
        $c = true;
    } else if($item14 == strtolower($_SESSION["armadura_personagem1"])){
        $c = true;
    } else if($item15 == strtolower($_SESSION["armadura_personagem1"])){
        $c = true;
    } else if($item16 == strtolower($_SESSION["armadura_personagem1"])){
        $c = true;
    } else if($item17 == strtolower($_SESSION["armadura_personagem1"])){
        $c = true;
    } else if($item18 == strtolower($_SESSION["armadura_personagem1"])){
        $c = true;
    } else if($item19 == strtolower($_SESSION["armadura_personagem1"])){
        $c = true;
    } else if($item20 == strtolower($_SESSION["armadura_personagem1"])){
        $c = true;
    } else if($item21 == strtolower($_SESSION["armadura_personagem1"])){
        $c = true;
    } else if($item22 == strtolower($_SESSION["armadura_personagem1"])){
        $c = true;
    } else if($item23 == strtolower($_SESSION["armadura_personagem1"])){
        $c = true;
    } else if($item24 == strtolower($_SESSION["armadura_personagem1"])){
        $c = true;
    } else if($item25 == strtolower($_SESSION["armadura_personagem1"])){
        $c = true;
    }

    if(isset($a)){

    } else {
        $_SESSION['arma1_personagem1'] = "";
    }

    if(isset($b)){

    } else {
        $_SESSION['arma2_personagem1'] = "";
    }

    if(isset($c)){

    } else {
        $_SESSION['armadura_personagem1'] = "";
    }

    unset($a);
    unset($b);

}



$id = $_SESSION['personagem2'];
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
    $item11 = $key['item11'];
    $item12 = $key['item12'];
    $item13 = $key['item13'];
    $item14 = $key['item14'];
    $item15 = $key['item15'];
    $item16 = $key['item16'];
    $item17 = $key['item17'];
    $item18 = $key['item18'];
    $item19 = $key['item19'];
    $item20 = $key['item20'];
    $item21 = $key['item21'];
    $item22 = $key['item22'];
    $item23 = $key['item23'];
    $item24 = $key['item24'];
    $item25 = $key['item25'];

    if($item1 == strtolower($_SESSION["arma1_personagem2"])){
        $a = true;
    } else if($item2 == strtolower($_SESSION["arma1_personagem2"])){
        $a = true;
    } else if($item3 == strtolower($_SESSION["arma1_personagem2"])){
        $a = true;
    } else if($item4 == strtolower($_SESSION["arma1_personagem2"])){
        $a = true;
    } else if($item5 == strtolower($_SESSION["arma1_personagem2"])){
        $a = true;
    } else if($item6 == strtolower($_SESSION["arma1_personagem2"])){
        $a = true;
    } else if($item7 == strtolower($_SESSION["arma1_personagem2"])){
        $a = true;
    } else if($item8 == strtolower($_SESSION["arma1_personagem2"])){
        $a = true;
    } else if($item9 == strtolower($_SESSION["arma1_personagem2"])){
        $a = true;
    } else if($item10 == strtolower($_SESSION["arma1_personagem2"])){
        $a = true;
    } else if($item11 == strtolower($_SESSION["arma1_personagem2"])){
        $a = true;
    } else if($item12 == strtolower($_SESSION["arma1_personagem2"])){
        $a = true;
    } else if($item13 == strtolower($_SESSION["arma1_personagem2"])){
        $a = true;
    } else if($item14 == strtolower($_SESSION["arma1_personagem2"])){
        $a = true;
    } else if($item15 == strtolower($_SESSION["arma1_personagem2"])){
        $a = true;
    } else if($item16 == strtolower($_SESSION["arma1_personagem2"])){
        $a = true;
    } else if($item17 == strtolower($_SESSION["arma1_personagem2"])){
        $a = true;
    } else if($item18 == strtolower($_SESSION["arma1_personagem2"])){
        $a = true;
    } else if($item19 == strtolower($_SESSION["arma1_personagem2"])){
        $a = true;
    } else if($item20 == strtolower($_SESSION["arma1_personagem2"])){
        $a = true;
    } else if($item21 == strtolower($_SESSION["arma1_personagem2"])){
        $a = true;
    } else if($item22 == strtolower($_SESSION["arma1_personagem2"])){
        $a = true;
    } else if($item23 == strtolower($_SESSION["arma1_personagem2"])){
        $a = true;
    } else if($item24 == strtolower($_SESSION["arma1_personagem2"])){
        $a = true;
    } else if($item25 == strtolower($_SESSION["arma1_personagem2"])){
        $a = true;
    }

    if($item1 == strtolower($_SESSION["arma2_personagem2"])){
        $b = true;
    } else if($item2 == strtolower($_SESSION["arma2_personagem2"])){
        $b = true;
    } else if($item3 == strtolower($_SESSION["arma2_personagem2"])){
        $b = true;
    } else if($item4 == strtolower($_SESSION["arma2_personagem2"])){
        $b = true;
    } else if($item5 == strtolower($_SESSION["arma2_personagem2"])){
        $b = true;
    } else if($item6 == strtolower($_SESSION["arma2_personagem2"])){
        $b = true;
    } else if($item7 == strtolower($_SESSION["arma2_personagem2"])){
        $b = true;
    } else if($item8 == strtolower($_SESSION["arma2_personagem2"])){
        $b = true;
    } else if($item9 == strtolower($_SESSION["arma2_personagem2"])){
        $b = true;
    } else if($item10 == strtolower($_SESSION["arma2_personagem2"])){
        $b = true;
    } else if($item11 == strtolower($_SESSION["arma2_personagem2"])){
        $b = true;
    } else if($item12 == strtolower($_SESSION["arma2_personagem2"])){
        $b = true;
    } else if($item13 == strtolower($_SESSION["arma2_personagem2"])){
        $b = true;
    } else if($item14 == strtolower($_SESSION["arma2_personagem2"])){
        $b = true;
    } else if($item15 == strtolower($_SESSION["arma2_personagem2"])){
        $b = true;
    } else if($item16 == strtolower($_SESSION["arma2_personagem2"])){
        $b = true;
    } else if($item17 == strtolower($_SESSION["arma2_personagem2"])){
        $b = true;
    } else if($item18 == strtolower($_SESSION["arma2_personagem2"])){
        $b = true;
    } else if($item19 == strtolower($_SESSION["arma2_personagem2"])){
        $b = true;
    } else if($item20 == strtolower($_SESSION["arma2_personagem2"])){
        $b = true;
    } else if($item21 == strtolower($_SESSION["arma2_personagem2"])){
        $b = true;
    } else if($item22 == strtolower($_SESSION["arma2_personagem2"])){
        $b = true;
    } else if($item23 == strtolower($_SESSION["arma2_personagem2"])){
        $b = true;
    } else if($item24 == strtolower($_SESSION["arma2_personagem2"])){
        $b = true;
    } else if($item25 == strtolower($_SESSION["arma2_personagem2"])){
        $b = true;
    }

    if($item1 == strtolower($_SESSION["armadura_personagem2"])){
        $c = true;
    } else if($item2 == strtolower($_SESSION["armadura_personagem2"])){
        $c = true;
    } else if($item3 == strtolower($_SESSION["armadura_personagem2"])){
        $c = true;
    } else if($item4 == strtolower($_SESSION["armadura_personagem2"])){
        $c = true;
    } else if($item5 == strtolower($_SESSION["armadura_personagem2"])){
        $c = true;
    } else if($item6 == strtolower($_SESSION["armadura_personagem2"])){
        $c = true;
    } else if($item7 == strtolower($_SESSION["armadura_personagem2"])){
        $c = true;
    } else if($item8 == strtolower($_SESSION["armadura_personagem2"])){
        $c = true;
    } else if($item9 == strtolower($_SESSION["armadura_personagem2"])){
        $c = true;
    } else if($item10 == strtolower($_SESSION["armadura_personagem2"])){
        $c = true;
    } else if($item11 == strtolower($_SESSION["armadura_personagem2"])){
        $c = true;
    } else if($item12 == strtolower($_SESSION["armadura_personagem2"])){
        $c = true;
    } else if($item13 == strtolower($_SESSION["armadura_personagem2"])){
        $c = true;
    } else if($item14 == strtolower($_SESSION["armadura_personagem2"])){
        $c = true;
    } else if($item15 == strtolower($_SESSION["armadura_personagem2"])){
        $c = true;
    } else if($item16 == strtolower($_SESSION["armadura_personagem2"])){
        $c = true;
    } else if($item17 == strtolower($_SESSION["armadura_personagem2"])){
        $c = true;
    } else if($item18 == strtolower($_SESSION["armadura_personagem2"])){
        $c = true;
    } else if($item19 == strtolower($_SESSION["armadura_personagem2"])){
        $c = true;
    } else if($item20 == strtolower($_SESSION["armadura_personagem2"])){
        $c = true;
    } else if($item21 == strtolower($_SESSION["armadura_personagem2"])){
        $c = true;
    } else if($item22 == strtolower($_SESSION["armadura_personagem2"])){
        $c = true;
    } else if($item23 == strtolower($_SESSION["armadura_personagem2"])){
        $c = true;
    } else if($item24 == strtolower($_SESSION["armadura_personagem2"])){
        $c = true;
    } else if($item25 == strtolower($_SESSION["armadura_personagem2"])){
        $c = true;
    }

    if(isset($a)){

    } else {
        $_SESSION['arma1_personagem2'] = "";
    }

    if(isset($b)){

    } else {
        $_SESSION['arma2_personagem2'] = "";
    }

    if(isset($c)){

    } else {
        $_SESSION['armadura_personagem2'] = "";
    }

    unset($a);
    unset($b);

}


$id = $_SESSION['personagem3'];
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
    $item11 = $key['item11'];
    $item12 = $key['item12'];
    $item13 = $key['item13'];
    $item14 = $key['item14'];
    $item15 = $key['item15'];
    $item16 = $key['item16'];
    $item17 = $key['item17'];
    $item18 = $key['item18'];
    $item19 = $key['item19'];
    $item20 = $key['item20'];
    $item21 = $key['item21'];
    $item22 = $key['item22'];
    $item23 = $key['item23'];
    $item24 = $key['item24'];
    $item25 = $key['item25'];

    if($item1 == strtolower($_SESSION["arma1_personagem3"])){
        $a = true;
    } else if($item2 == strtolower($_SESSION["arma1_personagem3"])){
        $a = true;
    } else if($item3 == strtolower($_SESSION["arma1_personagem3"])){
        $a = true;
    } else if($item4 == strtolower($_SESSION["arma1_personagem3"])){
        $a = true;
    } else if($item5 == strtolower($_SESSION["arma1_personagem3"])){
        $a = true;
    } else if($item6 == strtolower($_SESSION["arma1_personagem3"])){
        $a = true;
    } else if($item7 == strtolower($_SESSION["arma1_personagem3"])){
        $a = true;
    } else if($item8 == strtolower($_SESSION["arma1_personagem3"])){
        $a = true;
    } else if($item9 == strtolower($_SESSION["arma1_personagem3"])){
        $a = true;
    } else if($item10 == strtolower($_SESSION["arma1_personagem3"])){
        $a = true;
    } else if($item11 == strtolower($_SESSION["arma1_personagem3"])){
        $a = true;
    } else if($item12 == strtolower($_SESSION["arma1_personagem3"])){
        $a = true;
    } else if($item13 == strtolower($_SESSION["arma1_personagem3"])){
        $a = true;
    } else if($item14 == strtolower($_SESSION["arma1_personagem3"])){
        $a = true;
    } else if($item15 == strtolower($_SESSION["arma1_personagem3"])){
        $a = true;
    } else if($item16 == strtolower($_SESSION["arma1_personagem3"])){
        $a = true;
    } else if($item17 == strtolower($_SESSION["arma1_personagem3"])){
        $a = true;
    } else if($item18 == strtolower($_SESSION["arma1_personagem3"])){
        $a = true;
    } else if($item19 == strtolower($_SESSION["arma1_personagem3"])){
        $a = true;
    } else if($item20 == strtolower($_SESSION["arma1_personagem3"])){
        $a = true;
    } else if($item21 == strtolower($_SESSION["arma1_personagem3"])){
        $a = true;
    } else if($item22 == strtolower($_SESSION["arma1_personagem3"])){
        $a = true;
    } else if($item23 == strtolower($_SESSION["arma1_personagem3"])){
        $a = true;
    } else if($item24 == strtolower($_SESSION["arma1_personagem3"])){
        $a = true;
    } else if($item25 == strtolower($_SESSION["arma1_personagem3"])){
        $a = true;
    }

    if($item1 == strtolower($_SESSION["arma2_personagem3"])){
        $b = true;
    } else if($item2 == strtolower($_SESSION["arma2_personagem3"])){
        $b = true;
    } else if($item3 == strtolower($_SESSION["arma2_personagem3"])){
        $b = true;
    } else if($item4 == strtolower($_SESSION["arma2_personagem3"])){
        $b = true;
    } else if($item5 == strtolower($_SESSION["arma2_personagem3"])){
        $b = true;
    } else if($item6 == strtolower($_SESSION["arma2_personagem3"])){
        $b = true;
    } else if($item7 == strtolower($_SESSION["arma2_personagem3"])){
        $b = true;
    } else if($item8 == strtolower($_SESSION["arma2_personagem3"])){
        $b = true;
    } else if($item9 == strtolower($_SESSION["arma2_personagem3"])){
        $b = true;
    } else if($item10 == strtolower($_SESSION["arma2_personagem3"])){
        $b = true;
    } else if($item11 == strtolower($_SESSION["arma2_personagem3"])){
        $b = true;
    } else if($item12 == strtolower($_SESSION["arma2_personagem3"])){
        $b = true;
    } else if($item13 == strtolower($_SESSION["arma2_personagem3"])){
        $b = true;
    } else if($item14 == strtolower($_SESSION["arma2_personagem3"])){
        $b = true;
    } else if($item15 == strtolower($_SESSION["arma2_personagem3"])){
        $b = true;
    } else if($item16 == strtolower($_SESSION["arma2_personagem3"])){
        $b = true;
    } else if($item17 == strtolower($_SESSION["arma2_personagem3"])){
        $b = true;
    } else if($item18 == strtolower($_SESSION["arma2_personagem3"])){
        $b = true;
    } else if($item19 == strtolower($_SESSION["arma2_personagem3"])){
        $b = true;
    } else if($item20 == strtolower($_SESSION["arma2_personagem3"])){
        $b = true;
    } else if($item21 == strtolower($_SESSION["arma2_personagem3"])){
        $b = true;
    } else if($item22 == strtolower($_SESSION["arma2_personagem3"])){
        $b = true;
    } else if($item23 == strtolower($_SESSION["arma2_personagem3"])){
        $b = true;
    } else if($item24 == strtolower($_SESSION["arma2_personagem3"])){
        $b = true;
    } else if($item25 == strtolower($_SESSION["arma2_personagem3"])){
        $b = true;
    }

    if($item1 == strtolower($_SESSION["armadura_personagem3"])){
        $c = true;
    } else if($item2 == strtolower($_SESSION["armadura_personagem3"])){
        $c = true;
    } else if($item3 == strtolower($_SESSION["armadura_personagem3"])){
        $c = true;
    } else if($item4 == strtolower($_SESSION["armadura_personagem3"])){
        $c = true;
    } else if($item5 == strtolower($_SESSION["armadura_personagem3"])){
        $c = true;
    } else if($item6 == strtolower($_SESSION["armadura_personagem3"])){
        $c = true;
    } else if($item7 == strtolower($_SESSION["armadura_personagem3"])){
        $c = true;
    } else if($item8 == strtolower($_SESSION["armadura_personagem3"])){
        $c = true;
    } else if($item9 == strtolower($_SESSION["armadura_personagem3"])){
        $c = true;
    } else if($item10 == strtolower($_SESSION["armadura_personagem3"])){
        $c = true;
    } else if($item11 == strtolower($_SESSION["armadura_personagem3"])){
        $c = true;
    } else if($item12 == strtolower($_SESSION["armadura_personagem3"])){
        $c = true;
    } else if($item13 == strtolower($_SESSION["armadura_personagem3"])){
        $c = true;
    } else if($item14 == strtolower($_SESSION["armadura_personagem3"])){
        $c = true;
    } else if($item15 == strtolower($_SESSION["armadura_personagem3"])){
        $c = true;
    } else if($item16 == strtolower($_SESSION["armadura_personagem3"])){
        $c = true;
    } else if($item17 == strtolower($_SESSION["armadura_personagem3"])){
        $c = true;
    } else if($item18 == strtolower($_SESSION["armadura_personagem3"])){
        $c = true;
    } else if($item19 == strtolower($_SESSION["armadura_personagem3"])){
        $c = true;
    } else if($item20 == strtolower($_SESSION["armadura_personagem3"])){
        $c = true;
    } else if($item21 == strtolower($_SESSION["armadura_personagem3"])){
        $c = true;
    } else if($item22 == strtolower($_SESSION["armadura_personagem3"])){
        $c = true;
    } else if($item23 == strtolower($_SESSION["armadura_personagem3"])){
        $c = true;
    } else if($item24 == strtolower($_SESSION["armadura_personagem3"])){
        $c = true;
    } else if($item25 == strtolower($_SESSION["armadura_personagem3"])){
        $c = true;
    }

    if(isset($a)){

    } else {
        $_SESSION['arma1_personagem3'] = "";
    }

    if(isset($b)){

    } else {
        $_SESSION['arma2_personagem3'] = "";
    }

    if(isset($c)){

    } else {
        $_SESSION['armadura_personagem3'] = "";
    }

    unset($a);
    unset($b);

}

$id = $_SESSION['personagem4'];
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
    $item11 = $key['item11'];
    $item12 = $key['item12'];
    $item13 = $key['item13'];
    $item14 = $key['item14'];
    $item15 = $key['item15'];
    $item16 = $key['item16'];
    $item17 = $key['item17'];
    $item18 = $key['item18'];
    $item19 = $key['item19'];
    $item20 = $key['item20'];
    $item21 = $key['item21'];
    $item22 = $key['item22'];
    $item23 = $key['item23'];
    $item24 = $key['item24'];
    $item25 = $key['item25'];

    if($item1 == strtolower($_SESSION["arma1_personagem4"])){
        $a = true;
    } else if($item2 == strtolower($_SESSION["arma1_personagem4"])){
        $a = true;
    } else if($item3 == strtolower($_SESSION["arma1_personagem4"])){
        $a = true;
    } else if($item4 == strtolower($_SESSION["arma1_personagem4"])){
        $a = true;
    } else if($item5 == strtolower($_SESSION["arma1_personagem4"])){
        $a = true;
    } else if($item6 == strtolower($_SESSION["arma1_personagem4"])){
        $a = true;
    } else if($item7 == strtolower($_SESSION["arma1_personagem4"])){
        $a = true;
    } else if($item8 == strtolower($_SESSION["arma1_personagem4"])){
        $a = true;
    } else if($item9 == strtolower($_SESSION["arma1_personagem4"])){
        $a = true;
    } else if($item10 == strtolower($_SESSION["arma1_personagem4"])){
        $a = true;
    } else if($item11 == strtolower($_SESSION["arma1_personagem4"])){
        $a = true;
    } else if($item12 == strtolower($_SESSION["arma1_personagem4"])){
        $a = true;
    } else if($item13 == strtolower($_SESSION["arma1_personagem4"])){
        $a = true;
    } else if($item14 == strtolower($_SESSION["arma1_personagem4"])){
        $a = true;
    } else if($item15 == strtolower($_SESSION["arma1_personagem4"])){
        $a = true;
    } else if($item16 == strtolower($_SESSION["arma1_personagem4"])){
        $a = true;
    } else if($item17 == strtolower($_SESSION["arma1_personagem4"])){
        $a = true;
    } else if($item18 == strtolower($_SESSION["arma1_personagem4"])){
        $a = true;
    } else if($item19 == strtolower($_SESSION["arma1_personagem4"])){
        $a = true;
    } else if($item20 == strtolower($_SESSION["arma1_personagem4"])){
        $a = true;
    } else if($item21 == strtolower($_SESSION["arma1_personagem4"])){
        $a = true;
    } else if($item22 == strtolower($_SESSION["arma1_personagem4"])){
        $a = true;
    } else if($item23 == strtolower($_SESSION["arma1_personagem4"])){
        $a = true;
    } else if($item24 == strtolower($_SESSION["arma1_personagem4"])){
        $a = true;
    } else if($item25 == strtolower($_SESSION["arma1_personagem4"])){
        $a = true;
    }

    if($item1 == strtolower($_SESSION["arma2_personagem4"])){
        $b = true;
    } else if($item2 == strtolower($_SESSION["arma2_personagem4"])){
        $b = true;
    } else if($item3 == strtolower($_SESSION["arma2_personagem4"])){
        $b = true;
    } else if($item4 == strtolower($_SESSION["arma2_personagem4"])){
        $b = true;
    } else if($item5 == strtolower($_SESSION["arma2_personagem4"])){
        $b = true;
    } else if($item6 == strtolower($_SESSION["arma2_personagem4"])){
        $b = true;
    } else if($item7 == strtolower($_SESSION["arma2_personagem4"])){
        $b = true;
    } else if($item8 == strtolower($_SESSION["arma2_personagem4"])){
        $b = true;
    } else if($item9 == strtolower($_SESSION["arma2_personagem4"])){
        $b = true;
    } else if($item10 == strtolower($_SESSION["arma2_personagem4"])){
        $b = true;
    } else if($item11 == strtolower($_SESSION["arma2_personagem4"])){
        $b = true;
    } else if($item12 == strtolower($_SESSION["arma2_personagem4"])){
        $b = true;
    } else if($item13 == strtolower($_SESSION["arma2_personagem4"])){
        $b = true;
    } else if($item14 == strtolower($_SESSION["arma2_personagem4"])){
        $b = true;
    } else if($item15 == strtolower($_SESSION["arma2_personagem4"])){
        $b = true;
    } else if($item16 == strtolower($_SESSION["arma2_personagem4"])){
        $b = true;
    } else if($item17 == strtolower($_SESSION["arma2_personagem4"])){
        $b = true;
    } else if($item18 == strtolower($_SESSION["arma2_personagem4"])){
        $b = true;
    } else if($item19 == strtolower($_SESSION["arma2_personagem4"])){
        $b = true;
    } else if($item20 == strtolower($_SESSION["arma2_personagem4"])){
        $b = true;
    } else if($item21 == strtolower($_SESSION["arma2_personagem4"])){
        $b = true;
    } else if($item22 == strtolower($_SESSION["arma2_personagem4"])){
        $b = true;
    } else if($item23 == strtolower($_SESSION["arma2_personagem4"])){
        $b = true;
    } else if($item24 == strtolower($_SESSION["arma2_personagem4"])){
        $b = true;
    } else if($item25 == strtolower($_SESSION["arma2_personagem4"])){
        $b = true;
    }

    if($item1 == strtolower($_SESSION["armadura_personagem4"])){
        $c = true;
    } else if($item2 == strtolower($_SESSION["armadura_personagem4"])){
        $c = true;
    } else if($item3 == strtolower($_SESSION["armadura_personagem4"])){
        $c = true;
    } else if($item4 == strtolower($_SESSION["armadura_personagem4"])){
        $c = true;
    } else if($item5 == strtolower($_SESSION["armadura_personagem4"])){
        $c = true;
    } else if($item6 == strtolower($_SESSION["armadura_personagem4"])){
        $c = true;
    } else if($item7 == strtolower($_SESSION["armadura_personagem4"])){
        $c = true;
    } else if($item8 == strtolower($_SESSION["armadura_personagem4"])){
        $c = true;
    } else if($item9 == strtolower($_SESSION["armadura_personagem4"])){
        $c = true;
    } else if($item10 == strtolower($_SESSION["armadura_personagem4"])){
        $c = true;
    } else if($item11 == strtolower($_SESSION["armadura_personagem4"])){
        $c = true;
    } else if($item12 == strtolower($_SESSION["armadura_personagem4"])){
        $c = true;
    } else if($item13 == strtolower($_SESSION["armadura_personagem4"])){
        $c = true;
    } else if($item14 == strtolower($_SESSION["armadura_personagem4"])){
        $c = true;
    } else if($item15 == strtolower($_SESSION["armadura_personagem4"])){
        $c = true;
    } else if($item16 == strtolower($_SESSION["armadura_personagem4"])){
        $c = true;
    } else if($item17 == strtolower($_SESSION["armadura_personagem4"])){
        $c = true;
    } else if($item18 == strtolower($_SESSION["armadura_personagem4"])){
        $c = true;
    } else if($item19 == strtolower($_SESSION["armadura_personagem4"])){
        $c = true;
    } else if($item20 == strtolower($_SESSION["armadura_personagem4"])){
        $c = true;
    } else if($item21 == strtolower($_SESSION["armadura_personagem4"])){
        $c = true;
    } else if($item22 == strtolower($_SESSION["armadura_personagem4"])){
        $c = true;
    } else if($item23 == strtolower($_SESSION["armadura_personagem4"])){
        $c = true;
    } else if($item24 == strtolower($_SESSION["armadura_personagem4"])){
        $c = true;
    } else if($item25 == strtolower($_SESSION["armadura_personagem4"])){
        $c = true;
    }

    if(isset($a)){

    } else {
        $_SESSION['arma1_personagem4'] = "";
    }

    if(isset($b)){

    } else {
        $_SESSION['arma2_personagem4'] = "";
    }

    if(isset($c)){

    } else {
        $_SESSION['armadura_personagem4'] = "";
    }

    unset($a);
    unset($b);

}


$_SESSION['assalto'] = true;
header('Location: tabletop.php');

?>