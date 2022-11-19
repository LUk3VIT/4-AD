<?php

session_start();

unset($_SESSION['item2']);
if(isset($_SESSION['item3'])){
    unset($_SESSION['item3']);
}

if(isset($_GET['arma'])){
    if($_GET['arma'] == "espada curta e escudo"){
        $_SESSION['item2'] = "espada curta";
        $_SESSION['item3'] = "escudo";
    } else if($_GET['arma'] == "mangual e escudo"){
        $_SESSION['item2'] = "mangual";
        $_SESSION['item3'] = "escudo";
    } else {
        echo $_SESSION['item2'] = $_GET['arma'];
    }
}

if(isset($_GET['armadura'])){
    echo $_SESSION['item1'] = $_GET['armadura'];
}

header('Location: form_pers.php');

?>