<?php

session_start();
require_once '../../../classes/repositorioTabletop.php'; 
$repositorio = new RepositorioTabletopMySQL();


$sorteio = 2;

$minion = $repositorio->SortearMinion($sorteio);
foreach ($minion as $key) {

    if($sorteio == 1){
        $chance = rand(1,2);
        if($chance == 1){
            $_SESSION['monstro'] = true;
            $minion = "A";
            $img = $repositorio->PuxarImagemMinion($minion)."/zumbi.png";
            $_SESSION['img_monstro'] = "../../$img";
            $_SESSION['nome_monstro'] = "Zumbi";
            $_SESSION['nivel_monstro'] = $key['nível'];

            $quantidade = rand(1,6);
            $_SESSION['quantidade_monstro'] = $quantidade;
            $_SESSION['monstros_defender'] = $quantidade;
            $_SESSION['tesouro_monstro'] = $key['tesouro'];
            if($key['hab1'] != NULL){
                $_SESSION['hab1_monstro'] = $key['hab1'];
            }
            if($key['hab2'] != NULL){
                $_SESSION['hab2_monstro'] = $key['hab2'];
            }
        } else {
            $_SESSION['monstro'] = true;
            $minion = "A";
            $img = $repositorio->PuxarImagemMinion($minion)."/esqueleto.png";
            $_SESSION['img_monstro'] = "../../$img";
            $_SESSION['nome_monstro'] = "Esqueletos";
            $_SESSION['nivel_monstro'] = $key['nível'];

            $quantidade = rand(1,6) + 3;
            $_SESSION['quantidade_monstro'] = $quantidade;
            $_SESSION['monstros_defender'] = $quantidade;
            $_SESSION['tesouro_monstro'] = $key['tesouro'];
            if($key['hab1'] != NULL){
                $_SESSION['hab1_monstro'] = $key['hab1'];
            }
            if($key['hab2'] != NULL){
                $_SESSION['hab2_monstro'] = $key['hab2'];
            }
        }
    } else {
        $_SESSION['monstro'] = true;
        $minion = $key['nome'];
        $img = $repositorio->PuxarImagemMinion($minion);
        $_SESSION['img_monstro'] = "../../$img";
        $_SESSION['nome_monstro'] = $key['nome'];
        $_SESSION['nivel_monstro'] = $key['nível'];
        
        if($key['quantidade'] == "1 + 3"){
            $x = 1;
            $dado = rand(1,6);
            $quantidade = $dado + 3;
        } else if($key['quantidade'] == "1 + 1"){
            $x = 1;
            $dado = rand(1,6);
            $quantidade = $dado + 1;
        } else if($key['quantidade'] == "1d3"){
            $quantidade = rand(1,3);
        } else {
            $x = $key['quantidade'];
            $quantidade = 0;
            while ($x > 0) {
                $dado = rand(1,6);
                $quantidade = $quantidade + $dado;
                $x = $x - 1;
            }
        }
        $_SESSION['quantidade_monstro'] = $quantidade;
        $_SESSION['monstros_defender'] = $quantidade;
        $_SESSION['tesouro_monstro'] = $key['tesouro'];
        if($key['hab1'] != NULL){
            $_SESSION['hab1_monstro'] = $key['hab1'];
        }
        if($key['hab2'] != NULL){
            $_SESSION['hab2_monstro'] = $key['hab2'];
        }
    }
}

header('Location: ../tabletop.php');

?>