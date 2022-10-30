<?php

    session_start();

    if(isset($_GET['ver'])){
        $_SESSION['id_pers'] = $_GET['ver'];
        header('Location: ver_pers.php');
    } else if(isset($_GET['tirar'])){
        $personagem_retirado = $_GET['tirar'];

        if(isset($_SESSION['personagem1'])){
            if($personagem_retirado == $_SESSION['personagem1']){
                unset($_SESSION['personagem1']);
                header('Location: selec_pers.php');
            } else if($personagem_retirado == $_SESSION['personagem2']){
                unset($_SESSION['personagem2']);
                header('Location: selec_pers.php');
            } else if($personagem_retirado == $_SESSION['personagem3']){
                unset($_SESSION['personagem3']);
                header('Location: selec_pers.php');
            } else if($personagem_retirado == $_SESSION['personagem4']){
                unset($_SESSION['personagem4']);
                header('Location: selec_pers.php');
            } 
        } else if(isset($_SESSION['personagem2'])){
            if($personagem_retirado == $_SESSION['personagem1']){
                unset($_SESSION['personagem1']);
                header('Location: selec_pers.php');
            } else if($personagem_retirado == $_SESSION['personagem2']){
                unset($_SESSION['personagem2']);
                header('Location: selec_pers.php');
            } else if($personagem_retirado == $_SESSION['personagem3']){
                unset($_SESSION['personagem3']);
                header('Location: selec_pers.php');
            } else if($personagem_retirado == $_SESSION['personagem4']){
                unset($_SESSION['personagem4']);
                header('Location: selec_pers.php');
            } 
        } else if(isset($_SESSION['personagem3'])){
            if($personagem_retirado == $_SESSION['personagem1']){
                unset($_SESSION['personagem1']);
                header('Location: selec_pers.php');
            } else if($personagem_retirado == $_SESSION['personagem2']){
                unset($_SESSION['personagem2']);
                header('Location: selec_pers.php');
            } else if($personagem_retirado == $_SESSION['personagem3']){
                unset($_SESSION['personagem3']);
                header('Location: selec_pers.php');
            } else if($personagem_retirado == $_SESSION['personagem4']){
                unset($_SESSION['personagem4']);
                header('Location: selec_pers.php');
            } 
        } else if(isset($_SESSION['personagem4'])){
            if($personagem_retirado == $_SESSION['personagem1']){
                unset($_SESSION['personagem1']);
                header('Location: selec_pers.php');
            } else if($personagem_retirado == $_SESSION['personagem2']){
                unset($_SESSION['personagem2']);
                header('Location: selec_pers.php');
            } else if($personagem_retirado == $_SESSION['personagem3']){
                unset($_SESSION['personagem3']);
                header('Location: selec_pers.php');
            } else if($personagem_retirado == $_SESSION['personagem4']){
                unset($_SESSION['personagem4']);
                header('Location: selec_pers.php');
            } 
        } 
    }
?>