<?php

session_start();
include '../../app/Itens.php';

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Itens</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../../assets/style/reset.css">
    <link rel="stylesheet" href="../../assets/style/home.css">
    <link rel="stylesheet" href="../../assets/style/itens.css">
    <link rel="stylesheet" href="../../assets/style/ordem.css">
</head>
<body>
    
    <header class="header">
        <div class="caixa__header__titulo">
          <h1 class="header__title">Unending Darkness</h1>
        </div>
        <div class="header__perfil">
          <?php
            if(isset($_SESSION['id_usuario'])){
              echo"<a class='header__perfil__item' href='perfil.php'><i class='fa-solid fa-user fa-2xl'></i></a>";
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
              <a class="nav-link top-menu__item__link" href="itens.php">Itens</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    
    <div class="caixa__logo">
      <img src="../../assets/img/ordem_paranormal_logo.png" alt="Logo de Infinity darkness" class="logo">
    </div>

   
    <main class="main">
      <div class="caixa">
        <div class="caixa__tabela">
          <h2 class="caixa__tabela__h2">Compras</h2>
          <p class="caixa__tabela__p">Essas compras são feitas no inicio do jogo, antes de entrar na masmora</p>
          <table class="tabela">
              <?php foreach($itens as $iten) {?>
              <tr class="tabela__linha">
                <td class="tabela__coluna">
                  <p  class="tabela__p"> <?php echo $iten['itens'];?> </p>
                </td>
                <td class="tabela__coluna">
                  <p class="tabela__valor">  <?php echo $iten['valor'];?> </p>
                </td>
              </tr>
              <?php } ?> 
          </table>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>