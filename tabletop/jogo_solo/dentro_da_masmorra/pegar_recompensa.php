<?php

session_start();
require_once '../../classes/repositorioTabletop.php'; 
$repositorio = new RepositorioTabletopMySQL();

$id = $_GET['id'];
$personagem = $repositorio->MostrarPersonagem($id);
foreach ($personagem as $key) {
    $nome = $key['nome'];
    $dinheiro = $key['dinheiro'];
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



if($_SESSION['tesouro'] == "ouro"){
    $dinheiro = $dinheiro + $_SESSION['valor_tesouro'];
    $pegar_dinheiro = $repositorio->DarDinheiro($id,$dinheiro);
} else if($_SESSION['tesouro'] == "gema"){

    if($key['item1'] == NULL){ 
        $item = "item1";
    } else if($key['item2'] == NULL){
        $item = "item2";
    } else if($key['item3'] == NULL){
        $item = "item3";
    } else if($key['item4'] == NULL){
        $item = "item4";
    } else if($key['item5'] == NULL){
        $item = "item5";
    } else if($key['item6'] == NULL){
        $item = "item6";
    } else if($key['item7'] == NULL){
        $item = "item7";
    } else if($key['item8'] == NULL){
        $item = "item8";
    } else if($key['item9'] == NULL){
        $item = "item9";
    } else if($key['item10'] == NULL){
        $item = "item10";
    } else if($key['item11'] == NULL){
        $item = "item11";
    } else if($key['item12'] == NULL){
        $item = "item12";
    } else if($key['item13'] == NULL){
        $item = "item13";
    } else if($key['item14'] == NULL){
        $item = "item14";
    } else if($key['item15'] == NULL){
        $item = "item15";
    } else if($key['item16'] == NULL){
        $item = "item16";
    } else if($key['item17'] == NULL){
        $item = "item17";
    } else if($key['item18'] == NULL){
        $item = "item18";
    } else if($key['item19'] == NULL){
        $item = "item19";
    } else if($key['item20'] == NULL){
        $item = "item20";
    } else if($key['item21'] == NULL){
        $item = "item21";
    } else if($key['item22'] == NULL){
        $item = "item22";
    } else if($key['item23'] == NULL){
        $item = "item23";
    } else if($key['item24'] == NULL){
        $item = "item24";
    } else if($key['item25'] == NULL){
        $item = "item25";
    } else {
        $_SESSION['erro'] = "Inventário do personagem selecionado para receber o item está lotado";
        header('Location: tabletop.php');
        exit;
    }

    if($item == "item1"){
        $item1 = $_SESSION['tesouro']."(".$_SESSION['valor_tesouro'].")";
    } else if($item == "item2"){
        $item2 = $_SESSION['tesouro']."(".$_SESSION['valor_tesouro'].")";
    } else if($item == "item3"){
        $item3 = $_SESSION['tesouro']."(".$_SESSION['valor_tesouro'].")";
    } else if($item == "item4"){
        $item4 = $_SESSION['tesouro']."(".$_SESSION['valor_tesouro'].")";
    } else if($item == "item5"){
        $item5 = $_SESSION['tesouro']."(".$_SESSION['valor_tesouro'].")";
    } else if($item == "item6"){
        $item6 = $_SESSION['tesouro']."(".$_SESSION['valor_tesouro'].")";
    } else if($item == "item7"){
        $item7 = $_SESSION['tesouro']."(".$_SESSION['valor_tesouro'].")";
    } else if($item == "item8"){
        $item8 = $_SESSION['tesouro']."(".$_SESSION['valor_tesouro'].")";
    } else if($item == "item9"){
        $item9 = $_SESSION['tesouro']."(".$_SESSION['valor_tesouro'].")";
    } else if($item == "item10"){
        $item10 = $_SESSION['tesouro']."(".$_SESSION['valor_tesouro'].")";
    } else if($item == "item11"){
        $item11 = $_SESSION['tesouro']."(".$_SESSION['valor_tesouro'].")";
    } else if($item == "item12"){
        $item12 = $_SESSION['tesouro']."(".$_SESSION['valor_tesouro'].")";
    } else if($item == "item13"){
        $item13 = $_SESSION['tesouro']."(".$_SESSION['valor_tesouro'].")";
    } else if($item == "item14"){
        $item14 = $_SESSION['tesouro']."(".$_SESSION['valor_tesouro'].")";
    } else if($item == "item15"){
        $item15 = $_SESSION['tesouro']."(".$_SESSION['valor_tesouro'].")";
    } else if($item == "item16"){
        $item16 = $_SESSION['tesouro']."(".$_SESSION['valor_tesouro'].")";
    } else if($item == "item17"){
        $item17 = $_SESSION['tesouro']."(".$_SESSION['valor_tesouro'].")";
    } else if($item == "item18"){
        $item18 = $_SESSION['tesouro']."(".$_SESSION['valor_tesouro'].")";
    } else if($item == "item19"){
        $item19 = $_SESSION['tesouro']."(".$_SESSION['valor_tesouro'].")";
    } else if($item == "item20"){
        $item20 = $_SESSION['tesouro']."(".$_SESSION['valor_tesouro'].")";
    } else if($item == "item21"){
        $item21 = $_SESSION['tesouro']."(".$_SESSION['valor_tesouro'].")";
    } else if($item == "item22"){
        $item22 = $_SESSION['tesouro']."(".$_SESSION['valor_tesouro'].")";
    } else if($item == "item23"){
        $item23 = $_SESSION['tesouro']."(".$_SESSION['valor_tesouro'].")";
    } else if($item == "item24"){
        $item24 = $_SESSION['tesouro']."(".$_SESSION['valor_tesouro'].")";
    } else if($item == "item25"){
        $item25 = $_SESSION['tesouro']."(".$_SESSION['valor_tesouro'].")";
    }

    $usuario = $nome;
    $apagar_item = $repositorio->ApagarItem($usuario);
    $recolocar_inventario = $repositorio->AdicionarItem($id_inventario,$id_usuario,$nome_pers,$item1,$item2,$item3,$item4,$item5,$item6,$item7,$item8,$item9,$item10,$item11,$item12,$item13,$item14,$item15,$item16,$item17,$item18,$item19,$item20,$item21,$item22,$item23,$item24,$item25);

} else {

    if($key['item1'] == NULL){ 
        $item = "item1";
    } else if($key['item2'] == NULL){
        $item = "item2";
    } else if($key['item3'] == NULL){
        $item = "item3";
    } else if($key['item4'] == NULL){
        $item = "item4";
    } else if($key['item5'] == NULL){
        $item = "item5";
    } else if($key['item6'] == NULL){
        $item = "item6";
    } else if($key['item7'] == NULL){
        $item = "item7";
    } else if($key['item8'] == NULL){
        $item = "item8";
    } else if($key['item9'] == NULL){
        $item = "item9";
    } else if($key['item10'] == NULL){
        $item = "item10";
    } else if($key['item11'] == NULL){
        $item = "item11";
    } else if($key['item12'] == NULL){
        $item = "item12";
    } else if($key['item13'] == NULL){
        $item = "item13";
    } else if($key['item14'] == NULL){
        $item = "item14";
    } else if($key['item15'] == NULL){
        $item = "item15";
    } else if($key['item16'] == NULL){
        $item = "item16";
    } else if($key['item17'] == NULL){
        $item = "item17";
    } else if($key['item18'] == NULL){
        $item = "item18";
    } else if($key['item19'] == NULL){
        $item = "item19";
    } else if($key['item20'] == NULL){
        $item = "item20";
    } else if($key['item21'] == NULL){
        $item = "item21";
    } else if($key['item22'] == NULL){
        $item = "item22";
    } else if($key['item23'] == NULL){
        $item = "item23";
    } else if($key['item24'] == NULL){
        $item = "item24";
    } else if($key['item25'] == NULL){
        $item = "item25";
    } else {
        $_SESSION['erro'] = "Inventário do personagem selecionado para receber o item está lotado";
        header('Location: tabletop.php');
        exit;
    }


    if($item == "item1"){
        $item1 = $_SESSION['tesouro'];
    } else if($item == "item2"){
        $item2 = $_SESSION['tesouro'];
    } else if($item == "item3"){
        $item3 = $_SESSION['tesouro'];
    } else if($item == "item4"){
        $item4 = $_SESSION['tesouro'];
    } else if($item == "item5"){
        $item5 = $_SESSION['tesouro'];
    } else if($item == "item6"){
        $item6 = $_SESSION['tesouro'];
    } else if($item == "item7"){
        $item7 = $_SESSION['tesouro'];
    } else if($item == "item8"){
        $item8 = $_SESSION['tesouro'];
    } else if($item == "item9"){
        $item9 = $_SESSION['tesouro'];
    } else if($item == "item10"){
        $item10 = $_SESSION['tesouro'];
    } else if($item == "item11"){
        $item11 = $_SESSION['tesouro'];
    } else if($item == "item12"){
        $item12 = $_SESSION['tesouro'];
    } else if($item == "item13"){
        $item13 = $_SESSION['tesouro'];
    } else if($item == "item14"){
        $item14 = $_SESSION['tesouro'];
    } else if($item == "item15"){
        $item15 = $_SESSION['tesouro'];
    } else if($item == "item16"){
        $item16 = $_SESSION['tesouro'];
    } else if($item == "item17"){
        $item17 = $_SESSION['tesouro'];
    } else if($item == "item18"){
        $item18 = $_SESSION['tesouro'];
    } else if($item == "item19"){
        $item19 = $_SESSION['tesouro'];
    } else if($item == "item20"){
        $item20 = $_SESSION['tesouro'];
    } else if($item == "item21"){
        $item21 = $_SESSION['tesouro'];
    } else if($item == "item22"){
        $item22 = $_SESSION['tesouro'];
    } else if($item == "item23"){
        $item23 = $_SESSION['tesouro'];
    } else if($item == "item24"){
        $item24 = $_SESSION['tesouro'];
    } else if($item == "item25"){
        $item25 = $_SESSION['tesouro'];
    }

    $usuario = $nome;
    $apagar_item = $repositorio->ApagarItem($usuario);
    $recolocar_inventario = $repositorio->AdicionarItem($id_inventario,$id_usuario,$nome_pers,$item1,$item2,$item3,$item4,$item5,$item6,$item7,$item8,$item9,$item10,$item11,$item12,$item13,$item14,$item15,$item16,$item17,$item18,$item19,$item20,$item21,$item22,$item23,$item24,$item25);
}

unset($_SESSION['tesouro']);
unset($_SESSION['valor_tesouro']);
if(isset($_SESSION['tesouro_enc'])){
    unset($_SESSION['tesouro_enc']);
    header('Location: passar_turno.php');
    exit;
}
$_SESSION['fim_turno'] = true;
header('Location: tabletop.php');

?>