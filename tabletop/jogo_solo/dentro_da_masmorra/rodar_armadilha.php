<?php

session_start();

$dado = rand(1,6);

if($dado == 1){
    $_SESSION['nome_armadilha'] = "Dardo";
    $_SESSION['img_armadilha'] = "../../imagens/armadilhas/Dardo.png";
    $_SESSION['nivel_armadilha'] = 2;
    $_SESSION['alvo'] = "aleatório";
    $_SESSION['dano_armadilha'] = 1;
} else if($dado == 2){
    $_SESSION['nome_armadilha'] = "Gás Venenoso";
    $_SESSION['img_armadilha'] = "../../imagens/armadilhas/gas.png";
    $_SESSION['nivel_armadilha'] = 3;
    $_SESSION['alvo'] = "todos";
    $_SESSION['dano_armadilha'] = 1;
} else if($dado == 3){
    $_SESSION['nome_armadilha'] = "Alçapão";
    $_SESSION['img_armadilha'] = "../../imagens/armadilhas/Alçapão.png";
    $_SESSION['nivel_armadilha'] = 4;
    $_SESSION['alvo'] = "1º";
    $_SESSION['dano_armadilha'] = 1;
} else if($dado == 4){
    $_SESSION['nome_armadilha'] = "Armadilha de Urso";
    $_SESSION['img_armadilha'] = "../../imagens/armadilhas/ArmadilhaDeUrso.png";
    $_SESSION['nivel_armadilha'] = 4;
    $_SESSION['alvo'] = "1º";
    $_SESSION['dano_armadilha'] = 1;
} else if($dado == 5){
    $_SESSION['nome_armadilha'] = "Lanças";
    $_SESSION['img_armadilha'] = "../../imagens/armadilhas/Lanças.png";
    $_SESSION['nivel_armadilha'] = 5;
    $_SESSION['alvo'] = "2 aleatórios";
    $_SESSION['dano_armadilha'] = 1;
} else if($dado == 6){
    $_SESSION['nome_armadilha'] = "Pedra Gigante";
    $_SESSION['img_armadilha'] = "../../imagens/armadilhas/Pedra.png";
    $_SESSION['nivel_armadilha'] = 5;
    $_SESSION['alvo'] = "4º";
    $_SESSION['dano_armadilha'] = 2;
}

//if(isset($_SESSION['tesouro_armadilha'])){
//    header('Location: roda_recompensa.php');
//} else {
    $_SESSION['tesouro_armadilha'] = true;
    $_SESSION['turno'] = "armadilha";
    header('Location: tabletop.php');
//}

?>