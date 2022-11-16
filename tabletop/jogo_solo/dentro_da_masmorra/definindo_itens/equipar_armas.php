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
    <title>Equipar Itens</title>
</head>
<body>
    <h2><a href='../../index_jogo_solo.php'>Voltar à sala de preparação</a></h2>
    <?php

        echo "<table>";
            echo "<tr>";
                // limpando varáveis
                unset($armadura_malha);
                unset($armadura_aco);
                unset($espada_curta);
                unset($mangual);
                unset($escudo);
                unset($espada_curta_escudo);
                unset($mangual_escudo);
                unset($tonfa);
                unset($adaga);
                unset($espada_montante);
                unset($martelo_guerra);
                unset($arco);
                unset($funda);
                unset($livro_feiticos);
                unset($lanterna);
                $id_personagem1 = $id = $_SESSION['personagem1'];
                $personagem = $repositorio->MostrarPersonagem($id);
                foreach ($personagem as $key) {
                    $nome = $key['nome'];
                    echo "<td style='border: solid 2px black'>";
                        $img = $key['img'];
                        echo "<img src='../../../$img'>";
                        echo "<h2>Nome: ".$key['nome'];
                        echo " - Classe: ".$key['classe']."</h2>";
                        echo "<h3>Equipamentos:</h3>";
                        echo "<ul>";
                    $inventario = $repositorio->MostrarInventario($nome);
                    foreach ($inventario as $item) {
                        // armaduras
                        if(in_array("armadura de malha",$item)){
                            $armadura_malha = true;
                            if(in_array("armadura de aço",$item)){
                                $armadura_aco = true;
                            }
                        } else if(in_array("armadura de aço",$item)){
                            $armadura_aco = true;
                        }

                        if(isset($armadura_malha) && isset($armadura_aco)){
                            if(isset($_SESSION['armadura_personagem1'])){
                                echo "<li>".$_SESSION['armadura_personagem1']."</li>";
                            } else {
                                echo "<h2>Escolher para utilizar:</h2>";
                                echo "<form action='selec_eq.php' method='POST'>";
                                    echo "<select name='armadura' id='armadura'>";
                                        echo "<option value='armadura de malha'>Armadura de Malha</option>";
                                        echo "<option value='armadura de aço'>Armadura de Aço</option>";
                                    echo "</select>";
                                    echo "<input type='text' name='id1' value='$id_personagem1' hidden>";
                                    echo "<input type='submit' value='Equipar'>";
                                    echo "<br>";
                                echo "<form>";
                            }
                        } else if(isset($armadura_malha)){
                            $_SESSION['armadura_personagem1'] = "armadura de malha";
                            echo "<li>".$_SESSION['armadura_personagem1']."</li>";
                            echo "<br>";
                        } else if(isset($armadura_aco)){
                            $_SESSION['armadura_personagem1'] = "armadura de aço";
                            echo "<li>".$_SESSION['armadura_personagem1']."</li>";
                            echo "<br>";
                        } else {
                            $_SESSION['armadura_personagem1'] = "N";
                            echo "<li>Esse personagem não possui nenhuma armadura</li>";
                            echo "<br>";
                        }

                        // armas
                        if(in_array("espada curta",$item)){
                            $espada_curta = true;
                        } 
                        if(in_array("mangual",$item)){
                            $mangual = true;
                        } 
                        if(in_array("escudo",$item)){
                            $escudo = true;
                        }
                        if(in_array("espada curta e escudo",$item)){
                            $espada_curta_escudo = true;
                        }
                        if(in_array("mangual e escudo",$item)){
                            $mangual_escudo = true;
                        }
                        if(in_array("adaga",$item)){
                            $adaga = true;
                        }  
                        if(in_array("tonfa",$item)){
                            $tonfa = true;
                        }  
                        if(in_array("espada montante",$item)){
                            $espada_montante = true;
                        } 
                        if(in_array("martelo de guerra",$item)){
                            $martelo_guerra = true;
                        } 
                        if(in_array("arco",$item)){
                            $arco = true;
                        } 
                        if(in_array("funda",$item)){
                            $funda = true;
                        } 
                        if(in_array("livro de feitiços",$item)){
                            $livro_feiticos = true;
                        }
                        if(in_array("lanterna",$item)){
                            $lanterna = true;
                        }

                        if(isset($espada_curta_escudo)){
                            if(isset($_SESSION['arma1_personagem1']) ){
                                echo "<li>".$_SESSION['arma1_personagem1']."</li>";
                                if(isset($_SESSION['arma2_personagem1']) && $_SESSION['arma1_personagem1'] != $_SESSION['arma2_personagem1']){
                                    echo "<li>".$_SESSION['arma2_personagem1']."</li>";
                                }
                                echo "<h3><a href='trocar_itens.php?id=$id'>Trocar</a></h3>";
                            } else {
                                if(isset($mangual_escudo) || isset($mangual) || isset($adaga) || isset($tonfa) || isset($espada_montante) || isset($martelo_guerra) || isset($arco) || isset($funda) || isset($lanterna)){
                                    echo "<form action='selec_eq.php' method='POST'>";

                                    if(isset($mangual_escudo) || isset($espada_montante) || isset($martelo_guerra) || isset($arco)){
                                        echo "<h3>Armas de Duas Mãos (Selecione apenas um)</h3>";
                                    
                                        echo "<label for='espada_curta_escudo'>Espada Curta e Escudo</label>";
                                        echo "<input type='checkbox' id='espada_curta_escudo' name='espada_curta_escudo'>";
                                        echo "<br>";

                                        if(isset($mangual_escudo)){
                                            echo "<label for='mangual_escudo'>Mangual e Escudo</label>";
                                            echo "<input type='checkbox' id='mangual_escudo' name='mangual_escudo'>";
                                            echo "<br>";
                                        }
                                        if(isset($espada_montante)){
                                            echo "<label for='espada_montante'>Espada Montante</label>";
                                            echo "<input type='checkbox' id='espada_montante' name='espada_montante'>";
                                            echo "<br>";
                                        }
                                        if(isset($martelo_guerra)){
                                            echo "<label for='martelo_guerra'>Martelo de Guerra</label>";
                                            echo "<input type='checkbox' id='martelo_guerra' name='martelo_guerra'>";
                                            echo "<br>";
                                        }
                                        if(isset($arco)){
                                            echo "<label for='arco'>Arco</label>";
                                            echo "<input type='checkbox' id='arco' name='arco'>";
                                            echo "<br>";
                                        }
                                    }

                                    if(isset($mangual) || isset($adaga) || isset($tonfa) || isset($funda)){
                                        echo "<h3>Armas de Uma Mão(Caso não tenha selecionado nenhuma arma de duas mãos, Selecione duas das opções abaixo.)</h3>";
                                        echo "<label for='espada_curta'>Espada Curta</label>";
                                        echo "<input type='checkbox' id='espada_curta' name='espada_curta'>";
                                        echo "<br>";
                                        echo "<label for='escudo'>Escudo</label>";
                                        echo "<input type='checkbox' id='escudo' name='escudo'>";
                                        echo "<br>";

                                        if(isset($mangual)){
                                            echo "<label for='mangual'>Mangual</label>";
                                            echo "<input type='checkbox' id='mangual' name='mangual'>";
                                            echo "<br>";
                                        }
                                        if(isset($adaga)){
                                            echo "<label for='adaga'>Adaga</label>";
                                            echo "<input type='checkbox' id='adaga' name='adaga'>";
                                            echo "<br>";
                                        }
                                        if(isset($tonfa)){
                                            echo "<label for='tonfa'>Tonfa</label>";
                                            echo "<input type='checkbox' id='tonfa' name='tonfa'>";
                                            echo "<br>";
                                        }
                                        if(isset($funda)){
                                            echo "<label for='funda'>Funda</label>";
                                            echo "<input type='checkbox' id='funda' name='funda'>";
                                            echo "<br>";
                                        }
                                        if(isset($lanterna)){
                                            echo "<label for='lanterna'>Lanterna</label>";
                                            echo "<input type='checkbox' id='lanterna' name='lanterna'>";
                                            echo "<br>";
                                        }
                                    }

                                    echo "<input type='text' name='id1' value='$id_personagem1' hidden>";
                                    echo "<input type='submit' value='Equipar'>";
                                    echo "</form>";
                                } else {
                                    $_SESSION['arma1_personagem1'] = "Espada Curta";
                                    $_SESSION['arma2_personagem1'] = "Escudo";
                                    echo "<li>".$_SESSION['arma1_personagem1']."</li>";
                                    echo "<li>".$_SESSION['arma2_personagem1']."</li>";
                                    echo "<h3><a href='trocar_itens.php?id=$id'>Trocar</a></h3>";
                                }
                            }
                        } else if(isset($mangual_escudo)){
                            if(isset($_SESSION['arma1_personagem1']) ){
                                echo "<li>".$_SESSION['arma1_personagem1']."</li>";
                                if(isset($_SESSION['arma2_personagem1']) && $_SESSION['arma1_personagem1'] != $_SESSION['arma2_personagem1']){
                                    echo "<li>".$_SESSION['arma2_personagem1']."</li>";
                                }
                                echo "<h3><a href='trocar_itens.php?id=$id'>Trocar</a></h3>";
                            } else {
                                if(isset($espada_curta) || isset($adaga) || isset($tonfa) || isset($espada_montante) || isset($martelo_guerra) || isset($arco) || isset($funda) || isset($lanterna)){
                                    echo "<form action='selec_eq.php' method='POST'>";

                                    if(isset($espada_montante) || isset($martelo_guerra) || isset($arco)){
                                        echo "<h3>Armas de Duas Mãos (Selecione apenas um)</h3>";
                                        
                                        echo "<label for='mangual_escudo'>Mangual e Escudo</label>";
                                        echo "<input type='checkbox' id='mangual_escudo' name='mangual_escudo'>";
                                        echo "<br>";

                                        if(isset($espada_montante)){
                                            echo "<label for='espada_montante'>Espada Montante</label>";
                                            echo "<input type='checkbox' id='espada_montante' name='espada_montante'>";
                                            echo "<br>";
                                        }
                                        if(isset($martelo_guerra)){
                                            echo "<label for='martelo_guerra'>Martelo de Guerra</label>";
                                            echo "<input type='checkbox' id='martelo_guerra' name='martelo_guerra'>";
                                            echo "<br>";
                                        }
                                        if(isset($arco)){
                                            echo "<label for='arco'>Arco</label>";
                                            echo "<input type='checkbox' id='arco' name='arco'>";
                                            echo "<br>";
                                        }
                                    }
                                    

                                    if(isset($espada_curta) || isset($adaga) || isset($tonfa) || isset($funda) || isset($lanterna)){
                                        echo "<h3>Armas de Uma Mão(Caso não tenha selecionado nenhuma arma de duas mãos, Selecione duas das opções abaixo.)</h3>";
                                        echo "<label for='mangual'>Mangual</label>";
                                        echo "<input type='checkbox' id='mangual' name='mangual'>";
                                        echo "<br>";
                                        echo "<label for='escudo'>Escudo</label>";
                                        echo "<input type='checkbox' id='escudo' name='escudo'>";
                                        echo "<br>";

                                        if(isset($espada_curta)){
                                            echo "<label for='espada_curta'>Espada Curta</label>";
                                            echo "<input type='checkbox' id='espada_curta' name='espada_curta'>";
                                            echo "<br>";
                                        }
                                        if(isset($adaga)){
                                            echo "<label for='adaga'>Adaga</label>";
                                            echo "<input type='checkbox' id='adaga' name='adaga'>";
                                            echo "<br>";
                                        }
                                        if(isset($tonfa)){
                                            echo "<label for='tonfa'>Tonfa</label>";
                                            echo "<input type='checkbox' id='tonfa' name='tonfa'>";
                                            echo "<br>";
                                        }
                                        if(isset($funda)){
                                            echo "<label for='funda'>Funda</label>";
                                            echo "<input type='checkbox' id='funda' name='funda'>";
                                            echo "<br>";
                                        }
                                        if(isset($lanterna)){
                                            echo "<label for='lanterna'>Lanterna</label>";
                                            echo "<input type='checkbox' id='lanterna' name='lanterna'>";
                                            echo "<br>";
                                        }
                                    }
                                    echo "<input type='text' name='id1' value='$id_personagem1' hidden>";
                                    echo "<input type='submit' value='Equipar'>";
                                    echo "</form>";
                                } else {
                                    $_SESSION['arma1_personagem1'] = "Mangual";
                                    $_SESSION['arma2_personagem1'] = "Escudo";
                                    echo "<li>".$_SESSION['arma1_personagem1']."</li>";
                                    echo "<li>".$_SESSION['arma2_personagem1']."</li>";
                                    echo "<h3><a href='trocar_itens.php?id=$id'>Trocar</a></h3>";
                                }
                            }
                        } else if(isset($espada_montante)){
                            if(isset($_SESSION['arma1_personagem1']) ){
                                echo "<li>".$_SESSION['arma1_personagem1']."</li>";
                                if(isset($_SESSION['arma2_personagem1']) && $_SESSION['arma1_personagem1'] != $_SESSION['arma2_personagem1']){
                                    echo "<li>".$_SESSION['arma2_personagem1']."</li>";
                                }
                                echo "<h3><a href='trocar_itens.php?id=$id'>Trocar</a></h3>";
                            } else {
                                if(isset($mangual) || isset($espada_curta) || isset($adaga) || isset($tonfa) || isset($martelo_guerra) || isset($arco) || isset($funda) || isset($lanterna)){
                                    echo "<form action='selec_eq.php' method='POST'>";

                                    echo "<br>";
                                    echo "<label for='espada_montante'>Espada Montante</label>";
                                    echo "<input type='checkbox' id='espada_montante' name='espada_montante'>";
                                    echo "<br>";
                                    
                                    if(isset($martelo_guerra) || isset($arco)){
                                        echo "<h3>Armas de Duas Mãos (Selecione apenas um)</h3>";

                                        if(isset($martelo_guerra)){
                                            echo "<label for='martelo_guerra'>Martelo de Guerra</label>";
                                            echo "<input type='checkbox' id='martelo_guerra' name='martelo_guerra'>";
                                            echo "<br>";
                                        }
                                        if(isset($arco)){
                                            echo "<label for='arco'>Arco</label>";
                                            echo "<input type='checkbox' id='arco' name='arco'>";
                                            echo "<br>";
                                        }
                                    }

                                    if(isset($espada_curta) || isset($adaga) || isset($tonfa) || isset($funda) || isset($lanterna)){
                                        echo "<h3>Armas de Uma Mão(Caso não tenha selecionado nenhuma arma de duas mãos, Selecione duas das opções abaixo.)</h3>";

                                        if(isset($espada_curta)){
                                            echo "<label for='espada_curta'>Espada Curta</label>";
                                            echo "<input type='checkbox' id='espada_curta' name='espada_curta'>";
                                            echo "<br>";
                                        }
                                        if(isset($adaga)){
                                            echo "<label for='adaga'>Adaga</label>";
                                            echo "<input type='checkbox' id='adaga' name='adaga'>";
                                            echo "<br>";
                                        }
                                        if(isset($tonfa)){
                                            echo "<label for='tonfa'>Tonfa</label>";
                                            echo "<input type='checkbox' id='tonfa' name='tonfa'>";
                                            echo "<br>";
                                        }
                                        if(isset($funda)){
                                            echo "<label for='funda'>Funda</label>";
                                            echo "<input type='checkbox' id='funda' name='funda'>";
                                            echo "<br>";
                                        }
                                        if(isset($lanterna)){
                                            echo "<label for='lanterna'>Lanterna</label>";
                                            echo "<input type='checkbox' id='lanterna' name='lanterna'>";
                                            echo "<br>";
                                        }
                                    }
                                    echo "<input type='text' name='id1' value='$id_personagem1' hidden>";
                                    echo "<input type='submit' value='Equipar'>";
                                    echo "</form>";
                                } else {
                                    $_SESSION['arma1_personagem1'] = "Espada Montante";
                                    $_SESSION['arma2_personagem1'] = "Espada Montante";
                                    echo "<li>".$_SESSION['arma1_personagem1']."</li>";
                                    echo "<h3><a href='trocar_itens.php?id=$id'>Trocar</a></h3>";
                                }
                            }
                        } else if(isset($martelo_guerra)){
                            if(isset($_SESSION['arma1_personagem1']) ){
                                echo "<li>".$_SESSION['arma1_personagem1']."</li>";
                                if(isset($_SESSION['arma2_personagem1']) && $_SESSION['arma1_personagem1'] != $_SESSION['arma2_personagem1']){
                                    echo "<li>".$_SESSION['arma2_personagem1']."</li>";
                                }
                                echo "<h3><a href='trocar_itens.php?id=$id'>Trocar</a></h3>";
                            } else {
                                if(isset($mangual) || isset($espada_curta) || isset($adaga) || isset($tonfa) || isset($arco) || isset($funda) || isset($lanterna)){
                                    echo "<form action='selec_eq.php' method='POST'>";

                                    echo "<br>";
                                    echo "<label for='martelo_guerra'>Martelo de Guerra</label>";
                                    echo "<input type='checkbox' id='martelo_guerra' name='martelo_guerra'>";
                                    echo "<br>";

                                    if(isset($arco)){
                                        echo "<h3>Armas de Duas Mãos (Selecione apenas um)</h3>";
                                    
                                        echo "<label for='arco'>Arco</label>";
                                        echo "<input type='checkbox' id='arco' name='arco'>";
                                        echo "<br>";
                                    }

                                    if(isset($espada_curta) || isset($adaga) || isset($tonfa) || isset($funda) || isset($lanterna)){
                                        echo "<h3>Armas de Uma Mão(Caso não tenha selecionado nenhuma arma de duas mãos, Selecione duas das opções abaixo.)</h3>";

                                        if(isset($espada_curta)){
                                            echo "<label for='espada_curta'>Espada Curta</label>";
                                            echo "<input type='checkbox' id='espada_curta' name='espada_curta'>";
                                            echo "<br>";
                                        }
                                        if(isset($adaga)){
                                            echo "<label for='adaga'>Adaga</label>";
                                            echo "<input type='checkbox' id='adaga' name='adaga'>";
                                            echo "<br>";
                                        }
                                        if(isset($tonfa)){
                                            echo "<label for='tonfa'>Tonfa</label>";
                                            echo "<input type='checkbox' id='tonfa' name='tonfa'>";
                                            echo "<br>";
                                        }
                                        if(isset($funda)){
                                            echo "<label for='funda'>Funda</label>";
                                            echo "<input type='checkbox' id='funda' name='funda'>";
                                            echo "<br>";
                                        }
                                        if(isset($lanterna)){
                                            echo "<label for='lanterna'>Lanterna</label>";
                                            echo "<input type='checkbox' id='lanterna' name='lanterna'>";
                                            echo "<br>";
                                        }
                                    }
                                    echo "<input type='text' name='id1' value='$id_personagem1' hidden>";
                                    echo "<input type='submit' value='Equipar'>";
                                    echo "</form>";
                                } else {
                                    $_SESSION['arma1_personagem1'] = "Martelo de Guerra";
                                    $_SESSION['arma2_personagem1'] = "Martelo de Guerra";
                                    echo "<li>".$_SESSION['arma1_personagem1']."</li>";
                                    echo "<h3><a href='trocar_itens.php?id=$id'>Trocar</a></h3>";
                                }
                            }
                        } else if(isset($arco)){
                            if(isset($_SESSION['arma1_personagem1']) ){
                                echo "<li>".$_SESSION['arma1_personagem1']."</li>";
                                if(isset($_SESSION['arma2_personagem1']) && $_SESSION['arma1_personagem1'] != $_SESSION['arma2_personagem1']){
                                    echo "<li>".$_SESSION['arma2_personagem1']."</li>";
                                }
                                echo "<h3><a href='trocar_itens.php?id=$id'>Trocar</a></h3>";
                            } else {
                                if(isset($mangual) || isset($espada_curta) || isset($adaga) || isset($tonfa) || isset($funda) || isset($lanterna)){
                                    echo "<h3>O arco conta como arma de duas mãos, então caso selecione ele não poderá equipar mais nenhuma arma!!!</h3>";

                                    echo "<form action='selec_eq.php' method='POST'>";

                                    echo "<label for='arco'>Arco</label>";
                                    echo "<input type='checkbox' id='arco' name='arco'>";
                                    echo "<br>";

                                    echo "<h3>Armas de Uma Mão(Caso não tenha selecionado nenhuma arma de duas mãos, Selecione duas das opções abaixo.)</h3>";

                                        if(isset($espada_curta)){
                                            echo "<label for='espada_curta'>Espada Curta</label>";
                                            echo "<input type='checkbox' id='espada_curta' name='espada_curta'>";
                                            echo "<br>";
                                        }
                                        if(isset($adaga)){
                                            echo "<label for='adaga'>Adaga</label>";
                                            echo "<input type='checkbox' id='adaga' name='adaga'>";
                                            echo "<br>";
                                        }
                                        if(isset($tonfa)){
                                            echo "<label for='tonfa'>Tonfa</label>";
                                            echo "<input type='checkbox' id='tonfa' name='tonfa'>";
                                            echo "<br>";
                                        }
                                        if(isset($funda)){
                                            echo "<label for='funda'>Funda</label>";
                                            echo "<input type='checkbox' id='funda' name='funda'>";
                                            echo "<br>";
                                        }
                                        if(isset($lanterna)){
                                            echo "<label for='lanterna'>Lanterna</label>";
                                            echo "<input type='checkbox' id='lanterna' name='lanterna'>";
                                            echo "<br>";
                                        }
                                    echo "<input type='text' name='id1' value='$id_personagem1' hidden>";
                                    echo "<input type='submit' value='Equipar'>";
                                    echo "</form>";
                                } else {
                                    $_SESSION['arma1_personagem1'] = "Arco";
                                    $_SESSION['arma2_personagem1'] = "Arco";
                                    echo "<li>".$_SESSION['arma1_personagem1']."</li>";
                                    echo "<h3><a href='trocar_itens.php?id=$id'>Trocar</a></h3>";
                                }
                            }
                        } else if(isset($mangual)){
                            if(isset($_SESSION['arma1_personagem1'])){
                                echo "<li>".$_SESSION['arma1_personagem1']."</li>";
                                if(isset($_SESSION['arma2_personagem1']) && $_SESSION['arma1_personagem1'] != $_SESSION['arma2_personagem1']){
                                    echo "<li>".$_SESSION['arma2_personagem1']."</li>";
                                }
                                echo "<h3><a href='trocar_itens.php?id=$id'>Trocar</a></h3>";
                            } else {
                                if(isset($espada_curta) || isset($adaga) || isset($tonfa) || isset($funda) || isset($lanterna)){
                                    
                                    echo "<form action='selec_eq.php' method='POST'>";

                                    echo "<h3>Armas de Uma Mão(Selecione duas das opções abaixo)</h3>";

                                    echo "<label for='mangual'>Mangual</label>";
                                    echo "<input type='checkbox' id='mangual' name='mangual'>";
                                    echo "<br>";

                                        if(isset($espada_curta)){
                                            echo "<label for='espada_curta'>Espada Curta</label>";
                                            echo "<input type='checkbox' id='espada_curta' name='espada_curta'>";
                                            echo "<br>";
                                        }
                                        if(isset($adaga)){
                                            echo "<label for='adaga'>Adaga</label>";
                                            echo "<input type='checkbox' id='adaga' name='adaga'>";
                                            echo "<br>";
                                        }
                                        if(isset($tonfa)){
                                            echo "<label for='tonfa'>Tonfa</label>";
                                            echo "<input type='checkbox' id='tonfa' name='tonfa'>";
                                            echo "<br>";
                                        }
                                        if(isset($funda)){
                                            echo "<label for='funda'>Funda</label>";
                                            echo "<input type='checkbox' id='funda' name='funda'>";
                                            echo "<br>";
                                        }
                                        if(isset($lanterna)){
                                            echo "<label for='lanterna'>Lanterna</label>";
                                            echo "<input type='checkbox' id='lanterna' name='lanterna'>";
                                            echo "<br>";
                                        }
                                    echo "<input type='text' name='id1' value='$id_personagem1' hidden>";
                                    echo "<input type='submit' value='Equipar'>";
                                    echo "</form>";
                                } else {
                                    $_SESSION['arma1_personagem1'] = "Mangual";
                                    echo "<li>".$_SESSION['arma1_personagem1']."</li>";
                                    echo "<h3><a href='trocar_itens.php?id=$id'>Trocar</a></h3>";
                                }
                            }
                        } else if(isset($espada_curta)){
                            if(isset($_SESSION['arma1_personagem1'])){
                                echo "<li>".$_SESSION['arma1_personagem1']."</li>";
                                if(isset($_SESSION['arma2_personagem1']) && $_SESSION['arma1_personagem1'] != $_SESSION['arma2_personagem1']){
                                    echo "<li>".$_SESSION['arma2_personagem1']."</li>";
                                }
                                echo "<h3><a href='trocar_itens.php?id=$id'>Trocar</a></h3>";
                            } else {
                                if(isset($adaga) || isset($tonfa) || isset($funda) || isset($lanterna)){
                                    
                                    echo "<form action='selec_eq.php' method='POST'>";

                                    echo "<h3>Armas de Uma Mão(Selecione duas das opções abaixo)</h3>";

                                    echo "<label for='espada_curta'>Espada Curta</label>";
                                    echo "<input type='checkbox' id='espada_curta' name='espada_curta'>";
                                    echo "<br>";
                                        
                                        if(isset($adaga)){
                                            echo "<label for='adaga'>Adaga</label>";
                                            echo "<input type='checkbox' id='adaga' name='adaga'>";
                                            echo "<br>";
                                        }
                                        if(isset($tonfa)){
                                            echo "<label for='tonfa'>Tonfa</label>";
                                            echo "<input type='checkbox' id='tonfa' name='tonfa'>";
                                            echo "<br>";
                                        }
                                        if(isset($funda)){
                                            echo "<label for='funda'>Funda</label>";
                                            echo "<input type='checkbox' id='funda' name='funda'>";
                                            echo "<br>";
                                        }
                                        if(isset($lanterna)){
                                            echo "<label for='lanterna'>Lanterna</label>";
                                            echo "<input type='checkbox' id='lanterna' name='lanterna'>";
                                            echo "<br>";
                                        }
                                    echo "<input type='text' name='id1' value='$id_personagem1' hidden>";
                                    echo "<input type='submit' value='Equipar'>";
                                    echo "</form>";
                                } else {
                                    $_SESSION['arma1_personagem1'] = "Espada Curta";
                                    echo "<li>".$_SESSION['arma1_personagem1']."</li>";
                                    echo "<h3><a href='trocar_itens.php?id=$id'>Trocar</a></h3>";
                                }
                            }
                        } else if(isset($adaga)){
                            if(isset($_SESSION['arma1_personagem1'])){
                                echo "<li>".$_SESSION['arma1_personagem1']."</li>";
                                if(isset($_SESSION['arma2_personagem1']) && $_SESSION['arma1_personagem1'] != $_SESSION['arma2_personagem1']){
                                    echo "<li>".$_SESSION['arma2_personagem1']."</li>";
                                }
                                echo "<h3><a href='trocar_itens.php?id=$id'>Trocar</a></h3>";
                            } else {
                                if(isset($tonfa) || isset($funda) || isset($livro_feiticos) || isset($lanterna)){
                                    
                                    echo "<form action='selec_eq.php' method='POST'>";

                                    echo "<h3>Armas de Uma Mão(Selecione duas das opções abaixo)</h3>";
                                        
                                    echo "<label for='adaga'>Adaga</label>";
                                    echo "<input type='checkbox' id='adaga' name='adaga'>";
                                    echo "<br>";
                                        
                                        if(isset($tonfa)){
                                            echo "<label for='tonfa'>Tonfa</label>";
                                            echo "<input type='checkbox' id='tonfa' name='tonfa'>";
                                            echo "<br>";
                                        }
                                        if(isset($funda)){
                                            echo "<label for='funda'>Funda</label>";
                                            echo "<input type='checkbox' id='funda' name='funda'>";
                                            echo "<br>";
                                        }
                                        if(isset($livro_feiticos)){
                                            echo "<label for='livro_feiticos'>Livro de Feitiços</label>";
                                            echo "<input type='checkbox' id='livro_feiticos' name='livro_feiticos'>";
                                            echo "<br>";
                                        }
                                        if(isset($lanterna)){
                                            echo "<label for='lanterna'>Lanterna</label>";
                                            echo "<input type='checkbox' id='lanterna' name='lanterna'>";
                                            echo "<br>";
                                        }
                                    echo "<input type='text' name='id1' value='$id_personagem1' hidden>";
                                    echo "<input type='submit' value='Equipar'>";
                                    echo "</form>";
                                } else {
                                    $_SESSION['arma1_personagem1'] = "Adaga";
                                    echo "<li>".$_SESSION['arma1_personagem1']."</li>";
                                    echo "<h3><a href='trocar_itens.php?id=$id'>Trocar</a></h3>";
                                }
                            }
                        } else if(isset($tonfa)){
                            if(isset($_SESSION['arma1_personagem1'])){
                                echo "<li>".$_SESSION['arma1_personagem1']."</li>";
                                if(isset($_SESSION['arma2_personagem1']) && $_SESSION['arma1_personagem1'] != $_SESSION['arma2_personagem1']){
                                    echo "<li>".$_SESSION['arma2_personagem1']."</li>";
                                }
                                echo "<h3><a href='trocar_itens.php?id=$id'>Trocar</a></h3>";
                            } else {
                                if(isset($funda) || isset($livro_feiticos) || isset($lanterna)){
                                    
                                    echo "<form action='selec_eq.php' method='POST'>";

                                    echo "<h3>Armas de Uma Mão(Selecione duas das opções abaixo)</h3>";
                                        
                                    echo "<label for='tonfa'>Tonfa</label>";
                                    echo "<input type='checkbox' id='tonfa' name='tonfa'>";
                                    echo "<br>";
                                        
                                        if(isset($funda)){
                                            echo "<label for='funda'>Funda</label>";
                                            echo "<input type='checkbox' id='funda' name='funda'>";
                                            echo "<br>";
                                        }
                                        if(isset($livro_feiticos)){
                                            echo "<label for='livro_feiticos'>Livro de Feitiços</label>";
                                            echo "<input type='checkbox' id='livro_feiticos' name='livro_feiticos'>";
                                            echo "<br>";
                                        }
                                        if(isset($lanterna)){
                                            echo "<label for='lanterna'>Lanterna</label>";
                                            echo "<input type='checkbox' id='lanterna' name='lanterna'>";
                                            echo "<br>";
                                        }
                                        echo "<input type='text' name='id1' value='$id_personagem1' hidden>";
                                    echo "<input type='submit' value='Equipar'>";
                                    echo "</form>";
                                } else {
                                    $_SESSION['arma1_personagem1'] = "Tonfa";
                                    echo "<li>".$_SESSION['arma1_personagem1']."</li>";
                                    echo "<h3><a href='trocar_itens.php?id=$id'>Trocar</a></h3>";
                                }
                            }
                        } else if(isset($livro_feiticos)){
                            if(isset($_SESSION['arma1_personagem1'])){
                                echo "<li>".$_SESSION['arma1_personagem1']."</li>";
                                if(isset($_SESSION['arma2_personagem1']) && $_SESSION['arma1_personagem1'] != $_SESSION['arma2_personagem1']){
                                    echo "<li>".$_SESSION['arma2_personagem1']."</li>";
                                }
                                echo "<h3><a href='trocar_itens.php?id=$id'>Trocar</a></h3>";
                            } else {
                                if(isset($funda) || isset($lanterna)){
                                    
                                    echo "<form action='selec_eq.php' method='POST'>";

                                    echo "<h3>Armas de Uma Mão(Selecione duas das opções abaixo)<h3>";
                                        
                                    echo "<label for='livro_feiticos'>Livro de Feitiços</label>";
                                    echo "<input type='checkbox' id='livro_feiticos' name='livro_feiticos'>";
                                    echo "<br>";
                                        
                                        if(isset($funda)){
                                            echo "<label for='funda'>Funda</label>";
                                            echo "<input type='checkbox' id='funda' name='funda'>";
                                            echo "<br>";
                                        }
                                        if(isset($lanterna)){
                                            echo "<label for='lanterna'>Lanterna</label>";
                                            echo "<input type='checkbox' id='lanterna' name='lanterna'>";
                                            echo "<br>";
                                        }
                                    echo "<input type='text' name='id1' value='$id_personagem1' hidden>";
                                    echo "<input type='submit' value='Equipar'>";
                                    echo "</form>";
                                } else {
                                    $_SESSION['arma1_personagem1'] = "Livro de Feitiços";
                                    echo "<li>".$_SESSION['arma1_personagem1']."</li>";
                                    echo "<h3><a href='trocar_itens.php?id=$id'>Trocar</a></h3>";
                                }
                            }
                        } else if(isset($funda)){
                            if(isset($_SESSION['arma1_personagem1'])){
                                echo "<li>".$_SESSION['arma1_personagem1']."</li>";
                                if(isset($_SESSION['arma2_personagem1']) && $_SESSION['arma1_personagem1'] != $_SESSION['arma2_personagem1']){
                                    echo "<li>".$_SESSION['arma2_personagem1']."</li>";
                                }
                                echo "<h3><a href='trocar_itens.php?id=$id'>Trocar</a></h3>";
                            } else {
                                if(isset($lanterna)){
                                    
                                    echo "<form action='selec_eq.php' method='POST'>";

                                    echo "<h3>Armas de Uma Mão(Selecione duas das opções abaixo)</h3>";
                                        
                                    echo "<label for='funda'>Funda</label>";
                                    echo "<input type='checkbox' id='funda' name='funda'>";
                                    echo "<br>";
                                    
                                    echo "<label for='lanterna'>Lanterna</label>";
                                    echo "<input type='checkbox' id='lanterna' name='lanterna'>";
                                    echo "<br>";
                                      
                                    echo "<input type='text' name='id1' value='$id_personagem1' hidden>";
                                    echo "<input type='submit' value='Equipar'>";
                                    echo "</form>";
                                } else {
                                    $_SESSION['arma1_personagem1'] = "Funda";
                                    echo "<li>".$_SESSION['arma1_personagem1']."</li>";
                                    echo "<h3><a href='trocar_itens.php?id=$id'>Trocar</a></h3>";
                                }
                            }
                        }
                    }
                    echo "</ul>";
                    echo "</td>";
                }

                $id_personagem2 = $id = $_SESSION['personagem2'];
                // limpando varáveis
                unset($armadura_malha);
                unset($armadura_aco);
                unset($espada_curta);
                unset($mangual);
                unset($escudo);
                unset($espada_curta_escudo);
                unset($mangual_escudo);
                unset($tonfa);
                unset($adaga);
                unset($espada_montante);
                unset($martelo_guerra);
                unset($arco);
                unset($funda);
                unset($livro_feiticos);
                unset($lanterna);

                $personagem = $repositorio->MostrarPersonagem($id);
                foreach ($personagem as $key) {
                    $nome = $key['nome'];
                    echo "<td style='border: solid 2px black'>";
                        $img = $key['img'];
                        echo "<img src='../../../$img'>";
                        echo "<h2>Nome: ".$key['nome'];
                        echo " - Classe: ".$key['classe']."</h2>";
                        echo "<h3>Equipamentos:</h3>";
                        echo "<ul>";
                    $inventario = $repositorio->MostrarInventario($nome);
                    foreach ($inventario as $item) {
                        // armaduras
                        if(in_array("armadura de malha",$item)){
                            $armadura_malha = true;
                            if(in_array("armadura de aço",$item)){
                                $armadura_aco = true;
                            }
                        } else if(in_array("armadura de aço",$item)){
                            $armadura_aco = true;
                        }

                        if(isset($armadura_malha) && isset($armadura_aco)){
                            if(isset($_SESSION['armadura_personagem2'])){
                                echo "<li>".$_SESSION['armadura_personagem2']."</li>";
                            } else {
                                echo "<h2>Escolher para utilizar:</h2>";
                                echo "<form action='selec_eq.php' method='POST'>";
                                    echo "<select name='armadura' id='armadura'>";
                                        echo "<option value='armadura de malha'>Armadura de Malha</option>";
                                        echo "<option value='armadura de aço'>Armadura de Aço</option>";
                                    echo "</select>";
                                    echo "<input type='text' name='id2' value='$id_personagem2' hidden>";
                                    echo "<input type='submit' value='Equipar'>";
                                    echo "<br>";
                                echo "<form>";
                            }
                        } else if(isset($armadura_malha)){
                            $_SESSION['armadura_personagem2'] = "armadura de malha";
                            echo "<li>".$_SESSION['armadura_personagem2']."</li>";
                        } else if(isset($armadura_aco)){
                            $_SESSION['armadura_personagem2'] = "armadura de aço";
                            echo "<li>".$_SESSION['armadura_personagem2']."</li>";
                        } else {
                            $_SESSION['armadura_personagem2'] = "N";
                            echo "<li>Esse personagem não possui nenhuma armadura</li>";
                        }

                        // armas
                        if(in_array("espada curta",$item)){
                            $espada_curta = true;
                        } 
                        if(in_array("mangual",$item)){
                            $mangual = true;
                        } 
                        if(in_array("escudo",$item)){
                            $escudo = true;
                        }
                        if(in_array("espada curta e escudo",$item)){
                            $espada_curta_escudo = true;
                        }
                        if(in_array("mangual e escudo",$item)){
                            $mangual_escudo = true;
                        }
                        if(in_array("adaga",$item)){
                            $adaga = true;
                        }  
                        if(in_array("tonfa",$item)){
                            $tonfa = true;
                        }  
                        if(in_array("espada montante",$item)){
                            $espada_montante = true;
                        } 
                        if(in_array("martelo de guerra",$item)){
                            $martelo_guerra = true;
                        } 
                        if(in_array("arco",$item)){
                            $arco = true;
                        } 
                        if(in_array("funda",$item)){
                            $funda = true;
                        } 
                        if(in_array("livro de feitiços",$item)){
                            $livro_feiticos = true;
                        }
                        if(in_array("lanterna",$item)){
                            $lanterna = true;
                        }

                        if(isset($espada_curta_escudo)){
                            if(isset($_SESSION['arma1_personagem2']) ){
                                echo "<li>".$_SESSION['arma1_personagem2']."</li>";
                                if(isset($_SESSION['arma2_personagem2']) && $_SESSION['arma1_personagem2'] != $_SESSION['arma2_personagem2']){
                                    echo "<li>".$_SESSION['arma2_personagem2']."</li>";
                                }
                                echo "<h3><a href='trocar_itens.php?id=$id'>Trocar</a></h3>";
                            } else {
                                if(isset($mangual_escudo) || isset($mangual) || isset($adaga) || isset($tonfa) || isset($espada_montante) || isset($martelo_guerra) || isset($arco) || isset($funda) || isset($lanterna)){
                                    echo "<form action='selec_eq.php' method='POST'>";

                                    if(isset($mangual_escudo) || isset($espada_montante) || isset($martelo_guerra) || isset($arco)){
                                        echo "<h3>Armas de Duas Mãos (Selecione apenas um)</h3>";
                                    
                                        echo "<label for='espada_curta_escudo'>Espada Curta e Escudo</label>";
                                        echo "<input type='checkbox' id='espada_curta_escudo' name='espada_curta_escudo'>";
                                        echo "<br>";

                                        if(isset($mangual_escudo)){
                                            echo "<label for='mangual_escudo'>Mangual e Escudo</label>";
                                            echo "<input type='checkbox' id='mangual_escudo' name='mangual_escudo'>";
                                            echo "<br>";
                                        }
                                        if(isset($espada_montante)){
                                            echo "<label for='espada_montante'>Espada Montante</label>";
                                            echo "<input type='checkbox' id='espada_montante' name='espada_montante'>";
                                            echo "<br>";
                                        }
                                        if(isset($martelo_guerra)){
                                            echo "<label for='martelo_guerra'>Martelo de Guerra</label>";
                                            echo "<input type='checkbox' id='martelo_guerra' name='martelo_guerra'>";
                                            echo "<br>";
                                        }
                                        if(isset($arco)){
                                            echo "<label for='arco'>Arco</label>";
                                            echo "<input type='checkbox' id='arco' name='arco'>";
                                            echo "<br>";
                                        }
                                    }

                                    if(isset($mangual) || isset($adaga) || isset($tonfa) || isset($funda)){
                                        echo "<h3>Armas de Uma Mão(Caso não tenha selecionado nenhuma arma de duas mãos, Selecione duas das opções abaixo.)</h3>";
                                        echo "<label for='espada_curta'>Espada Curta</label>";
                                        echo "<input type='checkbox' id='espada_curta' name='espada_curta'>";
                                        echo "<br>";
                                        echo "<label for='escudo'>Escudo</label>";
                                        echo "<input type='checkbox' id='escudo' name='escudo'>";
                                        echo "<br>";

                                        if(isset($mangual)){
                                            echo "<label for='mangual'>Mangual</label>";
                                            echo "<input type='checkbox' id='mangual' name='mangual'>";
                                            echo "<br>";
                                        }
                                        if(isset($adaga)){
                                            echo "<label for='adaga'>Adaga</label>";
                                            echo "<input type='checkbox' id='adaga' name='adaga'>";
                                            echo "<br>";
                                        }
                                        if(isset($tonfa)){
                                            echo "<label for='tonfa'>Tonfa</label>";
                                            echo "<input type='checkbox' id='tonfa' name='tonfa'>";
                                            echo "<br>";
                                        }
                                        if(isset($funda)){
                                            echo "<label for='funda'>Funda</label>";
                                            echo "<input type='checkbox' id='funda' name='funda'>";
                                            echo "<br>";
                                        }
                                        if(isset($lanterna)){
                                            echo "<label for='lanterna'>Lanterna</label>";
                                            echo "<input type='checkbox' id='lanterna' name='lanterna'>";
                                            echo "<br>";
                                        }
                                    }

                                    echo "<input type='text' name='id2' value='$id_personagem2' hidden>";
                                    echo "<input type='submit' value='Equipar'>";
                                    echo "</form>";
                                } else {
                                    $_SESSION['arma1_personagem2'] = "Espada Curta";
                                    $_SESSION['arma2_personagem2'] = "Escudo";
                                    echo "<li>".$_SESSION['arma1_personagem2']."</li>";
                                    echo "<li>".$_SESSION['arma2_personagem2']."</li>";
                                    echo "<h3><a href='trocar_itens.php?id=$id'>Trocar</a></h3>";
                                }
                            }
                        } else if(isset($mangual_escudo)){
                            if(isset($_SESSION['arma1_personagem2']) ){
                                echo "<li>".$_SESSION['arma1_personagem2']."</li>";
                                if(isset($_SESSION['arma2_personagem2']) && $_SESSION['arma1_personagem2'] != $_SESSION['arma2_personagem2']){
                                    echo "<li>".$_SESSION['arma2_personagem2']."</li>";
                                }
                                echo "<h3><a href='trocar_itens.php?id=$id'>Trocar</a></h3>";
                            } else {
                                if(isset($espada_curta) || isset($adaga) || isset($tonfa) || isset($espada_montante) || isset($martelo_guerra) || isset($arco) || isset($funda) || isset($lanterna)){
                                    echo "<form action='selec_eq.php' method='POST'>";

                                    if(isset($espada_montante) || isset($martelo_guerra) || isset($arco)){
                                        echo "<h3>Armas de Duas Mãos (Selecione apenas um)</h3>";
                                        
                                        echo "<label for='mangual_escudo'>Mangual e Escudo</label>";
                                        echo "<input type='checkbox' id='mangual_escudo' name='mangual_escudo'>";
                                        echo "<br>";

                                        if(isset($espada_montante)){
                                            echo "<label for='espada_montante'>Espada Montante</label>";
                                            echo "<input type='checkbox' id='espada_montante' name='espada_montante'>";
                                            echo "<br>";
                                        }
                                        if(isset($martelo_guerra)){
                                            echo "<label for='martelo_guerra'>Martelo de Guerra</label>";
                                            echo "<input type='checkbox' id='martelo_guerra' name='martelo_guerra'>";
                                            echo "<br>";
                                        }
                                        if(isset($arco)){
                                            echo "<label for='arco'>Arco</label>";
                                            echo "<input type='checkbox' id='arco' name='arco'>";
                                            echo "<br>";
                                        }
                                    }
                                    

                                    if(isset($espada_curta) || isset($adaga) || isset($tonfa) || isset($funda) || isset($lanterna)){
                                        echo "<h3>Armas de Uma Mão(Caso não tenha selecionado nenhuma arma de duas mãos, Selecione duas das opções abaixo.)</h3>";
                                        echo "<label for='mangual'>Mangual</label>";
                                        echo "<input type='checkbox' id='mangual' name='mangual'>";
                                        echo "<br>";
                                        echo "<label for='escudo'>Escudo</label>";
                                        echo "<input type='checkbox' id='escudo' name='escudo'>";
                                        echo "<br>";

                                        if(isset($espada_curta)){
                                            echo "<label for='espada_curta'>Espada Curta</label>";
                                            echo "<input type='checkbox' id='espada_curta' name='espada_curta'>";
                                            echo "<br>";
                                        }
                                        if(isset($adaga)){
                                            echo "<label for='adaga'>Adaga</label>";
                                            echo "<input type='checkbox' id='adaga' name='adaga'>";
                                            echo "<br>";
                                        }
                                        if(isset($tonfa)){
                                            echo "<label for='tonfa'>Tonfa</label>";
                                            echo "<input type='checkbox' id='tonfa' name='tonfa'>";
                                            echo "<br>";
                                        }
                                        if(isset($funda)){
                                            echo "<label for='funda'>Funda</label>";
                                            echo "<input type='checkbox' id='funda' name='funda'>";
                                            echo "<br>";
                                        }
                                        if(isset($lanterna)){
                                            echo "<label for='lanterna'>Lanterna</label>";
                                            echo "<input type='checkbox' id='lanterna' name='lanterna'>";
                                            echo "<br>";
                                        }
                                    }
                                    echo "<input type='text' name='id2' value='$id_personagem2' hidden>";
                                    echo "<input type='submit' value='Equipar'>";
                                    echo "</form>";
                                } else {
                                    $_SESSION['arma1_personagem2'] = "Mangual";
                                    $_SESSION['arma2_personagem2'] = "Escudo";
                                    echo "<li>".$_SESSION['arma1_personagem2']."</li>";
                                    echo "<li>".$_SESSION['arma2_personagem2']."</li>";
                                    echo "<h3><a href='trocar_itens.php?id=$id'>Trocar</a></h3>";
                                }
                            }
                        } else if(isset($espada_montante)){
                            if(isset($_SESSION['arma1_personagem2']) ){
                                echo "<li>".$_SESSION['arma1_personagem2']."</li>";
                                if(isset($_SESSION['arma2_personagem2']) && $_SESSION['arma1_personagem2'] != $_SESSION['arma2_personagem2']){
                                    echo "<li>".$_SESSION['arma2_personagem2']."</li>";
                                }
                                echo "<h3><a href='trocar_itens.php?id=$id'>Trocar</a></h3>";
                            } else {
                                if(isset($mangual) || isset($espada_curta) || isset($adaga) || isset($tonfa) || isset($martelo_guerra) || isset($arco) || isset($funda) || isset($lanterna)){
                                    echo "<form action='selec_eq.php' method='POST'>";

                                    echo "<label for='espada_montante'>Espada Montante</label>";
                                    echo "<input type='checkbox' id='espada_montante' name='espada_montante'>";
                                    echo "<br>";
                                    
                                    if(isset($martelo_guerra) || isset($arco)){
                                        echo "<h3>Armas de Duas Mãos (Selecione apenas um)</h3>";

                                        if(isset($martelo_guerra)){
                                            echo "<label for='martelo_guerra'>Martelo de Guerra</label>";
                                            echo "<input type='checkbox' id='martelo_guerra' name='martelo_guerra'>";
                                            echo "<br>";
                                        }
                                        if(isset($arco)){
                                            echo "<label for='arco'>Arco</label>";
                                            echo "<input type='checkbox' id='arco' name='arco'>";
                                            echo "<br>";
                                        }
                                    }

                                    if(isset($espada_curta) || isset($adaga) || isset($tonfa) || isset($funda) || isset($lanterna)){
                                        echo "<h3>Armas de Uma Mão(Caso não tenha selecionado nenhuma arma de duas mãos, Selecione duas das opções abaixo.)</h3>";
                                        echo "<br>";

                                        if(isset($espada_curta)){
                                            echo "<label for='espada_curta'>Espada Curta</label>";
                                            echo "<input type='checkbox' id='espada_curta' name='espada_curta'>";
                                            echo "<br>";
                                        }
                                        if(isset($adaga)){
                                            echo "<label for='adaga'>Adaga</label>";
                                            echo "<input type='checkbox' id='adaga' name='adaga'>";
                                            echo "<br>";
                                        }
                                        if(isset($tonfa)){
                                            echo "<label for='tonfa'>Tonfa</label>";
                                            echo "<input type='checkbox' id='tonfa' name='tonfa'>";
                                            echo "<br>";
                                        }
                                        if(isset($funda)){
                                            echo "<label for='funda'>Funda</label>";
                                            echo "<input type='checkbox' id='funda' name='funda'>";
                                            echo "<br>";
                                        }
                                        if(isset($lanterna)){
                                            echo "<label for='lanterna'>Lanterna</label>";
                                            echo "<input type='checkbox' id='lanterna' name='lanterna'>";
                                            echo "<br>";
                                        }
                                    }
                                    echo "<input type='text' name='id2' value='$id_personagem2' hidden>";
                                    echo "<input type='submit' value='Equipar'>";
                                    echo "</form>";
                                } else {
                                    $_SESSION['arma1_personagem2'] = "Espada Montante";
                                    $_SESSION['arma2_personagem2'] = "Espada Montante";
                                    echo "<li>".$_SESSION['arma1_personagem2']."</li>";
                                    echo "<h3><a href='trocar_itens.php?id=$id'>Trocar</a></h3>";
                                }
                            }
                        } else if(isset($martelo_guerra)){
                            if(isset($_SESSION['arma1_personagem2']) ){
                                echo "<li>".$_SESSION['arma1_personagem2']."</li>";
                                if(isset($_SESSION['arma2_personagem2']) && $_SESSION['arma1_personagem2'] != $_SESSION['arma2_personagem2']){
                                    echo "<li>".$_SESSION['arma2_personagem2']."</li>";
                                }
                                echo "<h3><a href='trocar_itens.php?id=$id'>Trocar</a></h3>";
                            } else {
                                if(isset($mangual) || isset($espada_curta) || isset($adaga) || isset($tonfa) || isset($arco) || isset($funda) || isset($lanterna)){
                                    echo "<form action='selec_eq.php' method='POST'>";

                                    echo "<label for='martelo_guerra'>Martelo de Guerra</label>";
                                    echo "<input type='checkbox' id='martelo_guerra' name='martelo_guerra'>";
                                    echo "<br>";

                                    if(isset($arco)){
                                        echo "<h3>Armas de Duas Mãos (Selecione apenas um)</h3>";
                                    
                                        echo "<label for='arco'>Arco</label>";
                                        echo "<input type='checkbox' id='arco' name='arco'>";
                                    } 

                                    if(isset($espada_curta) || isset($adaga) || isset($tonfa) || isset($funda) || isset($lanterna)){
                                        echo "<h3>(Caso não tenha selecionado nenhuma arma de duas mãos, Selecione duas das opções abaixo.)</h3>";
                                        echo "<br>";
                                        echo "<label for='martelo_guerra'>Martelo de Guerra</label>";
                                        echo "<input type='checkbox' id='martelo_guerra' name='martelo_guerra'>";
                                        echo "<br>";

                                        if(isset($espada_curta)){
                                            echo "<label for='espada_curta'>Espada Curta</label>";
                                            echo "<input type='checkbox' id='espada_curta' name='espada_curta'>";
                                            echo "<br>";
                                        }
                                        if(isset($adaga)){
                                            echo "<label for='adaga'>Adaga</label>";
                                            echo "<input type='checkbox' id='adaga' name='adaga'>";
                                            echo "<br>";
                                        }
                                        if(isset($tonfa)){
                                            echo "<label for='tonfa'>Tonfa</label>";
                                            echo "<input type='checkbox' id='tonfa' name='tonfa'>";
                                            echo "<br>";
                                        }
                                        if(isset($funda)){
                                            echo "<label for='funda'>Funda</label>";
                                            echo "<input type='checkbox' id='funda' name='funda'>";
                                            echo "<br>";
                                        }
                                        if(isset($lanterna)){
                                            echo "<label for='lanterna'>Lanterna</label>";
                                            echo "<input type='checkbox' id='lanterna' name='lanterna'>";
                                            echo "<br>";
                                        }
                                    }
                                    echo "<input type='text' name='id2' value='$id_personagem2' hidden>";
                                    echo "<input type='submit' value='Equipar'>";
                                    echo "</form>";
                                } else {
                                    $_SESSION['arma1_personagem2'] = "Martelo de Guerra";
                                    $_SESSION['arma2_personagem2'] = "Martelo de Guerra";
                                    echo "<li>".$_SESSION['arma1_personagem2']."</li>";
                                    echo "<h3><a href='trocar_itens.php?id=$id'>Trocar</a></h3>";
                                }
                            }
                        } else if(isset($arco)){
                            if(isset($_SESSION['arma1_personagem2']) ){
                                echo "<li>".$_SESSION['arma1_personagem2']."</li>";
                                if(isset($_SESSION['arma2_personagem2']) && $_SESSION['arma1_personagem2'] != $_SESSION['arma2_personagem2']){
                                    echo "<li>".$_SESSION['arma2_personagem2']."</li>";
                                }
                                echo "<h3><a href='trocar_itens.php?id=$id'>Trocar</a></h3>";
                            } else {
                                if(isset($mangual) || isset($espada_curta) || isset($adaga) || isset($tonfa) || isset($funda) || isset($lanterna)){
                                    echo "<h3>O arco conta como arma de duas mãos, então caso selecione ele não poderá equipar mais nenhuma arma!!!</h3>";

                                    echo "<form action='selec_eq.php' method='POST'>";

                                    echo "<label for='arco'>Arco</label>";
                                    echo "<input type='checkbox' id='arco' name='arco'>";
                                    echo "<br>";

                                    echo "<h3>Armas de Uma Mão(Caso não tenha selecionado nenhuma arma de duas mãos, Selecione duas das opções abaixo.)</h3>";

                                        if(isset($espada_curta)){
                                            echo "<label for='espada_curta'>Espada Curta</label>";
                                            echo "<input type='checkbox' id='espada_curta' name='espada_curta'>";
                                            echo "<br>";
                                        }
                                        if(isset($adaga)){
                                            echo "<label for='adaga'>Adaga</label>";
                                            echo "<input type='checkbox' id='adaga' name='adaga'>";
                                            echo "<br>";
                                        }
                                        if(isset($tonfa)){
                                            echo "<label for='tonfa'>Tonfa</label>";
                                            echo "<input type='checkbox' id='tonfa' name='tonfa'>";
                                            echo "<br>";
                                        }
                                        if(isset($funda)){
                                            echo "<label for='funda'>Funda</label>";
                                            echo "<input type='checkbox' id='funda' name='funda'>";
                                            echo "<br>";
                                        }
                                        if(isset($lanterna)){
                                            echo "<label for='lanterna'>Lanterna</label>";
                                            echo "<input type='checkbox' id='lanterna' name='lanterna'>";
                                            echo "<br>";
                                        }
                                    echo "<input type='text' name='id2' value='$id_personagem2' hidden>";
                                    echo "<input type='submit' value='Equipar'>";
                                    echo "</form>";
                                } else {
                                    $_SESSION['arma1_personagem2'] = "Arco";
                                    $_SESSION['arma2_personagem2'] = "Arco";
                                    echo "<li>".$_SESSION['arma1_personagem2']."</li>";
                                    echo "<h3><a href='trocar_itens.php?id=$id'>Trocar</a></h3>";
                                }
                            }
                        } else if(isset($mangual)){
                            if(isset($_SESSION['arma1_personagem2'])){
                                echo "<li>".$_SESSION['arma1_personagem2']."</li>";
                                if(isset($_SESSION['arma2_personagem2']) && $_SESSION['arma1_personagem2'] != $_SESSION['arma2_personagem2']){
                                    echo "<li>".$_SESSION['arma2_personagem2']."</li>";
                                }
                                echo "<h3><a href='trocar_itens.php?id=$id'>Trocar</a></h3>";
                            } else {
                                if(isset($espada_curta) || isset($adaga) || isset($tonfa) || isset($funda) || isset($lanterna)){
                                    
                                    echo "<form action='selec_eq.php' method='POST'>";

                                    echo "<h3>Armas de Uma Mão(Selecione duas das opções abaixo)</h3>";

                                    echo "<label for='mangual'>Mangual</label>";
                                    echo "<input type='checkbox' id='mangual' name='mangual'>";
                                    echo "<br>";

                                        if(isset($espada_curta)){
                                            echo "<label for='espada_curta'>Espada Curta</label>";
                                            echo "<input type='checkbox' id='espada_curta' name='espada_curta'>";
                                            echo "<br>";
                                        }
                                        if(isset($adaga)){
                                            echo "<label for='adaga'>Adaga</label>";
                                            echo "<input type='checkbox' id='adaga' name='adaga'>";
                                            echo "<br>";
                                        }
                                        if(isset($tonfa)){
                                            echo "<label for='tonfa'>Tonfa</label>";
                                            echo "<input type='checkbox' id='tonfa' name='tonfa'>";
                                            echo "<br>";
                                        }
                                        if(isset($funda)){
                                            echo "<label for='funda'>Funda</label>";
                                            echo "<input type='checkbox' id='funda' name='funda'>";
                                            echo "<br>";
                                        }
                                        if(isset($lanterna)){
                                            echo "<label for='lanterna'>Lanterna</label>";
                                            echo "<input type='checkbox' id='lanterna' name='lanterna'>";
                                            echo "<br>";
                                        }
                                    echo "<input type='text' name='id2' value='$id_personagem2' hidden>";
                                    echo "<input type='submit' value='Equipar'>";
                                    echo "</form>";
                                } else {
                                    $_SESSION['arma1_personagem2'] = "Mangual";
                                    echo "<li>".$_SESSION['arma1_personagem2']."</li>";
                                    echo "<h3><a href='trocar_itens.php?id=$id'>Trocar</a></h3>";
                                }
                            }
                        } else if(isset($espada_curta)){
                            if(isset($_SESSION['arma1_personagem2'])){
                                echo "<li>".$_SESSION['arma1_personagem2']."</li>";
                                if(isset($_SESSION['arma2_personagem2']) && $_SESSION['arma1_personagem2'] != $_SESSION['arma2_personagem2']){
                                    echo "<li>".$_SESSION['arma2_personagem2']."</li>";
                                }
                                echo "<h3><a href='trocar_itens.php?id=$id'>Trocar</a></h3>";
                            } else {
                                if(isset($adaga) || isset($tonfa) || isset($funda) || isset($lanterna)){
                                    
                                    echo "<form action='selec_eq.php' method='POST'>";

                                    echo "<h3>Armas de Uma Mão(Selecione duas das opções abaixo)</h3>";

                                    echo "<label for='espada_curta'>Espada Curta</label>";
                                    echo "<input type='checkbox' id='espada_curta' name='espada_curta'>";
                                    echo "<br>";
                                        
                                        if(isset($adaga)){
                                            echo "<label for='adaga'>Adaga</label>";
                                            echo "<input type='checkbox' id='adaga' name='adaga'>";
                                            echo "<br>";
                                        }
                                        if(isset($tonfa)){
                                            echo "<label for='tonfa'>Tonfa</label>";
                                            echo "<input type='checkbox' id='tonfa' name='tonfa'>";
                                            echo "<br>";
                                        }
                                        if(isset($funda)){
                                            echo "<label for='funda'>Funda</label>";
                                            echo "<input type='checkbox' id='funda' name='funda'>";
                                            echo "<br>";
                                        }
                                        if(isset($lanterna)){
                                            echo "<label for='lanterna'>Lanterna</label>";
                                            echo "<input type='checkbox' id='lanterna' name='lanterna'>";
                                            echo "<br>";
                                        }
                                    echo "<input type='text' name='id2' value='$id_personagem2' hidden>";
                                    echo "<input type='submit' value='Equipar'>";
                                    echo "</form>";
                                } else {
                                    $_SESSION['arma1_personagem2'] = "Espada Curta";
                                    echo "<li>".$_SESSION['arma1_personagem2']."</li>";
                                    echo "<h3><a href='trocar_itens.php?id=$id'>Trocar</a></h3>";
                                }
                            }
                        } else if(isset($adaga)){
                            if(isset($_SESSION['arma1_personagem2'])){
                                echo "<li>".$_SESSION['arma1_personagem2']."</li>";
                                if(isset($_SESSION['arma2_personagem2']) && $_SESSION['arma1_personagem2'] != $_SESSION['arma2_personagem2']){
                                    echo "<li>".$_SESSION['arma2_personagem2']."</li>";
                                }
                                echo "<h3><a href='trocar_itens.php?id=$id'>Trocar</a></h3>";
                            } else {
                                if(isset($tonfa) || isset($funda) || isset($livro_feiticos) || isset($lanterna)){
                                    
                                    echo "<form action='selec_eq.php' method='POST'>";

                                    echo "<h3>Armas de Uma Mão(Selecione duas das opções abaixo)</h3>";
                                        
                                    echo "<label for='adaga'>Adaga</label>";
                                    echo "<input type='checkbox' id='adaga' name='adaga'>";
                                    echo "<br>";
                                        
                                        if(isset($tonfa)){
                                            echo "<label for='tonfa'>Tonfa</label>";
                                            echo "<input type='checkbox' id='tonfa' name='tonfa'>";
                                            echo "<br>";
                                        }
                                        if(isset($funda)){
                                            echo "<label for='funda'>Funda</label>";
                                            echo "<input type='checkbox' id='funda' name='funda'>";
                                            echo "<br>";
                                        }
                                        if(isset($livro_feiticos)){
                                            echo "<label for='livro_feiticos'>Livro de Feitiços</label>";
                                            echo "<input type='checkbox' id='livro_feiticos' name='livro_feiticos'>";
                                            echo "<br>";
                                        }
                                        if(isset($lanterna)){
                                            echo "<label for='lanterna'>Lanterna</label>";
                                            echo "<input type='checkbox' id='lanterna' name='lanterna'>";
                                            echo "<br>";
                                        }
                                    echo "<input type='text' name='id2' value='$id_personagem2' hidden>";
                                    echo "<input type='submit' value='Equipar'>";
                                    echo "</form>";
                                } else {
                                    $_SESSION['arma1_personagem2'] = "Adaga";
                                    echo "<li>".$_SESSION['arma1_personagem2']."</li>";
                                    echo "<h3><a href='trocar_itens.php?id=$id'>Trocar</a></h3>";
                                }
                            }
                        } else if(isset($tonfa)){
                            if(isset($_SESSION['arma1_personagem2'])){
                                echo "<li>".$_SESSION['arma1_personagem2']."</li>";
                                if(isset($_SESSION['arma2_personagem2']) && $_SESSION['arma1_personagem2'] != $_SESSION['arma2_personagem2']){
                                    echo "<li>".$_SESSION['arma2_personagem2']."</li>";
                                }
                                echo "<h3><a href='trocar_itens.php?id=$id'>Trocar</a></h3>";
                            } else {
                                if(isset($funda) || isset($livro_feiticos) || isset($lanterna)){
                                    
                                    echo "<form action='selec_eq.php' method='POST'>";

                                    echo "<h3>Armas de Uma Mão(Selecione duas das opções abaixo)</h3>";
                                        
                                    echo "<label for='tonfa'>Tonfa</label>";
                                    echo "<input type='checkbox' id='tonfa' name='tonfa'>";
                                    echo "<br>";
                                        
                                        if(isset($funda)){
                                            echo "<label for='funda'>Funda</label>";
                                            echo "<input type='checkbox' id='funda' name='funda'>";
                                            echo "<br>";
                                        }
                                        if(isset($livro_feiticos)){
                                            echo "<label for='livro_feiticos'>Livro de Feitiços</label>";
                                            echo "<input type='checkbox' id='livro_feiticos' name='livro_feiticos'>";
                                            echo "<br>";
                                        }
                                        if(isset($lanterna)){
                                            echo "<label for='lanterna'>Lanterna</label>";
                                            echo "<input type='checkbox' id='lanterna' name='lanterna'>";
                                            echo "<br>";
                                        }
                                    echo "<input type='text' name='id2' value='$id_personagem2' hidden>";
                                    echo "<input type='submit' value='Equipar'>";
                                    echo "</form>";
                                } else {
                                    $_SESSION['arma1_personagem2'] = "Tonfa";
                                    echo "<li>".$_SESSION['arma1_personagem2']."</li>";
                                    echo "<h3><a href='trocar_itens.php?id=$id'>Trocar</a></h3>";
                                }
                            }
                        } else if(isset($livro_feiticos)){
                            if(isset($_SESSION['arma1_personagem2'])){
                                echo "<li>".$_SESSION['arma1_personagem2']."</li>";
                                if(isset($_SESSION['arma2_personagem2']) && $_SESSION['arma1_personagem2'] != $_SESSION['arma2_personagem2']){
                                    echo "<li>".$_SESSION['arma2_personagem2']."</li>";
                                }
                                echo "<h3><a href='trocar_itens.php?id=$id'>Trocar</a></h3>";
                            } else {
                                if(isset($funda) || isset($lanterna)){
                                    
                                    echo "<form action='selec_eq.php' method='POST'>";

                                    echo "<h3>Armas de Uma Mão(Selecione duas das opções abaixo)</h3>";
                                        
                                    echo "<label for='livro_feiticos'>Livro de Feitiços</label>";
                                    echo "<input type='checkbox' id='livro_feiticos' name='livro_feiticos'>";
                                    echo "<br>";
                                        
                                        if(isset($funda)){
                                            echo "<label for='funda'>Funda</label>";
                                            echo "<input type='checkbox' id='funda' name='funda'>";
                                            echo "<br>";
                                        }
                                        if(isset($lanterna)){
                                            echo "<label for='lanterna'>Lanterna</label>";
                                            echo "<input type='checkbox' id='lanterna' name='lanterna'>";
                                            echo "<br>";
                                        }
                                    echo "<input type='text' name='id2' value='$id_personagem2' hidden>";
                                    echo "<input type='submit' value='Equipar'>";
                                    echo "</form>";
                                } else {
                                    $_SESSION['arma1_personagem2'] = "Livro de Feitiços";
                                    echo "<li>".$_SESSION['arma1_personagem2']."</li>";
                                    echo "<h3><a href='trocar_itens.php?id=$id'>Trocar</a></h3>";
                                }
                            }
                        } else if(isset($funda)){
                            if(isset($_SESSION['arma1_personagem2'])){
                                echo "<li>".$_SESSION['arma1_personagem2']."</li>";
                                if(isset($_SESSION['arma2_personagem2']) && $_SESSION['arma1_personagem2'] != $_SESSION['arma2_personagem2']){
                                    echo "<li>".$_SESSION['arma2_personagem2']."</li>";
                                }
                                echo "<h3><a href='trocar_itens.php?id=$id'>Trocar</a></h3>";
                            } else {
                                if(isset($lanterna)){
                                    
                                    echo "<form action='selec_eq.php' method='POST'>";

                                    echo "<h3>Armas de Uma Mão(Selecione duas das opções abaixo)</h3>";
                                        
                                    echo "<label for='funda'>Funda</label>";
                                    echo "<input type='checkbox' id='funda' name='funda'>";
                                    echo "<br>";
                                    
                                    echo "<label for='lanterna'>Lanterna</label>";
                                    echo "<input type='checkbox' id='lanterna' name='lanterna'>";
                                    echo "<br>";

                                    echo "<input type='text' name='id2' value='$id_personagem2' hidden>";
                                    echo "<input type='submit' value='Equipar'>";
                                    echo "</form>";
                                        
                                } else {
                                    $_SESSION['arma1_personagem2'] = "Funda";
                                    echo "<li>".$_SESSION['arma1_personagem2']."</li>";
                                    echo "<h3><a href='trocar_itens.php?id=$id'>Trocar</a></h3>";
                                }
                            }
                        }
                    }
                    echo "</ul>";
                    echo "</td>";
                }

                $id_personagem3 = $id = $_SESSION['personagem3'];
                // limpando varáveis
                unset($armadura_malha);
                unset($armadura_aco);
                unset($espada_curta);
                unset($mangual);
                unset($escudo);
                unset($espada_curta_escudo);
                unset($mangual_escudo);
                unset($tonfa);
                unset($adaga);
                unset($espada_montante);
                unset($martelo_guerra);
                unset($arco);
                unset($funda);
                unset($livro_feiticos);
                unset($lanterna);

                $personagem = $repositorio->MostrarPersonagem($id);
                foreach ($personagem as $key) {
                    $nome = $key['nome'];
                    echo "<td style='border: solid 2px black'>";
                        $img = $key['img'];
                        echo "<img src='../../../$img'>";
                        echo "<h2>Nome: ".$key['nome'];
                        echo " - Classe: ".$key['classe']."</h2>";
                        echo "<h3>Equipamentos:</h3>";
                        echo "<ul>";
                    $inventario = $repositorio->MostrarInventario($nome);
                    foreach ($inventario as $item) {
                        // armaduras
                        if(in_array("armadura de malha",$item)){
                            $armadura_malha = true;
                            if(in_array("armadura de aço",$item)){
                                $armadura_aco = true;
                            }
                        } else if(in_array("armadura de aço",$item)){
                            $armadura_aco = true;
                        }

                        if(isset($armadura_malha) && isset($armadura_aco)){
                            if(isset($_SESSION['armadura_personagem3'])){
                                echo "<li>".$_SESSION['armadura_personagem3']."</li>";
                            } else {
                                echo "<h2>Escolher para utilizar:</h2>";
                                echo "<form action='selec_eq.php' method='POST'>";
                                    echo "<select name='armadura' id='armadura'>";
                                        echo "<option value='armadura de malha'>Armadura de Malha</option>";
                                        echo "<option value='armadura de aço'>Armadura de Aço</option>";
                                    echo "</select>";
                                    echo "<input type='text' name='id3' value='$id_personagem3' hidden>";
                                    echo "<input type='submit' value='Equipar'>";
                                    echo "<br>";
                                echo "<form>";
                            }
                        } else if(isset($armadura_malha)){
                            $_SESSION['armadura_personagem3'] = "armadura de malha";
                            echo "<li>".$_SESSION['armadura_personagem3']."</li>";
                        } else if(isset($armadura_aco)){
                            $_SESSION['armadura_personagem3'] = "armadura de aço";
                            echo "<li>".$_SESSION['armadura_personagem3']."</li>";
                        } else {
                            $_SESSION['armadura_personagem3'] = "N";
                            echo "<li>Esse personagem não possui nenhuma armadura</li>";
                        }

                        // armas
                        if(in_array("espada curta",$item)){
                            $espada_curta = true;
                        } 
                        if(in_array("mangual",$item)){
                            $mangual = true;
                        } 
                        if(in_array("escudo",$item)){
                            $escudo = true;
                        }
                        if(in_array("espada curta e escudo",$item)){
                            $espada_curta_escudo = true;
                        }
                        if(in_array("mangual e escudo",$item)){
                            $mangual_escudo = true;
                        }
                        if(in_array("adaga",$item)){
                            $adaga = true;
                        }  
                        if(in_array("tonfa",$item)){
                            $tonfa = true;
                        }  
                        if(in_array("espada montante",$item)){
                            $espada_montante = true;
                        } 
                        if(in_array("martelo de guerra",$item)){
                            $martelo_guerra = true;
                        } 
                        if(in_array("arco",$item)){
                            $arco = true;
                        } 
                        if(in_array("funda",$item)){
                            $funda = true;
                        } 
                        if(in_array("livro de feitiços",$item)){
                            $livro_feiticos = true;
                        }
                        if(in_array("lanterna",$item)){
                            $lanterna = true;
                        }

                        if(isset($espada_curta_escudo)){
                            if(isset($_SESSION['arma1_personagem3']) ){
                                echo "<li>".$_SESSION['arma1_personagem3']."</li>";
                                if(isset($_SESSION['arma2_personagem3']) && $_SESSION['arma1_personagem3'] != $_SESSION['arma2_personagem3']){
                                    echo "<li>".$_SESSION['arma2_personagem3']."</li>";
                                }
                                echo "<h3><a href='trocar_itens.php?id=$id'>Trocar</a></h3>";
                            } else {
                                if(isset($mangual_escudo) || isset($mangual) || isset($adaga) || isset($tonfa) || isset($espada_montante) || isset($martelo_guerra) || isset($arco) || isset($funda) || isset($lanterna)){
                                    echo "<form action='selec_eq.php' method='POST'>";

                                    if(isset($mangual_escudo) || isset($espada_montante) || isset($martelo_guerra) || isset($arco)){
                                        echo "<h3>Armas de Duas Mãos (Selecione apenas um)</h3>";
                                    
                                        echo "<label for='espada_curta_escudo'>Espada Curta e Escudo</label>";
                                        echo "<input type='checkbox' id='espada_curta_escudo' name='espada_curta_escudo'>";
                                        echo "<br>";

                                        if(isset($mangual_escudo)){
                                            echo "<label for='mangual_escudo'>Mangual e Escudo</label>";
                                            echo "<input type='checkbox' id='mangual_escudo' name='mangual_escudo'>";
                                            echo "<br>";
                                        }
                                        if(isset($espada_montante)){
                                            echo "<label for='espada_montante'>Espada Montante</label>";
                                            echo "<input type='checkbox' id='espada_montante' name='espada_montante'>";
                                            echo "<br>";
                                        }
                                        if(isset($martelo_guerra)){
                                            echo "<label for='martelo_guerra'>Martelo de Guerra</label>";
                                            echo "<input type='checkbox' id='martelo_guerra' name='martelo_guerra'>";
                                            echo "<br>";
                                        }
                                        if(isset($arco)){
                                            echo "<label for='arco'>Arco</label>";
                                            echo "<input type='checkbox' id='arco' name='arco'>";
                                            echo "<br>";
                                        }
                                    }

                                    if(isset($mangual) || isset($adaga) || isset($tonfa) || isset($funda)){
                                        echo "<h3>Armas de Uma Mão(Caso não tenha selecionado nenhuma arma de duas mãos, Selecione duas das opções abaixo.)</h3>";
                                        echo "<label for='espada_curta'>Espada Curta</label>";
                                        echo "<input type='checkbox' id='espada_curta' name='espada_curta'>";
                                        echo "<br>";
                                        echo "<label for='escudo'>Escudo</label>";
                                        echo "<input type='checkbox' id='escudo' name='escudo'>";
                                        echo "<br>";

                                        if(isset($mangual)){
                                            echo "<label for='mangual'>Mangual</label>";
                                            echo "<input type='checkbox' id='mangual' name='mangual'>";
                                            echo "<br>";
                                        }
                                        if(isset($adaga)){
                                            echo "<label for='adaga'>Adaga</label>";
                                            echo "<input type='checkbox' id='adaga' name='adaga'>";
                                            echo "<br>";
                                        }
                                        if(isset($tonfa)){
                                            echo "<label for='tonfa'>Tonfa</label>";
                                            echo "<input type='checkbox' id='tonfa' name='tonfa'>";
                                            echo "<br>";
                                        }
                                        if(isset($funda)){
                                            echo "<label for='funda'>Funda</label>";
                                            echo "<input type='checkbox' id='funda' name='funda'>";
                                            echo "<br>";
                                        }
                                        if(isset($lanterna)){
                                            echo "<label for='lanterna'>Lanterna</label>";
                                            echo "<input type='checkbox' id='lanterna' name='lanterna'>";
                                            echo "<br>";
                                        }
                                    }

                                    echo "<input type='text' name='id3' value='$id_personagem3' hidden>";
                                    echo "<input type='submit' value='Equipar'>";
                                    echo "</form>";
                                } else {
                                    $_SESSION['arma1_personagem3'] = "Espada Curta";
                                    $_SESSION['arma2_personagem3'] = "Escudo";
                                    echo "<li>".$_SESSION['arma1_personagem3']."</li>";
                                    echo "<li>".$_SESSION['arma2_personagem3']."</li>";
                                    echo "<h3><a href='trocar_itens.php?id=$id'>Trocar</a></h3>";
                                }
                            }
                        } else if(isset($mangual_escudo)){
                            if(isset($_SESSION['arma1_personagem3']) ){
                                echo "<li>".$_SESSION['arma1_personagem3']."</li>";
                                if(isset($_SESSION['arma2_personagem3']) && $_SESSION['arma1_personagem3'] != $_SESSION['arma2_personagem3']){
                                    echo "<li>".$_SESSION['arma2_personagem3']."</li>";
                                }
                                echo "<h3><a href='trocar_itens.php?id=$id'>Trocar</a></h3>";
                            } else {
                                if(isset($espada_curta) || isset($adaga) || isset($tonfa) || isset($espada_montante) || isset($martelo_guerra) || isset($arco) || isset($funda) || isset($lanterna)){
                                    echo "<form action='selec_eq.php' method='POST'>";

                                    if(isset($espada_montante) || isset($martelo_guerra) || isset($arco)){
                                        echo "<h3>Armas de Duas Mãos (Selecione apenas um)</h3>";
                                        
                                        echo "<label for='mangual_escudo'>Mangual e Escudo</label>";
                                        echo "<input type='checkbox' id='mangual_escudo' name='mangual_escudo'>";
                                        echo "<br>";

                                        if(isset($espada_montante)){
                                            echo "<label for='espada_montante'>Espada Montante</label>";
                                            echo "<input type='checkbox' id='espada_montante' name='espada_montante'>";
                                            echo "<br>";
                                        }
                                        if(isset($martelo_guerra)){
                                            echo "<label for='martelo_guerra'>Martelo de Guerra</label>";
                                            echo "<input type='checkbox' id='martelo_guerra' name='martelo_guerra'>";
                                            echo "<br>";
                                        }
                                        if(isset($arco)){
                                            echo "<label for='arco'>Arco</label>";
                                            echo "<input type='checkbox' id='arco' name='arco'>";
                                            echo "<br>";
                                        }
                                    }
                                    

                                    if(isset($espada_curta) || isset($adaga) || isset($tonfa) || isset($funda) || isset($lanterna)){
                                        echo "<h3>Armas de Uma Mão(Caso não tenha selecionado nenhuma arma de duas mãos, Selecione duas das opções abaixo.)</h3>";
                                        echo "<label for='mangual'>Mangual</label>";
                                        echo "<input type='checkbox' id='mangual' name='mangual'>";
                                        echo "<br>";
                                        echo "<label for='escudo'>Escudo</label>";
                                        echo "<input type='checkbox' id='escudo' name='escudo'>";
                                        echo "<br>";

                                        if(isset($espada_curta)){
                                            echo "<label for='espada_curta'>Espada Curta</label>";
                                            echo "<input type='checkbox' id='espada_curta' name='espada_curta'>";
                                            echo "<br>";
                                        }
                                        if(isset($adaga)){
                                            echo "<label for='adaga'>Adaga</label>";
                                            echo "<input type='checkbox' id='adaga' name='adaga'>";
                                            echo "<br>";
                                        }
                                        if(isset($tonfa)){
                                            echo "<label for='tonfa'>Tonfa</label>";
                                            echo "<input type='checkbox' id='tonfa' name='tonfa'>";
                                            echo "<br>";
                                        }
                                        if(isset($funda)){
                                            echo "<label for='funda'>Funda</label>";
                                            echo "<input type='checkbox' id='funda' name='funda'>";
                                            echo "<br>";
                                        }
                                        if(isset($lanterna)){
                                            echo "<label for='lanterna'>Lanterna</label>";
                                            echo "<input type='checkbox' id='lanterna' name='lanterna'>";
                                            echo "<br>";
                                        }
                                    }
                                    echo "<input type='text' name='id3' value='$id_personagem3' hidden>";
                                    echo "<input type='submit' value='Equipar'>";
                                    echo "</form>";
                                } else {
                                    $_SESSION['arma1_personagem3'] = "Mangual";
                                    $_SESSION['arma2_personagem3'] = "Escudo";
                                    echo "<li>".$_SESSION['arma1_personagem3']."</li>";
                                    echo "<li>".$_SESSION['arma2_personagem3']."</li>";
                                    echo "<h3><a href='trocar_itens.php?id=$id'>Trocar</a></h3>";
                                }
                            }
                        } else if(isset($espada_montante)){
                            if(isset($_SESSION['arma1_personagem3']) ){
                                echo "<li>".$_SESSION['arma1_personagem3']."</li>";
                                if(isset($_SESSION['arma2_personagem3']) && $_SESSION['arma1_personagem3'] != $_SESSION['arma2_personagem3']){
                                    echo "<li>".$_SESSION['arma2_personagem3']."</li>";
                                }
                                echo "<h3><a href='trocar_itens.php?id=$id'>Trocar</a></h3>";
                            } else {
                                if(isset($mangual) || isset($espada_curta) || isset($adaga) || isset($tonfa) || isset($martelo_guerra) || isset($arco) || isset($funda) || isset($lanterna)){
                                    echo "<form action='selec_eq.php' method='POST'>";

                                    echo "<br>";
                                    echo "<label for='espada_montante'>Espada Montante</label>";
                                    echo "<input type='checkbox' id='espada_montante' name='espada_montante'>";
                                    echo "<br>";
                                    
                                    if(isset($martelo_guerra) || isset($arco)){
                                        echo "<h3>Armas de Duas Mãos (Selecione apenas um)</h3>";

                                        if(isset($martelo_guerra)){
                                            echo "<label for='martelo_guerra'>Martelo de Guerra</label>";
                                            echo "<input type='checkbox' id='martelo_guerra' name='martelo_guerra'>";
                                            echo "<br>";
                                        }
                                        if(isset($arco)){
                                            echo "<label for='arco'>Arco</label>";
                                            echo "<input type='checkbox' id='arco' name='arco'>";
                                            echo "<br>";
                                        }
                                    }

                                    if(isset($espada_curta) || isset($adaga) || isset($tonfa) || isset($funda) || isset($lanterna)){
                                        echo "<h3>Armas de Uma Mão(Caso não tenha selecionado nenhuma arma de duas mãos, Selecione duas das opções abaixo.)</h3>";

                                        if(isset($espada_curta)){
                                            echo "<label for='espada_curta'>Espada Curta</label>";
                                            echo "<input type='checkbox' id='espada_curta' name='espada_curta'>";
                                            echo "<br>";
                                        }
                                        if(isset($adaga)){
                                            echo "<label for='adaga'>Adaga</label>";
                                            echo "<input type='checkbox' id='adaga' name='adaga'>";
                                            echo "<br>";
                                        }
                                        if(isset($tonfa)){
                                            echo "<label for='tonfa'>Tonfa</label>";
                                            echo "<input type='checkbox' id='tonfa' name='tonfa'>";
                                            echo "<br>";
                                        }
                                        if(isset($funda)){
                                            echo "<label for='funda'>Funda</label>";
                                            echo "<input type='checkbox' id='funda' name='funda'>";
                                            echo "<br>";
                                        }
                                        if(isset($lanterna)){
                                            echo "<label for='lanterna'>Lanterna</label>";
                                            echo "<input type='checkbox' id='lanterna' name='lanterna'>";
                                            echo "<br>";
                                        }
                                    }
                                    echo "<input type='text' name='id3' value='$id_personagem3' hidden>";
                                    echo "<input type='submit' value='Equipar'>";
                                    echo "</form>";
                                } else {
                                    $_SESSION['arma1_personagem3'] = "Espada Montante";
                                    $_SESSION['arma2_personagem3'] = "Espada Montante";
                                    echo "<li>".$_SESSION['arma1_personagem3']."</li>";
                                    echo "<h3><a href='trocar_itens.php?id=$id'>Trocar</a></h3>";
                                }
                            }
                        } else if(isset($martelo_guerra)){
                            if(isset($_SESSION['arma1_personagem3']) ){
                                echo "<li>".$_SESSION['arma1_personagem3']."</li>";
                                if(isset($_SESSION['arma2_personagem3']) && $_SESSION['arma1_personagem3'] != $_SESSION['arma2_personagem3']){
                                    echo "<li>".$_SESSION['arma2_personagem3']."</li>";
                                }
                                echo "<h3><a href='trocar_itens.php?id=$id'>Trocar</a></h3>";
                            } else {
                                if(isset($mangual) || isset($espada_curta) || isset($adaga) || isset($tonfa) || isset($arco) || isset($funda) || isset($lanterna)){
                                    echo "<form action='selec_eq.php' method='POST'>";

                                    echo "<br>";
                                    echo "<label for='martelo_guerra'>Martelo de Guerra</label>";
                                    echo "<input type='checkbox' id='martelo_guerra' name='martelo_guerra'>";
                                    echo "<br>";

                                    if(isset($arco)){
                                        echo "<h3>Armas de Duas Mãos (Selecione apenas um)</h3>";
                                    
                                        echo "<label for='arco'>Arco</label>";
                                        echo "<input type='checkbox' id='arco' name='arco'>";
                                        echo "<br>";
                                    }

                                    if(isset($espada_curta) || isset($adaga) || isset($tonfa) || isset($funda) || isset($lanterna)){
                                        echo "<h3>Armas de Uma Mão(Caso não tenha selecionado nenhuma arma de duas mãos, Selecione duas das opções abaixo.)</h3>";

                                        if(isset($espada_curta)){
                                            echo "<label for='espada_curta'>Espada Curta</label>";
                                            echo "<input type='checkbox' id='espada_curta' name='espada_curta'>";
                                            echo "<br>";
                                        }
                                        if(isset($adaga)){
                                            echo "<label for='adaga'>Adaga</label>";
                                            echo "<input type='checkbox' id='adaga' name='adaga'>";
                                            echo "<br>";
                                        }
                                        if(isset($tonfa)){
                                            echo "<label for='tonfa'>Tonfa</label>";
                                            echo "<input type='checkbox' id='tonfa' name='tonfa'>";
                                            echo "<br>";
                                        }
                                        if(isset($funda)){
                                            echo "<label for='funda'>Funda</label>";
                                            echo "<input type='checkbox' id='funda' name='funda'>";
                                            echo "<br>";
                                        }
                                        if(isset($lanterna)){
                                            echo "<label for='lanterna'>Lanterna</label>";
                                            echo "<input type='checkbox' id='lanterna' name='lanterna'>";
                                            echo "<br>";
                                        }
                                    }
                                    echo "<input type='text' name='id3' value='$id_personagem3' hidden>";
                                    echo "<input type='submit' value='Equipar'>";
                                    echo "</form>";
                                } else {
                                    $_SESSION['arma1_personagem3'] = "Martelo de Guerra";
                                    $_SESSION['arma2_personagem3'] = "Martelo de Guerra";
                                    echo "<li>".$_SESSION['arma1_personagem3']."</li>";
                                    echo "<h3><a href='trocar_itens.php?id=$id'>Trocar</a></h3>";
                                }
                            }
                        } else if(isset($arco)){
                            if(isset($_SESSION['arma1_personagem3']) ){
                                echo "<li>".$_SESSION['arma1_personagem3']."</li>";
                                if(isset($_SESSION['arma2_personagem3']) && $_SESSION['arma1_personagem3'] != $_SESSION['arma2_personagem3']){
                                    echo "<li>".$_SESSION['arma2_personagem3']."</li>";
                                }
                                echo "<h3><a href='trocar_itens.php?id=$id'>Trocar</a></h3>";
                            } else {
                                if(isset($mangual) || isset($espada_curta) || isset($adaga) || isset($tonfa) || isset($funda) || isset($lanterna)){
                                    echo "<h3>O arco conta como arma de duas mãos, então caso selecione ele não poderá equipar mais nenhuma arma!!!</h3>";

                                    echo "<form action='selec_eq.php' method='POST'>";

                                    echo "<label for='arco'>Arco</label>";
                                    echo "<input type='checkbox' id='arco' name='arco'>";
                                    echo "<br>";

                                    echo "<h3>Armas de Uma Mão(Caso não tenha selecionado nenhuma arma de duas mãos, Selecione duas das opções abaixo.)</h3>";

                                        if(isset($espada_curta)){
                                            echo "<label for='espada_curta'>Espada Curta</label>";
                                            echo "<input type='checkbox' id='espada_curta' name='espada_curta'>";
                                            echo "<br>";
                                        }
                                        if(isset($adaga)){
                                            echo "<label for='adaga'>Adaga</label>";
                                            echo "<input type='checkbox' id='adaga' name='adaga'>";
                                            echo "<br>";
                                        }
                                        if(isset($tonfa)){
                                            echo "<label for='tonfa'>Tonfa</label>";
                                            echo "<input type='checkbox' id='tonfa' name='tonfa'>";
                                            echo "<br>";
                                        }
                                        if(isset($funda)){
                                            echo "<label for='funda'>Funda</label>";
                                            echo "<input type='checkbox' id='funda' name='funda'>";
                                            echo "<br>";
                                        }
                                        if(isset($lanterna)){
                                            echo "<label for='lanterna'>Lanterna</label>";
                                            echo "<input type='checkbox' id='lanterna' name='lanterna'>";
                                            echo "<br>";
                                        }
                                    echo "<input type='text' name='id3' value='$id_personagem3' hidden>";
                                    echo "<input type='submit' value='Equipar'>";
                                    echo "</form>";
                                } else {
                                    $_SESSION['arma1_personagem3'] = "Arco";
                                    $_SESSION['arma2_personagem3'] = "Arco";
                                    echo "<li>".$_SESSION['arma1_personagem3']."</li>";
                                    echo "<h3><a href='trocar_itens.php?id=$id'>Trocar</a></h3>";
                                }
                            }
                        } else if(isset($mangual)){
                            if(isset($_SESSION['arma1_personagem3'])){
                                echo "<li>".$_SESSION['arma1_personagem3']."</li>";
                                if(isset($_SESSION['arma2_personagem3']) && $_SESSION['arma1_personagem3'] != $_SESSION['arma2_personagem3']){
                                    echo "<li>".$_SESSION['arma2_personagem3']."</li>";
                                }
                                echo "<h3><a href='trocar_itens.php?id=$id'>Trocar</a></h3>";
                            } else {
                                if(isset($espada_curta) || isset($adaga) || isset($tonfa) || isset($funda) || isset($lanterna)){
                                    
                                    echo "<form action='selec_eq.php' method='POST'>";

                                    echo "<h3>Armas de Uma Mão(Selecione duas das opções abaixo)</h3>";

                                    echo "<label for='mangual'>Mangual</label>";
                                    echo "<input type='checkbox' id='mangual' name='mangual'>";
                                    echo "<br>";

                                        if(isset($espada_curta)){
                                            echo "<label for='espada_curta'>Espada Curta</label>";
                                            echo "<input type='checkbox' id='espada_curta' name='espada_curta'>";
                                            echo "<br>";
                                        }
                                        if(isset($adaga)){
                                            echo "<label for='adaga'>Adaga</label>";
                                            echo "<input type='checkbox' id='adaga' name='adaga'>";
                                            echo "<br>";
                                        }
                                        if(isset($tonfa)){
                                            echo "<label for='tonfa'>Tonfa</label>";
                                            echo "<input type='checkbox' id='tonfa' name='tonfa'>";
                                            echo "<br>";
                                        }
                                        if(isset($funda)){
                                            echo "<label for='funda'>Funda</label>";
                                            echo "<input type='checkbox' id='funda' name='funda'>";
                                            echo "<br>";
                                        }
                                        if(isset($lanterna)){
                                            echo "<label for='lanterna'>Lanterna</label>";
                                            echo "<input type='checkbox' id='lanterna' name='lanterna'>";
                                            echo "<br>";
                                        }
                                    echo "<input type='text' name='id3' value='$id_personagem3' hidden>";
                                    echo "<input type='submit' value='Equipar'>";
                                    echo "</form>";
                                } else {
                                    $_SESSION['arma1_personagem3'] = "Mangual";
                                    echo "<li>".$_SESSION['arma1_personagem3']."</li>";
                                    echo "<h3><a href='trocar_itens.php?id=$id'>Trocar</a></h3>";
                                }
                            }
                        } else if(isset($espada_curta)){
                            if(isset($_SESSION['arma1_personagem3'])){
                                echo "<li>".$_SESSION['arma1_personagem3']."</li>";
                                if(isset($_SESSION['arma2_personagem3']) && $_SESSION['arma1_personagem3'] != $_SESSION['arma2_personagem3']){
                                    echo "<li>".$_SESSION['arma2_personagem3']."</li>";
                                }
                                echo "<h3><a href='trocar_itens.php?id=$id'>Trocar</a></h3>";
                            } else {
                                if(isset($adaga) || isset($tonfa) || isset($funda) || isset($lanterna)){
                                    
                                    echo "<form action='selec_eq.php' method='POST'>";

                                    echo "<h3>Armas de Uma Mão(Selecione duas das opções abaixo)</h3>";

                                    echo "<label for='espada_curta'>Espada Curta</label>";
                                    echo "<input type='checkbox' id='espada_curta' name='espada_curta'>";
                                    echo "<br>";
                                        
                                        if(isset($adaga)){
                                            echo "<label for='adaga'>Adaga</label>";
                                            echo "<input type='checkbox' id='adaga' name='adaga'>";
                                            echo "<br>";
                                        }
                                        if(isset($tonfa)){
                                            echo "<label for='tonfa'>Tonfa</label>";
                                            echo "<input type='checkbox' id='tonfa' name='tonfa'>";
                                            echo "<br>";
                                        }
                                        if(isset($funda)){
                                            echo "<label for='funda'>Funda</label>";
                                            echo "<input type='checkbox' id='funda' name='funda'>";
                                            echo "<br>";
                                        }
                                        if(isset($lanterna)){
                                            echo "<label for='lanterna'>Lanterna</label>";
                                            echo "<input type='checkbox' id='lanterna' name='lanterna'>";
                                            echo "<br>";
                                        }
                                    echo "<input type='text' name='id3' value='$id_personagem3' hidden>";
                                    echo "<input type='submit' value='Equipar'>";
                                    echo "</form>";
                                } else {
                                    $_SESSION['arma1_personagem3'] = "Espada Curta";
                                    echo "<li>".$_SESSION['arma1_personagem3']."</li>";
                                    echo "<h3><a href='trocar_itens.php?id=$id'>Trocar</a></h3>";
                                }
                            }
                        } else if(isset($adaga)){
                            if(isset($_SESSION['arma1_personagem3'])){
                                echo "<li>".$_SESSION['arma1_personagem3']."</li>";
                                if(isset($_SESSION['arma2_personagem3']) && $_SESSION['arma1_personagem3'] != $_SESSION['arma2_personagem3']){
                                    echo "<li>".$_SESSION['arma2_personagem3']."</li>";
                                }
                                echo "<h3><a href='trocar_itens.php?id=$id'>Trocar</a></h3>";
                            } else {
                                if(isset($tonfa) || isset($funda) || isset($livro_feiticos) || isset($lanterna)){
                                    
                                    echo "<form action='selec_eq.php' method='POST'>";

                                    echo "<h3>Armas de Uma Mão(Selecione duas das opções abaixo)</h3>";
                                        
                                    echo "<label for='adaga'>Adaga</label>";
                                    echo "<input type='checkbox' id='adaga' name='adaga'>";
                                    echo "<br>";
                                        
                                        if(isset($tonfa)){
                                            echo "<label for='tonfa'>Tonfa</label>";
                                            echo "<input type='checkbox' id='tonfa' name='tonfa'>";
                                            echo "<br>";
                                        }
                                        if(isset($funda)){
                                            echo "<label for='funda'>Funda</label>";
                                            echo "<input type='checkbox' id='funda' name='funda'>";
                                            echo "<br>";
                                        }
                                        if(isset($livro_feiticos)){
                                            echo "<label for='livro_feiticos'>Livro de Feitiços</label>";
                                            echo "<input type='checkbox' id='livro_feiticos' name='livro_feiticos'>";
                                            echo "<br>";
                                        }
                                        if(isset($lanterna)){
                                            echo "<label for='lanterna'>Lanterna</label>";
                                            echo "<input type='checkbox' id='lanterna' name='lanterna'>";
                                            echo "<br>";
                                        }
                                    echo "<input type='text' name='id3' value='$id_personagem3' hidden>";
                                    echo "<input type='submit' value='Equipar'>";
                                    echo "</form>";
                                } else {
                                    $_SESSION['arma1_personagem3'] = "Adaga";
                                    echo "<li>".$_SESSION['arma1_personagem3']."</li>";
                                    echo "<h3><a href='trocar_itens.php?id=$id'>Trocar</a></h3>";
                                }
                            }
                        } else if(isset($tonfa)){
                            if(isset($_SESSION['arma1_personagem3'])){
                                echo "<li>".$_SESSION['arma1_personagem3']."</li>";
                                if(isset($_SESSION['arma2_personagem3']) && $_SESSION['arma1_personagem3'] != $_SESSION['arma2_personagem3']){
                                    echo "<li>".$_SESSION['arma2_personagem3']."</li>";
                                }
                                echo "<h3><a href='trocar_itens.php?id=$id'>Trocar</a></h3>";
                            } else {
                                if(isset($funda) || isset($livro_feiticos) || isset($lanterna)){
                                    
                                    echo "<form action='selec_eq.php' method='POST'>";

                                    echo "<h3>Armas de Uma Mão(Selecione duas das opções abaixo)</h3>";
                                        
                                    echo "<label for='tonfa'>Tonfa</label>";
                                    echo "<input type='checkbox' id='tonfa' name='tonfa'>";
                                    echo "<br>";
                                        
                                        if(isset($funda)){
                                            echo "<label for='funda'>Funda</label>";
                                            echo "<input type='checkbox' id='funda' name='funda'>";
                                            echo "<br>";
                                        }
                                        if(isset($livro_feiticos)){
                                            echo "<label for='livro_feiticos'>Livro de Feitiços</label>";
                                            echo "<input type='checkbox' id='livro_feiticos' name='livro_feiticos'>";
                                            echo "<br>";
                                        }
                                        if(isset($lanterna)){
                                            echo "<label for='lanterna'>Lanterna</label>";
                                            echo "<input type='checkbox' id='lanterna' name='lanterna'>";
                                            echo "<br>";
                                        }
                                    echo "<input type='text' name='id3' value='$id_personagem3' hidden>";
                                    echo "<input type='submit' value='Equipar'>";
                                    echo "</form>";
                                } else {
                                    $_SESSION['arma1_personagem3'] = "Tonfa";
                                    echo "<li>".$_SESSION['arma1_personagem3']."</li>";
                                    echo "<h3><a href='trocar_itens.php?id=$id'>Trocar</a></h3>";
                                }
                            }
                        } else if(isset($livro_feiticos)){
                            if(isset($_SESSION['arma1_personagem3'])){
                                echo "<li>".$_SESSION['arma1_personagem3']."</li>";
                                if(isset($_SESSION['arma2_personagem3']) && $_SESSION['arma1_personagem3'] != $_SESSION['arma2_personagem3']){
                                    echo "<li>".$_SESSION['arma2_personagem3']."</li>";
                                }
                                echo "<h3><a href='trocar_itens.php?id=$id'>Trocar</a></h3>";
                            } else {
                                if(isset($funda) || isset($lanterna)){
                                    
                                    echo "<form action='selec_eq.php' method='POST'>";

                                    echo "<h3>Armas de Uma Mão(Selecione duas das opções abaixo)</h3>";
                                        
                                    echo "<label for='livro_feiticos'>Livro de Feitiços</label>";
                                    echo "<input type='checkbox' id='livro_feiticos' name='livro_feiticos'>";
                                    echo "<br>";
                                        
                                        if(isset($funda)){
                                            echo "<label for='funda'>Funda</label>";
                                            echo "<input type='checkbox' id='funda' name='funda'>";
                                            echo "<br>";
                                        }
                                        if(isset($lanterna)){
                                            echo "<label for='lanterna'>Lanterna</label>";
                                            echo "<input type='checkbox' id='lanterna' name='lanterna'>";
                                            echo "<br>";
                                        }
                                        echo "<input type='text' name='id3' value='$id_personagem3' hidden>";
                                        echo "<input type='submit' value='Equipar'>";
                                        echo "</form>";
                                } else {
                                    $_SESSION['arma1_personagem3'] = "Livro de Feitiços";
                                    echo "<li>".$_SESSION['arma1_personagem3']."</li>";
                                    echo "<h3><a href='trocar_itens.php?id=$id'>Trocar</a></h3>";
                                }
                            }
                        } else if(isset($funda)){
                            if(isset($_SESSION['arma1_personagem3'])){
                                echo "<li>".$_SESSION['arma1_personagem3']."</li>";
                                if(isset($_SESSION['arma2_personagem3']) && $_SESSION['arma1_personagem3'] != $_SESSION['arma2_personagem3']){
                                    echo "<li>".$_SESSION['arma2_personagem3']."</li>";
                                }
                                echo "<h3><a href='trocar_itens.php?id=$id'>Trocar</a></h3>";
                            } else {
                                if(isset($lanterna)){
                                    
                                    echo "<form action='selec_eq.php' method='POST'>";

                                    echo "<h3>Armas de Uma Mão(Selecione duas das opções abaixo)</h3>";
                                        
                                    echo "<label for='funda'>Funda</label>";
                                    echo "<input type='checkbox' id='funda' name='funda'>";
                                    echo "<br>";
                                    
                                    echo "<label for='lanterna'>Lanterna</label>";
                                    echo "<input type='checkbox' id='lanterna' name='lanterna'>";
                                    echo "<br>";

                                    echo "<input type='text' name='id3' value='$id_personagem3' hidden>";
                                    echo "<input type='submit' value='Equipar'>";
                                    echo "</form>";
                                        
                                } else {
                                    $_SESSION['arma1_personagem3'] = "Funda";
                                    echo "<li>".$_SESSION['arma1_personagem3']."</li>";
                                    echo "<h3><a href='trocar_itens.php?id=$id'>Trocar</a></h3>";
                                }
                            }
                        }
                    }
                    echo "</ul>";
                    echo "</td>";
                }

                $id_personagem4 = $id = $_SESSION['personagem4'];
                // limpando varáveis
                unset($armadura_malha);
                unset($armadura_aco);
                unset($espada_curta);
                unset($mangual);
                unset($escudo);
                unset($espada_curta_escudo);
                unset($mangual_escudo);
                unset($tonfa);
                unset($adaga);
                unset($espada_montante);
                unset($martelo_guerra);
                unset($arco);
                unset($funda);
                unset($livro_feiticos);
                unset($lanterna);

                $personagem = $repositorio->MostrarPersonagem($id);
                foreach ($personagem as $key) {
                    $nome = $key['nome'];
                    echo "<td style='border: solid 2px black'>";
                        $img = $key['img'];
                        echo "<img src='../../../$img'>";
                        echo "<h2>Nome: ".$key['nome'];
                        echo " - Classe: ".$key['classe']."</h2>";
                        echo "<h3>Equipamentos:</h3>";
                        echo "<ul>";
                    $inventario = $repositorio->MostrarInventario($nome);
                    foreach ($inventario as $item) {
                        // armaduras
                        if(in_array("armadura de malha",$item)){
                            $armadura_malha = true;
                            if(in_array("armadura de aço",$item)){
                                $armadura_aco = true;
                            }
                        } else if(in_array("armadura de aço",$item)){
                            $armadura_aco = true;
                        }

                        if(isset($armadura_malha) && isset($armadura_aco)){
                            if(isset($_SESSION['armadura_personagem4'])){
                                echo "<li>".$_SESSION['armadura_personagem4']."</li>";
                            } else {
                                echo "<h2>Escolher para utilizar:</h2>";
                                echo "<form action='selec_eq.php' method='POST'>";
                                    echo "<select name='armadura' id='armadura'>";
                                        echo "<option value='armadura de malha'>Armadura de Malha</option>";
                                        echo "<option value='armadura de aço'>Armadura de Aço</option>";
                                    echo "</select>";
                                    echo "<input type='text' name='id4' value='$id_personagem4' hidden>";
                                    echo "<input type='submit' value='Equipar'>";
                                    echo "<br>";
                                echo "<form>";
                            }
                        } else if(isset($armadura_malha)){
                            $_SESSION['armadura_personagem4'] = "armadura de malha";
                            echo "<li>".$_SESSION['armadura_personagem4']."</li>";
                        } else if(isset($armadura_aco)){
                            $_SESSION['armadura_personagem4'] = "armadura de aço";
                            echo "<li>".$_SESSION['armadura_personagem4']."</li>";
                        } else {
                            $_SESSION['armadura_personagem4'] = "N";
                            echo "<li>Esse personagem não possui nenhuma armadura</li>";
                        }

                        // armas
                        if(in_array("espada curta",$item)){
                            $espada_curta = true;
                        } 
                        if(in_array("mangual",$item)){
                            $mangual = true;
                        } 
                        if(in_array("escudo",$item)){
                            $escudo = true;
                        }
                        if(in_array("espada curta e escudo",$item)){
                            $espada_curta_escudo = true;
                        }
                        if(in_array("mangual e escudo",$item)){
                            $mangual_escudo = true;
                        }
                        if(in_array("adaga",$item)){
                            $adaga = true;
                        }  
                        if(in_array("tonfa",$item)){
                            $tonfa = true;
                        }  
                        if(in_array("espada montante",$item)){
                            $espada_montante = true;
                        } 
                        if(in_array("martelo de guerra",$item)){
                            $martelo_guerra = true;
                        } 
                        if(in_array("arco",$item)){
                            $arco = true;
                        } 
                        if(in_array("funda",$item)){
                            $funda = true;
                        } 
                        if(in_array("livro de feitiços",$item)){
                            $livro_feiticos = true;
                        }
                        if(in_array("lanterna",$item)){
                            $lanterna = true;
                        }

                        if(isset($espada_curta_escudo)){
                            if(isset($_SESSION['arma1_personagem4']) ){
                                echo "<li>".$_SESSION['arma1_personagem4']."</li>";
                                if(isset($_SESSION['arma2_personagem4']) && $_SESSION['arma1_personagem4'] != $_SESSION['arma2_personagem4']){
                                    echo "<li>".$_SESSION['arma2_personagem4']."</li>";
                                }
                                echo "<h3><a href='trocar_itens.php?id=$id'>Trocar</a></h3>";
                            } else {
                                if(isset($mangual_escudo) || isset($mangual) || isset($adaga) || isset($tonfa) || isset($espada_montante) || isset($martelo_guerra) || isset($arco) || isset($funda) || isset($lanterna)){
                                    echo "<form action='selec_eq.php' method='POST'>";

                                    if(isset($mangual_escudo) || isset($espada_montante) || isset($martelo_guerra) || isset($arco)){
                                        echo "<h3>Armas de Duas Mãos (Selecione apenas um)</h3>";
                                    
                                        echo "<label for='espada_curta_escudo'>Espada Curta e Escudo</label>";
                                        echo "<input type='checkbox' id='espada_curta_escudo' name='espada_curta_escudo'>";
                                        echo "<br>";

                                        if(isset($mangual_escudo)){
                                            echo "<label for='mangual_escudo'>Mangual e Escudo</label>";
                                            echo "<input type='checkbox' id='mangual_escudo' name='mangual_escudo'>";
                                            echo "<br>";
                                        }
                                        if(isset($espada_montante)){
                                            echo "<label for='espada_montante'>Espada Montante</label>";
                                            echo "<input type='checkbox' id='espada_montante' name='espada_montante'>";
                                            echo "<br>";
                                        }
                                        if(isset($martelo_guerra)){
                                            echo "<label for='martelo_guerra'>Martelo de Guerra</label>";
                                            echo "<input type='checkbox' id='martelo_guerra' name='martelo_guerra'>";
                                            echo "<br>";
                                        }
                                        if(isset($arco)){
                                            echo "<label for='arco'>Arco</label>";
                                            echo "<input type='checkbox' id='arco' name='arco'>";
                                            echo "<br>";
                                        }
                                    }

                                    if(isset($mangual) || isset($adaga) || isset($tonfa) || isset($funda)){
                                        echo "<h3>Armas de Uma Mão(Caso não tenha selecionado nenhuma arma de duas mãos, Selecione duas das opções abaixo.)</h3>";
                                        echo "<label for='espada_curta'>Espada Curta</label>";
                                        echo "<input type='checkbox' id='espada_curta' name='espada_curta'>";
                                        echo "<br>";
                                        echo "<label for='escudo'>Escudo</label>";
                                        echo "<input type='checkbox' id='escudo' name='escudo'>";
                                        echo "<br>";

                                        if(isset($mangual)){
                                            echo "<label for='mangual'>Mangual</label>";
                                            echo "<input type='checkbox' id='mangual' name='mangual'>";
                                            echo "<br>";
                                        }
                                        if(isset($adaga)){
                                            echo "<label for='adaga'>Adaga</label>";
                                            echo "<input type='checkbox' id='adaga' name='adaga'>";
                                            echo "<br>";
                                        }
                                        if(isset($tonfa)){
                                            echo "<label for='tonfa'>Tonfa</label>";
                                            echo "<input type='checkbox' id='tonfa' name='tonfa'>";
                                            echo "<br>";
                                        }
                                        if(isset($funda)){
                                            echo "<label for='funda'>Funda</label>";
                                            echo "<input type='checkbox' id='funda' name='funda'>";
                                            echo "<br>";
                                        }
                                        if(isset($lanterna)){
                                            echo "<label for='lanterna'>Lanterna</label>";
                                            echo "<input type='checkbox' id='lanterna' name='lanterna'>";
                                            echo "<br>";
                                        }
                                    }

                                    echo "<input type='text' name='id4' value='$id_personagem4' hidden>";
                                    echo "<input type='submit' value='Equipar'>";
                                    echo "</form>";
                                } else {
                                    $_SESSION['arma1_personagem4'] = "Espada Curta";
                                    $_SESSION['arma2_personagem4'] = "Escudo";
                                    echo "<li>".$_SESSION['arma1_personagem4']."</li>";
                                    echo "<li>".$_SESSION['arma2_personagem4']."</li>";
                                    echo "<h3><a href='trocar_itens.php?id=$id'>Trocar</a></h3>";
                                }
                            }
                        } else if(isset($mangual_escudo)){
                            if(isset($_SESSION['arma1_personagem4']) ){
                                echo "<li>".$_SESSION['arma1_personagem4']."</li>";
                                if(isset($_SESSION['arma2_personagem4']) && $_SESSION['arma1_personagem4'] != $_SESSION['arma2_personagem4']){
                                    echo "<li>".$_SESSION['arma2_personagem4']."</li>";
                                }
                                echo "<h3><a href='trocar_itens.php?id=$id'>Trocar</a></h3>";
                            } else {
                                if(isset($espada_curta) || isset($adaga) || isset($tonfa) || isset($espada_montante) || isset($martelo_guerra) || isset($arco) || isset($funda) || isset($lanterna)){
                                    echo "<form action='selec_eq.php' method='POST'>";

                                    if(isset($espada_montante) || isset($martelo_guerra) || isset($arco)){
                                        echo "<h3>Armas de Duas Mãos (Selecione apenas um)<h3>";
                                        
                                        echo "<label for='mangual_escudo'>Mangual e Escudo</label>";
                                        echo "<input type='checkbox' id='mangual_escudo' name='mangual_escudo'>";
                                        echo "<br>";

                                        if(isset($espada_montante)){
                                            echo "<label for='espada_montante'>Espada Montante</label>";
                                            echo "<input type='checkbox' id='espada_montante' name='espada_montante'>";
                                            echo "<br>";
                                        }
                                        if(isset($martelo_guerra)){
                                            echo "<label for='martelo_guerra'>Martelo de Guerra</label>";
                                            echo "<input type='checkbox' id='martelo_guerra' name='martelo_guerra'>";
                                            echo "<br>";
                                        }
                                        if(isset($arco)){
                                            echo "<label for='arco'>Arco</label>";
                                            echo "<input type='checkbox' id='arco' name='arco'>";
                                            echo "<br>";
                                        }
                                    }
                                    

                                    if(isset($espada_curta) || isset($adaga) || isset($tonfa) || isset($funda) || isset($lanterna)){
                                        echo "<h3>Armas de Uma Mão(Caso não tenha selecionado nenhuma arma de duas mãos, Selecione duas das opções abaixo.)</h3>";
                                        echo "<label for='mangual'>Mangual</label>";
                                        echo "<input type='checkbox' id='mangual' name='mangual'>";
                                        echo "<br>";
                                        echo "<label for='escudo'>Escudo</label>";
                                        echo "<input type='checkbox' id='escudo' name='escudo'>";
                                        echo "<br>";

                                        if(isset($espada_curta)){
                                            echo "<label for='espada_curta'>Espada Curta</label>";
                                            echo "<input type='checkbox' id='espada_curta' name='espada_curta'>";
                                            echo "<br>";
                                        }
                                        if(isset($adaga)){
                                            echo "<label for='adaga'>Adaga</label>";
                                            echo "<input type='checkbox' id='adaga' name='adaga'>";
                                            echo "<br>";
                                        }
                                        if(isset($tonfa)){
                                            echo "<label for='tonfa'>Tonfa</label>";
                                            echo "<input type='checkbox' id='tonfa' name='tonfa'>";
                                            echo "<br>";
                                        }
                                        if(isset($funda)){
                                            echo "<label for='funda'>Funda</label>";
                                            echo "<input type='checkbox' id='funda' name='funda'>";
                                            echo "<br>";
                                        }
                                        if(isset($lanterna)){
                                            echo "<label for='lanterna'>Lanterna</label>";
                                            echo "<input type='checkbox' id='lanterna' name='lanterna'>";
                                            echo "<br>";
                                        }
                                    }
                                    echo "<input type='text' name='id4' value='$id_personagem4' hidden>";
                                    echo "<input type='submit' value='Equipar'>";
                                    echo "</form>";
                                } else {
                                    $_SESSION['arma1_personagem4'] = "Mangual";
                                    $_SESSION['arma2_personagem4'] = "Escudo";
                                    echo "<li>".$_SESSION['arma1_personagem4']."</li>";
                                    echo "<li>".$_SESSION['arma2_personagem4']."</li>";
                                    echo "<h3><a href='trocar_itens.php?id=$id'>Trocar</a></h3>";
                                }
                            }
                        } else if(isset($espada_montante)){
                            if(isset($_SESSION['arma1_personagem4']) ){
                                echo "<li>".$_SESSION['arma1_personagem4']."</li>";
                                if(isset($_SESSION['arma2_personagem4']) && $_SESSION['arma1_personagem4'] != $_SESSION['arma2_personagem4']){
                                    echo "<li>".$_SESSION['arma2_personagem4']."</li>";
                                }
                                echo "<h3><a href='trocar_itens.php?id=$id'>Trocar</a></h3>";
                            } else {
                                if(isset($mangual) || isset($espada_curta) || isset($adaga) || isset($tonfa) || isset($martelo_guerra) || isset($arco) || isset($funda) || isset($lanterna)){
                                    echo "<form action='selec_eq.php' method='POST'>";

                                    echo "<br>";
                                    echo "<label for='espada_montante'>Espada Montante</label>";
                                    echo "<input type='checkbox' id='espada_montante' name='espada_montante'>";
                                    echo "<br>";
                                    
                                    if(isset($martelo_guerra) || isset($arco)){
                                        echo "<h3>Armas de Duas Mãos (Selecione apenas um)</h3>";

                                        if(isset($martelo_guerra)){
                                            echo "<label for='martelo_guerra'>Martelo de Guerra</label>";
                                            echo "<input type='checkbox' id='martelo_guerra' name='martelo_guerra'>";
                                            echo "<br>";
                                        }
                                        if(isset($arco)){
                                            echo "<label for='arco'>Arco</label>";
                                            echo "<input type='checkbox' id='arco' name='arco'>";
                                            echo "<br>";
                                        }
                                    }

                                    if(isset($espada_curta) || isset($adaga) || isset($tonfa) || isset($funda) || isset($lanterna)){
                                        echo "<h3>Armas de Uma Mão(Caso não tenha selecionado nenhuma arma de duas mãos, Selecione duas das opções abaixo.)</h3>";

                                        if(isset($espada_curta)){
                                            echo "<label for='espada_curta'>Espada Curta</label>";
                                            echo "<input type='checkbox' id='espada_curta' name='espada_curta'>";
                                            echo "<br>";
                                        }
                                        if(isset($adaga)){
                                            echo "<label for='adaga'>Adaga</label>";
                                            echo "<input type='checkbox' id='adaga' name='adaga'>";
                                            echo "<br>";
                                        }
                                        if(isset($tonfa)){
                                            echo "<label for='tonfa'>Tonfa</label>";
                                            echo "<input type='checkbox' id='tonfa' name='tonfa'>";
                                            echo "<br>";
                                        }
                                        if(isset($funda)){
                                            echo "<label for='funda'>Funda</label>";
                                            echo "<input type='checkbox' id='funda' name='funda'>";
                                            echo "<br>";
                                        }
                                        if(isset($lanterna)){
                                            echo "<label for='lanterna'>Lanterna</label>";
                                            echo "<input type='checkbox' id='lanterna' name='lanterna'>";
                                            echo "<br>";
                                        }
                                    }
                                    echo "<input type='text' name='id4' value='$id_personagem4' hidden>";
                                    echo "<input type='submit' value='Equipar'>";
                                    echo "</form>";
                                } else {
                                    $_SESSION['arma1_personagem4'] = "Espada Montante";
                                    $_SESSION['arma2_personagem4'] = "Espada Montante";
                                    echo "<li>".$_SESSION['arma1_personagem4']."</li>";
                                    echo "<h3><a href='trocar_itens.php?id=$id'>Trocar</a></h3>";
                                }
                            }
                        } else if(isset($martelo_guerra)){
                            if(isset($_SESSION['arma1_personagem4']) ){
                                echo "<li>".$_SESSION['arma1_personagem4']."</li>";
                                if(isset($_SESSION['arma2_personagem4']) && $_SESSION['arma1_personagem4'] != $_SESSION['arma2_personagem4']){
                                    echo "<li>".$_SESSION['arma2_personagem4']."</li>";
                                }
                                echo "<h3><a href='trocar_itens.php?id=$id'>Trocar</a></h3>";
                            } else {
                                if(isset($mangual) || isset($espada_curta) || isset($adaga) || isset($tonfa) || isset($arco) || isset($funda) || isset($lanterna)){
                                    echo "<form action='selec_eq.php' method='POST'>";

                                    echo "<br>";
                                    echo "<label for='martelo_guerra'>Martelo de Guerra</label>";
                                    echo "<input type='checkbox' id='martelo_guerra' name='martelo_guerra'>";
                                    echo "<br>";

                                    if(isset($arco)){
                                        echo "<h3>Armas de Duas Mãos (Selecione apenas um)</h3>";
                                    
                                        echo "<label for='arco'>Arco</label>";
                                        echo "<input type='checkbox' id='arco' name='arco'>";
                                        echo "<br>";
                                    }

                                    if(isset($espada_curta) || isset($adaga) || isset($tonfa) || isset($funda) || isset($lanterna)){
                                        echo "<h3>Armas de Uma Mão(Caso não tenha selecionado nenhuma arma de duas mãos, Selecione duas das opções abaixo.)</h3>";

                                        if(isset($espada_curta)){
                                            echo "<label for='espada_curta'>Espada Curta</label>";
                                            echo "<input type='checkbox' id='espada_curta' name='espada_curta'>";
                                            echo "<br>";
                                        }
                                        if(isset($adaga)){
                                            echo "<label for='adaga'>Adaga</label>";
                                            echo "<input type='checkbox' id='adaga' name='adaga'>";
                                            echo "<br>";
                                        }
                                        if(isset($tonfa)){
                                            echo "<label for='tonfa'>Tonfa</label>";
                                            echo "<input type='checkbox' id='tonfa' name='tonfa'>";
                                            echo "<br>";
                                        }
                                        if(isset($funda)){
                                            echo "<label for='funda'>Funda</label>";
                                            echo "<input type='checkbox' id='funda' name='funda'>";
                                            echo "<br>";
                                        }
                                        if(isset($lanterna)){
                                            echo "<label for='lanterna'>Lanterna</label>";
                                            echo "<input type='checkbox' id='lanterna' name='lanterna'>";
                                            echo "<br>";
                                        }
                                    }
                                    echo "<input type='text' name='id4' value='$id_personagem4' hidden>";
                                    echo "<input type='submit' value='Equipar'>";
                                    echo "</form>";
                                } else {
                                    $_SESSION['arma1_personagem4'] = "Martelo de Guerra";
                                    $_SESSION['arma2_personagem4'] = "Martelo de Guerra";
                                    echo "<li>".$_SESSION['arma1_personagem4']."</li>";
                                    echo "<h3><a href='trocar_itens.php?id=$id'>Trocar</a></h3>";
                                }
                            }
                        } else if(isset($arco)){
                            if(isset($_SESSION['arma1_personagem4']) ){
                                echo "<li>".$_SESSION['arma1_personagem4']."</li>";
                                if(isset($_SESSION['arma2_personagem4']) && $_SESSION['arma1_personagem4'] != $_SESSION['arma2_personagem4']){
                                    echo "<li>".$_SESSION['arma2_personagem4']."</li>";
                                }
                                echo "<h3><a href='trocar_itens.php?id=$id'>Trocar</a></h3>";
                            } else {
                                if(isset($mangual) || isset($espada_curta) || isset($adaga) || isset($tonfa) || isset($funda) || isset($lanterna)){
                                    echo "<h3>O arco conta como arma de duas mãos, então caso selecione ele não poderá equipar mais nenhuma arma!!!</h3>";

                                    echo "<form action='selec_eq.php' method='POST'>";

                                    echo "<label for='arco'>Arco</label>";
                                    echo "<input type='checkbox' id='arco' name='arco'>";
                                    echo "<br>";

                                    echo "<h3>Armas de Uma Mão(Caso não tenha selecionado nenhuma arma de duas mãos, Selecione duas das opções abaixo.)</h3>";

                                        if(isset($espada_curta)){
                                            echo "<label for='espada_curta'>Espada Curta</label>";
                                            echo "<input type='checkbox' id='espada_curta' name='espada_curta'>";
                                            echo "<br>";
                                        }
                                        if(isset($adaga)){
                                            echo "<label for='adaga'>Adaga</label>";
                                            echo "<input type='checkbox' id='adaga' name='adaga'>";
                                            echo "<br>";
                                        }
                                        if(isset($tonfa)){
                                            echo "<label for='tonfa'>Tonfa</label>";
                                            echo "<input type='checkbox' id='tonfa' name='tonfa'>";
                                            echo "<br>";
                                        }
                                        if(isset($funda)){
                                            echo "<label for='funda'>Funda</label>";
                                            echo "<input type='checkbox' id='funda' name='funda'>";
                                            echo "<br>";
                                        }
                                        if(isset($lanterna)){
                                            echo "<label for='lanterna'>Lanterna</label>";
                                            echo "<input type='checkbox' id='lanterna' name='lanterna'>";
                                            echo "<br>";
                                        }
                                    echo "<input type='text' name='id4' value='$id_personagem4' hidden>";
                                    echo "<input type='submit' value='Equipar'>";
                                    echo "</form>";
                                } else {
                                    $_SESSION['arma1_personagem4'] = "Arco";
                                    $_SESSION['arma2_personagem4'] = "Arco";
                                    echo "<li>".$_SESSION['arma1_personagem4']."</li>";
                                    echo "<h3><a href='trocar_itens.php?id=$id'>Trocar</a></h3>";
                                }
                            }
                        } else if(isset($mangual)){
                            if(isset($_SESSION['arma1_personagem4'])){
                                echo "<li>".$_SESSION['arma1_personagem4']."</li>";
                                if(isset($_SESSION['arma2_personagem4']) && $_SESSION['arma1_personagem4'] != $_SESSION['arma2_personagem4']){
                                    echo "<li>".$_SESSION['arma2_personagem4']."</li>";
                                }
                                echo "<h3><a href='trocar_itens.php?id=$id'>Trocar</a></h3>";
                            } else {
                                if(isset($espada_curta) || isset($adaga) || isset($tonfa) || isset($funda) || isset($lanterna)){
                                    
                                    echo "<form action='selec_eq.php' method='POST'>";

                                    echo "<h3>Armas de Uma Mão(Selecione duas das opções abaixo)</h3>";

                                    echo "<label for='mangual'>Mangual</label>";
                                    echo "<input type='checkbox' id='mangual' name='mangual'>";
                                    echo "<br>";

                                        if(isset($espada_curta)){
                                            echo "<label for='espada_curta'>Espada Curta</label>";
                                            echo "<input type='checkbox' id='espada_curta' name='espada_curta'>";
                                            echo "<br>";
                                        }
                                        if(isset($adaga)){
                                            echo "<label for='adaga'>Adaga</label>";
                                            echo "<input type='checkbox' id='adaga' name='adaga'>";
                                            echo "<br>";
                                        }
                                        if(isset($tonfa)){
                                            echo "<label for='tonfa'>Tonfa</label>";
                                            echo "<input type='checkbox' id='tonfa' name='tonfa'>";
                                            echo "<br>";
                                        }
                                        if(isset($funda)){
                                            echo "<label for='funda'>Funda</label>";
                                            echo "<input type='checkbox' id='funda' name='funda'>";
                                            echo "<br>";
                                        }
                                        if(isset($lanterna)){
                                            echo "<label for='lanterna'>Lanterna</label>";
                                            echo "<input type='checkbox' id='lanterna' name='lanterna'>";
                                            echo "<br>";
                                        }
                                        echo "<input type='text' name='id4' value='$id_personagem4' hidden>";
                                        echo "<input type='submit' value='Equipar'>";
                                        echo "</form>";
                                } else {
                                    $_SESSION['arma1_personagem4'] = "Mangual";
                                    echo "<li>".$_SESSION['arma1_personagem4']."</li>";
                                    echo "<h3><a href='trocar_itens.php?id=$id'>Trocar</a></h3>";
                                }
                            }
                        } else if(isset($espada_curta)){
                            if(isset($_SESSION['arma1_personagem4'])){
                                echo "<li>".$_SESSION['arma1_personagem4']."</li>";
                                if(isset($_SESSION['arma2_personagem4']) && $_SESSION['arma1_personagem4'] != $_SESSION['arma2_personagem4']){
                                    echo "<li>".$_SESSION['arma2_personagem4']."</li>";
                                }
                                echo "<h3><a href='trocar_itens.php?id=$id'>Trocar</a></h3>";
                            } else {
                                if(isset($adaga) || isset($tonfa) || isset($funda) || isset($lanterna)){
                                    
                                    echo "<form action='selec_eq.php' method='POST'>";

                                    echo "<h3>Armas de Uma Mão(Selecione duas das opções abaixo)</h3>";

                                    echo "<label for='espada_curta'>Espada Curta</label>";
                                    echo "<input type='checkbox' id='espada_curta' name='espada_curta'>";
                                    echo "<br>";
                                        
                                        if(isset($adaga)){
                                            echo "<label for='adaga'>Adaga</label>";
                                            echo "<input type='checkbox' id='adaga' name='adaga'>";
                                            echo "<br>";
                                        }
                                        if(isset($tonfa)){
                                            echo "<label for='tonfa'>Tonfa</label>";
                                            echo "<input type='checkbox' id='tonfa' name='tonfa'>";
                                            echo "<br>";
                                        }
                                        if(isset($funda)){
                                            echo "<label for='funda'>Funda</label>";
                                            echo "<input type='checkbox' id='funda' name='funda'>";
                                            echo "<br>";
                                        }
                                        if(isset($lanterna)){
                                            echo "<label for='lanterna'>Lanterna</label>";
                                            echo "<input type='checkbox' id='lanterna' name='lanterna'>";
                                            echo "<br>";
                                        }
                                        echo "<input type='text' name='id4' value='$id_personagem4' hidden>";
                                        echo "<input type='submit' value='Equipar'>";
                                        echo "</form>";
                                } else {
                                    $_SESSION['arma1_personagem4'] = "Espada Curta";
                                    echo "<li>".$_SESSION['arma1_personagem4']."</li>";
                                    echo "<h3><a href='trocar_itens.php?id=$id'>Trocar</a></h3>";
                                }
                            }
                        } else if(isset($adaga)){
                            if(isset($_SESSION['arma1_personagem4'])){
                                echo "<li>".$_SESSION['arma1_personagem4']."</li>";
                                if(isset($_SESSION['arma2_personagem4']) && $_SESSION['arma1_personagem4'] != $_SESSION['arma2_personagem4']){
                                    echo "<li>".$_SESSION['arma2_personagem4']."</li>";
                                }
                                echo "<h3><a href='trocar_itens.php?id=$id'>Trocar</a></h3>";
                            } else {
                                if(isset($tonfa) || isset($funda) || isset($livro_feiticos) || isset($lanterna)){
                                    
                                    echo "<form action='selec_eq.php' method='POST'>";

                                    echo "<h3>Armas de Uma Mão(Selecione duas das opções abaixo)</h3>";
                                        
                                    echo "<label for='adaga'>Adaga</label>";
                                    echo "<input type='checkbox' id='adaga' name='adaga'>";
                                    echo "<br>";
                                        
                                        if(isset($tonfa)){
                                            echo "<label for='tonfa'>Tonfa</label>";
                                            echo "<input type='checkbox' id='tonfa' name='tonfa'>";
                                            echo "<br>";
                                        }
                                        if(isset($funda)){
                                            echo "<label for='funda'>Funda</label>";
                                            echo "<input type='checkbox' id='funda' name='funda'>";
                                            echo "<br>";
                                        }
                                        if(isset($livro_feiticos)){
                                            echo "<label for='livro_feiticos'>Livro de Feitiços</label>";
                                            echo "<input type='checkbox' id='livro_feiticos' name='livro_feiticos'>";
                                            echo "<br>";
                                        }
                                        if(isset($lanterna)){
                                            echo "<label for='lanterna'>Lanterna</label>";
                                            echo "<input type='checkbox' id='lanterna' name='lanterna'>";
                                            echo "<br>";
                                        }
                                        echo "<input type='text' name='id4' value='$id_personagem4' hidden>";
                                        echo "<input type='submit' value='Equipar'>";
                                        echo "</form>";
                                } else {
                                    $_SESSION['arma1_personagem4'] = "Adaga";
                                    echo "<li>".$_SESSION['arma1_personagem4']."</li>";
                                    echo "<h3><a href='trocar_itens.php?id=$id'>Trocar</a></h3>";
                                }
                            }
                        } else if(isset($tonfa)){
                            if(isset($_SESSION['arma1_personagem4'])){
                                echo "<li>".$_SESSION['arma1_personagem4']."</li>";
                                if(isset($_SESSION['arma2_personagem4']) && $_SESSION['arma1_personagem4'] != $_SESSION['arma2_personagem4']){
                                    echo "<li>".$_SESSION['arma2_personagem4']."</li>";
                                }
                                echo "<h3><a href='trocar_itens.php?id=$id'>Trocar</a></h3>";
                            } else {
                                if(isset($funda) || isset($livro_feiticos) || isset($lanterna)){
                                    
                                    echo "<form action='selec_eq.php' method='POST'>";

                                    echo "<h3>Armas de Uma Mão(Selecione duas das opções abaixo)</h3>";
                                        
                                    echo "<label for='tonfa'>Tonfa</label>";
                                    echo "<input type='checkbox' id='tonfa' name='tonfa'>";
                                    echo "<br>";
                                        
                                        if(isset($funda)){
                                            echo "<label for='funda'>Funda</label>";
                                            echo "<input type='checkbox' id='funda' name='funda'>";
                                            echo "<br>";
                                        }
                                        if(isset($livro_feiticos)){
                                            echo "<label for='livro_feiticos'>Livro de Feitiços</label>";
                                            echo "<input type='checkbox' id='livro_feiticos' name='livro_feiticos'>";
                                            echo "<br>";
                                        }
                                        if(isset($lanterna)){
                                            echo "<label for='lanterna'>Lanterna</label>";
                                            echo "<input type='checkbox' id='lanterna' name='lanterna'>";
                                            echo "<br>";
                                        }
                                        echo "<input type='text' name='id4' value='$id_personagem4' hidden>";
                                        echo "<input type='submit' value='Equipar'>";
                                        echo "</form>";
                                } else {
                                    $_SESSION['arma1_personagem4'] = "Tonfa";
                                    echo "<li>".$_SESSION['arma1_personagem4']."</li>";
                                    echo "<h3><a href='trocar_itens.php?id=$id'>Trocar</a></h3>";
                                }
                            }
                        } else if(isset($livro_feiticos)){
                            if(isset($_SESSION['arma1_personagem4'])){
                                echo "<li>".$_SESSION['arma1_personagem4']."</li>";
                                if(isset($_SESSION['arma2_personagem4']) && $_SESSION['arma1_personagem4'] != $_SESSION['arma2_personagem4']){
                                    echo "<li>".$_SESSION['arma2_personagem4']."</li>";
                                }
                                echo "<h3><a href='trocar_itens.php?id=$id'>Trocar</a></h3>";
                            } else {
                                if(isset($funda) || isset($lanterna)){
                                    
                                    echo "<form action='selec_eq.php' method='POST'>";

                                    echo "<h3>Armas de Uma Mão(Selecione duas das opções abaixo)</h3>";
                                        
                                    echo "<label for='livro_feiticos'>Livro de Feitiços</label>";
                                    echo "<input type='checkbox' id='livro_feiticos' name='livro_feiticos'>";
                                    echo "<br>";
                                        
                                        if(isset($funda)){
                                            echo "<label for='funda'>Funda</label>";
                                            echo "<input type='checkbox' id='funda' name='funda'>";
                                            echo "<br>";
                                        }
                                        if(isset($lanterna)){
                                            echo "<label for='lanterna'>Lanterna</label>";
                                            echo "<input type='checkbox' id='lanterna' name='lanterna'>";
                                            echo "<br>";
                                        }
                                        echo "<input type='text' name='id4' value='$id_personagem4' hidden>";
                                        echo "<input type='submit' value='Equipar'>";
                                        echo "</form>";
                                } else {
                                    $_SESSION['arma1_personagem4'] = "Livro de Feitiços";
                                    echo "<li>".$_SESSION['arma1_personagem4']."</li>";
                                    echo "<h3><a href='trocar_itens.php?id=$id'>Trocar</a></h3>";
                                }
                            }
                        } else if(isset($funda)){
                            if(isset($_SESSION['arma1_personagem4'])){
                                echo "<li>".$_SESSION['arma1_personagem4']."</li>";
                                if(isset($_SESSION['arma2_personagem4']) && $_SESSION['arma1_personagem4'] != $_SESSION['arma2_personagem4']){
                                    echo "<li>".$_SESSION['arma2_personagem4']."</li>";
                                }
                                echo "<h3><a href='trocar_itens.php?id=$id'>Trocar</a></h3>";
                            } else {
                                if(isset($lanterna)){
                                    
                                    echo "<form action='selec_eq.php' method='POST'>";

                                    echo "<h3>Armas de Uma Mão(Selecione duas das opções abaixo)</h3>";
                                        
                                    echo "<label for='funda'>Funda</label>";
                                    echo "<input type='checkbox' id='funda' name='funda'>";
                                    echo "<br>";
                                    
                                    echo "<label for='lanterna'>Lanterna</label>";
                                    echo "<input type='checkbox' id='lanterna' name='lanterna'>";
                                    echo "<br>";   

                                    echo "<input type='text' name='id4' value='$id_personagem4' hidden>";
                                    echo "<input type='submit' value='Equipar'>";
                                    echo "</form>";
                                    
                                } else {
                                    $_SESSION['arma1_personagem4'] = "Funda";
                                    echo "<li>".$_SESSION['arma1_personagem4']."</li>";
                                    echo "<h3><a href='trocar_itens.php?id=$id'>Trocar</a></h3>";
                                }
                            }
                        }
                    }
                    echo "</ul>";
                    echo "</td>";
                }

            echo "</tr>";
        echo "</table>";

        if(isset($_SESSION['armadura_personagem1']) && isset($_SESSION['armadura_personagem2']) && isset($_SESSION['armadura_personagem3']) && isset($_SESSION['armadura_personagem4'])){
            if(isset($_SESSION['arma1_personagem1']) && isset($_SESSION['arma1_personagem2']) && isset($_SESSION['arma1_personagem3']) && isset($_SESSION['arma1_personagem4'])){
                if($_SESSION['armadura_personagem1'] != NULL && $_SESSION['armadura_personagem2'] != NULL && $_SESSION['armadura_personagem3'] != NULL && $_SESSION['armadura_personagem4'] != NULL){
                    if($_SESSION['arma1_personagem1'] != NULL && $_SESSION['arma1_personagem2'] != NULL && $_SESSION['arma1_personagem3'] != NULL && $_SESSION['arma1_personagem4'] != NULL){
                        if($_SESSION['arma1_personagem1'] == "Lanterna" || isset($_SESSION['arma2_personagem1']) && $_SESSION['arma2_personagem1'] == "Lanterna" || $_SESSION['arma1_personagem2'] == "Lanterna" || isset($_SESSION['arma2_personagem2']) && $_SESSION['arma2_personagem2'] == "Lanterna" || $_SESSION['arma1_personagem3'] == "Lanterna" || isset($_SESSION['arma2_personagem3']) && $_SESSION['arma2_personagem3'] == "Lanterna" || $_SESSION['arma1_personagem4'] == "Lanterna" || isset($_SESSION['arma2_personagem4']) && $_SESSION['arma2_personagem4'] == "Lanterna"){
                            echo "<h2><a href='../ordem_marcha/definir_ordem_marcha.php'>Continuar</a></h2>";
                        } else {
                            echo "<h2>Nenhum dos seus personagens está levando uma lanterna!!! Troque para algum deles carregar uma lanterna equipada</h2>";
                        }
                        
                    }
                }
            }
        }
    ?>
</body>
</html>