<?php

session_start();
$_SESSION['id_amg'] = $_GET['id'];

header('Location: ver_perfil.php');

?>