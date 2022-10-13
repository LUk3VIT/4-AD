<?php

session_start();
require_once '../classes/repositorioUsuario.php';
$repositorio = new RepositorioUsuariosMySQL();
$id_usuario = $_GET['id'];
$informacoes = $repositorio->ListarDados($id_usuario);

$dados = array_shift($informacoes);
echo "<p class='informacao__label'>Nick</p>";
echo "<p class='informacao__input'>".$dados->getNickUsuario()."</p>";
echo "<p class='informacao__label'>Nome</p>";
echo "<p class='informacao__input'>".$dados->getNomeUsuario()."</p>";
echo "<p class='informacao__label'>Email</p>";
echo "<p class='informacao__input'>".$dados->getEmailUsuario()."</p>";
echo "<p class='informacao__label'>Bio</p>";
echo "<p class='informacao__input__bio'>".$dados->getBioUsuario()."</p>";

?>