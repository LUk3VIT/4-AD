<?php

session_start();

if(isset($_POST['sim'])){
    $_SESSION['confirmado'] = true;
    header('Location: desequipar_item.php');
} else {
    unset($_SESSION['confirmar']);
    $id = $_SESSION['turno'];
    header("Location: mostrar_itens.php?id=$id");
}

?>