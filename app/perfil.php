<?php
    session_start();
    require_once '../classes/repositorioUsuario.php';
    $repositorio = new RepositorioUsuariosMySQL();
    $id_usuario = $_SESSION['id_usuario']; 
    $informacoes = $repositorio->ListarDados($id_usuario);
    if($_SESSION['id_usuario'] == NULL){
      header('Location: ../index.php');
    }
    if(isset($_SESSION['img_usuario'])){ 
      $img = $_SESSION['img_usuario'];
    } else {
      $img = $repositorio->SetarImagemUsuario($id_usuario);
    }
?> 

<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perfil</title>
    <link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../assets/style/reset.css">
    <link rel="stylesheet" href="../assets/style/home.css">
    <link rel="stylesheet" href="../assets/style/perfil.css">
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
          <li class="nav-item top-menu__item">
                <a class="nav-link top-menu__item__link" href="Chat/chat_geral/index_chat_geral.php">Chat</a>
              </li>
        </ul>
      </div>
    </div>
  </nav>
    
  <div class="caixa__logo">
    <img src="../assets/img/logo.png" alt="Logo de Infinity darkness" class="logo">
  </div>

  <main class="main">
      <div class="apresentacao">
        
        <div class="caixa__foto">
          <?php
            echo "<img src='$img' alt='' class='caixa__foto__perfil'>"
          ?>
        </div>

        <div class="informacao">
          <?php   
            $dados = array_shift($informacoes);
            echo "<p class='informacao__label'>Nick</p>";
            echo "<p class='informacao__input'>".$dados->getNickUsuario()."</p>";
            echo "<p class='informacao__label'>Nome</p>";
            echo "<p class='informacao__input'>".$dados->getNomeUsuario()."</p>";
            echo "<p class='informacao__label'>Bio</p>";
            echo "<p class='informacao__input__bio'>".$dados->getBioUsuario()."</p>";
          ?>
          
          <div>
            <?php
              $numeroLinhas = $repositorio->VerificarSolicitacao($id_usuario);
              if($numeroLinhas > 0){
                $solicitacoes = $repositorio->PegarIdSolicitacoes($id_usuario);
                echo "<h1>Pedidos de Amizade</h1>";
                foreach ($solicitacoes as $key) {
                  $id_usuario = $key['id_usuario'];
                  $informacoes = $repositorio->MostrarInfo($id_usuario);
                  foreach ($informacoes as $key) {
                    echo "<div style='border: solid 2px red'>";
                    echo "<h2>".$key['nome_usuario']."</h2>";
                    echo "<h2><a href='aceitar_solic.php?id=$id_usuario'>Aceitar</a></h2>";
                    echo "<h2><a href='recusar_solic.php?id=$id_usuario'>Recusar</a></h2>";
                    echo "<h2><a href='redirecionar.php?id=$id_usuario'>Ver Perfil</a></h2>";
                    echo "</div>";
                  }
                }
              }
            ?>
          </div>

          <div>
            <?php
              $id_usuario = $_SESSION['id_usuario'];

              $informacoes = $repositorio->PegarIdAmg1($id_usuario);
              foreach ($informacoes as $key) {
                $id = $key['id_amigo'];
                $listar = $repositorio->ListarAmg($id,$id_usuario);
                foreach ($listar as $key) {
                  if($key['sessao_status'] == "Online"){
                    $cor = "green";
                  } else {
                    $cor = "red";
                  }
                  $x = $id;
                  echo "<div class='tabela_amigos'>";
                  echo "<h2>".$key['nome_usuario']."   <a style='color:".$cor."'>".$key['sessao_status']."</a></h2>";
                  echo "<h2 class='tabela_amigos_h2'>".$key['email_usuario']."</h2>";
                  echo "<h2 class='tabela_amigos_h2'><a class='tabela_amigos_a' href='Chat/chat_privado/index_chat_privado.php?id=$x'>Conversar</a></h2>";
                  echo "<h2><a class='tabela_amigos_a' href='redirecionar.php?id=$x'>Ver Perfil</a></h2>";
                  echo "</div>";
                }
              }
            ?>
          </div>
        </div>
        
        <div class="botoes">
          <div class="botao__edit">
            <button class="botao__edit__button"><a class="botao__edit__link" href="perfil-edit.php">Editar</a></button>
          </div>

          <div class="botao__lista">
            <button class="botao__lista__button"><a class="botao__lista__link" href="lista_usuarios.php">Lista de Usuários</a></button>
          </div>
        </div>

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
  <script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>