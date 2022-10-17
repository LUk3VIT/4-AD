<?php

session_start();
require_once '../classes/repositorioUsuario.php';
$repositorio = new RepositorioUsuariosMySQL(); 


if(isset($_POST['nome'])){
    $_SESSION['nome_pers'] = $_POST['nome'];
    $_SESSION['classe'] = $_POST['classe'];

    header('Location: form2_pers.php');
}

?>