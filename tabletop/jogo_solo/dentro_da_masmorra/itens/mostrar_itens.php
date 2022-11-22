<?php

session_start();

echo $_SESSION['mostrar_itens'] = $_GET['id'];
header('Location: ../tabletop.php');

?>