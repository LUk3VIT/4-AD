<?php

    session_start();
    require_once '../../classes/repositorioTabletop.php'; 
    $repositorio = new RepositorioTabletopMySQL();

    $_SESSION['atacante'] = $_GET['id'];

    if(isset('ataque')){

    } else {
        if($_GET['id'] == $_SESSION['personagem1']){
            $a = "1";
        } else if($_GET['id'] == $_SESSION['personagem2']){
            $a = "2";
        } else if($_GET['id'] == $_SESSION['personagem3']){
            $a = "3";
        } else if($_GET['id'] == $_SESSION['personagem4']){
            $a = "4";
        }

        if(isset($_SESSION["arma1_personagem$a"])){
            
        }
        $_SESSION['confirmar_ataque'] = true;
        
    }

?>