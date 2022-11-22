<?php

session_start();
require_once '../../classes/repositorioTabletop.php'; 
$repositorio = new RepositorioTabletopMySQL();
$id = $_SESSION['id_pers'];
$personagem = $repositorio->MostrarPersonagem($id);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ver Personagem</title>
    <link rel="stylesheet" href="../../../assets/style/reset.css">
    <link rel="stylesheet" href="../../../assets/style/tabletopJogo.css">
</head>
<body>
    
<?php

echo "<h2 class='voltar__h2'><a class='voltar__h2__a' href='selec_pers.php'>Voltar</a></h2>";

foreach ($personagem as $key) {
    $id = $key['id_pers'];
    $nome = $key['nome'];
    echo "<h1 class='selecao__ver'>Informações do Personagem</h1>";
    echo "<br>";
    $img = $key['img'];
    echo "<img class='img__ver' src='../../$img'>";
    echo "<div class='info__ver'>";
    echo "<h2 class='h2__ver'>Nome: ".$key['nome']."</h2>";
    echo "<h2 class='h2__ver'>Classe: ".$key['classe']."</h2>";
    echo "<h2 class='h2__ver'>Nível: ".$key['nivel']."</h2>";
    echo "<h2 class='h2__ver'>Vida: ".$key['vida']."</h2>";
    echo "<h2 class='h2__ver'>Dinheiro: ".$key['dinheiro']."</h2>";
    echo "</div>";
    echo "<h2 class='h2__ver__inventario'>INVENTARIO</h2>";
    echo "<div class='inventario'";
    $inventario = $repositorio->MostrarInventario($nome);
    foreach ($inventario as $key) {
        echo "<ul>";
            $item = $key['item1'];
            $img = $repositorio->PuxarImagemItem($item);
            echo "<img src='../../$img'>";
            echo "<li>".$key['item1']."</li>";
            $item = $key['item2'];
            $img = $repositorio->PuxarImagemItem($item);
            echo "<img src='../../$img'>";
            echo "<li>".$key['item2']."</li>";
            if($key['item3'] != NULL){
                $item = $key['item3'];
                $img = $repositorio->PuxarImagemItem($item);
                echo "<img src='../../$img'>";
                echo "<li>".$key['item3']."</li>";
            }
            if($key['item4'] != NULL){
                $item = $key['item4'];
                $img = $repositorio->PuxarImagemItem($item);
                echo "<img src='../../$img'>";
                echo "<li>".$key['item4']."</li>";
            }
            if($key['item5'] != NULL){
                $item = $key['item5'];
                $img = $repositorio->PuxarImagemItem($item);
                echo "<img src='../../$img'>";
                echo "<li>".$key['item5']."</li>";
            }
            if($key['item6'] != NULL){
                $item = $key['item6'];
                $img = $repositorio->PuxarImagemItem($item);
                echo "<img src='../../$img'>";
                echo "<li>".$key['item6']."</li>";
            }
            if($key['item7'] != NULL){
                $item = $key['item7'];
                $img = $repositorio->PuxarImagemItem($item);
                echo "<img src='../../$img'>";
                echo "<li>".$key['item7']."</li>";
            }
            if($key['item8'] != NULL){
                $item = $key['item8'];
                $img = $repositorio->PuxarImagemItem($item);
                echo "<img src='../../$img'>";
                echo "<li>".$key['item8']."</li>";
            }
            if($key['item9'] != NULL){
                $item = $key['item9'];
                $img = $repositorio->PuxarImagemItem($item);
                echo "<img src='../../$img'>";
                echo "<li>".$key['item9']."</li>";
            }
            if($key['item10'] != NULL){
                $item = $key['item10'];
                $img = $repositorio->PuxarImagemItem($item);
                echo "<img src='../../$img'>";
                echo "<li>".$key['item10']."</li>";
            }
            if($key['item11'] != NULL){
                $item = $key['item11'];
                $img = $repositorio->PuxarImagemItem($item);
                echo "<img src='../../$img'>";
                echo "<li>".$key['item11']."</li>";
            }
            if($key['item12'] != NULL){
                $item = $key['item12'];
                $img = $repositorio->PuxarImagemItem($item);
                echo "<img src='../../$img'>";
                echo "<li>".$key['item12']."</li>";
            }
            if($key['item13'] != NULL){
                $item = $key['item13'];
                $img = $repositorio->PuxarImagemItem($item);
                echo "<img src='../../$img'>";
                echo "<li>".$key['item13']."</li>";
            }
            if($key['item14'] != NULL){
                $item = $key['item14'];
                $img = $repositorio->PuxarImagemItem($item);
                echo "<img src='../../$img'>";
                echo "<li>".$key['item14']."</li>";
            }
            if($key['item15'] != NULL){
                $item = $key['item15'];
                $img = $repositorio->PuxarImagemItem($item);
                echo "<img src='../../$img'>";
                echo "<li>".$key['item15']."</li>";
            }
            if($key['item16'] != NULL){
                $item = $key['item16'];
                $img = $repositorio->PuxarImagemItem($item);
                echo "<img src='../../$img'>";
                echo "<li>".$key['item16']."</li>";
            }
            if($key['item17'] != NULL){
                $item = $key['item17'];
                $img = $repositorio->PuxarImagemItem($item);
                echo "<img src='../../$img'>";
                echo "<li>".$key['item17']."</li>";
            }
            if($key['item18'] != NULL){
                $item = $key['item18'];
                $img = $repositorio->PuxarImagemItem($item);
                echo "<img src='../../$img'>";
                echo "<li>".$key['item18']."</li>";
            }
            if($key['item19'] != NULL){
                $item = $key['item19'];
                $img = $repositorio->PuxarImagemItem($item);
                echo "<img src='../../$img'>";
                echo "<li>".$key['item19']."</li>";
            }
            if($key['item20'] != NULL){
                $item = $key['item20'];
                $img = $repositorio->PuxarImagemItem($item);
                echo "<img src='../../$img'>";
                echo "<li>".$key['item20']."</li>";
            }
            if($key['item21'] != NULL){
                $item = $key['item21'];
                $img = $repositorio->PuxarImagemItem($item);
                echo "<img src='../../$img'>";
                echo "<li>".$key['item21']."</li>";
            }
            if($key['item22'] != NULL){
                $item = $key['item22'];
                $img = $repositorio->PuxarImagemItem($item);
                echo "<img src='../../$img'>";
                echo "<li>".$key['item22']."</li>";
            }
            if($key['item23'] != NULL){
                $item = $key['item23'];
                $img = $repositorio->PuxarImagemItem($item);
                echo "<img src='../../$img'>";
                echo "<li>".$key['item23']."</li>";
            }
            if($key['item24'] != NULL){
                $item = $key['item24'];
                $img = $repositorio->PuxarImagemItem($item);
                echo "<img src='../../$img'>";
                echo "<li>".$key['item24']."</li>";
            }
            if($key['item25'] != NULL){
                $item = $key['item25'];
                $img = $repositorio->PuxarImagemItem($item);
                echo "<img src='../../$img'>";
                echo "<li>".$key['item25']."</li>";
            }
        echo "</ul>";
    }
    echo "</div>";
    echo "<div class='escolhas'>";
    if(isset($_SESSION['personagem1']) && $_SESSION['personagem1'] == $id){
        echo "<h1 class='escolhas__h1'><a class='escolhas__a' href='redirecionar_ver_personagem.php?tirar=$id'>Tirar</a></h1>";
    } else {
        if(isset($_SESSION['personagem2']) && $_SESSION['personagem2'] == $id){
            echo "<h1 class='escolhas__h1'><a class='escolhas__a' href='redirecionar_ver_personagem.php?tirar=$id'>Tirar</a></h1>";
        } else {
            if(isset($_SESSION['personagem3']) && $_SESSION['personagem3'] == $id){
                echo "<h1 class='escolhas__h1'><a class='escolhas__a' href='redirecionar_ver_personagem.php?tirar=$id'>Tirar</a></h1>";
            } else {
                if(isset($_SESSION['personagem4']) && $_SESSION['personagem4'] == $id){
                    echo "<h1 class='escolhas__h1'><a class='escolhas__a' href='redirecionar_ver_personagem.php?tirar=$id'>Tirar</a></h1>";
                } else {
                    echo "<h1 class='escolhas__h1'><a class='escolhas__a' href='escolher_personagem.php?id=$id'>Escolher</a></h1>";
                }
            }
        }
    } 

    echo "<h1 class='escolhas__h1__excluir'><a class='escolhas__a__excluir' href='exclui_personagem.php?id=$id'> Excluir Personagem </a></h1>";
    echo "</div>";
}

?>

</body>
</html>