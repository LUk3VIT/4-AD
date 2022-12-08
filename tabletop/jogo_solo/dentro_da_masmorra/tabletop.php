<?php

session_start();
require_once '../../classes/repositorioTabletop.php'; 
$repositorio = new RepositorioTabletopMySQL();


if(isset($_SESSION['mapa_atual'])){
     
} else {
    header('Location: mapa/sortear_novo_mapa.php');
}
 
if(isset($_SESSION['ataque_surpresa'])){

} else {
    if(isset($_SESSION['teste_goblins'])){

    } else {
        if(isset($_SESSION['nome_monstro']) && $_SESSION['nome_monstro'] == "Goblins"){
            $_SESSION['teste_goblins'] = true;
            $dado = 1;
            if($dado == 1){
                $_SESSION['ataque_surpresa'] = true;
                header('Location: passar_turno.php');
                exit;
            } 
        }
    }
}

if(isset($_SESSION['boss']) && isset($_SESSION['fire_blast'])){
    $id = $_SESSION['personagem1'];
    $personagem = $repositorio->MostrarPersonagem($id);
    foreach ($personagem as $key) {
        $classe = $key['classe'];
        $nivel = $key['nivel'];
        if($classe == "Clérigo"){
            $dado = rand(1,6);
            if($nivel == 1){
                $dado = $dado + 0;
            } else if($nivel == 3){
                $dado = $dado + 1;
            } else if($nivel == 5){
                $dado = $dado + 2;
            } else {
                $dado = $dado + ($nivel / 2);
            }
            if($dado >= 6){
                $contador = 1;
            } else {
                $_SESSION['vida_atual_personagem1'] = $_SESSION['vida_atual_personagem1'] - 2;
                $contador = 0;
            }
        } else {
            $dado = rand(1,6);
            if($dado >= 6){
                $contador = 1;
            } else {
                $_SESSION['vida_atual_personagem1'] = $_SESSION['vida_atual_personagem1'] - 2;
                $contador = 0;
            }
        }
    }

    $id = $_SESSION['personagem2'];
    $personagem = $repositorio->MostrarPersonagem($id);
    foreach ($personagem as $key) {
        $classe = $key['classe'];
        $nivel = $key['nivel'];
        if($classe == "Clérigo"){
            $dado = rand(1,6);
            if($nivel == 1){
                $dado = $dado + 0;
            } else if($nivel == 3){
                $dado = $dado + 1;
            } else if($nivel == 5){
                $dado = $dado + 2;
            } else {
                $dado = $dado + ($nivel / 2);
            }
            if($dado >= 6){
                $contador = $contador + 1;
            } else {
                $_SESSION['vida_atual_personagem2'] = $_SESSION['vida_atual_personagem2'] - 2;
            }
        } else {
            $dado = rand(1,6);
            if($dado >= 6){
                $contador = $contador + 1;
            } else {
                $_SESSION['vida_atual_personagem2'] = $_SESSION['vida_atual_personagem2'] - 2;
            }
        }
    }

    $id = $_SESSION['personagem3'];
    $personagem = $repositorio->MostrarPersonagem($id);
    foreach ($personagem as $key) {
        $classe = $key['classe'];
        $nivel = $key['nivel'];
        if($classe == "Clérigo"){
            $dado = rand(1,6);
            if($nivel == 1){
                $dado = $dado + 0;
            } else if($nivel == 3){
                $dado = $dado + 1;
            } else if($nivel == 5){
                $dado = $dado + 2;
            } else {
                $dado = $dado + ($nivel / 2);
            }
            if($dado >= 6){
                $contador = $contador + 1;
            } else {
                $_SESSION['vida_atual_personagem3'] = $_SESSION['vida_atual_personagem3'] - 2;
            }
        } else {
            $dado = rand(1,6);
            if($dado >= 6){
                $contador = $contador + 1;
            } else {
                $_SESSION['vida_atual_personagem3'] = $_SESSION['vida_atual_personagem3'] - 2;
            }
        }
    }

    $id = $_SESSION['personagem4'];
    $personagem = $repositorio->MostrarPersonagem($id);
    foreach ($personagem as $key) {
        $classe = $key['classe'];
        $nivel = $key['nivel'];
        if($classe == "Clérigo"){
            $dado = rand(1,6);
            if($nivel == 1){
                $dado = $dado + 0;
            } else if($nivel == 3){
                $dado = $dado + 1;
            } else if($nivel == 5){
                $dado = $dado + 2;
            } else {
                $dado = $dado + ($nivel / 2);
            }
            if($dado >= 6){
                $contador = $contador + 1;
            } else {
                $_SESSION['vida_atual_personagem4'] = $_SESSION['vida_atual_personagem4'] - 2;
            }
        } else {
            $dado = rand(1,6);
            if($dado >= 6){
                $contador = $contador + 1;
            } else {
                $_SESSION['vida_atual_personagem4'] = $_SESSION['vida_atual_personagem4'] - 2;
            }
        }
    }

    unset($_SESSION['fire_blast']);
}

if(isset($_SESSION['boss']) && $_SESSION['nome_boss'] == "Catoplebas" && isset($_SESSION['olhar_catoplebas'])){
    $dado = rand(1,6);
    if($dado >= 4){
        
    } else {
        $_SESSION['vida_atual_personagem1'] = $_SESSION['vida_atual_personagem1'] - 1;
    }
        
    $dado = rand(1,6);
    if($dado >= 4){
        
    } else {
        $_SESSION['vida_atual_personagem2'] = $_SESSION['vida_atual_personagem2'] - 1;
    }

    $dado = rand(1,6);
    if($dado >= 4){
        
    } else {
        $_SESSION['vida_atual_personagem3'] = $_SESSION['vida_atual_personagem3'] - 1;
    }

    $dado = rand(1,6);
    if($dado >= 4){
        
    } else {
        $_SESSION['vida_atual_personagem4'] = $_SESSION['vida_atual_personagem4'] - 1;
    }

    unset($_SESSION['olhar_catoplebas']);
}



    if(isset($_SESSION['nome_monstro']) && $_SESSION['nome_monstro'] == "Trolls"){
        if(isset($_SESSION['trolls_mortos'])){
            while($_SESSION['trolls_mortos'] > 0){
                $dado = rand(1,6);
                if($dado == 5 || $dado == 6){
                    $_SESSION['quantidade_monstro'] = $_SESSION['quantidade_monstro'] + 1;
                    $_SESSION['monstros_defender'] = $_SESSION['monstros_defender'] + 1;
                    $_SESSION['trolls_mortos'] = $_SESSION['trolls_mortos'] - 1;
                    $_SESSION['trolls_ressussitados'] = true;
                } else {
                    $_SESSION['trolls_mortos'] = $_SESSION['trolls_mortos'] - 1;
                }
            }
        }
    }


//if(isset($_SESSION['quantidade_monstro'])){
//    if(isset($_SESSION['numero_monstro'])){
//        $div = $_SESSION['numero_monstro'] / 2;
//        if($_SESSION['quantidade_monstro'] <= $div){
//           if(isset($_SESSION['reaçao'])){
//
//           } else {
//               header('Location: moral_monstros.php');
//            }
//        }
//    } else {
//        $_SESSION['numero_monstro'] = $_SESSION['quantidade_monstro'];
//    }
//} 

if(isset($_SESSION['turno'])){

} else {
    $_SESSION['turno'] = $_SESSION['turno1'];
}

if(isset($_SESSION['quantidade_personagens'])){

} else {
    $_SESSION['quantidade_personagens'] = 4;
}

if(isset($_SESSION['bonus'])){

} else {
    $_SESSION['bonus'] = "";
}

if(isset($_SESSION['inicio'])){
    $turno = $_SESSION['turno'];
    if($_SESSION['turno'] == $_SESSION['personagem1']){
        $a = "1";
    } else if($_SESSION['turno'] == $_SESSION['personagem2']){
        $a = "2";
    } else if($_SESSION['turno'] == $_SESSION['personagem3']){
        $a = "3";
    } else if($_SESSION['turno'] == $_SESSION['personagem4']){
        $a = "4"; 
    } else {
        $a = "monstros";
    }
    
} else { 
    $_SESSION['turno'] = $_SESSION['turno1'];
    $turno = $_SESSION['turno1'];
    $_SESSION['inicio'] = true;
    if($_SESSION['turno'] == $_SESSION['personagem1']){
        $a = "1";
    } else if($_SESSION['turno'] == $_SESSION['personagem2']){
        $a = "2";
    } else if($_SESSION['turno'] == $_SESSION['personagem3']){
        $a = "3";
    } else if($_SESSION['turno'] == $_SESSION['personagem4']){
        $a = "4";
    } 
}

if(isset($_SESSION["personagem".$a."_pedra"]) && $_SESSION['turno'] == $_SESSION["personagem".$a."_pedra"]){
    header('Location: passar_turno.php');
    exit;
}

//$_SESSION['turno'] = "mapa";


if(isset($_SESSION['vida_atual_personagem1'])){
    $id = $_SESSION['personagem1'];
    $personagem1 = $repositorio->MostrarPersonagem($id);
    foreach ($personagem1 as $key) {
        $vida_maxima_personagem1 = $key['vida'];
        $nome_personagem1 = $key['nome'];
        $img_personagem1 = $key['img'];
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
        $img_personagem1 = $key['img'];
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
        $img_personagem2 = $key['img'];
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
        $img_personagem2 = $key['img'];
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
        $img_personagem3 = $key['img'];
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
        $img_personagem3 = $key['img'];
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
        $img_personagem4 = $key['img'];
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
        $img_personagem4 = $key['img'];
        $classe_personagem4 = $key['classe'];
        $nivel_personagem4 = $key['nivel'];
        $ataque_personagem4 = $key['ataque'];
        $defesa_personagem4 = $key['defesa'];
    }
}

if(isset($a) && isset($_SESSION["cura_personagem$a"])){

} else {
    if(isset($a)){
        $_SESSION["cura_personagem$a"] = 3;
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tabletop</title>
    <link rel="stylesheet" href="../../../assets/style/reset.css">
    <link rel="stylesheet" href="../../../assets/style/tabletopJogo.css">  
</head>
<body class='tabletop'>
<div class='cima'>
    <div class="monstros">
        <div class='monstros2'>
        <?php
            if(isset($_SESSION['monstro'])){
                if($_SESSION['quantidade_monstro'] > 0){
                    echo "<img class='monstro__img' src='".$_SESSION['img_monstro']."'>";
                    echo "<h3>Nome: ".$_SESSION['nome_monstro']."</h3>";
                    echo "<h3>Nível: ".$_SESSION['nivel_monstro']."</h3>";
                    echo "<h3>Quantidade: ".$_SESSION['quantidade_monstro']."</h3>";
                    if(isset($_SESSION['hab1_monstro'])){
                        echo "<h3>Características: </h3>";
                        echo "<li>".$_SESSION['hab1_monstro']."</li>";
                    }
                    if(isset($_SESSION['hab2_monstro'])){
                        echo "<li>".$_SESSION['hab2_monstro']."</li>";
                    }

                    echo "<br>";
                    if(isset($_SESSION['ataque_surpresa']) && $_SESSION['ataque_surpresa'] == true){
                        echo "<p style='color:red'>Ataque Surpresa!!! Por conta de ser um ataque desprevinido a ordem será primeiro os personagens com arco ou funda, depois os monstros e depois volta-se a ordem normal</p>";
                    } else if(isset($_SESSION['trolls_ressussitados'])){
                        echo "<p style='color:red'>Trolls ressusitados, para matá-los com certeza precisa-se usar uma arma cortante ou magia</p>";
                    }
                } 
            } else if(isset($_SESSION['boss'])){
                if($_SESSION['nome_boss'] == "Medusa"){
                    if(isset($_SESSION['olhar_medusa'])){

                    } else {
                        $id = $_SESSION['personagem1'];
                        $personagem = $repositorio->MostrarPersonagem($id);
                        foreach ($personagem as $key) {
                            $classe = $key['classe'];
                            $nivel = $key['nivel'];
                            $dado = 3;
                            if($classe == "Mago"){
                                if($nivel == 1){
                                    $nivel = 0;
                                } else if($nivel == 3){
                                    $nivel = 1;
                                } else if($nivel == 5){
                                    $nivel = 2;
                                } else {
                                    $nivel = $nivel / 2;
                                }
                                $chance = $dado + $nivel;
                                if($chance < 4){
                                    $_SESSION['personagem1_pedra'] = $_SESSION['personagem1'];
                                } 
                            } else {
                                $chance = $dado;
                                if($chance < 4){
                                    $_SESSION['personagem1_pedra'] = $_SESSION['personagem1'];
                                }
                            }
                        }

                        $id = $_SESSION['personagem2'];
                        $personagem = $repositorio->MostrarPersonagem($id);
                        foreach ($personagem as $key) {
                            $classe = $key['classe'];
                            $nivel = $key['nivel'];
                            $dado = rand(1,6);
                            if($classe == "Mago"){
                                if($nivel == 1){
                                    $nivel = 0;
                                } else if($nivel == 3){
                                    $nivel = 1;
                                } else if($nivel == 5){
                                    $nivel = 2;
                                } else {
                                    $nivel = $nivel / 2;
                                }
                                $chance = $dado + $nivel;
                                if($chance < 4){
                                    $_SESSION['personagem2_pedra'] = $_SESSION['personagem2'];
                                } 
                            } else {
                                $chance = $dado;
                                if($chance < 4){
                                    $_SESSION['personagem2_pedra'] = $_SESSION['personagem2'];
                                }
                            }
                        }

                        $id = $_SESSION['personagem3'];
                        $personagem = $repositorio->MostrarPersonagem($id);
                        foreach ($personagem as $key) {
                            $classe = $key['classe'];
                            $nivel = $key['nivel'];
                            $dado = rand(1,6);
                            if($classe == "Mago"){
                                if($nivel == 1){
                                    $nivel = 0;
                                } else if($nivel == 3){
                                    $nivel = 1;
                                } else if($nivel == 5){
                                    $nivel = 2;
                                } else {
                                    $nivel = $nivel / 2;
                                }
                                $chance = $dado + $nivel;
                                if($chance < 4){
                                    $_SESSION['personagem3_pedra'] = $_SESSION['personagem3'];
                                } 
                            } else {
                                $chance = $dado;
                                if($chance < 4){
                                    $_SESSION['personagem3_pedra'] = $_SESSION['personagem3'];
                                }
                            }
                        }

                        $id = $_SESSION['personagem4'];
                        $personagem = $repositorio->MostrarPersonagem($id);
                        foreach ($personagem as $key) {
                            $classe = $key['classe'];
                            $nivel = $key['nivel'];
                            $dado = rand(1,6);
                            if($classe == "Mago"){
                                if($nivel == 1){
                                    $nivel = 0;
                                } else if($nivel == 3){
                                    $nivel = 1;
                                } else if($nivel == 5){
                                    $nivel = 2;
                                } else {
                                    $nivel = $nivel / 2;
                                }
                                $chance = $dado + $nivel;
                                if($chance < 4){
                                    $_SESSION['personagem4_pedra'] = $_SESSION['personagem4'];
                                } 
                            } else {
                                $chance = $dado;
                                if($chance < 4){
                                    $_SESSION['personagem4_pedra'] = $_SESSION['personagem4'];
                                }
                            }
                        }

                        $_SESSION['olhar_medusa'] = true;
                    }    
                }
                if(isset($_SESSION['vida_atual_boss'])){
                    if(isset($_SESSION['tirar_nivel']) && $_SESSION['tirar_nivel'] == false){
                        
                    } else {
                        if($_SESSION['vida_atual_boss'] < ($_SESSION['vida_total_boss'] / 2)){
                            $_SESSION['nivel_boss'] = $_SESSION['nivel_boss'] - 1;
                            $_SESSION['tirar_nivel'] = false;
                        } 
                    }
                    
                } else {
                    $_SESSION['vida_atual_boss'] = $_SESSION['vida_total_boss'];
                }
                if($_SESSION['vida_atual_boss'] < 0){
                    $_SESSION['vida_atual_boss'] = 0;
                }
                echo "<img src='../../".$_SESSION['img_boss']."' style='width:275px'>";
                echo "<h2>Nome: ".$_SESSION['nome_boss']." - Nível: ".$_SESSION['nivel_boss']." - Ataques: ".$_SESSION['ataques_boss']."</h2>";
                echo "<h2>Vida: ".$_SESSION['vida_atual_boss']."/".$_SESSION['vida_total_boss']."</h2>";
                if(isset($_SESSION['boss_final'])){
                    echo "<h2 style='color:red'>BOSS FINAL</h2>";
                }
                if($_SESSION['hab1_boss'] != NULL){
                    echo "<h2>Características: </h2>";
                    echo "<li>".$_SESSION['hab1_boss']."</li>";
                }
                if($_SESSION['hab2_boss'] != NULL){
                    echo "<li>".$_SESSION['hab2_boss']."</li>";
                }
                if($_SESSION['hab3_boss'] != NULL){
                    echo "<li>".$_SESSION['hab3_boss']."</li>";
                    if(isset($contador) && $contador == 4){
                        echo "<h2 style='color:green'>Senhor do Caos usou Hellfire Blast mas nenhum dos seus personagens sofreu dano</h2>";
                    } else if(isset($contador)){
                        echo "<h2 style='color:red'>Senhor do Caos usou Hellfire Blast!!!</h2>";
                    }
                }
                if($_SESSION['hab4_boss'] != NULL){
                    echo "<li>".$_SESSION['hab4_boss']."</li>";
                } 
            } else if(isset($_SESSION['tesouro_armadilha'])){
                echo "<h2>Tipo: ".$_SESSION['nome_armadilha']." - Nível: ".$_SESSION['nivel_armadilha']."</h2>";
                echo "<img src='".$_SESSION['img_armadilha']."'>";
            }
        ?>
    </div>
    </div>

    <div class="principal">
        <?php 
            // curar com clérigo
            if(isset($_SESSION['confirmar_ataque']) || isset($_SESSION['tesouro_armadilha']) || isset($_SESSION['tesouro_enc']) || isset($_SESSION['monstro']) || isset($_SESSION['boss'])){

            } else {
                if($_SESSION['turno'] != "monstros"){
                    $id = $_SESSION['turno'];
                    $personagem = $repositorio->MostrarPersonagem($id);
                    foreach ($personagem as $key) {
                        $classe = $key['classe'];
                    }
                    if($classe == "Clérigo" || $classe == "Mago" || $classe == "Elfo"){
                        if(isset($_SESSION['escolher_cura'])){
                            echo "<div class='cura__pers'>";
                            
                                $id = $_SESSION['personagem1'];
                                $a = "1";
                                $personagem = $repositorio->MostrarPersonagem($id);
                                foreach ($personagem as $key) {
                                    $img = $key['img'];
                                    $nome = $key['nome'];
                                    $vida = $key['vida'];
                                    echo "<div>";
                                        echo "<img src='../../$img' style='height:260px;width:220px'>";
                                        echo "<h2>Nome: ".$nome." - Vida: ".$_SESSION['vida_atual_personagem1']."/".$vida."</h2>";
                                        echo "<h2 class='cura'><a class='link' href='curar.php?alvo=$a'>Curar</a></h2>";
                                    echo "</div>";
                                }
                            

                            
                                $id = $_SESSION['personagem2'];
                                $a = "2";
                                $personagem = $repositorio->MostrarPersonagem($id);
                                foreach ($personagem as $key) {
                                    $img = $key['img'];
                                    $nome = $key['nome'];
                                    $vida = $key['vida'];
                                    echo "<div>";
                                        echo "<img src='../../$img' style='height:260px;width:220px'>";
                                        echo "<h2>Nome: ".$nome." - Vida: ".$_SESSION['vida_atual_personagem2']."/".$vida."</h2>";
                                        echo "<h2 class='cura'><a class='link' href='curar.php?alvo=$a'>Curar</a></h2>";
                                    echo "</div>";
                                }
                            

                            
                                $id = $_SESSION['personagem3'];
                                $a = "3";
                                $personagem = $repositorio->MostrarPersonagem($id);
                                foreach ($personagem as $key) {
                                    $img = $key['img'];
                                    $nome = $key['nome'];
                                    $vida = $key['vida'];
                                    echo "<div>";
                                        echo "<img src='../../$img' style='height:260px;width:220px'>";
                                        echo "<h2>Nome: ".$nome." - Vida: ".$_SESSION['vida_atual_personagem3']."/".$vida."</h2>";
                                        echo "<h2 class='cura'><a class='link' href='curar.php?alvo=$a'>Curar</a></h2>";
                                    echo "</div>";
                                }
                            


                                $id = $_SESSION['personagem4'];
                                $a = "4";
                                $personagem = $repositorio->MostrarPersonagem($id);
                                foreach ($personagem as $key) {
                                    $img = $key['img'];
                                    $nome = $key['nome'];
                                    $vida = $key['vida'];
                                    echo "<div>";
                                        echo "<img src='../../$img' style='height:260px;width:220px'>";
                                        echo "<h2>Nome: ".$nome." - Vida: ".$_SESSION['vida_atual_personagem4']."/".$vida."</h2>";
                                        echo "<h2 class='cura'><a class='link' href='curar.php?alvo=$a'>Curar</a></h2>";
                                    echo "</div>";
                                }

                            echo "</div>";
                        } else {
                            
                            $curar = true;
                            $id = $_SESSION['turno'];
                                $personagem = $repositorio->MostrarPersonagem($id);
                                foreach ($personagem as $key) {
                                    $classe = $key['classe'];
                                }
                            if($classe == "Clérigo"){
                                echo "<h2 class='cura'><a class='link' href='curar.php?curar=$curar'>Curar</a></h2>";
                                echo "<h2>( Curas ainda disponíveis: ".$_SESSION["cura_personagem$a"]."/3 )</h2>";
                            } 
                            
                            if(isset($_SESSION['escolher_bençao'])){
                                $id = $_SESSION['personagem1'];
                                $personagem = $repositorio->MostrarPersonagem($id);
                                foreach ($personagem as $key) {
                                    $img = $key['img'];
                                    $nome = $key['nome'];
                                    $vida = $key['vida'];
                                    echo "<div>";
                                        echo "<img src='../../$img' style='height:260px;width:220px'>";
                                        echo "<h2>Nome: ".$nome." - Vida: ".$_SESSION['vida_atual_personagem1']."/".$vida."</h2>";
                                        if(isset($_SESSION['personagem1_pedra'])){
                                            echo "<h2 style='color:gray'>Petrificado!!!</h2>";
                                        }
                                        echo "<h2 class='bencao'><a class='link' href='usar_bencao.php?id=$id'>Escolher</a></h2>";
                                    echo "</div>";
                                }

                                $id = $_SESSION['personagem2'];
                                $personagem = $repositorio->MostrarPersonagem($id);
                                foreach ($personagem as $key) {
                                    $img = $key['img'];
                                    $nome = $key['nome'];
                                    $vida = $key['vida'];
                                    echo "<div>";
                                        echo "<img src='../../$img' style='height:260px;width:220px'>";
                                        echo "<h2>Nome: ".$nome." - Vida: ".$_SESSION['vida_atual_personagem2']."/".$vida."</h2>";
                                        if(isset($_SESSION['personagem2_pedra'])){
                                            echo "<h2 style='color:gray'>Petrificado!!!</h2>";
                                        }
                                        echo "<h2 class='bencao'><a class='link' href='usar_bencao.php?id=$id'>Escolher</a></h2>";
                                    echo "</div>";
                                }

                                $id = $_SESSION['personagem3'];
                                $personagem = $repositorio->MostrarPersonagem($id);
                                foreach ($personagem as $key) {
                                    $img = $key['img'];
                                    $nome = $key['nome'];
                                    $vida = $key['vida'];
                                    echo "<div>";
                                        echo "<img src='../../$img' style='height:260px;width:220px'>";
                                        echo "<h2>Nome: ".$nome." - Vida: ".$_SESSION['vida_atual_personagem3']."/".$vida."</h2>";
                                        if(isset($_SESSION['personagem3_pedra'])){
                                            echo "<h2 style='color:gray'>Petrificado!!!</h2>";
                                        }
                                        echo "<h2 class='bencao'><a class='link' href='usar_bencao.php?id=$id'>Escolher</a></h2>";
                                    echo "</div>";
                                }

                                $id = $_SESSION['personagem4'];
                                $personagem = $repositorio->MostrarPersonagem($id);
                                foreach ($personagem as $key) {
                                    $img = $key['img'];
                                    $nome = $key['nome'];
                                    $vida = $key['vida'];
                                    echo "<div>";
                                        echo "<img src='../../$img' style='height:260px;width:220px'>";
                                        echo "<h2>Nome: ".$nome." - Vida: ".$_SESSION['vida_atual_personagem4']."/".$vida."</h2>";
                                        if(isset($_SESSION['personagem4_pedra'])){
                                            echo "<h2 style='color:gray'>Petrificado!!!</h2>";
                                        }
                                        echo "<h2 class='bencao'><a class='link' href='usar_bencao.php?id=$id'>Escolher</a></h2>";
                                    echo "</div>";
                                }
                            } else {
                                if($classe == "Clérigo"){
                                    if(isset($_SESSION["bencao_personagem$a"])){

                                    } else {
                                        $_SESSION["bencao_personagem$a"] = 3;
                                    }
                                    echo "<h2 class='bencao'><a class='link' href='usar_bencao.php'>Usar Benção</a></h2>";
                                    echo "<h2>( Número de usos disponíveis: ".$_SESSION["bencao_personagem$a"]."/3 )</h2>";
                                } 
                            }
                        }
                    }
                }   
            }

            // mostrar qualquer erro
            if(isset($_SESSION['erro'])){
                echo "<h2 style='color:red'>".$_SESSION['erro']."</h2>";
                unset($_SESSION['erro']);
            }

            // confirmar tirar a lanterna
            if(isset($_SESSION['confirmar'])){
                unset($_SESSION['mostrar_itens']);
                echo $_SESSION['confirmar'];
                echo "<form action='itens/confirmar.php' method='POST'>";
                    echo "<input type='submit' name='sim' value='Sim'>";
                    echo "<input type='submit' name='nao' value='Não'>";
                echo "</form>";
            }

            // caixa para dar selecionar um personagem para dar um item
            if(isset($_SESSION['dar_item'])){
                if($_SESSION['turno'] == $_SESSION['personagem1']){

                    $id = $_SESSION['personagem2'];
                    $personagem2 = $repositorio->MostrarPersonagem($id);
                    foreach ($personagem2 as $key) {
                        $dest = $key['nome'];
                        echo "<div>";
                            echo "Nome: ".$key['nome'];
                            echo "<a href='itens/dar_item.php?dest=$dest'>Selecionar</a>";
                        echo "</div>";
                    }

                    $id = $_SESSION['personagem3'];
                    $personagem3 = $repositorio->MostrarPersonagem($id);
                    foreach ($personagem3 as $key) {
                        $dest = $key['nome'];
                        echo "<div>";
                            echo "Nome: ".$key['nome'];
                            echo "<a href='itens/dar_item.php?dest=$dest'>Selecionar</a>";
                        echo "</div>";
                    }

                    $id = $_SESSION['personagem4'];
                    $personagem4 = $repositorio->MostrarPersonagem($id);
                    foreach ($personagem4 as $key) {
                        $dest = $key['nome'];
                        echo "<div>";
                            echo "Nome: ".$key['nome'];
                            echo "<a href='itens/dar_item.php?dest=$dest'>Selecionar</a>";
                        echo "</div>";
                    }
                } else if($_SESSION['turno'] == $_SESSION['personagem2']){
                    $id = $_SESSION['personagem1'];
                    $personagem1 = $repositorio->MostrarPersonagem($id);
                    foreach ($personagem1 as $key) {
                        $dest = $key['nome'];
                        echo "<div>";
                            echo "Nome: ".$key['nome'];
                            echo "<a href='itens/dar_item.php?dest=$dest'>Selecionar</a>";
                        echo "</div>";
                    }

                    $id = $_SESSION['personagem3'];
                    $personagem3 = $repositorio->MostrarPersonagem($id);
                    foreach ($personagem3 as $key) {
                        $dest = $key['nome'];
                        echo "<div>";
                            echo "Nome: ".$key['nome'];
                            echo "<a href='itens/dar_item.php?dest=$dest'>Selecionar</a>";
                        echo "</div>";
                    }

                    $id = $_SESSION['personagem4'];
                    $personagem4 = $repositorio->MostrarPersonagem($id);
                    foreach ($personagem4 as $key) {
                        $dest = $key['nome'];
                        echo "<div>";
                            echo "Nome: ".$key['nome'];
                            echo "<a href='itens/dar_item.php?dest=$dest'>Selecionar</a>";
                        echo "</div>";
                    }
                } else if($_SESSION['turno'] == $_SESSION['personagem3']){
                    $id = $_SESSION['personagem1'];
                    $personagem1 = $repositorio->MostrarPersonagem($id);
                    foreach ($personagem1 as $key) {
                        $dest = $key['nome'];
                        echo "<div>";
                            echo "Nome: ".$key['nome'];
                            echo "<a href='itens/dar_item.php?dest=$dest'>Selecionar</a>";
                        echo "</div>";
                    }

                    $id = $_SESSION['personagem2'];
                    $personagem2 = $repositorio->MostrarPersonagem($id);
                    foreach ($personagem2 as $key) {
                        $dest = $key['nome'];
                        echo "<div>";
                            echo "Nome: ".$key['nome'];
                            echo "<a href='itens/dar_item.php?dest=$dest'>Selecionar</a>";
                        echo "</div>";
                    }

                    $id = $_SESSION['personagem4'];
                    $personagem4 = $repositorio->MostrarPersonagem($id);
                    foreach ($personagem4 as $key) {
                        $dest = $key['nome'];
                        echo "<div>";
                            echo "Nome: ".$key['nome'];
                            echo "<a href='itens/dar_item.php?dest=$dest'>Selecionar</a>";
                        echo "</div>";
                    }
                } else if($_SESSION['turno'] == $_SESSION['personagem4']){
                    $id = $_SESSION['personagem1'];
                    $personagem1 = $repositorio->MostrarPersonagem($id);
                    foreach ($personagem1 as $key) {
                        $dest = $key['nome'];
                        echo "<div>";
                            echo "Nome: ".$key['nome'];
                            echo "<a href='itens/dar_item.php?dest=$dest'>Selecionar</a>";
                        echo "</div>";
                    }

                    $id = $_SESSION['personagem2'];
                    $personagem2 = $repositorio->MostrarPersonagem($id);
                    foreach ($personagem2 as $key) {
                        $dest = $key['nome'];
                        echo "<div>";
                            echo "Nome: ".$key['nome'];
                            echo "<a href='itens/dar_item.php?dest=$dest'>Selecionar</a>";
                        echo "</div>";
                    }

                    $id = $_SESSION['personagem3'];
                    $personagem3 = $repositorio->MostrarPersonagem($id);
                    foreach ($personagem3 as $key) {
                        $dest = $key['nome'];
                        echo "<div>";
                            echo "Nome: ".$key['nome'];
                            echo "<a href='itens/dar_item.php?dest=$dest'>Selecionar</a>";
                        echo "</div>";
                    }
                }
            }

            // Armadilha com Tesouro

            if(isset($_SESSION['tesouro_armadilha'])){
                if($_SESSION['alvo'] == "todos"){
                    echo "<div>";
                    $id = $_SESSION['personagem1'];
                    $personagem = $repositorio->MostrarPersonagem($id);
                    foreach ($personagem as $key) {
                        $img = $key['img'];
                        $nome = $key['nome'];
                        $vida = $key['vida'];
                        if(isset($_SESSION['personagem1_salvo'])){
                            if(isset($_SESSION['dano_t1'])){
                                echo "<div>";
                                    echo "<img src='../../$img' style='height:260px;width:220px'>";
                                    echo "<h2>Nome: ".$nome." - Vida: ".$_SESSION['vida_atual_personagem1']."/".$vida."</h2>";
                                    echo $_SESSION['msg1'];
                                    echo "<h2>Vida Perdida: ".$_SESSION['dano_t1']."</h2>";
                                echo "</div>";
                            } else {
                                echo "<div>";
                                    echo "<img src='../../$img' style='height:260px;width:220px'>";
                                    echo "<h2>Nome: ".$nome." - Vida: ".$_SESSION['vida_atual_personagem1']."/".$vida."</h2>";
                                    echo $_SESSION['msg1'];
                                echo "</div>";
                            }
                        } else {
                            echo "<div>";
                                echo "<img src='../../$img' style='height:260px;width:220px'>";
                                echo "<h2>Nome: ".$nome." - Vida: ".$_SESSION['vida_atual_personagem1']."/".$vida."</h2>";
                                echo "<h2 class='bencao'><a class='link' href='salvar_armadilha.php?id=$id'>Salvar</a></h2>";
                            echo "</div>";
                        }
                    }

                    $id = $_SESSION['personagem2'];
                    $personagem = $repositorio->MostrarPersonagem($id);
                    foreach ($personagem as $key) {
                        $img = $key['img'];
                        $nome = $key['nome'];
                        $vida = $key['vida'];
                        if(isset($_SESSION['personagem2_salvo'])){
                            if(isset($_SESSION['dano_t2'])){
                                echo "<div>";
                                    echo "<img src='../../$img' style='height:260px;width:220px'>";
                                    echo "<h2>Nome: ".$nome." - Vida: ".$_SESSION['vida_atual_personagem2']."/".$vida."</h2>";
                                    echo $_SESSION['msg2'];
                                    echo "<h2>Vida Perdida: ".$_SESSION['dano_t2']."</h2>";
                                echo "</div>";
                            } else {
                                echo "<div>";
                                    echo "<img src='../../$img' style='height:260px;width:220px'>";
                                    echo "<h2>Nome: ".$nome." - Vida: ".$_SESSION['vida_atual_personagem2']."/".$vida."</h2>";
                                    echo $_SESSION['msg2'];
                                echo "</div>";
                            }
                        } else {
                            echo "<div>";
                                echo "<img src='../../$img' style='height:260px;width:220px'>";
                                echo "<h2>Nome: ".$nome." - Vida: ".$_SESSION['vida_atual_personagem2']."/".$vida."</h2>";
                                echo "<h2 class='bencao'><a class='link' href='salvar_armadilha.php?id=$id'>Salvar</a></h2>";
                            echo "</div>";
                        }
                    }

                    $id = $_SESSION['personagem3'];
                    $personagem = $repositorio->MostrarPersonagem($id);
                    foreach ($personagem as $key) {
                        $img = $key['img'];
                        $nome = $key['nome'];
                        $vida = $key['vida'];
                        if(isset($_SESSION['personagem3_salvo'])){
                            if(isset($_SESSION['dano_t3'])){
                                echo "<div>";
                                    echo "<img src='../../$img' style='height:260px;width:220px'>";
                                    echo "<h2>Nome: ".$nome." - Vida: ".$_SESSION['vida_atual_personagem3']."/".$vida."</h2>";
                                    echo $_SESSION['msg3'];
                                    echo "<h2>Vida Perdida: ".$_SESSION['dano_t3']."</h2>";
                                echo "</div>";
                            } else {
                                echo "<div>";
                                    echo "<img src='../../$img' style='height:260px;width:220px'>";
                                    echo "<h2>Nome: ".$nome." - Vida: ".$_SESSION['vida_atual_personagem3']."/".$vida."</h2>";
                                    echo $_SESSION['msg3'];
                                echo "</div>";
                            }
                        } else {
                            echo "<div>";
                                echo "<img src='../../$img' style='height:260px;width:220px'>";
                                echo "<h2>Nome: ".$nome." - Vida: ".$_SESSION['vida_atual_personagem3']."/".$vida."</h2>";
                                echo "<h2 class='bencao'><a class='link' href='salvar_armadilha.php?id=$id'>Salvar</a></h2>";
                            echo "</div>";
                        }
                    }

                    $id = $_SESSION['personagem4'];
                    $personagem = $repositorio->MostrarPersonagem($id);
                    foreach ($personagem as $key) {
                        $img = $key['img'];
                        $nome = $key['nome'];
                        $vida = $key['vida'];
                        if(isset($_SESSION['personagem4_salvo'])){
                            if(isset($_SESSION['dano_t4'])){
                                echo "<div>";
                                    echo "<img src='../../$img' style='height:260px;width:220px'>";
                                    echo "<h2>Nome: ".$nome." - Vida: ".$_SESSION['vida_atual_personagem4']."/".$vida."</h2>";
                                    echo $_SESSION['msg4'];
                                    echo "<h2>Vida Perdida: ".$_SESSION['dano_t4']."</h2>";
                                echo "</div>";
                            } else {
                                echo "<div>";
                                    echo "<img src='../../$img' style='height:260px;width:220px'>";
                                    echo "<h2>Nome: ".$nome." - Vida: ".$_SESSION['vida_atual_personagem4']."/".$vida."</h2>";
                                    echo $_SESSION['msg4'];
                                echo "</div>";
                            }
                        } else {
                            echo "<div>";
                                echo "<img src='../../$img' style='height:260px;width:220px'>";
                                echo "<h2>Nome: ".$nome." - Vida: ".$_SESSION['vida_atual_personagem4']."/".$vida."</h2>";
                                echo "<h2 class='bencao'><a class='link' href='salvar_armadilha.php?id=$id'>Salvar</a></h2>";
                            echo "</div>";
                        }
                    }
                    echo "</div>";
                } else if($_SESSION['alvo'] == "1º"){
                    $id = $_SESSION['turno1'];
                    if($id == $_SESSION['personagem1']){
                        $a = "1";
                    } else if($id == $_SESSION['personagem2']){
                        $a = "2";
                    } else if($id == $_SESSION['personagem3']){
                        $a = "3";
                    } else if($id == $_SESSION['personagem4']){
                        $a = "4";
                    }
                    $personagem = $repositorio->MostrarPersonagem($id);
                    foreach ($personagem as $key) {
                        $nome = $key['nome'];
                        $img = $key['img'];
                        $vida = $key['vida'];
                        if(isset($_SESSION['pers_alç'])){
                            $_SESSION['pers_caido'] = true;
                            echo "<div>";
                            echo "<div>";
                                echo "<img src='../../$img' style='height:260px;width:220px'>";
                                echo "<h2>Nome: ".$nome." - Vida: ".$_SESSION["vida_atual_personagem$a"]."/".$vida."</h2>";
                                echo $_SESSION['msg'];
                                echo "<h2>Vida Perdida: ".$_SESSION['dano_alç']."</h2>";
                            echo "</div>";

                            if($a == "1"){
                                $id = $_SESSION['personagem2'];
                                $personagem = $repositorio->MostrarPersonagem($id);
                                foreach ($personagem as $key) {
                                    $nome = $key['nome'];
                                    $vida = $key['vida'];
                                    $img = $key['img'];
                                    echo "<div>";
                                        echo "<img src='../../$img' style='height:260px;width:220px'>";
                                        echo "<h2>Nome: ".$nome." - Vida: ".$_SESSION['vida_atual_personagem2']."/".$vida."</h2>";
                                        echo "<h2 class='bencao'><a class='link' href='salvar_armadilha.php?id=$id'>Salvar</a></h2>";
                                    echo "</div>";
                                }

                                $id = $_SESSION['personagem3'];
                                $personagem = $repositorio->MostrarPersonagem($id);
                                foreach ($personagem as $key) {
                                    $nome = $key['nome'];
                                    $vida = $key['vida'];
                                    $img = $key['img'];
                                    echo "<div>";
                                        echo "<img src='../../$img' style='height:260px;width:220px'>";
                                        echo "<h2>Nome: ".$nome." - Vida: ".$_SESSION['vida_atual_personagem3']."/".$vida."</h2>";
                                        echo "<h2 class='bencao'><a class='link' href='salvar_armadilha.php?id=$id'>Salvar</a></h2>";
                                    echo "</div>";
                                }

                                $id = $_SESSION['personagem4'];
                                $personagem = $repositorio->MostrarPersonagem($id);
                                foreach ($personagem as $key) {
                                    $nome = $key['nome'];
                                    $vida = $key['vida'];
                                    $img = $key['img'];
                                    echo "<div>";
                                        echo "<img src='../../$img' style='height:260px;width:220px'>";
                                        echo "<h2>Nome: ".$nome." - Vida: ".$_SESSION['vida_atual_personagem4']."/".$vida."</h2>";
                                        echo "<h2 class='bencao'><a class='link' href='salvar_armadilha.php?id=$id'>Salvar</a></h2>";
                                    echo "</div>";
                                }
                            } else if($a == "2"){
                                $id = $_SESSION['personagem1'];
                                $personagem = $repositorio->MostrarPersonagem($id);
                                foreach ($personagem as $key) {
                                    $nome = $key['nome'];
                                    $vida = $key['vida'];
                                    $img = $key['img'];
                                    echo "<div>";
                                        echo "<img src='../../$img' style='height:260px;width:220px'>";
                                        echo "<h2>Nome: ".$nome." - Vida: ".$_SESSION['vida_atual_personagem1']."/".$vida."</h2>";
                                        echo "<h2 class='bencao'><a class='link' href='salvar_armadilha.php?id=$id'>Salvar</a></h2>";
                                    echo "</div>";
                                }

                                $id = $_SESSION['personagem3'];
                                $personagem = $repositorio->MostrarPersonagem($id);
                                foreach ($personagem as $key) {
                                    $nome = $key['nome'];
                                    $vida = $key['vida'];
                                    $img = $key['img'];
                                    echo "<div>";
                                        echo "<img src='../../$img' style='height:260px;width:220px'>";
                                        echo "<h2>Nome: ".$nome." - Vida: ".$_SESSION['vida_atual_personagem3']."/".$vida."</h2>";
                                        echo "<h2 class='bencao'><a class='link' href='salvar_armadilha.php?id=$id'>Salvar</a></h2>";
                                    echo "</div>";
                                }

                                $id = $_SESSION['personagem4'];
                                $personagem = $repositorio->MostrarPersonagem($id);
                                foreach ($personagem as $key) {
                                    $nome = $key['nome'];
                                    $vida = $key['vida'];
                                    $img = $key['img'];
                                    echo "<div>";
                                        echo "<img src='../../$img' style='height:260px;width:220px'>";
                                        echo "<h2>Nome: ".$nome." - Vida: ".$_SESSION['vida_atual_personagem4']."/".$vida."</h2>";
                                        echo "<h2 class='bencao'><a class='link' href='salvar_armadilha.php?id=$id'>Salvar</a></h2>";
                                    echo "</div>";
                                }
                            } else if($a == "3"){
                                $id = $_SESSION['personagem2'];
                                $personagem = $repositorio->MostrarPersonagem($id);
                                foreach ($personagem as $key) {
                                    $nome = $key['nome'];
                                    $vida = $key['vida'];
                                    $img = $key['img'];
                                    echo "<div>";
                                        echo "<img src='../../$img' style='height:260px;width:220px'>";
                                        echo "<h2>Nome: ".$nome." - Vida: ".$_SESSION['vida_atual_personagem2']."/".$vida."</h2>";
                                        echo "<h2 class='bencao'><a class='link' href='salvar_armadilha.php?id=$id'>Salvar</a></h2>";
                                    echo "</div>";
                                }

                                $id = $_SESSION['personagem1'];
                                $personagem = $repositorio->MostrarPersonagem($id);
                                foreach ($personagem as $key) {
                                    $nome = $key['nome'];
                                    $vida = $key['vida'];
                                    $img = $key['img'];
                                    echo "<div>";
                                        echo "<img src='../../$img' style='height:260px;width:220px'>";
                                        echo "<h2>Nome: ".$nome." - Vida: ".$_SESSION['vida_atual_personagem1']."/".$vida."</h2>";
                                        echo "<h2 class='bencao'><a class='link' href='salvar_armadilha.php?id=$id'>Salvar</a></h2>";
                                    echo "</div>";
                                }

                                $id = $_SESSION['personagem4'];
                                $personagem = $repositorio->MostrarPersonagem($id);
                                foreach ($personagem as $key) {
                                    $nome = $key['nome'];
                                    $vida = $key['vida'];
                                    $img = $key['img'];
                                    echo "<div>";
                                        echo "<img src='../../$img' style='height:260px;width:220px'>";
                                        echo "<h2>Nome: ".$nome." - Vida: ".$_SESSION['vida_atual_personagem4']."/".$vida."</h2>";
                                        echo "<h2 class='bencao'><a class='link' href='salvar_armadilha.php?id=$id'>Salvar</a></h2>";
                                    echo "</div>";
                                }
                            } else if($a == "4"){
                                $id = $_SESSION['personagem2'];
                                $personagem = $repositorio->MostrarPersonagem($id);
                                foreach ($personagem as $key) {
                                    $nome = $key['nome'];
                                    $vida = $key['vida'];
                                    $img = $key['img'];
                                    echo "<div>";
                                        echo "<img src='../../$img' style='height:260px;width:220px'>";
                                        echo "<h2>Nome: ".$nome." - Vida: ".$_SESSION['vida_atual_personagem2']."/".$vida."</h2>";
                                        echo "<h2 class='bencao'><a class='link' href='salvar_armadilha.php?id=$id'>Salvar</a></h2>";
                                    echo "</div>";
                                }

                                $id = $_SESSION['personagem3'];
                                $personagem = $repositorio->MostrarPersonagem($id);
                                foreach ($personagem as $key) {
                                    $nome = $key['nome'];
                                    $vida = $key['vida'];
                                    $img = $key['img'];
                                    echo "<div>";
                                        echo "<img src='../../$img' style='height:260px;width:220px'>";
                                        echo "<h2>Nome: ".$nome." - Vida: ".$_SESSION['vida_atual_personagem3']."/".$vida."</h2>";
                                        echo "<h2 class='bencao'><a class='link' href='salvar_armadilha.php?id=$id'>Salvar</a></h2>";
                                    echo "</div>";
                                }

                                $id = $_SESSION['personagem1'];
                                $personagem = $repositorio->MostrarPersonagem($id);
                                foreach ($personagem as $key) {
                                    $nome = $key['nome'];
                                    $vida = $key['vida'];
                                    $img = $key['img'];
                                    echo "<div>";
                                        echo "<img src='../../$img' style='height:260px;width:220px'>";
                                        echo "<h2>Nome: ".$nome." - Vida: ".$_SESSION['vida_atual_personagem1']."/".$vida."</h2>";
                                        echo "<h2 class='bencao'><a class='link' href='salvar_armadilha.php?id=$id'>Salvar</a></h2>";
                                    echo "</div>";
                                }
                            }
                            echo "</div>";
                        } else if(isset($_SESSION['pers_salvo'])){
                            echo "<div>";
                                echo "<img src='../../$img' style='height:260px;width:220px'>";
                                echo "<h2>Nome: ".$nome." - Vida: ".$_SESSION["vida_atual_personagem$a"]."/".$vida."</h2>";
                                echo $_SESSION['msg'];
                            echo "</div>";
                            if(isset($_SESSION['tesouro_armadilha'])){
                                echo "<h2 class='acao__link'><a class='link' href='roda_recompensa.php'>Pegar Tesouro</a></h2>";
                            } else {
                                echo "<h2 class='acao__link'><a class='link' href='passar_turno.php'>Concluir Turno Armadilha</a></h2>";
                            }
                        } else if($_SESSION['nome_armadilha'] == "Armadilha de Urso" && isset($_SESSION['arm_urs'])){
                            if(isset($_SESSION['dano_t'])){
                                echo "<div>";
                                    echo "<img src='../../$img' style='height:260px;width:220px'>";
                                    echo "<h2>Nome: ".$nome." - Vida: ".$_SESSION["vida_atual_personagem$a"]."/".$vida."</h2>";
                                    echo $_SESSION['msg'];
                                    echo "<h2>Vida Perdida: ".$_SESSION['dano_t']."</h2>";
                                echo "</div>";
                            } else {
                                echo "<div>";
                                    echo "<img src='../../$img' style='height:260px;width:220px'>";
                                    echo "<h2>Nome: ".$nome." - Vida: ".$_SESSION["vida_atual_personagem$a"]."/".$vida."</h2>";
                                    echo $_SESSION['msg'];
                                echo "</div>";
                            }
                            if(isset($_SESSION['tesouro_armadilha'])){
                                echo "<h2 class='acao__link'><a class='link' href='roda_recompensa.php'>Pegar Tesouro</a></h2>";
                            } else {
                                echo "<h2 class='acao__link'><a class='link' href='passar_turno.php'>Concluir Turno Armadilha</a></h2>";
                            }
                        } else {
                            echo "<div>";
                                echo "<img src='../../$img' style='height:260px;width:220px'>";
                                echo "<h2>Nome: ".$nome." - Vida: ".$_SESSION["vida_atual_personagem$a"]."/".$vida."</h2>";
                                echo "<h2 class='bencao'><a class='link' href='salvar_armadilha.php?id=$id'>Salvar</a></h2>";
                            echo "</div>";
                        }
                    }
                } else if($_SESSION['nome_armadilha'] == "Dardo"){
                    if(isset($_SESSION['msg'])){
                        $pers = $_SESSION['id_pers'];
                    } else {
                        $_SESSION['id_pers'] = $pers = rand(1,4);
                    }
                    $id = $_SESSION["personagem$pers"];
                    if($id == $_SESSION['personagem1']){
                        $a = "1";
                    } else if($id == $_SESSION['personagem2']){
                        $a = "2";
                    } else if($id == $_SESSION['personagem3']){
                        $a = "3";
                    } else if($id == $_SESSION['personagem4']){
                        $a = "4";
                    }
                    $personagem = $repositorio->MostrarPersonagem($id);
                    foreach ($personagem as $key) {
                        $nome = $key['nome'];
                        $vida = $key['vida'];
                        $img = $key['img'];
                        if(isset($_SESSION['msg'])){
                            if(isset($_SESSION['dano_t'])){
                                echo "<div>";
                                    echo "<img src='../../$img' style='height:260px;width:220px'>";
                                    echo "<h2>Nome: ".$nome." - Vida: ".$_SESSION["vida_atual_personagem$a"]."/".$vida."</h2>";
                                    echo $_SESSION['msg'];
                                    echo "<h2>Vida Perdida: ".$_SESSION['dano_t']."</h2>";
                                echo "</div>";
                            } else {
                                echo "<div>";
                                    echo "<img src='../../$img' style='height:260px;width:220px'>";
                                    echo "<h2>Nome: ".$nome." - Vida: ".$_SESSION["vida_atual_personagem$a"]."/".$vida."</h2>";
                                    echo $_SESSION['msg'];
                                echo "</div>";
                            }
                            if(isset($_SESSION['tesouro_armadilha'])){
                                echo "<h2 class='acao__link'><a class='link' href='roda_recompensa.php'>Pegar Tesouro</a></h2>";
                            } else {
                                echo "<h2 class='acao__link'><a class='link' href='passar_turno.php'>Concluir Turno Armadilha</a></h2>";
                            }
                        } else {
                            echo "<div>";
                                echo "<img src='../../$img' style='height:260px;width:220px'>";
                                echo "<h2>Nome: ".$nome." - Vida: ".$_SESSION["vida_atual_personagem$a"]."/".$vida."</h2>";
                                echo "<h2 class='bencao'><a class='link' href='salvar_armadilha.php?id=$id'>Salvar</a></h2>";
                            echo "</div>";
                        }
                    }
                } else if($_SESSION['nome_armadilha'] == "Lanças"){
                    echo "<div>";
                    if(isset($_SESSION['msg1'])){
                        $pers = $_SESSION['id_pers1'];
                    } else {
                        if(isset($_SESSION['dado_pers1'])){
                            $pers = $_SESSION['dado_pers1'];
                        } else {
                            $pers = rand(1,4);
                            $_SESSION['dado_pers1'] = $pers;
                        }
                        
                        $_SESSION['id_pers1'] = $_SESSION["personagem$pers"];
                    }
                    $id = $_SESSION["id_pers1"];
                    if($id == $_SESSION['personagem1']){
                        $a = "1";
                    } else if($id == $_SESSION['personagem2']){
                        $a = "2";
                    } else if($id == $_SESSION['personagem3']){
                        $a = "3";
                    } else if($id == $_SESSION['personagem4']){
                        $a = "4";
                    }
                    $personagem = $repositorio->MostrarPersonagem($id);
                    foreach ($personagem as $key) {
                        $nome = $key['nome'];
                        $vida = $key['vida'];
                        $img = $key['img'];
                        if(isset($_SESSION['msg1'])){
                            if(isset($_SESSION['dano_t1'])){
                                echo "<div>";
                                    echo "<img src='../../$img' style='height:260px;width:220px'>";
                                    echo "<h2>Nome: ".$nome." - Vida: ".$_SESSION["vida_atual_personagem$a"]."/".$vida."</h2>";
                                    echo $_SESSION['msg1'];
                                    echo "<h2>Vida Perdida: ".$_SESSION['dano_t1']."</h2>";
                                echo "</div>";
                            } else {
                                echo "<div>";
                                    echo "<img src='../../$img' style='height:260px;width:220px'>";
                                    echo "<h2>Nome: ".$nome." - Vida: ".$_SESSION["vida_atual_personagem$a"]."/".$vida."</h2>";
                                    echo $_SESSION['msg1'];
                                echo "</div>";
                            }
                        } else {
                            echo "<div>";
                                echo "<img src='../../$img' style='height:260px;width:220px'>";
                                echo "<h2>Nome: ".$nome." - Vida: ".$_SESSION["vida_atual_personagem$a"]."/".$vida."</h2>";
                                echo "<h2 class='bencao'><a class='link' href='salvar_armadilha.php?id=$id'>Salvar</a></h2>";
                            echo "</div>";
                        }
                    }

                    if(isset($_SESSION['msg2'])){
                        $pers = $_SESSION['id_pers2'];
                    } else {
                        if(isset($_SESSION['dado_pers2'])){
                            $pers = $_SESSION['dado_pers2'];
                        } else {
                            $pers = rand(1,4);
                            $_SESSION['dado_pers2'] = $pers;
                            $_SESSION['id_pers2'] = $_SESSION["personagem$pers"];
                            if($pers == $_SESSION['dado_pers1']){
                                while($pers == $_SESSION['dado_pers1']){
                                    $pers = rand(1,4);
                                }
                                $_SESSION['dado_pers2'] = $pers;
                                $_SESSION['id_pers2'] = $_SESSION["personagem$pers"];
                            }
                        }             
                    }
                    $id = $_SESSION["id_pers2"];
                    if($id == $_SESSION['personagem1']){
                        $a = "1";
                    } else if($id == $_SESSION['personagem2']){
                        $a = "2";
                    } else if($id == $_SESSION['personagem3']){
                        $a = "3";
                    } else if($id == $_SESSION['personagem4']){
                        $a = "4";
                    }
                    $personagem = $repositorio->MostrarPersonagem($id);
                    foreach ($personagem as $key) {
                        $nome = $key['nome'];
                        $vida = $key['vida'];
                        $img = $key['img'];
                        if(isset($_SESSION['msg2'])){
                            if(isset($_SESSION['dano_t2'])){
                                echo "<div>";
                                    echo "<img src='../../$img' style='height:260px;width:220px'>";
                                    echo "<h2>Nome: ".$nome." - Vida: ".$_SESSION["vida_atual_personagem$a"]."/".$vida."</h2>";
                                    echo $_SESSION['msg2'];
                                    echo "<h2>Vida Perdida: ".$_SESSION['dano_t2']."</h2>";
                                echo "</div>";
                            } else {
                                echo "<div>";
                                    echo "<img src='../../$img' style='height:260px;width:220px'>";
                                    echo "<h2>Nome: ".$nome." - Vida: ".$_SESSION["vida_atual_personagem$a"]."/".$vida."</h2>";
                                    echo $_SESSION['msg2'];
                                echo "</div>";
                            }
                        } else {
                            echo "<div>";
                                echo "<img src='../../$img' style='height:260px;width:220px'>";
                                echo "<h2>Nome: ".$nome." - Vida: ".$_SESSION["vida_atual_personagem$a"]."/".$vida."</h2>";
                                echo "<h2 class='bencao'><a class='link' href='salvar_armadilha.php?id=$id'>Salvar</a></h2>";
                            echo "</div>";
                        }
                    }
                    echo "</div>";

                    if(isset($_SESSION['msg1']) && isset($_SESSION['msg2'])){
                        if(isset($_SESSION['tesouro_armadilha'])){
                            echo "<h2 class='acao__link'><a class='link' href='roda_recompensa.php'>Pegar Tesouro</a></h2>";
                        } else {
                            echo "<h2 class='acao__link'><a class='link' href='passar_turno.php'>Concluir Turno Armadilha</a></h2>";
                        }
                    }
                } else if($_SESSION['nome_armadilha'] == "Pedra Gigante"){
                    $id = $_SESSION['turno4'];
                    if($id == $_SESSION['personagem1']){
                        $a = "1";
                    } else if($id == $_SESSION['personagem2']){
                        $a = "2";
                    } else if($id == $_SESSION['personagem3']){
                        $a = "3";
                    } else if($id == $_SESSION['personagem4']){
                        $a = "4";
                    }
                    $personagem = $repositorio->MostrarPersonagem($id);
                    foreach ($personagem as $key) {
                        $nome = $key['nome'];
                        $vida = $key['vida'];
                        $img = $key['img'];
                        if(isset($_SESSION['msg'])){
                            if(isset($_SESSION['dano_t'])){
                                echo "<div>";
                                    echo "<img src='../../$img' style='height:260px;width:220px'>";
                                    echo "<h2>Nome: ".$nome." - Vida: ".$_SESSION["vida_atual_personagem$a"]."/".$vida."</h2>";
                                    echo $_SESSION['msg'];
                                    echo "<h2>Vida Perdida: ".$_SESSION['dano_t']."</h2>";
                                echo "</div>";
                            } else {
                                echo "<div>";
                                    echo "<img src='../../$img' style='height:260px;width:220px'>";
                                    echo "<h2>Nome: ".$nome." - Vida: ".$_SESSION["vida_atual_personagem$a"]."/".$vida."</h2>";
                                    echo $_SESSION['msg'];
                                echo "</div>";
                            }
                            if(isset($_SESSION['tesouro_armadilha'])){
                                echo "<h2 class='acao__link'><a class='link' href='roda_recompensa.php'>Pegar Tesouro</a></h2>";
                            } else {
                                echo "<h2 class='acao__link'><a class='link' href='passar_turno.php'>Concluir Turno Armadilha</a></h2>";
                            }
                        } else {
                            echo "<div>";
                                echo "<img src='../../$img' style='height:260px;width:220px'>";
                                echo "<h2>Nome: ".$nome." - Vida: ".$_SESSION["vida_atual_personagem$a"]."/".$vida."</h2>";
                                echo "<h2 class='bencao'><a class='link' href='salvar_armadilha.php?id=$id'>Salvar</a></h2>";
                            echo "</div>";
                        }
                    }
                }

                if(isset($_SESSION['personagem1_salvo']) && isset($_SESSION['personagem2_salvo']) && isset($_SESSION['personagem3_salvo']) && isset($_SESSION['personagem4_salvo'])){
                    if(isset($_SESSION['tesouro_armadilha'])){
                        echo "<h2 class='acao__link'><a class='link' href='roda_recompensa.php'>Pegar Tesouro</a></h2>";
                    } else {
                        echo "<h2 class='acao__link'><a class='link' href='passar_turno.php'>Concluir Turno Armadilha</a></h2>";
                    }
                }
            } else if(isset($_SESSION['tesouro_enc'])) {
                if(isset($_SESSION['tesouro']) && $_SESSION['tesouro'] != "Nenhum tesouro encontrado!!!"){
                    $item = $_SESSION['tesouro'];
                    $img = $repositorio->PuxarImagemItem($item);
                    
                        if($_SESSION['tesouro'] == "gema" || $_SESSION['tesouro'] == "ouro"){
                            echo "<div>";
                                echo "<h2>Tesouro: ".$_SESSION['tesouro']." - Valor: ".$_SESSION['valor_tesouro']."</h2>";
                                echo "<img src='../../$img' style='height:70px;width:70px'>";
                            echo "</div>";
                        } else {
                            echo "<div>";
                                echo "<h2>Tesouro: ".$_SESSION['tesouro']."</h2>";
                                echo "<img src='../../$img' style='height:70px;width:70px'>";
                            echo "</div>";
                        }
                
                        echo "<div>";
                    
                        $id = $_SESSION['personagem1'];
                        $personagem = $repositorio->MostrarPersonagem($id);
                        foreach ($personagem as $key) {
                            echo "<div>";
                                echo "<img src='../../".$key['img']."' style='height:190px;width:175px'>";
                                echo "<h2>Nome: ".$key['nome']."</h2>";
                                echo "<h2>Dinheiro: ".$key['dinheiro']."</h2>";
                                echo "<h2><a href='pegar_recompensa.php?id=$id'>Pegar</a></h2>";
                            echo "</div>";
                        }

                        $id = $_SESSION['personagem2'];
                        $personagem = $repositorio->MostrarPersonagem($id);
                        foreach ($personagem as $key) {
                            echo "<div>";
                                echo "<img src='../../".$key['img']."' style='height:190px;width:175px'>";
                                echo "<h2>Nome: ".$key['nome']."</h2>";
                                echo "<h2>Dinheiro: ".$key['dinheiro']."</h2>";
                                echo "<h2><a href='pegar_recompensa.php?id=$id'>Pegar</a></h2>";
                            echo "</div>";
                        }

                        $id = $_SESSION['personagem3'];
                        $personagem = $repositorio->MostrarPersonagem($id);
                        foreach ($personagem as $key) {
                            echo "<div>";
                                echo "<img src='../../".$key['img']."' style='height:190px;width:175px'>";
                                echo "<h2>Nome: ".$key['nome']."</h2>";
                                echo "<h2>Dinheiro: ".$key['dinheiro']."</h2>";
                                echo "<h2><a href='pegar_recompensa.php?id=$id'>Pegar</a></h2>";
                            echo "</div>";
                        }

                        $id = $_SESSION['personagem4'];
                        $personagem = $repositorio->MostrarPersonagem($id);
                        foreach ($personagem as $key) {
                            echo "<div>";
                                echo "<img src='../../".$key['img']."' style='height:190px;width:175px'>";
                                echo "<h2>Nome: ".$key['nome']."</h2>";
                                echo "<h2>Dinheiro: ".$key['dinheiro']."</h2>";
                                echo "<h2><a href='pegar_recompensa.php?id=$id'>Pegar</a></h2>";
                            echo "</div>";
                        }
                    
                        echo "</div>";
                } else {
                    if(isset($_SESSION['tesouro']) && $_SESSION['tesouro'] == "Nenhum tesouro encontrado!!!"){
                        echo "<h2>".$_SESSION['tesouro']."</h2>";
                    }
                    echo "<br>";
                    echo "<h2><a href='passar_turno.php'>Concluir Turno</a></h2>"; 
                }
            }
            
            // Defender contra Monstro

            if(isset($_SESSION['defensor'])){
                $chance = 3;
            } else {
                if(isset($_SESSION['boss']) && $_SESSION['nome_boss'] == "Quimera"){
                    if(isset($_SESSION['defensor'])){

                    } else {
                        $chance = rand(1,6);
                    }
                } else {
                    $chance = 3;
                }
            }
           
            if(isset($_SESSION['nome_boss']) && $_SESSION['nome_boss'] == "Gremlins Invisíveis"){
                echo "<h2>Vocês se sentem mais leves, partes dos itens do seu grupo foram levados</h2>";
                echo "<h2><a href='passar_turno.php?id=monstros'>Concluir Turno</a></h2>";

            } else if($_SESSION['turno'] == "monstros" && $chance > 2 ){
                if(isset($_SESSION['nome_boss']) && $_SESSION['nome_boss'] != "Dragão " && $_SESSION['nome_boss'] != "Comedor de Ferro"){
                    echo "<div class='defesa3'>";
                    
                        $id = $_SESSION['turno1'];
                        $personagem = $repositorio->MostrarPersonagem($id);
                        foreach ($personagem as $key) {
                            $img = $key['img'];
                        }
                        echo "<div>";
                            echo "<img src='../../$img' style='height:260px;width:220px'>";
                            if(isset($_SESSION['monstros_defender']) && $_SESSION['monstros_defender'] != 0 || $_SESSION['ataques_defender'] != 0){
                                if(isset($_SESSION['defesa'])){
                                    if(isset($_SESSION['defensor']) && $_SESSION['defensor'] == $id){
                                        if(isset($_SESSION['vida_perdida'])){
                                            if(isset($_SESSION['efeito_bonus'])){
                                                $msg = "(Dano adicional devido a efeitos causados pelo inimigo!)";
                                            } else {
                                                $msg = "";
                                            }
                                            if(isset($_SESSION['mensagem'])){

                                            } else {
                                                $_SESSION['mensagem'] = "";
                                            }
                                            echo "<h2 style='color: red'>Defesa Mal-Sucedida</h2>";
                                            echo "<h2>Defesa: ".$_SESSION['defesa_total']."  <a style='color:red'>".$_SESSION['mensagem']."</a></h2>";
                                            echo "<h2>Vida Perdida: ".$_SESSION['vida_perdida']." ".$msg."</h2>";
                                            echo "<h2 class='defesa__pers'><a href='defender.php?id=$id'> Defender </a></h2>";
                                        } else {
                                            echo "<h2 style='color:green'>Defesa Bem-Sucedida</h2>";
                                            echo "<h2>Defesa: ".$_SESSION['defesa_total']."</h2>";
                                            echo "<h2>Dado: ".$_SESSION['dado']." - Bônus: ".$_SESSION['bonus']."</h2>";
                                            echo "<h2 class='defesa__pers'><a class='defesa__pers__a' href='defender.php?id=$id'> Defender </a></h2>";
                                        }
                                    } else {
                                        echo "<h2 class='defesa__pers'><a class='defesa__pers__a' href='defender.php?id=$id'> Defender </a></h2>";
                                    }
                                } else {
                                    echo "<h2 class='defesa__pers'><a class='defesa__pers__a' href='defender.php?id=$id'> Defender </a></h2>";
                                }
                            } else {
                                if(isset($_SESSION['vida_perdida']) && $_SESSION['defensor'] == $id){
                                    if(isset($_SESSION['efeito_bonus'])){
                                        $msg = "(Dano adicional devido a efeitos causados pelo inimigo!)";
                                    } else {
                                        $msg = "";
                                    }
                                    if(isset($_SESSION['mensagem'])){

                                    } else {
                                        $_SESSION['mensagem'] = "";
                                    }
                                    echo "<h2 style='color: red'>Defesa Mal-Sucedida</h2>";
                                    echo "<h2>Defesa: ".$_SESSION['defesa_total']."  <a style='color:red'>".$_SESSION['mensagem']."</a></h2>";
                                    echo "<h2>Vida Perdida: ".$_SESSION['vida_perdida']." ".$msg."</h2>";
                                } else if($_SESSION['defensor'] == $id) {
                                    echo "<h2 style='color:green'>Defesa Bem-Sucedida</h2>";
                                    echo "<h2>Defesa: ".$_SESSION['defesa_total']."</h2>";
                                    echo "<h2>Dado: ".$_SESSION['dado']." - Bônus: ".$_SESSION['bonus']."</h2>";
                                } 
                            }
                        echo "</div>";
                        

                        $id = $_SESSION['turno2'];
                        $personagem = $repositorio->MostrarPersonagem($id);
                        foreach ($personagem as $key) {
                            $img = $key['img'];
                        }
                        echo "<div>";
                            echo "<img src='../../$img' style='height:260px;width:220px'>";
                            if($_SESSION['monstros_defender'] != 0 || $_SESSION['ataques_defender'] != 0){
                                if(isset($_SESSION['defesa'])){
                                    if(isset($_SESSION['defensor']) && $_SESSION['defensor'] == $id){
                                        if(isset($_SESSION['vida_perdida'])){
                                            if(isset($_SESSION['efeito_bonus'])){
                                                $msg = "(Dano adicional devido a efeitos causados pelo inimigo!)";
                                            } else {
                                                $msg = "";
                                            }
                                            if(isset($_SESSION['mensagem'])){

                                            } else {
                                                $_SESSION['mensagem'] = "";
                                            }
                                            echo "<h2 style='color: red'>Defesa Mal-Sucedida</h2>";
                                            echo "<h2>Defesa: ".$_SESSION['defesa_total']."  <a style='color:red'>".$_SESSION['mensagem']."</a></h2>";
                                            echo "<h2>Vida Perdida: ".$_SESSION['vida_perdida']." ".$msg."</h2>";
                                            echo "<h2 class='defesa__pers'><a href='defender.php?id=$id'> Defender </a></h2>";
                                        } else {
                                            echo "<h2 style='color:green'>Defesa Bem-Sucedida</h2>";
                                            echo "<h2>Defesa: ".$_SESSION['defesa_total']."</h2>";
                                            echo "<h2>Dado: ".$_SESSION['dado']." - Bônus: ".$_SESSION['bonus']."</h2>";
                                            echo "<h2 class='defesa__pers'><a class='defesa__pers__a' href='defender.php?id=$id'> Defender </a></h2>";
                                        }
                                    } else {
                                        echo "<h2 class='defesa__pers'><a class='defesa__pers__a' href='defender.php?id=$id'> Defender </a></h2>";
                                    }
                                } else {
                                    echo "<h2 class='defesa__pers'><a class='defesa__pers__a' href='defender.php?id=$id'> Defender </a></h2>";
                                }
                            } else {
                                if(isset($_SESSION['vida_perdida']) && $_SESSION['defensor'] == $id){
                                    if(isset($_SESSION['efeito_bonus'])){
                                        $msg = "(Dano adicional devido a efeitos causados pelo inimigo!)";
                                    } else {
                                        $msg = "";
                                    }
                                    if(isset($_SESSION['mensagem'])){

                                    } else {
                                        $_SESSION['mensagem'] = "";
                                    }
                                    echo "<h2 style='color: red'>Defesa Mal-Sucedida</h2>";
                                    echo "<h2>Defesa: ".$_SESSION['defesa_total']."  <a style='color:red'>".$_SESSION['mensagem']."</a></h2>";
                                    echo "<h2>Vida Perdida: ".$_SESSION['vida_perdida']." ".$msg."</h2>";
                                    $x = $_SESSION['turno'];
                                } else if($_SESSION['defensor'] == $id) {
                                    echo "<h2 style='color:green'>Defesa Bem-Sucedida</h2>";
                                    echo "<h2>Defesa: ".$_SESSION['defesa_total']."</h2>";
                                    echo "<h2>Dado: ".$_SESSION['dado']." - Bônus: ".$_SESSION['bonus']."</h2>";
                                    $x = $_SESSION['turno'];
                                }
                            }
                        echo "</div>";

                        $id = $_SESSION['turno3'];
                        $personagem = $repositorio->MostrarPersonagem($id);
                        foreach ($personagem as $key) {
                            $img = $key['img'];
                        }
                        echo "<div>";
                            echo "<img src='../../$img' style='height:260px;width:220px'>";
                            if($_SESSION['monstros_defender'] != 0 || $_SESSION['ataques_defender'] != 0){
                                if(isset($_SESSION['defesa'])){
                                    if(isset($_SESSION['defensor']) && $_SESSION['defensor'] == $id){
                                        if(isset($_SESSION['vida_perdida'])){
                                            if(isset($_SESSION['efeito_bonus'])){
                                                $msg = "(Dano adicional devido a efeitos causados pelo inimigo!)";
                                            } else {
                                                $msg = "";
                                            }
                                            if(isset($_SESSION['mensagem'])){

                                            } else {
                                                $_SESSION['mensagem'] = "";
                                            }
                                            echo "<h2 style='color: red'>Defesa Mal-Sucedida</h2>";
                                            echo "<h2>Defesa: ".$_SESSION['defesa_total']."  <a style='color:red'>".$_SESSION['mensagem']."</a></h2>";
                                            echo "<h2>Vida Perdida: ".$_SESSION['vida_perdida']." ".$msg."</h2>";
                                            echo "<h2><a href='defender.php?id=$id'> Defender </a></h2>";
                                        } else {
                                            echo "<h2 style='color:green'>Defesa Bem-Sucedida</h2>";
                                            echo "<h2>Defesa: ".$_SESSION['defesa_total']."</h2>";
                                            echo "<h2>Dado: ".$_SESSION['dado']." - Bônus: ".$_SESSION['bonus']."</h2>";
                                            echo "<h2 class='defesa__pers'><a class='defesa__pers__a' href='defender.php?id=$id'> Defender </a></h2>";
                                        }
                                    } else {
                                        echo "<h2 class='defesa__pers'><a class='defesa__pers__a' href='defender.php?id=$id'> Defender </a></h2>";
                                    }
                                } else {
                                    echo "<h2 class='defesa__pers'><a class='defesa__pers__a' href='defender.php?id=$id'> Defender </a></h2>";
                                }
                            } else {
                                if(isset($_SESSION['vida_perdida']) && $_SESSION['defensor'] == $id){
                                    if(isset($_SESSION['efeito_bonus'])){
                                        $msg = "(Dano adicional devido a efeitos causados pelo inimigo!)";
                                    } else {
                                        $msg = "";
                                    }
                                    if(isset($_SESSION['mensagem'])){

                                    } else {
                                        $_SESSION['mensagem'] = "";
                                    }
                                    echo "<h2 style='color: red'>Defesa Mal-Sucedida</h2>";
                                    echo "<h2>Defesa: ".$_SESSION['defesa_total']."  <a style='color:red'>".$_SESSION['mensagem']."</a></h2>";
                                    echo "<h2>Vida Perdida: ".$_SESSION['vida_perdida']." ".$msg."</h2>";
                                } else if($_SESSION['defensor'] == $id) {
                                    echo "<h2 style='color:green'>Defesa Bem-Sucedida</h2>";
                                    echo "<h2>Defesa: ".$_SESSION['defesa_total']."</h2>";
                                    echo "<h2>Dado: ".$_SESSION['dado']." - Bônus: ".$_SESSION['bonus']."</h2>";
                                }
                            }
                        echo "</div>";

                        $id = $_SESSION['turno4'];
                        $personagem = $repositorio->MostrarPersonagem($id);
                        foreach ($personagem as $key) {
                            $img = $key['img'];
                        }
                        echo "<div>";
                            echo "<img src='../../$img' style='height:260px;width:220px'>";
                            if($_SESSION['monstros_defender'] != 0 || $_SESSION['ataques_defender'] != 0){
                                if(isset($_SESSION['defesa'])){
                                    if(isset($_SESSION['defensor']) && $_SESSION['defensor'] == $id){
                                        if(isset($_SESSION['vida_perdida'])){
                                            if(isset($_SESSION['efeito_bonus'])){
                                                $msg = "(Dano adicional devido a efeitos causados pelo inimigo!)";
                                            } else {
                                                $msg = "";
                                            }
                                            if(isset($_SESSION['mensagem'])){

                                            } else {
                                                $_SESSION['mensagem'] = "";
                                            }
                                            echo "<h2 style='color: red'>Defesa Mal-Sucedida</h2>";
                                            echo "<h2>Defesa: ".$_SESSION['defesa_total']."  <a style='color:red'>".$_SESSION['mensagem']."</a></h2>";
                                            echo "<h2>Vida Perdida: ".$_SESSION['vida_perdida']." ".$msg."</h2>";
                                            echo "<h2><a href='defender.php?id=$id'> Defender </a></h2>";
                                        } else {
                                            echo "<h2 style='color:green'>Defesa Bem-Sucedida</h2>";
                                            echo "<h2>Defesa: ".$_SESSION['defesa_total']."</h2>";
                                            echo "<h2>Dado: ".$_SESSION['dado']." - Bônus: ".$_SESSION['bonus']."</h2>";
                                            echo "<h2 class='defesa__pers'><a class='defesa__pers__a' href='defender.php?id=$id'> Defender </a></h2>";
                                        }
                                    } else {
                                        echo "<h2 class='defesa__pers'><a class='defesa__pers__a' href='defender.php?id=$id'> Defender </a></h2>";
                                    }
                                } else {
                                    echo "<h2 class='defesa__pers'><a class='defesa__pers__a' href='defender.php?id=$id'> Defender </a></h2>";
                                }
                            } else {
                                if(isset($_SESSION['vida_perdida']) && $_SESSION['defensor'] == $id){
                                    if(isset($_SESSION['efeito_bonus'])){
                                        $msg = "(Dano adicional devido a efeitos causados pelo inimigo!)";
                                    } else {
                                        $msg = "";
                                    }
                                    if(isset($_SESSION['mensagem'])){

                                    } else {
                                        $_SESSION['mensagem'] = "";
                                    }
                                    echo "<h2 style='color: red'>Defesa Mal-Sucedida</h2>";
                                    echo "<h2>Defesa: ".$_SESSION['defesa_total']."  <a style='color:red'>".$_SESSION['mensagem']."</a></h2>";
                                    echo "<h2>Vida Perdida: ".$_SESSION['vida_perdida']." ".$msg."</h2>";
                                } else if($_SESSION['defensor'] == $id) {
                                    echo "<h2 style='color:green'>Defesa Bem-Sucedida</h2>";
                                    echo "<h2>Defesa: ".$_SESSION['defesa_total']."</h2>";
                                    echo "<h2>Dado: ".$_SESSION['dado']." - Bônus: ".$_SESSION['bonus']."</h2>";
                                }
                            }
                        echo "</div>";
            
                    echo "</div>";
                    if(isset($_SESSION['monstros_defender']) && $_SESSION['monstros_defender'] == 0){
                        echo "<br>";
                        echo "<br>";
                        echo "<h2><a href='passar_turno.php?id=monstros'>Concluir Turno</a></h2>";
                    } else if(isset($_SESSION['ataques_defender']) && $_SESSION['ataques_defender'] == 0){
                        echo "<br>";
                        echo "<br>";
                        echo "<h2 class='acao__link'><a class='link' href='passar_turno.php?id=monstros'>Concluir Turno</a></h2>";
                    } 
                } else {
                    if(isset($_SESSION['boss'])){
                        echo "<h2>Número de ataques para defender: ".$_SESSION['ataques_defender']."</h2>";
                        echo "<br>";
                    } else {
                        echo "<h2>Número de inimigos para defender: ".$_SESSION['monstros_defender']."</h2>";
                        echo "<br>";
                    }

                    

                    echo "<div>";
                    
                        $id = $_SESSION['turno1'];
                        $personagem = $repositorio->MostrarPersonagem($id);
                        foreach ($personagem as $key) {
                            $img = $key['img'];
                        }
                        echo "<div>";
                            echo "<img src='../../$img' style='height:260px;width:220px'>";
                            if(isset($_SESSION['monstros_defender']) && $_SESSION['monstros_defender'] != 0 || $_SESSION['ataques_defender'] != 0){
                                if(isset($_SESSION['defesa'])){
                                    if(isset($_SESSION['defensor']) && $_SESSION['defensor'] == $id){
                                        if(isset($_SESSION['vida_perdida'])){
                                            if(isset($_SESSION['efeito_bonus'])){
                                                $msg = "(Dano adicional devido a efeitos causados pelo inimigo!)";
                                            } else {
                                                $msg = "";
                                            }
                                            if(isset($_SESSION['mensagem'])){

                                            } else {
                                                $_SESSION['mensagem'] = "";
                                            }
                                            echo "<h2 style='color: red'>Defesa Mal-Sucedida</h2>";
                                            echo "<h2>Defesa: ".$_SESSION['defesa_total']."  <a style='color:red'>".$_SESSION['mensagem']."</a></h2>";
                                            echo "<h2>Vida Perdida: ".$_SESSION['vida_perdida']." ".$msg."</h2>";
                                            echo "<h2><a href='defender.php?id=$id'> Defender </a></h2>";
                                        } else {
                                            echo "<h2 style='color:green'>Defesa Bem-Sucedida</h2>";
                                            echo "<h2>Defesa: ".$_SESSION['defesa_total']."</h2>";
                                            echo "<h2>Dado: ".$_SESSION['dado']." - Bônus: ".$_SESSION['bonus']."</h2>";
                                            echo "<h2><a href='defender.php?id=$id'> Defender </a></h2>";
                                        }
                                    } else {
                                        echo "<h2><a href='defender.php?id=$id'> Defender </a></h2>";
                                    }
                                } else {
                                    echo "<h2><a href='defender.php?id=$id'> Defender </a></h2>";
                                }
                            } else {
                                if(isset($_SESSION['vida_perdida']) && $_SESSION['defensor'] == $id){
                                    if(isset($_SESSION['efeito_bonus'])){
                                        $msg = "(Dano adicional devido a efeitos causados pelo inimigo!)";
                                    } else {
                                        $msg = "";
                                    }
                                    if(isset($_SESSION['mensagem'])){

                                    } else {
                                        $_SESSION['mensagem'] = "";
                                    }
                                    echo "<h2 style='color: red'>Defesa Mal-Sucedida</h2>";
                                    echo "<h2>Defesa: ".$_SESSION['defesa_total']."  <a style='color:red'>".$_SESSION['mensagem']."</a></h2>";
                                    echo "<h2>Vida Perdida: ".$_SESSION['vida_perdida']." ".$msg."</h2>";
                                } else if($_SESSION['defensor'] == $id) {
                                    echo "<h2 style='color:green'>Defesa Bem-Sucedida</h2>";
                                    echo "<h2>Defesa: ".$_SESSION['defesa_total']."</h2>";
                                    echo "<h2>Dado: ".$_SESSION['dado']." - Bônus: ".$_SESSION['bonus']."</h2>";
                                } 
                            }
                        echo "</div>";
                        

                        $id = $_SESSION['turno2'];
                        $personagem = $repositorio->MostrarPersonagem($id);
                        foreach ($personagem as $key) {
                            $img = $key['img'];
                        }
                        echo "<div>";
                            echo "<img src='../../$img' style='height:260px;width:220px'>";
                            if($_SESSION['monstros_defender'] != 0 || $_SESSION['ataques_defender'] != 0){
                                if(isset($_SESSION['defesa'])){
                                    if(isset($_SESSION['defensor']) && $_SESSION['defensor'] == $id){
                                        if(isset($_SESSION['vida_perdida'])){
                                            if(isset($_SESSION['efeito_bonus'])){
                                                $msg = "(Dano adicional devido a efeitos causados pelo inimigo!)";
                                            } else {
                                                $msg = "";
                                            }
                                            if(isset($_SESSION['mensagem'])){

                                            } else {
                                                $_SESSION['mensagem'] = "";
                                            }
                                            echo "<h2 style='color: red'>Defesa Mal-Sucedida</h2>";
                                            echo "<h2>Defesa: ".$_SESSION['defesa_total']."  <a style='color:red'>".$_SESSION['mensagem']."</a></h2>";
                                            echo "<h2>Vida Perdida: ".$_SESSION['vida_perdida']." ".$msg."</h2>";
                                            echo "<h2><a href='defender.php?id=$id'> Defender </a></h2>";
                                        } else {
                                            echo "<h2 style='color:green'>Defesa Bem-Sucedida</h2>";
                                            echo "<h2>Defesa: ".$_SESSION['defesa_total']."</h2>";
                                            echo "<h2>Dado: ".$_SESSION['dado']." - Bônus: ".$_SESSION['bonus']."</h2>";
                                            echo "<h2><a href='defender.php?id=$id'> Defender </a></h2>";
                                        }
                                    } else {
                                        echo "<h2><a href='defender.php?id=$id'> Defender </a></h2>";
                                    }
                                } else {
                                    echo "<h2><a href='defender.php?id=$id'> Defender </a></h2>";
                                }
                            } else {
                                if(isset($_SESSION['vida_perdida']) && $_SESSION['defensor'] == $id){
                                    if(isset($_SESSION['efeito_bonus'])){
                                        $msg = "(Dano adicional devido a efeitos causados pelo inimigo!)";
                                    } else {
                                        $msg = "";
                                    }
                                    if(isset($_SESSION['mensagem'])){

                                    } else {
                                        $_SESSION['mensagem'] = "";
                                    }
                                    echo "<h2 style='color: red'>Defesa Mal-Sucedida</h2>";
                                    echo "<h2>Defesa: ".$_SESSION['defesa_total']."  <a style='color:red'>".$_SESSION['mensagem']."</a></h2>";
                                    echo "<h2>Vida Perdida: ".$_SESSION['vida_perdida']." ".$msg."</h2>";
                                    $x = $_SESSION['turno'];
                                } else if($_SESSION['defensor'] == $id) {
                                    echo "<h2 style='color:green'>Defesa Bem-Sucedida</h2>";
                                    echo "<h2>Defesa: ".$_SESSION['defesa_total']."</h2>";
                                    echo "<h2>Dado: ".$_SESSION['dado']." - Bônus: ".$_SESSION['bonus']."</h2>";
                                    $x = $_SESSION['turno'];
                                }
                            }
                        echo "</div>";

                        $id = $_SESSION['turno3'];
                        $personagem = $repositorio->MostrarPersonagem($id);
                        foreach ($personagem as $key) {
                            $img = $key['img'];
                        }
                        echo "<div>";
                            echo "<img src='../../$img' style='height:260px;width:220px'>";
                            if($_SESSION['monstros_defender'] != 0 || $_SESSION['ataques_defender'] != 0){
                                if(isset($_SESSION['defesa'])){
                                    if(isset($_SESSION['defensor']) && $_SESSION['defensor'] == $id){
                                        if(isset($_SESSION['vida_perdida'])){
                                            if(isset($_SESSION['efeito_bonus'])){
                                                $msg = "(Dano adicional devido a efeitos causados pelo inimigo!)";
                                            } else {
                                                $msg = "";
                                            }
                                            if(isset($_SESSION['mensagem'])){

                                            } else {
                                                $_SESSION['mensagem'] = "";
                                            }
                                            echo "<h2 style='color: red'>Defesa Mal-Sucedida</h2>";
                                            echo "<h2>Defesa: ".$_SESSION['defesa_total']."  <a style='color:red'>".$_SESSION['mensagem']."</a></h2>";
                                            echo "<h2>Vida Perdida: ".$_SESSION['vida_perdida']." ".$msg."</h2>";
                                            echo "<h2><a href='defender.php?id=$id'> Defender </a></h2>";
                                        } else {
                                            echo "<h2 style='color:green'>Defesa Bem-Sucedida</h2>";
                                            echo "<h2>Defesa: ".$_SESSION['defesa_total']."</h2>";
                                            echo "<h2>Dado: ".$_SESSION['dado']." - Bônus: ".$_SESSION['bonus']."</h2>";
                                            echo "<h2><a href='defender.php?id=$id'> Defender </a></h2>";
                                        }
                                    } else {
                                        echo "<h2><a href='defender.php?id=$id'> Defender </a></h2>";
                                    }
                                } else {
                                    echo "<h2><a href='defender.php?id=$id'> Defender </a></h2>";
                                }
                            } else {
                                if(isset($_SESSION['vida_perdida']) && $_SESSION['defensor'] == $id){
                                    if(isset($_SESSION['efeito_bonus'])){
                                        $msg = "(Dano adicional devido a efeitos causados pelo inimigo!)";
                                    } else {
                                        $msg = "";
                                    }
                                    if(isset($_SESSION['mensagem'])){

                                    } else {
                                        $_SESSION['mensagem'] = "";
                                    }
                                    echo "<h2 style='color: red'>Defesa Mal-Sucedida</h2>";
                                    echo "<h2>Defesa: ".$_SESSION['defesa_total']."  <a style='color:red'>".$_SESSION['mensagem']."</a></h2>";
                                    echo "<h2>Vida Perdida: ".$_SESSION['vida_perdida']." ".$msg."</h2>";
                                } else if($_SESSION['defensor'] == $id) {
                                    echo "<h2 style='color:green'>Defesa Bem-Sucedida</h2>";
                                    echo "<h2>Defesa: ".$_SESSION['defesa_total']."</h2>";
                                    echo "<h2>Dado: ".$_SESSION['dado']." - Bônus: ".$_SESSION['bonus']."</h2>";
                                }
                            }
                        echo "</div>";

                        $id = $_SESSION['turno4'];
                        $personagem = $repositorio->MostrarPersonagem($id);
                        foreach ($personagem as $key) {
                            $img = $key['img'];
                        }
                        echo "<div>";
                            echo "<img src='../../$img' style='height:260px;width:220px'>";
                            if($_SESSION['monstros_defender'] != 0 || $_SESSION['ataques_defender'] != 0){
                                if(isset($_SESSION['defesa'])){
                                    if(isset($_SESSION['defensor']) && $_SESSION['defensor'] == $id){
                                        if(isset($_SESSION['vida_perdida'])){
                                            if(isset($_SESSION['efeito_bonus'])){
                                                $msg = "(Dano adicional devido a efeitos causados pelo inimigo!)";
                                            } else {
                                                $msg = "";
                                            }
                                            if(isset($_SESSION['mensagem'])){

                                            } else {
                                                $_SESSION['mensagem'] = "";
                                            }
                                            echo "<h2 style='color: red'>Defesa Mal-Sucedida</h2>";
                                            echo "<h2>Defesa: ".$_SESSION['defesa_total']."  <a style='color:red'>".$_SESSION['mensagem']."</a></h2>";
                                            echo "<h2>Vida Perdida: ".$_SESSION['vida_perdida']." ".$msg."</h2>";
                                            echo "<h2><a href='defender.php?id=$id'> Defender </a></h2>";
                                        } else {
                                            echo "<h2 style='color:green'>Defesa Bem-Sucedida</h2>";
                                            echo "<h2>Defesa: ".$_SESSION['defesa_total']."</h2>";
                                            echo "<h2>Dado: ".$_SESSION['dado']." - Bônus: ".$_SESSION['bonus']."</h2>";
                                            echo "<h2><a href='defender.php?id=$id'> Defender </a></h2>";
                                        }
                                    } else {
                                        echo "<h2><a href='defender.php?id=$id'> Defender </a></h2>";
                                    }
                                } else {
                                    echo "<h2><a href='defender.php?id=$id'> Defender </a></h2>";
                                }
                            } else {
                                if(isset($_SESSION['vida_perdida']) && $_SESSION['defensor'] == $id){
                                    if(isset($_SESSION['efeito_bonus'])){
                                        $msg = "(Dano adicional devido a efeitos causados pelo inimigo!)";
                                    } else {
                                        $msg = "";
                                    }
                                    if(isset($_SESSION['mensagem'])){

                                    } else {
                                        $_SESSION['mensagem'] = "";
                                    }
                                    echo "<h2 style='color: red'>Defesa Mal-Sucedida</h2>";
                                    echo "<h2>Defesa: ".$_SESSION['defesa_total']."  <a style='color:red'>".$_SESSION['mensagem']."</a></h2>";
                                    echo "<h2>Vida Perdida: ".$_SESSION['vida_perdida']." ".$msg."</h2>";
                                } else if($_SESSION['defensor'] == $id) {
                                    echo "<h2 style='color:green'>Defesa Bem-Sucedida</h2>";
                                    echo "<h2>Defesa: ".$_SESSION['defesa_total']."</h2>";
                                    echo "<h2>Dado: ".$_SESSION['dado']." - Bônus: ".$_SESSION['bonus']."</h2>";
                                }
                            }
                        echo "</div>";
            
                    echo "</div>";

                    if($_SESSION['monstros_defender'] == 0 || $_SESSION['ataques_defender'] != NULL && $_SESSION['ataques_defender'] == 0){
                        echo "<br>";
                        echo "<br>";
                        echo "<h2><a href='passar_turno.php?id=monstros'>Concluir Turno</a></h2>";
                    }
                }
             
                

            } else if($_SESSION['turno'] == "monstros" && isset($_SESSION['nome_boss']) && $_SESSION['nome_boss'] == "Dragão ") {
                $dado = rand(1,6);

                if($dado == 1 || $dado == 2){
                    echo "<h2>O Dragão Cospe Fogo!!!!!</h2>";

                    $id = $_SESSION['personagem1'];
                    $personagem = $repositorio->MostrarPersonagem($id);
                    foreach ($personagem as $key) {
                        $img = $key['img'];
                        $nivel = $key['nivel'];
                        if($nivel == 1){
                            $nivel = 0;
                        } else if($nivel == 3){
                            $nivel = 1;
                        } else if($nivel == 5){
                            $nivel = 2;
                        } else {
                            $nivel = $nivel / 2;
                        }
                        $chance = $dado + $nivel;
                        echo "<div>";
                            echo "<img src='../../$img' style='height:260px;width:220px'>";
                            if($chance >= 6){
                                echo "<h2 style='color: green'>Se salvou</h2>";
                            } else {
                                echo "<h2 style='color:red'>Não se salvou!! Tomou 1 de dano!!</h2>";
                                $_SESSION['vida_atual_personagem1'] = $_SESSION['vida_atual_personagem1'] - 1;
                            }
                        echo "</div>";
                    }

                    $id = $_SESSION['personagem2'];
                    $personagem = $repositorio->MostrarPersonagem($id);
                    foreach ($personagem as $key) {
                        $img = $key['img'];
                        $nivel = $key['nivel'];
                        if($nivel == 1){
                            $nivel = 0;
                        } else if($nivel == 3){
                            $nivel = 1;
                        } else if($nivel == 5){
                            $nivel = 2;
                        } else {
                            $nivel = $nivel / 2;
                        }
                        $chance = $dado + $nivel;
                        echo "<div>";
                            echo "<img src='../../$img' style='height:260px;width:220px'>";
                            if($chance >= 6){
                                echo "<h2 style='color: green'>Se salvou</h2>";
                            } else {
                                echo "<h2 style='color:red'>Não se salvou!! Tomou 1 de dano!!</h2>";
                                $_SESSION['vida_atual_personagem2'] = $_SESSION['vida_atual_personagem2'] - 1;
                            }
                        echo "</div>";
                    }

                    $id = $_SESSION['personagem3'];
                    $personagem = $repositorio->MostrarPersonagem($id);
                    foreach ($personagem as $key) {
                        $img = $key['img'];
                        $nivel = $key['nivel'];
                        if($nivel == 1){
                            $nivel = 0;
                        } else if($nivel == 3){
                            $nivel = 1;
                        } else if($nivel == 5){
                            $nivel = 2;
                        } else {
                            $nivel = $nivel / 2;
                        }
                        $chance = $dado + $nivel;
                        echo "<div>";
                            echo "<img src='../../$img' style='height:260px;width:220px'>";
                            if($chance >= 6){
                                echo "<h2 style='color: green'>Se salvou</h2>";
                            } else {
                                echo "<h2 style='color:red'>Não se salvou!! Tomou 1 de dano!!</h2>";
                                $_SESSION['vida_atual_personagem3'] = $_SESSION['vida_atual_personagem3'] - 1;
                            }
                        echo "</div>";
                    }

                    $id = $_SESSION['personagem4'];
                    $personagem = $repositorio->MostrarPersonagem($id);
                    foreach ($personagem as $key) {
                        $img = $key['img'];
                        $nivel = $key['nivel'];
                        if($nivel == 1){
                            $nivel = 0;
                        } else if($nivel == 3){
                            $nivel = 1;
                        } else if($nivel == 5){
                            $nivel = 2;
                        } else {
                            $nivel = $nivel / 2;
                        }
                        $chance = $dado + $nivel;
                        echo "<div>";
                            echo "<img src='../../$img' style='height:260px;width:220px'>";
                            if($chance >= 6){
                                echo "<h2 style='color: green'>Se salvou</h2>";
                            } else {
                                echo "<h2 style='color:red'>Não se salvou!! Tomou 1 de dano!!</h2>";
                                $_SESSION['vida_atual_personagem4'] = $_SESSION['vida_atual_personagem4'] - 1;
                            }
                        echo "</div>";
                    }
                    echo "<h2><a href='passar_turno.php?id=monstros'>Concluir Turno</a></h2>";
                } else {
                    if(isset($_SESSION['defensor'])){
                        $a = $_SESSION['alvo'];

                        $id = $_SESSION["personagem$a"];
                        $personagem = $repositorio->MostrarPersonagem($id);
                        foreach ($personagem as $key) {
                            $img = $key['img'];
                        }
                        echo "<div>";
                            echo "<img src='../../$img' style='height:260px;width:220px'>";
                            if(isset($_SESSION['vida_perdida']) && $_SESSION['defensor'] == $id){
                                if(isset($_SESSION['efeito_bonus'])){
                                    $msg = "(Dano adicional devido a efeitos causados pelo inimigo!)";
                                } else {
                                    $msg = "";
                                }
                                if(isset($_SESSION['mensagem'])){

                                } else {
                                    $_SESSION['mensagem'] = "";
                                }
                                echo "<h2 style='color: red'>Defesa Mal-Sucedida</h2>";
                                echo "<h2>Defesa: ".$_SESSION['defesa_total']."  <a style='color:red'>".$_SESSION['mensagem']."</a></h2>";
                                echo "<h2>Vida Perdida: ".$_SESSION['vida_perdida']." ".$msg."</h2>";
                            } else if($_SESSION['defensor'] == $id) {
                                echo "<h2 style='color:green'>Defesa Bem-Sucedida</h2>";
                                echo "<h2>Defesa: ".$_SESSION['defesa_total']."</h2>";
                                echo "<h2>Dado: ".$_SESSION['dado']." - Bônus: ".$_SESSION['bonus']."</h2>";
                            }
                        echo "</div>";

                        if(isset($_SESSION['defensor2'])){
                            $a = $_SESSION['alvo2'];
                        } else {
                            $_SESSION['alvo2'] = $a = rand(1,4);
                            $_SESSION['defensor2'] = true;
                        }

                        if(isset($_SESSION['ataque2'])){
                            $a = $_SESSION['alvo2'];

                            $id = $_SESSION["personagem$a"];
                            $personagem = $repositorio->MostrarPersonagem($id);
                            foreach ($personagem as $key) {
                                $img = $key['img'];
                            }
                            echo "<div>";
                                echo "<img src='../../$img' style='height:260px;width:220px'>";
                                if(isset($_SESSION['vida_perdida']) && $_SESSION['defensor'] == $id){
                                    if(isset($_SESSION['efeito_bonus'])){
                                        $msg = "(Dano adicional devido a efeitos causados pelo inimigo!)";
                                    } else {
                                        $msg = "";
                                    }
                                    if(isset($_SESSION['mensagem'])){

                                    } else {
                                        $_SESSION['mensagem'] = "";
                                    }
                                    echo "<h2 style='color: red'>Defesa Mal-Sucedida</h2>";
                                    echo "<h2>Defesa: ".$_SESSION['defesa_total']."  <a style='color:red'>".$_SESSION['mensagem']."</a></h2>";
                                    echo "<h2>Vida Perdida: ".$_SESSION['vida_perdida']." ".$msg."</h2>";
                                } else if($_SESSION['defensor'] == $id) {
                                    echo "<h2 style='color:green'>Defesa Bem-Sucedida</h2>";
                                    echo "<h2>Defesa: ".$_SESSION['defesa_total']."</h2>";
                                    echo "<h2>Dado: ".$_SESSION['dado']." - Bônus: ".$_SESSION['bonus']."</h2>";
                                }
                            echo "</div>";
                            echo "<h2><a href='passar_turno.php?id=monstros'>Concluir Turno</a></h2>";

                        } else {
                            $id = $_SESSION["personagem$a"];
                            $personagem = $repositorio->MostrarPersonagem($id);
                            foreach ($personagem as $key) {
                                $img = $key['img'];
                                echo "<div>";
                                    echo "<img src='../../$img' style='height:260px;width:220px'>";
                                    echo "<h2><a href='defender.php?id=$id'>Defender</a></h2>";
                                echo "</div>";
                            }
                        }

                    } else {
                        
                        if(isset($_SESSION['defensor1'])){
                            $a = $_SESSION['alvo'];
                        } else {
                            $_SESSION['alvo'] = $a = rand(1,4);
                            $_SESSION['defensor1'] = true;
                        }
                        

                        $id = $_SESSION["personagem$a"];
                        $personagem = $repositorio->MostrarPersonagem($id);
                        foreach ($personagem as $key) {
                            $img = $key['img'];
                            echo "<div>";
                                echo "<img src='../../$img' style='height:260px;width:220px'>";
                                echo "<h2><a href='defender.php?id=$id'>Defender</a></h2>";
                            echo "</div>";
                        }
                    }
                }
            } else if($_SESSION['turno'] == "monstros" && isset($_SESSION['boss']) && $_SESSION['nome_boss'] == "Quimera"){

                echo "<h2>Ataque de Fogo da Quimera!!!</h2>";
                echo "<div>";
                $id = $_SESSION["personagem1"];
                $personagem = $repositorio->MostrarPersonagem($id);
                foreach ($personagem as $key) {
                    $img = $key['img'];
                }
                echo "<div>";
                    echo "<img src='../../$img' style='height:260px;width:220px'>";
                    $dado = rand(1,6);
                    if($dado >= 4){
                        echo "<h2 style='color: green'>Se Salvou</h2>";
                    } else {
                        echo "<h2 style='color:red'>Não se Salvou!!! Tomou 1 de dano</h2>";
                        $_SESSION['vida_atual_personagem1'] = $_SESSION['vida_atual_personagem1'] - 1;
                    }
                echo "</div>";

                $id = $_SESSION["personagem2"];
                $personagem = $repositorio->MostrarPersonagem($id);
                foreach ($personagem as $key) {
                    $img = $key['img'];
                }
                echo "<div>";
                    echo "<img src='../../$img' style='height:260px;width:220px'>";
                    $dado = rand(1,6);
                    if($dado >= 4){
                        echo "<h2 style='color: green'>Se Salvou</h2>";
                    } else {
                        echo "<h2 style='color:red'>Não se Salvou!!! Tomou 1 de dano</h2>";
                        $_SESSION['vida_atual_personagem2'] = $_SESSION['vida_atual_personagem2'] - 1;
                    }
                echo "</div>";

                $id = $_SESSION["personagem3"];
                $personagem = $repositorio->MostrarPersonagem($id);
                foreach ($personagem as $key) {
                    $img = $key['img'];
                }
                echo "<div>";
                    echo "<img src='../../$img' style='height:260px;width:220px'>";
                    $dado = rand(1,6);
                    if($dado >= 4){
                        echo "<h2 style='color: green'>Se Salvou</h2>";
                    } else {
                        echo "<h2 style='color:red'>Não se Salvou!!! Tomou 1 de dano</h2>";
                        $_SESSION['vida_atual_personagem3'] = $_SESSION['vida_atual_personagem3'] - 1;
                    }
                echo "</div>";

                $id = $_SESSION["personagem4"];
                $personagem = $repositorio->MostrarPersonagem($id);
                foreach ($personagem as $key) {
                    $img = $key['img'];
                }
                echo "<div>";
                    echo "<img src='../../$img' style='height:260px;width:220px'>";
                    $dado = rand(1,6);
                    if($dado >= 4){
                        echo "<h2 style='color: green'>Se Salvou</h2>";
                    } else {
                        echo "<h2 style='color:red'>Não se Salvou!!! Tomou 1 de dano</h2>";
                        $_SESSION['vida_atual_personagem4'] = $_SESSION['vida_atual_personagem4'] - 1;
                    }
                echo "</div>";
                echo "</div>";
                echo "<h2><a href='passar_turno.php?id=monstros'>Concluir Turno</a></h2>";

            } else if($_SESSION['turno'] == "monstros" && isset($_SESSION['nome_boss']) && $_SESSION['nome_boss'] == "Comedor de Ferro") {
                $id = $_SESSION['personagem1'];
                $personagem = $repositorio->MostrarPersonagem($id);
                foreach ($personagem as $key) {
                    $img = $key['img'];
                }
                echo "<div>";
                        echo "<img src='../../$img' style='height:260px;width:220px'>";
                        if($_SESSION['ataques_defender'] != 0){
                            if(isset($_SESSION['defesa'])){
                                if(isset($_SESSION['defensor']) && $_SESSION['defensor'] == $id){

                                    if(isset($_SESSION['item_comido'])){
                                        if($_SESSION['item_comido'] == $_SESSION['arma1_personagem1']){
                                            $_SESSION['arma1_personagem1'] = "";
                                        } else if($_SESSION['item_comido'] == $_SESSION['arma2_personagem1']){
                                            $_SESSION['arma2_personagem1'] = "";
                                        }
                                    }

                                    if(isset($_SESSION['valor_comido'])){
                                        $valor = "(".$_SESSION['valor_comido'].")";
                                        unset($_SESSION['valor_comido']);
                                    } else {
                                        $valor = "";
                                    }

                                    if(isset($_SESSION['item_comido'])){
                                        echo "<h2 style='color: red'>Defesa Mal-Sucedida</h2>";
                                        echo "<h2>Defesa: ".$_SESSION['defesa_total']."</h2>";
                                        echo "<h2>Item Devorado: ".$_SESSION['item_comido']." ".$valor."</h2>";
                                        echo "<h2><a href='defender.php?id=$id'> Defender </a></h2>";
                                    } else {
                                        echo "<h2 style='color:green'>Defesa Bem-Sucedida</h2>";
                                        echo "<h2>Defesa: ".$_SESSION['defesa_total']."</h2>";
                                        echo "<h2>Dado: ".$_SESSION['dado']." - Bônus: ".$_SESSION['bonus']."</h2>";
                                        echo "<h2><a href='defender.php?id=$id'> Defender </a></h2>";
                                    }
                                } else {
                                    echo "<h2><a href='defender.php?id=$id'> Defender </a></h2>";
                                }
                            } else {
                                echo "<h2><a href='defender.php?id=$id'> Defender </a></h2>";
                            }
                        } else {
                            if(isset($_SESSION['item_comido']) && $_SESSION['defensor'] == $id){
                                if(isset($_SESSION['item_comido'])){
                                    if($_SESSION['item_comido'] == $_SESSION['arma1_personagem1']){
                                        $_SESSION['arma1_personagem1'] = "";
                                    } else if($_SESSION['item_comido'] == $_SESSION['arma2_personagem1']){
                                        $_SESSION['arma2_personagem1'] = "";
                                    }
                                }
                                if(isset($_SESSION['valor_comido'])){
                                    $valor = "(".$_SESSION['valor_comido'].")";
                                    unset($_SESSION['valor_comido']);
                                } else {
                                    $valor = "";
                                }
                                echo "<h2 style='color: red'>Defesa Mal-Sucedida</h2>";
                                echo "<h2>Defesa: ".$_SESSION['defesa_total']."</h2>";
                                echo "<h2>Vida Perdida: ".$_SESSION['item_comido']." ".$valor."</h2>";
                            } else if($_SESSION['defensor'] == $id) {
                                echo "<h2 style='color:green'>Defesa Bem-Sucedida</h2>";
                                echo "<h2>Defesa: ".$_SESSION['defesa_total']."</h2>";
                                echo "<h2>Dado: ".$_SESSION['dado']." - Bônus: ".$_SESSION['bonus']."</h2>";
                            }
                        }
                    echo "</div>";


                $id = $_SESSION['personagem2'];
                $personagem = $repositorio->MostrarPersonagem($id);
                foreach ($personagem as $key) {
                    $img = $key['img'];
                }
                echo "<div>";
                        echo "<img src='../../$img' style='height:260px;width:220px'>";
                        if($_SESSION['ataques_defender'] != 0){
                            if(isset($_SESSION['defesa'])){
                                if(isset($_SESSION['defensor']) && $_SESSION['defensor'] == $id){

                                    if(isset($_SESSION['item_comido'])){
                                        if($_SESSION['item_comido'] == $_SESSION['arma1_personagem2']){
                                            $_SESSION['arma1_personagem2'] = "";
                                        } else if($_SESSION['item_comido'] == $_SESSION['arma2_personagem2']){
                                            $_SESSION['arma2_personagem2'] = "";
                                        }
                                    }

                                    if(isset($_SESSION['valor_comido'])){
                                        $valor = "(".$_SESSION['valor_comido'].")";
                                        unset($_SESSION['valor_comido']);
                                    } else {
                                        $valor = "";
                                    }

                                    if(isset($_SESSION['item_comido'])){
                                        echo "<h2 style='color: red'>Defesa Mal-Sucedida</h2>";
                                        echo "<h2>Defesa: ".$_SESSION['defesa_total']."</h2>";
                                        echo "<h2>Item Devorado: ".$_SESSION['item_comido']." ".$valor."</h2>";
                                        echo "<h2><a href='defender.php?id=$id'> Defender </a></h2>";
                                    } else {
                                        echo "<h2 style='color:green'>Defesa Bem-Sucedida</h2>";
                                        echo "<h2>Defesa: ".$_SESSION['defesa_total']."</h2>";
                                        echo "<h2>Dado: ".$_SESSION['dado']." - Bônus: ".$_SESSION['bonus']."</h2>";
                                        echo "<h2><a href='defender.php?id=$id'> Defender </a></h2>";
                                    }
                                } else {
                                    echo "<h2><a href='defender.php?id=$id'> Defender </a></h2>";
                                }
                            } else {
                                echo "<h2><a href='defender.php?id=$id'> Defender </a></h2>";
                            }
                        } else {
                            if(isset($_SESSION['item_comido']) && $_SESSION['defensor'] == $id){
                                if(isset($_SESSION['item_comido'])){
                                    if($_SESSION['item_comido'] == $_SESSION['arma1_personagem2']){
                                        $_SESSION['arma1_personagem2'] = "";
                                    } else if($_SESSION['item_comido'] == $_SESSION['arma2_personagem2']){
                                        $_SESSION['arma2_personagem2'] = "";
                                    }
                                }
                                if(isset($_SESSION['valor_comido'])){
                                    $valor = "(".$_SESSION['valor_comido'].")";
                                    unset($_SESSION['valor_comido']);
                                } else {
                                    $valor = "";
                                }
                                echo "<h2 style='color: red'>Defesa Mal-Sucedida</h2>";
                                echo "<h2>Defesa: ".$_SESSION['defesa_total']."</h2>";
                                echo "<h2>Vida Perdida: ".$_SESSION['item_comido']." ".$valor."</h2>";
                            } else if($_SESSION['defensor'] == $id) {
                                echo "<h2 style='color:green'>Defesa Bem-Sucedida</h2>";
                                echo "<h2>Defesa: ".$_SESSION['defesa_total']."</h2>";
                                echo "<h2>Dado: ".$_SESSION['dado']." - Bônus: ".$_SESSION['bonus']."</h2>";
                            }
                        }
                    echo "</div>";


                $id = $_SESSION['personagem3'];
                $personagem = $repositorio->MostrarPersonagem($id);
                foreach ($personagem as $key) {
                    $img = $key['img'];
                }
                echo "<div>";
                        echo "<img src='../../$img' style='height:260px;width:220px'>";
                        if($_SESSION['ataques_defender'] != 0){
                            if(isset($_SESSION['defesa'])){
                                if(isset($_SESSION['defensor']) && $_SESSION['defensor'] == $id){

                                    if(isset($_SESSION['item_comido'])){
                                        if($_SESSION['item_comido'] == $_SESSION['arma1_personagem3']){
                                            $_SESSION['arma1_personagem3'] = "";
                                        } else if($_SESSION['item_comido'] == $_SESSION['arma2_personagem3']){
                                            $_SESSION['arma2_personagem3'] = "";
                                        }
                                    }

                                    if(isset($_SESSION['valor_comido'])){
                                        $valor = "(".$_SESSION['valor_comido'].")";
                                        unset($_SESSION['valor_comido']);
                                    } else {
                                        $valor = "";
                                    }

                                    if(isset($_SESSION['item_comido'])){
                                        echo "<h2 style='color: red'>Defesa Mal-Sucedida</h2>";
                                        echo "<h2>Defesa: ".$_SESSION['defesa_total']."</h2>";
                                        echo "<h2>Item Devorado: ".$_SESSION['item_comido']." ".$valor."</h2>";
                                        echo "<h2><a href='defender.php?id=$id'> Defender </a></h2>";
                                    } else {
                                        echo "<h2 style='color:green'>Defesa Bem-Sucedida</h2>";
                                        echo "<h2>Defesa: ".$_SESSION['defesa_total']."</h2>";
                                        echo "<h2>Dado: ".$_SESSION['dado']." - Bônus: ".$_SESSION['bonus']."</h2>";
                                        echo "<h2><a href='defender.php?id=$id'> Defender </a></h2>";
                                    }
                                } else {
                                    echo "<h2><a href='defender.php?id=$id'> Defender </a></h2>";
                                }
                            } else {
                                echo "<h2><a href='defender.php?id=$id'> Defender </a></h2>";
                            }
                        } else {
                            if(isset($_SESSION['item_comido']) && $_SESSION['defensor'] == $id){
                                if(isset($_SESSION['item_comido'])){
                                    if($_SESSION['item_comido'] == $_SESSION['arma1_personagem3']){
                                        $_SESSION['arma1_personagem3'] = "";
                                    } else if($_SESSION['item_comido'] == $_SESSION['arma2_personagem3']){
                                        $_SESSION['arma2_personagem3'] = "";
                                    }
                                }
                                if(isset($_SESSION['valor_comido'])){
                                    $valor = "(".$_SESSION['valor_comido'].")";
                                    unset($_SESSION['valor_comido']);
                                } else {
                                    $valor = "";
                                }
                                echo "<h2 style='color: red'>Defesa Mal-Sucedida</h2>";
                                echo "<h2>Defesa: ".$_SESSION['defesa_total']."</h2>";
                                echo "<h2>Vida Perdida: ".$_SESSION['item_comido']." ".$valor."</h2>";
                            } else if($_SESSION['defensor'] == $id) {
                                echo "<h2 style='color:green'>Defesa Bem-Sucedida</h2>";
                                echo "<h2>Defesa: ".$_SESSION['defesa_total']."</h2>";
                                echo "<h2>Dado: ".$_SESSION['dado']." - Bônus: ".$_SESSION['bonus']."</h2>";
                            }
                        }
                    echo "</div>";


                $id = $_SESSION['personagem4'];
                $personagem = $repositorio->MostrarPersonagem($id);
                foreach ($personagem as $key) {
                    $img = $key['img'];
                }
                echo "<div>";
                        echo "<img src='../../$img' style='height:260px;width:220px'>";
                        if($_SESSION['ataques_defender'] != 0){
                            if(isset($_SESSION['defesa'])){
                                if(isset($_SESSION['defensor']) && $_SESSION['defensor'] == $id){

                                    if(isset($_SESSION['item_comido'])){
                                        if($_SESSION['item_comido'] == $_SESSION['arma1_personagem4']){
                                            $_SESSION['arma1_personagem4'] = "";
                                        } else if($_SESSION['item_comido'] == $_SESSION['arma2_personagem4']){
                                            $_SESSION['arma2_personagem4'] = "";
                                        }
                                    }

                                    if(isset($_SESSION['valor_comido'])){
                                        $valor = "(".$_SESSION['valor_comido'].")";
                                        unset($_SESSION['valor_comido']);
                                    } else {
                                        $valor = "";
                                    }

                                    if(isset($_SESSION['item_comido'])){
                                        echo "<h2 style='color: red'>Defesa Mal-Sucedida</h2>";
                                        echo "<h2>Defesa: ".$_SESSION['defesa_total']."</h2>";
                                        echo "<h2>Item Devorado: ".$_SESSION['item_comido']." ".$valor."</h2>";
                                        echo "<h2><a href='defender.php?id=$id'> Defender </a></h2>";
                                    } else {
                                        echo "<h2 style='color:green'>Defesa Bem-Sucedida</h2>";
                                        echo "<h2>Defesa: ".$_SESSION['defesa_total']."</h2>";
                                        echo "<h2>Dado: ".$_SESSION['dado']." - Bônus: ".$_SESSION['bonus']."</h2>";
                                        echo "<h2><a href='defender.php?id=$id'> Defender </a></h2>";
                                    }
                                } else {
                                    echo "<h2><a href='defender.php?id=$id'> Defender </a></h2>";
                                }
                            } else {
                                echo "<h2><a href='defender.php?id=$id'> Defender </a></h2>";
                            }
                        } else {
                            if(isset($_SESSION['item_comido']) && $_SESSION['defensor'] == $id){
                                if(isset($_SESSION['item_comido'])){
                                    if($_SESSION['item_comido'] == $_SESSION['arma1_personagem4']){
                                        $_SESSION['arma1_personagem4'] = "";
                                    } else if($_SESSION['item_comido'] == $_SESSION['arma2_personagem4']){
                                        $_SESSION['arma2_personagem4'] = "";
                                    }
                                }
                                if(isset($_SESSION['valor_comido'])){
                                    $valor = "(".$_SESSION['valor_comido'].")";
                                    unset($_SESSION['valor_comido']);
                                } else {
                                    $valor = "";
                                }
                                echo "<h2 style='color: red'>Defesa Mal-Sucedida</h2>";
                                echo "<h2>Defesa: ".$_SESSION['defesa_total']."</h2>";
                                echo "<h2>Vida Perdida: ".$_SESSION['item_comido']." ".$valor."</h2>";
                            } else if($_SESSION['defensor'] == $id) {
                                echo "<h2 style='color:green'>Defesa Bem-Sucedida</h2>";
                                echo "<h2>Defesa: ".$_SESSION['defesa_total']."</h2>";
                                echo "<h2>Dado: ".$_SESSION['dado']." - Bônus: ".$_SESSION['bonus']."</h2>";
                            }
                        }
                    echo "</div>";

                    if($_SESSION['ataques_defender'] == 0){
                        echo "<h2><a href='passar_turno.php?id=monstros'>Concluir Turno</a></h2>";
                    }

            } else if($_SESSION['turno'] == "monstros") {

            } else {
                // escolher ação contra o monstro
                if(isset($_SESSION['monstro']) || isset($_SESSION['boss'])){
                    $x = $_SESSION['turno'];
                    if(isset($_SESSION['boss'])){
                        if($_SESSION['vida_atual_boss'] > 0){
                            if(isset($_SESSION['opcao_magia'])){
                                $b = "magia";
                                $c = "arma";
                                echo "<h2 class='dano'><a class='link' href='atacar.php?tipo=$c'>Atacar(Arma)</a></h2>";
                                echo "<h2 class='magia'><a class='link' href='atacar.php?tipo=$b'>Atacar(Magia)</a></h2>";
                                echo "<h2 class='fugas'><a class='link' href='#'>Fugir</a></h2>";
                                echo "<br>";
                                echo "<br>";
                                if(isset($_SESSION['fim'])){
                                    echo $_SESSION['fim'];
                                }
                            } else if(isset($_SESSION['atacar_magia'])){ 
                                if(isset($_SESSION["magia1_usada_personagem$a"])){

                                } else {
                                    $_SESSION["magia1_usada_personagem$a"] = false;
                                    $_SESSION["magia2_usada_personagem$a"] = false;
                                    $_SESSION["magia3_usada_personagem$a"] = false;
                                    $_SESSION["magia4_usada_personagem$a"] = false;
                                    $_SESSION["magia5_usada_personagem$a"] = false;
                                    $_SESSION["magia6_usada_personagem$a"] = false;
                                    $_SESSION["magia7_usada_personagem$a"] = false;
                                }
                                    if(isset($_SESSION['magia_usada'])){

                                        if($_SESSION['magia_usada'] == $_SESSION["magia1_personagem$a"]){
                                            $_SESSION["magia1_usada_personagem$a"] = true;
                                        } else if($_SESSION["magia_usada"] == $_SESSION["magia2_personagem$a"]){
                                            $_SESSION["magia2_usada_personagem$a"] = true;
                                        } else if($_SESSION["magia_usada"] == $_SESSION["magia3_personagem$a"]){
                                            $_SESSION["magia3_usada_personagem$a"] = true;
                                        } else if($_SESSION["magia_usada"] == $_SESSION["magia4_personagem$a"]){
                                            $_SESSION["magia4_usada_personagem$a"] = true;
                                        } else if($_SESSION["magia_usada"] == $_SESSION["magia5_personagem$a"]){
                                            $_SESSION["magia5_usada_personagem$a"] = true;
                                        } else if($_SESSION["magia_usada"] == $_SESSION["magia6_personagem$a"]){
                                            $_SESSION["magia6_usada_personagem$a"] = true;
                                        } else if($_SESSION["magia_usada"] == $_SESSION["magia7_personagem$a"]){
                                            $_SESSION["magia7_usada_personagem$a"] = true;
                                        }
                                        

                                        echo "<h2> Dano total: ".$_SESSION['dano']." </h2>";
                                        if(isset($_SESSION['dado2'])){
                                            $x = 2;
                                            $mensagem_principal = "<p> 1 º Dado: ".$_SESSION['dado1']."(Estourou) </p>";
                                            while(isset($_SESSION["dado$x"])){
                                                $nova_mensagem = "<p>".$x."º Dado:".$_SESSION["dado$x"]."</p>";
                                                $mensagem_principal = $mensagem_principal.$nova_mensagem;
                                                $x = $x + 1;
                                            }
                                            $mensagem_principal = $mensagem_principal." Bônus: ".$_SESSION['bonus'];
                                            echo "<p>".$mensagem_principal."</p>";
                                        } else {
                                            echo "<p> Dado: ".$_SESSION['dado1']." Bônus: ".$_SESSION['bonus']." </p>";
                                        }
                                        $x = $_SESSION['turno'];
                                        echo "<br>";
                                        echo "<h3>Vida perdida do Chefe: ".$_SESSION['vida_perdida_boss']."</h3>";
                                        echo "<br>";
                                        echo "<h2><a href='passar_turno.php?id=$x'>Concluir Turno</a></h2>";
                                    } else {
                                        ////////////        

                                        $id = $_SESSION['turno'];
                                        $personagem = $repositorio->MostrarPersonagem($id);
                                        foreach ($personagem as $key) {
                                            if(isset($_SESSION["magia1_personagem$a"]) && isset($_SESSION["magia2_personagem$a"])){

                                            } else {
                                                $_SESSION["magia1_personagem$a"] = $key['mag1'];
                                                $_SESSION["magia2_personagem$a"] = $key['mag2'];
                                                $_SESSION["magia3_personagem$a"] = $key['mag3'];
                                                $_SESSION["magia4_personagem$a"] = $key['mag4'];
                                                $_SESSION["magia5_personagem$a"] = $key['mag5'];
                                                $_SESSION["magia6_personagem$a"] = $key['mag6'];
                                                $_SESSION["magia7_personagem$a"] = $key['mag7'];
                                            }
                                            if($_SESSION["magia1_personagem$a"] == NULL){
                                                $_SESSION["magia1_usada_personagem$a"] = true;
                                            }
                                            if($_SESSION["magia2_personagem$a"] == NULL){
                                                $_SESSION["magia2_usada_personagem$a"] = true;
                                            }
                                            if($_SESSION["magia3_personagem$a"] == NULL){
                                                $_SESSION["magia3_usada_personagem$a"] = true;
                                            }
                                            if($_SESSION["magia4_personagem$a"] == NULL){
                                                $_SESSION["magia4_usada_personagem$a"] = true;
                                            }
                                            if($_SESSION["magia5_personagem$a"] == NULL){
                                                $_SESSION["magia5_usada_personagem$a"] = true;
                                            }
                                            if($_SESSION["magia6_personagem$a"] == NULL){
                                                $_SESSION["magia6_usada_personagem$a"] = true;
                                            }
                                            if($_SESSION["magia7_personagem$a"] == NULL){
                                                $_SESSION["magia7_usada_personagem$a"] = true;
                                            }
                                            $magia1 = $key['mag1'];
                                            $magia2 = $key['mag2'];
                                            $magia3 = $key['mag3'];
                                            $magia4 = $key['mag4'];
                                            $magia5 = $key['mag5'];
                                            $magia6 = $key['mag6'];
                                            $magia7 = $key['mag7'];
                                        }

                                        
                                        if($magia1 == NULL){
                                        echo "<div class=''>";
                                        } else {
                                            echo "<div class='magias__use'>";
                                            $magia = $magia1;
                                            $_SESSION["desc_mag1_personagem$a"] = $repositorio->PuxarDescricaoMagia($magia);
                                            $img = $repositorio->PuxarImagemMagia($magia);
                                            echo "<img src='../../$img' style='float:left'>";
                                            if($_SESSION["magia1_usada_personagem$a"] == true){
                                                echo "<h2 class='magias__use__info'>Magia: ".$magia1." <a class='magias__use__fim'>Já utilizada</a><h2>";
                                            } else {
                                                echo "<h2 class='magias__use__info'>Magia: ".$_SESSION["magia1_personagem$a"]." <a class='magias__use__atirar' href='atacar.php?mag=$magia'>Usar</a><h2>";
                                            }
                                            echo "<h2 class='magias__use__info'>Descrição: ".$_SESSION["desc_mag1_personagem$a"]."</h2>";
                                            echo "</div>";
                                        }

                                        if($magia2 == NULL){

                                        } else {
                                            echo "<div class='magias__use'>";
                                            $magia = $magia2;
                                            $_SESSION["desc_mag2_personagem$a"] = $repositorio->PuxarDescricaoMagia($magia);
                                            $img = $repositorio->PuxarImagemMagia($magia);
                                            echo "<img src='../../$img' style='float:left'>";
                                            if($_SESSION["magia2_usada_personagem$a"] == true){
                                                echo "<h2 class='magias__use__info'>Magia: ".$magia2." <a class='magias__use__fim'>Já utilizada</a><h2>";
                                            } else {
                                                echo "<h2 class='magias__use__info'>Magia: ".$_SESSION["magia2_personagem$a"]." <a class='magias__use__atirar' href='atacar.php?mag=$magia'>Usar</a><h2>";
                                            }
                                            echo "<h2 class='magias__use__info'>Descrição: ".$_SESSION["desc_mag2_personagem$a"]."</h2>";
                                            echo "</div>";
                                        }

                                        if($magia3 == NULL){

                                        } else {
                                            echo "<div class='magias__use'>";
                                            $magia = $magia3;
                                            $_SESSION["desc_mag3_personagem$a"] = $repositorio->PuxarDescricaoMagia($magia);
                                            $img = $repositorio->PuxarImagemMagia($magia);
                                            echo "<img src='../../$img' style='float:left'>";
                                            if($_SESSION["magia3_usada_personagem$a"] == true){
                                                echo "<h2 class='magias__use__info'>Magia: ".$magia3." <a class='magias__use__fim'>Já utilizada</a><h2>";
                                            } else {
                                                echo "<h2 class='magias__use__info'>Magia: ".$_SESSION["magia3_personagem$a"]." <a class='magias__use__atirar' href='atacar.php?mag=$magia'>Usar</a><h2>";
                                            }
                                            echo "<h2 class='magias__use__info'>Descrição: ".$_SESSION["desc_mag3_personagem$a"]."</h2>";
                                            echo "</div>";
                                        }

                                        if($magia4 == NULL){

                                        } else {
                                            echo "<div>";
                                            $magia = $magia4;
                                            $_SESSION["desc_mag4_personagem$a"] = $repositorio->PuxarDescricaoMagia($magia);
                                            $img = $repositorio->PuxarImagemMagia($magia);
                                            echo "<img src='../../$img' style='float:left'>";
                                            if($_SESSION["magia4_usada_personagem$a"] == true){
                                                echo "<h2>Magia: ".$magia4." <a style='color: red'>Já utilizada</a><h2>";
                                            } else {
                                                echo "<h2>Magia: ".$_SESSION["magia4_personagem$a"]." <a href='atacar.php?mag=$magia'>Usar</a><h2>";
                                            }
                                            echo "<h2>Descrição: ".$_SESSION["desc_mag4_personagem$a"]."</h2>";
                                            echo "</div>";
                                        }

                                        if($magia5 == NULL){

                                        } else {
                                            echo "<div>";
                                            $magia = $magia5;
                                            $_SESSION["desc_mag5_personagem$a"] = $repositorio->PuxarDescricaoMagia($magia);
                                            $img = $repositorio->PuxarImagemMagia($magia);
                                            echo "<img src='../../$img' style='float:left'>";
                                            if($_SESSION["magia5_usada_personagem$a"] == true){
                                                echo "<h2>Magia: ".$magia5." <a style='color: red'>Já utilizada</a><h2>";
                                            } else {
                                                echo "<h2>Magia: ".$_SESSION["magia5_personagem$a"]." <a href='atacar.php?mag=$magia'>Usar</a><h2>";
                                            }
                                            echo "<h2>Descrição: ".$_SESSION["desc_mag5_personagem$a"]."</h2>";
                                            echo "</div>";
                                        }

                                        if($magia6 == NULL){

                                        } else {
                                            echo "<div>";
                                            $magia = $magia6;
                                            $_SESSION["desc_mag6_personagem$a"] = $repositorio->PuxarDescricaoMagia($magia);
                                            $img = $repositorio->PuxarImagemMagia($magia);
                                            echo "<img src='../../$img' style='float:left'>";
                                            if($_SESSION["magia6_usada_personagem$a"] == true){
                                                echo "<h2>Magia: ".$magia6." <a style='color: red'>Já utilizada</a><h2>";
                                            } else {
                                                echo "<h2>Magia: ".$_SESSION["magia6_personagem$a"]." <a href='atacar.php?mag=$magia'>Usar</a><h2>";
                                            }
                                            echo "<h2>Descrição: ".$_SESSION["desc_mag6_personagem$a"]."</h2>";
                                            echo "</div>";
                                        }

                                        if($magia7 == NULL){

                                        } else {
                                            echo "<div'>";
                                            $magia = $magia7;
                                            $_SESSION["desc_mag1_personagem$a"] = $repositorio->PuxarDescricaoMagia($magia);
                                            $img = $repositorio->PuxarImagemMagia($magia);
                                            echo "<img src='../../$img' style='float:left'>";
                                            if($_SESSION["magia7_usada_personagem$a"] == true){
                                                echo "<h2>Magia: ".$magia7." <a style='color: red'>Já utilizada</a><h2>";
                                            } else {
                                                echo "<h2>Magia: ".$_SESSION["magia7_personagem$a"]." <a href='atacar.php?mag=$magia'>Usar</a><h2>";
                                            }
                                            echo "<h2>Descrição: ".$_SESSION["desc_mag7_personagem$a"]."</h2>";
                                            echo "</div>";
                                        }
                                    } 
                            } else if(isset($_SESSION['escolher_protecao'])){
                                    if(isset($_SESSION['passar_defesa'])){
                                        $id = $_SESSION['turno'];
                                        header("Location: passar_turno.php?id=$id");
                                        exit;
                                    }
                                    $id = $_SESSION['personagem1'];
                                    $personagem = $repositorio->MostrarPersonagem($id);
                                    foreach ($personagem as $key) {
                                        $nome = $key['nome'];
                                        $img = $key['img'];
                                        $vida = $key['vida'];
                                        $defesa = $key['defesa'];
                                        echo "<div>";
                                            echo "<img src='../../$img' style='height:260px;width:220px'>";
                                            echo "<h2>Nome: ".$nome." - Vida: ".$_SESSION['vida_atual_personagem1']."/".$vida."</h2>";
                                            if($defesa != NULL){
                                                echo "<h2>Bônus natural de Defesa: ".$defesa."</h2>";
                                            }
                                            $c = "1";
                                            echo "<h2><a href='atacar.php?defesa=$c'>Escolher</a></h2>";
                                        echo "</div>";
                                    }

                                    $id = $_SESSION['personagem2'];
                                    $personagem = $repositorio->MostrarPersonagem($id);
                                    foreach ($personagem as $key) {
                                        $nome = $key['nome'];
                                        $img = $key['img'];
                                        $vida = $key['vida'];
                                        $defesa = $key['defesa'];
                                        echo "<div>";
                                            echo "<img src='../../$img' style='height:260px;width:220px'>";
                                            echo "<h2>Nome: ".$nome." - Vida: ".$_SESSION['vida_atual_personagem2']."/".$vida."</h2>";
                                            if($defesa != NULL){
                                                echo "<h2>Bônus natural de Defesa: ".$defesa."</h2>";
                                            }
                                            $c = "2";
                                            echo "<h2><a href='atacar.php?defesa=$c'>Escolher</a></h2>";
                                        echo "</div>";
                                    }

                                    $id = $_SESSION['personagem3'];
                                    $personagem = $repositorio->MostrarPersonagem($id);
                                    foreach ($personagem as $key) {
                                        $nome = $key['nome'];
                                        $img = $key['img'];
                                        $vida = $key['vida'];
                                        $defesa = $key['defesa'];
                                        echo "<div>";
                                            echo "<img src='../../$img' style='height:260px;width:220px'>";
                                            echo "<h2>Nome: ".$nome." - Vida: ".$_SESSION['vida_atual_personagem3']."/".$vida."</h2>";
                                            if($defesa != NULL){
                                                echo "<h2>Bônus natural de Defesa: ".$defesa."</h2>";
                                            }
                                            $c = "3";
                                            echo "<h2><a href='atacar.php?defesa=$c'>Escolher</a></h2>";
                                        echo "</div>";
                                    }

                                    $id = $_SESSION['personagem4'];
                                    $personagem = $repositorio->MostrarPersonagem($id);
                                    foreach ($personagem as $key) {
                                        $nome = $key['nome'];
                                        $img = $key['img'];
                                        $vida = $key['vida'];
                                        $defesa = $key['defesa'];
                                        echo "<div>";
                                            echo "<img src='../../$img' style='height:260px;width:220px'>";
                                            echo "<h2>Nome: ".$nome." - Vida: ".$_SESSION['vida_atual_personagem4']."/".$vida."</h2>";
                                            if($defesa != NULL){
                                                echo "<h2>Bônus natural de Defesa: ".$defesa."</h2>";
                                            }
                                            $c = "4";
                                            echo "<h2><a href='atacar.php?defesa=$c'>Escolher</a></h2>";
                                        echo "</div>";
                                    }
                            } else {
                                if(isset($_SESSION['confirmar_ataque'])){
                                    if(isset($_SESSION['escolher_arma'])){
                                        $arma1 = $_SESSION["arma1_personagem$a"];
                                        $arma2 = $_SESSION["arma2_personagem$a"];
                                        echo "<h2>Escolha</h2>";
                                        echo "<br>";
                                        echo "<form action='atacar.php' method='POST'>";
                                            echo "<label for='$arma1'>$arma1</label>";
                                            echo "<input type='checkbox' id='$arma1' name='arma' value='$arma1'>";
                                            echo "<label for='$arma2'>$arma2</label>";
                                            echo "<input type='checkbox' id='$arma2' name='arma' value='$arma2'>";
                                            echo "<input type='submit' value='Escolher'>";
                                        echo "</form>";
                                    } else {
                                        if(isset($_SESSION['falha_automatica'])){
                                            echo "<h1>".$_SESSION['falha_automatica']."</h1>";
                                            echo "<br>";
                                            echo "<h2><a href='passar_turno.php?id=$x'>Concluir Turno</a></h2>";
                                        } else {
                                            echo "<h2> Dano total: ".$_SESSION['dano']." </h2>";
                                            if(isset($_SESSION['dado2'])){
                                                $x = 2;
                                                $mensagem_principal = "<p> 1 º Dado: ".$_SESSION['dado1']."(Estourou) </p>";
                                                while(isset($_SESSION["dado$x"])){
                                                    $nova_mensagem = "<p>".$x."º Dado:".$_SESSION["dado$x"]."</p>";
                                                    $mensagem_principal = $mensagem_principal.$nova_mensagem;
                                                    $x = $x + 1;
                                                }
                                                $mensagem_principal = $mensagem_principal." Bônus: ".$_SESSION['bonus'];
                                                echo "<p>".$mensagem_principal."</p>";
                                            } else {
                                                echo "<p> Dado: ".$_SESSION['dado1']." Bônus: ".$_SESSION['bonus']." </p>";
                                            }
                                            $x = $_SESSION['turno'];
                                            echo "<br>";
                                            echo "<h3>Vida perdida do Chefe: ".$_SESSION['vida_perdida_boss']."</h3>";
                                            echo "<br>";
                                            echo "<h2 class='acao__link'><a class='link' href='passar_turno.php?id=$x'>Concluir Turno</a></h2>";
                                        }
                                    }
                                } else {
                                    if(isset($_SESSION['escolher_cura']) || isset($_SESSION['escolher_bencao'])){
                                        if(isset($_SESSION['escolher_bencao'])){
                                            echo "<h2>Usar Magia de Benção:</h2>";
                                            echo "<div>";
                                            $id = $_SESSION['personagem1'];
                                            $personagem = $repositorio->MostrarPersonagem($id);
                                            foreach ($personagem as $key) {
                                                $img = $key['img'];
                                                $nome = $key['nome'];
                                                $vida = $key['vida'];
                                                echo "<div>";
                                                    echo "<img src='../../".$img."'>";
                                                    echo "<h2>Nome: ".$nome." - Vida: ".$_SESSION['vida_atual_personagem1']."/".$vida."</h2>";
                                                    if(isset($_SESSION['personagem1_pedra'])){
                                                        echo "<h2 style='gray'>Petrificado!!!</h2>";
                                                    }
                                                    echo "<h2><a href='usar_bencao.php?id=$id'>Usar</a></h2>";
                                                echo "</div>";
                                            }

                                            $id = $_SESSION['personagem2'];
                                            $personagem = $repositorio->MostrarPersonagem($id);
                                            foreach ($personagem as $key) {
                                                $img = $key['img'];
                                                $nome = $key['nome'];
                                                $vida = $key['vida'];
                                                echo "<div>";
                                                    echo "<img src='../../".$img."'>";
                                                    echo "<h2>Nome: ".$nome." - Vida: ".$_SESSION['vida_atual_personagem2']."/".$vida."</h2>";
                                                    if(isset($_SESSION['personagem2_pedra'])){
                                                        echo "<h2 style='gray'>Petrificado!!!</h2>";
                                                    }
                                                    echo "<h2><a href='usar_bencao.php?id=$id'>Usar</a></h2>";
                                                echo "</div>";
                                            }

                                            $id = $_SESSION['personagem3'];
                                            $personagem = $repositorio->MostrarPersonagem($id);
                                            foreach ($personagem as $key) {
                                                $img = $key['img'];
                                                $nome = $key['nome'];
                                                $vida = $key['vida'];
                                                echo "<div>";
                                                    echo "<img src='../../".$img."'>";
                                                    echo "<h2>Nome: ".$nome." - Vida: ".$_SESSION['vida_atual_personagem3']."/".$vida."</h2>";
                                                    if(isset($_SESSION['personagem3_pedra'])){
                                                        echo "<h2 style='gray'>Petrificado!!!</h2>";
                                                    }
                                                    echo "<h2><a href='usar_bencao.php?id=$id'>Usar</a></h2>";
                                                echo "</div>";
                                            }

                                            $id = $_SESSION['personagem4'];
                                            $personagem = $repositorio->MostrarPersonagem($id);
                                            foreach ($personagem as $key) {
                                                $img = $key['img'];
                                                $nome = $key['nome'];
                                                $vida = $key['vida'];
                                                echo "<div>";
                                                    echo "<img src='../../".$img."'>";
                                                    echo "<h2>Nome: ".$nome." - Vida: ".$_SESSION['vida_atual_personagem4']."/".$vida."</h2>";
                                                    if(isset($_SESSION['personagem4_pedra'])){
                                                        echo "<h2 style='gray'>Petrificado!!!</h2>";
                                                    }
                                                    echo "<h2><a href='usar_bencao.php?id=$id'>Usar</a></h2>";
                                                echo "</div>";
                                            }

                                            echo "</div>";
                                        }
                                    } else {
                                        echo "<h2 class='ataca'><a class='link' href='atacar.php?id=$x'>Atacar</a></h2>";
                                        echo "<h2 class='fugas'><a class='link' href='#'>Fugir</a></h2>";
                                    }
                                }
                            }
                        } else {
                            echo "<div class='up'>";
                            echo "OI";

                            if(isset($_SESSION['subir_nivel'])){

                            } else {
                                $_SESSION['subir_nivel'] = true;
                            }
                            
                            // Rodas Tesouro
                            if($_SESSION['tesouro_boss'] == ""){
                                if(isset($_SESSION['tesouro'])){

                                } else {
                                    if(isset($_SESSION['fim_turno'])){

                                    } else {
                                        $_SESSION['bonus_tesouro'] = 0;
                                        header('Location: roda_recompensa.php');
                                    }
                                }
                            } else if($_SESSION['tesouro_boss'] == "1"){
                                if(isset($_SESSION['tesouro'])){

                                } else {
                                    if(isset($_SESSION['fim_turno'])){

                                    } else {
                                        $_SESSION['bonus_tesouro'] = 1;
                                        header('Location: roda_recompensa.php');
                                    }
                                }
                            } else if($_SESSION['tesouro_boss'] == "2"){
                                if(isset($_SESSION['tesouro'])){

                                } else {
                                    if(isset($_SESSION['fim_turno'])){

                                    } else {
                                        $_SESSION['bonus_tesouro'] = 2;
                                        header('Location: roda_recompensa.php');
                                    }
                                }
                            }

                            if(isset($_SESSION['magia_usada'])){
                                if($_SESSION['magia_usada'] == $_SESSION["magia1_personagem$a"]){
                                    $_SESSION["magia1_usada_personagem$a"] = true;
                                } else if($_SESSION["magia_usada"] == $_SESSION["magia2_personagem$a"]){
                                    $_SESSION["magia2_usada_personagem$a"] = true;
                                } else if($_SESSION["magia_usada"] == $_SESSION["magia3_personagem$a"]){
                                    $_SESSION["magia3_usada_personagem$a"] = true;
                                } else if($_SESSION["magia_usada"] == $_SESSION["magia4_personagem$a"]){
                                    $_SESSION["magia4_usada_personagem$a"] = true;
                                } else if($_SESSION["magia_usada"] == $_SESSION["magia5_personagem$a"]){
                                    $_SESSION["magia5_usada_personagem$a"] = true;
                                } else if($_SESSION["magia_usada"] == $_SESSION["magia6_personagem$a"]){
                                    $_SESSION["magia6_usada_personagem$a"] = true;
                                } else if($_SESSION["magia_usada"] == $_SESSION["magia7_personagem$a"]){
                                    $_SESSION["magia7_usada_personagem$a"] = true;
                                }
                            }
                            

                            echo "<h2> Dano total: ".$_SESSION['dano']." </h2>";
                            if(isset($_SESSION['dado2'])){
                                $x = 2;
                                $mensagem_principal = "<p> 1 º Dado: ".$_SESSION['dado1']."(Estourou) </p>";
                                while(isset($_SESSION["dado$x"])){
                                    $nova_mensagem = "<p>".$x."º Dado:".$_SESSION["dado$x"]."</p>";
                                    $mensagem_principal = $mensagem_principal.$nova_mensagem;
                                    $x = $x + 1;
                                }
                                $mensagem_principal = $mensagem_principal." Bônus: ".$_SESSION['bonus'];
                                echo "<p>".$mensagem_principal."</p>";
                            } else {
                                echo "<p> Dado: ".$_SESSION['dado1']." Bônus: ".$_SESSION['bonus']." </p>";
                            }
                            $x = $_SESSION['turno'];
                            echo "<br>";
                            echo "<h2>Você derrotou o Chefão!!!</h2>";
                            echo "<br>";
                            
                            //dinheiro

                            if(isset($_SESSION['tesouro'])){
                                $item = $_SESSION['tesouro'];
                                $img = $repositorio->PuxarImagemItem($item);
                                
                                    if($_SESSION['tesouro'] == "gema" || $_SESSION['tesouro'] == "ouro"){
                                        echo "<div>";
                                            echo "<h2>Tesouro: ".$_SESSION['tesouro']." - Valor: ".$_SESSION['valor_tesouro']."</h2>";
                                            echo "<img src='../../$img'>";
                                        echo "</div>";
                                    } else {
                                        echo "<div>";
                                            echo "<h2>Tesouro: ".$_SESSION['tesouro']."</h2>";
                                            echo "<img src='../../$img'>";
                                        echo "</div>";
                                    }
                            
                                    
                                
                                    $id = $_SESSION['personagem1'];
                                    $personagem = $repositorio->MostrarPersonagem($id);
                                    foreach ($personagem as $key) {
                                        echo "<div>";
                                            echo "<img src='../../".$key['img']."'>";
                                            echo "<h2>Nome: ".$key['nome']."</h2>";
                                            echo "<h2>Dinheiro: ".$key['dinheiro']."</h2>";
                                            echo "<h2><a href='pegar_recompensa.php?id=$id'>Pegar</a></h2>";
                                        echo "</div>";
                                    }

                                    $id = $_SESSION['personagem2'];
                                    $personagem = $repositorio->MostrarPersonagem($id);
                                    foreach ($personagem as $key) {
                                        echo "<div>";
                                            echo "<img src='../../".$key['img']."'>";
                                            echo "<h2>Nome: ".$key['nome']."</h2>";
                                            echo "<h2>Dinheiro: ".$key['dinheiro']."</h2>";
                                            echo "<h2><a href='pegar_recompensa.php?id=$id'>Pegar</a></h2>";
                                        echo "</div>";
                                    }

                                    $id = $_SESSION['personagem3'];
                                    $personagem = $repositorio->MostrarPersonagem($id);
                                    foreach ($personagem as $key) {
                                        echo "<div>";
                                            echo "<img src='../../".$key['img']."'>";
                                            echo "<h2>Nome: ".$key['nome']."</h2>";
                                            echo "<h2>Dinheiro: ".$key['dinheiro']."</h2>";
                                            echo "<h2><a href='pegar_recompensa.php?id=$id'>Pegar</a></h2>";
                                        echo "</div>";
                                    }

                                    $id = $_SESSION['personagem4'];
                                    $personagem = $repositorio->MostrarPersonagem($id);
                                    foreach ($personagem as $key) {
                                        echo "<div>";
                                            echo "<img class='mostrar__pers__img' src='../../".$key['img']."'>";
                                            echo "<h2>Nome: ".$key['nome']."</h2>";
                                            echo "<h2>Dinheiro: ".$key['dinheiro']."</h2>";
                                            echo "<h2><a href='pegar_recompensa.php?id=$id'>Pegar</a></h2>";
                                        echo "</div>";
                                    }
                            } else {
                                if(isset($_SESSION['tesouro']) && $_SESSION['tesouro'] == "Nenhum tesouro encontrado!!!"){
                                    echo "<h2>".$_SESSION['tesouro']."</h2>";
                                }
                                echo "<br>";
                                if($_SESSION['subir_nivel'] == true){
                                    echo "<h2>Upar de Nível:</h2>";
                                    echo "<div class='up__mostra'>";

                                    $id = $_SESSION['personagem1'];
                                    $personagem = $repositorio->MostrarPersonagem($id);
                                    foreach ($personagem as $key) {
                                        echo "<div>";
                                            echo "<img class='up__img' src='../../".$key['img']."'>";
                                            echo "<h2>".$key['nome']."</h2>"; 
                                            echo "<h2> Nível: ".$key['nivel']."</h2>";
                                            echo "<h2><a href='upar_nivel.php?id=$id'>Escolher</a></h2>";
                                        echo "</div>";
                                    }

                                    $id = $_SESSION['personagem2'];
                                    $personagem = $repositorio->MostrarPersonagem($id);
                                    foreach ($personagem as $key) {
                                        echo "<div>";
                                            echo "<img class='up__img' src='../../".$key['img']."'>";
                                            echo "<h2>".$key['nome']."</h2>";
                                            echo "<h2> Nível: ".$key['nivel']."</h2>";
                                            echo "<h2><a href='upar_nivel.php?id=$id'>Escolher</a></h2>";
                                        echo "</div>";
                                    }

                                    $id = $_SESSION['personagem3'];
                                    $personagem = $repositorio->MostrarPersonagem($id);
                                    foreach ($personagem as $key) {
                                        echo "<div >";
                                            echo "<img class='up__img' src='../../".$key['img']."'>";
                                            echo "<h2>".$key['nome']."</h2>";
                                            echo "<h2> Nível: ".$key['nivel']."</h2>";
                                            echo "<h2><a href='upar_nivel.php?id=$id'>Escolher</a></h2>";
                                        echo "</div>";
                                    }

                                    $id = $_SESSION['personagem4'];
                                    $personagem = $repositorio->MostrarPersonagem($id);
                                    foreach ($personagem as $key) {
                                        echo "<div>";
                                            echo "<img class='up__img' src='../../".$key['img']."'>";
                                            echo "<h2>".$key['nome']."</h2>";
                                            echo "<h2> Nível: ".$key['nivel']."</h2>";
                                            echo "<h2><a href='upar_nivel.php?id=$id'>Escolher</a></h2>";
                                        echo "</div>";
                                    }
                                } else {
                                    if(isset($_SESSION['upar'])){
                                        if($_SESSION['upar'] == "Upou de nível com sucesso"){
                                            echo "<h2 style='color:green'>".$_SESSION['upar']."</h2>";
                                        } else {
                                            echo "<h2 style='color:red'>".$_SESSION['upar']."</h2>";
                                        }
                                    }
                                    echo "<h2 class='finalizar__h2'><a class='link' href='passar_turno.php?id=$x'>Concluir Turno</a></h2>"; 
                                }
                            }
                            echo "</div>";
                            echo "</div>";
                        }
                    } else {
                        if(isset($_SESSION['quantidade_monstro']) && $_SESSION['quantidade_monstro'] > 0){
                            if(isset($_SESSION['opcao_magia'])){
                                $b = "magia";
                                $c = "arma";
                                echo "<h2 class='ataca'><a class='link' href='atacar.php?tipo=$c'>Atacar(Arma)</a></h2>";
                                echo "<h2 class='magia'><a class='link' href='atacar.php?tipo=$b'>Atacar(Magia)</a></h2>";
                                echo "<h2><a href='#'>Fugir</a></h2>";
                                echo "<br>";
                                echo "<br>";
                                if(isset($_SESSION['fim'])){
                                    echo $_SESSION['fim'];
                                }
                            } else if(isset($_SESSION['atacar_magia'])){ 
                                if(isset($_SESSION["magia1_usada_personagem$a"])){

                                } else {
                                    $_SESSION["magia1_usada_personagem$a"] = false;
                                    $_SESSION["magia2_usada_personagem$a"] = false;
                                    $_SESSION["magia3_usada_personagem$a"] = false;
                                    $_SESSION["magia4_usada_personagem$a"] = false;
                                    $_SESSION["magia5_usada_personagem$a"] = false;
                                    $_SESSION["magia6_usada_personagem$a"] = false;
                                    $_SESSION["magia7_usada_personagem$a"] = false;
                                }
                                    if(isset($_SESSION['magia_usada'])){

                                        if($_SESSION['magia_usada'] == $_SESSION["magia1_personagem$a"]){
                                            $_SESSION["magia1_usada_personagem$a"] = true;
                                        } else if($_SESSION["magia_usada"] == $_SESSION["magia2_personagem$a"]){
                                            $_SESSION["magia2_usada_personagem$a"] = true;
                                        } else if($_SESSION["magia_usada"] == $_SESSION["magia3_personagem$a"]){
                                            $_SESSION["magia3_usada_personagem$a"] = true;
                                        } else if($_SESSION["magia_usada"] == $_SESSION["magia4_personagem$a"]){
                                            $_SESSION["magia4_usada_personagem$a"] = true;
                                        } else if($_SESSION["magia_usada"] == $_SESSION["magia5_personagem$a"]){
                                            $_SESSION["magia5_usada_personagem$a"] = true;
                                        } else if($_SESSION["magia_usada"] == $_SESSION["magia6_personagem$a"]){
                                            $_SESSION["magia6_usada_personagem$a"] = true;
                                        } else if($_SESSION["magia_usada"] == $_SESSION["magia7_personagem$a"]){
                                            $_SESSION["magia7_usada_personagem$a"] = true;
                                        }
                                        

                                        echo "<h2> Dano total: ".$_SESSION['dano']." </h2>";
                                        if(isset($_SESSION['dado2'])){
                                            $x = 2;
                                            $mensagem_principal = "<p> 1 º Dado: ".$_SESSION['dado1']."(Estourou) </p>";
                                            while(isset($_SESSION["dado$x"])){
                                                $nova_mensagem = "<p>".$x."º Dado:".$_SESSION["dado$x"]."</p>";
                                                $mensagem_principal = $mensagem_principal.$nova_mensagem;
                                                $x = $x + 1;
                                            }
                                            $mensagem_principal = $mensagem_principal." Bônus: ".$_SESSION['bonus'];
                                            echo "<p>".$mensagem_principal."</p>";
                                        } else {
                                            echo "<p> Dado: ".$_SESSION['dado1']." Bônus: ".$_SESSION['bonus']." </p>";
                                        }
                                        $x = $_SESSION['turno'];
                                        echo "<br>";
                                        echo "<h3>Inimigos Mortos: ".$_SESSION['monstros_mortos']."</h3>";
                                        echo "<br>";
                                        echo "<h2><a href='passar_turno.php?id=$x'>Concluir Turno</a></h2>";
                                    } else {
                                        ////////////        

                                        $id = $_SESSION['turno'];
                                        $personagem = $repositorio->MostrarPersonagem($id);
                                        foreach ($personagem as $key) {
                                            if(isset($_SESSION["magia1_personagem$a"]) && isset($_SESSION["magia2_personagem$a"])){

                                            } else {
                                                $_SESSION["magia1_personagem$a"] = $key['mag1'];
                                                $_SESSION["magia2_personagem$a"] = $key['mag2'];
                                                $_SESSION["magia3_personagem$a"] = $key['mag3'];
                                                $_SESSION["magia4_personagem$a"] = $key['mag4'];
                                                $_SESSION["magia5_personagem$a"] = $key['mag5'];
                                                $_SESSION["magia6_personagem$a"] = $key['mag6'];
                                                $_SESSION["magia7_personagem$a"] = $key['mag7'];
                                            }
                                            if($_SESSION["magia1_personagem$a"] == NULL){
                                                $_SESSION["magia1_usada_personagem$a"] = true;
                                            }
                                            if($_SESSION["magia2_personagem$a"] == NULL){
                                                $_SESSION["magia2_usada_personagem$a"] = true;
                                            }
                                            if($_SESSION["magia3_personagem$a"] == NULL){
                                                $_SESSION["magia3_usada_personagem$a"] = true;
                                            }
                                            if($_SESSION["magia4_personagem$a"] == NULL){
                                                $_SESSION["magia4_usada_personagem$a"] = true;
                                            }
                                            if($_SESSION["magia5_personagem$a"] == NULL){
                                                $_SESSION["magia5_usada_personagem$a"] = true;
                                            }
                                            if($_SESSION["magia6_personagem$a"] == NULL){
                                                $_SESSION["magia6_usada_personagem$a"] = true;
                                            }
                                            if($_SESSION["magia7_personagem$a"] == NULL){
                                                $_SESSION["magia7_usada_personagem$a"] = true;
                                            }
                                            $magia1 = $key['mag1'];
                                            $magia2 = $key['mag2'];
                                            $magia3 = $key['mag3'];
                                            $magia4 = $key['mag4'];
                                            $magia5 = $key['mag5'];
                                            $magia6 = $key['mag6'];
                                            $magia7 = $key['mag7'];
                                        }

                                        
                                        if($magia1 == NULL){
                                        } else {
                                            echo "<div class='magias__use'>";
                                            $magia = $magia1;
                                            $_SESSION["desc_mag1_personagem$a"] = $repositorio->PuxarDescricaoMagia($magia);
                                            $img = $repositorio->PuxarImagemMagia($magia);
                                            echo "<img src='../../$img' style='float:left'>";
                                            if($_SESSION["magia1_usada_personagem$a"] == true){
                                                echo "<h2>Magia: ".$magia1." <a style='color: red'>Já utilizada</a><h2>";
                                            } else {
                                                echo "<h2>Magia: ".$_SESSION["magia1_personagem$a"]." <a href='atacar.php?mag=$magia'>Usar</a><h2>";
                                            }
                                            echo "<h2>Descrição: ".$_SESSION["desc_mag1_personagem$a"]."</h2>";
                                            echo "</div>";
                                        }

                                        if($magia2 == NULL){

                                        } else {
                                            echo "<div class='magias__use'>";
                                            $magia = $magia2;
                                            $_SESSION["desc_mag2_personagem$a"] = $repositorio->PuxarDescricaoMagia($magia);
                                            $img = $repositorio->PuxarImagemMagia($magia);
                                            echo "<img src='../../$img' style='float:left'>";
                                            if($_SESSION["magia2_usada_personagem$a"] == true){
                                                echo "<h2>Magia: ".$magia2." <a style='color: red'>Já utilizada</a><h2>";
                                            } else {
                                                echo "<h2>Magia: ".$_SESSION["magia2_personagem$a"]." <a href='atacar.php?mag=$magia'>Usar</a><h2>";
                                            }
                                            echo "<h2>Descrição: ".$_SESSION["desc_mag2_personagem$a"]."</h2>";
                                            echo "</div>";
                                        }

                                        if($magia3 == NULL){

                                        } else {
                                            echo "<div class='magias__use'>";
                                            $magia = $magia3;
                                            $_SESSION["desc_mag3_personagem$a"] = $repositorio->PuxarDescricaoMagia($magia);
                                            $img = $repositorio->PuxarImagemMagia($magia);
                                            echo "<img src='../../$img' style='float:left'>";
                                            if($_SESSION["magia3_usada_personagem$a"] == true){
                                                echo "<h2>Magia: ".$magia3." <a style='color: red'>Já utilizada</a><h2>";
                                            } else {
                                                echo "<h2>Magia: ".$_SESSION["magia3_personagem$a"]." <a href='atacar.php?mag=$magia'>Usar</a><h2>";
                                            }
                                            echo "<h2>Descrição: ".$_SESSION["desc_mag3_personagem$a"]."</h2>";
                                            echo "</div>";
                                        }

                                        if($magia4 == NULL){

                                        } else {
                                            echo "<div class='magias__use'>";
                                            $magia = $magia4;
                                            $_SESSION["desc_mag4_personagem$a"] = $repositorio->PuxarDescricaoMagia($magia);
                                            $img = $repositorio->PuxarImagemMagia($magia);
                                            echo "<img src='../../$img' style='float:left'>";
                                            if($_SESSION["magia4_usada_personagem$a"] == true){
                                                echo "<h2>Magia: ".$magia4." <a style='color: red'>Já utilizada</a><h2>";
                                            } else {
                                                echo "<h2>Magia: ".$_SESSION["magia4_personagem$a"]." <a href='atacar.php?mag=$magia'>Usar</a><h2>";
                                            }
                                            echo "<h2>Descrição: ".$_SESSION["desc_mag4_personagem$a"]."</h2>";
                                            echo "</div>";
                                        }

                                        if($magia5 == NULL){

                                        } else {
                                            echo "<div class='magias__use'>";
                                            $magia = $magia5;
                                            $_SESSION["desc_mag5_personagem$a"] = $repositorio->PuxarDescricaoMagia($magia);
                                            $img = $repositorio->PuxarImagemMagia($magia);
                                            echo "<img src='../../$img' style='float:left'>";
                                            if($_SESSION["magia5_usada_personagem$a"] == true){
                                                echo "<h2>Magia: ".$magia5." <a style='color: red'>Já utilizada</a><h2>";
                                            } else {
                                                echo "<h2>Magia: ".$_SESSION["magia5_personagem$a"]." <a href='atacar.php?mag=$magia'>Usar</a><h2>";
                                            }
                                            echo "<h2>Descrição: ".$_SESSION["desc_mag5_personagem$a"]."</h2>";
                                            echo "</div>";
                                        }

                                        if($magia6 == NULL){

                                        } else {
                                            echo "<div class='magias__use'>";
                                            $magia = $magia6;
                                            $_SESSION["desc_mag6_personagem$a"] = $repositorio->PuxarDescricaoMagia($magia);
                                            $img = $repositorio->PuxarImagemMagia($magia);
                                            echo "<img src='../../$img' style='float:left'>";
                                            if($_SESSION["magia6_usada_personagem$a"] == true){
                                                echo "<h2>Magia: ".$magia6." <a style='color: red'>Já utilizada</a><h2>";
                                            } else {
                                                echo "<h2>Magia: ".$_SESSION["magia6_personagem$a"]." <a href='atacar.php?mag=$magia'>Usar</a><h2>";
                                            }
                                            echo "<h2>Descrição: ".$_SESSION["desc_mag6_personagem$a"]."</h2>";
                                            echo "</div>";
                                        }

                                        if($magia7 == NULL){

                                        } else {
                                            echo "<div class='magias__use'>";
                                            $magia = $magia7;
                                            $_SESSION["desc_mag1_personagem$a"] = $repositorio->PuxarDescricaoMagia($magia);
                                            $img = $repositorio->PuxarImagemMagia($magia);
                                            echo "<img src='../../$img' style='float:left'>";
                                            if($_SESSION["magia7_usada_personagem$a"] == true){
                                                echo "<h2>Magia: ".$magia7." <a style='color: red'>Já utilizada</a><h2>";
                                            } else {
                                                echo "<h2>Magia: ".$_SESSION["magia7_personagem$a"]." <a href='atacar.php?mag=$magia'>Usar</a><h2>";
                                            }
                                            echo "<h2>Descrição: ".$_SESSION["desc_mag7_personagem$a"]."</h2>";
                                            echo "</div>";
                                        }
                                    } 
                            } else if(isset($_SESSION['escolher_protecao'])){
                                    if(isset($_SESSION['passar_defesa'])){
                                        $id = $_SESSION['turno'];
                                        header("Location: passar_turno.php?id=$id");
                                        exit;
                                    }
                                    $id = $_SESSION['personagem1'];
                                    $personagem = $repositorio->MostrarPersonagem($id);
                                    foreach ($personagem as $key) {
                                        $nome = $key['nome'];
                                        $img = $key['img'];
                                        $vida = $key['vida'];
                                        $defesa = $key['defesa'];
                                        echo "<div class='magias__use'>";
                                            echo "<img src='../../$img' style='height:260px;width:220px'>";
                                            echo "<h2>Nome: ".$nome." - Vida: ".$_SESSION['vida_atual_personagem1']."/".$vida."</h2>";
                                            if($defesa != NULL){
                                                echo "<h2>Bônus natural de Defesa: ".$defesa."</h2>";
                                            }
                                            $c = "1";
                                            echo "<h2><a href='atacar.php?defesa=$c'>Escolher</a></h2>";
                                        echo "</div>";
                                    }

                                    $id = $_SESSION['personagem2'];
                                    $personagem = $repositorio->MostrarPersonagem($id);
                                    foreach ($personagem as $key) {
                                        $nome = $key['nome'];
                                        $img = $key['img'];
                                        $vida = $key['vida'];
                                        $defesa = $key['defesa'];
                                        echo "<div class='magias__use'>";
                                            echo "<img src='../../$img'>";
                                            echo "<h2>Nome: ".$nome." - Vida: ".$_SESSION['vida_atual_personagem2']."/".$vida."</h2>";
                                            if($defesa != NULL){
                                                echo "<h2>Bônus natural de Defesa: ".$defesa."</h2>";
                                            }
                                            $c = "2";
                                            echo "<h2><a href='atacar.php?defesa=$c'>Escolher</a></h2>";
                                        echo "</div>";
                                    }

                                    $id = $_SESSION['personagem3'];
                                    $personagem = $repositorio->MostrarPersonagem($id);
                                    foreach ($personagem as $key) {
                                        $nome = $key['nome'];
                                        $img = $key['img'];
                                        $vida = $key['vida'];
                                        $defesa = $key['defesa'];
                                        echo "<div class='magias__use'>";
                                            echo "<img src='../../$img'>";
                                            echo "<h2>Nome: ".$nome." - Vida: ".$_SESSION['vida_atual_personagem3']."/".$vida."</h2>";
                                            if($defesa != NULL){
                                                echo "<h2>Bônus natural de Defesa: ".$defesa."</h2>";
                                            }
                                            $c = "3";
                                            echo "<h2><a href='atacar.php?defesa=$c'>Escolher</a></h2>";
                                        echo "</div>";
                                    }

                                    $id = $_SESSION['personagem4'];
                                    $personagem = $repositorio->MostrarPersonagem($id);
                                    foreach ($personagem as $key) {
                                        $nome = $key['nome'];
                                        $img = $key['img'];
                                        $vida = $key['vida'];
                                        $defesa = $key['defesa'];
                                        echo "<div class='magias__use'>";
                                            echo "<img src='../../$img'>";
                                            echo "<h2>Nome: ".$nome." - Vida: ".$_SESSION['vida_atual_personagem4']."/".$vida."</h2>";
                                            if($defesa != NULL){
                                                echo "<h2>Bônus natural de Defesa: ".$defesa."</h2>";
                                            }
                                            $c = "4";
                                            echo "<h2><a href='atacar.php?defesa=$c'>Escolher</a></h2>";
                                        echo "</div>";
                                    }
                            } else {
                                if(isset($_SESSION['confirmar_ataque'])){
                                    if(isset($_SESSION['escolher_arma'])){
                                        $arma1 = $_SESSION["arma1_personagem$a"];
                                        $arma2 = $_SESSION["arma2_personagem$a"];
                                        echo "<h2>Escolha</h2>";
                                        echo "<br>";
                                        echo "<form action='atacar.php' method='POST'>";
                                            echo "<label for='$arma1'>$arma1</label>";
                                            echo "<input type='checkbox' id='$arma1' name='arma' value='$arma1'>";
                                            echo "<label for='$arma2'>$arma2</label>";
                                            echo "<input type='checkbox' id='$arma2' name='arma' value='$arma2'>";
                                            echo "<input type='submit' value='Escolher'>";
                                        echo "</form>";
                                    } else {
                                        if(isset($_SESSION['falha_automatica'])){
                                            echo "<h1>".$_SESSION['falha_automatica']."</h1>";
                                            echo "<br>";
                                            echo "<h2><a href='passar_turno.php?id=$x'>Concluir Turno</a></h2>";
                                        } else {
                                            echo "<h2> Dano total: ".$_SESSION['dano']." </h2>";
                                            if(isset($_SESSION['dado2'])){
                                                $x = 2;
                                                $mensagem_principal = "<p> 1 º Dado: ".$_SESSION['dado1']."(Estourou) </p>";
                                                while(isset($_SESSION["dado$x"])){
                                                    $nova_mensagem = "<p>".$x."º Dado:".$_SESSION["dado$x"]."</p>";
                                                    $mensagem_principal = $mensagem_principal.$nova_mensagem;
                                                    $x = $x + 1;
                                                }
                                                $mensagem_principal = $mensagem_principal." Bônus: ".$_SESSION['bonus'];
                                                echo "<p>".$mensagem_principal."</p>";
                                            } else {
                                                echo "<p> Dado: ".$_SESSION['dado1']." Bônus: ".$_SESSION['bonus']." </p>";
                                            }
                                            $x = $_SESSION['turno'];
                                            echo "<br>";
                                            echo "<h3>Inimigos Mortos: ".$_SESSION['monstros_mortos']."</h3>";
                                            echo "<br>";
                                            echo "<h2><a href='passar_turno.php?id=$x'>Concluir Turno</a></h2>";
                                        }
                                    }
                                } else {
                                    if(isset($_SESSION['escolher_cura']) && isset($_SESSION['escolher_bencao'])){
                                        
                                    } else {
                                        echo "<h2><a class='link' href='atacar.php?id=$x'>Atacar</a></h2>";
                                        echo "<h2><a class='link' href='#'>Fugir</a></h2>";
                                    }
                                }
                            }
                            
                        } else {

                            if(isset($_SESSION['upar_nivel_minion'])){
                                echo "<h2>Upar de Nível:</h2>";
                                echo "<div>";
                                $id = $_SESSION['personagem1'];
                                $personagem = $repositorio->MostrarPersonagem($id);
                                foreach ($personagem as $key) {
                                    echo "<div>";
                                        echo "<img src='../../".$key['img']."'>";
                                        echo "<h2>Nome: ".$key['nome']." - Nível: ".$key['nivel']."</h2>";
                                        echo "<h2><a href='upar_nivel.php?id=$id'>Escolher</a></h2>";
                                    echo "</div>";
                                }

                                $id = $_SESSION['personagem2'];
                                $personagem = $repositorio->MostrarPersonagem($id);
                                foreach ($personagem as $key) {
                                    echo "<div>";
                                        echo "<img src='../../".$key['img']."'>";
                                        echo "<h2>Nome: ".$key['nome']." - Nível: ".$key['nivel']."</h2>";
                                        echo "<h2><a href='upar_nivel.php?id=$id'>Escolher</a></h2>";
                                    echo "</div>";
                                }

                                $id = $_SESSION['personagem3'];
                                $personagem = $repositorio->MostrarPersonagem($id);
                                foreach ($personagem as $key) {
                                    echo "<div>";
                                        echo "<img src='../../".$key['img']."'>";
                                        echo "<h2>Nome: ".$key['nome']." - Nível: ".$key['nivel']."</h2>";
                                        echo "<h2><a href='upar_nivel.php?id=$id'>Escolher</a></h2>";
                                    echo "</div>";
                                }

                                $id = $_SESSION['personagem4'];
                                $personagem = $repositorio->MostrarPersonagem($id);
                                foreach ($personagem as $key) {
                                    echo "<div>";
                                        echo "<img src='../../".$key['img']."'>";
                                        echo "<h2>Nome: ".$key['nome']." - Nível: ".$key['nivel']."</h2>";
                                        echo "<h2><a href='upar_nivel.php?id=$id'>Escolher</a></h2>";
                                    echo "</div>";
                                }
                                echo "</div>";
                            } else if(isset($_SESSION['upar'])){
                                if($_SESSION['upar'] == "Upou de nível com sucesso"){
                                    echo "<h2 style='color:green'>".$_SESSION['upar']."</h2>";
                                } else {
                                    echo "<h2 style='color:red'>".$_SESSION['upar']."</h2>";
                                }
                            }

                            if(isset($_SESSION['dano']) || isset($_SESSION['escolher_bençao']) && $_SESSION['escolher_bencao'] == NULL){
                                     // Rodas Tesouro
                                     if($_SESSION['tesouro_monstro'] == "não"){

                                    } else if($_SESSION['tesouro_monstro'] == "-1"){
                                        if(isset($_SESSION['tesouro'])){
    
                                        } else {
                                            if(isset($_SESSION['fim_turno'])){
    
                                            } else {
                                                $_SESSION['bonus_tesouro'] = -1;
                                                header('Location: roda_recompensa.php');
                                            }
                                        }
                                    } else if($_SESSION['tesouro_monstro'] == ""){
                                        if(isset($_SESSION['tesouro'])){

                                        } else {
                                            if(isset($_SESSION['fim_turno'])){

                                            } else {
                                                $_SESSION['bonus_tesouro'] = 0;
                                                header('Location: roda_recompensa.php');
                                            }
                                        }
                                    } else if($_SESSION['tesouro_monstro'] == "1"){
                                        if(isset($_SESSION['tesouro'])){

                                        } else {
                                            if(isset($_SESSION['fim_turno'])){

                                            } else {
                                                $_SESSION['bonus_tesouro'] = 1;
                                                header('Location: roda_recompensa.php');
                                            }
                                        }
                                    }
    
                                    if(isset($_SESSION['magia_usada'])){
                                        if($_SESSION['magia_usada'] == $_SESSION["magia1_personagem$a"]){
                                            $_SESSION["magia1_usada_personagem$a"] = true;
                                        } else if($_SESSION["magia_usada"] == $_SESSION["magia2_personagem$a"]){
                                            $_SESSION["magia2_usada_personagem$a"] = true;
                                        } else if($_SESSION["magia_usada"] == $_SESSION["magia3_personagem$a"]){
                                            $_SESSION["magia3_usada_personagem$a"] = true;
                                        } else if($_SESSION["magia_usada"] == $_SESSION["magia4_personagem$a"]){
                                            $_SESSION["magia4_usada_personagem$a"] = true;
                                        } else if($_SESSION["magia_usada"] == $_SESSION["magia5_personagem$a"]){
                                            $_SESSION["magia5_usada_personagem$a"] = true;
                                        } else if($_SESSION["magia_usada"] == $_SESSION["magia6_personagem$a"]){
                                            $_SESSION["magia6_usada_personagem$a"] = true;
                                        } else if($_SESSION["magia_usada"] == $_SESSION["magia7_personagem$a"]){
                                            $_SESSION["magia7_usada_personagem$a"] = true;
                                        }
                                    }
                                    
    
                                    echo "<h2> Dano total: ".$_SESSION['dano']." </h2>";
                                    if(isset($_SESSION['dado2'])){
                                        $x = 2;
                                        $mensagem_principal = "<p> 1 º Dado: ".$_SESSION['dado1']."(Estourou) </p>";
                                        while(isset($_SESSION["dado$x"])){
                                            $nova_mensagem = "<p>".$x."º Dado:".$_SESSION["dado$x"]."</p>";
                                            $mensagem_principal = $mensagem_principal.$nova_mensagem;
                                            $x = $x + 1;
                                        }
                                        $mensagem_principal = $mensagem_principal." Bônus: ".$_SESSION['bonus'];
                                        echo "<p>".$mensagem_principal."</p>";
                                    } else {
                                        echo "<p> Dado: ".$_SESSION['dado1']." Bônus: ".$_SESSION['bonus']." </p>";
                                    }
                                    $x = $_SESSION['turno'];
                                    echo "<br>";
                                    echo "Você derrotou todos os inimigos!!!";
                                    echo "<br>";
                                    echo "<br>";
                                    if(isset($_SESSION['upar_nivel_monstro'])){

                                    }else if(isset($_SESSION['tesouro']) && $_SESSION['tesouro'] != "Nenhum tesouro encontrado!!!"){
                                        $item = $_SESSION['tesouro'];
                                        $img = $repositorio->PuxarImagemItem($item);

                                        echo "<div>";
                                        
                                            if($_SESSION['tesouro'] == "gema" || $_SESSION['tesouro'] == "ouro"){
                                                echo "<div>";
                                                    echo "<h2>Tesouro: ".$_SESSION['tesouro']." - Valor: ".$_SESSION['valor_tesouro']."</h2>";
                                                    echo "<img src='../../$img' style='height:70px;width:70px'>";
                                                echo "</div>";
                                            } else {
                                                echo "<div>";
                                                    echo "<h2>Tesouro: ".$_SESSION['tesouro']."</h2>";
                                                    echo "<img src='../../$img' style='height:70px;width:70px'>";
                                                echo "</div>";
                                            }
                                    
                                            
                                        
                                            $id = $_SESSION['personagem1'];
                                            $personagem = $repositorio->MostrarPersonagem($id);
                                            foreach ($personagem as $key) {
                                                echo "<div>";
                                                    echo "<img src='../../".$key['img']."' style='height:190px;width:175px'>";
                                                    echo "<h2>Nome: ".$key['nome']."</h2>";
                                                    echo "<h2>Dinheiro: ".$key['dinheiro']."</h2>";
                                                    echo "<h2><a href='pegar_recompensa.php?id=$id'>Pegar</a></h2>";
                                                echo "</div>";
                                            }
    
                                            $id = $_SESSION['personagem2'];
                                            $personagem = $repositorio->MostrarPersonagem($id);
                                            foreach ($personagem as $key) {
                                                echo "<div>";
                                                    echo "<img src='../../".$key['img']."' style='height:190px;width:175px'>";
                                                    echo "<h2>Nome: ".$key['nome']."</h2>";
                                                    echo "<h2>Dinheiro: ".$key['dinheiro']."</h2>";
                                                    echo "<h2><a href='pegar_recompensa.php?id=$id'>Pegar</a></h2>";
                                                echo "</div>";
                                            }
    
                                            $id = $_SESSION['personagem3'];
                                            $personagem = $repositorio->MostrarPersonagem($id);
                                            foreach ($personagem as $key) {
                                                echo "<div>";
                                                    echo "<img src='../../".$key['img']."' style='height:190px;width:175px'>";
                                                    echo "<h2>Nome: ".$key['nome']."</h2>";
                                                    echo "<h2>Dinheiro: ".$key['dinheiro']."</h2>";
                                                    echo "<h2><a href='pegar_recompensa.php?id=$id'>Pegar</a></h2>";
                                                echo "</div>";
                                            }
    
                                            $id = $_SESSION['personagem4'];
                                            $personagem = $repositorio->MostrarPersonagem($id);
                                            foreach ($personagem as $key) {
                                                echo "<div>";
                                                    echo "<img src='../../".$key['img']."' style='height:190px;width:175px'>";
                                                    echo "<h2>Nome: ".$key['nome']."</h2>";
                                                    echo "<h2>Dinheiro: ".$key['dinheiro']."</h2>";
                                                    echo "<h2><a href='pegar_recompensa.php?id=$id'>Pegar</a></h2>";
                                                echo "</div>";
                                            }
                                        
                                            echo "</div>";
                                    } else {
                                        if(isset($_SESSION['tesouro']) && $_SESSION['tesouro'] == "Nenhum tesouro encontrado!!!"){
                                            echo "<h2>".$_SESSION['tesouro']."</h2>";
                                        }
                                        echo "<br>";
                                        echo "<h2><a href='passar_turno.php?id=$x'>Concluir Turno</a></h2>"; 
                                    }
                            } else {
                            }
                        }
                    }
                }
            }
            
                

                // Mostrar Itens


            if(isset($_SESSION['mostrar_itens'])){
                echo "<br>";
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
                                $tipo = "<a href='itens/usar_item.php?item=$item'>Usar</a>";
                            } else if($x['tipo'] == "defesa"){
                                $tipo = "<a href='itens/equipar_item.php?item=$item'>Equipar</a>";
                            } else if($x['tipo'] == "arma de uma mão cortante e defesa" || $x['tipo'] == "arma de uma mão esmagadora e defesa" || $x['tipo'] == "arma de uma mão cortante" || $x['tipo'] == "arma de uma mão esmagadora" || $x['tipo'] == "arma de uma mão leve cortante" || $x['tipo'] == "arma de uma mão leve esmagadora" || $x['tipo'] == "arma de duas mãos cortante" || $x['tipo'] == "arma de duas mãos esmagadora" || $x['tipo'] == "arma a distancia cortante" || $x['tipo'] == "arma a distancia esmagadora" || $x['tipo'] == "arma do mago" || $x['tipo'] == "lanterna"){
                                $tipo = "<a href='itens/equipar_item.php?item=$item'>Equipar</a>";
                            }
                        }
                        echo "<ul>";
                            echo "<li>";
                                echo $key['item1']." ";
                                if(isset($_SESSION["arma1_personagem$a"]) && $key['item1'] == strtolower($_SESSION["arma1_personagem$a"]) || isset($_SESSION["arma2_personagem$a"]) && $key['item1'] == strtolower($_SESSION["arma2_personagem$a"]) || isset($_SESSION["armadura_personagem$a"]) && $key['item1'] == strtolower($_SESSION["armadura_personagem$a"])){
                                    echo "<a href='itens/desequipar_item.php?desq=$item'>Desequipar</a>";
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
                                $tipo = "<a href='itens/usar_item.php?item=$item'>Usar</a>";
                            } else if($x['tipo'] == "defesa"){
                                $tipo = "<a href='itens/equipar_item.php?item=$item'>Equipar</a>";
                            } else if($x['tipo'] == "arma de uma mão cortante e defesa" || $x['tipo'] == "arma de uma mão esmagadora e defesa" || $x['tipo'] == "arma de uma mão cortante" || $x['tipo'] == "arma de uma mão esmagadora" || $x['tipo'] == "arma de uma mão leve cortante" || $x['tipo'] == "arma de uma mão leve esmagadora" || $x['tipo'] == "arma de duas mãos cortante" || $x['tipo'] == "arma de duas mãos esmagadora" || $x['tipo'] == "arma a distancia cortante" || $x['tipo'] == "arma a distancia esmagadora" || $x['tipo'] == "arma do mago" || $x['tipo'] == "lanterna"){
                                $tipo = "<a href='itens/equipar_item.php?item=$item'>Equipar</a>";
                            }
                        }
                        echo "<ul>";
                            echo "<li>";
                                echo $key['item2']." ";
                                if(isset($_SESSION["arma1_personagem$a"]) && $key['item2'] == strtolower($_SESSION["arma1_personagem$a"]) || isset($_SESSION["arma2_personagem$a"]) && $key['item2'] == strtolower($_SESSION["arma2_personagem$a"]) || isset($_SESSION["armadura_personagem$a"]) && $key['item2'] == strtolower($_SESSION["armadura_personagem$a"])){
                                    echo "<a href='itens/desequipar_item.php?desq=$item'>Desequipar</a>";
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
                                $tipo = "<a href='itens/usar_item.php?item=$item'>Usar</a>";
                            } else if($x['tipo'] == "defesa"){
                                $tipo = "<a href='itens/equipar_item.php?item=$item'>Equipar</a>";
                            } else if($x['tipo'] == "arma de uma mão cortante e defesa" || $x['tipo'] == "arma de uma mão esmagadora e defesa" || $x['tipo'] == "arma de uma mão cortante" || $x['tipo'] == "arma de uma mão esmagadora" || $x['tipo'] == "arma de uma mão leve cortante" || $x['tipo'] == "arma de uma mão leve esmagadora" || $x['tipo'] == "arma de duas mãos cortante" || $x['tipo'] == "arma de duas mãos esmagadora" || $x['tipo'] == "arma a distancia cortante" || $x['tipo'] == "arma a distancia esmagadora" || $x['tipo'] == "arma do mago" || $x['tipo'] == "lanterna"){
                                $tipo = "<a href='itens/equipar_item.php?item=$item'>Equipar</a>";
                            }
                        }
                        echo "<ul>";
                            echo "<li>";
                                echo $key['item3']." ";
                                if(isset($_SESSION["arma1_personagem$a"]) && $key['item3'] == strtolower($_SESSION["arma1_personagem$a"]) || isset($_SESSION["arma2_personagem$a"]) && $key['item3'] == strtolower($_SESSION["arma2_personagem$a"]) || isset($_SESSION["armadura_personagem$a"]) && $key['item3'] == strtolower($_SESSION["armadura_personagem$a"])){
                                    echo "<a href='itens/desequipar_item.php?desq=$item'>Desequipar</a>";
                                } else {
                                    echo $tipo;
                                }
                                echo "<a href='itens/dar_item.php?item=$item'>Dar Item</a>";
                            echo "</li>";
                        echo "</ul>";
                    }
                    if($key['item4'] != NULL){
                        $item = $key['item4'];
                        $tipo_item = $repositorio->VerPreco($item);
                        foreach ($tipo_item as $x) {
                            if($x['tipo'] == "utilizável"){
                                $tipo = "<a href='itens/usar_item.php?item=$item'>Usar</a>";
                            } else if($x['tipo'] == "defesa"){
                                $tipo = "<a href='itens/equipar_item.php?item=$item'>Equipar</a>";
                            } else if($x['tipo'] == "arma de uma mão cortante e defesa" || $x['tipo'] == "arma de uma mão esmagadora e defesa" || $x['tipo'] == "arma de uma mão cortante" || $x['tipo'] == "arma de uma mão esmagadora" || $x['tipo'] == "arma de uma mão leve cortante" || $x['tipo'] == "arma de uma mão leve esmagadora" || $x['tipo'] == "arma de duas mãos cortante" || $x['tipo'] == "arma de duas mãos esmagadora" || $x['tipo'] == "arma a distancia cortante" || $x['tipo'] == "arma a distancia esmagadora" || $x['tipo'] == "arma do mago" || $x['tipo'] == "lanterna"){
                                $tipo = "<a href='itens/equipar_item.php?item=$item'>Equipar</a>";
                            }
                        }
                        echo "<ul>";
                            echo "<li>";
                                echo $key['item4']." ";
                                if(isset($_SESSION["arma1_personagem$a"]) && $key['item4'] == strtolower($_SESSION["arma1_personagem$a"]) || isset($_SESSION["arma2_personagem$a"]) && $key['item4'] == strtolower($_SESSION["arma2_personagem$a"]) || isset($_SESSION["armadura_personagem$a"]) && $key['item4'] == strtolower($_SESSION["armadura_personagem$a"])){
                                    echo "<a href='itens/desequipar_item.php?desq=$item'>Desequipar</a>";
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
                                $tipo = "<a href='itens/usar_item.php?item=$item'>Usar</a>";
                            } else if($x['tipo'] == "defesa"){
                                $tipo = "<a href='itens/equipar_item.php?item=$item'>Equipar</a>";
                            } else if($x['tipo'] == "arma de uma mão cortante e defesa" || $x['tipo'] == "arma de uma mão esmagadora e defesa" || $x['tipo'] == "arma de uma mão cortante" || $x['tipo'] == "arma de uma mão esmagadora" || $x['tipo'] == "arma de uma mão leve cortante" || $x['tipo'] == "arma de uma mão leve esmagadora" || $x['tipo'] == "arma de duas mãos cortante" || $x['tipo'] == "arma de duas mãos esmagadora" || $x['tipo'] == "arma a distancia cortante" || $x['tipo'] == "arma a distancia esmagadora" || $x['tipo'] == "arma do mago" || $x['tipo'] == "lanterna"){
                                $tipo = "<a href='itens/equipar_item.php?item=$item'>Equipar</a>";
                            }
                        }
                        echo "<ul>";
                            echo "<li>";
                                echo $key['item5']." ";
                                if(isset($_SESSION["arma1_personagem$a"]) && $key['item5'] == strtolower($_SESSION["arma1_personagem$a"]) || isset($_SESSION["arma2_personagem$a"]) && $key['item5'] == strtolower($_SESSION["arma2_personagem$a"]) || isset($_SESSION["armadura_personagem$a"]) && $key['item5'] == strtolower($_SESSION["armadura_personagem$a"])){
                                    echo "<a href='itens/desequipar_item.php?desq=$item'>Desequipar</a>";
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
                                $tipo = "<a href='itens/usar_item.php?item=$item'>Usar</a>";
                            } else if($x['tipo'] == "defesa"){
                                $tipo = "<a href=itens/'equipar_item.php?item=$item'>Equipar</a>";
                            } else if($x['tipo'] == "arma de uma mão cortante e defesa" || $x['tipo'] == "arma de uma mão esmagadora e defesa" || $x['tipo'] == "arma de uma mão cortante" || $x['tipo'] == "arma de uma mão esmagadora" || $x['tipo'] == "arma de uma mão leve cortante" || $x['tipo'] == "arma de uma mão leve esmagadora" || $x['tipo'] == "arma de duas mãos cortante" || $x['tipo'] == "arma de duas mãos esmagadora" || $x['tipo'] == "arma a distancia cortante" || $x['tipo'] == "arma a distancia esmagadora" || $x['tipo'] == "arma do mago" || $x['tipo'] == "lanterna"){
                                $tipo = "<a href='itens/equipar_item.php?item=$item'>Equipar</a>";
                            }
                        }
                        echo "<ul>";
                            echo "<li>";
                                echo $key['item6']." ";
                                if(isset($_SESSION["arma1_personagem$a"]) && $key['item6'] == strtolower($_SESSION["arma1_personagem$a"]) || isset($_SESSION["arma2_personagem$a"]) && $key['item6'] == strtolower($_SESSION["arma2_personagem$a"]) || isset($_SESSION["armadura_personagem$a"]) && $key['item6'] == strtolower($_SESSION["armadura_personagem$a"])){
                                    echo "<a href='itens/desequipar_item.php?desq=$item'>Desequipar</a>";
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
                                $tipo = "<a href='itens/usar_item.php?item=$item'>Usar</a>";
                            } else if($x['tipo'] == "defesa"){
                                $tipo = "<a href='itens/equipar_item.php?item=$item'>Equipar</a>";
                            } else if($x['tipo'] == "arma de uma mão cortante e defesa" || $x['tipo'] == "arma de uma mão esmagadora e defesa" || $x['tipo'] == "arma de uma mão cortante" || $x['tipo'] == "arma de uma mão esmagadora" || $x['tipo'] == "arma de uma mão leve cortante" || $x['tipo'] == "arma de uma mão leve esmagadora" || $x['tipo'] == "arma de duas mãos cortante" || $x['tipo'] == "arma de duas mãos esmagadora" || $x['tipo'] == "arma a distancia cortante" || $x['tipo'] == "arma a distancia esmagadora" || $x['tipo'] == "arma do mago" || $x['tipo'] == "lanterna"){
                                $tipo = "<a href='itens/equipar_item.php?item=$item'>Equipar</a>";
                            }
                        }
                        echo "<ul>";
                            echo "<li>";
                                echo $key['item7']." ";
                                if(isset($_SESSION["arma1_personagem$a"]) && $key['item7'] == strtolower($_SESSION["arma1_personagem$a"]) || isset($_SESSION["arma2_personagem$a"]) && $key['item7'] == strtolower($_SESSION["arma2_personagem$a"]) || isset($_SESSION["armadura_personagem$a"]) && $key['item7'] == strtolower($_SESSION["armadura_personagem$a"])){
                                    echo "<a href='itens/desequipar_item.php?desq=$item'>Desequipar</a>";
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
                                $tipo = "<a href='itens/usar_item.php?item=$item'>Usar</a>";
                            } else if($x['tipo'] == "defesa"){
                                $tipo = "<a href='itens/equipar_item.php?item=$item'>Equipar</a>";
                            } else if($x['tipo'] == "arma de uma mão cortante e defesa" || $x['tipo'] == "arma de uma mão esmagadora e defesa" || $x['tipo'] == "arma de uma mão cortante" || $x['tipo'] == "arma de uma mão esmagadora" || $x['tipo'] == "arma de uma mão leve cortante" || $x['tipo'] == "arma de uma mão leve esmagadora" || $x['tipo'] == "arma de duas mãos cortante" || $x['tipo'] == "arma de duas mãos esmagadora" || $x['tipo'] == "arma a distancia cortante" || $x['tipo'] == "arma a distancia esmagadora" || $x['tipo'] == "arma do mago" || $x['tipo'] == "lanterna"){
                                $tipo = "<a href='itens/equipar_item.php?item=$item'>Equipar</a>";
                            }
                        }
                        echo "<ul>";
                            echo "<li>";
                                echo $key['item8']." ";
                                if(isset($_SESSION["arma1_personagem$a"]) && $key['item8'] == strtolower($_SESSION["arma1_personagem$a"]) || isset($_SESSION["arma2_personagem$a"]) && $key['item8'] == strtolower($_SESSION["arma2_personagem$a"]) || isset($_SESSION["armadura_personagem$a"]) && $key['item8'] == strtolower($_SESSION["armadura_personagem$a"])){
                                    echo "<a href='itens/desequipar_item.php?desq=$item'>Desequipar</a>";
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
                                $tipo = "<a href='itens/usar_item.php?item=$item'>Usar</a>";
                            } else if($x['tipo'] == "defesa"){
                                $tipo = "<a href='itens/equipar_item.php?item=$item'>Equipar</a>";
                            } else if($x['tipo'] == "arma de uma mão cortante e defesa" || $x['tipo'] == "arma de uma mão esmagadora e defesa" || $x['tipo'] == "arma de uma mão cortante" || $x['tipo'] == "arma de uma mão esmagadora" || $x['tipo'] == "arma de uma mão leve cortante" || $x['tipo'] == "arma de uma mão leve esmagadora" || $x['tipo'] == "arma de duas mãos cortante" || $x['tipo'] == "arma de duas mãos esmagadora" || $x['tipo'] == "arma a distancia cortante" || $x['tipo'] == "arma a distancia esmagadora" || $x['tipo'] == "arma do mago" || $x['tipo'] == "lanterna"){
                                $tipo = "<a href='itens/equipar_item.php?item=$item'>Equipar</a>";
                            }
                        }
                        echo "<ul>";
                            echo "<li>";
                                echo $key['item9']." ";
                                if(isset($_SESSION["arma1_personagem$a"]) && $key['item9'] == strtolower($_SESSION["arma1_personagem$a"]) || isset($_SESSION["arma2_personagem$a"]) && $key['item9'] == strtolower($_SESSION["arma2_personagem$a"]) || isset($_SESSION["armadura_personagem$a"]) && $key['item9'] == strtolower($_SESSION["armadura_personagem$a"])){
                                    echo "<a href='itens/desequipar_item.php?desq=$item'>Desequipar</a>";
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
                                $tipo = "<a href='itens/usar_item.php?item=$item'>Usar</a>";
                            } else if($x['tipo'] == "defesa"){
                                $tipo = "<a href='itens/equipar_item.php?item=$item'>Equipar</a>";
                            } else if($x['tipo'] == "arma de uma mão cortante e defesa" || $x['tipo'] == "arma de uma mão esmagadora e defesa" || $x['tipo'] == "arma de uma mão cortante" || $x['tipo'] == "arma de uma mão esmagadora" || $x['tipo'] == "arma de uma mão leve cortante" || $x['tipo'] == "arma de uma mão leve esmagadora" || $x['tipo'] == "arma de duas mãos cortante" || $x['tipo'] == "arma de duas mãos esmagadora" || $x['tipo'] == "arma a distancia cortante" || $x['tipo'] == "arma a distancia esmagadora" || $x['tipo'] == "arma do mago" || $x['tipo'] == "lanterna"){
                                $tipo = "<a href='itens/equipar_item.php?item=$item'>Equipar</a>";
                            }
                        }
                        echo "<ul>";
                            echo "<li>";
                                echo $key['item10']." ";
                                if(isset($_SESSION["arma1_personagem$a"]) && $key['item10'] == strtolower($_SESSION["arma1_personagem$a"]) || isset($_SESSION["arma2_personagem$a"]) && $key['item10'] == strtolower($_SESSION["arma2_personagem$a"]) || isset($_SESSION["armadura_personagem$a"]) && $key['item10'] == strtolower($_SESSION["armadura_personagem$a"])){
                                    echo "<a href='itens/desequipar_item.php?desq=$item'>Desequipar</a>";
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
                                $tipo = "<a href='itens/usar_item.php?item=$item'>Usar</a>";
                            } else if($x['tipo'] == "defesa"){
                                $tipo = "<a href='itens/equipar_item.php?item=$item'>Equipar</a>";
                            } else if($x['tipo'] == "arma de uma mão cortante e defesa" || $x['tipo'] == "arma de uma mão esmagadora e defesa" || $x['tipo'] == "arma de uma mão cortante" || $x['tipo'] == "arma de uma mão esmagadora" || $x['tipo'] == "arma de uma mão leve cortante" || $x['tipo'] == "arma de uma mão leve esmagadora" || $x['tipo'] == "arma de duas mãos cortante" || $x['tipo'] == "arma de duas mãos esmagadora" || $x['tipo'] == "arma a distancia cortante" || $x['tipo'] == "arma a distancia esmagadora" || $x['tipo'] == "arma do mago" || $x['tipo'] == "lanterna"){
                                $tipo = "<a href='itens/equipar_item.php?item=$item'>Equipar</a>";
                            }
                        }
                        echo "<ul>";
                            echo "<li>";
                                echo $key['item11']." ";
                                if(isset($_SESSION["arma1_personagem$a"]) && $key['item11'] == strtolower($_SESSION["arma1_personagem$a"]) || isset($_SESSION["arma2_personagem$a"]) && $key['item11'] == strtolower($_SESSION["arma2_personagem$a"]) || isset($_SESSION["armadura_personagem$a"]) && $key['item11'] == strtolower($_SESSION["armadura_personagem$a"])){
                                    echo "<a href='itens/desequipar_item.php?desq=$item'>Desequipar</a>";
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
                                $tipo = "<a href='itens/usar_item.php?item=$item'>Usar</a>";
                            } else if($x['tipo'] == "defesa"){
                                $tipo = "<a href='itens/equipar_item.php?item=$item'>Equipar</a>";
                            } else if($x['tipo'] == "arma de uma mão cortante e defesa" || $x['tipo'] == "arma de uma mão esmagadora e defesa" || $x['tipo'] == "arma de uma mão cortante" || $x['tipo'] == "arma de uma mão esmagadora" || $x['tipo'] == "arma de uma mão leve cortante" || $x['tipo'] == "arma de uma mão leve esmagadora" || $x['tipo'] == "arma de duas mãos cortante" || $x['tipo'] == "arma de duas mãos esmagadora" || $x['tipo'] == "arma a distancia cortante" || $x['tipo'] == "arma a distancia esmagadora" || $x['tipo'] == "arma do mago" || $x['tipo'] == "lanterna"){
                                $tipo = "<a href='itens/equipar_item.php?item=$item'>Equipar</a>";
                            }
                        }
                        echo "<ul>";
                            echo "<li>";
                                echo $key['item12']." ";
                                if(isset($_SESSION["arma1_personagem$a"]) && $key['item12'] == strtolower($_SESSION["arma1_personagem$a"]) || isset($_SESSION["arma2_personagem$a"]) && $key['item12'] == strtolower($_SESSION["arma2_personagem$a"]) || isset($_SESSION["armadura_personagem$a"]) && $key['item12'] == strtolower($_SESSION["armadura_personagem$a"])){
                                    echo "<a href='itens/desequipar_item.php?desq=$item'>Desequipar</a>";
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
                                $tipo = "<a href='itens/usar_item.php?item=$item'>Usar</a>";
                            } else if($x['tipo'] == "defesa"){
                                $tipo = "<a href='itens/equipar_item.php?item=$item'>Equipar</a>";
                            } else if($x['tipo'] == "arma de uma mão cortante e defesa" || $x['tipo'] == "arma de uma mão esmagadora e defesa" || $x['tipo'] == "arma de uma mão cortante" || $x['tipo'] == "arma de uma mão esmagadora" || $x['tipo'] == "arma de uma mão leve cortante" || $x['tipo'] == "arma de uma mão leve esmagadora" || $x['tipo'] == "arma de duas mãos cortante" || $x['tipo'] == "arma de duas mãos esmagadora" || $x['tipo'] == "arma a distancia cortante" || $x['tipo'] == "arma a distancia esmagadora" || $x['tipo'] == "arma do mago" || $x['tipo'] == "lanterna"){
                                $tipo = "<a href='itens/equipar_item.php?item=$item'>Equipar</a>";
                            }
                        }
                        echo "<ul>";
                            echo "<li>";
                                echo $key['item13']." ";
                                if(isset($_SESSION["arma1_personagem$a"]) && $key['item13'] == strtolower($_SESSION["arma1_personagem$a"]) || isset($_SESSION["arma2_personagem$a"]) && $key['item13'] == strtolower($_SESSION["arma2_personagem$a"]) || isset($_SESSION["armadura_personagem$a"]) && $key['item13'] == strtolower($_SESSION["armadura_personagem$a"])){
                                    echo "<a href='itens/desequipar_item.php?desq=$item'>Desequipar</a>";
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
                                $tipo = "<a href='itens/usar_item.php?item=$item'>Usar</a>";
                            } else if($x['tipo'] == "defesa"){
                                $tipo = "<a href='itens/equipar_item.php?item=$item'>Equipar</a>";
                            } else if($x['tipo'] == "arma de uma mão cortante e defesa" || $x['tipo'] == "arma de uma mão esmagadora e defesa" || $x['tipo'] == "arma de uma mão cortante" || $x['tipo'] == "arma de uma mão esmagadora" || $x['tipo'] == "arma de uma mão leve cortante" || $x['tipo'] == "arma de uma mão leve esmagadora" || $x['tipo'] == "arma de duas mãos cortante" || $x['tipo'] == "arma de duas mãos esmagadora" || $x['tipo'] == "arma a distancia cortante" || $x['tipo'] == "arma a distancia esmagadora" || $x['tipo'] == "arma do mago" || $x['tipo'] == "lanterna"){
                                $tipo = "<a href='itens/equipar_item.php?item=$item'>Equipar</a>";
                            }
                        }
                        echo "<ul>";
                            echo "<li>";
                                echo $key['item14']." ";
                                if(isset($_SESSION["arma1_personagem$a"]) && $key['item14'] == strtolower($_SESSION["arma1_personagem$a"]) || isset($_SESSION["arma2_personagem$a"]) && $key['item14'] == strtolower($_SESSION["arma2_personagem$a"]) || isset($_SESSION["armadura_personagem$a"]) && $key['item14'] == strtolower($_SESSION["armadura_personagem$a"])){
                                    echo "<a href='itens/desequipar_item.php?desq=$item'>Desequipar</a>";
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
                                $tipo = "<a href='itens/usar_item.php?item=$item'>Usar</a>";
                            } else if($x['tipo'] == "defesa"){
                                $tipo = "<a href='itens/equipar_item.php?item=$item'>Equipar</a>";
                            } else if($x['tipo'] == "arma de uma mão cortante e defesa" || $x['tipo'] == "arma de uma mão esmagadora e defesa" || $x['tipo'] == "arma de uma mão cortante" || $x['tipo'] == "arma de uma mão esmagadora" || $x['tipo'] == "arma de uma mão leve cortante" || $x['tipo'] == "arma de uma mão leve esmagadora" || $x['tipo'] == "arma de duas mãos cortante" || $x['tipo'] == "arma de duas mãos esmagadora" || $x['tipo'] == "arma a distancia cortante" || $x['tipo'] == "arma a distancia esmagadora" || $x['tipo'] == "arma do mago" || $x['tipo'] == "lanterna"){
                                $tipo = "<a href='itens/equipar_item.php?item=$item'>Equipar</a>";
                            }
                        }
                        echo "<ul>";
                            echo "<li>";
                                echo $key['item15']." ";
                                if(isset($_SESSION["arma1_personagem$a"]) && $key['item15'] == strtolower($_SESSION["arma1_personagem$a"]) || isset($_SESSION["arma2_personagem$a"]) && $key['item15'] == strtolower($_SESSION["arma2_personagem$a"]) || isset($_SESSION["armadura_personagem$a"]) && $key['item15'] == strtolower($_SESSION["armadura_personagem$a"])){
                                    echo "<a href='itens/desequipar_item.php?desq=$item'>Desequipar</a>";
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
                                $tipo = "<a href='itens/usar_item.php?item=$item'>Usar</a>";
                            } else if($x['tipo'] == "defesa"){
                                $tipo = "<a href='itens/equipar_item.php?item=$item'>Equipar</a>";
                            } else if($x['tipo'] == "arma de uma mão cortante e defesa" || $x['tipo'] == "arma de uma mão esmagadora e defesa" || $x['tipo'] == "arma de uma mão cortante" || $x['tipo'] == "arma de uma mão esmagadora" || $x['tipo'] == "arma de uma mão leve cortante" || $x['tipo'] == "arma de uma mão leve esmagadora" || $x['tipo'] == "arma de duas mãos cortante" || $x['tipo'] == "arma de duas mãos esmagadora" || $x['tipo'] == "arma a distancia cortante" || $x['tipo'] == "arma a distancia esmagadora" || $x['tipo'] == "arma do mago" || $x['tipo'] == "lanterna"){
                                $tipo = "<a href='itens/equipar_item.php?item=$item'>Equipar</a>";
                            }
                        }
                        echo "<ul>";
                            echo "<li>";
                                echo $key['item16']." ";
                                if(isset($_SESSION["arma1_personagem$a"]) && $key['item16'] == strtolower($_SESSION["arma1_personagem$a"]) || isset($_SESSION["arma2_personagem$a"]) && $key['item16'] == strtolower($_SESSION["arma2_personagem$a"]) || isset($_SESSION["armadura_personagem$a"]) && $key['item16'] == strtolower($_SESSION["armadura_personagem$a"])){
                                    echo "<a href='itens/desequipar_item.php?desq=$item'>Desequipar</a>";
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
                                $tipo = "<a href='itens/usar_item.php?item=$item'>Usar</a>";
                            } else if($x['tipo'] == "defesa"){
                                $tipo = "<a href='itens/equipar_item.php?item=$item'>Equipar</a>";
                            } else if($x['tipo'] == "arma de uma mão cortante e defesa" || $x['tipo'] == "arma de uma mão esmagadora e defesa" || $x['tipo'] == "arma de uma mão cortante" || $x['tipo'] == "arma de uma mão esmagadora" || $x['tipo'] == "arma de uma mão leve cortante" || $x['tipo'] == "arma de uma mão leve esmagadora" || $x['tipo'] == "arma de duas mãos cortante" || $x['tipo'] == "arma de duas mãos esmagadora" || $x['tipo'] == "arma a distancia cortante" || $x['tipo'] == "arma a distancia esmagadora" || $x['tipo'] == "arma do mago" || $x['tipo'] == "lanterna"){
                                $tipo = "<a href='itens/equipar_item.php?item=$item'>Equipar</a>";
                            }
                        }
                        echo "<ul>";
                            echo "<li>";
                                echo $key['item17']." ";
                                if(isset($_SESSION["arma1_personagem$a"]) && $key['item17'] == strtolower($_SESSION["arma1_personagem$a"]) || isset($_SESSION["arma2_personagem$a"]) && $key['item17'] == strtolower($_SESSION["arma2_personagem$a"]) || isset($_SESSION["armadura_personagem$a"]) && $key['item17'] == strtolower($_SESSION["armadura_personagem$a"])){
                                    echo "<a href='itens/desequipar_item.php?desq=$item'>Desequipar</a>";
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
                                $tipo = "<a href='itens/usar_item.php?item=$item'>Usar</a>";
                            } else if($x['tipo'] == "defesa"){
                                $tipo = "<a href='itens/equipar_item.php?item=$item'>Equipar</a>";
                            } else if($x['tipo'] == "arma de uma mão cortante e defesa" || $x['tipo'] == "arma de uma mão esmagadora e defesa" || $x['tipo'] == "arma de uma mão cortante" || $x['tipo'] == "arma de uma mão esmagadora" || $x['tipo'] == "arma de uma mão leve cortante" || $x['tipo'] == "arma de uma mão leve esmagadora" || $x['tipo'] == "arma de duas mãos cortante" || $x['tipo'] == "arma de duas mãos esmagadora" || $x['tipo'] == "arma a distancia cortante" || $x['tipo'] == "arma a distancia esmagadora" || $x['tipo'] == "arma do mago" || $x['tipo'] == "lanterna"){
                                $tipo = "<a href='itens/equipar_item.php?item=$item'>Equipar</a>";
                            }
                        }
                        echo "<ul>";
                            echo "<li>";
                                echo $key['item18']." ";
                                if(isset($_SESSION["arma1_personagem$a"]) && $key['item18'] == strtolower($_SESSION["arma1_personagem$a"]) || isset($_SESSION["arma2_personagem$a"]) && $key['item18'] == strtolower($_SESSION["arma2_personagem$a"]) || isset($_SESSION["armadura_personagem$a"]) && $key['item18'] == strtolower($_SESSION["armadura_personagem$a"])){
                                    echo "<a href='itens/desequipar_item.php?desq=$item'>Desequipar</a>";
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
                                $tipo = "<a href='itens/usar_item.php?item=$item'>Usar</a>";
                            } else if($x['tipo'] == "defesa"){
                                $tipo = "<a href='itens/equipar_item.php?item=$item'>Equipar</a>";
                            } else if($x['tipo'] == "arma de uma mão cortante e defesa" || $x['tipo'] == "arma de uma mão esmagadora e defesa" || $x['tipo'] == "arma de uma mão cortante" || $x['tipo'] == "arma de uma mão esmagadora" || $x['tipo'] == "arma de uma mão leve cortante" || $x['tipo'] == "arma de uma mão leve esmagadora" || $x['tipo'] == "arma de duas mãos cortante" || $x['tipo'] == "arma de duas mãos esmagadora" || $x['tipo'] == "arma a distancia cortante" || $x['tipo'] == "arma a distancia esmagadora" || $x['tipo'] == "arma do mago" || $x['tipo'] == "lanterna"){
                                $tipo = "<a href='itens/equipar_item.php?item=$item'>Equipar</a>";
                            }
                        }
                        echo "<ul>";
                            echo "<li>";
                                echo $key['item19']." ";
                                if(isset($_SESSION["arma1_personagem$a"]) && $key['item19'] == strtolower($_SESSION["arma1_personagem$a"]) || isset($_SESSION["arma2_personagem$a"]) && $key['item19'] == strtolower($_SESSION["arma2_personagem$a"]) || isset($_SESSION["armadura_personagem$a"]) && $key['item19'] == strtolower($_SESSION["armadura_personagem$a"])){
                                    echo "<a href='itens/desequipar_item.php?desq=$item'>Desequipar</a>";
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
                                $tipo = "<a href='itens/usar_item.php?item=$item'>Usar</a>";
                            } else if($x['tipo'] == "defesa"){
                                $tipo = "<a href='itens/equipar_item.php?item=$item'>Equipar</a>";
                            } else if($x['tipo'] == "arma de uma mão cortante e defesa" || $x['tipo'] == "arma de uma mão esmagadora e defesa" || $x['tipo'] == "arma de uma mão cortante" || $x['tipo'] == "arma de uma mão esmagadora" || $x['tipo'] == "arma de uma mão leve cortante" || $x['tipo'] == "arma de uma mão leve esmagadora" || $x['tipo'] == "arma de duas mãos cortante" || $x['tipo'] == "arma de duas mãos esmagadora" || $x['tipo'] == "arma a distancia cortante" || $x['tipo'] == "arma a distancia esmagadora" || $x['tipo'] == "arma do mago" || $x['tipo'] == "lanterna"){
                                $tipo = "<a href='itens/equipar_item.php?item=$item'>Equipar</a>";
                            }
                        }
                        echo "<ul>";
                            echo "<li>";
                                echo $key['item20']." ";
                                if(isset($_SESSION["arma1_personagem$a"]) && $key['item20'] == strtolower($_SESSION["arma1_personagem$a"]) || isset($_SESSION["arma2_personagem$a"]) && $key['item20'] == strtolower($_SESSION["arma2_personagem$a"]) || isset($_SESSION["armadura_personagem$a"]) && $key['item20'] == strtolower($_SESSION["armadura_personagem$a"])){
                                    echo "<a href='itens/desequipar_item.php?desq=$item'>Desequipar</a>";
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
                                $tipo = "<a href='itens/usar_item.php?item=$item'>Usar</a>";
                            } else if($x['tipo'] == "defesa"){
                                $tipo = "<a href='itens/equipar_item.php?item=$item'>Equipar</a>";
                            } else if($x['tipo'] == "arma de uma mão cortante e defesa" || $x['tipo'] == "arma de uma mão esmagadora e defesa" || $x['tipo'] == "arma de uma mão cortante" || $x['tipo'] == "arma de uma mão esmagadora" || $x['tipo'] == "arma de uma mão leve cortante" || $x['tipo'] == "arma de uma mão leve esmagadora" || $x['tipo'] == "arma de duas mãos cortante" || $x['tipo'] == "arma de duas mãos esmagadora" || $x['tipo'] == "arma a distancia cortante" || $x['tipo'] == "arma a distancia esmagadora" || $x['tipo'] == "arma do mago" || $x['tipo'] == "lanterna"){
                                $tipo = "<a href='itens/equipar_item.php?item=$item'>Equipar</a>";
                            }
                        }
                        echo "<ul>";
                            echo "<li>";
                                echo $key['item21']." ";
                                if(isset($_SESSION["arma1_personagem$a"]) && $key['item21'] == strtolower($_SESSION["arma1_personagem$a"]) || isset($_SESSION["arma2_personagem$a"]) && $key['item21'] == strtolower($_SESSION["arma2_personagem$a"]) || isset($_SESSION["armadura_personagem$a"]) && $key['item21'] == strtolower($_SESSION["armadura_personagem$a"])){
                                    echo "<a href='itens/desequipar_item.php?desq=$item'>Desequipar</a>";
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
                                $tipo = "<a href='itens/usar_item.php?item=$item'>Usar</a>";
                            } else if($x['tipo'] == "defesa"){
                                $tipo = "<a href='itens/equipar_item.php?item=$item'>Equipar</a>";
                            } else if($x['tipo'] == "arma de uma mão cortante e defesa" || $x['tipo'] == "arma de uma mão esmagadora e defesa" || $x['tipo'] == "arma de uma mão cortante" || $x['tipo'] == "arma de uma mão esmagadora" || $x['tipo'] == "arma de uma mão leve cortante" || $x['tipo'] == "arma de uma mão leve esmagadora" || $x['tipo'] == "arma de duas mãos cortante" || $x['tipo'] == "arma de duas mãos esmagadora" || $x['tipo'] == "arma a distancia cortante" || $x['tipo'] == "arma a distancia esmagadora" || $x['tipo'] == "arma do mago" || $x['tipo'] == "lanterna"){
                                $tipo = "<a href='itens/equipar_item.php?item=$item'>Equipar</a>";
                            }
                        }
                        echo "<ul>";
                            echo "<li>";
                                echo $key['item22']." ";
                                if(isset($_SESSION["arma1_personagem$a"]) && $key['item22'] == strtolower($_SESSION["arma1_personagem$a"]) || isset($_SESSION["arma2_personagem$a"]) && $key['item22'] == strtolower($_SESSION["arma2_personagem$a"]) || isset($_SESSION["armadura_personagem$a"]) && $key['item22'] == strtolower($_SESSION["armadura_personagem$a"])){
                                    echo "<a href='itens/desequipar_item.php?desq=$item'>Desequipar</a>";
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
                                $tipo = "<a href='itens/usar_item.php?item=$item'>Usar</a>";
                            } else if($x['tipo'] == "defesa"){
                                $tipo = "<a href='itens/equipar_item.php?item=$item'>Equipar</a>";
                            } else if($x['tipo'] == "arma de uma mão cortante e defesa" || $x['tipo'] == "arma de uma mão esmagadora e defesa" || $x['tipo'] == "arma de uma mão cortante" || $x['tipo'] == "arma de uma mão esmagadora" || $x['tipo'] == "arma de uma mão leve cortante" || $x['tipo'] == "arma de uma mão leve esmagadora" || $x['tipo'] == "arma de duas mãos cortante" || $x['tipo'] == "arma de duas mãos esmagadora" || $x['tipo'] == "arma a distancia cortante" || $x['tipo'] == "arma a distancia esmagadora" || $x['tipo'] == "arma do mago" || $x['tipo'] == "lanterna"){
                                $tipo = "<a href='itens/equipar_item.php?item=$item'>Equipar</a>";
                            }
                        }
                        echo "<ul>";
                            echo "<li>";
                                echo $key['item23']." ";
                                if(isset($_SESSION["arma1_personagem$a"]) && $key['item23'] == strtolower($_SESSION["arma1_personagem$a"]) || isset($_SESSION["arma2_personagem$a"]) && $key['item23'] == strtolower($_SESSION["arma2_personagem$a"]) || isset($_SESSION["armadura_personagem$a"]) && $key['item23'] == strtolower($_SESSION["armadura_personagem$a"])){
                                    echo "<a href='itens/desequipar_item.php?desq=$item'>Desequipar</a>";
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
                                $tipo = "<a href='itens/usar_item.php?item=$item'>Usar</a>";
                            } else if($x['tipo'] == "defesa"){
                                $tipo = "<a href='itens/equipar_item.php?item=$item'>Equipar</a>";
                            } else if($x['tipo'] == "arma de uma mão cortante e defesa" || $x['tipo'] == "arma de uma mão esmagadora e defesa" || $x['tipo'] == "arma de uma mão cortante" || $x['tipo'] == "arma de uma mão esmagadora" || $x['tipo'] == "arma de uma mão leve cortante" || $x['tipo'] == "arma de uma mão leve esmagadora" || $x['tipo'] == "arma de duas mãos cortante" || $x['tipo'] == "arma de duas mãos esmagadora" || $x['tipo'] == "arma a distancia cortante" || $x['tipo'] == "arma a distancia esmagadora" || $x['tipo'] == "arma do mago" || $x['tipo'] == "lanterna"){
                                $tipo = "<a href='itens/equipar_item.php?item=$item'>Equipar</a>";
                            }
                        }
                        echo "<ul>";
                            echo "<li>";
                                echo $key['item24']." ";
                                if(isset($_SESSION["arma1_personagem$a"]) && $key['item24'] == strtolower($_SESSION["arma1_personagem$a"]) || isset($_SESSION["arma2_personagem$a"]) && $key['item24'] == strtolower($_SESSION["arma2_personagem$a"]) || isset($_SESSION["armadura_personagem$a"]) && $key['item24'] == strtolower($_SESSION["armadura_personagem$a"])){
                                    echo "<a href='itens/desequipar_item.php?desq=$item'>Desequipar</a>";
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
                                $tipo = "<a href='itens/usar_item.php?item=$item'>Usar</a>";
                            } else if($x['tipo'] == "defesa"){
                                $tipo = "<a href='itens/equipar_item.php?item=$item'>Equipar</a>";
                            } else if($x['tipo'] == "arma de uma mão cortante e defesa" || $x['tipo'] == "arma de uma mão esmagadora e defesa" || $x['tipo'] == "arma de uma mão cortante" || $x['tipo'] == "arma de uma mão esmagadora" || $x['tipo'] == "arma de uma mão leve cortante" || $x['tipo'] == "arma de uma mão leve esmagadora" || $x['tipo'] == "arma de duas mãos cortante" || $x['tipo'] == "arma de duas mãos esmagadora" || $x['tipo'] == "arma a distancia cortante" || $x['tipo'] == "arma a distancia esmagadora" || $x['tipo'] == "arma do mago" || $x['tipo'] == "lanterna"){
                                $tipo = "<a href='itens/equipar_item.php?item=$item'>Equipar</a>";
                            }
                        }
                        echo "<ul>";
                            echo "<li>";
                                echo $key['item25']." ";
                                if(isset($_SESSION["arma1_personagem$a"]) && $key['item25'] == strtolower($_SESSION["arma1_personagem$a"]) || isset($_SESSION["arma2_personagem$a"]) && $key['item25'] == strtolower($_SESSION["arma2_personagem$a"]) || isset($_SESSION["armadura_personagem$a"]) && $key['item25'] == strtolower($_SESSION["armadura_personagem$a"])){
                                    echo "<a href='itens/desequipar_item.php?desq=$item'>Desequipar</a>";
                                } else {
                                    echo $tipo;
                                }
                                echo " <a href='itens/dar_item.php?item=$item'> Dar Item</a>";
                            echo "</li>";
                        echo "</ul>";
                    }
                }
            } 
            
            echo "<br>";
            echo "<br>";
        ?>
    </div>
    <div class="inventario__tabletop">
        <div class="inventario2">
        <ul>
            <?php
            if($_SESSION['turno'] == "armadilha"){

            } else {
                echo "<h1 class='inventario2__h1'>Inventário</h1>";
            }
            if($_SESSION['turno'] == "monstros"){
                if(isset($_SESSION['defensor'])){
                    $id = $_SESSION['defensor'];
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

                    echo "<br>";
                    echo "<h2 class='inventario2__h1'>Itens Equipados</h2>";
                    echo "<h3>Armaduras</h3>";

                    if($id == $_SESSION['personagem1']){
                        $a = "1";
                    } else if($id == $_SESSION['personagem2']){
                        $a = "2";
                    } else if($id == $_SESSION['personagem3']){
                        $a = "3";
                    } else if($id == $_SESSION['personagem4']){
                        $a = "4";
                    }                    

                            if(isset($_SESSION["armadura_personagem$a"])){
                                echo "<li>".$_SESSION["armadura_personagem$a"]."</li>";
                            } else {
                                echo "<li> N </li>";
                            }
                            echo "<h3>Armas</h3>";
                            if(isset($_SESSION["arma1_personagem$a"])){
                                echo "<li>".$_SESSION["arma1_personagem$a"]."</li>";
                            }
                            if(isset($_SESSION["arma2_personagem$a"]) && $_SESSION["arma2_personagem$a"] != $_SESSION["arma1_personagem$a"]){
                                echo "<li>".$_SESSION["arma2_personagem$a"]."</li>";
                            }

                } else {
                    $id = 0;
                }
            } else if($_SESSION['turno'] == "armadilha") {

            } else {
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

                    echo "<br>";
                    echo "<h2 class='inventario2__h1'>Itens Equipados</h2>";
                    echo "</br>";
                    echo "<h3>Armaduras</h3>";

                    if($id == $_SESSION['personagem1']){
                        $a = "1";
                    } else if($id == $_SESSION['personagem2']){
                        $a = "2";
                    } else if($id == $_SESSION['personagem3']){
                        $a = "3";
                    } else if($id == $_SESSION['personagem4']){
                        $a = "4";
                    }                    

                            if(isset($_SESSION["armadura_personagem$a"])){
                                echo "<li>".$_SESSION["armadura_personagem$a"]."</li>";
                            } else {
                                echo "<li> N </li>";
                            }
                            echo "<h3>Armas</h3>";
                            if(isset($_SESSION["arma1_personagem$a"])){
                                echo "<li>".$_SESSION["arma1_personagem$a"]."</li>";
                            }
                            if(isset($_SESSION["arma2_personagem$a"]) && $_SESSION["arma2_personagem$a"] != $_SESSION["arma1_personagem$a"]){
                                echo "<li>".$_SESSION["arma2_personagem$a"]."</li>";
                            }      
            }
            ?>
        </ul>
    </div>
    </div>
    </div> 
    <div class='baixo'>
        <div class="mapa" style='background-color:white'>
            <?php
                
                list($largura_original,$altura_original) = getimagesize($_SESSION['mapa_atual']);

                if($largura_original > $altura_original){
                    $largura = $largura_original * 6;
                    $altura = $altura_original * 4.9;
                } else {
                    $largura = $largura_original * 4.7;
                    $altura = $altura_original * 6;
                }

                $mapa = $_SESSION['mapa_atual'];
                $direita = $repositorio->VerificarDireita($mapa);
                $esquerda = $repositorio->VerificarEsquerda($mapa);
                $cima = $repositorio->VerificarCima($mapa);
                $baixo = $repositorio->VerificarBaixo($mapa);

                $a = "direita";
                $b = "esquerda";
                $c = "cima";
                $d = "baixo";

                if($direita > 0){
                    if($direita > 1){
                        if($direita == 2){
                            echo "<a href='mapa/sortear_novo_mapa.php?id=$a'><img src='../../imagens/mapas/setas2.png' style='width:60px;height:35px'></a>";
                            echo "<a href='mapa/sortear_novo_mapa.php?id=$a'><img src='../../imagens/mapas/setas2.png' style='width:60px;height:35px'></a>";
                        } else if($direita == 3){
                            echo "<a href='mapa/sortear_novo_mapa.php?id=$a'><img src='../../imagens/mapas/setas2.png' style='width:60px;height:35px'></a>";
                            echo "<a href='mapa/sortear_novo_mapa.php?id=$a'><img src='../../imagens/mapas/setas2.png' style='width:60px;height:35px'></a>";
                            echo "<a href='mapa/sortear_novo_mapa.php?id=$a'><img src='../../imagens/mapas/setas2.png' style='width:60px;height:35px'></a>";
                        }
                    } else {
                        echo "<a href='mapa/sortear_novo_mapa.php?id=$a'><img src='../../imagens/mapas/setas2.png' style='width:60px;height:35px'></a>";
                    }
                }
                if($esquerda > 0){
                    if($esquerda > 1){
                        if($esquerda == 2){
                            echo "<a href='mapa/sortear_novo_mapa.php?id=$b'><img src='../../imagens/mapas/setas4.png' style='width:60px;height:35px'></a>";
                            echo "<a href='mapa/sortear_novo_mapa.php?id=$b'><img src='../../imagens/mapas/setas4.png' style='width:60px;height:35px'></a>";
                        } else if($esquerda == 3){
                            echo "<a href='mapa/sortear_novo_mapa.php?id=$b'><img src='../../imagens/mapas/setas4.png' style='width:60px;height:35px'></a>";
                            echo "<a href='mapa/sortear_novo_mapa.php?id=$b'><img src='../../imagens/mapas/setas4.png' style='width:60px;height:35px'></a>";
                            echo "<a href='mapa/sortear_novo_mapa.php?id=$b'><img src='../../imagens/mapas/setas4.png' style='width:60px;height:35px'></a>";
                        }
                    } else {
                        echo "<a href='mapa/sortear_novo_mapa.php?id=$b'><img src='../../imagens/mapas/setas4.png' style='width:60px;height:35px'></a>";
                    }
                }
                if($cima > 0){
                    if($cima > 1){
                        if($cima == 2){
                            echo "<a href='mapa/sortear_novo_mapa.php?id=$c'><img src='../../imagens/mapas/setas1.png' style='width:35px;height:60px'></a>";
                            echo "<a href='mapa/sortear_novo_mapa.php?id=$c'><img src='../../imagens/mapas/setas1.png' style='width:35px;height:60px'></a>";
                        } else if($cima == 3){
                            echo "<a href='mapa/sortear_novo_mapa.php?id=$c'><img src='../../imagens/mapas/setas1.png' style='width:35px;height:60px'></a>";
                            echo "<a href='mapa/sortear_novo_mapa.php?id=$c'><img src='../../imagens/mapas/setas1.png' style='width:35px;height:60px'></a>";
                            echo "<a href='mapa/sortear_novo_mapa.php?id=$c'><img src='../../imagens/mapas/setas1.png' style='width:35px;height:60px'></a>";
                        }
                    } else {
                        echo "<a href='mapa/sortear_novo_mapa.php?id=$c'><img src='../../imagens/mapas/setas1.png' style='width:35px;height:60px'></a>";
                    }
                }
                
                if(isset($largura_seta)){

                } else {
                    $largura_seta = 0;
                }
                $margin_left = (300 - $largura - $largura_seta) / 2;

                if(isset($altura_seta)){

                } else {
                    $altura_seta = 0;
                }
                if($baixo > 0){
                    $altura_seta = 60;
                }
                $margin_bottom = (250 - $altura - $altura_seta) / 2;
                echo "<div style='display: flex;margin-left: ".$margin_left."px; margin-bottom: ".$margin_bottom."px'>";
                    echo "<img src='".$_SESSION['mapa_atual']."' style='height:".$altura."px;width:".$largura."px'>";
                echo "</div>";

                if($baixo > 0){
                    if($baixo > 1){
                        if($baixo == 2){
                            echo "<a href='mapa/sortear_novo_mapa.php?id=$d'><img src='../../imagens/mapas/setas3.png' style='width:35px;height:60px'></a>";
                        } else if($baixo == 3){
                            echo "<a href='mapa/sortear_novo_mapa.php?id=$d'><img src='../../imagens/mapas/setas3.png' style='width:35px;height:60px'></a>";
                            echo "<a href='mapa/sortear_novo_mapa.php?id=$d'><img src='../../imagens/mapas/setas3.png' style='width:35px;height:60px'></a>";
                        }
                    } else {
                        echo "<a href='mapa/sortear_novo_mapa.php?id=$d'><img src='../../imagens/mapas/setas3.png' style='width:35px;height:60px'></a>";
                    }
                }
            ?>
        </div>
        <div class="personagens">
            <div class="p1">

                <div class="personagens__players">

                <?php
                $turno = $_SESSION['turno'];
                    echo "<div class='mostrar__pers'>";
                        if($turno == $_SESSION['personagem1']){
                            echo "<img class='mostrar__pers__img' src='../../$img_personagem1'>";
                        }
                        echo "Nome: ".$nome_personagem1;
                        echo "<br>";
                        if(isset($_SESSION['personagem1_pedra'])){
                            echo "<h2 style='color:gray'>Petrificado</h2>";
                            echo "<br>";
                        }
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
                    
                    if($turno == $_SESSION['personagem1']){
                        if(isset($_SESSION['ecolher_cura']) || isset($_SESSION['confirmar_ataque']) || isset($_SESSION['tesouro']) || isset($_SESSION['dano']) || isset($_SESSION['personagem1_pedra'])){
                            if(isset($_SESSION['personagem1_pedra'])){
                                header('Location: passar_turno.php');
                            } else {
                                $id = $turno;
                                    echo "<br>";
                                    echo "<h2 class='acao__link'><a class='link' href='passar_turno.php?id=$id'>Passar Turno</a></h2>";
                                    echo "<br>";
                                    echo "<h2 class='acao__link'><a class='link' href='itens/mostrar_itens.php?id=$id'>Itens</a></h2>";  
                            }
                        } else {
                            $id = $turno;
                                echo "<br>";
                                echo "<h2 class='acao__link'><a class='link' href='passar_turno.php?id=$id'>Passar Turno</a></h2>";
                                echo "<br>";
                                echo "<h2 class='acao__link'><a class='link' href='itens/mostrar_itens.php?id=$id'>Itens</a></h2>";
                        } 
                    } 
                    echo "</div>";
                    echo "<div class='mostrar__pers'>";
                        if($turno == $_SESSION['personagem2']){
                            echo "<img class='mostrar__pers__img' src='../../$img_personagem2'>";
                        }
                        
                        echo "Nome: ".$nome_personagem2;
                        echo "<br>";
                        if(isset($_SESSION['personagem2_pedra'])){
                            echo "<h2 style='color:gray'>Petrificado</h2>";
                            echo "<br>";
                        }
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
                    if($turno == $_SESSION['personagem2']){
                        if(isset($_SESSION['ecolher_cura']) || isset($_SESSION['confirmar_ataque']) || isset($_SESSION['tesouro']) || isset($_SESSION['dano']) || isset($_SESSION['personagem1_pedra'])){
                            if(isset($_SESSION['personagem2_pedra'])){
                                header('Location: passar_turno.php');
                            } else {
                                $id = $turno;
                                echo "<br>";
                                    echo "<h2 class='acao__link'><a class='link' href='passar_turno.php?id=$id'>Passar Turno</a></h2>";
                                    echo "<br>";
                                    echo "<h2 class='acao__link'><a class='link' href='itens/mostrar_itens.php?id=$id'>Itens</a></h2>"; 
                            }
                        } else {
                            $id = $turno;
                                echo "<br>";
                                echo "<h2 class='acao__link'><a class='link' href='passar_turno.php?id=$id'>Passar Turno</a></h2>";
                                echo "<br>";
                                echo "<h2 class='acao__link'><a class='link' href='itens/mostrar_itens.php?id=$id'>Itens</a></h2>";
                        }
                    }
                    echo "</div>";
                    echo "<div class='mostrar__pers'>";
                        if($turno == $_SESSION['personagem3']){
                            echo "<img src='../../$img_personagem3' style='float:left'>";
                        }
                        echo "Nome: ".$nome_personagem3;
                        echo "<br>";
                        if(isset($_SESSION['personagem3_pedra'])){
                            echo "<h2 style='color:gray'>Petrificado</h2>";
                            echo "<br>";
                        }
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
                    if($turno == $_SESSION['personagem3']){
                        if(isset($_SESSION['ecolher_cura']) || isset($_SESSION['confirmar_ataque']) || isset($_SESSION['tesouro']) || isset($_SESSION['dano']) || isset($_SESSION['personagem3_pedra'])){
                            if(isset($_SESSION['personagem3_pedra'])){
                                header('Location: passar_turno.php');
                            } else {
                                $id = $turno;
                                echo "<br>";
                                    echo "<h2 class='acao__link'><a class='link' href='passar_turno.php?id=$id'>Passar Turno</a></h2>";
                                    echo "<br>";
                                    echo "<h2 class='acao__link'><a class='link' href='itens/mostrar_itens.php?id=$id'>Itens</a></h2>"; 
                            }
                        } else {
                            $id = $turno;
                            echo "<br>"; 
                                echo "<h2 class='acao__link'><a class='link' href='passar_turno.php?id=$id'>Passar Turno</a></h2>";
                                echo "<br>";
                                echo "<h2 class='acao__link'><a class='link' href='itens/mostrar_itens.php?id=$id'>Itens</a></h2>";
                        }
                    }
                    echo "</div>";
                    echo "<div class='mostrar__pers'>";
                        if($turno == $_SESSION['personagem4']){
                            echo "<img src='../../$img_personagem4'>";
                        }
                        echo "Nome: ".$nome_personagem4;
                        echo "<br>";
                        if(isset($_SESSION['personagem4_pedra'])){
                            echo "<h2 style='color:gray'>Petrificado</h2>";
                            echo "<br>";
                        }
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
                    
                    if($turno == $_SESSION['personagem4']){
                        if(isset($_SESSION['ecolher_cura']) || isset($_SESSION['confirmar_ataque']) || isset($_SESSION['tesouro']) || isset($_SESSION['dano']) || isset($_SESSION['personagem4_pedra'])){
                            if(isset($_SESSION['personagem4_pedra'])){
                                header('Location: passar_turno.php');
                            } else {
                                $id = $turno;
                                echo "<br>";
                                    echo "<h2 class='acao__link'><a class='link' href='passar_turno.php?id=$id'>Passar Turno</a>";
                                    echo "<br>";
                                    echo "<h2 class='acao__link'><a class='link' href='itens/mostrar_itens.php?id=$id'>Itens</a>"; 
                            }
                        } else {
                            $id = $turno;
                            echo "<br>";
                                echo "<h2 class='acao__link'><a class='link' href='passar_turno.php?id=$id'>Passar Turno</a>";
                                echo "<br>";
                                echo "<h2 class='acao__link'><a class='link' href='itens/mostrar_itens.php?id=$id'>Itens</a>";
 
                        }
                    }
                    echo "</div>";
                ?>
                </div>
            </div>
        </div>
        <div class="mapaPrincipal" style='background-color:white'>
            <?php
                echo $_SESSION['mapa_geral'];
            ?>
        </div>
    </div>
</body>
</html>