<?php

session_start();

unset($_SESSION['turno1']);
unset($_SESSION['turno2']);
unset($_SESSION['turno3']);
unset($_SESSION['turno4']);

if(isset($_GET['id'])){
    header('Location: ../../index_jogo_solo.php');
} else {
    header('Location: definir_ordem_marcha.php');
}



?>