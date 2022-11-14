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
</head>
<body>
    <?php
        echo "<h3><a href='limpa_ordem.php?id=1'>Voltar para Sala de Preparação</a></h3>";
    ?>
    <h1>Definir Ordem de marcha</h1>
        <?php
            $id = $_SESSION['personagem1'];
            $personagem1 = $repositorio->MostrarPersonagem($id);
            foreach ($personagem1 as $key) {
                echo "<div style='border: solid 2px black'>";
                    echo "Nome: ".$key['nome'];
                    echo "<br>";
                    echo "Classe: ".$key['classe'];
                    echo "<br>";
                    echo "Nível: ".$key['nivel'];
                    echo "<br>";
                    echo "Vida: ".$key['vida'];
                    echo "<br>";
                    if($_SESSION['armadura_personagem1'] == "N"){
                        echo "Armadura: Não possui nenhuma armadura";
                    } else {
                        echo "Armadura: ".$_SESSION['armadura_personagem1'];
                    }
                    echo "<br>";
                    echo "Item Equipado: ".$_SESSION['arma1_personagem1'];
                    echo "<br>";
                    if(isset($_SESSION['arma2_personagem1']) && $_SESSION['arma1_personagem1'] != $_SESSION['arma2_personagem1']){
                        echo "Item Equipado: ".$_SESSION['arma2_personagem1'];
                        echo "<br>";
                    }
                if(isset($_SESSION['turno1'])){
                    if($_SESSION['turno1'] == $_SESSION['personagem1']){
                        echo "<h3>1º</h3>";
                    } else {
                        if(isset($_SESSION['turno2'])){
                            if($_SESSION['turno2'] == $_SESSION['personagem1']){
                                echo "<h3>2º</h3>";
                            } else {
                                if(isset($_SESSION['turno3'])){
                                    if($_SESSION['turno3'] == $_SESSION['personagem1']){
                                        echo "<h3>3º</h3>";
                                    } else {
                                        if(isset($_SESSION['turno4'])){
                                            if($_SESSION['turno4'] == $_SESSION['personagem1']){
                                                echo "<h3>4º</h3>";
                                            }
                                        } else {
                                            echo "<a href='setar_ordem.php?id=$id'>4º na Ordem de Marcha</a>";
                                        }
                                    }
                                } else {
                                    echo "<a href='setar_ordem.php?id=$id'>3º na Ordem de Marcha</a>";
                                }
                            }
                        } else {
                            echo "<a href='setar_ordem.php?id=$id'>2º na Ordem de Marcha</a>";
                        }
                    }
                } else {
                    echo "<a href='setar_ordem.php?id=$id'>1º na Ordem de Marcha</a>";
                }
                echo "</div>";
            }

            $id = $_SESSION['personagem2'];
            $personagem2 = $repositorio->MostrarPersonagem($id);
            foreach ($personagem2 as $key) {
                echo "<div style='border: solid 2px black'>";
                    echo "Nome: ".$key['nome'];
                    echo "<br>";
                    echo "Classe: ".$key['classe'];
                    echo "<br>";
                    echo "Nível: ".$key['nivel'];
                    echo "<br>";
                    echo "Vida: ".$key['vida'];
                    echo "<br>";
                    if($_SESSION['armadura_personagem2'] == "N"){
                        echo "Armadura: Não possui nenhuma armadura";
                    } else {
                        echo "Armadura: ".$_SESSION['armadura_personagem2'];
                    }
                    echo "<br>";
                    echo "Item Equipado: ".$_SESSION['arma1_personagem2'];
                    echo "<br>";
                    if(isset($_SESSION['arma2_personagem2']) && $_SESSION['arma1_personagem2'] != $_SESSION['arma2_personagem2']){
                        echo "Item Equipado: ".$_SESSION['arma2_personagem2'];
                        echo "<br>";
                    }
                if(isset($_SESSION['turno1'])){
                    if($_SESSION['turno1'] == $_SESSION['personagem2']){
                        echo "<h3>1º</h3>";
                    } else {
                        if(isset($_SESSION['turno2'])){
                            if($_SESSION['turno2'] == $_SESSION['personagem2']){
                                echo "<h3>2º</h3>";
                            } else {
                                if(isset($_SESSION['turno3'])){
                                    if($_SESSION['turno3'] == $_SESSION['personagem2']){
                                        echo "<h3>3º</h3>";
                                    } else {
                                        if(isset($_SESSION['turno4'])){
                                            if($_SESSION['turno4'] == $_SESSION['personagem2']){
                                                echo "<h3>4º</h3>";
                                            }
                                        } else {
                                            echo "<a href='setar_ordem.php?id=$id'>4º na Ordem de Marcha</a>";
                                        }
                                    }
                                } else {
                                    echo "<a href='setar_ordem.php?id=$id'>3º na Ordem de Marcha</a>";
                                }
                            }
                        } else {
                            echo "<a href='setar_ordem.php?id=$id'>2º na Ordem de Marcha</a>";
                        }
                    }
                } else {
                    echo "<a href='setar_ordem.php?id=$id'>1º na Ordem de Marcha</a>";
                }
                echo "</div>";
            }

            $id = $_SESSION['personagem3'];
            $personagem3 = $repositorio->MostrarPersonagem($id);
            foreach ($personagem3 as $key) {
                echo "<div style='border: solid 2px black'>";
                    echo "Nome: ".$key['nome'];
                    echo "<br>";
                    echo "Classe: ".$key['classe'];
                    echo "<br>";
                    echo "Nível: ".$key['nivel'];
                    echo "<br>";
                    echo "Vida: ".$key['vida'];
                    echo "<br>";
                    if($_SESSION['armadura_personagem3'] == "N"){
                        echo "Armadura: Não possui nenhuma armadura";
                    } else {
                        echo "Armadura: ".$_SESSION['armadura_personagem3'];
                    }
                    echo "<br>";
                    echo "Item Equipado: ".$_SESSION['arma1_personagem3'];
                    echo "<br>";
                    if(isset($_SESSION['arma2_personagem3']) && $_SESSION['arma1_personagem3'] != $_SESSION['arma2_personagem3']){
                        echo "Item Equipado: ".$_SESSION['arma2_personagem3'];
                        echo "<br>";
                    }
                if(isset($_SESSION['turno1'])){
                    if($_SESSION['turno1'] == $_SESSION['personagem3']){
                        echo "<h3>1º</h3>";
                    } else {
                        if(isset($_SESSION['turno2'])){
                            if($_SESSION['turno2'] == $_SESSION['personagem3']){
                                echo "<h3>2º</h3>";
                            } else {
                                if(isset($_SESSION['turno3'])){
                                    if($_SESSION['turno3'] == $_SESSION['personagem3']){
                                        echo "<h3>3º</h3>";
                                    } else {
                                        if(isset($_SESSION['turno4'])){
                                            if($_SESSION['turno4'] == $_SESSION['personagem3']){
                                                echo "<h3>4º</h3>";
                                            }
                                        } else {
                                            echo "<a href='setar_ordem.php?id=$id'>4º na Ordem de Marcha</a>";
                                        }
                                    }
                                } else {
                                    echo "<a href='setar_ordem.php?id=$id'>3º na Ordem de Marcha</a>";
                                }
                            }
                        } else {
                            echo "<a href='setar_ordem.php?id=$id'>2º na Ordem de Marcha</a>";
                        }
                    }
                } else {
                    echo "<a href='setar_ordem.php?id=$id'>1º na Ordem de Marcha</a>";
                }
                echo "</div>";
            }

            $id = $_SESSION['personagem4'];
            $personagem4 = $repositorio->MostrarPersonagem($id);
            foreach ($personagem4 as $key) {
                echo "<div style='border: solid 2px black'>";
                    echo "Nome: ".$key['nome'];
                    echo "<br>";
                    echo "Classe: ".$key['classe'];
                    echo "<br>";
                    echo "Nível: ".$key['nivel'];
                    echo "<br>";
                    echo "Vida: ".$key['vida'];
                    echo "<br>";
                    if($_SESSION['armadura_personagem4'] == "N"){
                        echo "Armadura: Não possui nenhuma armadura";
                    } else {
                        echo "Armadura: ".$_SESSION['armadura_personagem4'];
                    }
                    echo "<br>";
                    echo "Item Equipado: ".$_SESSION['arma1_personagem4'];
                    echo "<br>";
                    if(isset($_SESSION['arma2_personagem4']) && $_SESSION['arma1_personagem4'] != $_SESSION['arma2_personagem4']){
                        echo "Item Equipado: ".$_SESSION['arma2_personagem4'];
                        echo "<br>";
                    }
                if(isset($_SESSION['turno1'])){
                    if($_SESSION['turno1'] == $_SESSION['personagem4']){
                        echo "<h3>1º</h3>";
                    } else {
                        if(isset($_SESSION['turno2'])){
                            if($_SESSION['turno2'] == $_SESSION['personagem4']){
                                echo "<h3>2º</h3>";
                            } else {
                                if(isset($_SESSION['turno3'])){
                                    if($_SESSION['turno3'] == $_SESSION['personagem4']){
                                        echo "<h3>3º</h3>";
                                    } else {
                                        if(isset($_SESSION['turno4'])){
                                            if($_SESSION['turno4'] == $_SESSION['personagem4']){
                                                echo "<h3>4º</h3>";
                                            }
                                        } else {
                                            echo "<a href='setar_ordem.php?id=$id'>4º na Ordem de Marcha</a>";
                                        }
                                    }
                                } else {
                                    echo "<a href='setar_ordem.php?id=$id'>3º na Ordem de Marcha</a>";
                                }
                            }
                        } else {
                            echo "<a href='setar_ordem.php?id=$id'>2º na Ordem de Marcha</a>";
                        }
                    }
                } else {
                    echo "<a href='setar_ordem.php?id=$id'>1º na Ordem de Marcha</a>";
                }
                echo "</div>";
            }

            if(isset($_SESSION['turno1']) && isset($_SESSION['turno2']) && isset($_SESSION['turno3']) && isset($_SESSION['turno4'])){
                echo "<h2><a href='limpa_ordem.php'>Alterar Toda Ordem</a></h2>";
                echo "<h2><a href='../tabletop.php'>COMEÇAR!!!</a></h2>";
            }
        ?>
</body>
</html>