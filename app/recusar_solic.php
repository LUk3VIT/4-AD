<?php
 
session_start();
require_once '../classes/repositorioUsuario.php';
$repositorio = new RepositorioUsuariosMySQL();

$id_usuario = $_SESSION['id_usuario'];
$id_amg = $_GET['id'];

$apagar_solic = $repositorio->ApagarSolicitacao($id_usuario,$id_amg);

?>