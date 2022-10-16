<?php

session_start();
require_once '../classes/repositorioUsuario.php';
$repositorio = new RepositorioUsuariosMySQL();
$id_usuario = $_SESSION['id_amg'];

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

$id_amg = $_SESSION['id_amg'];
$id_usuario = $_SESSION['id_usuario'];

 $numeroLinhas = $repositorio->VerificarAmgUsuario($id_usuario,$id_amg);
if($numeroLinhas > 0){
    echo "<h1>Já é seu amigo :(</h1>";
} else {
    echo "<h2><a href='solic_amz.php'>Mandar Solicitação de Amizade :)</a></h2>";
}



?>