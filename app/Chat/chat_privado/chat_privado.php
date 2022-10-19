<?php
session_start();
$id = $_SESSION['id_usuario'];
$id_dest = $_SESSION['id_dest'];
include("../bd_conect.php");
$sql = $pdo->query("SELECT * FROM chat_privado WHERE id_usuario = '$id' AND id_dest = '$id_dest' OR id_usuario = '$id_dest' AND id_dest = '$id'"); 
foreach ($sql->fetchAll() as $key) {
	echo "<div class='caixa__chat__usuario'>";
	echo "<h3 class='nomeUsuario'>".$key['nome_usuario']."</h3>";
	echo "<h5 class='msg'>".$key['msg']."</h5>";
	echo "</div>";
}
?>