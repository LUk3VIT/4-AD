<?php

session_start();
require_once '../../../classes/repositorioTabletop.php'; 
$repositorio = new RepositorioTabletopMySQL();

if($_SESSION['turno'] == $_SESSION['personagem1']){
    $a = "1";
} else if($_SESSION['turno'] == $_SESSION['personagem2']){
    $a = "2";
} else if($_SESSION['turno'] == $_SESSION['personagem3']){
    $a = "3";
} else if($_SESSION['turno'] == $_SESSION['personagem4']){
    $a = "4";
}

$item =  $_GET['item'];

$id = $_SESSION['turno'];
$personagem = $repositorio->MostrarPersonagem($id);
foreach ($personagem as $key) {
    $usuario = $nome = $key['nome'];
    $classe = $key['classe'];
    $vida = $key['vida'];
}

$inventario = $repositorio->MostrarInventario($nome);
foreach ($inventario as $key) {
    // Copiar
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

// Verificar Espaço
if($item == $item1){
    $item1 = "";
} else if($item == $item2){
    $item2 = "";
} else if($item == $item3){
    $item3 = "";
} else if($item == $item4){
    $item4 = "";
} else if($item == $item5){
    $item5 = "";
} else if($item == $item6){
    $item6 = "";
} else if($item == $item7){
    $item7 = "";
} else if($item == $item8){
    $item8 = "";
} else if($item == $item9){
    $item9 = "";
} else if($item == $item10){
    $item10 = "";
} else if($item == $item11){
    $item11 = "";
} else if($item == $item12){
    $item12 = "";
} else if($item == $item13){
    $item13 = "";
} else if($item == $item14){
    $item14 = "";
} else if($item == $item15){
    $item15 = "";
} else if($item == $item16){
    $item16 = "";
} else if($item == $item17){
    $item17 = "";
} else if($item == $item18){
    $item18 = "";
} else if($item == $item19){
    $item19 = "";
} else if($item == $item20){
    $item20 = "";
} else if($item == $item21){
    $item21 = "";
} else if($item == $item22){
    $item22 = "";
} else if($item == $item23){
    $item23 = "";
} else if($item == $item24){
    $item24 = "";
} else if($item == $item25){
    $item25 = "";
}


 
if($item == "corda"){

} else if($item == "bandagem"){
    if(isset($_SESSION["bandagem_personagem$a"])){
        $_SESSION['erro'] = "Cada personagem só pode usar uma bandagem por aventura";
        header('Location: ../tabletop.php');
    } else {
        $_SESSION["vida_atual_personagem$a"] = $_SESSION["vida_atual_personagem$a"] + 1;
        $_SESSION["bandagem_personagem$a"] = true;
        $apagar_inventario = $repositorio->ApagarItem($usuario);
        $recolocar_inventario = $repositorio->AdicionarItem($id_inventario,$id_usuario,$nome_pers,$item1,$item2,$item3,$item4,$item5,$item6,$item7,$item8,$item9,$item10,$item11,$item12,$item13,$item14,$item15,$item16,$item17,$item18,$item19,$item20,$item21,$item22,$item23,$item24,$item25);
        header("Location: ../passar_turno.php?id=$id");
    }
} else if($item = "poção de cura"){
    if(isset($_SESSION["pocao_cura_personagem$a"])){
        $_SESSION['erro'] = "Cada personagem só pode usar uma poção de cura por aventura";
        header('Location: ../tabletop.php');
    } else {
        $_SESSION["vida_atual_personagem$a"] = $vida;
        $_SESSION["pocao_cura_personagem$a"] = true;
        $apagar_inventario = $repositorio->ApagarItem($usuario);
        $recolocar_inventario = $repositorio->AdicionarItem($id_inventario,$id_usuario,$nome_pers,$item1,$item2,$item3,$item4,$item5,$item6,$item7,$item8,$item9,$item10,$item11,$item12,$item13,$item14,$item15,$item16,$item17,$item18,$item19,$item20,$item21,$item22,$item23,$item24,$item25);
        header("Location: ../passar_turno.php?id=$id");
    }
}

?>