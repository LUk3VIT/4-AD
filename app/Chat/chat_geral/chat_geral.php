<?php
include("../bd_conect.php"); 
$sql = $pdo->query("SELECT * FROM chat_geral"); 
foreach ($sql->fetchAll() as $key) {
	echo "<div class='caixa__chat__usuario'>";
	echo '<h3 class="nomeUsuario">'.$key['nome_usuario']."</h3>";
	echo '<h5 class="msg">'.$key['msg']."</h5>";
	echo "</div>";
}
?>