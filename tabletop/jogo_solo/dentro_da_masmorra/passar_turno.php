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

header('Location: tabletop.php');

?>