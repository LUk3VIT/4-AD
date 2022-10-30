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
</head>
<body>
    <h1>Sala de preparação para iniciar a aventura</h1>
    <h2> <a href='dentro_da_masmorra/equipar_armas.php'>Adentrar a Masmorra :)</a> </h2>
    <h2> <a href='loja_itens/selecionar_personagem.php'>Ir para loja de Itens</a> </h2>
    <br>
    <br>
    <h2>Personagens Selecionados:</h2>
    <?php
        echo "<table>";
        echo "<tr>";
        $id = $_SESSION['personagem1'];
        $mostrar = $repositorio->MostrarPersonagem($id);
        foreach ($mostrar as $key) {
            $id = $key['id_pers'];
            echo "<td style='border:solid 2px black'>";
                echo "<h2>Nome: ".$key['nome']."</h2>";
                echo "<h2>Classe: ".$key['classe']."</h2>";
                echo "<h2>Nível: ".$key['nivel']."</h2>";
                echo "<h3><a href='escolher_personagens/redirecionar_ver_personagem.php?ver=$id'>Ver mais Informações</a></h3>";
                echo "<h3><a href='escolher_personagens/redirecionar_ver_personagem.php?tirar=$id'>Trocar</a></h3>";
            echo "</td>";
        }
        $id = $_SESSION['personagem2'];
        $mostrar = $repositorio->MostrarPersonagem($id);
        foreach ($mostrar as $key) {
            $id = $key['id_pers'];
            echo "<td style='border:solid 2px black'>";
                echo "<h2>Nome: ".$key['nome']."</h2>";
                echo "<h2>Classe: ".$key['classe']."</h2>";
                echo "<h2>Nível: ".$key['nivel']."</h2>";
                echo "<h3><a href='escolher_personagens/redirecionar_ver_personagem.php?ver=$id'>Ver mais Informações</a></h3>";
                echo "<h3><a href='escolher_personagens/redirecionar_ver_personagem.php?tirar=$id'>Trocar</a></h3>";
            echo "</td>";
        }
        $id = $_SESSION['personagem3'];
        $mostrar = $repositorio->MostrarPersonagem($id);
        foreach ($mostrar as $key) {
            $id = $key['id_pers'];
            echo "<td style='border:solid 2px black'>";
                echo "<h2>Nome: ".$key['nome']."</h2>";
                echo "<h2>Classe: ".$key['classe']."</h2>";
                echo "<h2>Nível: ".$key['nivel']."</h2>";
                echo "<h3><a href='escolher_personagens/redirecionar_ver_personagem.php?ver=$id'>Ver mais Informações</a></h3>";
                echo "<h3><a href='escolher_personagens/redirecionar_ver_personagem.php?tirar=$id'>Trocar</a></h2>";
            echo "</td>";
        }
        $id = $_SESSION['personagem4'];
        $mostrar = $repositorio->MostrarPersonagem($id);
        foreach ($mostrar as $key) {
            $id = $key['id_pers'];
            echo "<td style='border:solid 2px black'>";
                echo "<h2>Nome: ".$key['nome']."</h2>";
                echo "<h2>Classe: ".$key['classe']."</h2>";
                echo "<h2>Nível: ".$key['nivel']."</h2>";
                echo "<h3><a href='escolher_personagens/redirecionar_ver_personagem.php?ver=$id'>Ver mais Informações</a></h3>";
                echo "<h3><a href='escolher_personagens/redirecionar_ver_personagem.php?tirar=$id'>Trocar</a></h3>";
            echo "</td>";
        }
        echo "</tr>";
        echo "</table>";
    ?>
    <h2><a href='trocar_itens/ver_inventarios.php'>Trocar Itens entre os personagens</a></h2>
</body>
</html>