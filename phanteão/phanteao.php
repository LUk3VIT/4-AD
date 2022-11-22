<?php
  session_start(); 
?>
<!DOCTYPE html> 
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phanteão</title>
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../assets/style/reset.css">
    <link rel="stylesheet" href="../assets/style/home.css">
    <link rel="stylesheet" href="../assets/style/phanteao.css">
</head>
<body>

    <header class="header">
        <div class="caixa__header__titulo">
          <h1 class="header__title">Pantheon of Darkness</h1>
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

    <nav class="navbar navbar-expand-lg top-menu img-fluid">
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
                <a class="nav-link top-menu__item__link" href="../phanteão/nav/tabelas.php">Tabelas</a>
              </li>
              <li class="nav-item top-menu__item">
                <a class="nav-link top-menu__item__link" href="../phanteão/nav/classes.php">Classes</a>
              </li>
              <li class="nav-item top-menu__item">
                <a class="nav-link top-menu__item__link" href="../phanteão/nav/mapas.php">Mapa</a>
              </li>
              <li class="nav-item top-menu__item">
                <a class="nav-link top-menu__item__link" href="../phanteão/nav/Itens.php">Itens</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>
    
    <div class="caixa__logo">
      <img src="../assets/img/logo-pantheon.png" alt="Logo de Infinity darkness" class="logo">
    </div>

    <main class="main">
        <div class="text__home">
          <h1 class="introdus__titulo">Phanteão</h1>
            <br>
          <div class="introdus__div">
            <p class="introdus__p">Baseado no sistema original, o panteão simula uma aventura com inimigos diferentes, enquanto joga como um grupo de heróis históricos e mitológicos, com o objetivo final de vencer todos os deuses do panteão.</p>
          </div>
            <br>
          <div class="introdus__div">
            <p class="introdus__p">Interpretando heróis lendários, como Robin Hood, Joana D’Arc ou Mulan, assim como guerreiros históricos, como Lu Bu, e os heróis mitológicos, como Hércules, Gilgamesh, Karna, Merlin ou até mesmo Loki.</p>
          </div>
            <br>
          <div class="introdus__div">
            <p class="introdus__p">Enquanto acumula poder, enfrente criaturas diabólicas em busca da vitória e da sobrevivência. Você será capaz de vencer o panteão? Ou sucumbirá perante a ira dos deuses?</p>
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
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>