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
    <link href="../../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../../assets/style/reset.css">
    <link rel="stylesheet" href="../../assets/style/home.css">
    <link rel="stylesheet" href="../../assets/style/classes.css">
    <link rel="stylesheet" href="../../assets/style/phanteao.css">
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

    <nav class="navbar navbar-expand-lg top-menu img-fluid">
      <div class="container-fluid top-menu-bar">
        <button class="navbar-toggler top-menu-botton" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon top-menu-bar__icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-evenly top-menu-caixaList" id="navbarNav">
          <ul class="navbar-nav top-menu__list">
            <li class="nav-item top-menu__item">
              <a class="nav-link active top-menu__item__link" aria-current="page" href="../phanteao.php"><i class="fa-solid fa-house"></i></a>
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
        <img src="../../assets/img/logo-pantheon.png" alt="Logo de Infinity darkness" class="logo">
      </div>

    <main class="main">
      <div class="carrosel__phanteao">
        <div class="col-lg-12">
          <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="apresentacao">
                  <div class="apresentacao__caixa">
                    <h1 class="apresentacao__caixa__h1__phanteao">Barbaro</h1>
                    <p class="apresentacao__caixa__p__phanteao">
                      Um Bárbaro adiciona seu nível no ataque. Pode usar escudos, armadura
                      leve, e  qualquer arma. Não pode usar Armaduras Pesadas, ele também
                      não usa nenhum tipo de magia, pergaminhos ou poções, mas aceita de
                      mávontade cura de clérigos ja que tecnicamente é um favor divino 
                      assim como água benta. Uma vez por masmorra pode usar um ataque de
                      fúria, jogando três dados de ataque e escolhendo o melhor, se 
                      acertado em um chefe, inflige 2 pontos de dano. Equipamento inicial:
                      Armadura leve, escudo, arma de uma mão. Você pode negociar seu 
                      escudo e arma de uma mão por uma arma de duas mãos.
                      Sua vida é de 7 + nível, e suas peças de ouro iniciais são 1d6
                    </p>
                  </div>
                  <div class="apresentacao__caixa__img">
                    <img src="/assets/img/barbaro.jpg" class="caixa__img__style" alt="">
                  </div>
                </div>
              </div>
              <div class="carousel-item ">
                <div class="apresentacao">
                  <div class="apresentacao__caixa">
                    <h1 class="apresentacao__caixa__h1">oui</h1>
                    <p class="apresentacao__caixa__p">
                      Um Bárbaro adiciona seu nível no ataque. Pode usar escudos, armadura
                      leve, e  qualquer arma. Não pode usar Armaduras Pesadas, ele também
                      não usa nenhum tipo de magia, pergaminhos ou poções, mas aceita de
                      mávontade cura de clérigos ja que tecnicamente é um favor divino 
                      assim como água benta. Uma vez por masmorra pode usar um ataque de
                      fúria, jogando três dados de ataque e escolhendo o melhor, se 
                      acertado em um chefe, inflige 2 pontos de dano. Equipamento inicial:
                      Armadura leve, escudo, arma de uma mão. Você pode negociar seu 
                      escudo e arma de uma mão por uma arma de duas mãos.
                      Sua vida é de 7 + nível, e suas peças de ouro iniciais são 1d6
                    </p>
                  </div>
                  <div class="apresentacao__caixa__img">
                    <img src="/assets/img/barbaro.jpg" class="caixa__img__style" alt="">
                  </div>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
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

    <script src="/assets/js/script.js"></script>
    <script src="../../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>