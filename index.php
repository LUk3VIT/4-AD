<?php 
  session_start(); 
  require_once 'app/Chat/classes/repositorioChat.php';
  $repositorio = new RepositorioChatMySQL();

  $data_hj = date('d/m/Y');

  $apagar = $repositorio->ApagarMensagens($data_hj); 
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina inicial</title>
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/style/reset.css">
    <link rel="stylesheet" href="assets/style/home.css">
</head> 
<body>

    <header class="header">
        <div class="caixa__header__titulo">
          <h1 class="header__title">Unending Darkness</h1>
        </div>
        <div class="header__perfil">
          <?php
            if(isset($_SESSION['id_usuario'])){
              echo"<a class='header__perfil__item' href='./app/perfil.php'><i class='fa-solid fa-user fa-2xl'></i></a>";
              echo"<a class='header__perfil__login' href='app/logout.php'>Logout</a>";
            } else {
              echo"<a class='header__perfil__login' href='app/login.php'>Login</a>";
              echo"<a class='header__perfil__cadastrar' href='app/cadastro.php'>Cadastrar</a>";
            }
          ?>
        </div>
    </header>

    <nav class="nabar navbar-expand-lg top-menu img-fluid">
      <div class="container-fluid top-menu-bar">
        <button class="navbar-toggler top-menu-botton" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon top-menu-bar__icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-evenly top-menu-caixaList" id="navbarNav">
          <ul class="navbar-nav top-menu__list">
            <li class="nav-item top-menu__item">
              <a class="nav-link active top-menu__item__link" aria-current="page" href="index.php"><i class="fa-solid fa-house"></i></a>
            </li>
            <li class="nav-item top-menu__item">
              <a class="nav-link top-menu__item__link" href="nav/sistemas.php">Sistema</a>
            </li>
            <li class="nav-item top-menu__item">
              <a class="nav-link top-menu__item__link" href="nav/tabelas.php">Tabelas</a>
            </li>
            <li class="nav-item top-menu__item">
              <a class="nav-link top-menu__item__link" href="nav/classes.php">Classes</a>
            </li>
            <li class="nav-item top-menu__item">
              <a class="nav-link top-menu__item__link" href="nav/mapas.php">Mapa</a>
            </li>
            <li class="nav-item top-menu__item">
              <a class="nav-link top-menu__item__link" href="nav/itens.php">Itens</a>
            </li>
            <li class="nav-item top-menu__item">
              <a class="nav-link top-menu__item__link" href="app/Chat/chat_geral/index_chat_geral.php">Chat</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    
    <div class="caixa__logo">
      <img src="assets/img/logo.png" alt="Logo de Infinity darkness" class="logo">
    </div>

    <main class="main">
        <div class="text__home">
            <br>
          <div class="introdus__div">
            <p class="introdus__p">Esse site foi feito com o intuito de facilitar e deixar mais dinâmico o funcionamento do jogo de tabuleiro Four Against Darkness, dando suporte para os jogadores e possibilitando as partidas online, a partir de uma maneira simples e intuitiva onde as tabelas (Forma em que a informação é passada para o jogador) se encontram bem mais facilmente.</p>
          </div>
            <br>
          <div class="introdus__div">
            <p class="introdus__p">Sendo possível jogar tanto com amigos disputando que consegue ir mais longe no jogo quanto sozinho apenas explorando a masmorra e ficando mais forte, por ser um sistema de fácil compreensão e que não exigi muito compromisso.</p>
          </div>
            <br>

          <div class="textImg">
            <div>
              <img src="assets/img/img2.PNG" alt="">
            </div>
          </div>

          <div class="introdus__div__textimg">
            <p class="introdus__p">Utilizando um chat como maneira de se comunicar (Geral/Privado), uma página de tabelas onde ficam as informações principais, e a página principal na qual será jogado.</p>
          </div>

          <h1 class="introdus__h1">Sistema explicação</h1>

          <div class="introdus__div">
            <p class="introdus__p">Four Against Darkness é um jogo de tabuleiro que consiste em escolher seus quatro personagens, que possuem as seguintes classes: Anão, Bárbaro, Clérigo, Elfo, Guerreiro, Halfling, Ladino e Mago. Com as informações de uma disposta na página de classes. E assim seguir para dentro de uma masmorra. Utilizando o dado de seis lado (d6), como forma de randomizar os itens e o formato de sua masmorra para que não se repitam, assim fazendo com que cada aventura seja diferente umas das outras</p>
          </div>
          <div class="introdus__div">
            <p class="introdus__p">Dentro destas masmorras você pode encontrar monstros dispostos nas tabelas: Vermes, Capangas, Monstros bizarros e Chefes. Ou outros tipos de conteúdo como tesouros, armadilhas e muitos outros (Citados na tabela de conteúdo).</p>
          </div>

          <h1 class="introdus__h1">Adaptações</h1>

          <div class="introdus__div">
            <p class="introdus__p">Utilizando como base o sistema original, foi feito pelos próprios criadores deste site algumas variações em inimigos, conteúdos e no jogo em geral para o deixar mais diversificado.</p>
          </div>
        </div>
    </main>

    <footer class="rodape__pai">
        <div class="rodape__caixa">

            <h2 class="rodape__caixa__h2"><i class="fa-solid fa-copyright"></i>⠀Unending Darkness</h2>

            <a class="rodape__caixa__but" href="">Comentarios</a>


            <a class="rodape__caixa_link" href="link do twiter"><i class="fa-brands fa-twitter fa-2xl"></i></a>
            <a class="rodape__caixa_link" href="link do instagram"><i class="fa-brands fa-instagram fa-2xl"></i></a>

        </div>
    </footer>
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>