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


                    if(strtolower($_SESSION["arma1_personagem$a"]) == "lanterna" || strtolower($_SESSION["arma1_personagem$a"]) == "livro de feitiços"){
                        $item = $_SESSION["arma2_personagem$a"];
                    } else {
                        $item = $_SESSION["arma1_personagem$a"];
                    }
                    
                    $tipo = $repositorio->PuxarTipoArma($item);

                    // DADO
                    $_SESSION['dado1'] = $dado = rand(1,6);
                    if($dado == 6){
                        if(isset($_SESSION['dado2'])){

                        } else {
                            $novo_dado = 6;
                            $x = 2;
                            while($novo_dado == 6){
                                $_SESSION["dado$x"] = $novo_dado = rand(1,6);
                                $dado = $dado + $novo_dado;
                                $x = $x + 1;
                            }       
                        }     
                    } else if($dado == 1){
                        $_SESSION['falha_automatica'] = "Você tirou 1 no dado, falhou no ataque automaticamente!!!";
                        header('Location: tabletop.php');

                        if($tipo == "arma a distância cortante"){
                            $_SESSION["arco_personagem$a"] = true;
                        } else if($tipo == "arma a distância esmagadora"){
                            $_SESSION["funda_personagem$a"] = true;
                        }
                    }

                    // bonus do personagem
                    if($classe == "Mago"){
                        $bonus_ataque = 0;
                    } else if($classe == "Elfo"){
                        $bonus_ataque = $nivel;
                    }

                    // bonus arma

                    if(isset($_SESSION["arco_personagem$a"]) || isset($_SESSION["funda_personagem$a"])){
                        echo $_SESSION["arco_personagem$a"];
                        echo $_SESSION["funda_personagem$a"];
                        if(isset($_SESSION["arco_personagem$a"])){
                            if($item == "Arco"){
                                $_SESSION['erro'] = "<h2>Você já fez seu primeiro ataque, não é mais possível usar armas a distancia até o início de um próximo combate!!!</h2>";
                                header('Location: tabletop.php');
                                exit;
                            }
                        }
                        if(isset($_SESSION["funda_personagem$a"])){
                            if($item == "Funda"){
                                $_SESSION['erro'] = "<h2>Você já fez seu primeiro ataque, não é mais possível usar armas a distancia até o início de um próximo combate!!!</h2>";
                                header('Location: tabletop.php');
                                exit;
                            }
                        }
                    } else {
                        if($tipo == "arma a distância cortante"){
                            $_SESSION["arco_personagem$a"] = true;
                        } else if($tipo == "arma a distância esmagadora"){
                            $_SESSION["funda_personagem$a"] = true;
                        }
                    }

                    if($_SESSION["arma2_personagem$a"] == "Livro de Feitiços"){
                        $item = $_SESSION["arma1_personagem$a"];
                        $tipo = $repositorio->PuxarTipoArma($item);
                        if($tipo == "arma de uma mão leve cortante" || $tipo == "arma de uma mão leve esmagadora"){
                            $bonus_arma = -1;
                        } else {
                            $bonus_arma = -2;
                        }
                    } else {
                        $tipo = $repositorio->PuxarTipoArma($item);
                        if($tipo == "arma de uma mão leve esmagadora" || $tipo == "arma de uma mão leve cortante" || $tipo == "arma a distância esmagadora"){
                            $bonus_arma = -1;
                        } else if($tipo == "arma de uma mão cortante" || $tipo == "arma de uma mão esmagadora" || $tipo == "arma a distância cortante"){
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
                            exit;
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

                    echo $_SESSION['dano'] = $dano;
                    $quantidade_monstro = $_SESSION['quantidade_monstro'];
                    echo "<br>";
                    echo "<br>";
                    

                    if(isset($_SESSION['boss'])){
                        $vida_boss = $_SESSION['vida_atual_boss'];
                        while($dano > 0){
                            if($dano >= $_SESSION['nivel_boss']){
                                while($dano >= $_SESSION['nivel_boss']){
                                    $dano = $dano - $_SESSION['nivel_boss'];
                                    $vida_perdida_boss = $vida_perdida_boss + 1;
                                }
                                $dano = $dano - $_SESSION['nivel_boss'];
                            } else {
                                $dano = $dano - 1;
                            }
                        }
                        if($vida_boss > 0){
                            $_SESSION['vida_perdida_boss'] = $vida_perdida_boss;
                        } else {
                            $_SESSION['vida_perdida_boss'] = 0;
                        }
                    } else {
                        while($dano > 0){
                            if($dano >= $_SESSION['nivel_monstro']){
                                while($dano >= $_SESSION['nivel_monstro']){
                                    $dano = $dano - $_SESSION['nivel_monstro'];
                                    echo "<br>";
                                    $quantidade_monstro = $quantidade_monstro - 1;
                                }
                                $dano = $dano - 1;
                            } else {
                                $dano = $dano - 1;
                            }
                        }

                        $_SESSION['monstros_mortos'] = $_SESSION['quantidade_monstro'] - $quantidade_monstro;
                    

                    
                        $_SESSION['monstros_mortos'] = $_SESSION['quantidade_monstro'] - $quantidade_monstro;
                        if($_SESSION['nome_monstro'] == "Trolls" && $tipo == "arma de uma mão esmagadora" || $tipo == "arma de uma mão esmagadora mágica" || $tipo == "arma de uma mão leve esmagadora" || $tipo == "arma de uma mão leve esmagadora mágica" || $tipo == "arma de duas mãos esmagadora" || $tipo == "arma de duas mãos esmagadora mágica" || $tipo == "lanterna" || $tipo == "" || $tipo == "arma a distância cortante"){
                            echo $_SESSION['trolls_mortos'] = $_SESSION['monstros_mortos'];
                        }
                    }
                    
                   
                   
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

                    if(isset($_SESSION['boss'])){
                        $_SESSION['confirmar_ataque'] = true;
                        $_SESSION['vida_atual_boss'] = $_SESSION['vida_atual_boss'] - $_SESSION['vida_perdida_boss'];
                        unset($_SESSION['opcao_magia']);
                        header('Location: tabletop.php');
                        exit;
                    } else {
                        $_SESSION['confirmar_ataque'] = true;
                        $quantidade_total = $_SESSION['quantidade_monstro'];
                        $_SESSION['quantidade_monstro'] = $quantidade_total - $_SESSION['monstros_mortos'];
                        unset($_SESSION['opcao_magia']);
                        header('Location: tabletop.php');
                        exit;
                    }
                    
                    

                    

                } else if($_GET['tipo'] == "magia" || isset($_SESSION['magia'])){
                    

                    if($_SESSION["magia1_usada_personagem$a"] == true && $_SESSION["magia2_usada_personagem$a"] == true && $_SESSION["magia3_usada_personagem$a"] == true && $_SESSION["magia4_usada_personagem$a"] == true && $_SESSION["magia5_usada_personagem$a"] == true && $_SESSION["magia6_usada_personagem$a"] == true && $_SESSION["magia7_usada_personagem$a"] == true){
                        $_SESSION['fim'] = "<h2 style='color: red'>Todas as magias foram utilizadas, para usá-las de novo espere até o fim dessa masmorra ou até upar de nível!!!</h2>";
                        echo $_SESSION['opcao_magia'] = true;
                        header('Location: tabletop.php');
                        exit;
                    } 
                            unset($_SESSION['opcao_magia']);
                            $_SESSION['magia'] = true;
                           
                            if(isset($_GET['mag']) || isset($_GET['defesa'])){
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
                                } else if($_SESSION['nome_boss'] == "Múmia"){
                                    $bonus_ataque = $bonus_ataque + 2;
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
                                    $id = $_SESSION['turno'];
                                    $_SESSION['bencao_ataque'] = true;
                                    $_SESSION['escolher_bencao'] = true;
                                    $_SESSION['atacante_bencao'] = $_SESSION['turno'];
                                    unset($_SESSION['atacar_magia']);
                                    unset($_SESSION['confirmar_ataque']);
                                    header('Location: tabletop.php');
                                    exit;
                                } else if($magia == "bola de fogo"){
                                    if(isset($_SESSION['boss'])){
                                        $dano = $bonus_total - $_SESSION['nivel_boss'];
                                        if($dano > 0){
                                            $_SESSION['vida_atual_boss'] = $_SESSION['vida_atual_boss'] - $dano;
                                            $_SESSION['magia_usada'] = $magia;
                                            $_SESSION['vida_perdida_boss'] = $dano;
                                            header('Location: tabletop.php');
                                            exit;
                                        } else {
                                            $_SESSION['vida_atual_boss'] = $_SESSION['vida_atual_boss'] - 1;
                                            $_SESSION['magia_usada'] = $magia;
                                            $_SESSION['vida_perdida_boss'] = 1;
                                            header('Location: tabletop.php');
                                            exit;
                                        }
                                    } else {
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
                                    }
                                } else if($magia == "raio"){
                                    if(isset($_SESSION['boss'])){
                                        if($bonus_total >= $_SESSION['nivel_boss']){
                                            $_SESSION['vida_atual_boss'] = $_SESSION['vida_atual_boss'] - 2;
                                            $x = 0;
                                            while($bonus_total >= $_SESSION['nivel_boss']){
                                                $bonus_total = $bonus_total - $_SESSION['nivel_boss'];
                                                $_SESSION['vida_atual_boss'] = $_SESSION['vida_atual_boss'] - 1;
                                                $x = $x + 1;
                                            }
                                            $_SESSION['magia_usada'] = $magia;
                                            $_SESSION['vida_perdida_boss'] = 2 + $x;
                                            header('Location: tabletop.php');
                                            exit;
                                        } else {
                                            $id = $_SESSION['turno'];
                                            $_SESSION['magia_usada'] = $magia;
                                            header("Location: passar_turno.php?id=$id");
                                            exit;
                                        }
                                    } else {
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
                                    }
                                } else if($magia == "sono"){
                                    if(isset($_SESSION['boss'])){
                                        if($bonus_total >= $_SESSION['nivel_boss']){
                                            $_SESSION['vida_atual_boss'] = 0;
                                            $_SESSION['magia_usada'] = $magia;
                                            header('Location: tabletop.php');
                                            exit;
                                        } else {
                                            $id = $_SESSION['turno'];
                                            $_SESSION['magia_usada'] = $magia;
                                            header("Location: passar_turno.php?id=$id");
                                            exit;
                                        }
                                    } else {
                                        if($_SESSION['nome_monstro'] == "Rato Esquelético"){
                                            $id = $_SESSION['turno'];
                                            $_SESSION['magia_usada'] = $magia;
                                            header("Location: passar_turno.php?id=$id");
                                            exit;
                                        } else {
                                            if($bonus_total >= $_SESSION['nivel_monstro']){
                                                $dado = (rand(1,6) + $nivel);
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
                                                }
                                                $_SESSION['dado1'] = $_SESSION['dano'] = $dado;
                                                $_SESSION['magia_usada'] = $magia;
                                                $_SESSION['quantidade_monstro'] = $_SESSION['quantidade_monstro'] - $dado;
                                                $_SESSION['monstros_mortos'] = $dado;
                                                unset($_SESSION['bonus']);
                                                header('Location: tabletop.php');
                                                exit;
                                            }
                                        }
                                    }
                                } else if($magia == "escape"){
                                    $id = $_SESSION['turno'];
                                    $_SESSION['magia_usada'] = $magia;
                                    header("Location: passar_turno.php?id=$id");
                                } else if($magia == "proteger" || isset($_SESSION['escolher_protecao'])){
                                    if(isset($magia)){

                                    } else {
                                        $magia = "proteger";
                                    }
                                    if(isset($_SESSION['escolher_protecao']) && isset($_GET['defesa'])){
                                        $id = $_SESSION['turno'];
                                        $_SESSION['magia_usada'] = $magia;
                                        $a = $_GET['defesa'];
                                        $_SESSION["proteger_personagem$a"] = true;
                                        $_SESSION['passar_defesa'] = true;
                                        header('Location: tabletop.php');
                                        exit;
                                    } else {
                                        $_SESSION['escolher_protecao'] = true;
                                        unset($_SESSION['atacar_magia']);
                                        header('Location: tabletop.php');
                                        exit;
                                    }
                                } 

                            } else {
                                $_SESSION['atacar_magia'] = true;
                                header('Location: tabletop.php');
                                exit;
                            }
                    }
                } else {
                    $_SESSION['magia'] = true;
                    header('Location: tabletop.php');
                    exit;
            }
        } else {

            if(isset($_POST['arma'])){
                echo $item = $_POST['arma'];
                unset($_SESSION['escolher_arma']);
            } else {
                
                if($_SESSION["arma1_personagem$a"] != $_SESSION["arma2_personagem$a"]){
                    
                    $item = $_SESSION["arma1_personagem$a"];
                    $tipo1 = $repositorio->PuxarTipoArma($item);
                    $item = $_SESSION["arma2_personagem$a"];
                    $tipo2 = $repositorio->PuxarTipoArma($item);
                    
                    $_SESSION['confirmar_ataque'] = true;
                    
                      
                        if($tipo1 == "arma de uma mão cortante" && $tipo2 == "arma de uma mão esmagadora" || $tipo1 == "arma de uma mão esmagadora" && $tipo2 == "arma de uma mão cortante"){
                            $_SESSION['escolher_arma'] = true;
                            header('Location: tabletop.php');
                            exit;
                        } else if($tipo1 == "arma de uma mão leve cortante" && $tipo2 == "arma de uma mão esmagadora" || $tipo1 == "arma de uma mão leve esmagadora" && $tipo2 == "arma de uma mão cortante" || $tipo1 == "arma de uma mão cortante" && $tipo2 == "arma de uma mão leve esmagadora" || $tipo1 == "arma de uma mão esmagadora" && $tipo2 == "arma de uma mão leve cortante"){
                            $_SESSION['escolher_arma'] = true;
                            header('Location: tabletop.php');
                            exit;
                        } else if($tipo1 == "arma a distância esmagadora" && $tipo2 == "arma de uma mão cortante" || $tipo1 == "arma a distância esmagadora" && $tipo2 == "arma de uma mão esmagadora" || $tipo1 == "arma a distância esmagadora" && $tipo2 == "arma de uma mão leve cortante" || $tipo1 == "arma a distância esmagadora" && $tipo2 == "arma de uma mão leve esmagadora" || $tipo1 == "arma de uma mão cortante" && $tipo2 == "arma a distância esmagadora" || $tipo1 == "arma de uma mão esmagadora" && $tipo2 == "arma a distância esmagadora" || $tipo1 == "arma de uma mão leve cortante" && $tipo2 == "arma a distância esmagadora" || $tipo1 == "arma de uma mão leve esmagadora" && $tipo2 == "arma a distância esmagadora"){
                            $_SESSION['escolher_arma'] = true;
                            header('Location: tabletop.php');
                            exit;
                        } else {
                            $item = $_SESSION["arma1_personagem$a"];
                        }
                    
                } else {
                    $item = $_SESSION["arma1_personagem$a"];
                    unset($_SESSION['escolher_arma']);
                }
            }

            // verificar bonus arma

            
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

            if(isset($_SESSION["arco_personagem$a"]) || isset($_SESSION["funda_personagem$a"])){
                if(isset($_SESSION["arco_personagem$a"])){
                    if($item == "Arco"){
                        $_SESSION['erro'] = "<h2>Você já fez seu primeiro ataque, não é mais possível usar armas a distancia até o início de um próximo combate!!!</h2>";
                        $_SESSION['escolher_arma'] = true;
                        header('Location: tabletop.php');
                        exit;
                    }
                }
                if(isset($_SESSION["funda_personagem$a"])){
                    if($item == "Funda"){
                        $_SESSION['erro'] = "<h2>Você já fez seu primeiro ataque, não é mais possível usar armas a distancia até o início de um próximo combate!!!</h2>";
                        $_SESSION['escolher_arma'] = true;
                        header('Location: tabletop.php');
                        exit;
                    }
                }
            } else {
                if($tipo == "arma a distância cortante"){
                    $_SESSION["arco_personagem$a"] = true;
                } else if($tipo == "arma a distância esmagadora"){
                    $_SESSION["funda_personagem$a"] = true;
                }
            }
            

            // bonus arma para tipo de monstro;
            if($_SESSION['nome_monstro'] == "Rato Esquelético"){
                if($tipo == "arma de uma mão esmagadora" || $tipo == "arma de uma mão leve esmagadora" || $tipo == "arma de duas mãos esmagadora"){
                    $bonus_arma = $bonus_arma + 1;
                } else if($tipo == "arma a distância esmagadora" || $tipo == "arma a distância cortante"){
                    $_SESSION['erro'] = "Esse monstro não pode ser atacado por um arco ou funda";
                    unset($_SESSION['confirmar_ataque']);
                    header('Location: tabletop.php');
                    exit;
                }
            } else if($_SESSION['nome_monstro'] == "Esqueletos"){
                if($tipo == "arma de uma mão esmagadora" || $tipo == "arma de uma mão leve esmagadora" || $tipo == "arma de duas mãos esmagadora"){
                    $bonus_arma = $bonus_arma + 1;
                } else if($tipo == "arma a distância esmagadora"){
                    $_SESSION['erro'] = "Esse monstro não pode ser atacado por um arco ou funda";
                    unset($_SESSION['confirmar_ataque']);
                    header('Location: tabletop.php');
                    exit;
                } else if($tipo == "arma a distância cortante"){
                    $bonus_arma = $bonus_arma - 1;
                }
            } else if($_SESSION['nome_monstro'] == "Zumbi"){
                if($tipo == "arma a distância cortante"){
                    $bonus_arma = $bonus_arma - 1;
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

            $_SESSION['dano'] = $dano;
            $quantidade_monstro = $_SESSION['quantidade_monstro'];
            echo "<br>";
            echo "<br>";

            if(isset($_SESSION['boss'])){
                while($dano > 0){
                    if($dano >= $_SESSION['nivel_boss']){
                        while($dano >= $_SESSION['nivel_boss']){
                            $dano = $dano - $_SESSION['nivel_boss'];
                            $vida_perdida_boss = $vida_perdida_boss + 1;
                        }
                        $dano = $dano - $_SESSION['nivel_boss'];
                    } else {
                        $dano = $dano - 1;
                    }
                }
                
            } else {
                while($dano > 0){
                    if($dano >= $_SESSION['nivel_monstro']){
                        while($dano >= $_SESSION['nivel_monstro']){
                            $dano = $dano - $_SESSION['nivel_monstro'];
                            $_SESSION['nivel_monstro'];
                            $quantidade_monstro = $quantidade_monstro - 1;
                        }
                        $dano = $dano - 1;
                    } else {
                        $dano = $dano - 1;
                    }
                }
            }
        }
            if(isset($_SESSION['boss'])){
                if($vida_perdida_boss > 0 || $_SESSION['vida_atual_boss'] == 1){
                    if($_SESSION['vida_atual_boss'] == 1){
                        $_SESSION['vida_perdida_boss'] = 1;
                    } else {
                        echo $_SESSION['vida_perdida_boss'] = $vida_perdida_boss;
                    } 
                } else {
                    $_SESSION['vida_perdida_boss'] = 0;
                }
                
            } else {
                $_SESSION['monstros_mortos'] = $_SESSION['quantidade_monstro'] - $quantidade_monstro;
                if($_SESSION['nome_monstro'] == "Trolls" && $tipo == "arma de uma mão esmagadora" || $tipo == "arma de uma mão esmagadora mágica" || $tipo == "arma de uma mão leve esmagadora" || $tipo == "arma de uma mão leve esmagadora mágica" || $tipo == "arma de duas mãos esmagadora" || $tipo == "arma de duas mãos esmagadora mágica" || $tipo == "lanterna" || $tipo == "" || $tipo == "arma a distância cortante"){
                    $_SESSION['trolls_mortos'] = $_SESSION['monstros_mortos'];
                }
            }
            
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

            if(isset($_SESSION['boss'])){
                $_SESSION['confirmar_ataque'] = true;
                $_SESSION['vida_atual_boss'] = $_SESSION['vida_atual_boss'] - $_SESSION['vida_perdida_boss'];
                header('Location: tabletop.php');
            } else {
                $_SESSION['confirmar_ataque'] = true;
                $quantidade_total = $_SESSION['quantidade_monstro'];
                $_SESSION['quantidade_monstro'] = $quantidade_total - $_SESSION['monstros_mortos'];
                header('Location: tabletop.php');
            }
?>