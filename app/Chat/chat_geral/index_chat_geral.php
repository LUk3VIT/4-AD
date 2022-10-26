<?php

session_start();
require_once '../classes/repositorioChat.php'; 
$repositorio = new RepositorioChatMySQL();

$data_hj = date('d/m/Y');

$apagar = $repositorio->ApagarMensagens($data_hj);

if(isset($_SESSION['id_usuario'])){

} else {
	$_SESSION['mensagem_chat'] = "Precisa fazer login para participar do Chat Geral!!!";
	header('Location: ../../login.php');
}

?>
<!DOCTYPE html> 
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Chat-Geral</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../../../assets/style/reset.css">
    <link rel="stylesheet" href="../../../assets/style/home.css">
    <link rel="stylesheet" href="../../../assets/style/chatGeral.css">
	<script type="text/javascript">  
		function ajax(){
			var req = new XMLHttpRequest();
			req.onreadystatechange = function(){
				if (req.readyState == 4 && req.status == 200) {
						document.getElementById('chat').innerHTML = req.responseText;
				}
			}
			req.open('GET', 'chat_geral.php', true);
			req.send();
		}
	
		setInterval(function(){ajax();}, 1000); 
	</script>
</head>
<body onload="ajax();">
	
	<header class="header">
		<div class="caixa__header__titulo">
			<h1 class="header__title">Unending Darkness</h1>
		</div>
		<div class="header__perfil">
		<?php
			if(isset($_SESSION['id_usuario'])){
				echo"<a class='header__perfil__item' href='../../perfil.php'><i class='fa-solid fa-user fa-2xl'></i></a>";
				echo"<a class='header__perfil__login' href='../../logout.php'>Logout</a>";
			}
			?>
		</div>
    </header>

	<nav class="navbar navbar-expand-lg top-menu img-fluid">
		<div class="container-fluid top-menu-bar">
		<button class="navbar-toggler top-menu-botton" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon top-menu-bar__icon"></span>
		</button>
		<div class="collapse navbar-collapse justify-content-evenly top-menu-caixaList" id="navbarNav">
			<ul class="navbar-nav top-menu__list">
			<li class="nav-item top-menu__item">
				<a class="nav-link active top-menu__item__link" aria-current="page" href="../../../index.php"><i class="fa-solid fa-house"></i></a>
			</li>
			<li class="nav-item top-menu__item">
				<a class="nav-link top-menu__item__link" href="../../../nav/sistemas.php">Sistema</a>
			</li>
			<li class="nav-item top-menu__item">
				<a class="nav-link top-menu__item__link" href="../../../nav/tabelas.php">Tabelas</a>
			</li>
			<li class="nav-item top-menu__item">
				<a class="nav-link top-menu__item__link" href="../../../nav/classes.php">Classes</a>
			</li>
			<li class="nav-item top-menu__item">
				<a class="nav-link top-menu__item__link" href="../../../nav/mapas.php">Mapa</a>
			</li>
			<li class="nav-item top-menu__item">
				<a class="nav-link top-menu__item__link" href="../../../nav/itens.php">Itens</a>
			</li>
			<li class="nav-item top-menu__item">
					<a class="nav-link top-menu__item__link" href="index_chat_geral.php">Chat</a>
				</li>
			</ul>
		</div>
		</div>
  	</nav>

	<div class="caixa__logo">
    	<img src="../../../assets/img/logo.png" alt="Logo de Infinity darkness" class="logo">
	</div>

	<main class="main">
		<div class="caixa">
			<div id="chat" class="chat">

			</div>
			<form method="post" action="index_chat_geral.php">
				<input type="text" name="mensagem" placeholder="Digite uma Mensagem" required>
				<input type="submit" value="Enviar">
			</form>
			<?php
				$data = date('d/m/Y');
				include("../bd_conect.php");
				if(isset($_POST['mensagem'])){
					$mensagem = $_POST['mensagem'];
					$nome = $_SESSION['nome_usuario'];
					$id = $_SESSION['id_usuario'];

					$sql = $pdo->query("INSERT INTO chat_geral SET data_msg='$data', nome_usuario= '$nome', msg= '$mensagem', id_usuario= '$id'");
				}
			?>
		</div>
	</main>

	<footer class="rodape__pai">
      <div class="rodape__caixa">

        <h2 class="rodape__caixa__h2"><i class="fa-solid fa-copyright"></i> Unending Darkness </h2>

        <a class="rodape__caixa__but" href="">Comentarios</a>


        <a class="rodape__caixa_link" href="link do twiter"><i class="fa-brands fa-twitter fa-2xl"></i></a>
        <a class="rodape__caixa_link" href="link do instagram"><i class="fa-brands fa-instagram fa-2xl"></i></a>

      </div>
  	</footer>
</body>
</html>