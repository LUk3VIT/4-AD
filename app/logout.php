<?php
    session_start();
    require_once '../classes/repositorioUsuario.php'; 
    $repositorio = new RepositorioUsuariosMySQL();
    $status = "Offline";
    $id_usuario = $_SESSION['id_usuario'];
    $alt_stat = $repositorio->AlterarStatus($id_usuario,$status);
    session_destroy();
    header('Location: ../index.php');
?>