<?php

    session_start();
    require_once '../../classes/repositorioTabletop.php'; 
    $repositorio = new RepositorioTabletopMySQL();

    if(isset($_GET['id'])){
        $_SESSION['atacante'] = $_GET['id'];
        if($_GET['id'] == $_SESSION['personagem1']){
            $a = "1";
        } else if($_GET['id'] == $_SESSION['personagem2']){
            $a = "2";
        } else if($_GET['id'] == $_SESSION['personagem3']){
            $a = "3";
        } else if($_GET['id'] == $_SESSION['personagem4']){
            $a = "4";
        }
    } else {
        if($_SESSION['atacante'] == $_SESSION['personagem1']){
            $a = "1";
        } else if($_SESSION['atacante'] == $_SESSION['personagem2']){
            $a = "2";
        } else if($_SESSION['atacante'] == $_SESSION['personagem3']){
            $a = "3";
        } else if($_SESSION['atacante'] == $_SESSION['personagem4']){
            $a = "4";
        }
    }
    
        

        if(isset($_SESSION['atacante'])){
            $id = $_SESSION['atacante'];
        } else {
            if(isset($_GET['id'])){
                $id = $_GET['id'];
            }
        }
        $personagem = $repositorio->MostrarPersonagem($id);
        foreach ($personagem as $key) {
            $classe = $key['classe'];
            $nivel = $key['nivel'];
            $ataque = $key['ataque'];
        }

        if($classe == "Mago" || $classe == "Elfo"){
            $_SESSION['opcao_magia'] = true;
            if(isset($_GET['tipo']) || isset($_SESSION['magia'])){
                if($_GET['tipo'] == "arma"){

                    // DADO
                    $_SESSION['dado1'] = $dado = rand(1,6);
                    if($dado == 6){
                        if(isset($_SESSION['dado2'])){

                        } else {
                            $novo_dado = 6;
                        }
                        $x = 2;
                        while($novo_dado == 6){
                            $_SESSION["dado$x"] = $novo_dado = rand(1,6);
                            $dado = $dado + $novo_dado;
                            $x = $x + 1;
                        }            
                    } else if($dado == 1){
                        $_SESSION['falha_automatica'] = "Você tirou 1 no dado, falhou no ataque automaticamente!!!";
                        header('Location: tabletop.php');
                    }

                    // bonus do personagem
                    if($classe == "Mago"){
                        $bonus_ataque = 0;
                    } else if($classe == "Elfo"){
                        $bonus_ataque = $nivel;
                    }

                    // bonus arma
                    if($_SESSION["arma2_personagem$a"] == "Livro de Feitiços"){
                        $item = $_SESSION["arma1_personagem$a"];
                        $tipo = $repositorio->PuxarTipoArma($item);
                        if($tipo == "arma de uma mão leve cortante" || $tipo == "arma de uma mão leve esmagadora"){
                            $bonus_arma = -1;
                        } else {
                            $bonus_arma = -2;
                        }
                    } else {
                        $item = $_SESSION["arma1_personagem$a"];
                        $tipo = $repositorio->PuxarTipoArma($item);
                        if($tipo == "arma de uma mão leve esmagadora" || $tipo == "arma de uma mão leve cortante"){
                            $bonus_arma = -1;
                        } else if($tipo == "arma de uma mão cortante" || $tipo == "arma de uma mão esmagadora"){
                            $bonus_arma = 0;
                        } else if($tipo == "arma de duas mãos esmagadora" || $tipo == "arma de duas mãos cortante"){
                            $bonus_arma = 1;
                        } else {
                            $bonus_arma = -2;
                        }
                    }

                    // bonus tipo monstro
                    if($_SESSION['nome_monstro'] == "Rato Esquelético"){
                        if($tipo == "arma de uma mão esmagadora" || $tipo == "arma de uma mão leve esmagadora" || $tipo == "arma de duas mãos esmagadora"){
                            $bonus_arma = $bonus_arma + 1;
                        } else if($tipo == "arma a distância esmagadora" || $tipo == "arma a distância cortante"){
                            $_SESSION['erro'] = "Esse monstro não pode ser atacado por um arco ou funda";
                            header('Location: tabletop.php');
                        }
                    }

                    // bonus classe
                    if($classe == "Elfo"){
                        if($_SESSION['nome_monstro'] == "Orcs"){
                            $bonus_classe = 1;
                        }
                    }

                    if(isset($bonus_ataque)){
                        if(isset($bonus_classe)){
                            $dano = $dado + $bonus_ataque + $bonus_classe + $bonus_arma;
                        } else {
                            $dano = $dado + $bonus_ataque + $bonus_arma;
                        }
                    } else {
                        if(isset($bonus_classe)){
                            $dano = $dado + $bonus_classe + $bonus_arma;
                        } else {
                            $dano = $dado + $bonus_arma;
                        }
                    }

                    $_SESSION['dano'] = $dano;
                    echo $quantidade_monstro = $_SESSION['quantidade_monstro'];
                    echo "<br>";
                    echo "<br>";

                    while($dano > 0){
                        if($dano >= $_SESSION['nivel_monstro']){
                            while($dano >= $_SESSION['nivel_monstro']){
                                $dano = $dano - $_SESSION['nivel_monstro'];
                                echo "<br>";
                                echo $quantidade_monstro = $quantidade_monstro - 1;
                            }
                            $dano = $dano - 1;
                        } else {
                            $dano = $dano - 1;
                        }
                    }

                    $_SESSION['monstros_mortos'] = $_SESSION['quantidade_monstro'] - $quantidade_monstro;
                    $_SESSION['dado'] = $dado;
                    if(isset($bonus_ataque)){
                        if(isset($bonus_classe)){
                            $_SESSION['bonus'] = $bonus_ataque + $bonus_classe + $bonus_arma;
                        } else {
                            $_SESSION['bonus'] = $bonus_ataque + $bonus_arma;
                        }
                    } else {
                        if(isset($bonus_classe)){
                            $_SESSION['bonus'] = $bonus_classe + $bonus_arma;
                        } else {
                            $_SESSION['bonus'] = $bonus_arma;
                        }
                    }
                    $_SESSION['confirmar_ataque'] = true;
                    $quantidade_total = $_SESSION['quantidade_monstro'];
                    $_SESSION['quantidade_monstro'] = $quantidade_total - $_SESSION['monstros_mortos'];
                    header('Location: tabletop.php');
                    unset($_SESSION['opcao_magia']);

                    exit;

                    } else if($_GET['tipo'] == "magia" || isset($_SESSION['magia'])){
                        
                            unset($_SESSION['opcao_magia']);
                            $_SESSION['magia'] = true;
                           
                            if(isset($_GET['mag'])){
                                $_SESSION['setar_magia'] = false;
                                $magia = $_GET['mag'];
                                
                                // DADO
                                $_SESSION['dado1'] = $dado = rand(1,6);
                                if($dado == 6){
                                    if(isset($_SESSION['dado2'])){

                                    } else {
                                        $novo_dado = 6;
                                    }
                                    $x = 2;
                                    while($novo_dado == 6){
                                        $_SESSION["dado$x"] = $novo_dado = rand(1,6);
                                        $dado = $dado + $novo_dado;
                                        $x = $x + 1;
                                    }            
                                } else if($dado == 1){
                                    $_SESSION['falha_automatica'] = "Você tirou 1 no dado, falhou no ataque automaticamente!!!";
                                    header('Location: tabletop.php');
                                    exit;
                                }

                                $id = $_SESSION['turno'];
                                $personagem = $repositorio->MostrarPersonagem($id);
                                foreach ($personagem as $key) {
                                    $nivel = $key['nivel'];
                                    $classe = $key['classe'];
                                }

                                $bonus_ataque = $nivel;

                                // bonus tipo monstro
                                if($_SESSION['nome_monstro'] == "Morcego Vampiro"){
                                    $bonus_ataque = $bonus_ataque - 1;
                                }

                                // bonus classe
                                if($classe == "Elfo" && $_SESSION['nome_monstro'] == "Orcs"){
                                    $bonus_classe = 1;
                                }

                                if(isset($bonus_ataque)){
                                    if(isset($bonus_classe)){
                                        $bonus_total = $dado + $bonus_ataque + $bonus_classe;
                                    } else {
                                        $bonus_total = $dado + $bonus_ataque;
                                    }
                                } else {
                                    if(isset($bonus_classe)){
                                        $bonus_total = $dado + $bonus_classe;
                                    } else {
                                        $bonus_total = $dado;
                                    }
                                }
                                $_SESSION['dano'] = $bonus_total;
                                $_SESSION['bonus'] = $bonus_ataque + $bonus_classe;
                                

                                // tipo de magia
                                if($magia == "benção"){
                                    
                                } else if($magia == "bola de fogo"){
                                    $dano = $bonus_total - $_SESSION['nivel_monstro'];
                                    if($dano > 0){
                                        $_SESSION['quantidade_monstro'] = $_SESSION['quantidade_monstro'] - $dano;
                                        $_SESSION['magia_usada'] = $magia;
                                        $_SESSION['monstros_mortos'] = $dano;
                                        header('Location: tabletop.php');
                                        exit;
                                    } else {
                                        $_SESSION['quantidade_monstro'] = $_SESSION['quantidade_monstro'] - 1;
                                        $_SESSION['magia_usada'] = $magia;
                                        $_SESSION['monstros_mortos'] = 1;
                                        header('Location: tabletop.php');
                                        exit;
                                    }
                                } else if($magia == "raio"){
                                    if($bonus_total >= $_SESSION['nivel_monstro']){
                                        $_SESSION['quantidade_monstro'] = $_SESSION['quantidade_monstro'] - 1;
                                        $_SESSION['magia_usada'] = $magia;
                                        $_SESSION['monstros_mortos'] = 1;
                                        header('Location: tabletop.php');
                                        exit;
                                    } else {
                                        $id = $_SESSION['turno'];
                                        $_SESSION['magia_usada'] = $magia;
                                        header("Location: passar_turno.php?id=$id");
                                        exit;
                                    }
                                } else if($magia == "sono"){
                                    if($_SESSION['nome_monstro'] == "Rato Esquelético"){
                                        $id = $_SESSION['turno'];
                                        $_SESSION['magia_usada'] = $magia;
                                        header("Location: passar_turno.php?id=$id");
                                        exit;
                                    } else {
                                        if($bonus_total >= $_SESSION['nivel_monstro']){
                                            $dano = (rand(1,6) + $nivel);
                                            $_SESSION['magia_usada'] = $magia;
                                            $_SESSION['quantidade_monstro'] = $_SESSION['quantidade_monstro'] - $dano;
                                            $_SESSION['monstros_mortos'] = $dano;
                                            header('Location: tabletop.php');
                                            exit;
                                        }
                                    }
                                } else if($magia == "escape"){
                                    $id = $_SESSION['turno'];
                                    $_SESSION['magia_usada'] = $magia;
                                    header("Location: passar_turno.php?id=$id");
                                    exit;
                                } else if($magia == "proteger"){

                                } 

                            } else {
                                $_SESSION['atacar_magia'] = true;
                                if(isset($_SESSION['setar_magia'])){

                                } else {
                                    $_SESSION['setar_magia'] = true;
                                }
                                header('Location: tabletop.php');
                                exit;
                            }
                    }
                } else {
                    header('Location: tabletop.php');
                    exit;
            }
        } else {
            $_SESSION['dado1'] = $dado = rand(1,6);
            if($dado == 6){
                if(isset($_SESSION['dado2'])){

                } else {
                    $novo_dado = 6;
                }
                $x = 2;
                while($novo_dado == 6){
                    $_SESSION["dado$x"] = $novo_dado = rand(1,6);
                    $dado = $dado + $novo_dado;
                    $x = $x + 1;
                }            
            } else if($dado == 1){
                $_SESSION['falha_automatica'] = "Você tirou 1 no dado, falhou no ataque automaticamente!!!";
                header('Location: tabletop.php');
                exit;
            }


            // verificar bonus de personagem
            if($ataque == "+Nível"){
                $bonus_ataque = $nivel;
            } else if($ataque == "+1/2 Nível"){
                $rest = $nivel % 2;
                if($rest == 0){
                    $bonus_ataque = ($nivel / 2);
                } else if($nivel == 1){
                    $bonus_ataque = 0;
                } else if($nivel == 3){
                    $bonus_ataque = 1;
                } else if($nivel == 5){
                    $bonus_ataque = 2;
                }
            }

            // verificar bonus arma
            $item = $_SESSION["arma1_personagem$a"];
            $tipo = $repositorio->PuxarTipoArma($item);
            if($tipo == "arma de uma mão cortante" || $tipo == "arma de uma mão esmagadora" || $tipo == "arma a distância cortante"){
                $bonus_arma = 0;
            } else if($tipo == "arma de uma mão leve cortante" || $tipo == "arma de uma mão leve esmagadora" || $tipo == "arma a distância esmagadora"){
                $bonus_arma = -1;
            } else if($tipo == "arma de duas mãos cortante" || $tipo == "arma de duas mãos esmagadora"){
                $bonus_arma = 1;
            } else {
                $bonus_arma = -2;
            }

            // bonus arma para tipo de monstro;
            if($_SESSION['nome_monstro'] == "Rato Esquelético"){
                if($tipo == "arma de uma mão esmagadora" || $tipo == "arma de uma mão leve esmagadora" || $tipo == "arma de duas mãos esmagadora"){
                    $bonus_arma = $bonus_arma + 1;
                } else if($tipo == "arma a distância esmagadora" || $tipo == "arma a distância cortante"){
                    $_SESSION['erro'] = "Esse monstro não pode ser atacado por um arco ou funda";
                    header('Location: tabletop.php');
                }
            }

            // bonus de classe
            if($classe == "Ladino"){
                if($_SESSION['quantidade_monstro'] < $_SESSION['quantidade_personagens']){
                    $bonus_classe = 1;
                }
            } else if($classe == "Anão"){
                if($_SESSION['nome_monstro'] == "Hobgoblin" || $_SESSION['nome_monstro'] == "Goblin"){
                    $bonus_classe = 1; 
                } 
            }

            if(isset($bonus_ataque)){
                if(isset($bonus_classe)){
                    $dano = $dado + $bonus_ataque + $bonus_classe + $bonus_arma;
                } else {
                    $dano = $dado + $bonus_ataque + $bonus_arma;
                }
            } else {
                if(isset($bonus_classe)){
                    $dano = $dado + $bonus_classe + $bonus_arma;
                } else {
                    $dano = $dado + $bonus_arma;
                }
            }

            echo $dado;
            echo "<br>";
            echo $dano;
            echo "<br>";
            echo "<br>";

            $_SESSION['dano'] = $dano;
            echo $quantidade_monstro = $_SESSION['quantidade_monstro'];
            echo "<br>";
            echo "<br>";

            while($dano > 0){
                if($dano >= $_SESSION['nivel_monstro']){
                    while($dano >= $_SESSION['nivel_monstro']){
                        $dano = $dano - $_SESSION['nivel_monstro'];
                        echo "<br>";
                        echo $quantidade_monstro = $quantidade_monstro - 1;
                    }
                    $dano = $dano - 1;
                } else {
                    $dano = $dano - 1;
                }
            }
        }
            $_SESSION['monstros_mortos'] = $_SESSION['quantidade_monstro'] - $quantidade_monstro;
            $_SESSION['dado'] = $dado;
            if(isset($bonus_ataque)){
                if(isset($bonus_classe)){
                    $_SESSION['bonus'] = $bonus_ataque + $bonus_classe + $bonus_arma;
                } else {
                    $_SESSION['bonus'] = $bonus_ataque + $bonus_arma;
                }
            } else {
                if(isset($bonus_classe)){
                    $_SESSION['bonus'] = $bonus_classe + $bonus_arma;
                } else {
                    $_SESSION['bonus'] = $bonus_arma;
                }
            }
            $_SESSION['confirmar_ataque'] = true;
            $quantidade_total = $_SESSION['quantidade_monstro'];
            $_SESSION['quantidade_monstro'] = $quantidade_total - $_SESSION['monstros_mortos'];
            header('Location: tabletop.php');
    
?>