<?php
  session_start(); 
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina inicial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../assets/style/reset.css">
    <link rel="stylesheet" href="../assets/style/home.css">
    <link rel="stylesheet" href="../assets/style/ordem.css">
</head> 
<body>

    <header class="header">

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
            </ul>
          </div>
        </div>
      </nav>
    
    <div class="caixa__logo">
      <img src="../assets/img/ordem_paranormal_logo.png" alt="Logo de Infinity darkness" class="logo">
    </div>

    <main class="main">
        <div class="text__home">
          <h1 class="introdus__titulo">Realitas Against the darkness </h1>
            <br>
          <div class="introdus__div">
            <p class="introdus__p">Este é baseado no sistema e universo de RPG “Ordem Paranormal”, criado por Rafael “Cellbit” Lange, onde criaturas e eventos paranormais são criados a partir do medo que as pessoas têm sobre determinado aspecto.</p>
          </div>
            <br>
          <div class="introdus__div">
            <p class="introdus__p">Aqui você será um agente da Ordem da Realidade (Ordo Realitas) com as classes: Agente da Ordem, Especialista Medicinal, Hacker, Ocultista Conjurador, Ocultista de Combate, Combatente, Mercenário e Investigador Paranormal</p>
          </div>
            <br>
          <div class="introdus__div">
            <p class="introdus__p">Os desafios do Paranormal são perigosos e imprevisíveis, tudo pode ser letal para uma pessoa destreinada. Em ambientes onde a morte é iminente lembre-se: Olhos sempre abertos!</p>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>