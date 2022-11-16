<?php

session_start();
require_once '../../classes/repositorioTabletop.php'; 
$repositorio = new RepositorioTabletopMySQL();

$id_remetente = $_POST['id_remetente'];
$dinheiro_total = $_POST['dinheiro_total'];
$dinheiro = $_POST['dinheiro'];

echo "<h2><a href='ver_inventarios.php'>Voltar</a></h2>";

if($id_remetente == $_SESSION['personagem1']){
    $id = $_SESSION['personagem2'];
    $personagem = $repositorio->MostrarPersonagem($id);
    foreach ($personagem as $key) {
        $id_dest = $key['id_pers'];
        $dinheiro_dest = $key['dinheiro'];
        echo "<div style='border: solid 2px red'>";
            $img = $key['img'];
            echo "<img src='../../$img'>";
            echo "<h2>Nome: ".$key['nome']."</h2>";
            echo "<h2>Classe: ".$key['classe']."</h2>";
            echo "<h2>Dinheiro: ".$key['dinheiro']."</h2>";
            echo "<form action='dar_dinheiro.php' method='post'>";
                echo "<input type='text' name='id_remetente' value='$id_remetente' hidden>";
                echo "<input type='number' name='dinheiro' value='$dinheiro' hidden>";
                echo "<input type='number' name='dinheiro_total' value='$dinheiro_total' hidden>";
                echo "<input type='text' name='id_dest' value='$id_dest' hidden>";
                echo "<input type='number' name='dinheiro_dest' value='$dinheiro_dest' hidden>";
                echo "<input type='submit' value='Dar'>";
            echo "</form>";
        echo "</div>";
    }

    $id = $_SESSION['personagem3'];
    $personagem = $repositorio->MostrarPersonagem($id);
    foreach ($personagem as $key) {
        $id_dest = $key['id_pers'];
        $dinheiro_dest = $key['dinheiro'];
        echo "<div style='border: solid 2px red'>";
            $img = $key['img'];
            echo "<img src='../../$img'>";
            echo "<h2>Nome: ".$key['nome']."</h2>";
            echo "<h2>Classe: ".$key['classe']."</h2>";
            echo "<h2>Dinheiro: ".$key['dinheiro']."</h2>";
            echo "<form action='dar_dinheiro.php' method='post'>";
                echo "<input type='text' name='id_remetente' value='$id_remetente' hidden>";
                echo "<input type='number' name='dinheiro' value='$dinheiro' hidden>";
                echo "<input type='number' name='dinheiro_total' value='$dinheiro_total' hidden>";
                echo "<input type='text' name='id_dest' value='$id_dest' hidden>";
                echo "<input type='number' name='dinheiro_dest' value='$dinheiro_dest' hidden>";
                echo "<input type='submit' value='Dar'>";
            echo "</form>";
        echo "</div>";
    }

    $id = $_SESSION['personagem4'];
    $personagem = $repositorio->MostrarPersonagem($id);
    foreach ($personagem as $key) {
        $id_dest = $key['id_pers'];
        $dinheiro_dest = $key['dinheiro'];
        echo "<div style='border: solid 2px red'>";
            $img = $key['img'];
            echo "<img src='../../$img'>";
            echo "<h2>Nome: ".$key['nome']."</h2>";
            echo "<h2>Classe: ".$key['classe']."</h2>";
            echo "<h2>Dinheiro: ".$key['dinheiro']."</h2>";
            echo "<form action='dar_dinheiro.php' method='post'>";
                echo "<input type='text' name='id_remetente' value='$id_remetente' hidden>";
                echo "<input type='number' name='dinheiro' value='$dinheiro' hidden>";
                echo "<input type='number' name='dinheiro_total' value='$dinheiro_total' hidden>";
                echo "<input type='text' name='id_dest' value='$id_dest' hidden>";
                echo "<input type='number' name='dinheiro_dest' value='$dinheiro_dest' hidden>";
                echo "<input type='submit' value='Dar'>";
            echo "</form>";
        echo "</div>";
    }
} else if($id_remetente == $_SESSION['personagem2']){
    $id = $_SESSION['personagem1'];
    $personagem = $repositorio->MostrarPersonagem($id);
    foreach ($personagem as $key) {
        $id_dest = $key['id_pers'];
        $dinheiro_dest = $key['dinheiro'];
        echo "<div style='border: solid 2px red'>";
            $img = $key['img'];
            echo "<img src='../../$img'>";
            echo "<h2>Nome: ".$key['nome']."</h2>";
            echo "<h2>Classe: ".$key['classe']."</h2>";
            echo "<h2>Dinheiro: ".$key['dinheiro']."</h2>";
            echo "<form action='dar_dinheiro.php' method='post'>";
                echo "<input type='text' name='id_remetente' value='$id_remetente' hidden>";
                echo "<input type='number' name='dinheiro' value='$dinheiro' hidden>";
                echo "<input type='number' name='dinheiro_total' value='$dinheiro_total' hidden>";
                echo "<input type='text' name='id_dest' value='$id_dest' hidden>";
                echo "<input type='number' name='dinheiro_dest' value='$dinheiro_dest' hidden>";
                echo "<input type='submit' value='Dar'>";
            echo "</form>";
        echo "</div>";
    }

    $id = $_SESSION['personagem3'];
    $personagem = $repositorio->MostrarPersonagem($id);
    foreach ($personagem as $key) {
        $id_dest = $key['id_pers'];
        $dinheiro_dest = $key['dinheiro'];
        echo "<div style='border: solid 2px red'>";
            $img = $key['img'];
            echo "<img src='../../$img'>";
            echo "<h2>Nome: ".$key['nome']."</h2>";
            echo "<h2>Classe: ".$key['classe']."</h2>";
            echo "<h2>Dinheiro: ".$key['dinheiro']."</h2>";
            echo "<form action='dar_dinheiro.php' method='post'>";
                echo "<input type='text' name='id_remetente' value='$id_remetente' hidden>";
                echo "<input type='number' name='dinheiro' value='$dinheiro' hidden>";
                echo "<input type='number' name='dinheiro_total' value='$dinheiro_total' hidden>";
                echo "<input type='text' name='id_dest' value='$id_dest' hidden>";
                echo "<input type='number' name='dinheiro_dest' value='$dinheiro_dest' hidden>";
                echo "<input type='submit' value='Dar'>";
            echo "</form>";
        echo "</div>";
    }

    $id = $_SESSION['personagem4'];
    $personagem = $repositorio->MostrarPersonagem($id);
    foreach ($personagem as $key) {
        $id_dest = $key['id_pers'];
        $dinheiro_dest = $key['dinheiro'];
        echo "<div style='border: solid 2px red'>";
            $img = $key['img'];
            echo "<img src='../../$img'>";
            echo "<h2>Nome: ".$key['nome']."</h2>";
            echo "<h2>Classe: ".$key['classe']."</h2>";
            echo "<h2>Dinheiro: ".$key['dinheiro']."</h2>";
            echo "<form action='dar_dinheiro.php' method='post'>";
                echo "<input type='text' name='id_remetente' value='$id_remetente' hidden>";
                echo "<input type='number' name='dinheiro' value='$dinheiro' hidden>";
                echo "<input type='number' name='dinheiro_total' value='$dinheiro_total' hidden>";
                echo "<input type='text' name='id_dest' value='$id_dest' hidden>";
                echo "<input type='number' name='dinheiro_dest' value='$dinheiro_dest' hidden>";
                echo "<input type='submit' value='Dar'>";
            echo "</form>";
        echo "</div>";
    }
} else if($id_remetente == $_SESSION['personagem3']){
    $id = $_SESSION['personagem1'];
    $personagem = $repositorio->MostrarPersonagem($id);
    foreach ($personagem as $key) {
        $id_dest = $key['id_pers'];
        $dinheiro_dest = $key['dinheiro'];
        echo "<div style='border: solid 2px red'>";
            $img = $key['img'];
            echo "<img src='../../$img'>";
            echo "<h2>Nome: ".$key['nome']."</h2>";
            echo "<h2>Classe: ".$key['classe']."</h2>";
            echo "<h2>Dinheiro: ".$key['dinheiro']."</h2>";
            echo "<form action='dar_dinheiro.php' method='post'>";
                echo "<input type='text' name='id_remetente' value='$id_remetente' hidden>";
                echo "<input type='number' name='dinheiro' value='$dinheiro' hidden>";
                echo "<input type='number' name='dinheiro_total' value='$dinheiro_total' hidden>";
                echo "<input type='text' name='id_dest' value='$id_dest' hidden>";
                echo "<input type='number' name='dinheiro_dest' value='$dinheiro_dest' hidden>";
                echo "<input type='submit' value='Dar'>";
            echo "</form>";
        echo "</div>";
    }

    $id = $_SESSION['personagem2'];
    $personagem = $repositorio->MostrarPersonagem($id);
    foreach ($personagem as $key) {
        $id_dest = $key['id_pers'];
        $dinheiro_dest = $key['dinheiro'];
        echo "<div style='border: solid 2px red'>";
            $img = $key['img'];
            echo "<img src='../../$img'>";
            echo "<h2>Nome: ".$key['nome']."</h2>";
            echo "<h2>Classe: ".$key['classe']."</h2>";
            echo "<h2>Dinheiro: ".$key['dinheiro']."</h2>";
            echo "<form action='dar_dinheiro.php' method='post'>";
                echo "<input type='text' name='id_remetente' value='$id_remetente' hidden>";
                echo "<input type='number' name='dinheiro' value='$dinheiro' hidden>";
                echo "<input type='number' name='dinheiro_total' value='$dinheiro_total' hidden>";
                echo "<input type='text' name='id_dest' value='$id_dest' hidden>";
                echo "<input type='number' name='dinheiro_dest' value='$dinheiro_dest' hidden>";
                echo "<input type='submit' value='Dar'>";
            echo "</form>";
        echo "</div>";
    }

    $id = $_SESSION['personagem4'];
    $personagem = $repositorio->MostrarPersonagem($id);
    foreach ($personagem as $key) {
        $id_dest = $key['id_pers'];
        $dinheiro_dest = $key['dinheiro'];
        echo "<div style='border: solid 2px red'>";
            $img = $key['img'];
            echo "<img src='../../$img'>";
            echo "<h2>Nome: ".$key['nome']."</h2>";
            echo "<h2>Classe: ".$key['classe']."</h2>";
            echo "<h2>Dinheiro: ".$key['dinheiro']."</h2>";
            echo "<form action='dar_dinheiro.php' method='post'>";
                echo "<input type='text' name='id_remetente' value='$id_remetente' hidden>";
                echo "<input type='number' name='dinheiro' value='$dinheiro' hidden>";
                echo "<input type='number' name='dinheiro_total' value='$dinheiro_total' hidden>";
                echo "<input type='text' name='id_dest' value='$id_dest' hidden>";
                echo "<input type='number' name='dinheiro_dest' value='$dinheiro_dest' hidden>";
                echo "<input type='submit' value='Dar'>";
            echo "</form>";
        echo "</div>";
    }
} if($id_remetente == $_SESSION['personagem4']){
    $id = $_SESSION['personagem1'];
    $personagem = $repositorio->MostrarPersonagem($id);
    foreach ($personagem as $key) {
        $id_dest = $key['id_pers'];
        $dinheiro_dest = $key['dinheiro'];
        echo "<div style='border: solid 2px red'>";
            $img = $key['img'];
            echo "<img src='../../$img'>";
            echo "<h2>Nome: ".$key['nome']."</h2>";
            echo "<h2>Classe: ".$key['classe']."</h2>";
            echo "<h2>Dinheiro: ".$key['dinheiro']."</h2>";
            echo "<form action='dar_dinheiro.php' method='post'>";
                echo "<input type='text' name='id_remetente' value='$id_remetente' hidden>";
                echo "<input type='number' name='dinheiro' value='$dinheiro' hidden>";
                echo "<input type='number' name='dinheiro_total' value='$dinheiro_total' hidden>";
                echo "<input type='text' name='id_dest' value='$id_dest' hidden>";
                echo "<input type='number' name='dinheiro_dest' value='$dinheiro_dest' hidden>";
                echo "<input type='submit' value='Dar'>";
            echo "</form>";
        echo "</div>";
    }

    $id = $_SESSION['personagem2'];
    $personagem = $repositorio->MostrarPersonagem($id);
    foreach ($personagem as $key) {
        $id_dest = $key['id_pers'];
        $dinheiro_dest = $key['dinheiro'];
        echo "<div style='border: solid 2px red'>";
            $img = $key['img'];
            echo "<img src='../../$img'>";
            echo "<h2>Nome: ".$key['nome']."</h2>";
            echo "<h2>Classe: ".$key['classe']."</h2>";
            echo "<h2>Dinheiro: ".$key['dinheiro']."</h2>";
            echo "<form action='dar_dinheiro.php' method='post'>";
                echo "<input type='text' name='id_remetente' value='$id_remetente' hidden>";
                echo "<input type='number' name='dinheiro' value='$dinheiro' hidden>";
                echo "<input type='number' name='dinheiro_total' value='$dinheiro_total' hidden>";
                echo "<input type='text' name='id_dest' value='$id_dest' hidden>";
                echo "<input type='number' name='dinheiro_dest' value='$dinheiro_dest' hidden>";
                echo "<input type='submit' value='Dar'>";
            echo "</form>";
        echo "</div>";
    }

    $id = $_SESSION['personagem3'];
    $personagem = $repositorio->MostrarPersonagem($id);
    foreach ($personagem as $key) {
        $id_dest = $key['id_pers'];
        $dinheiro_dest = $key['dinheiro'];
        echo "<div style='border: solid 2px red'>";
            $img = $key['img'];
            echo "<img src='../../$img'>";
            echo "<h2>Nome: ".$key['nome']."</h2>";
            echo "<h2>Classe: ".$key['classe']."</h2>";
            echo "<h2>Dinheiro: ".$key['dinheiro']."</h2>";
            echo "<form action='dar_dinheiro.php' method='post'>";
                echo "<input type='text' name='id_remetente' value='$id_remetente' hidden>";
                echo "<input type='number' name='dinheiro' value='$dinheiro' hidden>";
                echo "<input type='number' name='dinheiro_total' value='$dinheiro_total' hidden>";
                echo "<input type='text' name='id_dest' value='$id_dest' hidden>";
                echo "<input type='number' name='dinheiro_dest' value='$dinheiro_dest' hidden>";
                echo "<input type='submit' value='Dar'>";
            echo "</form>";
        echo "</div>";
    }
}

?>

