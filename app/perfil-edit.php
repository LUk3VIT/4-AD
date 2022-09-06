<?php
    session_start();
    require_once '../classes/repositorioUsuario.php';
    $repositorio = new RepositorioUsuariosMySQL();
    if($_SESSION['id_usuario'] != NULL){
      $id_usuario = $_SESSION['id_usuario']; 
      $informacoes = $repositorio->ListarDados($id_usuario);
    } else {
      header('Location: ../index.php');
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perfil_edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../assets/style/reset.css">
    <link rel="stylesheet" href="../assets/style/home.css">
    <link rel="stylesheet" href="../assets/style/perfilEdit.css">
    
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
              echo"<a class='header__perfil__login' href='logout.php'>Logout</a>";
            } else {
              echo"<a class='header__perfil__login' href='app/login.php'>Login</a>";
              echo"<a class='header__perfil__cadastrar' href='cadastro.php'>Cadastrar</a>";
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
              <a class="nav-link top-menu__item__link" href="../nav/sistemas.php">Sistema</a>
            </li>
            <li class="nav-item top-menu__item">
              <a class="nav-link top-menu__item__link" href="../nav/tabelas.php">Tabelas</a>
            </li>
            <li class="nav-item top-menu__item">
              <a class="nav-link top-menu__item__link" href="../nav/classes.php">Classes</a>
            </li>
            <li class="nav-item top-menu__item">
              <a class="nav-link top-menu__item__link" href="../nav/mapas.php">Mapa</a>
            </li>
            <li class="nav-item top-menu__item">
              <a class="nav-link top-menu__item__link" href="../nav/itens.php">Itens</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    
    <div class="caixa__logo">
      <img src="../assets/img/Logo.png" alt="Logo de Infinity darkness" class="logo">
    </div>

    <main class="main">
      <div class="caixa__pai">
        <div class="caixa__foto">
          <img src="../assets/img/textPerfil.jfif" alt="selecione uma imagem" class="caixa__foto__perfil">
          <button class="caixa__foto__edit"><i class="fa-solid fa-user-pen" id="imgPhoto"><input type="file" id="flImage" name="fImage" accept="image/*"></i></button> 
          
        </div>
        <form class="caixa__form" action="atualiza_perfil.php" method="post">
              
          <div class="caixa__campo">
            <?php   
              $dados = array_shift($informacoes);
              echo "<label for='nick class='caixa__label'>Nick:</label>";
              echo "<input type='text' id='nick' name='nick' class='caixa__input' value='".$dados->getNickUsuario()."' required>";

              echo "<label for='nomeSobreno' class='caixa__label'>Nome:</label>";
              echo "<input type='text' id='nomeSobreno' name='nome' class='caixa__input' value='".$dados->getNomeUsuario()."' required>";

              echo "<label for='email' class='caixa__label'>Email:</label>";
              echo "<input type='email' id='email' name='email' class='caixa__input' value='".$dados->getEmailUsuario()."' required>";

              echo "<label for='senha' class='caixa__label'>Senha:</label>";
              echo "<input type='password' id='senha' name='senha' class='caixa__input' value='".$_SESSION['senha_usuario']."' required>";
            ?>
          </div>

          <div class="caixa_bio">
            <label for="mensagem" class="caixa__bio__label">Biografia:</label>
              <?php
                echo "<input cols='100' rows='10' id='bio' name='bio' class='caixa__bio__input' value='".$dados->getBioUsuario()."' required>"
              ?>
          </div>
          <div class="bot">
            <a class="bot__link" href="perfil.php">Cancelar</a>
            <input type="submit" value="Enviar formulário" class="caixa__input__enviar">
          </div>
        </form>
      </div>
    </main>

    <footer class="rodape__pai">
        <div class="rodape__caixa">

            <h2 class="rodape__caixa__h2"><i class="fa-solid fa-copyright"></i> Unending Darkness </h2>

            <a class="rodape__caixa__but" href="">Comentarios</a>


            <a class="rodape__caixa_link" href="link do twiter"><i class="fa-brands fa-twitter fa-2xl"></i></a>
            <a class="rodape__caixa_link" href="link do instagram"><i class="fa-brands fa-instagram fa-2xl"></i></a>

        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="../src/script.js"></script>
</body>
</html>