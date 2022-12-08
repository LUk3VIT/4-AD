<?php

session_start();
require_once '../../../classes/repositorioTabletop.php'; 
$repositorio = new RepositorioTabletopMySQL();

unset($_SESSION['sala_finalizada']);
unset($_SESSION['sala_vazia']);

if(isset($_SESSION['mapa_inicial'])){
    if(isset($_SESSION['contador'])){
        $_SESSION['contador'] = $_SESSION['contador'] + 1;
    } else {
        $_SESSION['contador'] = 2;
    }
    $cont = $_SESSION['contador'];
    $dado = "1".rand(1,5);
    $_SESSION['numero_sala'] = $dado;
    $_SESSION['mapa_atual'] = $_SESSION["mapa$cont"] = $repositorio->SortearMapaInicial($dado);
    header('Location: ../sortear_conteudo.php');
    exit;
} else {

    $_SESSION['mapa_inicial'] = true;
    $dado = rand(1,6);
    $_SESSION['numero_sala'] = $dado;
    echo $_SESSION['mapa_atual'] = $repositorio->SortearMapaInicial($dado);
    header('Location: ../tabletop.php');
    exit;
}

?>