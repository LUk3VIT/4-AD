<?php

session_start();

$_SESSION['mostrar_itens'] = $_GET['id'];
header('Location: ../tabletop.php');

?>