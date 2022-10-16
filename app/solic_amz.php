<?php

session_start();
require_once '../classes/repositorioUsuario.php';
$repositorio = new RepositorioUsuariosMySQL();
echo $id_amg = $_SESSION['id_amg'];
echo $id_usuario = $_SESSION['id_usuario'];


$enviar = $repositorio->EnviarSolicitacao($id_usuario,$id_amg);

?>