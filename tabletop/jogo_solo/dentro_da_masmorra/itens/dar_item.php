<?php

session_start();
require_once '../../../classes/repositorioTabletop.php'; 
$repositorio = new RepositorioTabletopMySQL();

if(isset($_GET['item'])){
    $_SESSION['item_troca'] = $_GET['item'];
}

if(isset($_GET['dest'])){

} else {
    unset($_SESSION['mostrar_itens']);
    $_SESSION['dar_item'] = true;
    header('Location: ../tabletop.php');
}

?>