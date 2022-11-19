<?php

session_start();

if($_GET['id'] == $_SESSION['turno1']){
    $_SESSION['turno'] = $_SESSION['turno2'];
} else if($_GET['id'] == $_SESSION['turno2']){
    $_SESSION['turno'] = $_SESSION['turno3'];
} else if($_GET['id'] == $_SESSION['turno3']){
    $_SESSION['turno'] = $_SESSION['turno4'];
} else if($_GET['id'] == $_SESSION['turno4']){
    $_SESSION['turno'] = $_SESSION['turno1'];
}

unset($_SESSION['dar_item']);
unset($_SESSION['item_troca']);
unset($_SESSION['mostrar_itens']);
unset($_SESSION['confirmar_ataque']);
if($_SESSION['quantidade_monstro'] > 0){

} else {
    unset($_SESSION['monstro']);
    unset($_SESSION['nome_monstro']);
    unset($_SESSION['nivel_monstro']);
    unset($_SESSION['quantidade_monstro']);
    unset($_SESSION['tesouro_monstro']);
    unset($_SESSION['hab1_monstro']);
    unset($_SESSION['hab2_monstro']);
}
unset($_SESSION['dado1']);
$x = 2;
while(isset($_SESSION["dado$x"])){
    unset($_SESSION["dado$x"]);
    $x = $x + 1;
}

unset($_SESSION['falha_automatica']);
unset($_SESSION['opcao_magia']);
$_SESSION["setar_magia"] == false;
unset($_SESSION['magia_usada']);
unset($_SESSION['atacar_magia']);


header('Location: tabletop.php');

?>