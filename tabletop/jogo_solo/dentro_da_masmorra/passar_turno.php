<?php

session_start();

if($_SESSION['quantidade_monstro'] > 0){
    $_SESSION['monstros_defender'] = $_SESSION['quantidade_monstro'];
} else {
    unset($_SESSION['monstro']);
    unset($_SESSION['nome_monstro']); 
    unset($_SESSION['nivel_monstro']);
    unset($_SESSION['quantidade_monstro']);
    unset($_SESSION['tesouro_monstro']);
    unset($_SESSION['hab1_monstro']);
    unset($_SESSION['hab2_monstro']);
    unset($_SESSION["arco_personagem1"]);
    unset($_SESSION["funda_personagem1"]);
    unset($_SESSION["arco_personagem2"]);
    unset($_SESSION["funda_personagem2"]);
    unset($_SESSION["arco_personagem3"]);
    unset($_SESSION["funda_personagem3"]);
    unset($_SESSION["arco_personagem4"]);
    unset($_SESSION["funda_personagem4"]);
}

if(isset($_SESSION['monstro'])){
    if($_GET['id'] == $_SESSION['turno1']){
        $_SESSION['turno'] = $_SESSION['turno2'];
    } else if($_GET['id'] == $_SESSION['turno2']){
        $_SESSION['turno'] = $_SESSION['turno3'];
    } else if($_GET['id'] == $_SESSION['turno3']){
        $_SESSION['turno'] = $_SESSION['turno4'];
    } else if($_GET['id'] == $_SESSION['turno4']){
        $_SESSION['turno'] = "monstros";
    } else if($_GET['id'] == "monstros"){
        $_SESSION['turno'] = $_SESSION['turno1'];
        unset($_SESSION["proteger_personagem1"]);
        unset($_SESSION["proteger_personagem2"]);
        unset($_SESSION["proteger_personagem3"]);
        unset($_SESSION["proteger_personagem4"]);
    }
} else {
    if($_GET['id'] == $_SESSION['turno1']){
        $_SESSION['turno'] = $_SESSION['turno2'];
    } else if($_GET['id'] == $_SESSION['turno2']){
        $_SESSION['turno'] = $_SESSION['turno3'];
    } else if($_GET['id'] == $_SESSION['turno3']){
        $_SESSION['turno'] = $_SESSION['turno4'];
    } else if($_GET['id'] == $_SESSION['turno4']){
        $_SESSION['turno'] = $_SESSION['turno1'];
    }
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
    unset($_SESSION["arco_personagem1"]);
    unset($_SESSION["funda_personagem1"]);
    unset($_SESSION["arco_personagem2"]);
    unset($_SESSION["funda_personagem2"]);
    unset($_SESSION["arco_personagem3"]);
    unset($_SESSION["funda_personagem3"]);
    unset($_SESSION["arco_personagem4"]);
    unset($_SESSION["funda_personagem4"]);
}
unset($_SESSION['dado1']);
$x = 2;
while(isset($_SESSION["dado$x"])){
    unset($_SESSION["dado$x"]);
    $x = $x + 1;
}

unset($_SESSION['falha_automatica']);
unset($_SESSION['opcao_magia']);
unset($_SESSION['magia_usada']);
unset($_SESSION['atacar_magia']);
unset($_SESSION['magia']);
unset($_SESSION['fim']);
unset($_SESSION['setar_magia']);
unset($_SESSION['dano']);
unset($_SESSION['bonus']);
unset($_SESSION['escolher_arma']);
unset($_SESSION['erro']);
unset($_SESSION['defesa_total']);
unset($_SESSION['dado']);
unset($_SESSION['defesa']);
unset($_SESSION['efeito_bonus']);
unset($_SESSION['vida_perdida']);
unset($_SESSION['escolher_cura']);
unset($_SESSION['mensagem']);
unset($_SESSION['escolher_protecao']);
unset($_SESSION['passar_defesa']);
unset($_SESSION['tesouro']);
unset($_SESSION['valor_tesouro']);

header('Location: tabletop.php');

?>