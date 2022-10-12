<?php

session_start();
if(isset($_SESSION['id_usuario'])){

} else {
	header('Location: ../login.php');
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Chat-Geral</title>
	<script type="text/javascript"> 
		function ajax(){
			var req = new XMLHttpRequest();
			req.onreadystatechange = function(){
				if (req.readyState == 4 && req.status == 200) {
						document.getElementById('chat').innerHTML = req.responseText;
				}
			}
			req.open('GET', 'chat_privado.php', true);
			req.send();
		}
	
		setInterval(function(){ajax();}, 1000);

 
	</script>
</head>
<body onload="ajax();">
	<div id="chat">

		
	</div>
	<form method="post" action="index_chat_privado.php">
		<input type="text" name="mensagem" placeholder="Digite uma Mensagem">
		<input type="submit" value="Enviar">
		
	</form>
	<?php
		include("../bd_conect.php");
		if(isset($_POST['mensagem'])){
			$mensagem = $_POST['mensagem'];
			$nome = $_SESSION['nome_usuario'];
			$id = $_SESSION['id_usuario'];
			$id_dest = 4;

			$sql = $pdo->query("INSERT INTO chat_privado SET nome_usuario= '$nome', msg= '$mensagem', id_usuario= '$id', id_dest= '$id_dest'");
		}
	?>

</body>
</html>