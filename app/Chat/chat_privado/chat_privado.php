<?php
session_start();
$id = $_SESSION['id_usuario'];
$id_dest = 4;
include("../bd_conect.php");
$sql = $pdo->query("SELECT * FROM chat_privado WHERE id_usuario = '$id' AND id_dest = '$id_dest'"); 
foreach ($sql->fetchAll() as $key) {
	echo "<h3>".$key['nome_usuario']."</h3>";
	echo "<h5>".$key['msg']."</h5>";
}
?>