<?php

session_start();

if(isset($_GET['arma'])){
    echo $_SESSION['item2'] = $_GET['arma'];
}

if(isset($_GET['armadura'])){
    echo $_SESSION['item1'] = $_GET['armadura'];
}

header('Location: form_pers.php');

?>