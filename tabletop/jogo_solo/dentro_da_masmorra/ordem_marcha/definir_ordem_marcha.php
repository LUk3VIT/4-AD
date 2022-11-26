<?php

session_start();
require_once '../../../classes/repositorioTabletop.php'; 
$repositorio = new RepositorioTabletopMySQL();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordem de Marcha</title>
    <link rel="stylesheet" href="../../../../assets/style/reset.css">
    <link rel="stylesheet" href="../../../../assets/style/tabletopJogo.css">
</head>
<body>
    <?php
        echo "<h2 class='rykelmy__trocar'><a class='rykelmy__entrar' href='limpa_ordem.php?id=1'>Voltar para Sala de Preparação</a></h2>";
    ?>
    <h1 class='selecao__prepa'>Definir Ordem de marcha</h1>
    <div class="ordem__marcha">
        <?php
            $id = $_SESSION['personagem1'];
            $personagem1 = $repositorio->MostrarPersonagem($id);
            foreach ($personagem1 as $key) {
                echo "<div class='mostrar__pers__trocas'>";
                    echo "<h2>Nome: ".$key['nome']."</h2>";
                    echo "<br>";
                    echo "<h2>Classe: ".$key['classe']."</h2>";
                    echo "<br>";
                    echo "<h2>Nível: ".$key['nivel']."</h2>";
                    echo "<br>";
                    echo "<h2>Vida: ".$key['vida']."</h2>";
                    echo "<br>";
                    if($_SESSION['armadura_personagem1'] == "N"){
                        echo "<h3>Armadura: Não possui nenhuma armadura</h3>";
                    } else {
                        echo "<h3>Armadura: ".$_SESSION['armadura_personagem1']."</h3>";
                    }
                    echo "<br>";
                    echo "<h3>Item Equipado: ".$_SESSION['arma1_personagem1']."</h3>";
                    echo "<br>";
                    if(isset($_SESSION['arma2_personagem1']) && $_SESSION['arma1_personagem1'] != $_SESSION['arma2_personagem1']){
                        echo "<h3>Item Equipado: ".$_SESSION['arma2_personagem1']."</h3>";
                        echo "<br>";
                    }
                if(isset($_SESSION['turno1'])){
                    if($_SESSION['turno1'] == $_SESSION['personagem1']){
                        echo "<h3 class='ordem'>1º</h3>";
                    } else {
                        if(isset($_SESSION['turno2'])){
                            if($_SESSION['turno2'] == $_SESSION['personagem1']){
                                echo "<h3 class='ordem'>2º</h3>";
                            } else {
                                if(isset($_SESSION['turno3'])){
                                    if($_SESSION['turno3'] == $_SESSION['personagem1']){
                                        echo "<h3 class='ordem'>3º</h3>";
                                    } else {
                                        if(isset($_SESSION['turno4'])){
                                            if($_SESSION['turno4'] == $_SESSION['personagem1']){
                                                echo "<h3 class='ordem'>4º</h3>";
                                            }
                                        } else {
                                            echo "<h3 class='botao__trocar__equip'><a class='a__trocar__equip' href='setar_ordem.php?id=$id'>4º na Ordem de Marcha</a></h3>";
                                        }
                                    }
                                } else {
                                    echo "<h3 class='botao__trocar__equip'><a class='a__trocar__equip' href='setar_ordem.php?id=$id'>3º na Ordem de Marcha</a></h3>";
                                }
                            }
                        } else {
                            echo "<h3 class='botao__trocar__equip'><a class='a__trocar__equip' href='setar_ordem.php?id=$id'>2º na Ordem de Marcha</a></h3>";
                        }
                    }
                } else {
                    echo "<h3 class='botao__trocar__equip'><a class='a__trocar__equip' href='setar_ordem.php?id=$id'>1º na Ordem de Marcha</a></h3>";
                }
                echo "</div>";
            }

            $id = $_SESSION['personagem2'];
            $personagem2 = $repositorio->MostrarPersonagem($id);
            foreach ($personagem2 as $key) {
                echo "<div class='mostrar__pers__trocas'>";
                    echo "<h2>Nome: ".$key['nome']."</h2>";
                    echo "<br>";
                    echo "<h2>Classe: ".$key['classe']."</h2>"."</h2>"."</h2>";
                    echo "<br>";
                    echo "<h2>Nível: ".$key['nivel']."</h2>"."</h2>"."</h2>";
                    echo "<br>";
                    echo "<h2>Vida: ".$key['vida']."</h2>"."</h2>"."</h2>";
                    echo "<br>";
                    if($_SESSION['armadura_personagem2'] == "N"){
                        echo "<h3>Armadura: Não possui nenhuma armadura</h3>";
                    } else {
                        echo "<h3>Armadura: ".$_SESSION['armadura_personagem2']."</h3>";
                    }
                    echo "<br>";
                    echo "<h3>Item Equipado: ".$_SESSION['arma1_personagem2']."</h3>";
                    echo "<br>";
                    if(isset($_SESSION['arma2_personagem2']) && $_SESSION['arma1_personagem2'] != $_SESSION['arma2_personagem2']){
                        echo "Item Equipado: ".$_SESSION['arma2_personagem2'];
                        echo "<br>";
                    }
                if(isset($_SESSION['turno1'])){
                    if($_SESSION['turno1'] == $_SESSION['personagem2']){
                        echo "<h3 class='ordem'>1º</h3>";
                    } else {
                        if(isset($_SESSION['turno2'])){
                            if($_SESSION['turno2'] == $_SESSION['personagem2']){
                                echo "<h3 class='ordem'>2º</h3>";
                            } else {
                                if(isset($_SESSION['turno3'])){
                                    if($_SESSION['turno3'] == $_SESSION['personagem2']){
                                        echo "<h3 class='ordem'>3º</h3>";
                                    } else {
                                        if(isset($_SESSION['turno4'])){
                                            if($_SESSION['turno4'] == $_SESSION['personagem2']){
                                                echo "<h3 class='ordem'>4º</h3>";
                                            }
                                        } else {
                                            echo "<h3 class='botao__trocar__equip'><a class='a__trocar__equip' class='a__trocar__equip' href='setar_ordem.php?id=$id'>4º na Ordem de Marcha</a></h3>";
                                        }
                                    }
                                } else {
                                    echo "<h3 class='botao__trocar__equip'><a class='a__trocar__equip' href='setar_ordem.php?id=$id'>3º na Ordem de Marcha</a></h3></h3>";
                                }
                            }
                        } else {
                            echo "<h3 class='botao__trocar__equip'><a class='a__trocar__equip' href='setar_ordem.php?id=$id'>2º na Ordem de Marcha</a></h3></h3>";
                        }
                    }
                } else {
                    echo "<h3 class='botao__trocar__equip'><a class='a__trocar__equip' href='setar_ordem.php?id=$id'>1º na Ordem de Marcha</a></h3></h3>";
                }
                echo "</div>";
            }

            $id = $_SESSION['personagem3'];
            $personagem3 = $repositorio->MostrarPersonagem($id);
            foreach ($personagem3 as $key) {
                echo "<div class='mostrar__pers__trocas'>";
                    echo "<h2>Nome: ".$key['nome']."</h2>"."</h2>";
                    echo "<br>";
                    echo "<h2>Classe: ".$key['classe']."</h2>"."</h2>";
                    echo "<br>";
                    echo "<h2>Nível: ".$key['nivel']."</h2>"."</h2>";
                    echo "<br>";
                    echo "<h2>Vida: ".$key['vida']."</h2>"."</h2>";
                    echo "<br>";
                    if($_SESSION['armadura_personagem3'] == "N"){
                        echo "<h3>Armadura: Não possui nenhuma armadura</h3>";
                    } else {
                        echo "<h3>Armadura: ".$_SESSION['armadura_personagem3']."</h3>";
                    }
                    echo "<br>";
                    echo "<h3>Item Equipado: ".$_SESSION['arma1_personagem3']."</h3>";
                    echo "<br>";
                    if(isset($_SESSION['arma2_personagem3']) && $_SESSION['arma1_personagem3'] != $_SESSION['arma2_personagem3']){
                        echo "Item Equipado: ".$_SESSION['arma2_personagem3'];
                        echo "<br>";
                    }
                if(isset($_SESSION['turno1'])){
                    if($_SESSION['turno1'] == $_SESSION['personagem3']){
                        echo "<h3 class='ordem' >1º</h3>";
                    } else {
                        if(isset($_SESSION['turno2'])){
                            if($_SESSION['turno2'] == $_SESSION['personagem3']){
                                echo "<h3 class='ordem' >2º</h3>";
                            } else {
                                if(isset($_SESSION['turno3'])){
                                    if($_SESSION['turno3'] == $_SESSION['personagem3']){
                                        echo "<h3 class='ordem' >3º</h3>";
                                    } else {
                                        if(isset($_SESSION['turno4'])){
                                            if($_SESSION['turno4'] == $_SESSION['personagem3']){
                                                echo "<h3 class='ordem' >4º</h3>";
                                            }
                                        } else {
                                            echo "<h3 class='botao__trocar__equip'><a class='a__trocar__equip' href='setar_ordem.php?id=$id'>4º na Ordem de Marcha</a></h3>";
                                        }
                                    }
                                } else {
                                    echo "<h3 class='botao__trocar__equip'><a class='a__trocar__equip' href='setar_ordem.php?id=$id'>3º na Ordem de Marcha</a></h3>";
                                }
                            }
                        } else {
                            echo "<h3 class='botao__trocar__equip'><a class='a__trocar__equip' href='setar_ordem.php?id=$id'>2º na Ordem de Marcha</a></h3>";
                        }
                    }
                } else {
                    echo "<h3 class='botao__trocar__equip'><a  class='a__trocar__equip' href='setar_ordem.php?id=$id'>1º na Ordem de Marcha</a></h3>";
                }
                echo "</div>";
            }

            $id = $_SESSION['personagem4'];
            $personagem4 = $repositorio->MostrarPersonagem($id);
            foreach ($personagem4 as $key) {
                echo "<div class='mostrar__pers__trocas'>"."</h2>";
                    echo "<h2>Nome: ".$key['nome'];
                    echo "<br>";
                    echo "<h2>Classe: ".$key['classe']."</h2>";
                    echo "<br>";
                    echo "<h2>Nível: ".$key['nivel']."</h2>";
                    echo "<br>";
                    echo "<h2>Vida: ".$key['vida']."</h2>";
                    echo "<br>";
                    if($_SESSION['armadura_personagem4'] == "N"){
                        echo "<h3>Armadura: Não possui nenhuma armadura</h3>";
                    } else {
                        echo "<h3>Armadura: ".$_SESSION['armadura_personagem4']."</h3>";
                    }
                    echo "<br>";
                    echo "<h3>Item Equipado: ".$_SESSION['arma1_personagem4']."</h3>";
                    echo "<br>";
                    if(isset($_SESSION['arma2_personagem4']) && $_SESSION['arma1_personagem4'] != $_SESSION['arma2_personagem4']){
                        echo "Item Equipado: ".$_SESSION['arma2_personagem4'];
                        echo "<br>";
                    }
                if(isset($_SESSION['turno1'])){
                    if($_SESSION['turno1'] == $_SESSION['personagem4']){
                        echo "<h3 class='ordem'>1º</h3>";
                    } else {
                        if(isset($_SESSION['turno2'])){
                            if($_SESSION['turno2'] == $_SESSION['personagem4']){
                                echo "<h3 class='ordem'>2º</h3>";
                            } else {
                                if(isset($_SESSION['turno3'])){
                                    if($_SESSION['turno3'] == $_SESSION['personagem4']){
                                        echo "<h3 class='ordem'>3º</h3>";
                                    } else {
                                        if(isset($_SESSION['turno4'])){
                                            if($_SESSION['turno4'] == $_SESSION['personagem4']){
                                                echo "<h3  class='ordem' >4º</h3>";
                                            }
                                        } else {
                                            echo "<h3 class='botao__trocar__equip'><a class='a__trocar__equip' href='setar_ordem.php?id=$id'>4º na Ordem de Marcha</a></h3>";
                                        }
                                    }
                                } else {
                                    echo "<h3 class='botao__trocar__equip'><a class='a__trocar__equip' href='setar_ordem.php?id=$id'>3º na Ordem de Marcha</a></h3>";
                                }
                            }
                        } else {
                            echo "<h3 class='botao__trocar__equip'><a class='a__trocar__equip' href='setar_ordem.php?id=$id'>2º na Ordem de Marcha</a></h3>";
                        }
                    }
                } else {
                    echo "<h3 class='botao__trocar__equip'><a class='a__trocar__equip' href='setar_ordem.php?id=$id'>1º na Ordem de Marcha</a></h3>";
                }
                echo "</div>";
            }
        ?>
        </div>

        <?php    
            if(isset($_SESSION['turno1']) && isset($_SESSION['turno2']) && isset($_SESSION['turno3']) && isset($_SESSION['turno4'])){
                echo "<div class='comecaaaa'>";
                echo "<h2><a class='rykelmy__loja' href='limpa_ordem.php'>Alterar Toda Ordem</a></h2>";
                echo "<h2><a class='rykelmy__loja' class='' href='../tabletop.php'>COMEÇAR!!!</a></h2>";
                echo "</div>";
            }
        ?>
</body>
</html>