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
    <link rel="stylesheet" href="../../assets/style/reset.css">
    <link rel="stylesheet" href="../../assets/style/home.css">
    <link rel="stylesheet" href="../../assets/style/mapa.css">
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
        <div class="caixa__main__ordem">
          <h1 class="caixa__main__h1">Mapas</h1>
          <p class="caixa__main__p">Role os dados, para iniciar a masmorra</p>
          <div class="caixa__principal">
            <table class="table">
                <tr class="linha">
                    <td class="coluna">
                        <div class="caixa__img">
                            <img class="imgmap" src="../../assets/img__mapa/sala1.png" alt="">
                        </div>
                    </td>
                    <td class="coluna">
                        <div class="caixa__img">
                            <img class="imgmap" src="../../assets/img__mapa/sala2.png" alt="">
                        </div>
                    </td>
                    <td class="coluna">
                        <div class="caixa__img">
                            <img class="imgmap" src="../../assets/img__mapa/sala3.png" alt="">
                        </div>
                    </td>
                    <td class="coluna">
                        <div class="caixa__img">
                            <img class="imgmap" src="../../assets/img__mapa/sala4.png" alt="">
                        </div>
                    </td>
                    <td class="coluna">
                        <div class="caixa__img">
                            <img class="imgmap" src="../../assets/img__mapa/sala5.png" alt="">
                        </div>
                    </td>
                    <td class="coluna">
                        <div class="caixa__img">
                            <img class="imgmap" src="../../assets/img__mapa/sala6.png" alt="">
                        </div>
                    </td>
                </tr>
            </table>
          </div>
          <p class="caixa__main__p">Salas da masmorra </p>
          <div class="caixa__principal">
            <table class="table">
                <tr class="linha">
                    <td class="coluna">
                        <div class="caixa__img">
                            <img class="imgmap" src="../../assets/img__mapa/sala11.png" alt="">
                        </div>
                    </td>
                    <td class="coluna">
                        <div class="caixa__img">
                            <img class="imgmap" src="../../assets/img__mapa/sala12.png" alt="">
                        </div>
                    </td>
                    <td class="coluna">
                        <div class="caixa__img">
                            <img class="imgmap" src="../../assets/img__mapa/sala13.png" alt="">
                        </div>
                    </td>
                    <td class="coluna">
                        <div class="caixa__img">
                            <img class="imgmap" src="../../assets/img__mapa/sala14.png" alt="">
                        </div>
                    </td>
                    <td class="coluna">
                        <div class="caixa__img">
                            <img class="imgmap" src="../../assets/img__mapa/sala15.png" alt="">
                        </div>
                    </td>
                    <td class="coluna">
                        <div class="caixa__img">
                            <img class="imgmap" src="../../assets/img__mapa/sala16.png" alt="">
                        </div>
                    </td>
                </tr>
                <tr class="linha">
                    <td class="coluna">
                        <div class="caixa__img">
                            <img class="imgmap" src="../../assets/img__mapa/sala21.png" alt="">
                        </div>
                    </td>
                    <td class="coluna">
                        <div class="caixa__img">
                            <img class="imgmap" src="../../assets/img__mapa/sala22.png" alt="">
                        </div>
                    </td>
                    <td class="coluna">
                        <div class="caixa__img">
                            <img class="imgmap" src="../../assets/img__mapa/sala23.png" alt="">
                        </div>
                    </td>
                    <td class="coluna">
                        <div class="caixa__img">
                            <img class="imgmap" src="../../assets/img__mapa/sala24.png" alt="">
                        </div>
                    </td>
                    <td class="coluna">
                        <div class="caixa__img">
                            <img class="imgmap" src="../../assets/img__mapa/sala25.png" alt="">
                        </div>
                    </td>
                    <td class="coluna">
                        <div class="caixa__img">
                            <img class="imgmap" src="../../assets/img__mapa/sala26.png" alt="">
                        </div>
                    </td>
                </tr>
                <tr class="linha">
                    <td class="coluna">
                        <div class="caixa__img">
                            <img class="imgmap" src="../../assets/img__mapa/sala31.png" alt="">
                        </div>
                    </td>
                    <td class="coluna">
                        <div class="caixa__img">
                            <img class="imgmap" src="../../assets/img__mapa/sala32.png" alt="">
                        </div>
                    </td>
                    <td class="coluna">
                        <div class="caixa__img">
                            <img class="imgmap" src="../../assets/img__mapa/sala33.png" alt="">
                        </div>
                    </td>
                    <td class="coluna">
                        <div class="caixa__img">
                            <img class="imgmap" src="../../assets/img__mapa/sala34.png" alt="">
                        </div>
                    </td>
                    <td class="coluna">
                        <div class="caixa__img">
                            <img class="imgmap" src="../../assets/img__mapa/sala35.png" alt="">
                        </div>
                    </td>
                    <td class="coluna">
                        <div class="caixa__img">
                            <img class="imgmap" src="../../assets/img__mapa/sala36.png" alt="">
                        </div>
                    </td>
                </tr>
                <tr class="linha">
                    <td class="coluna">
                        <div class="caixa__img">
                            <img class="imgmap" src="../../assets/img__mapa/sala41.png" alt="">
                        </div>
                    </td>
                    <td class="coluna">
                        <div class="caixa__img">
                            <img class="imgmap" src="../../assets/img__mapa/sala42.png" alt="">
                        </div>
                    </td>
                    <td class="coluna">
                        <div class="caixa__img">
                            <img class="imgmap" src="../../assets/img__mapa/sala43.png" alt="">
                        </div>
                    </td>
                    <td class="coluna">
                        <div class="caixa__img">
                            <img class="imgmap" src="../../assets/img__mapa/sala44.png" alt="">
                        </div>
                    </td>
                    <td class="coluna">
                        <div class="caixa__img">
                            <img class="imgmap" src="../../assets/img__mapa/sala45.png" alt="">
                        </div>
                    </td>
                    <td class="coluna">
                        <div class="caixa__img">
                            <img class="imgmap" src="../../assets/img__mapa/sala46.png" alt="">
                        </div>
                    </td>
                </tr>
                <tr class="linha">
                    <td class="coluna">
                        <div class="caixa__img">
                            <img class="imgmap" src="../../assets/img__mapa/sala51.png" alt="">
                        </div>
                    </td>
                    <td class="coluna">
                        <div class="caixa__img">
                            <img class="imgmap" src="../../assets/img__mapa/sala52.png" alt="">
                        </div>
                    </td>
                    <td class="coluna">
                        <div class="caixa__img">
                            <img class="imgmap" src="../../assets/img__mapa/sala53.png" alt="">
                        </div>
                    </td>
                    <td class="coluna">
                        <div class="caixa__img">
                            <img class="imgmap" src="../../assets/img__mapa/sala54.png" alt="">
                        </div>
                    </td>
                    <td class="coluna">
                        <div class="caixa__img">
                            <img class="imgmap" src="../../assets/img__mapa/sala55.png" alt="">
                        </div>
                    </td>
                    <td class="coluna">
                        <div class="caixa__img">
                            <img class="imgmap" src="../../assets/img__mapa/sala56.png" alt="">
                        </div>
                    </td>
                </tr>
                <tr class="linha">
                    <td class="coluna">
                        <div class="caixa__img">
                            <img class="imgmap" src="../../assets/img__mapa/sala61.png" alt="">
                        </div>
                    </td>
                    <td class="coluna">
                        <div class="caixa__img">
                            <img class="imgmap" src="../../assets/img__mapa/sala62.png" alt="">
                        </div>
                    </td>
                    <td class="coluna">
                        <div class="caixa__img">
                            <img class="imgmap" src="../../assets/img__mapa/sala63.png" alt="">
                        </div>
                    </td>
                    <td class="coluna">
                        <div class="caixa__img">
                            <img class="imgmap" src="../../assets/img__mapa/sala64.png" alt="">
                        </div>
                    </td>
                    <td class="coluna">
                        <div class="caixa__img">
                            <img class="imgmap" src="../../assets/img__mapa/sala65.png" alt="">
                        </div>
                    </td>
                    <td class="coluna">
                        <div class="caixa__img">
                            <img class="imgmap" src="../../assets/img__mapa/sala66.png" alt="">
                        </div>
                    </td>
                </tr>
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