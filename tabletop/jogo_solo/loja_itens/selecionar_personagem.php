<?php

session_start();
require_once '../../classes/repositorioTabletop.php'; 
$repositorio = new RepositorioTabletopMySQL();
unset($_SESSION['id_comprador']);

echo "<h2><a href='../index_jogo_solo.php'>Voltar a Sala de Preparação</a></h2>";
echo "<h1>Escolha um personagem para comprar itens</h1>";


$id = $_SESSION['personagem1'];
$personagem = $repositorio->MostrarPersonagem($id);
foreach ($personagem as $key) {
    $id_comprador = $key['id_pers'];
    echo "<div style='border: solid 2px black'>";
        $img = $key['img'];
        echo "<img src='../../$img'>";
        echo "<h2>Nome: ".$key['nome']."</h2>";
        echo "<h2>Classe: ".$key['classe']."</h2>";
        echo "<h2>Dinheiro: ".$key['dinheiro']."</h2>";
        echo "<h3><a href='index_loja.php?id=$id_comprador'>Selecionar</a></h3>";
    echo "</div>";
}

$id = $_SESSION['personagem2'];
$personagem = $repositorio->MostrarPersonagem($id);
foreach ($personagem as $key) {
    $id_comprador = $key['id_pers'];
    echo "<div style='border: solid 2px black'>";
        $img = $key['img'];
        echo "<img src='../../$img'>";
        echo "<h2>Nome: ".$key['nome']."</h2>";
        echo "<h2>Classe: ".$key['classe']."</h2>";
        echo "<h2>Dinheiro: ".$key['dinheiro']."</h2>";
        echo "<h3><a href='index_loja.php?id=$id_comprador'>Selecionar</a></h3>";
    echo "</div>";
}

$id = $_SESSION['personagem3'];
$personagem = $repositorio->MostrarPersonagem($id);
foreach ($personagem as $key) {
    $id_comprador = $key['id_pers'];
    echo "<div style='border: solid 2px black'>";
        $img = $key['img'];
        echo "<img src='../../$img'>";
        echo "<h2>Nome: ".$key['nome']."</h2>";
        echo "<h2>Classe: ".$key['classe']."</h2>";
        echo "<h2>Dinheiro: ".$key['dinheiro']."</h2>";
        echo "<h3><a href='index_loja.php?id=$id_comprador'>Selecionar</a></h3>";
    echo "</div>";
}

$id = $_SESSION['personagem4'];
$personagem = $repositorio->MostrarPersonagem($id);
foreach ($personagem as $key) {
    $id_comprador = $key['id_pers'];
    echo "<div style='border: solid 2px black'>";
        $img = $key['img'];
        echo "<img src='../../$img'>";
        echo "<h2>Nome: ".$key['nome']."</h2>";
        echo "<h2>Classe: ".$key['classe']."</h2>";
        echo "<h2>Dinheiro: ".$key['dinheiro']."</h2>";
        echo "<h3><a href='index_loja.php?id=$id_comprador'>Selecionar</a></h3>";
    echo "</div>";
}

?>