<?php

session_start();
require_once '../../classes/repositorioTabletop.php'; 
$repositorio = new RepositorioTabletopMySQL();

$id = $_SESSION['id_comprador'];
$personagem = $repositorio->MostrarPersonagem($id);
foreach ($personagem as $key) {
    $dinheiro = $key['dinheiro'];
    $id_pers = $key['id_pers'];
    $nome = $nome_pers = $key['nome'];
    $id = $key['id_inventario'];
    $x = $_GET['id'];
}

if($_GET['id'] == "bandagem"){
    $item = "bandagem";
} else if($_GET['id'] == "bencao"){
    $item = "feitiço de benção";
} else if($_GET['id'] == "arco"){
    $item = "arco";
} else if($_GET['id'] == "espada_curta"){
    $item = "espada curta";
} else if($_GET['id'] == "mangual"){
    $item = "mangual";
} else if($_GET['id'] == "armadura_aco"){
    $item = "armadura de aço";
} else if($_GET['id'] == "agua_benta"){
    $item = "frasco de água benta";
} else if($_GET['id'] == "lanterna"){
    $item = "lanterna";
} else if($_GET['id'] == "armadura_malha"){
    $item = "armadura de malha";
} else if($_GET['id'] == "adaga"){
    $item = "adaga";
} else if($_GET['id'] == "tonfa"){
    $item = "tonfa";
} else if($_GET['id'] == "poção_cura"){
    $item = "poção de cura";
} else if($_GET['id'] == "ressureição"){
    $item = "ritual de ressurreição";
} else if($_GET['id'] == "corda"){
    $item = "corda";
} else if($_GET['id'] == "escudo"){
    $item = "escudo";
} else if($_GET['id'] == "funda"){
    $item = "funda";
} else if($_GET['id'] == "espada_montante"){
    $item = "espada montante";
} else if($_GET['id'] == "martelo_guerra"){
    $item = "martelo de guerra";
} else if($_GET['id'] == "livro_feitiços"){
    $item = "livro de feitiços";
}


$espaco_livre = $repositorio->MostrarInventario($nome);
foreach ($espaco_livre as $key) {
    if($key['item1'] == NULL){
        $espaco = "item1";
    } else if($key['item2'] == NULL){
        $espaco = "item2";
    } else if($key['item3'] == NULL){
        $espaco = "item3";
    } else if($key['item4'] == NULL){
        $espaco = "item4";
    } else if($key['item5'] == NULL){
        $espaco = "item5";
    } else if($key['item6'] == NULL){
        $espaco = "item6";
    } else if($key['item7'] == NULL){
        $espaco = "item7";
    } else if($key['item8'] == NULL){
        $espaco = "item8";
    } else if($key['item9'] == NULL){
        $espaco = "item9";
    } else if($key['item10'] == NULL){
        $espaco = "item10";
    } else if($key['item11'] == NULL){
        $espaco = "item11";
    } else if($key['item12'] == NULL){
        $espaco = "item12";
    } else if($key['item13'] == NULL){
        $espaco = "item13";
    } else if($key['item14'] == NULL){
        $espaco = "item14";
    } else if($key['item15'] == NULL){
        $espaco = "item15";
    } else if($key['item16'] == NULL){
        $espaco = "item16";
    } else if($key['item17'] == NULL){
        $espaco = "item17";
    } else if($key['item18'] == NULL){
        $espaco = "item18";
    } else if($key['item19'] == NULL){
        $espaco = "item19";
    } else if($key['item20'] == NULL){
        $espaco = "item20";
    } else if($key['item21'] == NULL){
        $espaco = "item21";
    } else if($key['item22'] == NULL){
        $espaco = "item22";
    } else if($key['item23'] == NULL){
        $espaco = "item23";
    } else if($key['item24'] == NULL){
        $espaco = "item24";
    } else if($key['item25'] == NULL){
        $espaco = "item25";
    } else {
        $_SESSION['msg'] = "Inventário do personagem selecionado para receber o item está lotado, venda algum item ou troque com outro personagem para liberar espaço";
    }
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


if($espaco == "item1"){
    $item1 = $item;
} else if($espaco == "item2"){
    $item2 = $item;
} else if($espaco == "item3"){
    $item3 = $item;
} else if($espaco == "item4"){
    $item4 = $item;
} else if($espaco == "item5"){
    $item5 = $item;
} else if($espaco == "item6"){
    $item6 = $item;
} else if($espaco == "item7"){
    $item7 = $item;
} else if($espaco == "item8"){
    $item8 = $item;
} else if($espaco == "item9"){
    $item9 = $item;
} else if($espaco == "item10"){
    $item10 = $item;
} else if($espaco == "item11"){
    $item11 = $item;
} else if($espaco == "item12"){
    $item12 = $item;
} else if($espaco == "item13"){
    $item13 = $item;
} else if($espaco == "item14"){
    $item14 = $item;
} else if($espaco == "item15"){
    $item15 = $item;
} else if($espaco == "item16"){
    $item16 = $item;
} else if($espaco == "item17"){
    $item17 = $item;
} else if($espaco == "item18"){
    $item18 = $item;
} else if($espaco == "item19"){
    $item19 = $item;
} else if($espaco == "item20"){
    $item20 = $item;
} else if($espaco == "item21"){
    $item21 = $item;
} else if($espaco == "item22"){
    $item22 = $item;
} else if($espaco == "item23"){
    $item23 = $item;
} else if($espaco == "item24"){
    $item24 = $item;
} else if($espaco == "item25"){
    $item25 = $item;
}



$preco = $repositorio->PuxarPreco($item);

if($preco > $dinheiro){
    $_SESSION['msg'] = "Você não tem dinheiro suficiente para comprar o item ".$item."";
    header("Location: index_loja.php?id='$x'");
} else {
    $dinheiro_atual = $dinheiro - $preco;
    $destinatario = $espaco;
    echo $item;
    echo $usuario = $nome_pers;

    $apagar_inventario = $repositorio->ApagarItem($usuario);

    $recolocar_inventario = $repositorio->AdicionarItem($id_inventario,$id_usuario,$nome_pers,$item1,$item2,$item3,$item4,$item5,$item6,$item7,$item8,$item9,$item10,$item11,$item12,$item13,$item14,$item15,$item16,$item17,$item18,$item19,$item20,$item21,$item22,$item23,$item24,$item25);

    $gastar = $repositorio->TirarDinheiro($id_pers,$dinheiro_atual);
    header("Location: index_loja.php");
}

?>