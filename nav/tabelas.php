<?php
  session_start();
  if(isset($_SESSION['tabela'])){

  } else {
    $_SESSION['tabela'] = "<ul>
    <li class='tabela__informacao__p'> 1. 3d6 ratos Level 1, sem tesouro. Qualquer personagem ferido tem 1 em 6 chance de
    perder 1 vida adicional devido a uma ferida infectada.
    Reações (1d6): 1–3 fugir, 4-6 lutar </li>
    <br>
    <li class='tabela__informacao__p'> 2. 3d6 morcegos vampiros, nível 1, sem tesouros. Feitiços são lançados em -1 devido a
    seus gritos perturbadores.
    Reações (1d6): 1–3 fugir, 4-6 lutar </li>
    <br>
    <li class='tabela__informacao__p'> 3. 2d6 swarmlings de goblins, nível 3, tesouro -1, moral -1 .
    Reações (1d6): 1 fugir, 2-3 fugir se em menor número, 4 suborno (5 PO x goblin),
    5–6 luta. </li>
    <br>
    <li class='tabela__informacao__p'> 4. D6 centopéias gigantes, nível 3, sem tesouro. Qualquer personagem ferido por uma
    centopéia gigante deve salvar contra o nível 2 de veneno ou perder 1
    vida adicional.
    Reações (1d6): 1 fugir, 2-3 fugir se em desvantagem, 4-6 lutar. </li>
    <br>
    <li class='tabela__informacao__p'> 5. D6 sapos vampiros, nível 4, tesouro -1.
    Reações (1d6): 1 fugir, 2-4 lutar, 5-6 lutar até a morte </li>
    <br>
    <li class='tabela__informacao__p'> 6. 2d6 ratos esqueléticos, mortos-vivos nível 3, sem tesouro. Arma de esmagamento
    ataques estão em +1 contra ratos esqueléticos, mas eles não podem ser atacados
    por arcos e fundas.
    Reações (1d6): 1-2 fugir, 3-6 lutar  </li>
    </ul>";
  }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabelas</title>
    <link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../assets/style/reset.css">
    <link rel="stylesheet" href="../assets/style/home.css">
    <link rel="stylesheet" href="../assets/style/tabela.css">
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
            <a class="nav-link top-menu__item__link" href="Itens.php">Itens</a>
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

    <main class="main">
        <div class="caixa__tabela">
          <form action="../app/carregar_tabelas.php" method="post">
          <select class="form-select tabela__select" name="tabelas" id="tabelas" aria-label="Default select example">
            <option>
              <h2 class="tabela__select__h2" >Tabela de Minions (1D6)</h2>
            </option>
            <option>
              <h2 class="tabela__select__h2">Tabela de Vermes (1D6)</h2>
            </option>
            <option>
              <h2 class="tabela__select__h2">Tabela de Chefes (1D6)</h2>
            </option>
            <option>
              <h2 class="tabela__select__h2">Tabela de Conteúdos da Sala (2D6)</h2>
            </option>
            <option>
              <h2 class="tabela__select__h2">Tabela de Recursos Especiais (1D6)</h2>
            </option>
            <option>
              <h2 class="tabela__select__h2">Tabela de Eventos Especiais (1D6)</h2>
            </option>
            <option>
              <h2 class="tabela__select__h2">Tabela do Tesouro (1D6)</h2>
            </option>
            <option>
              <h2 class="tabela__select__h2">Tabela do Tesouro Mágico (1D6)</h2>
            </option>
            <option>
              <h2 class="tabela__select__h2">Tabela de Mostros Bizarros (1D6)</h2>
            </option>
            <option>
              <h2 class="tabela__select__h2">Tabela de Missão (1D6)</h2>
            </option>
            <option>
              <h2 class="tabela__select__h2">Tabela de Recompensas Épicas (1D6)</h2>
            </option>
          </select>
          <input type="submit" value="Atualizar">
          </form>
          

          <div class="tabela__informacao">
            <?php

              echo $_SESSION['tabela'];

            ?>
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
  <script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>