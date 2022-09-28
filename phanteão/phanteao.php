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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
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

        <div class="text">
          <p>Lorem iLorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque metus sem, sollicitudin vehicula faucibus vel, malesuada non ligula. Sed vehicula consectetur porta. Mauris egestas in massa sit amet faucibus. Proin orci massa, tincidunt quis lacinia quis, commodo ut sapien. Aliquam erat volutpat. Proin nec vehicula elit, eleifend interdum ipsum. Nam sed augue tempor, cursus dui sed, laoreet turpis. Nunc egestas viverra est, eu tempus tellus convallis sed. In hac habitasse platea dictumst. Nulla tempus neque et nisi vehicula mollis. Suspendisse potenti.
            <br><br>
            Vivamus quis metus malesuada, euismod tellus et, porta erat. Aenean sit amet mollis ex. Vestibulum magna lectus, dignissim eget elit vitae, mollis consequat nunc. Vivamus nibh turpis, consectetur eu nulla laoreet, tincidunt vehicula mauris. Sed venenatis mauris in tempus porta. Pellentesque ultrices faucibus luctus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Pellentesque tellus est, pulvinar eu vestibulum at, congue et elit. In hendrerit, diam a lobortis convallis, ipsum eros dictum enim, sit amet maximus nisi erat ut enim. Fusce pretium nec libero at varius. Proin id luctus nisi. Nunc id vehicula orci. Sed nisl enim, aliquam a faucibus efficitur, laoreet eu metus. Aenean posuere venenatis massa, a fringilla sem posuere sit amet.
            <br><br>
            Suspendisse potenti. Pellentesque egestas interdum luctus. Sed vel ultrices sem. Vivamus lectus metus, aliquam nec finibus a, feugiat sed enim. Vivamus aliquet facilisis magna id porta. Sed sem odio, fermentum vel est eget, elementum cursus libero. Phasellus tortor augue, vehicula ac dui et, mollis maximus justo. Integer eget cursus orci. Nam lectus dolor, finibus eu odio condimentum, tincidunt auctor ipsum. Nulla malesuada tempus ligula, nec aliquet orci tincidunt a. Curabitur tellus ipsum, sagittis at egestas quis, lacinia ullamcorper metus.
            <br><br>
            Aliquam erat volutpat. Cras blandit arcu bibendum lorem molestie pellentesque. Suspendisse a elit quis ante ullamcorper fermentum eu vitae est. Integer sit amet feugiat felis. Proin non dignissim turpis. Aenean sit amet urna odio. Nunc feugiat ligula velit, a auctor tellus viverra in. Praesent dictum augue id lorem hendrerit, in mollis ante fringilla. Ut ultrices vulputate mattis. Donec quis urna eget erat tempor viverra ac nec tortor. Aenean non luctus lacus.
            <br><br>
            Sed volutpat erat mi, in aliquet enim ullamcorper eu. Donec erat nibh, condimentum et porta vel, eleifend ornare quam. Nullam nisi tortor, scelerisque et mattis finibus, semper quis enim. Suspendisse maximus augue eros. Cras egestas nulla non risus scelerisque varius. Suspendisse mi dolor, condimentum quis aliquam id, pulvinar vel odio. Nullam nec condimentum mauris, ac fringilla nisl. Aliquam erat volutpat. Aliquam non pulvinar arcu, bibendum feugiat nunc. Suspendisse ultrices, mi nec egestas rutrum, erat nisi dignissim neque, vel scelerisque urna est ac tortor. In hac habitasse platea dictumst. Nullam mollis egestas enim, eu maximus est. Suspendisse id augue eget justo consequat commodo. Curabitur tincidunt pulvinar mi a dignissim. In sed hendrerit enim. Nulla faucibus nibh vel odio condimentum facilisis.
            <br><br>
            Integer a ligula quis metus molestie placerat. Nam posuere eu lectus in finibus. Nullam sit amet orci suscipit, aliquet mi sed, condimentum nulla. Cras id luctus arcu. Fusce maximus, ligula ut aliquam ultrices, turpis nibh laoreet dolor, semper fringilla eros est vel diam. Maecenas non placerat dui, ut dictum eros. Quisque eu tortor elit.
            <br><br>
            Fusce eget porttitor ex. Aenean elementum aliquam dolor ac fringilla. Nunc cursus metus in sapien consequat viverra. Cras gravida ligula urna, nec viverra lectus maximus sit amet. Curabitur imperdiet lobortis gravida. Donec purus tellus, bibendum non tellus nec, euismod aliquet tellus. Proin ac molestie lorem, pulvinar gravida risus. Vivamus luctus ultrices arcu.
            <br><br>
            Ut eget magna tristique, suscipit nunc sodales, tincidunt nisl. Curabitur euismod at tellus sit amet vulputate. Vestibulum tincidunt libero non erat aliquam dignissim. Etiam interdum sapien in justo sodales, ut auctor ex porttitor. Mauris dignissim tempus turpis et facilisis. Praesent varius eleifend ligula ut venenatis. Ut mauris justo, vehicula quis nulla maximus, mattis sagittis tortor. Nunc malesuada mi in urna eleifend iaculis. Etiam ut sem mauris. Quisque lacinia nisi vel sapien rhoncus, sit amet imperdiet nulla rhoncus.
            <br><br>
            Vivamus malesuada ac lacus id pharetra. Sed ultricies nulla sed pellentesque tincidunt. Morbi eget turpis ante. Integer dolor lorem, pretium ut finibus ut, porttitor a nunc. Pellentesque vitae nisi eget tellus pellentesque hendrerit quis eu mi. Aenean id mollis nibh, sit amet efficitur magna. In a imperdiet eros. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam congue libero in vehicula consequat. Quisque nisi sem, eleifend id enim et, facilisis sagittis tellus.
            <br><br>
            Proin facilisis ornare eros in dignissim. Nunc et finibus turpis, ac volutpat sem. Vestibulum diam odio, tempus ac eleifend ut, rhoncus ac justo. Pellentesque finibus nec quam bibendum porttitor. Aenean condimentum sodales odio, id ornare nibh imperdiet sed. Etiam a ultricies purus. Curabitur ultrices, nibh quis interdum ultrices, felis tellus consectetur enim, ac viverra tortor magna eget eros.
            <br><br>
            Integer pretium at ex quis pellentesque. Mauris sit amet metus vel metus finibus elementum sit amet eget lectus. Phasellus feugiat imperdiet nunc. Nunc elit enim, mollis eu interdum at, elementum dictum lorem. Duis gravida risus quis nulla commodo dignissim. Fusce pulvinar maximus aliquam. Vestibulum viverra urna massa, quis consequat tellus luctus sed. Nunc nec condimentum lacus. Ut vel pharetra erat. Praesent molestie viverra quam nec semper. Aenean nec diam finibus, auctor nulla ac, ultrices magna. Integer nec purus turpis. Maecenas elit nibh, porta sed tortor at, molestie rutrum arcu. Curabitur sed metus hendrerit metus maximus molestie. Nullam vel ultrices lectus. Maecenas lacus magna, semper sit amet consequat id, sagittis ut justo.
            <br><br>
            Nulla iaculis mattis justo, a lobortis augue. Sed cursus, est eu efficitur efficitur, quam diam pellentesque libero, vitae blandit lacus lacus sit amet nulla. Maecenas sed tortor in nibh maximus dictum sed vel orci. Praesent gravida urna in sem molestie ornare. In non felis ac lacus dapibus posuere. Duis maximus purus vel dui volutpat, ut sagittis augue auctor. Cras nulla urna, suscipit in leo at, laoreet facilisis mauris. Ut iaculis sapien mauris, sed varius velit semper lobortis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer id dui quam. Mauris sollicitudin, lectus in maximus sodales, dolor nunc lobortis sapien.
            </p>
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