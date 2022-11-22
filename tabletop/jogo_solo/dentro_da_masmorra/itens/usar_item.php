<?php

session_start();
require_once '../../../classes/repositorioTabletop.php'; 
$repositorio = new RepositorioTabletopMySQL();

if($_SESSION['turno'] == $_SESSION['personagem1']){
    $a = "1";
} else if($_SESSION['turno'] == $_SESSION['personagem2']){
    $a = "2";
} else if($_SESSION['turno'] == $_SESSION['personagem3']){
    $a = "3";
} else if($_SESSION['turno'] == $_SESSION['personagem4']){
    $a = "4";
}

$item =  $_GET['item'];

if($item == "corda"){

} else if($item == "bandagem"){
    $id = $_SESSION['turno'];
    
}

?>