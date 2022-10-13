<?php
include("../bd_conect.php"); 
$sql = $pdo->query("SELECT * FROM chat_geral"); 
foreach ($sql->fetchAll() as $key) {
	echo "<h3>".$key['nome_usuario']."</h3>";
	echo "<h5>".$key['msg']."</h5>";
}
?>