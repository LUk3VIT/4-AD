<?php

session_start();
require_once '../classes/repositorioTabletop.php'; 
$repositorio = new RepositorioTabletopMySQL(); 


if(isset($_POST['nome'])){
    $_SESSION['nome_pers'] = $_POST['nome']; 
    $_SESSION['classe'] = $_POST['classe'];

    header('Location: form2_pers.php');
}

?>