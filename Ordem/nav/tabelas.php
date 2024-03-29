<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabelas</title>
    <link href="../../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../../assets/style/reset.css">
    <link rel="stylesheet" href="../../assets/style/home.css">
    <link rel="stylesheet" href="../../assets/style/tabela.css">
    <link rel="stylesheet" href="../../assets/style/ordem.css">
</head>
<body>

  <header class="header">
      <div class="header__perfil">
        <?php
          if(isset($_SESSION['id_usuario'])){
            echo"<a class='header__perfil__item' href='../../app/perfil.php'><i class='fa-solid fa-user fa-2xl'></i></a>";
            echo"<a class='header__perfil__login' href='../../app/logout.php'>Logout</a>";
          } else {
            echo"<a class='header__perfil__login' href='../../app/login.php'>Login</a>";
            echo"<a class='header__perfil__cadastrar' href='../../app/cadastro.php'>Cadastrar</a>";
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
            <a class="nav-link active top-menu__item__link" aria-current="page" href="../ordem.php"><i class="fa-solid fa-house"></i></a>
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
            <a class="nav-link top-menu__item__link" href="Itens.php">Itens</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
    
  <div class="caixa__logo">
    <img src="../../assets/img/ordem_paranormal_logo.png" alt="Logo de Infinity darkness" class="logo">
  </div>

    <main class="main">
        <div class="caixa__tabela">
          <select class="form-select tabela__select" aria-label="Default select example">
            <option selected>
              <h2 class="tabela__select__h2">Tabela de Minions</h2>
              
            </option>
            <option selected>
              <h2 class="tabela__select__h2">Tabela de Vermes</h2>
            </option>
          </select>
          

          <div class="tabela__informacao">
            <p class="tabela__informacao__p">
              2
              <br>
              <br>
              1D6 + 2 esqueletos ou 1d6 zumbis (50% de chance de cada um). 
              Mortos-vivos nível 3. Nenhum tesouro. Armas esmagadoras atacam
              Esqueletos em +1. As setas estão em - 1 contra esqueletos e zumbis.
              Esqueletos e zumbis nunca testam moral. Reações: sempre lutar até a morte.
            </p>
            <img class="tabela__informacao__img" src="../assets/img/Minions.png" alt="">
          </div>

          <div class="tabela__sistema">
            <select class="form-select sistema__select" aria-label="Default select example">

              <option selected><h2 class="sistema__select__h2">sistemas</h2></option>
              <option value="1" class="sistema__select__option">Four Against Darkness</option>
              <option value="2" class="sistema__select__option">Ordem</option>
              <option value="3" class="sistema__select__option">Panteão</option>
            </select>
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
  <script src="../../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>