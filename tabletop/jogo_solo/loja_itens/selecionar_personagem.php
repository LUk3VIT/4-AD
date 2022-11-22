<?php

session_start();
require_once '../../classes/repositorioTabletop.php'; 
$repositorio = new RepositorioTabletopMySQL();
unset($_SESSION['id_comprador']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../../assets/style/reset.css">
    <link rel="stylesheet" href="../../../assets/style/tabletopJogo.css">
</head>
<body>
<?php


echo "<h2 class='rykelmy__trocar'><a class='rykelmy__entrar' href='../index_jogo_solo.php'>Voltar a Sala de Preparação</a></h2>";
echo "<h1 class='selecao__prepa'>Escolha um personagem para comprar itens</h1>";

echo "<div class='mamao'>";
$id = $_SESSION['personagem1'];
$personagem = $repositorio->MostrarPersonagem($id);
foreach ($personagem as $key) {
    $id_comprador = $key['id_pers'];
    echo "<div class='caixa__exibir'>";
        $img = $key['img'];
        echo "<img src='../../$img'>";
        echo "<h2>Nome: ".$key['nome']."</h2>";
        echo "<h2>Classe: ".$key['classe']."</h2>";
        echo "<h2>Dinheiro: ".$key['dinheiro']."</h2>";
        echo "<h3><a class='select' href='index_loja.php?id=$id_comprador'>Selecionar</a></h3>";
    echo "</div>";
}

$id = $_SESSION['personagem2'];
$personagem = $repositorio->MostrarPersonagem($id);
foreach ($personagem as $key) {
    $id_comprador = $key['id_pers'];
    echo "<div class='caixa__exibir'>";
        $img = $key['img'];
        echo "<img src='../../$img'>";
        echo "<h2>Nome: ".$key['nome']."</h2>";
        echo "<h2>Classe: ".$key['classe']."</h2>";
        echo "<h2>Dinheiro: ".$key['dinheiro']."</h2>";
        echo "<h3><a class='select' href='index_loja.php?id=$id_comprador'>Selecionar</a></h3>";
    echo "</div>";
}

$id = $_SESSION['personagem3'];
$personagem = $repositorio->MostrarPersonagem($id);
foreach ($personagem as $key) {
    $id_comprador = $key['id_pers'];
    echo "<div class='caixa__exibir'>";
        $img = $key['img'];
        echo "<img src='../../$img'>";
        echo "<h2>Nome: ".$key['nome']."</h2>";
        echo "<h2>Classe: ".$key['classe']."</h2>";
        echo "<h2>Dinheiro: ".$key['dinheiro']."</h2>";
        echo "<h3><a class='select' href='index_loja.php?id=$id_comprador'>Selecionar</a></h3>";
    echo "</div>";
}

$id = $_SESSION['personagem4'];
$personagem = $repositorio->MostrarPersonagem($id);
foreach ($personagem as $key) {
    $id_comprador = $key['id_pers'];
    echo "<div class='caixa__exibir'>";
        $img = $key['img'];
        echo "<img src='../../$img'>";
        echo "<h2>Nome: ".$key['nome']."</h2>";
        echo "<h2>Classe: ".$key['classe']."</h2>";
        echo "<h2>Dinheiro: ".$key['dinheiro']."</h2>";
        echo "<h3><a class='select' href='index_loja.php?id=$id_comprador'>Selecionar</a></h3>";
    echo "</div>";
}
echo "</div>";
?>

</body>
</html>