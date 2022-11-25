<?php

session_start();
require_once '../../../classes/repositorioTabletop.php'; 
$repositorio = new RepositorioTabletopMySQL();

if(isset($_SESSION['mapa_inicial'])){
    $dado = "1".rand(1,5);
    $_SESSION['numero_sala'] = $dado;
    $_SESSION['mapa_atual'] = $repositorio->SortearMapaInicial($dado);
    $_SESSION['dir'] = $_GET['id'];
    if($_GET['id'] == "esquerda" || $_GET['id'] == "direita"){
        $mapa = $_SESSION['mapa_atual'];
        $x = $repositorio->VerificarBaixo($mapa);
        if($x > 0){
            header('Location: sortear_novo_mapa.php');
        } else {
            header('Location: montar_mapa_geral.php');
        }
    } else {
        header('Location: montar_mapa_geral.php');
    }
} else {

    $_SESSION['mapa_inicial'] = true;
    $dado = 5;
    $_SESSION['numero_sala'] = $dado;
    echo $_SESSION['mapa_atual'] = $repositorio->SortearMapaInicial($dado);
    header('Location: montar_mapa_geral.php');
    
}

?>