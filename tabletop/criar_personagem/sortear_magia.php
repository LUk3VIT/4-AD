<?php

session_start();

if(isset($_SESSION['magia1'])){
    if(isset($_SESSION['magia2'])){
        if(isset($_SESSION['magia3'])){
            header('Location: form2_pers.php');
        } else {
            $_SESSION['magia3'] = rand(1,6);
            header('Location: form2_pers.php');
        }
    } else {
        $_SESSION['magia2'] = rand(1,6);
        header('Location: form2_pers.php');
    }
} else {
    $_SESSION['magia1'] = rand(1,6);
    header('Location: form2_pers.php');
}

?>