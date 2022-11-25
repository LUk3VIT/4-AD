<?php

session_start();
require_once '../../classes/repositorioTabletop.php'; 
$repositorio = new RepositorioTabletopMySQL();

$id_remetente = $_POST['id_remetente'];
$dinheiro_total = $_POST['dinheiro_total'];
$dinheiro = $_POST['dinheiro'];


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

    <h2 class='rykelmy__trocar'><a class='rykelmy__entrar' href='ver_inventarios.php'>Voltar</a></h2>
    <main class='escolher__dar'>

<?php


if($id_remetente == $_SESSION['personagem1']){
    $id = $_SESSION['personagem2'];
    $personagem = $repositorio->MostrarPersonagem($id);
    foreach ($personagem as $key) {
        $id_dest = $key['id_pers'];
        $dinheiro_dest = $key['dinheiro'];
        echo "<div class='mostrar__pers'>";
            $img = $key['img'];
            echo "<img src='../../$img'>";
            echo "<h2>Nome: ".$key['nome']."</h2>";
            echo "<h2>Classe: ".$key['classe']."</h2>";
            echo "<h2>Dinheiro: ".$key['dinheiro']."</h2>";
            echo "<form class='form__dar' action='dar_dinheiro.php' method='post'>";
                echo "<input type='text' name='id_remetente' value='$id_remetente' hidden>";
                echo "<input type='number' name='dinheiro' value='$dinheiro' hidden>";
                echo "<input type='number' name='dinheiro_total' value='$dinheiro_total' hidden>";
                echo "<input type='text' name='id_dest' value='$id_dest' hidden>";
                echo "<input type='number' name='dinheiro_dest' value='$dinheiro_dest' hidden>";
                echo "<input class='botao__dar' type='submit' value='Dar'>";
            echo "</form>";
        echo "</div>";
    }

    $id = $_SESSION['personagem3'];
    $personagem = $repositorio->MostrarPersonagem($id);
    foreach ($personagem as $key) {
        $id_dest = $key['id_pers'];
        $dinheiro_dest = $key['dinheiro'];
        echo "<div class='mostrar__pers'>";
            $img = $key['img'];
            echo "<img src='../../$img'>";
            echo "<h2>Nome: ".$key['nome']."</h2>";
            echo "<h2>Classe: ".$key['classe']."</h2>";
            echo "<h2>Dinheiro: ".$key['dinheiro']."</h2>";
            echo "<form class='form__dar' action='dar_dinheiro.php' method='post'>";
                echo "<input type='text' name='id_remetente' value='$id_remetente' hidden>";
                echo "<input type='number' name='dinheiro' value='$dinheiro' hidden>";
                echo "<input type='number' name='dinheiro_total' value='$dinheiro_total' hidden>";
                echo "<input type='text' name='id_dest' value='$id_dest' hidden>";
                echo "<input type='number' name='dinheiro_dest' value='$dinheiro_dest' hidden>";
                echo "<input class='botao__dar' type='submit' value='Dar'>";
            echo "</form>";
        echo "</div>";
    }

    $id = $_SESSION['personagem4'];
    $personagem = $repositorio->MostrarPersonagem($id);
    foreach ($personagem as $key) {
        $id_dest = $key['id_pers'];
        $dinheiro_dest = $key['dinheiro'];
        echo "<div class='mostrar__pers'>";
            $img = $key['img'];
            echo "<img src='../../$img'>";
            echo "<h2>Nome: ".$key['nome']."</h2>";
            echo "<h2>Classe: ".$key['classe']."</h2>";
            echo "<h2>Dinheiro: ".$key['dinheiro']."</h2>";
            echo "<form class='form__dar' action='dar_dinheiro.php' method='post'>";
                echo "<input type='text' name='id_remetente' value='$id_remetente' hidden>";
                echo "<input type='number' name='dinheiro' value='$dinheiro' hidden>";
                echo "<input type='number' name='dinheiro_total' value='$dinheiro_total' hidden>";
                echo "<input type='text' name='id_dest' value='$id_dest' hidden>";
                echo "<input type='number' name='dinheiro_dest' value='$dinheiro_dest' hidden>";
                echo "<input class='botao__dar' type='submit' value='Dar'>";
            echo "</form>";
        echo "</div>";
    }
} else if($id_remetente == $_SESSION['personagem2']){
    $id = $_SESSION['personagem1'];
    $personagem = $repositorio->MostrarPersonagem($id);
    foreach ($personagem as $key) {
        $id_dest = $key['id_pers'];
        $dinheiro_dest = $key['dinheiro'];
        echo "<div class='mostrar__pers'>";
            $img = $key['img'];
            echo "<img src='../../$img'>";
            echo "<h2>Nome: ".$key['nome']."</h2>";
            echo "<h2>Classe: ".$key['classe']."</h2>";
            echo "<h2>Dinheiro: ".$key['dinheiro']."</h2>";
            echo "<form class='form__dar' action='dar_dinheiro.php' method='post'>";
                echo "<input type='text' name='id_remetente' value='$id_remetente' hidden>";
                echo "<input type='number' name='dinheiro' value='$dinheiro' hidden>";
                echo "<input type='number' name='dinheiro_total' value='$dinheiro_total' hidden>";
                echo "<input type='text' name='id_dest' value='$id_dest' hidden>";
                echo "<input type='number' name='dinheiro_dest' value='$dinheiro_dest' hidden>";
                echo "<input class='botao__dar' type='submit' value='Dar'>";
            echo "</form>";
        echo "</div>";
    }

    $id = $_SESSION['personagem3'];
    $personagem = $repositorio->MostrarPersonagem($id);
    foreach ($personagem as $key) {
        $id_dest = $key['id_pers'];
        $dinheiro_dest = $key['dinheiro'];
        echo "<div class='mostrar__pers'>";
            $img = $key['img'];
            echo "<img src='../../$img'>";
            echo "<h2>Nome: ".$key['nome']."</h2>";
            echo "<h2>Classe: ".$key['classe']."</h2>";
            echo "<h2>Dinheiro: ".$key['dinheiro']."</h2>";
            echo "<form class='form__dar' action='dar_dinheiro.php' method='post'>";
                echo "<input type='text' name='id_remetente' value='$id_remetente' hidden>";
                echo "<input type='number' name='dinheiro' value='$dinheiro' hidden>";
                echo "<input type='number' name='dinheiro_total' value='$dinheiro_total' hidden>";
                echo "<input type='text' name='id_dest' value='$id_dest' hidden>";
                echo "<input type='number' name='dinheiro_dest' value='$dinheiro_dest' hidden>";
                echo "<input class='botao__dar' type='submit' value='Dar'>";
            echo "</form>";
        echo "</div>";
    }

    $id = $_SESSION['personagem4'];
    $personagem = $repositorio->MostrarPersonagem($id);
    foreach ($personagem as $key) {
        $id_dest = $key['id_pers'];
        $dinheiro_dest = $key['dinheiro'];
        echo "<div class='mostrar__pers'>";
            $img = $key['img'];
            echo "<img src='../../$img'>";
            echo "<h2>Nome: ".$key['nome']."</h2>";
            echo "<h2>Classe: ".$key['classe']."</h2>";
            echo "<h2>Dinheiro: ".$key['dinheiro']."</h2>";
            echo "<form class='form__dar' action='dar_dinheiro.php' method='post'>";
                echo "<input type='text' name='id_remetente' value='$id_remetente' hidden>";
                echo "<input type='number' name='dinheiro' value='$dinheiro' hidden>";
                echo "<input type='number' name='dinheiro_total' value='$dinheiro_total' hidden>";
                echo "<input type='text' name='id_dest' value='$id_dest' hidden>";
                echo "<input type='number' name='dinheiro_dest' value='$dinheiro_dest' hidden>";
                echo "<input class='botao__dar' type='submit' value='Dar'>";
            echo "</form>";
        echo "</div>";
    }
} else if($id_remetente == $_SESSION['personagem3']){
    $id = $_SESSION['personagem1'];
    $personagem = $repositorio->MostrarPersonagem($id);
    foreach ($personagem as $key) {
        $id_dest = $key['id_pers'];
        $dinheiro_dest = $key['dinheiro'];
        echo "<div class='mostrar__pers'>";
            $img = $key['img'];
            echo "<img src='../../$img'>";
            echo "<h2>Nome: ".$key['nome']."</h2>";
            echo "<h2>Classe: ".$key['classe']."</h2>";
            echo "<h2>Dinheiro: ".$key['dinheiro']."</h2>";
            echo "<form class='form__dar' action='dar_dinheiro.php' method='post'>";
                echo "<input type='text' name='id_remetente' value='$id_remetente' hidden>";
                echo "<input type='number' name='dinheiro' value='$dinheiro' hidden>";
                echo "<input type='number' name='dinheiro_total' value='$dinheiro_total' hidden>";
                echo "<input type='text' name='id_dest' value='$id_dest' hidden>";
                echo "<input type='number' name='dinheiro_dest' value='$dinheiro_dest' hidden>";
                echo "<input class='botao__dar' type='submit' value='Dar'>";
            echo "</form>";
        echo "</div>";
    }

    $id = $_SESSION['personagem2'];
    $personagem = $repositorio->MostrarPersonagem($id);
    foreach ($personagem as $key) {
        $id_dest = $key['id_pers'];
        $dinheiro_dest = $key['dinheiro'];
        echo "<div class='mostrar__pers'>";
            $img = $key['img'];
            echo "<img src='../../$img'>";
            echo "<h2>Nome: ".$key['nome']."</h2>";
            echo "<h2>Classe: ".$key['classe']."</h2>";
            echo "<h2>Dinheiro: ".$key['dinheiro']."</h2>";
            echo "<form class='form__dar' action='dar_dinheiro.php' method='post'>";
                echo "<input type='text' name='id_remetente' value='$id_remetente' hidden>";
                echo "<input type='number' name='dinheiro' value='$dinheiro' hidden>";
                echo "<input type='number' name='dinheiro_total' value='$dinheiro_total' hidden>";
                echo "<input type='text' name='id_dest' value='$id_dest' hidden>";
                echo "<input type='number' name='dinheiro_dest' value='$dinheiro_dest' hidden>";
                echo "<input class='botao__dar' type='submit' value='Dar'>";
            echo "</form>";
        echo "</div>";
    }

    $id = $_SESSION['personagem4'];
    $personagem = $repositorio->MostrarPersonagem($id);
    foreach ($personagem as $key) {
        $id_dest = $key['id_pers'];
        $dinheiro_dest = $key['dinheiro'];
        echo "<div class='mostrar__pers'>";
            $img = $key['img'];
            echo "<img src='../../$img'>";
            echo "<h2>Nome: ".$key['nome']."</h2>";
            echo "<h2>Classe: ".$key['classe']."</h2>";
            echo "<h2>Dinheiro: ".$key['dinheiro']."</h2>";
            echo "<form class='form__dar' action='dar_dinheiro.php' method='post'>";
                echo "<input type='text' name='id_remetente' value='$id_remetente' hidden>";
                echo "<input type='number' name='dinheiro' value='$dinheiro' hidden>";
                echo "<input type='number' name='dinheiro_total' value='$dinheiro_total' hidden>";
                echo "<input type='text' name='id_dest' value='$id_dest' hidden>";
                echo "<input type='number' name='dinheiro_dest' value='$dinheiro_dest' hidden>";
                echo "<input class='botao__dar' type='submit' value='Dar'>";
            echo "</form>";
        echo "</div>";
    }
} if($id_remetente == $_SESSION['personagem4']){
    $id = $_SESSION['personagem1'];
    $personagem = $repositorio->MostrarPersonagem($id);
    foreach ($personagem as $key) {
        $id_dest = $key['id_pers'];
        $dinheiro_dest = $key['dinheiro'];
        echo "<div class='mostrar__pers'>";
            $img = $key['img'];
            echo "<img src='../../$img'>";
            echo "<h2>Nome: ".$key['nome']."</h2>";
            echo "<h2>Classe: ".$key['classe']."</h2>";
            echo "<h2>Dinheiro: ".$key['dinheiro']."</h2>";
            echo "<form class='form__dar' action='dar_dinheiro.php' method='post'>";
                echo "<input type='text' name='id_remetente' value='$id_remetente' hidden>";
                echo "<input type='number' name='dinheiro' value='$dinheiro' hidden>";
                echo "<input type='number' name='dinheiro_total' value='$dinheiro_total' hidden>";
                echo "<input type='text' name='id_dest' value='$id_dest' hidden>";
                echo "<input type='number' name='dinheiro_dest' value='$dinheiro_dest' hidden>";
                echo "<input class='botao__dar' type='submit' value='Dar'>";
            echo "</form>";
        echo "</div>";
    }

    $id = $_SESSION['personagem2'];
    $personagem = $repositorio->MostrarPersonagem($id);
    foreach ($personagem as $key) {
        $id_dest = $key['id_pers'];
        $dinheiro_dest = $key['dinheiro'];
        echo "<div class='mostrar__pers'>";
            $img = $key['img'];
            echo "<img src='../../$img'>";
            echo "<h2>Nome: ".$key['nome']."</h2>";
            echo "<h2>Classe: ".$key['classe']."</h2>";
            echo "<h2>Dinheiro: ".$key['dinheiro']."</h2>";
            echo "<form class='form__dar' action='dar_dinheiro.php' method='post'>";
                echo "<input type='text' name='id_remetente' value='$id_remetente' hidden>";
                echo "<input type='number' name='dinheiro' value='$dinheiro' hidden>";
                echo "<input type='number' name='dinheiro_total' value='$dinheiro_total' hidden>";
                echo "<input type='text' name='id_dest' value='$id_dest' hidden>";
                echo "<input type='number' name='dinheiro_dest' value='$dinheiro_dest' hidden>";
                echo "<input class='botao__dar' type='submit' value='Dar'>";
            echo "</form>";
        echo "</div>";
    }

    $id = $_SESSION['personagem3'];
    $personagem = $repositorio->MostrarPersonagem($id);
    foreach ($personagem as $key) {
        $id_dest = $key['id_pers'];
        $dinheiro_dest = $key['dinheiro'];
        echo "<div class='mostrar__pers'>";
            $img = $key['img'];
            echo "<img src='../../$img'>";
            echo "<h2>Nome: ".$key['nome']."</h2>";
            echo "<h2>Classe: ".$key['classe']."</h2>";
            echo "<h2>Dinheiro: ".$key['dinheiro']."</h2>";
            echo "<form class='form__dar' action='dar_dinheiro.php' method='post'>";
                echo "<input type='text' name='id_remetente' value='$id_remetente' hidden>";
                echo "<input type='number' name='dinheiro' value='$dinheiro' hidden>";
                echo "<input type='number' name='dinheiro_total' value='$dinheiro_total' hidden>";
                echo "<input type='text' name='id_dest' value='$id_dest' hidden>";
                echo "<input type='number' name='dinheiro_dest' value='$dinheiro_dest' hidden>";
                echo "<input class='botao__dar' type='submit' value='Dar'>";
            echo "</form>";
        echo "</div>";
    }
}

?>

</main>

</body>
</html>