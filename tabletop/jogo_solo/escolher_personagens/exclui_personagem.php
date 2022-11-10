<?php

session_start();
require_once '../../classes/repositorioTabletop.php'; 
$repositorio = new RepositorioTabletopMySQL();

echo $id = $_GET['id'];

$personagem = $repositorio->MostrarPersonagem($id);
foreach ($personagem as $key) {
    $usuario = $key['nome'];
}

$excluir_inventario = $repositorio->ApagarItem($usuario);
$excluir_personagem = $repositorio->ApagarPersonagem($id);

header('Location: selec_pers.php');

?>