<?php

session_start();
require_once '../../classes/repositorioTabletop.php'; 
$repositorio = new RepositorioTabletopMySQL();

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
        <?php
            if(isset($_SESSION['monstro'])){
                if($_SESSION['quantidade_monstro'] > 0){
                    echo "<img src='".$_SESSION['img_monstro']."'>";
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
                } 
            }
        ?>
        <p>informação monstros</p>
    </div>
    <div class="principal">
        <div style='border: solid 2px black'>
        <?php 
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
                        echo "<div style='border: solid 2px black'>";
                            echo "Nome: ".$key['nome'];
                            echo "<a href='itens/dar_item.php?dest=$dest'>Selecionar</a>";
                        echo "</div>";
                    }

                    $id = $_SESSION['personagem3'];
                    $personagem3 = $repositorio->MostrarPersonagem($id);
                    foreach ($personagem3 as $key) {
                        $dest = $key['nome'];
                        echo "<div style='border: solid 2px black'>";
                            echo "Nome: ".$key['nome'];
                            echo "<a href='itens/dar_item.php?dest=$dest'>Selecionar</a>";
                        echo "</div>";
                    }

                    $id = $_SESSION['personagem4'];
                    $personagem4 = $repositorio->MostrarPersonagem($id);
                    foreach ($personagem4 as $key) {
                        $dest = $key['nome'];
                        echo "<div style='border: solid 2px black'>";
                            echo "Nome: ".$key['nome'];
                            echo "<a href='itens/dar_item.php?dest=$dest'>Selecionar</a>";
                        echo "</div>";
                    }
                } else if($_SESSION['turno'] == $_SESSION['personagem2']){
                    $id = $_SESSION['personagem1'];
                    $personagem1 = $repositorio->MostrarPersonagem($id);
                    foreach ($personagem1 as $key) {
                        $dest = $key['nome'];
                        echo "<div style='border: solid 2px black'>";
                            echo "Nome: ".$key['nome'];
                            echo "<a href='itens/dar_item.php?dest=$dest'>Selecionar</a>";
                        echo "</div>";
                    }

                    $id = $_SESSION['personagem3'];
                    $personagem3 = $repositorio->MostrarPersonagem($id);
                    foreach ($personagem3 as $key) {
                        $dest = $key['nome'];
                        echo "<div style='border: solid 2px black'>";
                            echo "Nome: ".$key['nome'];
                            echo "<a href='itens/dar_item.php?dest=$dest'>Selecionar</a>";
                        echo "</div>";
                    }

                    $id = $_SESSION['personagem4'];
                    $personagem4 = $repositorio->MostrarPersonagem($id);
                    foreach ($personagem4 as $key) {
                        $dest = $key['nome'];
                        echo "<div style='border: solid 2px black'>";
                            echo "Nome: ".$key['nome'];
                            echo "<a href='itens/dar_item.php?dest=$dest'>Selecionar</a>";
                        echo "</div>";
                    }
                } else if($_SESSION['turno'] == $_SESSION['personagem3']){
                    $id = $_SESSION['personagem1'];
                    $personagem1 = $repositorio->MostrarPersonagem($id);
                    foreach ($personagem1 as $key) {
                        $dest = $key['nome'];
                        echo "<div style='border: solid 2px black'>";
                            echo "Nome: ".$key['nome'];
                            echo "<a href='itens/dar_item.php?dest=$dest'>Selecionar</a>";
                        echo "</div>";
                    }

                    $id = $_SESSION['personagem2'];
                    $personagem2 = $repositorio->MostrarPersonagem($id);
                    foreach ($personagem2 as $key) {
                        $dest = $key['nome'];
                        echo "<div style='border: solid 2px black'>";
                            echo "Nome: ".$key['nome'];
                            echo "<a href='itens/dar_item.php?dest=$dest'>Selecionar</a>";
                        echo "</div>";
                    }

                    $id = $_SESSION['personagem4'];
                    $personagem4 = $repositorio->MostrarPersonagem($id);
                    foreach ($personagem4 as $key) {
                        $dest = $key['nome'];
                        echo "<div style='border: solid 2px black'>";
                            echo "Nome: ".$key['nome'];
                            echo "<a href='itens/dar_item.php?dest=$dest'>Selecionar</a>";
                        echo "</div>";
                    }
                } else if($_SESSION['turno'] == $_SESSION['personagem4']){
                    $id = $_SESSION['personagem1'];
                    $personagem1 = $repositorio->MostrarPersonagem($id);
                    foreach ($personagem1 as $key) {
                        $dest = $key['nome'];
                        echo "<div style='border: solid 2px black'>";
                            echo "Nome: ".$key['nome'];
                            echo "<a href='itens/dar_item.php?dest=$dest'>Selecionar</a>";
                        echo "</div>";
                    }

                    $id = $_SESSION['personagem2'];
                    $personagem2 = $repositorio->MostrarPersonagem($id);
                    foreach ($personagem2 as $key) {
                        $dest = $key['nome'];
                        echo "<div style='border: solid 2px black'>";
                            echo "Nome: ".$key['nome'];
                            echo "<a href='itens/dar_item.php?dest=$dest'>Selecionar</a>";
                        echo "</div>";
                    }

                    $id = $_SESSION['personagem3'];
                    $personagem3 = $repositorio->MostrarPersonagem($id);
                    foreach ($personagem3 as $key) {
                        $dest = $key['nome'];
                        echo "<div style='border: solid 2px black'>";
                            echo "Nome: ".$key['nome'];
                            echo "<a href='itens/dar_item.php?dest=$dest'>Selecionar</a>";
                        echo "</div>";
                    }
                }
            }

            
            // Defender contra Monstro
            if($_SESSION['turno'] == "monstros"){

                echo "<h2>Número de inimigos para defender: ".$_SESSION['monstros_defender']."</h2>";
                echo "<br>";

                echo "<div>";
                
                    $id = $_SESSION['turno1'];
                    $personagem = $repositorio->MostrarPersonagem($id);
                    foreach ($personagem as $key) {
                        $img = $key['img'];
                    }
                    echo "<div style='border:solid 2px black;float:left'>";
                        echo "<img src='../../$img' style='height:260px;width:220px'>";
                        if($_SESSION['monstros_defender'] != 0){
                            if(isset($_SESSION['defesa'])){
                                if(isset($_SESSION['defensor']) && $_SESSION['defensor'] == $id){
                                    if(isset($_SESSION['vida_perdida'])){
                                        if(isset($_SESSION['efeito_bonus'])){
                                            $msg = "(Dano adicional devido a efeitos causados pelo inimigo!)";
                                        } else {
                                            $msg = "";
                                        }
                                        echo "<h2 style='color: red'>Defesa Mal-Sucedida</h2>";
                                        echo "<h2>Defesa: ".$_SESSION['defesa_total']."</h2>";
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
                                echo "<h2 style='color: red'>Defesa Mal-Sucedida</h2>";
                                echo "<h2>Defesa: ".$_SESSION['defesa_total']."</h2>";
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
                    echo "<div style='border:solid 2px black;float:left'>";
                        echo "<img src='../../$img' style='height:260px;width:220px'>";
                        if($_SESSION['monstros_defender'] != 0){
                            if(isset($_SESSION['defesa'])){
                                if(isset($_SESSION['defensor']) && $_SESSION['defensor'] == $id){
                                    if(isset($_SESSION['vida_perdida'])){
                                        if(isset($_SESSION['efeito_bonus'])){
                                            $msg = "(Dano adicional devido a efeitos causados pelo inimigo!)";
                                        } else {
                                            $msg = "";
                                        }
                                        echo "<h2 style='color: red'>Defesa Mal-Sucedida</h2>";
                                        echo "<h2>Defesa: ".$_SESSION['defesa_total']."</h2>";
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
                                echo "<h2 style='color: red'>Defesa Mal-Sucedida</h2>";
                                echo "<h2>Defesa: ".$_SESSION['defesa_total']."</h2>";
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
                    echo "<div style='border:solid 2px black;float:left'>";
                        echo "<img src='../../$img' style='height:260px;width:220px'>";
                        if($_SESSION['monstros_defender'] != 0){
                            if(isset($_SESSION['defesa'])){
                                if(isset($_SESSION['defensor']) && $_SESSION['defensor'] == $id){
                                    if(isset($_SESSION['vida_perdida'])){
                                        if(isset($_SESSION['efeito_bonus'])){
                                            $msg = "(Dano adicional devido a efeitos causados pelo inimigo!)";
                                        } else {
                                            $msg = "";
                                        }
                                        echo "<h2 style='color: red'>Defesa Mal-Sucedida</h2>";
                                        echo "<h2>Defesa: ".$_SESSION['defesa_total']."</h2>";
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
                                echo "<h2 style='color: red'>Defesa Mal-Sucedida</h2>";
                                echo "<h2>Defesa: ".$_SESSION['defesa_total']."</h2>";
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
                    echo "<div style='border:solid 2px black;float:left'>";
                        echo "<img src='../../$img' style='height:260px;width:220px'>";
                        if($_SESSION['monstros_defender'] != 0){
                            if(isset($_SESSION['defesa'])){
                                if(isset($_SESSION['defensor']) && $_SESSION['defensor'] == $id){
                                    if(isset($_SESSION['vida_perdida'])){
                                        if(isset($_SESSION['efeito_bonus'])){
                                            $msg = "(Dano adicional devido a efeitos causados pelo inimigo!)";
                                        } else {
                                            $msg = "";
                                        }
                                        echo "<h2 style='color: red'>Defesa Mal-Sucedida</h2>";
                                        echo "<h2>Defesa: ".$_SESSION['defesa_total']."</h2>";
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
                                echo "<h2 style='color: red'>Defesa Mal-Sucedida</h2>";
                                echo "<h2>Defesa: ".$_SESSION['defesa_total']."</h2>";
                                echo "<h2>Vida Perdida: ".$_SESSION['vida_perdida']." ".$msg."</h2>";
                            } else if($_SESSION['defensor'] == $id) {
                                echo "<h2 style='color:green'>Defesa Bem-Sucedida</h2>";
                                echo "<h2>Defesa: ".$_SESSION['defesa_total']."</h2>";
                                echo "<h2>Dado: ".$_SESSION['dado']." - Bônus: ".$_SESSION['bonus']."</h2>";
                            }
                        }
                    echo "</div>";
           
                echo "</div>";

                if($_SESSION['monstros_defender'] == 0){
                    echo "<br>";
                    echo "<br>";
                    echo "<h2><a href='passar_turno.php?id=monstros'>Concluir Turno</a></h2>";
                }
                

            } else {
                // escolher ação contra o monstro
                if(isset($_SESSION['monstro'])){
                    $x = $_SESSION['turno'];
                    if($_SESSION['quantidade_monstro'] > 0){
                        if(isset($_SESSION['opcao_magia'])){
                            $b = "magia";
                            $c = "arma";
                            echo "<h2><a href='atacar.php?tipo=$c'>Atacar(Arma)</a></h2>";
                            echo "<h2><a href='atacar.php?tipo=$b'>Atacar(Magia)</a></h2>";
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
                                        echo "<div style='border: solid 2px red;float:right'>";
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
                                        echo "<div style='border: solid 2px red;float:right'>";
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
                                        echo "<div style='border: solid 2px red;float:right'>";
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
                                        echo "<div style='border: solid 2px red;float:right'>";
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
                                        echo "<div style='border: solid 2px red;float:right'>";
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
                                        echo "<div style='border: solid 2px red;float:right'>";
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
                                        echo "<div style='border: solid 2px red;float:right'>";
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
                                echo "<h2><a href='atacar.php?id=$x'>Atacar</a></h2>";
                                echo "<h2><a href='#'>Fugir</a></h2>";
                            }
                        }
                        
                    } else {

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
                        echo "<h2><a href='passar_turno.php?id=$x'>Concluir Turno</a></h2>"; 

                        
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
                                echo " <a href='itens/dar_item.php?item=$item'>   Dar Item</a>";
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
                                echo " <a href='itens/dar_item.php?item=$item'>   Dar Item</a>";
                            echo "</li>";
                        echo "</ul>";
                    }
                }
            } 
            if(isset($_SESSION['nome_monstro'])){
                
            } else {
                echo "<h2><a href='monstros/sortear_verme.php'>Encontrar Monstro</a></h2>";
            }
        ?>
        </div>
    </div>
    <div class="inventario">
        <ul>
            <?php
            echo "<h1>Inventário</h1>";
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
                    echo "<h2>Itens Equipados:</h2>";
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
                    echo "<h2>Itens Equipados:</h2>";
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
    <div class="mapa">
        <p>mapas</p>
    </div>
    <div class="personagens">
        <div class="p1">
            <?php
            $turno = $_SESSION['turno'];
                echo "<div style='border: solid 2px black;float:left'>";
                    if($turno == $_SESSION['personagem1']){
                        echo "<img src='../../$img_personagem1' style='float:left'>";
                    }
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
                    if($turno == $_SESSION['personagem2']){
                        echo "<img src='../../$img_personagem2' style='float:left'>";
                    }
                    
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
                    if($turno == $_SESSION['personagem3']){
                        echo "<img src='../../$img_personagem3' style='float:left'>";
                    }
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
                    if($turno == $_SESSION['personagem4']){
                        echo "<img src='../../$img_personagem4' style='float:left'>";
                    }
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