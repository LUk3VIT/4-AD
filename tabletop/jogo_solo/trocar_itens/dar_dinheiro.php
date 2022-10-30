<?php

session_start();
require_once '../../classes/repositorioTabletop.php'; 
$repositorio = new RepositorioTabletopMySQL();

$id_pers = $_POST['id_remetente'];
$dinheiro_total = $_POST['dinheiro_total'];
$dinheiro = $_POST['dinheiro'];
echo $dinheiro_atual = $dinheiro_total - $dinheiro;
$dar_dinheiro = $repositorio->TirarDinheiro($id_pers,$dinheiro_atual);

$id = $id_dest = $_POST['id_dest'];
$dinheiro = $dinheiro_dest = $_POST['dinheiro_dest'] + $_POST['dinheiro'];
$perder_dinheiro = $repositorio->DarDinheiro($id,$dinheiro);

header('Location: ver_inventarios.php');

?>