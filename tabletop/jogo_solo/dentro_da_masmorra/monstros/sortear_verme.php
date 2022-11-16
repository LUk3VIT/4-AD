<?php

session_start();
require_once '../../../classes/repositorioTabletop.php'; 
$repositorio = new RepositorioTabletopMySQL();

$_SESSION['turno'] = $_SESSION['turno1'];
$sorteio = rand(1,6);

$verme = $repositorio->SortearVerme($sorteio);
foreach ($verme as $key) {
    $_SESSION['monstro'] = true;
    $_SESSION['nome_monstro'] = $key['nome'];
    $_SESSION['nivel_monstro'] = $key['nivel'];
    
    $x = $key['quantidade'];
    $quantidade = 0;
    while ($x > 0) {
        $dado = rand(1,6);
        $quantidade = $quantidade + $dado;
        $x = $x - 1;
    }
    $_SESSION['quantidade_monstro'] = $quantidade;
    $_SESSION['tesouro_monstro'] = $key['tesouro'];
    if($key['hab1'] != NULL){
        $_SESSION['hab1_monstro'] = $key['hab1'];
    }
    if($key['hab2'] != NULL){
        $_SESSION['hab2_monstro'] = $key['hab2'];
    }
}

header('Location: ../tabletop.php');

?>