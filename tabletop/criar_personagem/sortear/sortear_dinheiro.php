<?php

session_start();

$x = $_SESSION['x'];

$dinheiro = 0;
while($x >= 0){
    $dado = rand(1,6);
    $dinheiro = $dinheiro + $dado; 
    $x = $x - 1;
                }
$_SESSION['dinheiro'] = $dinheiro;
header('Location: ../form_pers.php');

?>