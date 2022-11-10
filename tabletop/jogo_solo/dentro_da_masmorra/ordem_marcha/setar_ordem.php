<?php

    session_start();
    

    if(isset($_SESSION['turno1'])){
        if(isset($_SESSION['turno2'])){
            if(isset($_SESSION['turno3'])){
                if(isset($_SESSION['turno4'])){

                } else {
                    $_SESSION['turno4'] = $_GET['id'];
                }
            } else {
                $_SESSION['turno3'] = $_GET['id'];
            }
        } else {
            $_SESSION['turno2'] = $_GET['id'];
        }
    } else {
        $_SESSION['turno1'] = $_GET['id'];
    }
    header('Location: definir_ordem_marcha.php');

?>