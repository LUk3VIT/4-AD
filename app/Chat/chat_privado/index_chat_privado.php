<?php

session_start();
if(isset($_SESSION['id_usuario'])){ 
	if(isset($_GET['id'])){
		$_SESSION['id_dest'] = $_GET['id'];
	} 
} else {
	header('Location: ../../login.php');
}

?>
<!DOCTYPE html> 
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Chat-Geral</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../../../assets/style/reset.css">
    <link rel="stylesheet" href="../../../assets/style/chatGeral.css">
	<link rel="stylesheet" href="../../../assets/style/chatPrivado.css">
	<title>Chat-Privado</title>
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
<body class="body__chatPrivado" onload="ajax();">

	<main class="main">
		<div class="caixa">
			<div id="chat" class="caixa__chat">
			</div>
		</div>
				<form class='form' method="post" action="index_chat_privado.php">
					<input class='form__calss' type="text" name="mensagem" placeholder="Digite uma Mensagem">
					<input type="submit" value="Enviar">
				</form>
				<?php
					include("../bd_conect.php");
					if(isset($_POST['mensagem'])){
						$mensagem = $_POST['mensagem'];
						$nome = $_SESSION['nome_usuario'];
						$id = $_SESSION['id_usuario'];
						$id_dest = $_SESSION['id_dest'];

						$sql = $pdo->query("INSERT INTO chat_privado SET nome_usuario= '$nome', msg= '$mensagem', id_usuario= '$id', id_dest= '$id_dest'");
					}
				?>
	</main>

</body>
</html>