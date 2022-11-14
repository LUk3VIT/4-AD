<?php

session_start();

if($_GET['id'] == $_SESSION['turno1']){
    $_SESSION['turno'] = $_SESSION['turno2'];
} else if($_GET['id'] == $_SESSION['turno2']){
    $_SESSION['turno'] = $_SESSION['turno3'];
} else if($_GET['id'] == $_SESSION['turno3']){
    $_SESSION['turno'] = $_SESSION['turno4'];
} else if($_GET['id'] == $_SESSION['turno4']){
    $_SESSION['turno'] = $_SESSION['turno1'];
}

header('Location: tabletop.php');

?>