<?php
    session_start();
    
    if(isset($_SESSION['personagem1'])){
        if(isset($_SESSION['personagem2'])){
            if(isset($_SESSION['personagem3'])){
                if(isset($_SESSION['personagem4'])){
                    header('Location: selec_pers.php');
                } else {
                    echo $_SESSION['personagem4'] = $_GET['id'];
                    header('Location: selec_pers.php');
                }
            } else {
                echo $_SESSION['personagem3'] = $_GET['id'];
                header('Location: selec_pers.php');
            }
        } else {
            echo $_SESSION['personagem2'] = $_GET['id'];
            header('Location: selec_pers.php');
        }
    } else {
        echo $_SESSION['personagem1'] = $_GET['id'];
        header('Location: selec_pers.php');
    }


?>