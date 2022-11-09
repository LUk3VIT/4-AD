<?php

session_start();

$id_personagem = $_GET['id'];

if($id_personagem == $_SESSION['personagem1']){
    unset($_SESSION['armadura_personagem1']);
    unset($_SESSION['arma1_personagem1']);
    unset($_SESSION['arma2_personagem1']);
} else if($id_personagem == $_SESSION['personagem2']){
    unset($_SESSION['armadura_personagem2']);
    unset($_SESSION['arma1_personagem2']);
    unset($_SESSION['arma2_personagem2']);
} else if($id_personagem == $_SESSION['personagem3']){
    unset($_SESSION['armadura_personagem3']);
    unset($_SESSION['arma1_personagem3']);
    unset($_SESSION['arma2_personagem3']);
} if($id_personagem == $_SESSION['personagem4']){
    unset($_SESSION['armadura_personagem4']);
    unset($_SESSION['arma1_personagem4']);
    unset($_SESSION['arma2_personagem4']);
}
header('Location: equipar_armas.php');

?>