<?php

session_start();
require_once '../../classes/repositorioTabletop.php'; 
$repositorio = new RepositorioTabletopMySQL();

$_POST['item'];
$_POST['preco'];

$id = $_SESSION['id_comprador'];

$personagem = $repositorio->MostrarPersonagem($id);
foreach ($personagem as $key) {
    $nome = $key['nome'];
    $dinheiro_atual = $key['dinheiro'];
}

$copiar_inventario = $repositorio->MostrarInventario($nome);
foreach ($copiar_inventario as $key) {
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

if($item1 == $_POST['item']){
    $item1 = "";
} else if ($item2 == $_POST['item']){
    $item2 = "";
} else if ($item3 == $_POST['item']){
    $item3 = "";
} else if ($item4 == $_POST['item']){
    $item4 = "";
} else if ($item5 == $_POST['item']){
    $item5 = "";
} else if ($item6 == $_POST['item']){
    $item6 = "";
} else if ($item7 == $_POST['item']){
    $item7 = "";
} else if ($item8 == $_POST['item']){
    $item8 = "";
} else if ($item9 == $_POST['item']){
    $item9 = "";
} else if ($item10 == $_POST['item']){
    $item10 = "";
} else if ($item11 == $_POST['item']){
    $item11 = "";
} else if ($item12 == $_POST['item']){
    $item12 = "";
} else if ($item13 == $_POST['item']){
    $item13 = "";
} else if ($item14 == $_POST['item']){
    $item14 = "";
} else if ($item15 == $_POST['item']){
    $item15 = "";
} else if ($item16 == $_POST['item']){
    $item16 = "";
} else if ($item17 == $_POST['item']){
    $item17 = "";
} else if ($item18 == $_POST['item']){
    $item19 = "";
} else if ($item20 == $_POST['item']){
    $item20 = "";
} else if ($item21 == $_POST['item']){
    $item21 = "";
} else if ($item22 == $_POST['item']){
    $item22 = "";
} else if ($item23 == $_POST['item']){
    $item23 = "";
} else if ($item24 == $_POST['item']){
    $item24 = "";
} else if ($item25 == $_POST['item']){
    $item25 = "";
}

$dinheiro = $dinheiro_atual + $_POST['preco'];
$usuario = $nome;


$dar_dinheiro = $repositorio->DarDinheiro($id,$dinheiro);
$tirar_item = $repositorio->ApagarItem($usuario);
$novo_inventario = $repositorio->AdicionarItem($id_inventario,$id_usuario,$nome_pers,$item1,$item2,$item3,$item4,$item5,$item6,$item7,$item8,$item9,$item10,$item11,$item12,$item13,$item14,$item15,$item16,$item17,$item18,$item19,$item20,$item21,$item22,$item23,$item24,$item25);

header('Location: index_loja.php');

?>