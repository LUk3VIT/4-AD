<?php
session_start();
require_once '../../classes/repositorioTabletop.php'; 
$repositorio = new RepositorioTabletopMySQL();
?> 
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trocar Itens</title>
</head>
<body>
    <h2><a href='../index_jogo_solo.php'>Voltar à sala de preparação</a></h2>
    <h1>Inventários:<h1>
    <?php
        $id = $_SESSION['personagem1'];
        $personagem = $repositorio->MostrarPersonagem($id);
        foreach ($personagem as $key) {
            $nome = $key['nome'];
            echo "<h2>Nome: ".$key['nome']."</h2>";
            echo "<h2>Classe: ".$key['classe']."</h2>";
            echo "<h2>Nível: ".$key['nivel']."</h2>";
            echo "<h2>Dinheiro: ".$key['dinheiro']."</h2>";
            $id_pers = $key['id_pers'];
            $dinheiro = $key['dinheiro'];
            if($dinheiro > 0){
                echo "<h2>Dar Dinheiro: 
                        <form action='escolher_dinheiro.php' method='post'>
                            <input type='text' name='id_remetente' value='$id_pers' hidden>
                            <input type='number' name='dinheiro_total' value='$dinheiro' hidden>
                            <input type='number' min='1' max='$dinheiro' name='dinheiro'>
                            <input type='submit' value='Continuar'>
                        </form>
                    </h2>";
            }
            $inventario = $repositorio->MostrarInventario($nome);
            foreach ($inventario as $key) {
                echo "<ul>";
                    $item1 = $key['item1'];
                    echo "<li>".$key['item1']."
                        <form action='selec_item.php' method='post'>
                        <label for='nome' hidden></label>
                        <input type='text' id='nome' name='nome' value='$nome' hidden>
                        <label for='item' hidden></label>
                        <input type='text' id='item' name='item' value='$item1' hidden>
                        <input type='submit' value='Trocar'>
                        </form>
                    </li>";
                    $item2 = $key['item2'];
                    echo "<li>".$key['item2']."
                        <form action='selec_item.php' method='post'>
                        <label for='nome' hidden></label>
                        <input type='text' id='nome' name='nome' value='$nome' hidden>
                        <label for='item' hidden></label>
                        <input type='text' id='item' name='item' value='$item2' hidden>
                        <input type='submit' value='Trocar'>
                        </form>
                    </li>";
                    if($key['item3'] != NULL){
                        $item3 = $key['item3'];
                        echo "<li>".$key['item3']."
                            <form action='selec_item.php' method='post'>
                            <label for='nome' hidden></label>
                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                            <label for='item' hidden></label>
                            <input type='text' id='item' name='item' value='$item3' hidden>
                            <input type='submit' value='Trocar'>
                            </form>
                        </li>";
                    }
                    if($key['item4'] != NULL){
                        $item4 = $key['item4'];
                        echo "<li>".$key['item4']."
                            <form action='selec_item.php' method='post'>
                            <label for='nome' hidden></label>
                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                            <label for='item' hidden></label>
                            <input type='text' id='item' name='item' value='$item4' hidden>
                            <input type='submit' value='Trocar'>
                            </form>
                        </li>";
                    }
                    if($key['item5'] != NULL){
                        $item5 = $key['item5'];
                        echo "<li>".$key['item5']."
                            <form action='selec_item.php' method='post'>
                            <label for='nome' hidden></label>
                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                            <label for='item' hidden></label>
                            <input type='text' id='item' name='item' value='$item5' hidden>
                            <input type='submit' value='Trocar'>
                            </form>
                        </li>";
                    }
                    if($key['item6'] != NULL){
                        $item6 = $key['item6'];
                        echo "<li>".$key['item6']."
                            <form action='selec_item.php' method='post'>
                            <label for='nome' hidden></label>
                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                            <label for='item' hidden></label>
                            <input type='text' id='item' name='item' value='$item6' hidden>
                            <input type='submit' value='Trocar'>
                            </form>
                        </li>";
                    }
                    if($key['item7'] != NULL){
                        $item7 = $key['item7'];
                        echo "<li>".$key['item7']."
                            <form action='selec_item.php' method='post'>
                            <label for='nome' hidden></label>
                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                            <label for='item' hidden></label>
                            <input type='text' id='item' name='item' value='$item7' hidden>
                            <input type='submit' value='Trocar'>
                            </form>
                        </li>";
                    }
                    if($key['item8'] != NULL){
                        $item8 = $key['item8'];
                        echo "<li>".$key['item8']."
                            <form action='selec_item.php' method='post'>
                            <label for='nome' hidden></label>
                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                            <label for='item' hidden></label>
                            <input type='text' id='item' name='item' value='$item8' hidden>
                            <input type='submit' value='Trocar'>
                            </form>
                        </li>";
                    }
                    if($key['item9'] != NULL){
                        $item9 = $key['item9'];
                        echo "<li>".$key['item9']."
                            <form action='selec_item.php' method='post'>
                            <label for='nome' hidden></label>
                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                            <label for='item' hidden></label>
                            <input type='text' id='item' name='item' value='$item9' hidden>
                            <input type='submit' value='Trocar'>
                            </form>
                        </li>";
                    }
                    if($key['item10'] != NULL){
                        $item10 = $key['item10'];
                        echo "<li>".$key['item10']."
                            <form action='selec_item.php' method='post'>
                            <label for='nome' hidden></label>
                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                            <label for='item' hidden></label>
                            <input type='text' id='item' name='item' value='$item10' hidden>
                            <input type='submit' value='Trocar'>
                            </form>
                        </li>";
                    }
                    if($key['item11'] != NULL){
                        $item11 = $key['item11'];
                        echo "<li>".$key['item11']."
                            <form action='selec_item.php' method='post'>
                            <label for='nome' hidden></label>
                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                            <label for='item' hidden></label>
                            <input type='text' id='item' name='item' value='$item11' hidden>
                            <input type='submit' value='Trocar'>
                            </form>
                        </li>";
                    }
                    if($key['item12'] != NULL){
                        $item12 = $key['item12'];
                        echo "<li>".$key['item12']."
                            <form action='selec_item.php' method='post'>
                            <label for='nome' hidden></label>
                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                            <label for='item' hidden></label>
                            <input type='text' id='item' name='item' value='$item12' hidden>
                            <input type='submit' value='Trocar'>
                            </form>
                        </li>";
                    }
                    if($key['item13'] != NULL){
                        $item13 = $key['item13'];
                        echo "<li>".$key['item13']."
                            <form action='selec_item.php' method='post'>
                            <label for='nome' hidden></label>
                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                            <label for='item' hidden></label>
                            <input type='text' id='item' name='item' value='$item13' hidden>
                            <input type='submit' value='Trocar'>
                            </form>
                        </li>";
                    }
                    if($key['item14'] != NULL){
                        $item14 = $key['item14'];
                        echo "<li>".$key['item14']."
                            <form action='selec_item.php' method='post'>
                            <label for='nome' hidden></label>
                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                            <label for='item' hidden></label>
                            <input type='text' id='item' name='item' value='$item14' hidden>
                            <input type='submit' value='Trocar'>
                            </form>
                        </li>";
                    }
                    if($key['item15'] != NULL){
                        $item15 = $key['item15'];
                        echo "<li>".$key['item15']."
                            <form action='selec_item.php' method='post'>
                            <label for='nome' hidden></label>
                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                            <label for='item' hidden></label>
                            <input type='text' id='item' name='item' value='$item15' hidden>
                            <input type='submit' value='Trocar'>
                            </form>
                        </li>";
                    }
                    if($key['item16'] != NULL){
                        $item16 = $key['item16'];
                        echo "<li>".$key['item16']."
                            <form action='selec_item.php' method='post'>
                            <label for='nome' hidden></label>
                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                            <label for='item' hidden></label>
                            <input type='text' id='item' name='item' value='$item16' hidden>
                            <input type='submit' value='Trocar'>
                            </form>
                        </li>";
                    }
                    if($key['item17'] != NULL){
                        $item17 = $key['item17'];
                        echo "<li>".$key['item17']."
                            <form action='selec_item.php' method='post'>
                            <label for='nome' hidden></label>
                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                            <label for='item' hidden></label>
                            <input type='text' id='item' name='item' value='$item17' hidden>
                            <input type='submit' value='Trocar'>
                            </form>
                        </li>";
                    }
                    if($key['item18'] != NULL){
                        $item18 = $key['item18'];
                        echo "<li>".$key['item18']."
                            <form action='selec_item.php' method='post'>
                            <label for='nome' hidden></label>
                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                            <label for='item' hidden></label>
                            <input type='text' id='item' name='item' value='$item18' hidden>
                            <input type='submit' value='Trocar'>
                            </form>
                        </li>";
                    }
                    if($key['item19'] != NULL){
                        $item19 = $key['item19'];
                        echo "<li>".$key['item19']."
                            <form action='selec_item.php' method='post'>
                            <label for='nome' hidden></label>
                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                            <label for='item' hidden></label>
                            <input type='text' id='item' name='item' value='$item19' hidden>
                            <input type='submit' value='Trocar'>
                            </form>
                        </li>";
                    }
                    if($key['item20'] != NULL){
                        $item20 = $key['item20'];
                        echo "<li>".$key['item20']."
                            <form action='selec_item.php' method='post'>
                            <label for='nome' hidden></label>
                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                            <label for='item' hidden></label>
                            <input type='text' id='item' name='item' value='$item20' hidden>
                            <input type='submit' value='Trocar'>
                            </form>
                        </li>";
                    }
                    if($key['item21'] != NULL){
                        $item21 = $key['item21'];
                        echo "<li>".$key['item21']."
                            <form action='selec_item.php' method='post'>
                            <label for='nome' hidden></label>
                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                            <label for='item' hidden></label>
                            <input type='text' id='item' name='item' value='$item21' hidden>
                            <input type='submit' value='Trocar'>
                            </form>
                        </li>";
                    }
                    if($key['item22'] != NULL){
                        $item22 = $key['item22'];
                        echo "<li>".$key['item22']."
                            <form action='selec_item.php' method='post'>
                            <label for='nome' hidden></label>
                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                            <label for='item' hidden></label>
                            <input type='text' id='item' name='item' value='$item22' hidden>
                            <input type='submit' value='Trocar'>
                            </form>
                        </li>";
                    }
                    if($key['item23'] != NULL){
                        $item23 = $key['item23'];
                        echo "<li>".$key['item23']."
                            <form action='selec_item.php' method='post'>
                            <label for='nome' hidden></label>
                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                            <label for='item' hidden></label>
                            <input type='text' id='item' name='item' value='$item23' hidden>
                            <input type='submit' value='Trocar'>
                            </form>
                        </li>";
                    }
                    if($key['item24'] != NULL){
                        $item24 = $key['item24'];
                        echo "<li>".$key['item24']."
                            <form action='selec_item.php' method='post'>
                            <label for='nome' hidden></label>
                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                            <label for='item' hidden></label>
                            <input type='text' id='item' name='item' value='$item24' hidden>
                            <input type='submit' value='Trocar'>
                            </form>
                        </li>";
                    }
                    if($key['item25'] != NULL){
                        $item25 = $key['item25'];
                        echo "<li>".$key['item25']."
                            <form action='selec_item.php' method='post'>
                            <label for='nome' hidden></label>
                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                            <label for='item' hidden></label>
                            <input type='text' id='item' name='item' value='$item25' hidden>
                            <input type='submit' value='Trocar'>
                            </form>
                        </li>";
                    }
                echo "</ul>";
            }
        }
        $id = $_SESSION['personagem2'];
        $personagem = $repositorio->MostrarPersonagem($id);
        foreach ($personagem as $key) {
            $nome = $key['nome'];
            echo "<h2>Nome: ".$key['nome']."</h2>";
            echo "<h2>Classe: ".$key['classe']."</h2>";
            echo "<h2>Nível: ".$key['nivel']."</h2>";
            echo "<h2>Dinheiro: ".$key['dinheiro']."</h2>";
            $id_pers = $key['id_pers'];
            $dinheiro = $key['dinheiro'];
            if($dinheiro > 0){
                echo "<h2>Dar Dinheiro: 
                        <form action='escolher_dinheiro.php' method='post'>
                            <input type='text' name='id_remetente' value='$id_pers' hidden>
                            <input type='number' name='dinheiro_total' value='$dinheiro' hidden>
                            <input type='number' min='1' max='$dinheiro' name='dinheiro'>
                            <input type='submit' value='Continuar'>
                        </form>
                    </h2>";
            }
            $inventario = $repositorio->MostrarInventario($nome);
            foreach ($inventario as $key) {
                echo "<ul>";
                    $item1 = $key['item1'];
                    echo "<li>".$key['item1']."
                        <form action='selec_item.php' method='post'>
                        <label for='nome' hidden></label>
                        <input type='text' id='nome' name='nome' value='$nome' hidden>
                        <label for='item' hidden></label>
                        <input type='text' id='item' name='item' value='$item1' hidden>
                        <input type='submit' value='Trocar'>
                        </form>
                    </li>";
                    $item2 = $key['item2'];
                    echo "<li>".$key['item2']."
                        <form action='selec_item.php' method='post'>
                        <label for='nome' hidden></label>
                        <input type='text' id='nome' name='nome' value='$nome' hidden>
                        <label for='item' hidden></label>
                        <input type='text' id='item' name='item' value='$item2' hidden>
                        <input type='submit' value='Trocar'>
                        </form>
                    </li>";
                    if($key['item3'] != NULL){
                        $item3 = $key['item3'];
                        echo "<li>".$key['item3']."
                            <form action='selec_item.php' method='post'>
                            <label for='nome' hidden></label>
                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                            <label for='item' hidden></label>
                            <input type='text' id='item' name='item' value='$item3' hidden>
                            <input type='submit' value='Trocar'>
                            </form>
                        </li>";
                    }
                    if($key['item4'] != NULL){
                        $item4 = $key['item4'];
                        echo "<li>".$key['item4']."
                            <form action='selec_item.php' method='post'>
                            <label for='nome' hidden></label>
                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                            <label for='item' hidden></label>
                            <input type='text' id='item' name='item' value='$item4' hidden>
                            <input type='submit' value='Trocar'>
                            </form>
                        </li>";
                    }
                    if($key['item5'] != NULL){
                        $item5 = $key['item5'];
                        echo "<li>".$key['item5']."
                            <form action='selec_item.php' method='post'>
                            <label for='nome' hidden></label>
                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                            <label for='item' hidden></label>
                            <input type='text' id='item' name='item' value='$item5' hidden>
                            <input type='submit' value='Trocar'>
                            </form>
                        </li>";
                    }
                    if($key['item6'] != NULL){
                        $item6 = $key['item6'];
                        echo "<li>".$key['item6']."
                            <form action='selec_item.php' method='post'>
                            <label for='nome' hidden></label>
                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                            <label for='item' hidden></label>
                            <input type='text' id='item' name='item' value='$item6' hidden>
                            <input type='submit' value='Trocar'>
                            </form>
                        </li>";
                    }
                    if($key['item7'] != NULL){
                        $item7 = $key['item7'];
                        echo "<li>".$key['item7']."
                            <form action='selec_item.php' method='post'>
                            <label for='nome' hidden></label>
                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                            <label for='item' hidden></label>
                            <input type='text' id='item' name='item' value='$item7' hidden>
                            <input type='submit' value='Trocar'>
                            </form>
                        </li>";
                    }
                    if($key['item8'] != NULL){
                        $item8 = $key['item8'];
                        echo "<li>".$key['item8']."
                            <form action='selec_item.php' method='post'>
                            <label for='nome' hidden></label>
                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                            <label for='item' hidden></label>
                            <input type='text' id='item' name='item' value='$item8' hidden>
                            <input type='submit' value='Trocar'>
                            </form>
                        </li>";
                    }
                    if($key['item9'] != NULL){
                        $item9 = $key['item9'];
                        echo "<li>".$key['item9']."
                            <form action='selec_item.php' method='post'>
                            <label for='nome' hidden></label>
                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                            <label for='item' hidden></label>
                            <input type='text' id='item' name='item' value='$item9' hidden>
                            <input type='submit' value='Trocar'>
                            </form>
                        </li>";
                    }
                    if($key['item10'] != NULL){
                        $item10 = $key['item10'];
                        echo "<li>".$key['item10']."
                            <form action='selec_item.php' method='post'>
                            <label for='nome' hidden></label>
                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                            <label for='item' hidden></label>
                            <input type='text' id='item' name='item' value='$item10' hidden>
                            <input type='submit' value='Trocar'>
                            </form>
                        </li>";
                    }
                    if($key['item11'] != NULL){
                        $item11 = $key['item11'];
                        echo "<li>".$key['item11']."
                            <form action='selec_item.php' method='post'>
                            <label for='nome' hidden></label>
                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                            <label for='item' hidden></label>
                            <input type='text' id='item' name='item' value='$item11' hidden>
                            <input type='submit' value='Trocar'>
                            </form>
                        </li>";
                    }
                    if($key['item12'] != NULL){
                        $item12 = $key['item12'];
                        echo "<li>".$key['item12']."
                            <form action='selec_item.php' method='post'>
                            <label for='nome' hidden></label>
                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                            <label for='item' hidden></label>
                            <input type='text' id='item' name='item' value='$item12' hidden>
                            <input type='submit' value='Trocar'>
                            </form>
                        </li>";
                    }
                    if($key['item13'] != NULL){
                        $item13 = $key['item13'];
                        echo "<li>".$key['item13']."
                            <form action='selec_item.php' method='post'>
                            <label for='nome' hidden></label>
                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                            <label for='item' hidden></label>
                            <input type='text' id='item' name='item' value='$item13' hidden>
                            <input type='submit' value='Trocar'>
                            </form>
                        </li>";
                    }
                    if($key['item14'] != NULL){
                        $item14 = $key['item14'];
                        echo "<li>".$key['item14']."
                            <form action='selec_item.php' method='post'>
                            <label for='nome' hidden></label>
                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                            <label for='item' hidden></label>
                            <input type='text' id='item' name='item' value='$item14' hidden>
                            <input type='submit' value='Trocar'>
                            </form>
                        </li>";
                    }
                    if($key['item15'] != NULL){
                        $item15 = $key['item15'];
                        echo "<li>".$key['item15']."
                            <form action='selec_item.php' method='post'>
                            <label for='nome' hidden></label>
                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                            <label for='item' hidden></label>
                            <input type='text' id='item' name='item' value='$item15' hidden>
                            <input type='submit' value='Trocar'>
                            </form>
                        </li>";
                    }
                    if($key['item16'] != NULL){
                        $item16 = $key['item16'];
                        echo "<li>".$key['item16']."
                            <form action='selec_item.php' method='post'>
                            <label for='nome' hidden></label>
                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                            <label for='item' hidden></label>
                            <input type='text' id='item' name='item' value='$item16' hidden>
                            <input type='submit' value='Trocar'>
                            </form>
                        </li>";
                    }
                    if($key['item17'] != NULL){
                        $item17 = $key['item17'];
                        echo "<li>".$key['item17']."
                            <form action='selec_item.php' method='post'>
                            <label for='nome' hidden></label>
                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                            <label for='item' hidden></label>
                            <input type='text' id='item' name='item' value='$item17' hidden>
                            <input type='submit' value='Trocar'>
                            </form>
                        </li>";
                    }
                    if($key['item18'] != NULL){
                        $item18 = $key['item18'];
                        echo "<li>".$key['item18']."
                            <form action='selec_item.php' method='post'>
                            <label for='nome' hidden></label>
                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                            <label for='item' hidden></label>
                            <input type='text' id='item' name='item' value='$item18' hidden>
                            <input type='submit' value='Trocar'>
                            </form>
                        </li>";
                    }
                    if($key['item19'] != NULL){
                        $item19 = $key['item19'];
                        echo "<li>".$key['item19']."
                            <form action='selec_item.php' method='post'>
                            <label for='nome' hidden></label>
                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                            <label for='item' hidden></label>
                            <input type='text' id='item' name='item' value='$item19' hidden>
                            <input type='submit' value='Trocar'>
                            </form>
                        </li>";
                    }
                    if($key['item20'] != NULL){
                        $item20 = $key['item20'];
                        echo "<li>".$key['item20']."
                            <form action='selec_item.php' method='post'>
                            <label for='nome' hidden></label>
                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                            <label for='item' hidden></label>
                            <input type='text' id='item' name='item' value='$item20' hidden>
                            <input type='submit' value='Trocar'>
                            </form>
                        </li>";
                    }
                    if($key['item21'] != NULL){
                        $item21 = $key['item21'];
                        echo "<li>".$key['item21']."
                            <form action='selec_item.php' method='post'>
                            <label for='nome' hidden></label>
                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                            <label for='item' hidden></label>
                            <input type='text' id='item' name='item' value='$item21' hidden>
                            <input type='submit' value='Trocar'>
                            </form>
                        </li>";
                    }
                    if($key['item22'] != NULL){
                        $item22 = $key['item22'];
                        echo "<li>".$key['item22']."
                            <form action='selec_item.php' method='post'>
                            <label for='nome' hidden></label>
                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                            <label for='item' hidden></label>
                            <input type='text' id='item' name='item' value='$item22' hidden>
                            <input type='submit' value='Trocar'>
                            </form>
                        </li>";
                    }
                    if($key['item23'] != NULL){
                        $item23 = $key['item23'];
                        echo "<li>".$key['item23']."
                            <form action='selec_item.php' method='post'>
                            <label for='nome' hidden></label>
                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                            <label for='item' hidden></label>
                            <input type='text' id='item' name='item' value='$item23' hidden>
                            <input type='submit' value='Trocar'>
                            </form>
                        </li>";
                    }
                    if($key['item24'] != NULL){
                        $item24 = $key['item24'];
                        echo "<li>".$key['item24']."
                            <form action='selec_item.php' method='post'>
                            <label for='nome' hidden></label>
                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                            <label for='item' hidden></label>
                            <input type='text' id='item' name='item' value='$item24' hidden>
                            <input type='submit' value='Trocar'>
                            </form>
                        </li>";
                    }
                    if($key['item25'] != NULL){
                        $item25 = $key['item25'];
                        echo "<li>".$key['item25']."
                            <form action='selec_item.php' method='post'>
                            <label for='nome' hidden></label>
                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                            <label for='item' hidden></label>
                            <input type='text' id='item' name='item' value='$item25' hidden>
                            <input type='submit' value='Trocar'>
                            </form>
                        </li>";
                    }
                echo "</ul>";
            }
        }
        $id = $_SESSION['personagem3'];
        $personagem = $repositorio->MostrarPersonagem($id);
        foreach ($personagem as $key) {
            $nome = $key['nome'];
            echo "<h2>Nome: ".$key['nome']."</h2>";
            echo "<h2>Classe: ".$key['classe']."</h2>";
            echo "<h2>Nível: ".$key['nivel']."</h2>";
            echo "<h2>Dinheiro: ".$key['dinheiro']."</h2>";
            $id_pers = $key['id_pers'];
            $dinheiro = $key['dinheiro'];
            if($dinheiro > 0){
                echo "<h2>Dar Dinheiro: 
                        <form action='escolher_dinheiro.php' method='post'>
                            <input type='text' name='id_remetente' value='$id_pers' hidden>
                            <input type='number' name='dinheiro_total' value='$dinheiro' hidden>
                            <input type='number' min='1' max='$dinheiro' name='dinheiro'>
                            <input type='submit' value='Continuar'>
                        </form>
                    </h2>";
            }
            $inventario = $repositorio->MostrarInventario($nome);
            foreach ($inventario as $key) {
                echo "<ul>";
                    $item1 = $key['item1'];
                    echo "<li>".$key['item1']."
                        <form action='selec_item.php' method='post'>
                        <label for='nome' hidden></label>
                        <input type='text' id='nome' name='nome' value='$nome' hidden>
                        <label for='item' hidden></label>
                        <input type='text' id='item' name='item' value='$item1' hidden>
                        <input type='submit' value='Trocar'>
                        </form>
                    </li>";
                    $item2 = $key['item2'];
                    echo "<li>".$key['item2']."
                        <form action='selec_item.php' method='post'>
                        <label for='nome' hidden></label>
                        <input type='text' id='nome' name='nome' value='$nome' hidden>
                        <label for='item' hidden></label>
                        <input type='text' id='item' name='item' value='$item2' hidden>
                        <input type='submit' value='Trocar'>
                        </form>
                    </li>";
                    if($key['item3'] != NULL){
                        $item3 = $key['item3'];
                        echo "<li>".$key['item3']."
                            <form action='selec_item.php' method='post'>
                            <label for='nome' hidden></label>
                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                            <label for='item' hidden></label>
                            <input type='text' id='item' name='item' value='$item3' hidden>
                            <input type='submit' value='Trocar'>
                            </form>
                        </li>";
                    }
                    if($key['item4'] != NULL){
                        $item4 = $key['item4'];
                        echo "<li>".$key['item4']."
                            <form action='selec_item.php' method='post'>
                            <label for='nome' hidden></label>
                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                            <label for='item' hidden></label>
                            <input type='text' id='item' name='item' value='$item4' hidden>
                            <input type='submit' value='Trocar'>
                            </form>
                        </li>";
                    }
                    if($key['item5'] != NULL){
                        $item5 = $key['item5'];
                        echo "<li>".$key['item5']."
                            <form action='selec_item.php' method='post'>
                            <label for='nome' hidden></label>
                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                            <label for='item' hidden></label>
                            <input type='text' id='item' name='item' value='$item5' hidden>
                            <input type='submit' value='Trocar'>
                            </form>
                        </li>";
                    }
                    if($key['item6'] != NULL){
                        $item6 = $key['item6'];
                        echo "<li>".$key['item6']."
                            <form action='selec_item.php' method='post'>
                            <label for='nome' hidden></label>
                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                            <label for='item' hidden></label>
                            <input type='text' id='item' name='item' value='$item6' hidden>
                            <input type='submit' value='Trocar'>
                            </form>
                        </li>";
                    }
                    if($key['item7'] != NULL){
                        $item7 = $key['item7'];
                        echo "<li>".$key['item7']."
                            <form action='selec_item.php' method='post'>
                            <label for='nome' hidden></label>
                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                            <label for='item' hidden></label>
                            <input type='text' id='item' name='item' value='$item7' hidden>
                            <input type='submit' value='Trocar'>
                            </form>
                        </li>";
                    }
                    if($key['item8'] != NULL){
                        $item8 = $key['item8'];
                        echo "<li>".$key['item8']."
                            <form action='selec_item.php' method='post'>
                            <label for='nome' hidden></label>
                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                            <label for='item' hidden></label>
                            <input type='text' id='item' name='item' value='$item8' hidden>
                            <input type='submit' value='Trocar'>
                            </form>
                        </li>";
                    }
                    if($key['item9'] != NULL){
                        $item9 = $key['item9'];
                        echo "<li>".$key['item9']."
                            <form action='selec_item.php' method='post'>
                            <label for='nome' hidden></label>
                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                            <label for='item' hidden></label>
                            <input type='text' id='item' name='item' value='$item9' hidden>
                            <input type='submit' value='Trocar'>
                            </form>
                        </li>";
                    }
                    if($key['item10'] != NULL){
                        $item10 = $key['item10'];
                        echo "<li>".$key['item10']."
                            <form action='selec_item.php' method='post'>
                            <label for='nome' hidden></label>
                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                            <label for='item' hidden></label>
                            <input type='text' id='item' name='item' value='$item10' hidden>
                            <input type='submit' value='Trocar'>
                            </form>
                        </li>";
                    }
                    if($key['item11'] != NULL){
                        $item11 = $key['item11'];
                        echo "<li>".$key['item11']."
                            <form action='selec_item.php' method='post'>
                            <label for='nome' hidden></label>
                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                            <label for='item' hidden></label>
                            <input type='text' id='item' name='item' value='$item11' hidden>
                            <input type='submit' value='Trocar'>
                            </form>
                        </li>";
                    }
                    if($key['item12'] != NULL){
                        $item12 = $key['item12'];
                        echo "<li>".$key['item12']."
                            <form action='selec_item.php' method='post'>
                            <label for='nome' hidden></label>
                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                            <label for='item' hidden></label>
                            <input type='text' id='item' name='item' value='$item12' hidden>
                            <input type='submit' value='Trocar'>
                            </form>
                        </li>";
                    }
                    if($key['item13'] != NULL){
                        $item13 = $key['item13'];
                        echo "<li>".$key['item13']."
                            <form action='selec_item.php' method='post'>
                            <label for='nome' hidden></label>
                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                            <label for='item' hidden></label>
                            <input type='text' id='item' name='item' value='$item13' hidden>
                            <input type='submit' value='Trocar'>
                            </form>
                        </li>";
                    }
                    if($key['item14'] != NULL){
                        $item14 = $key['item14'];
                        echo "<li>".$key['item14']."
                            <form action='selec_item.php' method='post'>
                            <label for='nome' hidden></label>
                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                            <label for='item' hidden></label>
                            <input type='text' id='item' name='item' value='$item14' hidden>
                            <input type='submit' value='Trocar'>
                            </form>
                        </li>";
                    }
                    if($key['item15'] != NULL){
                        $item15 = $key['item15'];
                        echo "<li>".$key['item15']."
                            <form action='selec_item.php' method='post'>
                            <label for='nome' hidden></label>
                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                            <label for='item' hidden></label>
                            <input type='text' id='item' name='item' value='$item15' hidden>
                            <input type='submit' value='Trocar'>
                            </form>
                        </li>";
                    }
                    if($key['item16'] != NULL){
                        $item16 = $key['item16'];
                        echo "<li>".$key['item16']."
                            <form action='selec_item.php' method='post'>
                            <label for='nome' hidden></label>
                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                            <label for='item' hidden></label>
                            <input type='text' id='item' name='item' value='$item16' hidden>
                            <input type='submit' value='Trocar'>
                            </form>
                        </li>";
                    }
                    if($key['item17'] != NULL){
                        $item17 = $key['item17'];
                        echo "<li>".$key['item17']."
                            <form action='selec_item.php' method='post'>
                            <label for='nome' hidden></label>
                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                            <label for='item' hidden></label>
                            <input type='text' id='item' name='item' value='$item17' hidden>
                            <input type='submit' value='Trocar'>
                            </form>
                        </li>";
                    }
                    if($key['item18'] != NULL){
                        $item18 = $key['item18'];
                        echo "<li>".$key['item18']."
                            <form action='selec_item.php' method='post'>
                            <label for='nome' hidden></label>
                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                            <label for='item' hidden></label>
                            <input type='text' id='item' name='item' value='$item18' hidden>
                            <input type='submit' value='Trocar'>
                            </form>
                        </li>";
                    }
                    if($key['item19'] != NULL){
                        $item19 = $key['item19'];
                        echo "<li>".$key['item19']."
                            <form action='selec_item.php' method='post'>
                            <label for='nome' hidden></label>
                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                            <label for='item' hidden></label>
                            <input type='text' id='item' name='item' value='$item19' hidden>
                            <input type='submit' value='Trocar'>
                            </form>
                        </li>";
                    }
                    if($key['item20'] != NULL){
                        $item20 = $key['item20'];
                        echo "<li>".$key['item20']."
                            <form action='selec_item.php' method='post'>
                            <label for='nome' hidden></label>
                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                            <label for='item' hidden></label>
                            <input type='text' id='item' name='item' value='$item20' hidden>
                            <input type='submit' value='Trocar'>
                            </form>
                        </li>";
                    }
                    if($key['item21'] != NULL){
                        $item21 = $key['item21'];
                        echo "<li>".$key['item21']."
                            <form action='selec_item.php' method='post'>
                            <label for='nome' hidden></label>
                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                            <label for='item' hidden></label>
                            <input type='text' id='item' name='item' value='$item21' hidden>
                            <input type='submit' value='Trocar'>
                            </form>
                        </li>";
                    }
                    if($key['item22'] != NULL){
                        $item22 = $key['item22'];
                        echo "<li>".$key['item22']."
                            <form action='selec_item.php' method='post'>
                            <label for='nome' hidden></label>
                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                            <label for='item' hidden></label>
                            <input type='text' id='item' name='item' value='$item22' hidden>
                            <input type='submit' value='Trocar'>
                            </form>
                        </li>";
                    }
                    if($key['item23'] != NULL){
                        $item23 = $key['item23'];
                        echo "<li>".$key['item23']."
                            <form action='selec_item.php' method='post'>
                            <label for='nome' hidden></label>
                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                            <label for='item' hidden></label>
                            <input type='text' id='item' name='item' value='$item23' hidden>
                            <input type='submit' value='Trocar'>
                            </form>
                        </li>";
                    }
                    if($key['item24'] != NULL){
                        $item24 = $key['item24'];
                        echo "<li>".$key['item24']."
                            <form action='selec_item.php' method='post'>
                            <label for='nome' hidden></label>
                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                            <label for='item' hidden></label>
                            <input type='text' id='item' name='item' value='$item24' hidden>
                            <input type='submit' value='Trocar'>
                            </form>
                        </li>";
                    }
                    if($key['item25'] != NULL){
                        $item25 = $key['item25'];
                        echo "<li>".$key['item25']."
                            <form action='selec_item.php' method='post'>
                            <label for='nome' hidden></label>
                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                            <label for='item' hidden></label>
                            <input type='text' id='item' name='item' value='$item25' hidden>
                            <input type='submit' value='Trocar'>
                            </form>
                        </li>";
                    }
                echo "</ul>";
            }
        }
        $id = $_SESSION['personagem4'];
        $personagem = $repositorio->MostrarPersonagem($id);
        foreach ($personagem as $key) {
            $nome = $key['nome'];
            echo "<h2>Nome: ".$key['nome']."</h2>";
            echo "<h2>Classe: ".$key['classe']."</h2>";
            echo "<h2>Nível: ".$key['nivel']."</h2>";
            echo "<h2>Dinheiro: ".$key['dinheiro']."</h2>";
            $id_pers = $key['id_pers'];
            $dinheiro = $key['dinheiro'];
            if($dinheiro > 0){
                echo "<h2>Dar Dinheiro: 
                        <form action='escolher_dinheiro.php' method='post'>
                            <input type='text' name='id_remetente' value='$id_pers' hidden>
                            <input type='number' name='dinheiro_total' value='$dinheiro' hidden>
                            <input type='number' min='1' max='$dinheiro' name='dinheiro'>
                            <input type='submit' value='Continuar'>
                        </form>
                    </h2>";
            }
            $inventario = $repositorio->MostrarInventario($nome);
            foreach ($inventario as $key) {
                echo "<ul>";
                    $item1 = $key['item1'];
                    echo "<li>".$key['item1']."
                        <form action='selec_item.php' method='post'>
                        <label for='nome' hidden></label>
                        <input type='text' id='nome' name='nome' value='$nome' hidden>
                        <label for='item' hidden></label>
                        <input type='text' id='item' name='item' value='$item1' hidden>
                        <input type='submit' value='Trocar'>
                        </form>
                    </li>";
                    $item2 = $key['item2'];
                    echo "<li>".$key['item2']."
                        <form action='selec_item.php' method='post'>
                        <label for='nome' hidden></label>
                        <input type='text' id='nome' name='nome' value='$nome' hidden>
                        <label for='item' hidden></label>
                        <input type='text' id='item' name='item' value='$item2' hidden>
                        <input type='submit' value='Trocar'>
                        </form>
                    </li>";
                    if($key['item3'] != NULL){
                        $item3 = $key['item3'];
                        echo "<li>".$key['item3']."
                            <form action='selec_item.php' method='post'>
                            <label for='nome' hidden></label>
                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                            <label for='item' hidden></label>
                            <input type='text' id='item' name='item' value='$item3' hidden>
                            <input type='submit' value='Trocar'>
                            </form>
                        </li>";
                    }
                    if($key['item4'] != NULL){
                        $item4 = $key['item4'];
                        echo "<li>".$key['item4']."
                            <form action='selec_item.php' method='post'>
                            <label for='nome' hidden></label>
                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                            <label for='item' hidden></label>
                            <input type='text' id='item' name='item' value='$item4' hidden>
                            <input type='submit' value='Trocar'>
                            </form>
                        </li>";
                    }
                    if($key['item5'] != NULL){
                        $item5 = $key['item5'];
                        echo "<li>".$key['item5']."
                            <form action='selec_item.php' method='post'>
                            <label for='nome' hidden></label>
                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                            <label for='item' hidden></label>
                            <input type='text' id='item' name='item' value='$item5' hidden>
                            <input type='submit' value='Trocar'>
                            </form>
                        </li>";
                    }
                    if($key['item6'] != NULL){
                        $item6 = $key['item6'];
                        echo "<li>".$key['item6']."
                            <form action='selec_item.php' method='post'>
                            <label for='nome' hidden></label>
                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                            <label for='item' hidden></label>
                            <input type='text' id='item' name='item' value='$item6' hidden>
                            <input type='submit' value='Trocar'>
                            </form>
                        </li>";
                    }
                    if($key['item7'] != NULL){
                        $item7 = $key['item7'];
                        echo "<li>".$key['item7']."
                            <form action='selec_item.php' method='post'>
                            <label for='nome' hidden></label>
                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                            <label for='item' hidden></label>
                            <input type='text' id='item' name='item' value='$item7' hidden>
                            <input type='submit' value='Trocar'>
                            </form>
                        </li>";
                    }
                    if($key['item8'] != NULL){
                        $item8 = $key['item8'];
                        echo "<li>".$key['item8']."
                            <form action='selec_item.php' method='post'>
                            <label for='nome' hidden></label>
                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                            <label for='item' hidden></label>
                            <input type='text' id='item' name='item' value='$item8' hidden>
                            <input type='submit' value='Trocar'>
                            </form>
                        </li>";
                    }
                    if($key['item9'] != NULL){
                        $item9 = $key['item9'];
                        echo "<li>".$key['item9']."
                            <form action='selec_item.php' method='post'>
                            <label for='nome' hidden></label>
                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                            <label for='item' hidden></label>
                            <input type='text' id='item' name='item' value='$item9' hidden>
                            <input type='submit' value='Trocar'>
                            </form>
                        </li>";
                    }
                    if($key['item10'] != NULL){
                        $item10 = $key['item10'];
                        echo "<li>".$key['item10']."
                            <form action='selec_item.php' method='post'>
                            <label for='nome' hidden></label>
                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                            <label for='item' hidden></label>
                            <input type='text' id='item' name='item' value='$item10' hidden>
                            <input type='submit' value='Trocar'>
                            </form>
                        </li>";
                    }
                    if($key['item11'] != NULL){
                        $item11 = $key['item11'];
                        echo "<li>".$key['item11']."
                            <form action='selec_item.php' method='post'>
                            <label for='nome' hidden></label>
                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                            <label for='item' hidden></label>
                            <input type='text' id='item' name='item' value='$item11' hidden>
                            <input type='submit' value='Trocar'>
                            </form>
                        </li>";
                    }
                    if($key['item12'] != NULL){
                        $item12 = $key['item12'];
                        echo "<li>".$key['item12']."
                            <form action='selec_item.php' method='post'>
                            <label for='nome' hidden></label>
                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                            <label for='item' hidden></label>
                            <input type='text' id='item' name='item' value='$item12' hidden>
                            <input type='submit' value='Trocar'>
                            </form>
                        </li>";
                    }
                    if($key['item13'] != NULL){
                        $item13 = $key['item13'];
                        echo "<li>".$key['item13']."
                            <form action='selec_item.php' method='post'>
                            <label for='nome' hidden></label>
                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                            <label for='item' hidden></label>
                            <input type='text' id='item' name='item' value='$item13' hidden>
                            <input type='submit' value='Trocar'>
                            </form>
                        </li>";
                    }
                    if($key['item14'] != NULL){
                        $item14 = $key['item14'];
                        echo "<li>".$key['item14']."
                            <form action='selec_item.php' method='post'>
                            <label for='nome' hidden></label>
                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                            <label for='item' hidden></label>
                            <input type='text' id='item' name='item' value='$item14' hidden>
                            <input type='submit' value='Trocar'>
                            </form>
                        </li>";
                    }
                    if($key['item15'] != NULL){
                        $item15 = $key['item15'];
                        echo "<li>".$key['item15']."
                            <form action='selec_item.php' method='post'>
                            <label for='nome' hidden></label>
                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                            <label for='item' hidden></label>
                            <input type='text' id='item' name='item' value='$item15' hidden>
                            <input type='submit' value='Trocar'>
                            </form>
                        </li>";
                    }
                    if($key['item16'] != NULL){
                        $item16 = $key['item16'];
                        echo "<li>".$key['item16']."
                            <form action='selec_item.php' method='post'>
                            <label for='nome' hidden></label>
                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                            <label for='item' hidden></label>
                            <input type='text' id='item' name='item' value='$item16' hidden>
                            <input type='submit' value='Trocar'>
                            </form>
                        </li>";
                    }
                    if($key['item17'] != NULL){
                        $item17 = $key['item17'];
                        echo "<li>".$key['item17']."
                            <form action='selec_item.php' method='post'>
                            <label for='nome' hidden></label>
                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                            <label for='item' hidden></label>
                            <input type='text' id='item' name='item' value='$item17' hidden>
                            <input type='submit' value='Trocar'>
                            </form>
                        </li>";
                    }
                    if($key['item18'] != NULL){
                        $item18 = $key['item18'];
                        echo "<li>".$key['item18']."
                            <form action='selec_item.php' method='post'>
                            <label for='nome' hidden></label>
                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                            <label for='item' hidden></label>
                            <input type='text' id='item' name='item' value='$item18' hidden>
                            <input type='submit' value='Trocar'>
                            </form>
                        </li>";
                    }
                    if($key['item19'] != NULL){
                        $item19 = $key['item19'];
                        echo "<li>".$key['item19']."
                            <form action='selec_item.php' method='post'>
                            <label for='nome' hidden></label>
                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                            <label for='item' hidden></label>
                            <input type='text' id='item' name='item' value='$item19' hidden>
                            <input type='submit' value='Trocar'>
                            </form>
                        </li>";
                    }
                    if($key['item20'] != NULL){
                        $item20 = $key['item20'];
                        echo "<li>".$key['item20']."
                            <form action='selec_item.php' method='post'>
                            <label for='nome' hidden></label>
                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                            <label for='item' hidden></label>
                            <input type='text' id='item' name='item' value='$item20' hidden>
                            <input type='submit' value='Trocar'>
                            </form>
                        </li>";
                    }
                    if($key['item21'] != NULL){
                        $item21 = $key['item21'];
                        echo "<li>".$key['item21']."
                            <form action='selec_item.php' method='post'>
                            <label for='nome' hidden></label>
                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                            <label for='item' hidden></label>
                            <input type='text' id='item' name='item' value='$item21' hidden>
                            <input type='submit' value='Trocar'>
                            </form>
                        </li>";
                    }
                    if($key['item22'] != NULL){
                        $item22 = $key['item22'];
                        echo "<li>".$key['item22']."
                            <form action='selec_item.php' method='post'>
                            <label for='nome' hidden></label>
                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                            <label for='item' hidden></label>
                            <input type='text' id='item' name='item' value='$item22' hidden>
                            <input type='submit' value='Trocar'>
                            </form>
                        </li>";
                    }
                    if($key['item23'] != NULL){
                        $item23 = $key['item23'];
                        echo "<li>".$key['item23']."
                            <form action='selec_item.php' method='post'>
                            <label for='nome' hidden></label>
                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                            <label for='item' hidden></label>
                            <input type='text' id='item' name='item' value='$item23' hidden>
                            <input type='submit' value='Trocar'>
                            </form>
                        </li>";
                    }
                    if($key['item24'] != NULL){
                        $item24 = $key['item24'];
                        echo "<li>".$key['item24']."
                            <form action='selec_item.php' method='post'>
                            <label for='nome' hidden></label>
                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                            <label for='item' hidden></label>
                            <input type='text' id='item' name='item' value='$item24' hidden>
                            <input type='submit' value='Trocar'>
                            </form>
                        </li>";
                    }
                    if($key['item25'] != NULL){
                        $item25 = $key['item25'];
                        echo "<li>".$key['item25']."
                            <form action='selec_item.php' method='post'>
                            <label for='nome' hidden></label>
                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                            <label for='item' hidden></label>
                            <input type='text' id='item' name='item' value='$item25' hidden>
                            <input type='submit' value='Trocar'>
                            </form>
                        </li>";
                    }
                echo "</ul>";
            }
        }
    ?>
</body>
</html>