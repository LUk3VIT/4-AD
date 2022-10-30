<?php

session_start();
require_once '../../classes/repositorioTabletop.php'; 
$repositorio = new RepositorioTabletopMySQL();

echo $_SESSION['id_remetente'];
$item_trocado = $_POST['item'];



$id = $_SESSION['id_remetente'];
$personagem = $repositorio->MostrarPersonagem($id);
foreach ($personagem as $key) {
    $nome = $key['nome'];
}
$inventario = $repositorio->MostrarInventario($nome);
foreach ($inventario as $key) {
    if($key['item1'] == $_SESSION['item']){
        $item = "item1";
    } else if($key['item2'] == $_SESSION['item']){
        $item = "item2";
    } else if($key['item3'] == $_SESSION['item']){
        $item = "item3";
    } else if($key['item4'] == $_SESSION['item']){
        $item = "item4";
    } else if($key['item5'] == $_SESSION['item']){
        $item = "item5";
    } else if($key['item6'] == $_SESSION['item']){
        $item = "item6";
    } else if($key['item7'] == $_SESSION['item']){
        $item = "item7";
    } else if($key['item8'] == $_SESSION['item']){
        $item = "item8";
    } else if($key['item9'] == $_SESSION['item']){
        $item = "item9";
    } else if($key['item10'] == $_SESSION['item']){
        $item = "item10";
    } else if($key['item11'] == $_SESSION['item']){
        $item = "item11";
    } else if($key['item12'] == $_SESSION['item']){
        $item = "item12";
    } else if($key['item13'] == $_SESSION['item']){
        $item = "item13";
    } else if($key['item14'] == $_SESSION['item']){
        $item = "item14";
    } else if($key['item15'] == $_SESSION['item']){
        $item = "item15";
    } else if($key['item16'] == $_SESSION['item']){
        $item = "item16";
    } else if($key['item17'] == $_SESSION['item']){
        $item = "item17";
    } else if($key['item18'] == $_SESSION['item']){
        $item = "item18";
    } else if($key['item19'] == $_SESSION['item']){
        $item = "item19";
    } else if($key['item20'] == $_SESSION['item']){
        $item = "item20";
    } else if($key['item21'] == $_SESSION['item']){
        $item = "item21";
    } else if($key['item22'] == $_SESSION['item']){
        $item = "item22";
    } else if($key['item23'] == $_SESSION['item']){
        $item = "item23";
    } else if($key['item24'] == $_SESSION['item']){
        $item = "item24";
    } else if($key['item25'] == $_SESSION['item']){
        $item = "item25";
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

    if($item == "item1"){
        $item1 = $item_trocado;
    } else if($item == "item2"){
        $item2 = $item_trocado;
    } else if($item == "item3"){
        $item3 = $item_trocado;
    } else if($item == "item4"){
        $item4 = $item_trocado;
    } else if($item == "item5"){
        $item5 = $item_trocado;
    } else if($item == "item6"){
        $item6 = $item_trocado;
    } else if($item == "item7"){
        $item7 = $item_trocado;
    } else if($item == "item8"){
        $item8 = $item_trocado;
    } else if($item == "item9"){
        $item9 = $item_trocado;
    } else if($item == "item10"){
        $item10 = $item_trocado;
    } else if($item == "item11"){
        $item11 = $item_trocado;
    } else if($item == "item12"){
        $item12 = $item_trocado;
    } else if($item == "item13"){
        $item13 = $item_trocado;
    } else if($item == "item14"){
        $item14 = $item_trocado;
    } else if($item == "item15"){
        $item15 = $item_trocado;
    } else if($item == "item16"){
        $item16 = $item_trocado;
    } else if($item == "item17"){
        $item17 = $item_trocado;
    } else if($item == "item18"){
        $item18 = $item_trocado;
    } else if($item == "item19"){
        $item19 = $item_trocado;
    } else if($item == "item20"){
        $item20 = $item_trocado;
    } else if($item == "item21"){
        $item21 = $item_trocado;
    } else if($item == "item22"){
        $item22 = $item_trocado;
    } else if($item == "item23"){
        $item23 = $item_trocado;
    } else if($item == "item24"){
        $item24 = $item_trocado;
    } else if($item == "item25"){
        $item25 = $item_trocado;
    }

    $usuario = $nome;
    $apagar_item = $repositorio->ApagarItem($usuario);
    $recolocar_inventario = $repositorio->AdicionarItem($id_inventario,$id_usuario,$nome_pers,$item1,$item2,$item3,$item4,$item5,$item6,$item7,$item8,$item9,$item10,$item11,$item12,$item13,$item14,$item15,$item16,$item17,$item18,$item19,$item20,$item21,$item22,$item23,$item24,$item25);
}


$nome = $_POST['nome'];
$inventario = $repositorio->MostrarInventario($nome);
foreach ($inventario as $key) {
    if($key['item1'] == $item_trocado){
        $item = "item1";
    } else if($key['item2'] == $item_trocado){
        $item = "item2";
    } else if($key['item3'] == $item_trocado){
        $item = "item3";
    } else if($key['item4'] == $item_trocado){
        $item = "item4";
    } else if($key['item5'] == $item_trocado){
        $item = "item5";
    } else if($key['item6'] == $item_trocado){
        $item = "item6";
    } else if($key['item7'] == $item_trocado){
        $item = "item7";
    } else if($key['item8'] == $item_trocado){
        $item = "item8";
    } else if($key['item9'] == $item_trocado){
        $item = "item9";
    } else if($key['item10'] == $item_trocado){
        $item = "item10";
    } else if($key['item11'] == $item_trocado){
        $item = "item11";
    } else if($key['item12'] == $item_trocado){
        $item = "item12";
    } else if($key['item13'] == $item_trocado){
        $item = "item13";
    } else if($key['item14'] == $item_trocado){
        $item = "item14";
    } else if($key['item15'] == $item_trocado){
        $item = "item15";
    } else if($key['item16'] == $item_trocado){
        $item = "item16";
    } else if($key['item17'] == $item_trocado){
        $item = "item17";
    } else if($key['item18'] == $item_trocado){
        $item = "item18";
    } else if($key['item19'] == $item_trocado){
        $item = "item19";
    } else if($key['item20'] == $item_trocado){
        $item = "item20";
    } else if($key['item21'] == $item_trocado){
        $item = "item21";
    } else if($key['item22'] == $item_trocado){
        $item = "item22";
    } else if($key['item23'] == $item_trocado){
        $item = "item23";
    } else if($key['item24'] == $item_trocado){
        $item = "item24";
    } else if($key['item25'] == $item_trocado){
        $item = "item25";
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

    if($item == "item1"){
        $item1 = $_SESSION['item'];
    } else if($item == "item2"){
        $item2 = $_SESSION['item'];
    } else if($item == "item3"){
        $item3 = $_SESSION['item'];
    } else if($item == "item4"){
        $item4 = $_SESSION['item'];
    } else if($item == "item5"){
        $item5 = $_SESSION['item'];
    } else if($item == "item6"){
        $item6 = $_SESSION['item'];
    } else if($item == "item7"){
        $item7 = $_SESSION['item'];
    } else if($item == "item8"){
        $item8 = $_SESSION['item'];
    } else if($item == "item9"){
        $item9 = $_SESSION['item'];
    } else if($item == "item10"){
        $item10 = $_SESSION['item'];
    } else if($item == "item11"){
        $item11 = $_SESSION['item'];
    } else if($item == "item12"){
        $item12 = $_SESSION['item'];
    } else if($item == "item13"){
        $item13 = $_SESSION['item'];
    } else if($item == "item14"){
        $item14 = $_SESSION['item'];
    } else if($item == "item15"){
        $item15 = $_SESSION['item'];
    } else if($item == "item16"){
        $item16 = $_SESSION['item'];
    } else if($item == "item17"){
        $item17 = $_SESSION['item'];
    } else if($item == "item18"){
        $item18 = $_SESSION['item'];
    } else if($item == "item19"){
        $item19 = $_SESSION['item'];
    } else if($item == "item20"){
        $item20 = $_SESSION['item'];
    } else if($item == "item21"){
        $item21 = $_SESSION['item'];
    } else if($item == "item22"){
        $item22 = $_SESSION['item'];
    } else if($item == "item23"){
        $item23 = $_SESSION['item'];
    } else if($item == "item24"){
        $item24 = $_SESSION['item'];
    } else if($item == "item25"){
        $item25 = $_SESSION['item'];
    }

    $usuario = $nome;
    $apagar_item = $repositorio->ApagarItem($usuario);
    $recolocar_inventario = $repositorio->AdicionarItem($id_inventario,$id_usuario,$nome_pers,$item1,$item2,$item3,$item4,$item5,$item6,$item7,$item8,$item9,$item10,$item11,$item12,$item13,$item14,$item15,$item16,$item17,$item18,$item19,$item20,$item21,$item22,$item23,$item24,$item25);
}

?>