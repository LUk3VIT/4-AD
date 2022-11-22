<?php

session_start();

$id = $_SESSION['turno'];
if($id == $_SESSION['personagem1']){
    $a = "1";
} else if($id == $_SESSION['personagem2']){
    $a = "2";
} else if($id == $_SESSION['personagem3']){
    $a = "3";
} else if($id == $_SESSION['personagem4']){
    $a = "4";
}
if(isset($_GET['desq'])){
    $_SESSION['desq'] = $_GET['desq'];
}
$item = $_SESSION['desq'];

if($item == "lanterna"){
    if($_SESSION['confirmado']){
        unset($_SESSION['confirmado']);
        unset($_SESSION['confirmar']);
    } else {
        if($_SESSION['turno'] == $_SESSION['personagem1']){
            if($_SESSION['arma1_personagem2'] == "lanterna" || $_SESSION['arma2_personagem2'] == "lanterna" || $_SESSION['arma1_personagem3'] == "lanterna" || $_SESSION['arma2_personagem3'] == "lanterna" || $_SESSION['arma1_personagem4'] == "lanterna" || $_SESSION['arma2_personagem4'] == "lanterna"){
    
            } else {
                $_SESSION['confirmar'] = "Você está desequipando a lanterna, se fizer isso todos do grupo terão desvantagem em todos os dados, tem certeza que deseja continuar??";
                header('Location: ../tabletop.php');
                exit;
                
            }
        } else if($_SESSION['turno'] == $_SESSION['personagem2']){
            if($_SESSION['arma1_personagem1'] == "lanterna" || $_SESSION['arma2_personagem1'] == "lanterna" || $_SESSION['arma1_personagem3'] == "lanterna" || $_SESSION['arma2_personagem3'] == "lanterna" || $_SESSION['arma1_personagem4'] == "lanterna" || $_SESSION['arma2_personagem4'] == "lanterna"){
    
            } else {
                $_SESSION['confirmar'] = "Você está desequipando a lanterna, se fizer isso todos do grupo terão desvantagem em todos os dados, tem certeza que deseja continuar??";
                header('Location: ../tabletop.php');
                exit;
                
            }
        } else if($_SESSION['turno'] == $_SESSION['personagem3']){
            if($_SESSION['arma1_personagem1'] == "lanterna" || $_SESSION['arma2_personagem1'] == "lanterna" || $_SESSION['arma1_personagem2'] == "lanterna" || $_SESSION['arma2_personagem2'] == "lanterna" || $_SESSION['arma1_personagem4'] == "lanterna" || $_SESSION['arma2_personagem4'] == "lanterna"){
    
            } else {
                $_SESSION['confirmar'] = "Você está desequipando a lanterna, se fizer isso todos do grupo terão desvantagem em todos os dados, tem certeza que deseja continuar??";
                header('Location: ../tabletop.php');
                exit;
                
            }
        } else if($_SESSION['turno'] == $_SESSION['personagem4']){
            if($_SESSION['arma1_personagem1'] == "lanterna" || $_SESSION['arma2_personagem1'] == "lanterna" || $_SESSION['arma1_personagem3'] == "lanterna" || $_SESSION['arma2_personagem3'] == "lanterna" || $_SESSION['arma1_personagem2'] == "lanterna" || $_SESSION['arma2_personagem2'] == "lanterna"){
    
            } else {
                $_SESSION['confirmar'] = "Você está desequipando a lanterna, se fizer isso todos do grupo terão desvantagem em todos os dados, tem certeza que deseja continuar??";
                header('Location: ../tabletop.php');
                exit;
            }
        }
    }
}

if($item == strtolower($_SESSION["armadura_personagem$a"])){
    unset($_SESSION["armadura_personagem$a"]);
} else if($item == strtolower($_SESSION["arma1_personagem$a"])){
    unset($_SESSION["arma1_personagem$a"]);
} else if($item == strtolower($_SESSION["arma2_personagem$a"])){
    unset($_SESSION["arma2_personagem$a"]);
}

header("Location: ../passar_turno.php?id=$id");

?>