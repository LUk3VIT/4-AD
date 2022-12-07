<?php

session_start();
require_once '../../classes/repositorioTabletop.php';  
$repositorio = new RepositorioTabletopMySQL();

if(isset($_SESSION['tesouro_armadilha'])){
    unset($_SESSION['tesouro_armadilha']);
    $_SESSION['tesouro_enc'] = true;
}

$tabela_tesouro = rand(1,6) + $_SESSION['bonus_tesouro'];

if($tabela_tesouro <= 0){
    $_SESSION['tesouro'] = "Nenhum tesouro encontrado!!!";
} else if($tabela_tesouro == 1){
    $_SESSION['valor_tesouro'] = rand(1,6);
    $_SESSION['tesouro'] = "ouro";
} else if($tabela_tesouro == 2){
    $_SESSION['valor_tesouro'] = (rand(1,6)) + (rand(1,6));
    $_SESSION['tesouro'] = "ouro";
} else if($tabela_tesouro == 3){
    $id = rand(1,6);
    $_SESSION['tesouro'] = $repositorio->EscolherMagia($id);
} else if($tabela_tesouro == 4){
    $gema = (rand(1,6) + rand(1,6)) * 5;
    $_SESSION['tesouro'] = "gema";
    $_SESSION['valor_tesouro'] = $gema;
} else if($tabela_tesouro == 5){
    $gema = (rand(1,6) + rand(1,6) + rand(1,6)) * 10;
    $_SESSION['tesouro'] = "gema";
    $_SESSION['valor_tesouro'] = $gema;
} else if($tabela_tesouro >= 6){
    if($_SESSION['nome_boss'] == "Orc Brutal"){
        $_SESSION['valor_tesouro'] = (rand(1,6) + rand(1,6)) * rand(1,6);
        $_SESSION['tesouro'] = "ouro";
    } else if($_SESSION['nome_monstro'] == "Orcs"){
        $_SESSION['valor_tesouro'] = rand(1,6) * rand(1,6);
        $_SESSION['tesouro'] = "ouro";
    } else {
        $tabela_tesouro_magico = rand(1,6);
        if($tabela_tesouro_magico == 1){
            $_SESSION['tesouro'] = "Varinha de Sono";
        } else if($tabela_tesouro_magico == 2){
            $_SESSION['tesouro'] = "Anel de Teleporte";
        } else if($tabela_tesouro_magico == 3){
            $_SESSION['tesouro'] = "Ouro dos Tolos";
        } else if($table_tesouro_magico == 4){
            $arma_magica = rand(1,8);
            if($arma_magica == 1){
                $_SESSION['tesouro'] = "Tonfa Mágica";
            } else if($arma_magica == 2){
                $_SESSION['tesouro'] = "Adaga Mágica";
            } else if($arma_magica == 3){
                $_SESSION['tesouro'] = "Funda Mágica";
            } else if($arma_magica == 4){
                $_SESSION['tesouro'] = "Arco Mágico";
            } else if($arma_magica == 5){
                $_SESSION['tesouro'] = "Mangual Mágico";
            } else if($arma_magica == 6){
                $_SESSION['tesouro'] = "Espada Curta Mágica";
            } else if($arma_magica == 7){
                $_SESSION['tesouro'] = "Espada Montante Mágica";
            } else if($arma_magica == 8){
                $_SESSION['tesouro'] = "Martelo de Guerra Mágico";
            }
        } else if($tabela_tesouro_magico == 5){
            $_SESSION['tesouro'] = "Poção de Cura";
        } else if($tabela_tesouro_magico == 6){
            $_SESSION['tesouro'] = "Cajado com Bola de Fogo";
        }
    } 
}

header('Location: tabletop.php');

?>