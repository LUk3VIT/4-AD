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
    <link rel="stylesheet" href="../assets/style/classes.css">
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

    <main class="main">
      <div class="carrosel">
        <div class="col-lg-12">
          <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="apresentacao">
                  <div class="apresentacao__caixa">
                    <h1 class="apresentacao__caixa__h1">Guerreiro</h1>

                    <p class="apresentacao__caixa__p">Características: Um guerreiro adiciona o seu nível à sua rolagem de ataque. Um guerreiro pode usar um escudo, armaduras leves, armaduras pesadas e qualquer arma.</p>
                    <p class="apresentacao__caixa__p">Equipamento inicial: um guerreiro inicia o jogo com armadura leve, escudo e uma arma de uma mão. Ele pode trocar seu escudo e arma de uma mão para uma arma de duas mãos ou um arco se preferir.</p>
                    <p class="apresentacao__caixa__p">Riqueza inicial: 2d6 peças de ouro.</p>
                    <p class="apresentacao__caixa__p">Pontos de vida: 6 +nível. Um guerreiro de primeiro nível tem 7 de vida.</p>
                    
                  </div>
                  <div class="apresentacao__caixa__img">
                    <img src="../assets/img/barbaro.jpg" class="caixa__img__style" alt="">
                  </div>
                </div>
              </div>
              <div class="carousel-item ">
                <div class="apresentacao">
                  <div class="apresentacao__caixa">
                    <h1 class="apresentacao__caixa__h1">Clérigo</h1>

                    <p class="apresentacao__caixa__p">Características: Um clérigo acrescenta metade do seu nível (arredondando para baixo) em seus testes de ataque, e seu nível completo quando ele ataca criaturas mortas-vivas. Ele pode usar armadura leve ou pesada e usar um escudo, uma arma de uma mão, uma arma de duas mãos ou uma funda.</p>
                    <p class="apresentacao__caixa__p">Habilidades: O Clérigo pode lançar um feitiço de benção e um feitiço de cura (d6 + nível) até 3 vezes cada em uma mesma masmorra, e em qualquer momento, mesmo durante uma luta, mas não poderá atacar. Pode usar seus feitiços em si mesmo.</p>
                    <p class="apresentacao__caixa__p">Equipamento de partida: Armadura leve, escudo, arma de uma mão. Pode trocar seu escudo e arma de uma mão para uma arma de duas mãos. Clérigos preferem usar armas esmagadoras.</p>
                    <p class="apresentacao__caixa__p">Riqueza inicial: d6 peças de ouro</p>
                    <p class="apresentacao__caixa__p">Pontos de Vida: 4 + nível. Um Clérigo de primeiro nível tem 5 de vida.</p>

                  </div>
                  <div class="apresentacao__caixa__img">
                    <img src="/assets/img/barbaro.jpg" class="caixa__img__style" alt="">
                  </div>
                </div>
              </div>
              <div class="carousel-item ">
                <div class="apresentacao">
                  <div class="apresentacao__caixa">

                    <h1 class="apresentacao__caixa__h1">Clérigo</h1>

                    <p class="apresentacao__caixa__p">Características: Um clérigo acrescenta metade do seu nível (arredondando para baixo) em seus testes de ataque, e seu nível completo quando ele ataca criaturas mortas-vivas. Ele pode usar armadura leve ou pesada e usar um escudo, uma arma de uma mão, uma arma de duas mãos ou uma funda.</p>
                    <p class="apresentacao__caixa__p">Habilidades: O Clérigo pode lançar um feitiço de benção e um feitiço de cura (d6 + nível) até 3 vezes cada em uma mesma masmorra, e em qualquer momento, mesmo durante uma luta, mas não poderá atacar. Pode usar seus feitiços em si mesmo.</p>
                    <p class="apresentacao__caixa__p">Equipamento de partida: Armadura leve, escudo, arma de uma mão. Pode trocar seu escudo e arma de uma mão para uma arma de duas mãos. Clérigos preferem usar armas esmagadoras.</p>
                    <p class="apresentacao__caixa__p">Riqueza inicial: d6 peças de ouro</p>
                    <p class="apresentacao__caixa__p">Pontos de Vida: 4 + nível. Um Clérigo de primeiro nível tem 5 de vida.</p>

                  </div>
                  <div class="apresentacao__caixa__img">
                    <img src="/assets/img/barbaro.jpg" class="caixa__img__style" alt="">
                  </div>
                </div>
              </div>
              <div class="carousel-item ">
                <div class="apresentacao">
                  <div class="apresentacao__caixa">
                    
                    <h1 class="apresentacao__caixa__h1">Ladino</h1>

                    <p class="apresentacao__caixa__p">Características: um ladino adiciona seu nível em rolagens de defesa, em desarmar armadilhas e em arrombamento de portas. Um ladino pode usar uma única armadura leve e não pode usar armas pesadas ou escudos.</p>
                    <p class="apresentacao__caixa__p">Habilidades (passiva): O ladino adiciona seu nível quando o grupo está em maior número. Após uma esquiva bem-sucedida, o ladino adiciona seu nível no próximo ataque, como um contra-ataque.</p>
                    <p class="apresentacao__caixa__p">Equipamentos de partida: uma corda, gazuas, armaduras leves e uma de arma de uma mão leve.</p>
                    <p class="apresentacao__caixa__p">Riqueza inicial: 3d6 peças de ouro.</p>
                    <p class="apresentacao__caixa__p">Pontos de vida: 3 + nível. Um ladino de primeiro nível tem 4 de vida</p>

                  </div>
                  <div class="apresentacao__caixa__img">
                    <img src="/assets/img/barbaro.jpg" class="caixa__img__style" alt="">
                  </div>
                </div>
              </div>
              <div class="carousel-item ">
                <div class="apresentacao">
                  <div class="apresentacao__caixa">
                    
                    <h1 class="apresentacao__caixa__h1">Mago</h1>

                    <p class="apresentacao__caixa__p">Características: Um mago adiciona seu nível apenas quando conjura feitiços, um em rolagens de Quebra-cabeças ou enigma. Um mago pode usar somente armas de uma funda. Ele não pode usar armaduras ou escudos.
                    <p class="apresentacao__caixa__p">Habilidades: Um mago começa o jogo com dois feitiços, mais um feitiço por nível, então um mago de primeiro nível tem 3 feitiços. O mago deve decidir seus feitiços preparados antes de uma aventura, rodando aleatoriamente na tabela de feitiços ou escolhendo seus feitiços. Um mago pode preparar múltiplos feitiços ou qualquer combinação dos 6 disponíveis no jogo. Um mago pode encontrar feitiços em uma aventura, ele só pode aprendê-los ou quando sai da masmorra, ou quando sobe de nível.</p>
                    <p class="apresentacao__caixa__p">Equipamento inicial: arma de mão leve, Grimório (livro de feitiços).</p>
                    <p class="apresentacao__caixa__p">Riqueza inicial: 4d6 peças de ouro.</p>
                    <p class="apresentacao__caixa__p">Pontos de vida: 2 + nível. Um mago de primeiro nível tem 3 pontos de vida</p>

                  </div>
                  <div class="apresentacao__caixa__img">
                    <img src="/assets/img/barbaro.jpg" class="caixa__img__style" alt="">
                  </div>
                </div>
              </div>
              <div class="carousel-item ">
                <div class="apresentacao">
                  <div class="apresentacao__caixa">
                    
                    <h1 class="apresentacao__caixa__h1">Bárbaro</h1>

                    <p class="apresentacao__caixa__p">Características: Um bárbaro adiciona seu nível aos seus testes de ataque. Um bárbaro pode usar um escudo e armadura leve e qualquer arma. Bárbaros não podem usar itens mágicos, pergaminhos ou poções, mas de má vontade pode aceitar a cura de um clérigo, já que não é magia, mas sim um favor divino, assim como água benta.</p>
                    <p class="apresentacao__caixa__p">Habilidades: Uma vez por masmorra, um bárbaro pode realizar um ataque de raiva, role o ataque três vezes e escolha o melhor resultado. Se o ataque de raiva atingir um monstro com pontos de vida, infringe dois de dano.</p>
                    <p class="apresentacao__caixa__p">Equipamento inicial: armadura leve, escudo, e arma de uma mão. Você pode negociar seu escudo e arma de uma mão para uma arma de duas mãos por um arco.</p>
                    <p class="apresentacao__caixa__p">Riqueza inicial: d6 peças de ouro.</p>
                    <p class="apresentacao__caixa__p">Pontos de Vida: 7 + nível. Um bárbaro de primeiro nível tem 8 pontos de vida.</p>

                  </div>
                  <div class="apresentacao__caixa__img">
                    <img src="../assets/img/barbaro.jpg" class="caixa__img__style" alt="">
                  </div>
                </div>
              </div>
              <div class="carousel-item ">
                <div class="apresentacao">
                  <div class="apresentacao__caixa">
                    
                    <h1 class="apresentacao__caixa__h1">Elfo</h1>

                    <p class="apresentacao__caixa__p">Características: Um elfo adiciona seu nível à sua rolagem de ataque. Um elfo pode avançar no máximo ao terceiro nível. O elfo pode usar roupas leves ou armaduras pesadas e pode usar um escudo. Um elfo pode levar um escudo amarrado nas costas, para desperdiçar um ataque equipando-o. Um elfo tem +1 para seu ataque ou feitiços contra Orcs. Assim como um Mago, também pode adicionar feitiços encontrados quando sobe de nível.</p>
                    <p class="apresentacao__caixa__p">Habilidades: Ele pode usar uma Magia única por nível na aventura, apenas se estiver com armadura leve e caso NÃO esteja usando um escudo. Um elfo de segundo nível conjura 2 feitiços, e um elfo de terceiro nível, 3.</p>
                    <p class="apresentacao__caixa__p">Equipamento inicial: Armadura leve, arma de uma mão, arco.</p>
                    <p class="apresentacao__caixa__p">Riqueza inicial: 2d6 peças de ouro</p>
                    <p class="apresentacao__caixa__p">Pontos de Vida: 4 + nível. Um elfo de primeiro nível tem 5 pontos de vida.</p>

                  </div>
                  <div class="apresentacao__caixa__img">
                    <img src="/assets/img/barbaro.jpg" class="caixa__img__style" alt="">
                  </div>
                </div>
              </div>
              <div class="carousel-item ">
                <div class="apresentacao">
                  <div class="apresentacao__caixa">
                    
                    <h1 class="apresentacao__caixa__h1">Anão</h1>

                    <p class="apresentacao__caixa__p">Características: Um anão adiciona seu nível a rolagem de ataque, exceto ao usar armas de longo alcance como arcos, bestas ou fundas. Anões têm +1 em suas defesas contra troll, Orcs e gigantes, e +1 a seu ataque contra goblins. Um anão pode usar qualquer armadura e qualquer arma, avançando até o 4º nível no máximo. Anões são extremamente ligados a seus tesouros, uma equipe com 2 ou mais anões não podem subornar monstros. Quando achar tesouros, no mínimo uma moeda de ouro deve ser atribuída a cada anão.</p>
                    <p class="apresentacao__caixa__p">Habilidades: Anões podem sentir o cheiro do ouro e joias. Quando você encontrar um monstro, se você tem um anão na equipe, role um dado e adicione o nível, se o total for 6 ou melhor, você pode determinar o tesouro antes de decidir atacar o monstro. Anões não especialistas em gemas e joias. Quando você vende tesouros com um anão, você recebe +20% do ouro.</p>
                    <p class="apresentacao__caixa__p">Equipamento inicial: Armadura leve, escudo, arma de uma mão, ou armadura pesada e arma de duas mãos.</p>
                    <p class="apresentacao__caixa__p">Riqueza inicial: 3d6 peças de ouro</p>
                    <p class="apresentacao__caixa__p">Pontos de Vida: 5 + nível. Um anão de primeiro nível tem 6 pontos de vida.</p>

                  </div>
                  <div class="apresentacao__caixa__img">
                    <img src="/assets/img/barbaro.jpg" class="caixa__img__style" alt="">
                  </div>
                </div>
              </div>
              <div class="carousel-item ">
                <div class="apresentacao">
                  <div class="apresentacao__caixa">
                    
                    <h1 class="apresentacao__caixa__h1">Halfling</h1>

                    <p class="apresentacao__caixa__p">Características: Um halfling pode usar apenas armadura leve, usar armas de uma mão leve e fundas. Halflings não podem usar escudos. Halflings adicionam seu nível para defesas contra trolls, ogros e gigantes. Halflings chegam ao 3º nível no máximo.</p>
                    <p class="apresentacao__caixa__p">Habilidades: Halflings tem um número de sorte iguais ao seu nível +1. Durante uma masmorra, um halfling pode gastar um ponto de sorte para rolar uma falha de Ataque ou defesa, ou correr longe do combate sem receber um ataque. Você vai ficar com o rolamento atual para executar a ação, mesmo que seja pior que o original.</p>
                    <p class="apresentacao__caixa__p">Equipamento inicial: 3 bandagens, funda e arma de uma mão.</p>
                    <p class="apresentacao__caixa__p">Riqueza inicial: 2d6 peças de ouro.</p>
                    <p class="apresentacao__caixa__p">Pontos de Vida: 3 + nível. Um halfling de primeiro nível tem 4 pontos de vida.</p>

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>