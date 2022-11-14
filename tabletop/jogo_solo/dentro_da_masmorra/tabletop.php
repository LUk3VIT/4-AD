<?php

session_start();
require_once '../../classes/repositorioTabletop.php'; 
$repositorio = new RepositorioTabletopMySQL();

if(isset($_SESSION['inicio'])){
    $turno = $_SESSION['turno'];
} else {
    $_SESSION['turno'] = $_SESSION['turno1'];
    $turno = $_SESSION['turno1'];
    $_SESSION['inicio'] = true;
}


if(isset($_SESSION['vida_atual_personagem1'])){
    $id = $_SESSION['personagem1'];
    $personagem1 = $repositorio->MostrarPersonagem($id);
    foreach ($personagem1 as $key) {
        $vida_maxima_personagem1 = $key['vida'];
        $nome_personagem1 = $key['nome'];
        $classe_personagem1 = $key['classe'];
        $nivel_personagem1 = $key['nivel'];
        $ataque_personagem1 = $key['ataque'];
        $defesa_personagem1 = $key['defesa'];
    }
} else {
    $id = $_SESSION['personagem1'];
    $personagem1 = $repositorio->MostrarPersonagem($id);
    foreach ($personagem1 as $key) {
        $vida = $key['vida'];
        $vida_maxima_personagem1 = $key['vida'];
        $_SESSION['vida_atual_personagem1'] = $vida;
        $nome_personagem1 = $key['nome'];
        $classe_personagem1 = $key['classe'];
        $nivel_personagem1 = $key['nivel'];
        $ataque_personagem1 = $key['ataque'];
        $defesa_personagem1 = $key['defesa'];
    }
}

if(isset($_SESSION['vida_atual_personagem2'])){
    $id = $_SESSION['personagem2'];
    $personagem2 = $repositorio->MostrarPersonagem($id);
    foreach ($personagem2 as $key) {
        $vida_maxima_personagem2 = $key['vida'];
        $nome_personagem2 = $key['nome'];
        $classe_personagem2 = $key['classe'];
        $nivel_personagem2 = $key['nivel'];
        $ataque_personagem2 = $key['ataque'];
        $defesa_personagem2 = $key['defesa'];
    }
} else {
    $id = $_SESSION['personagem2'];
    $personagem2 = $repositorio->MostrarPersonagem($id);
    foreach ($personagem2 as $key) {
        $vida = $key['vida'];
        $vida_maxima_personagem2 = $key['vida'];
        $_SESSION['vida_atual_personagem2'] = $vida;
        $nome_personagem2 = $key['nome'];
        $classe_personagem2 = $key['classe'];
        $nivel_personagem2 = $key['nivel'];
        $ataque_personagem2 = $key['ataque'];
        $defesa_personagem2 = $key['defesa'];
    }
}

if(isset($_SESSION['vida_atual_personagem3'])){
    $id = $_SESSION['personagem3'];
    $personagem3 = $repositorio->MostrarPersonagem($id);
    foreach ($personagem3 as $key) {
        $vida_maxima_personagem3 = $key['vida'];
        $nome_personagem3 = $key['nome'];
        $classe_personagem3 = $key['classe'];
        $nivel_personagem3 = $key['nivel'];
        $ataque_personagem3 = $key['ataque'];
        $defesa_personagem3 = $key['defesa'];
    }
} else {
    $id = $_SESSION['personagem3'];
    $personagem3 = $repositorio->MostrarPersonagem($id);
    foreach ($personagem3 as $key) {
        $vida = $key['vida'];
        $vida_maxima_personagem3 = $key['vida'];
        $_SESSION['vida_atual_personagem3'] = $vida;
        $nome_personagem3 = $key['nome'];
        $classe_personagem3 = $key['classe'];
        $nivel_personagem3 = $key['nivel'];
        $ataque_personagem3 = $key['ataque'];
        $defesa_personagem3 = $key['defesa'];
    }
}

if(isset($_SESSION['vida_atual_personagem4'])){
    $id = $_SESSION['personagem4'];
    $personagem4 = $repositorio->MostrarPersonagem($id);
    foreach ($personagem4 as $key) {
        $vida_maxima_personagem4 = $key['vida'];
        $nome_personagem4 = $key['nome'];
        $classe_personagem4 = $key['classe'];
        $nivel_personagem4 = $key['nivel'];
        $ataque_personagem4 = $key['ataque'];
        $defesa_personagem4 = $key['defesa'];
    }
} else {
    $id = $_SESSION['personagem4'];
    $personagem4 = $repositorio->MostrarPersonagem($id);
    foreach ($personagem4 as $key) {
        $vida = $key['vida'];
        $vida_maxima_personagem4 = $key['vida'];
        $_SESSION['vida_atual_personagem4'] = $vida;
        $nome_personagem4 = $key['nome'];
        $classe_personagem4 = $key['classe'];
        $nivel_personagem4 = $key['nivel'];
        $ataque_personagem4 = $key['ataque'];
        $defesa_personagem4 = $key['defesa'];
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tabletop</title>
    <link rel="stylesheet" href="../../../assets/style/reset.css">
    <link rel="stylesheet" href="../../../assets/style/tabletop.css">
</head>
<body>
    <div class="caixaVolta">
        <button>Salvar</button>
    </div>
    <div class="monstros"> 
        <p>informação monstros</p>
    </div>
    <div class="principal">
        <div style='border: solid 2px black'>
        <?php
            if(isset($_SESSION['dar_item'])){
                if($_SESSION['turno'] == $_SESSION['personagem1']){

                    $id = $_SESSION['personagem2'];
                    $personagem2 = $repositorio->MostrarPersonagem($id);
                    foreach ($personagem2 as $key) {
                        $dest = $key['nome'];
                        echo "<div style='border: solid 2px black'>";
                            echo "Nome: ".$key['nome'];
                            echo "<a href='dar_item.php?dest=$dest'>Selecionar</a>";
                        echo "</div>";
                    }

                    $id = $_SESSION['personagem3'];
                    $personagem3 = $repositorio->MostrarPersonagem($id);
                    foreach ($personagem3 as $key) {
                        $dest = $key['nome'];
                        echo "<div style='border: solid 2px black'>";
                            echo "Nome: ".$key['nome'];
                            echo "<a href='dar_item.php?dest=$dest'>Selecionar</a>";
                        echo "</div>";
                    }

                    $id = $_SESSION['personagem4'];
                    $personagem4 = $repositorio->MostrarPersonagem($id);
                    foreach ($personagem4 as $key) {
                        $dest = $key['nome'];
                        echo "<div style='border: solid 2px black'>";
                            echo "Nome: ".$key['nome'];
                            echo "<a href='dar_item.php?dest=$dest'>Selecionar</a>";
                        echo "</div>";
                    }
                } else if($_SESSION['turno'] == $_SESSION['personagem2']){
                    $id = $_SESSION['personagem1'];
                    $personagem1 = $repositorio->MostrarPersonagem($id);
                    foreach ($personagem1 as $key) {
                        $dest = $key['nome'];
                        echo "<div style='border: solid 2px black'>";
                            echo "Nome: ".$key['nome'];
                            echo "<a href='dar_item.php?dest=$dest'>Selecionar</a>";
                        echo "</div>";
                    }

                    $id = $_SESSION['personagem3'];
                    $personagem3 = $repositorio->MostrarPersonagem($id);
                    foreach ($personagem3 as $key) {
                        $dest = $key['nome'];
                        echo "<div style='border: solid 2px black'>";
                            echo "Nome: ".$key['nome'];
                            echo "<a href='dar_item.php?dest=$dest'>Selecionar</a>";
                        echo "</div>";
                    }

                    $id = $_SESSION['personagem4'];
                    $personagem4 = $repositorio->MostrarPersonagem($id);
                    foreach ($personagem4 as $key) {
                        $dest = $key['nome'];
                        echo "<div style='border: solid 2px black'>";
                            echo "Nome: ".$key['nome'];
                            echo "<a href='dar_item.php?dest=$dest'>Selecionar</a>";
                        echo "</div>";
                    }
                } else if($_SESSION['turno'] == $_SESSION['personagem3']){
                    $id = $_SESSION['personagem1'];
                    $personagem1 = $repositorio->MostrarPersonagem($id);
                    foreach ($personagem1 as $key) {
                        $dest = $key['nome'];
                        echo "<div style='border: solid 2px black'>";
                            echo "Nome: ".$key['nome'];
                            echo "<a href='dar_item.php?dest=$dest'>Selecionar</a>";
                        echo "</div>";
                    }

                    $id = $_SESSION['personagem2'];
                    $personagem2 = $repositorio->MostrarPersonagem($id);
                    foreach ($personagem2 as $key) {
                        $dest = $key['nome'];
                        echo "<div style='border: solid 2px black'>";
                            echo "Nome: ".$key['nome'];
                            echo "<a href='dar_item.php?dest=$dest'>Selecionar</a>";
                        echo "</div>";
                    }

                    $id = $_SESSION['personagem4'];
                    $personagem4 = $repositorio->MostrarPersonagem($id);
                    foreach ($personagem4 as $key) {
                        $dest = $key['nome'];
                        echo "<div style='border: solid 2px black'>";
                            echo "Nome: ".$key['nome'];
                            echo "<a href='dar_item.php?dest=$dest'>Selecionar</a>";
                        echo "</div>";
                    }
                } else if($_SESSION['turno'] == $_SESSION['personagem4']){
                    $id = $_SESSION['personagem1'];
                    $personagem1 = $repositorio->MostrarPersonagem($id);
                    foreach ($personagem1 as $key) {
                        $dest = $key['nome'];
                        echo "<div style='border: solid 2px black'>";
                            echo "Nome: ".$key['nome'];
                            echo "<a href='dar_item.php?dest=$dest'>Selecionar</a>";
                        echo "</div>";
                    }

                    $id = $_SESSION['personagem2'];
                    $personagem2 = $repositorio->MostrarPersonagem($id);
                    foreach ($personagem2 as $key) {
                        $dest = $key['nome'];
                        echo "<div style='border: solid 2px black'>";
                            echo "Nome: ".$key['nome'];
                            echo "<a href='dar_item.php?dest=$dest'>Selecionar</a>";
                        echo "</div>";
                    }

                    $id = $_SESSION['personagem3'];
                    $personagem3 = $repositorio->MostrarPersonagem($id);
                    foreach ($personagem3 as $key) {
                        $dest = $key['nome'];
                        echo "<div style='border: solid 2px black'>";
                            echo "Nome: ".$key['nome'];
                            echo "<a href='dar_item.php?dest=$dest'>Selecionar</a>";
                        echo "</div>";
                    }
                }
            }

            // Mostrar Itens
            if(isset($_SESSION['mostrar_itens'])){
                $id = $_SESSION['mostrar_itens'];
                $x = $repositorio->MostrarPersonagem($id);
                foreach ($x as $key) {
                    $nome = $key['nome'];
                }
                $inventario = $repositorio->MostrarInventario($nome);
                foreach ($inventario as $key) {
                    if($key['item1'] != NULL){
                        $item = $key['item1'];
                        $tipo_item = $repositorio->VerPreco($item);
                        foreach ($tipo_item as $x) {
                            if($x['tipo'] == "utilizável"){
                                $tipo = "<a href='usar_item.php'>Usar</a>";
                            } else if($x['tipo'] == "defesa"){
                                $tipo = "<a href='equipar_item.php'>Equipar</a>";
                            } else if($x['tipo'] == "arma de uma mão cortante e defesa" || $x['tipo'] == "arma de uma mão esmagadora e defesa" || $x['tipo'] == "arma de uma mão cortante" || $x['tipo'] == "arma de uma mão esmagadora" || $x['tipo'] == "arma de uma mão leve cortante" || $x['tipo'] == "arma de uma mão leve esmagadora" || $x['tipo'] == "arma de duas mãos cortante" || $x['tipo'] == "arma de duas mãos esmagadora" || $x['tipo'] == "arma a distancia cortante" || $x['tipo'] == "arma a distancia esmagadora" || $x['tipo'] == "arma do mago"){
                                $tipo = "<a href='equipar_item.php'>Equipar</a>";
                            }
                        }
                        echo "<ul>";
                            echo "<li>";
                                echo $key['item1']." ";
                                if($key['item1'] == strtolower($_SESSION['arma1_personagem1']) || $key['item1'] == strtolower($_SESSION['arma2_personagem1']) || $key['item1'] == strtolower($_SESSION['arma1_personagem2']) || $key['item1'] == strtolower($_SESSION['arma2_personagem2']) || $key['item1'] == strtolower($_SESSION['arma1_personagem3']) || $key['item1'] == strtolower($_SESSION['arma2_personagem3']) || $key['item1'] == strtolower($_SESSION['arma1_personagem4']) || $key['item1'] == strtolower($_SESSION['arma2_personagem4'])){
                                    echo "<a href='desequipar_item.php'>Desequipar</a>";
                                } else {
                                    echo $tipo;
                                }
                                echo " <a href='itens/dar_item.php?item=$item'>   Dar Item</a>";
                            echo "</li>";
                        echo "</ul>";
                    }
                    if($key['item2'] != NULL){
                        $item = $key['item2'];
                        $tipo_item = $repositorio->VerPreco($item);
                        foreach ($tipo_item as $x) {
                            if($x['tipo'] == "utilizável"){
                                $tipo = "<a href='usar_item.php'>Usar</a>";
                            } else if($x['tipo'] == "defesa"){
                                $tipo = "<a href='equipar_item.php'>Equipar</a>";
                            } else if($x['tipo'] == "arma de uma mão cortante e defesa" || $x['tipo'] == "arma de uma mão esmagadora e defesa" || $x['tipo'] == "arma de uma mão cortante" || $x['tipo'] == "arma de uma mão esmagadora" || $x['tipo'] == "arma de uma mão leve cortante" || $x['tipo'] == "arma de uma mão leve esmagadora" || $x['tipo'] == "arma de duas mãos cortante" || $x['tipo'] == "arma de duas mãos esmagadora" || $x['tipo'] == "arma a distancia cortante" || $x['tipo'] == "arma a distancia esmagadora" || $x['tipo'] == "arma do mago"){
                                $tipo = "<a href='equipar_item.php'>Equipar</a>";
                            }
                        }
                        echo "<ul>";
                            echo "<li>";
                                echo $key['item2']." ";
                                if($key['item2'] == strtolower($_SESSION['arma1_personagem1']) || $key['item2'] == strtolower($_SESSION['arma2_personagem1']) || $key['item2'] == strtolower($_SESSION['arma1_personagem2']) || $key['item2'] == strtolower($_SESSION['arma2_personagem2']) || $key['item2'] == strtolower($_SESSION['arma1_personagem3']) || $key['item2'] == strtolower($_SESSION['arma2_personagem3']) || $key['item2'] == strtolower($_SESSION['arma1_personagem4']) || $key['item2'] == strtolower($_SESSION['arma2_personagem4'])){
                                    echo "<a href='desequipar_item.php'>Desequipar</a>";
                                } else {
                                    echo $tipo;
                                }
                                echo " <a href='itens/dar_item.php?item=$item'>   Dar Item</a>";
                            echo "</li>";
                        echo "</ul>";
                    }
                    if($key['item3'] != NULL){
                        $item = $key['item3'];
                        $tipo_item = $repositorio->VerPreco($item);
                        foreach ($tipo_item as $x) {
                            if($x['tipo'] == "utilizável"){
                                $tipo = "<a href='usar_item.php'>Usar</a>";
                            } else if($x['tipo'] == "defesa"){
                                $tipo = "<a href='equipar_item.php'>Equipar</a>";
                            } else if($x['tipo'] == "arma de uma mão cortante e defesa" || $x['tipo'] == "arma de uma mão esmagadora e defesa" || $x['tipo'] == "arma de uma mão cortante" || $x['tipo'] == "arma de uma mão esmagadora" || $x['tipo'] == "arma de uma mão leve cortante" || $x['tipo'] == "arma de uma mão leve esmagadora" || $x['tipo'] == "arma de duas mãos cortante" || $x['tipo'] == "arma de duas mãos esmagadora" || $x['tipo'] == "arma a distancia cortante" || $x['tipo'] == "arma a distancia esmagadora" || $x['tipo'] == "arma do mago"){
                                $tipo = "<a href='equipar_item.php'>Equipar</a>";
                            }
                        }
                        echo "<ul>";
                            echo "<li>";
                                echo $key['item3']." ";
                                if($key['item3'] == strtolower($_SESSION['arma1_personagem1']) || $key['item3'] == strtolower($_SESSION['arma2_personagem1']) || $key['item3'] == strtolower($_SESSION['arma1_personagem2']) || $key['item3'] == strtolower($_SESSION['arma2_personagem2']) || $key['item3'] == strtolower($_SESSION['arma1_personagem3']) || $key['item3'] == strtolower($_SESSION['arma2_personagem3']) || $key['item3'] == strtolower($_SESSION['arma1_personagem4']) || $key['item3'] == strtolower($_SESSION['arma2_personagem4'])){
                                    echo "<a href='desequipar_item.php'>Desequipar</a>";
                                } else {
                                    echo $tipo;
                                }
                                echo " <a href='itens/dar_item.php?item=$item'>   Dar Item</a>";
                            echo "</li>";
                        echo "</ul>";
                    }
                    if($key['item4'] != NULL){
                        $item = $key['item4'];
                        $tipo_item = $repositorio->VerPreco($item);
                        foreach ($tipo_item as $x) {
                            if($x['tipo'] == "utilizável"){
                                $tipo = "<a href='usar_item.php'>Usar</a>";
                            } else if($x['tipo'] == "defesa"){
                                $tipo = "<a href='equipar_item.php'>Equipar</a>";
                            } else if($x['tipo'] == "arma de uma mão cortante e defesa" || $x['tipo'] == "arma de uma mão esmagadora e defesa" || $x['tipo'] == "arma de uma mão cortante" || $x['tipo'] == "arma de uma mão esmagadora" || $x['tipo'] == "arma de uma mão leve cortante" || $x['tipo'] == "arma de uma mão leve esmagadora" || $x['tipo'] == "arma de duas mãos cortante" || $x['tipo'] == "arma de duas mãos esmagadora" || $x['tipo'] == "arma a distancia cortante" || $x['tipo'] == "arma a distancia esmagadora" || $x['tipo'] == "arma do mago"){
                                $tipo = "<a href='equipar_item.php'>Equipar</a>";
                            }
                        }
                        echo "<ul>";
                            echo "<li>";
                                echo $key['item4']." ";
                                if($key['item4'] == strtolower($_SESSION['arma1_personagem1']) || $key['item4'] == strtolower($_SESSION['arma2_personagem1']) || $key['item4'] == strtolower($_SESSION['arma1_personagem2']) || $key['item4'] == strtolower($_SESSION['arma2_personagem2']) || $key['item4'] == strtolower($_SESSION['arma1_personagem3']) || $key['item4'] == strtolower($_SESSION['arma2_personagem3']) || $key['item4'] == strtolower($_SESSION['arma1_personagem4']) || $key['item4'] == strtolower($_SESSION['arma2_personagem4'])){
                                    echo "<a href='desequipar_item.php'>Desequipar</a>";
                                } else {
                                    echo $tipo;
                                }
                                echo " <a href='itens/dar_item.php?item=$item'>   Dar Item</a>";
                            echo "</li>";
                        echo "</ul>";
                    }
                    if($key['item5'] != NULL){
                        $item = $key['item5'];
                        $tipo_item = $repositorio->VerPreco($item);
                        foreach ($tipo_item as $x) {
                            if($x['tipo'] == "utilizável"){
                                $tipo = "<a href='usar_item.php'>Usar</a>";
                            } else if($x['tipo'] == "defesa"){
                                $tipo = "<a href='equipar_item.php'>Equipar</a>";
                            } else if($x['tipo'] == "arma de uma mão cortante e defesa" || $x['tipo'] == "arma de uma mão esmagadora e defesa" || $x['tipo'] == "arma de uma mão cortante" || $x['tipo'] == "arma de uma mão esmagadora" || $x['tipo'] == "arma de uma mão leve cortante" || $x['tipo'] == "arma de uma mão leve esmagadora" || $x['tipo'] == "arma de duas mãos cortante" || $x['tipo'] == "arma de duas mãos esmagadora" || $x['tipo'] == "arma a distancia cortante" || $x['tipo'] == "arma a distancia esmagadora" || $x['tipo'] == "arma do mago"){
                                $tipo = "<a href='equipar_item.php'>Equipar</a>";
                            }
                        }
                        echo "<ul>";
                            echo "<li>";
                                echo $key['item5']." ";
                                if($key['item5'] == strtolower($_SESSION['arma1_personagem1']) || $key['item5'] == strtolower($_SESSION['arma2_personagem1']) || $key['item5'] == strtolower($_SESSION['arma1_personagem2']) || $key['item5'] == strtolower($_SESSION['arma2_personagem2']) || $key['item5'] == strtolower($_SESSION['arma1_personagem3']) || $key['item5'] == strtolower($_SESSION['arma2_personagem3']) || $key['item5'] == strtolower($_SESSION['arma1_personagem4']) || $key['item5'] == strtolower($_SESSION['arma2_personagem4'])){
                                    echo "<a href='desequipar_item.php'>Desequipar</a>";
                                } else {
                                    echo $tipo;
                                }
                                echo " <a href='itens/dar_item.php?item=$item'>   Dar Item</a>";
                            echo "</li>";
                        echo "</ul>";
                    }
                    if($key['item6'] != NULL){
                        $item = $key['item6'];
                        $tipo_item = $repositorio->VerPreco($item);
                        foreach ($tipo_item as $x) {
                            if($x['tipo'] == "utilizável"){
                                $tipo = "<a href='usar_item.php'>Usar</a>";
                            } else if($x['tipo'] == "defesa"){
                                $tipo = "<a href='equipar_item.php'>Equipar</a>";
                            } else if($x['tipo'] == "arma de uma mão cortante e defesa" || $x['tipo'] == "arma de uma mão esmagadora e defesa" || $x['tipo'] == "arma de uma mão cortante" || $x['tipo'] == "arma de uma mão esmagadora" || $x['tipo'] == "arma de uma mão leve cortante" || $x['tipo'] == "arma de uma mão leve esmagadora" || $x['tipo'] == "arma de duas mãos cortante" || $x['tipo'] == "arma de duas mãos esmagadora" || $x['tipo'] == "arma a distancia cortante" || $x['tipo'] == "arma a distancia esmagadora" || $x['tipo'] == "arma do mago"){
                                $tipo = "<a href='equipar_item.php'>Equipar</a>";
                            }
                        }
                        echo "<ul>";
                            echo "<li>";
                                echo $key['item6']." ";
                                if($key['item6'] == strtolower($_SESSION['arma1_personagem1']) || $key['item6'] == strtolower($_SESSION['arma2_personagem1']) || $key['item6'] == strtolower($_SESSION['arma1_personagem2']) || $key['item6'] == strtolower($_SESSION['arma2_personagem2']) || $key['item6'] == strtolower($_SESSION['arma1_personagem3']) || $key['item6'] == strtolower($_SESSION['arma2_personagem3']) || $key['item6'] == strtolower($_SESSION['arma1_personagem4']) || $key['item6'] == strtolower($_SESSION['arma2_personagem4'])){
                                    echo "<a href='desequipar_item.php'>Desequipar</a>";
                                } else {
                                    echo $tipo;
                                }
                                echo " <a href='itens/dar_item.php?item=$item'>   Dar Item</a>";
                            echo "</li>";
                        echo "</ul>";
                    }
                    if($key['item7'] != NULL){
                        $item = $key['item7'];
                        $tipo_item = $repositorio->VerPreco($item);
                        foreach ($tipo_item as $x) {
                            if($x['tipo'] == "utilizável"){
                                $tipo = "<a href='usar_item.php'>Usar</a>";
                            } else if($x['tipo'] == "defesa"){
                                $tipo = "<a href='equipar_item.php'>Equipar</a>";
                            } else if($x['tipo'] == "arma de uma mão cortante e defesa" || $x['tipo'] == "arma de uma mão esmagadora e defesa" || $x['tipo'] == "arma de uma mão cortante" || $x['tipo'] == "arma de uma mão esmagadora" || $x['tipo'] == "arma de uma mão leve cortante" || $x['tipo'] == "arma de uma mão leve esmagadora" || $x['tipo'] == "arma de duas mãos cortante" || $x['tipo'] == "arma de duas mãos esmagadora" || $x['tipo'] == "arma a distancia cortante" || $x['tipo'] == "arma a distancia esmagadora" || $x['tipo'] == "arma do mago"){
                                $tipo = "<a href='equipar_item.php'>Equipar</a>";
                            }
                        }
                        echo "<ul>";
                            echo "<li>";
                                echo $key['item7']." ";
                                if($key['item7'] == strtolower($_SESSION['arma1_personagem1']) || $key['item7'] == strtolower($_SESSION['arma2_personagem1']) || $key['item7'] == strtolower($_SESSION['arma1_personagem2']) || $key['item7'] == strtolower($_SESSION['arma2_personagem2']) || $key['item7'] == strtolower($_SESSION['arma1_personagem3']) || $key['item7'] == strtolower($_SESSION['arma2_personagem3']) || $key['item7'] == strtolower($_SESSION['arma1_personagem4']) || $key['item7'] == strtolower($_SESSION['arma2_personagem4'])){
                                    echo "<a href='desequipar_item.php'>Desequipar</a>";
                                } else {
                                    echo $tipo;
                                }
                                echo " <a href='itens/dar_item.php?item=$item'>   Dar Item</a>";
                            echo "</li>";
                        echo "</ul>";
                    }
                    if($key['item8'] != NULL){
                        $item = $key['item8'];
                        $tipo_item = $repositorio->VerPreco($item);
                        foreach ($tipo_item as $x) {
                            if($x['tipo'] == "utilizável"){
                                $tipo = "<a href='usar_item.php'>Usar</a>";
                            } else if($x['tipo'] == "defesa"){
                                $tipo = "<a href='equipar_item.php'>Equipar</a>";
                            } else if($x['tipo'] == "arma de uma mão cortante e defesa" || $x['tipo'] == "arma de uma mão esmagadora e defesa" || $x['tipo'] == "arma de uma mão cortante" || $x['tipo'] == "arma de uma mão esmagadora" || $x['tipo'] == "arma de uma mão leve cortante" || $x['tipo'] == "arma de uma mão leve esmagadora" || $x['tipo'] == "arma de duas mãos cortante" || $x['tipo'] == "arma de duas mãos esmagadora" || $x['tipo'] == "arma a distancia cortante" || $x['tipo'] == "arma a distancia esmagadora" || $x['tipo'] == "arma do mago"){
                                $tipo = "<a href='equipar_item.php'>Equipar</a>";
                            }
                        }
                        echo "<ul>";
                            echo "<li>";
                                echo $key['item8']." ";
                                if($key['item8'] == strtolower($_SESSION['arma1_personagem1']) || $key['item8'] == strtolower($_SESSION['arma2_personagem1']) || $key['item8'] == strtolower($_SESSION['arma1_personagem2']) || $key['item8'] == strtolower($_SESSION['arma2_personagem2']) || $key['item8'] == strtolower($_SESSION['arma1_personagem3']) || $key['item8'] == strtolower($_SESSION['arma2_personagem3']) || $key['item8'] == strtolower($_SESSION['arma1_personagem4']) || $key['item8'] == strtolower($_SESSION['arma2_personagem4'])){
                                    echo "<a href='desequipar_item.php'>Desequipar</a>";
                                } else {
                                    echo $tipo;
                                }
                                echo " <a href='itens/dar_item.php?item=$item'>   Dar Item</a>";
                            echo "</li>";
                        echo "</ul>";
                    }
                    if($key['item9'] != NULL){
                        $item = $key['item9'];
                        $tipo_item = $repositorio->VerPreco($item);
                        foreach ($tipo_item as $x) {
                            if($x['tipo'] == "utilizável"){
                                $tipo = "<a href='usar_item.php'>Usar</a>";
                            } else if($x['tipo'] == "defesa"){
                                $tipo = "<a href='equipar_item.php'>Equipar</a>";
                            } else if($x['tipo'] == "arma de uma mão cortante e defesa" || $x['tipo'] == "arma de uma mão esmagadora e defesa" || $x['tipo'] == "arma de uma mão cortante" || $x['tipo'] == "arma de uma mão esmagadora" || $x['tipo'] == "arma de uma mão leve cortante" || $x['tipo'] == "arma de uma mão leve esmagadora" || $x['tipo'] == "arma de duas mãos cortante" || $x['tipo'] == "arma de duas mãos esmagadora" || $x['tipo'] == "arma a distancia cortante" || $x['tipo'] == "arma a distancia esmagadora" || $x['tipo'] == "arma do mago"){
                                $tipo = "<a href='equipar_item.php'>Equipar</a>";
                            }
                        }
                        echo "<ul>";
                            echo "<li>";
                                echo $key['item9']." ";
                                if($key['item9'] == strtolower($_SESSION['arma1_personagem1']) || $key['item9'] == strtolower($_SESSION['arma2_personagem1']) || $key['item9'] == strtolower($_SESSION['arma1_personagem2']) || $key['item9'] == strtolower($_SESSION['arma2_personagem2']) || $key['item9'] == strtolower($_SESSION['arma1_personagem3']) || $key['item9'] == strtolower($_SESSION['arma2_personagem3']) || $key['item9'] == strtolower($_SESSION['arma1_personagem4']) || $key['item9'] == strtolower($_SESSION['arma2_personagem4'])){
                                    echo "<a href='desequipar_item.php'>Desequipar</a>";
                                } else {
                                    echo $tipo;
                                }
                                echo " <a href='itens/dar_item.php?item=$item'>   Dar Item</a>";
                            echo "</li>";
                        echo "</ul>";
                    }
                    if($key['item10'] != NULL){
                        $item = $key['item10'];
                        $tipo_item = $repositorio->VerPreco($item);
                        foreach ($tipo_item as $x) {
                            if($x['tipo'] == "utilizável"){
                                $tipo = "<a href='usar_item.php'>Usar</a>";
                            } else if($x['tipo'] == "defesa"){
                                $tipo = "<a href='equipar_item.php'>Equipar</a>";
                            } else if($x['tipo'] == "arma de uma mão cortante e defesa" || $x['tipo'] == "arma de uma mão esmagadora e defesa" || $x['tipo'] == "arma de uma mão cortante" || $x['tipo'] == "arma de uma mão esmagadora" || $x['tipo'] == "arma de uma mão leve cortante" || $x['tipo'] == "arma de uma mão leve esmagadora" || $x['tipo'] == "arma de duas mãos cortante" || $x['tipo'] == "arma de duas mãos esmagadora" || $x['tipo'] == "arma a distancia cortante" || $x['tipo'] == "arma a distancia esmagadora" || $x['tipo'] == "arma do mago"){
                                $tipo = "<a href='equipar_item.php'>Equipar</a>";
                            }
                        }
                        echo "<ul>";
                            echo "<li>";
                                echo $key['item10']." ";
                                if($key['item10'] == strtolower($_SESSION['arma1_personagem1']) || $key['item10'] == strtolower($_SESSION['arma2_personagem1']) || $key['item10'] == strtolower($_SESSION['arma1_personagem2']) || $key['item10'] == strtolower($_SESSION['arma2_personagem2']) || $key['item10'] == strtolower($_SESSION['arma1_personagem3']) || $key['item10'] == strtolower($_SESSION['arma2_personagem3']) || $key['item10'] == strtolower($_SESSION['arma1_personagem4']) || $key['item10'] == strtolower($_SESSION['arma2_personagem4'])){
                                    echo "<a href='desequipar_item.php'>Desequipar</a>";
                                } else {
                                    echo $tipo;
                                }
                                echo " <a href='itens/dar_item.php?item=$item'>   Dar Item</a>";
                            echo "</li>";
                        echo "</ul>";
                    }
                    if($key['item11'] != NULL){
                        $item = $key['item11'];
                        $tipo_item = $repositorio->VerPreco($item);
                        foreach ($tipo_item as $x) {
                            if($x['tipo'] == "utilizável"){
                                $tipo = "<a href='usar_item.php'>Usar</a>";
                            } else if($x['tipo'] == "defesa"){
                                $tipo = "<a href='equipar_item.php'>Equipar</a>";
                            } else if($x['tipo'] == "arma de uma mão cortante e defesa" || $x['tipo'] == "arma de uma mão esmagadora e defesa" || $x['tipo'] == "arma de uma mão cortante" || $x['tipo'] == "arma de uma mão esmagadora" || $x['tipo'] == "arma de uma mão leve cortante" || $x['tipo'] == "arma de uma mão leve esmagadora" || $x['tipo'] == "arma de duas mãos cortante" || $x['tipo'] == "arma de duas mãos esmagadora" || $x['tipo'] == "arma a distancia cortante" || $x['tipo'] == "arma a distancia esmagadora" || $x['tipo'] == "arma do mago"){
                                $tipo = "<a href='equipar_item.php'>Equipar</a>";
                            }
                        }
                        echo "<ul>";
                            echo "<li>";
                                echo $key['item11']." ";
                                if($key['item11'] == strtolower($_SESSION['arma1_personagem1']) || $key['item11'] == strtolower($_SESSION['arma2_personagem1']) || $key['item11'] == strtolower($_SESSION['arma1_personagem2']) || $key['item11'] == strtolower($_SESSION['arma2_personagem2']) || $key['item11'] == strtolower($_SESSION['arma1_personagem3']) || $key['item11'] == strtolower($_SESSION['arma2_personagem3']) || $key['item11'] == strtolower($_SESSION['arma1_personagem4']) || $key['item11'] == strtolower($_SESSION['arma2_personagem4'])){
                                    echo "<a href='desequipar_item.php'>Desequipar</a>";
                                } else {
                                    echo $tipo;
                                }
                                echo " <a href='itens/dar_item.php?item=$item'>   Dar Item</a>";
                            echo "</li>";
                        echo "</ul>";
                    }
                    if($key['item12'] != NULL){
                        $item = $key['item12'];
                        $tipo_item = $repositorio->VerPreco($item);
                        foreach ($tipo_item as $x) {
                            if($x['tipo'] == "utilizável"){
                                $tipo = "<a href='usar_item.php'>Usar</a>";
                            } else if($x['tipo'] == "defesa"){
                                $tipo = "<a href='equipar_item.php'>Equipar</a>";
                            } else if($x['tipo'] == "arma de uma mão cortante e defesa" || $x['tipo'] == "arma de uma mão esmagadora e defesa" || $x['tipo'] == "arma de uma mão cortante" || $x['tipo'] == "arma de uma mão esmagadora" || $x['tipo'] == "arma de uma mão leve cortante" || $x['tipo'] == "arma de uma mão leve esmagadora" || $x['tipo'] == "arma de duas mãos cortante" || $x['tipo'] == "arma de duas mãos esmagadora" || $x['tipo'] == "arma a distancia cortante" || $x['tipo'] == "arma a distancia esmagadora" || $x['tipo'] == "arma do mago"){
                                $tipo = "<a href='equipar_item.php'>Equipar</a>";
                            }
                        }
                        echo "<ul>";
                            echo "<li>";
                                echo $key['item12']." ";
                                if($key['item12'] == strtolower($_SESSION['arma1_personagem1']) || $key['item12'] == strtolower($_SESSION['arma2_personagem1']) || $key['item12'] == strtolower($_SESSION['arma1_personagem2']) || $key['item12'] == strtolower($_SESSION['arma2_personagem2']) || $key['item12'] == strtolower($_SESSION['arma1_personagem3']) || $key['item12'] == strtolower($_SESSION['arma2_personagem3']) || $key['item12'] == strtolower($_SESSION['arma1_personagem4']) || $key['item12'] == strtolower($_SESSION['arma2_personagem4'])){
                                    echo "<a href='desequipar_item.php'>Desequipar</a>";
                                } else {
                                    echo $tipo;
                                }
                                echo " <a href='itens/dar_item.php?item=$item'>   Dar Item</a>";
                            echo "</li>";
                        echo "</ul>";
                    }
                    if($key['item13'] != NULL){
                        $item = $key['item13'];
                        $tipo_item = $repositorio->VerPreco($item);
                        foreach ($tipo_item as $x) {
                            if($x['tipo'] == "utilizável"){
                                $tipo = "<a href='usar_item.php'>Usar</a>";
                            } else if($x['tipo'] == "defesa"){
                                $tipo = "<a href='equipar_item.php'>Equipar</a>";
                            } else if($x['tipo'] == "arma de uma mão cortante e defesa" || $x['tipo'] == "arma de uma mão esmagadora e defesa" || $x['tipo'] == "arma de uma mão cortante" || $x['tipo'] == "arma de uma mão esmagadora" || $x['tipo'] == "arma de uma mão leve cortante" || $x['tipo'] == "arma de uma mão leve esmagadora" || $x['tipo'] == "arma de duas mãos cortante" || $x['tipo'] == "arma de duas mãos esmagadora" || $x['tipo'] == "arma a distancia cortante" || $x['tipo'] == "arma a distancia esmagadora" || $x['tipo'] == "arma do mago"){
                                $tipo = "<a href='equipar_item.php'>Equipar</a>";
                            }
                        }
                        echo "<ul>";
                            echo "<li>";
                                echo $key['item13']." ";
                                if($key['item13'] == strtolower($_SESSION['arma1_personagem1']) || $key['item13'] == strtolower($_SESSION['arma2_personagem1']) || $key['item13'] == strtolower($_SESSION['arma1_personagem2']) || $key['item13'] == strtolower($_SESSION['arma2_personagem2']) || $key['item13'] == strtolower($_SESSION['arma1_personagem3']) || $key['item13'] == strtolower($_SESSION['arma2_personagem3']) || $key['item13'] == strtolower($_SESSION['arma1_personagem4']) || $key['item13'] == strtolower($_SESSION['arma2_personagem4'])){
                                    echo "<a href='desequipar_item.php'>Desequipar</a>";
                                } else {
                                    echo $tipo;
                                }
                                echo " <a href='itens/dar_item.php?item=$item'>   Dar Item</a>";
                            echo "</li>";
                        echo "</ul>";
                    }
                    if($key['item14'] != NULL){
                        $item = $key['item14'];
                        $tipo_item = $repositorio->VerPreco($item);
                        foreach ($tipo_item as $x) {
                            if($x['tipo'] == "utilizável"){
                                $tipo = "<a href='usar_item.php'>Usar</a>";
                            } else if($x['tipo'] == "defesa"){
                                $tipo = "<a href='equipar_item.php'>Equipar</a>";
                            } else if($x['tipo'] == "arma de uma mão cortante e defesa" || $x['tipo'] == "arma de uma mão esmagadora e defesa" || $x['tipo'] == "arma de uma mão cortante" || $x['tipo'] == "arma de uma mão esmagadora" || $x['tipo'] == "arma de uma mão leve cortante" || $x['tipo'] == "arma de uma mão leve esmagadora" || $x['tipo'] == "arma de duas mãos cortante" || $x['tipo'] == "arma de duas mãos esmagadora" || $x['tipo'] == "arma a distancia cortante" || $x['tipo'] == "arma a distancia esmagadora" || $x['tipo'] == "arma do mago"){
                                $tipo = "<a href='equipar_item.php'>Equipar</a>";
                            }
                        }
                        echo "<ul>";
                            echo "<li>";
                                echo $key['item14']." ";
                                if($key['item14'] == strtolower($_SESSION['arma1_personagem1']) || $key['item14'] == strtolower($_SESSION['arma2_personagem1']) || $key['item14'] == strtolower($_SESSION['arma1_personagem2']) || $key['item14'] == strtolower($_SESSION['arma2_personagem2']) || $key['item14'] == strtolower($_SESSION['arma1_personagem3']) || $key['item14'] == strtolower($_SESSION['arma2_personagem3']) || $key['item14'] == strtolower($_SESSION['arma1_personagem4']) || $key['item14'] == strtolower($_SESSION['arma2_personagem4'])){
                                    echo "<a href='desequipar_item.php'>Desequipar</a>";
                                } else {
                                    echo $tipo;
                                }
                                echo " <a href='itens/dar_item.php?item=$item'>   Dar Item</a>";
                            echo "</li>";
                        echo "</ul>";
                    }
                    if($key['item15'] != NULL){
                        $item = $key['item15'];
                        $tipo_item = $repositorio->VerPreco($item);
                        foreach ($tipo_item as $x) {
                            if($x['tipo'] == "utilizável"){
                                $tipo = "<a href='usar_item.php'>Usar</a>";
                            } else if($x['tipo'] == "defesa"){
                                $tipo = "<a href='equipar_item.php'>Equipar</a>";
                            } else if($x['tipo'] == "arma de uma mão cortante e defesa" || $x['tipo'] == "arma de uma mão esmagadora e defesa" || $x['tipo'] == "arma de uma mão cortante" || $x['tipo'] == "arma de uma mão esmagadora" || $x['tipo'] == "arma de uma mão leve cortante" || $x['tipo'] == "arma de uma mão leve esmagadora" || $x['tipo'] == "arma de duas mãos cortante" || $x['tipo'] == "arma de duas mãos esmagadora" || $x['tipo'] == "arma a distancia cortante" || $x['tipo'] == "arma a distancia esmagadora" || $x['tipo'] == "arma do mago"){
                                $tipo = "<a href='equipar_item.php'>Equipar</a>";
                            }
                        }
                        echo "<ul>";
                            echo "<li>";
                                echo $key['item15']." ";
                                if($key['item15'] == strtolower($_SESSION['arma1_personagem1']) || $key['item15'] == strtolower($_SESSION['arma2_personagem1']) || $key['item15'] == strtolower($_SESSION['arma1_personagem2']) || $key['item15'] == strtolower($_SESSION['arma2_personagem2']) || $key['item15'] == strtolower($_SESSION['arma1_personagem3']) || $key['item15'] == strtolower($_SESSION['arma2_personagem3']) || $key['item15'] == strtolower($_SESSION['arma1_personagem4']) || $key['item15'] == strtolower($_SESSION['arma2_personagem4'])){
                                    echo "<a href='desequipar_item.php'>Desequipar</a>";
                                } else {
                                    echo $tipo;
                                }
                                echo " <a href='itens/dar_item.php?item=$item'>   Dar Item</a>";
                            echo "</li>";
                        echo "</ul>";
                    }
                    if($key['item16'] != NULL){
                        $item = $key['item16'];
                        $tipo_item = $repositorio->VerPreco($item);
                        foreach ($tipo_item as $x) {
                            if($x['tipo'] == "utilizável"){
                                $tipo = "<a href='usar_item.php'>Usar</a>";
                            } else if($x['tipo'] == "defesa"){
                                $tipo = "<a href='equipar_item.php'>Equipar</a>";
                            } else if($x['tipo'] == "arma de uma mão cortante e defesa" || $x['tipo'] == "arma de uma mão esmagadora e defesa" || $x['tipo'] == "arma de uma mão cortante" || $x['tipo'] == "arma de uma mão esmagadora" || $x['tipo'] == "arma de uma mão leve cortante" || $x['tipo'] == "arma de uma mão leve esmagadora" || $x['tipo'] == "arma de duas mãos cortante" || $x['tipo'] == "arma de duas mãos esmagadora" || $x['tipo'] == "arma a distancia cortante" || $x['tipo'] == "arma a distancia esmagadora" || $x['tipo'] == "arma do mago"){
                                $tipo = "<a href='equipar_item.php'>Equipar</a>";
                            }
                        }
                        echo "<ul>";
                            echo "<li>";
                                echo $key['item16']." ";
                                if($key['item16'] == strtolower($_SESSION['arma1_personagem1']) || $key['item16'] == strtolower($_SESSION['arma2_personagem1']) || $key['item16'] == strtolower($_SESSION['arma1_personagem2']) || $key['item16'] == strtolower($_SESSION['arma2_personagem2']) || $key['item16'] == strtolower($_SESSION['arma1_personagem3']) || $key['item16'] == strtolower($_SESSION['arma2_personagem3']) || $key['item16'] == strtolower($_SESSION['arma1_personagem4']) || $key['item16'] == strtolower($_SESSION['arma2_personagem4'])){
                                    echo "<a href='desequipar_item.php'>Desequipar</a>";
                                } else {
                                    echo $tipo;
                                }
                                echo " <a href='itens/dar_item.php?item=$item'>   Dar Item</a>";
                            echo "</li>";
                        echo "</ul>";
                    }
                    if($key['item17'] != NULL){
                        $item = $key['item17'];
                        $tipo_item = $repositorio->VerPreco($item);
                        foreach ($tipo_item as $x) {
                            if($x['tipo'] == "utilizável"){
                                $tipo = "<a href='usar_item.php'>Usar</a>";
                            } else if($x['tipo'] == "defesa"){
                                $tipo = "<a href='equipar_item.php'>Equipar</a>";
                            } else if($x['tipo'] == "arma de uma mão cortante e defesa" || $x['tipo'] == "arma de uma mão esmagadora e defesa" || $x['tipo'] == "arma de uma mão cortante" || $x['tipo'] == "arma de uma mão esmagadora" || $x['tipo'] == "arma de uma mão leve cortante" || $x['tipo'] == "arma de uma mão leve esmagadora" || $x['tipo'] == "arma de duas mãos cortante" || $x['tipo'] == "arma de duas mãos esmagadora" || $x['tipo'] == "arma a distancia cortante" || $x['tipo'] == "arma a distancia esmagadora" || $x['tipo'] == "arma do mago"){
                                $tipo = "<a href='equipar_item.php'>Equipar</a>";
                            }
                        }
                        echo "<ul>";
                            echo "<li>";
                                echo $key['item17']." ";
                                if($key['item17'] == strtolower($_SESSION['arma1_personagem1']) || $key['item17'] == strtolower($_SESSION['arma2_personagem1']) || $key['item17'] == strtolower($_SESSION['arma1_personagem2']) || $key['item17'] == strtolower($_SESSION['arma2_personagem2']) || $key['item17'] == strtolower($_SESSION['arma1_personagem3']) || $key['item17'] == strtolower($_SESSION['arma2_personagem3']) || $key['item17'] == strtolower($_SESSION['arma1_personagem4']) || $key['item17'] == strtolower($_SESSION['arma2_personagem4'])){
                                    echo "<a href='desequipar_item.php'>Desequipar</a>";
                                } else {
                                    echo $tipo;
                                }
                                echo " <a href='itens/dar_item.php?item=$item'>   Dar Item</a>";
                            echo "</li>";
                        echo "</ul>";
                    }
                    if($key['item18'] != NULL){
                        $item = $key['item18'];
                        $tipo_item = $repositorio->VerPreco($item);
                        foreach ($tipo_item as $x) {
                            if($x['tipo'] == "utilizável"){
                                $tipo = "<a href='usar_item.php'>Usar</a>";
                            } else if($x['tipo'] == "defesa"){
                                $tipo = "<a href='equipar_item.php'>Equipar</a>";
                            } else if($x['tipo'] == "arma de uma mão cortante e defesa" || $x['tipo'] == "arma de uma mão esmagadora e defesa" || $x['tipo'] == "arma de uma mão cortante" || $x['tipo'] == "arma de uma mão esmagadora" || $x['tipo'] == "arma de uma mão leve cortante" || $x['tipo'] == "arma de uma mão leve esmagadora" || $x['tipo'] == "arma de duas mãos cortante" || $x['tipo'] == "arma de duas mãos esmagadora" || $x['tipo'] == "arma a distancia cortante" || $x['tipo'] == "arma a distancia esmagadora" || $x['tipo'] == "arma do mago"){
                                $tipo = "<a href='equipar_item.php'>Equipar</a>";
                            }
                        }
                        echo "<ul>";
                            echo "<li>";
                                echo $key['item18']." ";
                                if($key['item18'] == strtolower($_SESSION['arma1_personagem1']) || $key['item18'] == strtolower($_SESSION['arma2_personagem1']) || $key['item18'] == strtolower($_SESSION['arma1_personagem2']) || $key['item18'] == strtolower($_SESSION['arma2_personagem2']) || $key['item18'] == strtolower($_SESSION['arma1_personagem3']) || $key['item18'] == strtolower($_SESSION['arma2_personagem3']) || $key['item18'] == strtolower($_SESSION['arma1_personagem4']) || $key['item18'] == strtolower($_SESSION['arma2_personagem4'])){
                                    echo "<a href='desequipar_item.php'>Desequipar</a>";
                                } else {
                                    echo $tipo;
                                }
                                echo " <a href='itens/dar_item.php?item=$item'>   Dar Item</a>";
                            echo "</li>";
                        echo "</ul>";
                    }
                    if($key['item19'] != NULL){
                        $item = $key['item19'];
                        $tipo_item = $repositorio->VerPreco($item);
                        foreach ($tipo_item as $x) {
                            if($x['tipo'] == "utilizável"){
                                $tipo = "<a href='usar_item.php'>Usar</a>";
                            } else if($x['tipo'] == "defesa"){
                                $tipo = "<a href='equipar_item.php'>Equipar</a>";
                            } else if($x['tipo'] == "arma de uma mão cortante e defesa" || $x['tipo'] == "arma de uma mão esmagadora e defesa" || $x['tipo'] == "arma de uma mão cortante" || $x['tipo'] == "arma de uma mão esmagadora" || $x['tipo'] == "arma de uma mão leve cortante" || $x['tipo'] == "arma de uma mão leve esmagadora" || $x['tipo'] == "arma de duas mãos cortante" || $x['tipo'] == "arma de duas mãos esmagadora" || $x['tipo'] == "arma a distancia cortante" || $x['tipo'] == "arma a distancia esmagadora" || $x['tipo'] == "arma do mago"){
                                $tipo = "<a href='equipar_item.php'>Equipar</a>";
                            }
                        }
                        echo "<ul>";
                            echo "<li>";
                                echo $key['item19']." ";
                                if($key['item19'] == strtolower($_SESSION['arma1_personagem1']) || $key['item19'] == strtolower($_SESSION['arma2_personagem1']) || $key['item19'] == strtolower($_SESSION['arma1_personagem2']) || $key['item19'] == strtolower($_SESSION['arma2_personagem2']) || $key['item19'] == strtolower($_SESSION['arma1_personagem3']) || $key['item19'] == strtolower($_SESSION['arma2_personagem3']) || $key['item19'] == strtolower($_SESSION['arma1_personagem4']) || $key['item19'] == strtolower($_SESSION['arma2_personagem4'])){
                                    echo "<a href='desequipar_item.php'>Desequipar</a>";
                                } else {
                                    echo $tipo;
                                }
                                echo " <a href='itens/dar_item.php?item=$item'>   Dar Item</a>";
                            echo "</li>";
                        echo "</ul>";
                    }
                    if($key['item20'] != NULL){
                        $item = $key['item20'];
                        $tipo_item = $repositorio->VerPreco($item);
                        foreach ($tipo_item as $x) {
                            if($x['tipo'] == "utilizável"){
                                $tipo = "<a href='usar_item.php'>Usar</a>";
                            } else if($x['tipo'] == "defesa"){
                                $tipo = "<a href='equipar_item.php'>Equipar</a>";
                            } else if($x['tipo'] == "arma de uma mão cortante e defesa" || $x['tipo'] == "arma de uma mão esmagadora e defesa" || $x['tipo'] == "arma de uma mão cortante" || $x['tipo'] == "arma de uma mão esmagadora" || $x['tipo'] == "arma de uma mão leve cortante" || $x['tipo'] == "arma de uma mão leve esmagadora" || $x['tipo'] == "arma de duas mãos cortante" || $x['tipo'] == "arma de duas mãos esmagadora" || $x['tipo'] == "arma a distancia cortante" || $x['tipo'] == "arma a distancia esmagadora" || $x['tipo'] == "arma do mago"){
                                $tipo = "<a href='equipar_item.php'>Equipar</a>";
                            }
                        }
                        echo "<ul>";
                            echo "<li>";
                                echo $key['item20']." ";
                                if($key['item20'] == strtolower($_SESSION['arma1_personagem1']) || $key['item20'] == strtolower($_SESSION['arma2_personagem1']) || $key['item20'] == strtolower($_SESSION['arma1_personagem2']) || $key['item20'] == strtolower($_SESSION['arma2_personagem2']) || $key['item20'] == strtolower($_SESSION['arma1_personagem3']) || $key['item20'] == strtolower($_SESSION['arma2_personagem3']) || $key['item20'] == strtolower($_SESSION['arma1_personagem4']) || $key['item20'] == strtolower($_SESSION['arma2_personagem4'])){
                                    echo "<a href='desequipar_item.php'>Desequipar</a>";
                                } else {
                                    echo $tipo;
                                }
                                echo " <a href='itens/dar_item.php?item=$item'>   Dar Item</a>";
                            echo "</li>";
                        echo "</ul>";
                    }
                    if($key['item21'] != NULL){
                        $item = $key['item21'];
                        $tipo_item = $repositorio->VerPreco($item);
                        foreach ($tipo_item as $x) {
                            if($x['tipo'] == "utilizável"){
                                $tipo = "<a href='usar_item.php'>Usar</a>";
                            } else if($x['tipo'] == "defesa"){
                                $tipo = "<a href='equipar_item.php'>Equipar</a>";
                            } else if($x['tipo'] == "arma de uma mão cortante e defesa" || $x['tipo'] == "arma de uma mão esmagadora e defesa" || $x['tipo'] == "arma de uma mão cortante" || $x['tipo'] == "arma de uma mão esmagadora" || $x['tipo'] == "arma de uma mão leve cortante" || $x['tipo'] == "arma de uma mão leve esmagadora" || $x['tipo'] == "arma de duas mãos cortante" || $x['tipo'] == "arma de duas mãos esmagadora" || $x['tipo'] == "arma a distancia cortante" || $x['tipo'] == "arma a distancia esmagadora" || $x['tipo'] == "arma do mago"){
                                $tipo = "<a href='equipar_item.php'>Equipar</a>";
                            }
                        }
                        echo "<ul>";
                            echo "<li>";
                                echo $key['item21']." ";
                                if($key['item21'] == strtolower($_SESSION['arma1_personagem1']) || $key['item21'] == strtolower($_SESSION['arma2_personagem1']) || $key['item21'] == strtolower($_SESSION['arma1_personagem2']) || $key['item21'] == strtolower($_SESSION['arma2_personagem2']) || $key['item21'] == strtolower($_SESSION['arma1_personagem3']) || $key['item21'] == strtolower($_SESSION['arma2_personagem3']) || $key['item21'] == strtolower($_SESSION['arma1_personagem4']) || $key['item21'] == strtolower($_SESSION['arma2_personagem4'])){
                                    echo "<a href='desequipar_item.php'>Desequipar</a>";
                                } else {
                                    echo $tipo;
                                }
                                echo " <a href='itens/dar_item.php?item=$item'>   Dar Item</a>";
                            echo "</li>";
                        echo "</ul>";
                    }
                    if($key['item22'] != NULL){
                        $item = $key['item22'];
                        $tipo_item = $repositorio->VerPreco($item);
                        foreach ($tipo_item as $x) {
                            if($x['tipo'] == "utilizável"){
                                $tipo = "<a href='usar_item.php'>Usar</a>";
                            } else if($x['tipo'] == "defesa"){
                                $tipo = "<a href='equipar_item.php'>Equipar</a>";
                            } else if($x['tipo'] == "arma de uma mão cortante e defesa" || $x['tipo'] == "arma de uma mão esmagadora e defesa" || $x['tipo'] == "arma de uma mão cortante" || $x['tipo'] == "arma de uma mão esmagadora" || $x['tipo'] == "arma de uma mão leve cortante" || $x['tipo'] == "arma de uma mão leve esmagadora" || $x['tipo'] == "arma de duas mãos cortante" || $x['tipo'] == "arma de duas mãos esmagadora" || $x['tipo'] == "arma a distancia cortante" || $x['tipo'] == "arma a distancia esmagadora" || $x['tipo'] == "arma do mago"){
                                $tipo = "<a href='equipar_item.php'>Equipar</a>";
                            }
                        }
                        echo "<ul>";
                            echo "<li>";
                                echo $key['item22']." ";
                                if($key['item22'] == strtolower($_SESSION['arma1_personagem1']) || $key['item22'] == strtolower($_SESSION['arma2_personagem1']) || $key['item22'] == strtolower($_SESSION['arma1_personagem2']) || $key['item22'] == strtolower($_SESSION['arma2_personagem2']) || $key['item22'] == strtolower($_SESSION['arma1_personagem3']) || $key['item22'] == strtolower($_SESSION['arma2_personagem3']) || $key['item22'] == strtolower($_SESSION['arma1_personagem4']) || $key['item22'] == strtolower($_SESSION['arma2_personagem4'])){
                                    echo "<a href='desequipar_item.php'>Desequipar</a>";
                                } else {
                                    echo $tipo;
                                }
                                echo " <a href='itens/dar_item.php?item=$item'>   Dar Item</a>";
                            echo "</li>";
                        echo "</ul>";
                    }
                    if($key['item23'] != NULL){
                        $item = $key['item23'];
                        $tipo_item = $repositorio->VerPreco($item);
                        foreach ($tipo_item as $x) {
                            if($x['tipo'] == "utilizável"){
                                $tipo = "<a href='usar_item.php'>Usar</a>";
                            } else if($x['tipo'] == "defesa"){
                                $tipo = "<a href='equipar_item.php'>Equipar</a>";
                            } else if($x['tipo'] == "arma de uma mão cortante e defesa" || $x['tipo'] == "arma de uma mão esmagadora e defesa" || $x['tipo'] == "arma de uma mão cortante" || $x['tipo'] == "arma de uma mão esmagadora" || $x['tipo'] == "arma de uma mão leve cortante" || $x['tipo'] == "arma de uma mão leve esmagadora" || $x['tipo'] == "arma de duas mãos cortante" || $x['tipo'] == "arma de duas mãos esmagadora" || $x['tipo'] == "arma a distancia cortante" || $x['tipo'] == "arma a distancia esmagadora" || $x['tipo'] == "arma do mago"){
                                $tipo = "<a href='equipar_item.php'>Equipar</a>";
                            }
                        }
                        echo "<ul>";
                            echo "<li>";
                                echo $key['item23']." ";
                                if($key['item23'] == strtolower($_SESSION['arma1_personagem1']) || $key['item23'] == strtolower($_SESSION['arma2_personagem1']) || $key['item23'] == strtolower($_SESSION['arma1_personagem2']) || $key['item23'] == strtolower($_SESSION['arma2_personagem2']) || $key['item23'] == strtolower($_SESSION['arma1_personagem3']) || $key['item23'] == strtolower($_SESSION['arma2_personagem3']) || $key['item23'] == strtolower($_SESSION['arma1_personagem4']) || $key['item23'] == strtolower($_SESSION['arma2_personagem4'])){
                                    echo "<a href='desequipar_item.php'>Desequipar</a>";
                                } else {
                                    echo $tipo;
                                }
                                echo " <a href='itens/dar_item.php?item=$item'>   Dar Item</a>";
                            echo "</li>";
                        echo "</ul>";
                    }
                    if($key['item24'] != NULL){
                        $item = $key['item24'];
                        $tipo_item = $repositorio->VerPreco($item);
                        foreach ($tipo_item as $x) {
                            if($x['tipo'] == "utilizável"){
                                $tipo = "<a href='usar_item.php'>Usar</a>";
                            } else if($x['tipo'] == "defesa"){
                                $tipo = "<a href='equipar_item.php'>Equipar</a>";
                            } else if($x['tipo'] == "arma de uma mão cortante e defesa" || $x['tipo'] == "arma de uma mão esmagadora e defesa" || $x['tipo'] == "arma de uma mão cortante" || $x['tipo'] == "arma de uma mão esmagadora" || $x['tipo'] == "arma de uma mão leve cortante" || $x['tipo'] == "arma de uma mão leve esmagadora" || $x['tipo'] == "arma de duas mãos cortante" || $x['tipo'] == "arma de duas mãos esmagadora" || $x['tipo'] == "arma a distancia cortante" || $x['tipo'] == "arma a distancia esmagadora" || $x['tipo'] == "arma do mago"){
                                $tipo = "<a href='equipar_item.php'>Equipar</a>";
                            }
                        }
                        echo "<ul>";
                            echo "<li>";
                                echo $key['item24']." ";
                                if($key['item24'] == strtolower($_SESSION['arma1_personagem1']) || $key['item24'] == strtolower($_SESSION['arma2_personagem1']) || $key['item24'] == strtolower($_SESSION['arma1_personagem2']) || $key['item24'] == strtolower($_SESSION['arma2_personagem2']) || $key['item24'] == strtolower($_SESSION['arma1_personagem3']) || $key['item24'] == strtolower($_SESSION['arma2_personagem3']) || $key['item24'] == strtolower($_SESSION['arma1_personagem4']) || $key['item24'] == strtolower($_SESSION['arma2_personagem4'])){
                                    echo "<a href='desequipar_item.php'>Desequipar</a>";
                                } else {
                                    echo $tipo;
                                }
                                echo " <a href='itens/dar_item.php?item=$item'>   Dar Item</a>";
                            echo "</li>";
                        echo "</ul>";
                    }
                    if($key['item25'] != NULL){
                        $item = $key['item25'];
                        $tipo_item = $repositorio->VerPreco($item);
                        foreach ($tipo_item as $x) {
                            if($x['tipo'] == "utilizável"){
                                $tipo = "<a href='usar_item.php'>Usar</a>";
                            } else if($x['tipo'] == "defesa"){
                                $tipo = "<a href='equipar_item.php'>Equipar</a>";
                            } else if($x['tipo'] == "arma de uma mão cortante e defesa" || $x['tipo'] == "arma de uma mão esmagadora e defesa" || $x['tipo'] == "arma de uma mão cortante" || $x['tipo'] == "arma de uma mão esmagadora" || $x['tipo'] == "arma de uma mão leve cortante" || $x['tipo'] == "arma de uma mão leve esmagadora" || $x['tipo'] == "arma de duas mãos cortante" || $x['tipo'] == "arma de duas mãos esmagadora" || $x['tipo'] == "arma a distancia cortante" || $x['tipo'] == "arma a distancia esmagadora" || $x['tipo'] == "arma do mago"){
                                $tipo = "<a href='equipar_item.php'>Equipar</a>";
                            }
                        }
                        echo "<ul>";
                            echo "<li>";
                                echo $key['item25']." ";
                                if($key['item25'] == strtolower($_SESSION['arma1_personagem1']) || $key['item25'] == strtolower($_SESSION['arma2_personagem1']) || $key['item25'] == strtolower($_SESSION['arma1_personagem2']) || $key['item25'] == strtolower($_SESSION['arma2_personagem2']) || $key['item25'] == strtolower($_SESSION['arma1_personagem3']) || $key['item25'] == strtolower($_SESSION['arma2_personagem3']) || $key['item25'] == strtolower($_SESSION['arma1_personagem4']) || $key['item25'] == strtolower($_SESSION['arma2_personagem4'])){
                                    echo "<a href='desequipar_item.php'>Desequipar</a>";
                                } else {
                                    echo $tipo;
                                }
                                echo " <a href='itens/dar_item.php?item=$item'>   Dar Item</a>";
                            echo "</li>";
                        echo "</ul>";
                    }
                }
            }
        ?>
        </div>
        <br>
        <br>
        <br>
        <p>tela de acontecimentos </p>
    </div>
    <div class="inventario">
        <ul>
            <?php
            echo "<h1>Inventário</h1>";
                $id = $_SESSION['turno'];
                $personagem = $repositorio->MostrarPersonagem($id);
                foreach ($personagem as $key) {
                    $nome = $key['nome'];
                }
                $inventario = $repositorio->MostrarInventario($nome);
                foreach ($inventario as $key) {
                    echo "<li>".$key['item1']."</li>";
                    echo "<li>".$key['item2']."</li>";
                    echo "<li>".$key['item3']."</li>";    
                    echo "<li>".$key['item4']."</li>";   
                    echo "<li>".$key['item5']."</li>";    
                    echo "<li>".$key['item6']."</li>";
                    echo "<li>".$key['item7']."</li>";
                    echo "<li>".$key['item8']."</li>";
                    echo "<li>".$key['item9']."</li>";
                    echo "<li>".$key['item10']."</li>";
                    echo "<li>".$key['item11']."</li>";
                    echo "<li>".$key['item12']."</li>";
                    echo "<li>".$key['item13']."</li>";
                    echo "<li>".$key['item14']."</li>";
                    echo "<li>".$key['item15']."</li>";
                    echo "<li>".$key['item16']."</li>";
                    echo "<li>".$key['item17']."</li>";
                    echo "<li>".$key['item18']."</li>";
                    echo "<li>".$key['item19']."</li>";
                    echo "<li>".$key['item20']."</li>";
                    echo "<li>".$key['item21']."</li>";
                    echo "<li>".$key['item22']."</li>";
                    echo "<li>".$key['item23']."</li>";
                    echo "<li>".$key['item24']."</li>";
                    echo "<li>".$key['item25']."</li>";
                }
            ?>
        </ul>
    </div>
    <div class="mapa">
        <p>mapas</p>
    </div>
    <div class="personagens">
        <div class="p1">
            <?php
                echo "<div style='border: solid 2px black;float:left'>";
                    echo "Nome: ".$nome_personagem1;
                    echo "<br>";
                    echo "Classe: ".$classe_personagem1;
                    echo "<br>";
                    echo "Nível: ".$nivel_personagem1;
                    echo "<br>";
                    echo "Vida: ".$_SESSION['vida_atual_personagem1']."/".$vida_maxima_personagem1;
                    echo "<br>";
                    if($turno == $_SESSION['personagem1']){
                        if($ataque_personagem1 != NULL){
                            echo "Ataque: ".$ataque_personagem1;
                        }
                        if($defesa_personagem1 != NULL){
                            echo "Defesa: ".$defesa_personagem1;
                        }
                    }
                echo "</div>";
                if($turno == $_SESSION['personagem1']){
                    $id = $turno;
                    echo "<div style='float:left'>";
                        echo "<a href='passar_turno.php?id=$id'>Passar Turno</a>";
                        echo "<br>";
                        echo "<a href='itens/mostrar_itens.php?id=$id'>Itens</a>";
                    echo "</div>";
                }
                echo "<div style='border: solid 2px black;float:left'>";
                    echo "Nome: ".$nome_personagem2;
                    echo "<br>";
                    echo "Classe: ".$classe_personagem2;
                    echo "<br>";
                    echo "Nível: ".$nivel_personagem2;
                    echo "<br>";
                    echo "Vida: ".$_SESSION['vida_atual_personagem2']."/".$vida_maxima_personagem2;
                    echo "<br>";
                    if($turno == $_SESSION['personagem2']){
                        if($ataque_personagem2 != NULL){
                            echo "Ataque: ".$ataque_personagem2;
                        }
                        if($defesa_personagem2 != NULL){
                            echo "Defesa: ".$defesa_personagem2;
                        }
                    }
                echo "</div>";
                if($turno == $_SESSION['personagem2']){
                    $id = $turno;
                    echo "<div style='float:left'>";
                        echo "<a href='passar_turno.php?id=$id'>Passar Turno</a>";
                        echo "<br>";
                        echo "<a href='itens/mostrar_itens.php?id=$id'>Itens</a>";
                    echo "</div>";
                }
                echo "<div style='border: solid 2px black;float:left'>";
                    echo "Nome: ".$nome_personagem3;
                    echo "<br>";
                    echo "Classe: ".$classe_personagem3;
                    echo "<br>";
                    echo "Nível: ".$nivel_personagem3;
                    echo "<br>";
                    echo "Vida: ".$_SESSION['vida_atual_personagem3']."/".$vida_maxima_personagem3;
                    echo "<br>";
                    if($turno == $_SESSION['personagem3']){
                        if($ataque_personagem3 != NULL){
                            echo "Ataque: ".$ataque_personagem3;
                        }
                        if($defesa_personagem3 != NULL){
                            echo "Defesa: ".$defesa_personagem3;
                        }
                    }
                echo "</div>";
                if($turno == $_SESSION['personagem3']){
                    $id = $turno;
                    echo "<div style='float:left'>";
                        echo "<a href='passar_turno.php?id=$id'>Passar Turno</a>";
                        echo "<br>";
                        echo "<a href='itens/mostrar_itens.php?id=$id'>Itens</a>";
                    echo "</div>";
                }
                echo "<div style='border: solid 2px black;float:left'>";
                    echo "Nome: ".$nome_personagem4;
                    echo "<br>";
                    echo "Classe: ".$classe_personagem4;
                    echo "<br>";
                    echo "Nível: ".$nivel_personagem4;
                    echo "<br>";
                    echo "Vida: ".$_SESSION['vida_atual_personagem4']."/".$vida_maxima_personagem4;
                    echo "<br>";
                    if($turno == $_SESSION['personagem4']){
                        if($ataque_personagem4 != NULL){
                            echo "Ataque: ".$ataque_personagem4;
                        }
                        if($defesa_personagem4 != NULL){
                            echo "Defesa: ".$defesa_personagem4;
                        }
                    }
                echo "</div>";
                if($turno == $_SESSION['personagem4']){
                    $id = $turno;
                    echo "<div style='float:left'>";
                        echo "<a href='passar_turno.php?id=$id'>Passar Turno</a>";
                        echo "<br>";
                        echo "<a href='itens/mostrar_itens.php?id=$id'>Itens</a>";
                    echo "</div>";
                }
            ?>
        </div>
    </div>
    <div class="mapaPrincipal">

    </div>
</body>
</html>