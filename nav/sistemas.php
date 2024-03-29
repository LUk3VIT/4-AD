<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistemas</title>
    <link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../assets/style/reset.css">
    <link rel="stylesheet" href="../assets/style/home.css">
</head>

<body>
    <header class="header">
      <div class="caixa__header__titulo">
        <h1 class="header__title">Unending Darkness</h1>
      </div>
      <div class="header__perfil">
        <?php
          if(isset($_SESSION['id_usuario'])){
            echo"<a class='header__perfil__item' href='../app/perfil.php'><i class='fa-solid fa-user fa-2xl'></i></a>";
            echo"<a class='header__perfil__login' href='../app/logout.php'>Logout</a>";
          } else {
            echo"<a class='header__perfil__login' href='../app/login.php'>Login</a>";
            echo"<a class='header__perfil__cadastrar' href='../app/cadastro.php'>Cadastrar</a>";
          }
        ?>
      </div>
    </header>

    <nav class="navbar navbar-expand-lg top-menu ">
        <div class="container-fluid top-menu-bar">
          <button class="navbar-toggler top-menu-botton" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon top-menu-bar__icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-evenly top-menu-caixaList" id="navbarNav">
            <ul class="navbar-nav top-menu__list">
              <li class="nav-item top-menu__item">
                <a class="nav-link active top-menu__item__link" aria-current="page" href="../index.php"><i class="fa-solid fa-house"></i></a>
              </li>
              <li class="nav-item top-menu__item">
                <a class="nav-link top-menu__item__link" href="sistemas.php">Sistema</a>
              </li>
              <li class="nav-item top-menu__item">
                <a class="nav-link top-menu__item__link" href="tabelas.php">Tabelas</a>
              </li>
              <li class="nav-item top-menu__item">
                <a class="nav-link top-menu__item__link" href="classes.php">Classes</a>
              </li>
              <li class="nav-item top-menu__item">
                <a class="nav-link top-menu__item__link" href="mapas.php">Mapa</a>
              </li>
              <li class="nav-item top-menu__item">
                <a class="nav-link top-menu__item__link" href="itens.php">Itens</a>
              </li>
              <li class="nav-item top-menu__item">
                <a class="nav-link top-menu__item__link" href="../app/Chat/chat_geral/index_chat_geral.php">Chat</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    
    <div class="caixa__logo">
      <img src="../assets/img/logo.png" alt="Logo de Infinity darkness" class="logo">
    </div>

    <main class="pai__sist">
        <div class="sistemas">
            <div class="sistemas__caixas1">
                <img class="sistemas__caixas__img" src="../assets/img/four_against_darkness.png" alt="four against darkness">
                <h2 class="sistemas__caixas__h2">Four Against Darkness</h2>
                <P class="sistemas__caixas__p">REQUESITOS</P>
                <p class="sistemas__caixas__p">Jogadores: 2-4 </p>
                <p class="sistemas__caixas__p"><br>Dados: D6</p>
                <a class="sistemas__caixas__a" href="../Four_Against_Darkness/Four_Against_Darkness.html">Como Jogar</a>
            </div>

            <div class="sistemas__caixas2">
                <img class="sistemas__caixas__img" src="../assets/img/ordem.png" alt="Ordem">
                <h2 class="sistemas__caixas__h2">Ordem</h2>
                <p class="sistemas__caixas__p">REQUESITOS</p>
                <p class="sistemas__caixas__p">Jogadores: 2-4</p>
                <p class="sistemas__caixas__p"><br> Dados: D4 D6 D10</p>
                <a class="sistemas__caixas__a"href="../Ordem/ordem.php">Como Jogar</a>
            </div>

            <div  class="sistemas__caixas3">
                <img class="sistemas__caixas__img" src="../assets/img/Pantheon of Darkness.jpeg" alt="Panteao">
                <h2 class="sistemas__caixas__h2">Panteão</h2>
                <p class="sistemas__caixas__p">REQUESITOS</P>
                <p class="sistemas__caixas__p">Jogadores: 1-4 </p>
                <p class="sistemas__caixas__p"><br> Dados: D4 D6 D10</p>
                <a class="sistemas__caixas__a" href="../phanteão/phanteao.php">Como Jogar</a>
            </div>
        </div>
    </main>

    <footer class="rodape__pai">
        <div class="rodape__caixa">

            <h2 class="rodape__caixa__h2"><i class="fa-solid fa-copyright"></i>Infinity Darkness</h2>

            <a class="rodape__caixa__but" href="">Comentarios</a>


            <a class="rodape__caixa_link" href="link do twiter"><i class="fa-brands fa-twitter fa-2xl"></i></a>
            <a class="rodape__caixa_link" href="link do instagram"><i class="fa-brands fa-instagram fa-2xl"></i></a>
        </div>
    </footer>
    <script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>