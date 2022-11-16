<?php

session_start();
require_once '../../classes/repositorioTabletop.php'; 
$repositorio = new RepositorioTabletopMySQL();

$id = $_SESSION['id_pers'];

$personagem = $repositorio->MostrarPersonagem($id);

echo "<h2><a href='selec_pers.php'>Voltar</a></h2>";

foreach ($personagem as $key) {
    $id = $key['id_pers'];
    $nome = $key['nome'];
    echo "<h1>Informações do Personagem</h1>";
    echo "<br>";
    $img = $key['img'];
    echo "<img src='../../$img'>";
    echo "<h2>Nome: ".$key['nome']."</h2>";
    echo "<h2>Classe: ".$key['classe']."</h2>";
    echo "<h2>Nível: ".$key['nivel']."</h2>";
    echo "<h2>Vida: ".$key['vida']."</h2>";
    echo "<h2>Dinheiro: ".$key['dinheiro']."</h2>";
    echo "<div style='border: solid 3px black'>";
    echo "<h2>INVENTARIO</h2>";
    $inventario = $repositorio->MostrarInventario($nome);
    foreach ($inventario as $key) {
        echo "<ul>";
            echo "<li>".$key['item1']."</li>";
            echo "<li>".$key['item2']."</li>";
            if($key['item3'] != NULL){
                echo "<li>".$key['item3']."</li>";
            }
            if($key['item4'] != NULL){
                echo "<li>".$key['item4']."</li>";
            }
            if($key['item5'] != NULL){
                echo "<li>".$key['item5']."</li>";
            }
            if($key['item6'] != NULL){
                echo "<li>".$key['item6']."</li>";
            }
            if($key['item7'] != NULL){
                echo "<li>".$key['item7']."</li>";
            }
            if($key['item8'] != NULL){
                echo "<li>".$key['item8']."</li>";
            }
            if($key['item9'] != NULL){
                echo "<li>".$key['item9']."</li>";
            }
            if($key['item10'] != NULL){
                echo "<li>".$key['item10']."</li>";
            }
            if($key['item11'] != NULL){
                echo "<li>".$key['item11']."</li>";
            }
            if($key['item12'] != NULL){
                echo "<li>".$key['item12']."</li>";
            }
            if($key['item13'] != NULL){
                echo "<li>".$key['item13']."</li>";
            }
            if($key['item14'] != NULL){
                echo "<li>".$key['item14']."</li>";
            }
            if($key['item15'] != NULL){
                echo "<li>".$key['item15']."</li>";
            }
            if($key['item16'] != NULL){
                echo "<li>".$key['item16']."</li>";
            }
            if($key['item17'] != NULL){
                echo "<li>".$key['item17']."</li>";
            }
            if($key['item18'] != NULL){
                echo "<li>".$key['item18']."</li>";
            }
            if($key['item19'] != NULL){
                echo "<li>".$key['item19']."</li>";
            }
            if($key['item20'] != NULL){
                echo "<li>".$key['item20']."</li>";
            }
            if($key['item21'] != NULL){
                echo "<li>".$key['item21']."</li>";
            }
            if($key['item22'] != NULL){
                echo "<li>".$key['item22']."</li>";
            }
            if($key['item23'] != NULL){
                echo "<li>".$key['item23']."</li>";
            }
            if($key['item24'] != NULL){
                echo "<li>".$key['item24']."</li>";
            }
            if($key['item25'] != NULL){
                echo "<li>".$key['item25']."</li>";
            }
        echo "</ul>";
    }
    echo "</div>";
    if(isset($_SESSION['personagem1']) && $_SESSION['personagem1'] == $id){
        echo "<h1><a href='redirecionar_ver_personagem.php?tirar=$id'>Tirar</a></h1>";
    } else {
        if(isset($_SESSION['personagem2']) && $_SESSION['personagem2'] == $id){
            echo "<h1><a href='redirecionar_ver_personagem.php?tirar=$id'>Tirar</a></h1>";
        } else {
            if(isset($_SESSION['personagem3']) && $_SESSION['personagem3'] == $id){
                echo "<h1><a href='redirecionar_ver_personagem.php?tirar=$id'>Tirar</a></h1>";
            } else {
                if(isset($_SESSION['personagem4']) && $_SESSION['personagem4'] == $id){
                    echo "<h1><a href='redirecionar_ver_personagem.php?tirar=$id'>Tirar</a></h1>";
                } else {
                    echo "<h1><a href='escolher_personagem.php?id=$id'>Escolher</a></h1>";
                }
            }
        }
    } 

    echo "<h1><a href='exclui_personagem.php?id=$id'> Excluir Personagem </a></h1>";
}

?>