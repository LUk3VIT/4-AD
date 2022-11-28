<?php
session_start();
require_once '../classes/repositorioTabletop.php'; 
$repositorio = new RepositorioTabletopMySQL();
if($_SESSION['personagem1'] == NULL){
    header('Location: escolher_personagens/escolher_personagem.php');
}
if($_SESSION['personagem2'] == NULL){
    header('Location: escolher_personagens/escolher_personagem.php');
}
if($_SESSION['personagem3'] == NULL){
    header('Location: escolher_personagens/escolher_personagem.php');
}
if($_SESSION['personagem4'] == NULL){
    header('Location: escolher_personagens/escolher_personagem.php');
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preparação para a Aventura!!!</title>
    <link rel="stylesheet" href="../../assets/style/reset.css">
    <link rel="stylesheet" href="../../assets/style/tabletopJogo.css">
</head>
<body>
    <h1 class='selecao__prepa'>Sala de preparação para iniciar a aventura</h1>
    <div class='menuzin'>
    <h2><a class='rykelmy__entrar' href='dentro_da_masmorra/definindo_itens/equipar_armas.php'>Adentrar a Masmorra :)</a> </h2>
    <h2><a class='rykelmy__loja' href='loja_itens/selecionar_personagem.php'>Ir para loja de Itens</a> </h2>
    </div>
    <br>
    <br>
    <h2 class='selecao__prepa'>Personagens Selecionados:</h2>
    <?php
        echo "<div class='exbir__personagens'>";
        $id = $_SESSION['personagem1'];
        $mostrar = $repositorio->MostrarPersonagem($id);
        foreach ($mostrar as $key) {
            $id = $key['id_pers'];
            echo "<div class='mostrar__pers'>";
                $img = $key['img'];
                echo "<img class='mostrar__pers__img' src='../$img'>";
                echo "<h2>Nome: ".$key['nome']."</h2>";
                echo "<h2>Classe: ".$key['classe']."</h2>";
                echo "<h2>Nível: ".$key['nivel']."</h2>";
                echo "<h2><a class='mostrar__pers__info' href='escolher_personagens/redirecionar_ver_personagem.php?ver=$id'>Ver mais Informações</a></h3>";
                echo "<h2><a class='mostrar__pers__escolher' href='escolher_personagens/redirecionar_ver_personagem.php?tirar=$id'>Trocar</a></h3>";
            echo "</div>";
           
        }
        $id = $_SESSION['personagem2'];
        $mostrar = $repositorio->MostrarPersonagem($id);
        foreach ($mostrar as $key) {
            $id = $key['id_pers'];
            echo "<div class='mostrar__pers'>";
                $img = $key['img'];
                echo "<img class='mostrar__pers__img' src='../$img'>";
                echo "<h2>Nome: ".$key['nome']."</h2>";
                echo "<h2>Classe: ".$key['classe']."</h2>";
                echo "<h2>Nível: ".$key['nivel']."</h2>";
                echo "<h2><a class='mostrar__pers__info' href='escolher_personagens/redirecionar_ver_personagem.php?ver=$id'>Ver mais Informações</a></h3>";
                echo "<h2><a class='mostrar__pers__escolher' href='escolher_personagens/redirecionar_ver_personagem.php?tirar=$id'>Trocar</a></h3>";
            echo "</div>";
        }
        $id = $_SESSION['personagem3'];
        $mostrar = $repositorio->MostrarPersonagem($id);
        foreach ($mostrar as $key) {
            $id = $key['id_pers'];
            echo "<div class='mostrar__pers'>";
                $img = $key['img'];
                echo "<img class='mostrar__pers__img' src='../$img'>";
                echo "<h2>Nome: ".$key['nome']."</h2>";
                echo "<h2>Classe: ".$key['classe']."</h2>";
                echo "<h2>Nível: ".$key['nivel']."</h2>";
                echo "<h2><a class='mostrar__pers__info' href='escolher_personagens/redirecionar_ver_personagem.php?ver=$id'>Ver mais Informações</a></h3>";
                echo "<h2><a class='mostrar__pers__escolher' href='escolher_personagens/redirecionar_ver_personagem.php?tirar=$id'>Trocar</a></h2>";
            echo "</div>";
        }
        $id = $_SESSION['personagem4'];
        $mostrar = $repositorio->MostrarPersonagem($id);
        foreach ($mostrar as $key) {
            $id = $key['id_pers'];
            echo "<div class='mostrar__pers'>";
                $img = $key['img'];
                echo "<img class='mostrar__pers__img' src='../$img'>";
                echo "<h2>Nome: ".$key['nome']."</h2>";
                echo "<h2>Classe: ".$key['classe']."</h2>";
                echo "<h2>Nível: ".$key['nivel']."</h2>";
                echo "<h2><a class='mostrar__pers__info' href='escolher_personagens/redirecionar_ver_personagem.php?ver=$id'>Ver mais Informações</a></h3>";
                echo "<h2><a class='mostrar__pers__escolher' href='escolher_personagens/redirecionar_ver_personagem.php?tirar=$id'>Trocar</a></h3>";
            echo "</div>";
        }
        echo "</div>";
    ?>
    <h2 class='rykelmy__trocar'><a class='rykelmy__loja' href='trocar_itens/ver_inventarios.php'>Trocar Itens entre os personagens</a></h2>
</body>
</html>