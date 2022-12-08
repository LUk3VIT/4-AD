<?php

session_start(); 

unset($_SESSION['nome_armadilha']);
unset($_SESSION['img_armadilha']);
unset($_SESSION['nivel_armadilha']);
unset($_SESSION['alvo']);
unset($_SESSION['dano_armadilha']);
unset($_SESSION['tesouro_armadilha']);
unset($_SESSION['dano_t1']);
unset($_SESSION['dano_t2']);
unset($_SESSION['dano_t3']);
unset($_SESSION['dano_t4']);
unset($_SESSION['msg1']);
unset($_SESSION['msg2']);
unset($_SESSION['msg3']);
unset($_SESSION['msg4']);
unset($_SESSION['personagem1_salvo']);
unset($_SESSION['personagem2_salvo']);
unset($_SESSION['personagem3_salvo']);
unset($_SESSION['personagem4_salvo']);
unset($_SESSION['msg']);
unset($_SESSION['pers_salvo']);
unset($_SESSION['pers_alç']);
unset($_SESSION['dano_alç']);
unset($_SESSION['pers_caido']);
unset($_SESSION['dano_t']);
unset($_SESSION['arm_urs']);
unset($_SESSION['id_pers']);
unset($_SESSION['dano_t1']);
unset($_SESSION['dano_t2']);
unset($_SESSION['dado_pers1']);
unset($_SESSION['dado_pers2']);


if($_SESSION['turno'] == "armadilha"){
    $_SESSION['turno'] = $_SESSION['turno1'];
    header('Location: tabletop.php');
    exit;
}

if($_SESSION['turno'] == $_SESSION['personagem1']){
    $a = "1";
} else if($_SESSION['turno'] == $_SESSION['personagem2']){
    $a = "2";
} else if($_SESSION['turno'] == $_SESSION['personagem3']){
    $a = "3";
} else if($_SESSION['turno'] == $_SESSION['personagem4']){
    $a = "4";
}
   
if($_SESSION['ataque_surpresa'] == false){
    unset($_SESSION['ataque_surpresa']);
}

if($_SESSION['ataque_surpresa'] == true){
    
    
    if(isset($_SESSION['ordem_setada'])){

        
        if($_SESSION['turno'] == $_SESSION['turno1_surpresa']){
            if(isset($_SESSION['turno2_surpresa'])){
                $_SESSION['turno'] = $_SESSION['turno2_surpresa'];
            } else if($_SESSION['turno3_surpresa']){
                $_SESSION['turno'] = $_SESSION['turno3_surpresa'];
            } else if($_SESSION['turno4_surpresa']){
                $_SESSION['turno'] = $_SESSION['turno4_surpresa'];
            } else {
                $_SESSION['turno'] = "monstros";
            }
        } else if($_SESSION['turno'] == $_SESSION['turno2_surpresa']){
            if(isset($_SESSION['turno3_surpresa'])){
                $_SESSION['turno'] = $_SESSION['turno3_surpresa'];
            } else if($_SESSION['turno4_surpresa']){
                $_SESSION['turno'] = $_SESSION['turno3_surpresa'];
            } else {
                $_SESSION['turno'] = "monstros";
            }
        } else if($_SESSION['turno'] == $_SESSION['turno3_surpresa']){
            if(isset($_SESSION['turno4_surpresa'])){
                $_SESSION['turno'] = $_SESSION['turno4_surpresa'];
            } else {
                $_SESSION['turno'] = "monstros";
            }
        } else if($_SESSION['turno'] == $_SESSION['turno4_surpresa']){
            $_SESSION['turno'] = "monstros";
        } else if($_SESSION['turno'] == "monstros"){
            $_SESSION['turno'] = $_SESSION['turno1'];
            $_SESSION['ataque_surpresa'] = false;
            header('Location: tabletop.php');
            exit;
        } 
        
    } else {
        
        if(strtolower($_SESSION['arma1_personagem1']) == "arco" || strtolower($_SESSION['arma1_personagem1']) == "funda" || strtolower($_SESSION['arma2_personagem1']) == "arco" || strtolower($_SESSION['arma2_personagem1']) == "funda"){
            echo $_SESSION['turno1_surpresa'] = $_SESSION['personagem1'];
        }
        if(strtolower($_SESSION['arma1_personagem2']) == "arco" || strtolower($_SESSION['arma1_personagem2']) == "funda" || strtolower($_SESSION['arma2_personagem2']) == "arco" || strtolower($_SESSION['arma2_personagem2']) == "funda"){
            echo $_SESSION['turno2_surpresa'] = $_SESSION['personagem2'];
        } 
        if(strtolower($_SESSION['arma1_personagem3']) == "arco" || strtolower($_SESSION['arma1_personagem3']) == "funda" || strtolower($_SESSION['arma2_personagem3']) == "arco" || strtolower($_SESSION['arma2_personagem3']) == "funda"){
            echo $_SESSION['turno3_surpresa'] = $_SESSION['personagem3'];
        }
        if(strtolower($_SESSION['arma1_personagem4']) == "arco" || strtolower($_SESSION['arma1_personagem4']) == "funda" || strtolower($_SESSION['arma2_personagem4']) == "arco" || strtolower($_SESSION['arma2_personagem4']) == "funda"){
            echo $_SESSION['turno4_surpresa'] = $_SESSION['personagem4'];
        }

        
        if(isset($_SESSION['turno1_surpresa'])){
            $_SESSION['turno'] = $_SESSION['turno1_surpresa'];
        } else if(isset($_SESSION['turno2_surpresa'])){
            $_SESSION['turno'] = $_SESSION['turno2_surpresa'];
        } else if(isset($_SESSION['turno3_surpresa'])){
            $_SESSION['turno'] = $_SESSION['turno3_surpresa'];
        } else if(isset($_SESSION['turno4_surpresa'])){
            $_SESSION['turno'] = $_SESSION['turno4_surpresa'];
        } else {
            $_SESSION['turno'] = "monstros";
        }
        $_SESSION['ordem_setada'] = true;

        
        unset($_SESSION['falha_automatica']);
        unset($_SESSION['opcao_magia']);
        unset($_SESSION['magia_usada']);
        unset($_SESSION['atacar_magia']);
        unset($_SESSION['magia']);
        unset($_SESSION['fim']);
        unset($_SESSION['setar_magia']);
        unset($_SESSION['dano']);
        unset($_SESSION['bonus']);
        unset($_SESSION['escolher_arma']);
        unset($_SESSION['erro']);
        unset($_SESSION['defesa_total']);
        unset($_SESSION['dado']);
        unset($_SESSION['defesa']);
        unset($_SESSION['efeito_bonus']);
        unset($_SESSION['vida_perdida']);
        unset($_SESSION['escolher_cura']);
        unset($_SESSION['mensagem']);
        unset($_SESSION['escolher_protecao']);
        unset($_SESSION['passar_defesa']);
        unset($_SESSION['tesouro']);
        unset($_SESSION['valor_tesouro']);
        unset($_SESSION['fim_turno']);

    }
}



if($_SESSION['quantidade_monstro'] > 0 || $_SESSION['vida_atual_boss'] > 0){
    $_SESSION['monstros_defender'] = $_SESSION['quantidade_monstro'];
    $_SESSION['ataques_defender'] = $_SESSION['ataques_boss'];
} else {
    unset($_SESSION['monstro']);
    unset($_SESSION['nome_monstro']); 
    unset($_SESSION['nivel_monstro']);
    unset($_SESSION['quantidade_monstro']);
    unset($_SESSION['tesouro_monstro']);
    unset($_SESSION['hab1_monstro']);
    unset($_SESSION['hab2_monstro']);
    unset($_SESSION["arco_personagem1"]);
    unset($_SESSION["funda_personagem1"]);
    unset($_SESSION["arco_personagem2"]);
    unset($_SESSION["funda_personagem2"]);
    unset($_SESSION["arco_personagem3"]);
    unset($_SESSION["funda_personagem3"]);
    unset($_SESSION["arco_personagem4"]);
    unset($_SESSION["funda_personagem4"]);
    unset($_SESSION['ataque_surpresa']);
    unset($_SESSION['ordem_setada']);
    unset($_SESSION['turno1_surpresa']);
    unset($_SESSION['turno2_surpresa']);
    unset($_SESSION['turno3_surpresa']);
    unset($_SESSION['turno4_surpresa']);
    unset($_SESSION['teste_goblins']);
    unset($_SESSION['boss']);
    unset($_SESSION['vida_perdida_boss']);
    unset($_SESSION['vida_atual_boss']);
    unset($_SESSION['vida_total_boss']);
    unset($_SESSION['nome_boss']);
    unset($_SESSION['nivel_boss']);
    unset($_SESSION['ataques_boss']);
    unset($_SESSION['tesouro_boss']);
    unset($_SESSION['hab1_boss']);
    unset($_SESSION['hab2_boss']);
    unset($_SESSION['hab3_boss']);
    unset($_SESSION['hab4_boss']);
    unset($_SESSION['hab5_boss']);
    unset($_SESSION['tirar_nivel']);
    unset($_SESSION['mau_olhado_1']);
    unset($_SESSION['mau_olhado_2']);
    unset($_SESSION['dreno_energia']);
    unset($_SESSION['ataq_touro']);
    if(isset($_SESSION['boss_final'])){
        $_SESSION['cont_chefe'] = -100;
        $_SESSION['sala_final'] = true;
    }
    unset($_SESSION['boss_final']);
    unset($_SESSION['upar_nivel_minion']);
    if(isset($_SESSION['encontro'])){
        unset($_SESSION['encontro']);
    }
    $_SESSION['sala_finalizada'] = true;
}

    if(isset($_SESSION['monstro']) || isset($_SESSION['boss'])){
        if($_SESSION['turno'] == $_SESSION['turno1']){
            if($_SESSION['turno2'] == $_SESSION["personagem1_pedra"] || $_SESSION['turno2'] == $_SESSION["personagem2_pedra"] || $_SESSION['turno2'] == $_SESSION["personagem3_pedra"] || $_SESSION['turno2'] == $_SESSION["personagem4_pedra"]){
                if($_SESSION['turno3'] == $_SESSION["personagem1_pedra"] || $_SESSION['turno3'] == $_SESSION["personagem2_pedra"] || $_SESSION['turno3'] == $_SESSION["personagem3_pedra"] || $_SESSION['turno3'] == $_SESSION["personagem4_pedra"]){
                    if($_SESSION['turno4'] == $_SESSION["personagem1_pedra"] || $_SESSION['turno4'] == $_SESSION["personagem2_pedra"] || $_SESSION['turno4'] == $_SESSION["personagem3_pedra"] || $_SESSION['turno4'] == $_SESSION["personagem4_pedra"]){
                        $_SESSION['turno'] = "monstros";
                    } else {
                        $_SESSION['turno'] = $_SESSION['turno4'];
                    }
                } else {
                    $_SESSION['turno'] = $_SESSION['turno3'];
                }
            } else {
                $_SESSION['turno'] = $_SESSION['turno2'];
            }
        } else if($_SESSION['turno'] == $_SESSION['turno2']){
            if($_SESSION['turno3'] == $_SESSION["personagem1_pedra"] || $_SESSION['turno3'] == $_SESSION["personagem2_pedra"] || $_SESSION['turno3'] == $_SESSION["personagem3_pedra"] || $_SESSION['turno3'] == $_SESSION["personagem4_pedra"]){
                if($_SESSION['turno4'] == $_SESSION["personagem1_pedra"] || $_SESSION['turno4'] == $_SESSION["personagem2_pedra"] || $_SESSION['turno4'] == $_SESSION["personagem3_pedra"] || $_SESSION['turno4'] == $_SESSION["personagem4_pedra"]){
                        $_SESSION['turno'] = "monstros";
                } else {
                    $_SESSION['turno'] = $_SESSION['turno4'];
                }
            } else {
                $_SESSION['turno'] = $_SESSION['turno3'];
            }
        } else if($_SESSION['turno'] == $_SESSION['turno3']){
            if($_SESSION['turno4'] == $_SESSION["personagem1_pedra"] || $_SESSION['turno4'] == $_SESSION["personagem2_pedra"] || $_SESSION['turno4'] == $_SESSION["personagem3_pedra"] || $_SESSION['turno4'] == $_SESSION["personagem4_pedra"]){
                $_SESSION['turno'] = "monstros";
            } else {
                $_SESSION['turno'] = $_SESSION['turno4'];
            }
        } else if($_SESSION['turno'] == $_SESSION['turno4']){
            $_SESSION['turno'] = "monstros";
        } else if($_SESSION['turno'] == "monstros"){
            if($_SESSION['turno1'] == $_SESSION["personagem1_pedra"] || $_SESSION['turno1'] == $_SESSION["personagem2_pedra"] || $_SESSION['turno1'] == $_SESSION["personagem3_pedra"] || $_SESSION['turno1'] == $_SESSION["personagem4_pedra"]){
                if($_SESSION['turno2'] == $_SESSION["personagem1_pedra"] || $_SESSION['turno2'] == $_SESSION["personagem2_pedra"] || $_SESSION['turno2'] == $_SESSION["personagem3_pedra"] || $_SESSION['turno2'] == $_SESSION["personagem4_pedra"]){
                    if($_SESSION['turno3'] == $_SESSION["personagem1_pedra"] || $_SESSION['turno3'] == $_SESSION["personagem2_pedra"] || $_SESSION['turno3'] == $_SESSION["personagem3_pedra"] || $_SESSION['turno3'] == $_SESSION["personagem4_pedra"]){
                        $_SESSION['turno'] = $_SESSION['turno4'];
                    } else {
                        $_SESSION['turno'] = $_SESSION['turno3']; 
                    }
                } else {
                    $_SESSION['turno'] = $_SESSION['turno2'];
                }
            } else {
                $_SESSION['turno'] = $_SESSION['turno1'];
            }
            unset($_SESSION["proteger_personagem1"]);
            unset($_SESSION["proteger_personagem2"]);
            unset($_SESSION["proteger_personagem3"]);
            unset($_SESSION["proteger_personagem4"]);
        }
    } else {
        if($_SESSION['turno'] == $_SESSION['turno1']){
            if($_SESSION['turno2'] == $_SESSION["personagem1_pedra"] || $_SESSION['turno2'] == $_SESSION["personagem2_pedra"] || $_SESSION['turno2'] == $_SESSION["personagem3_pedra"] || $_SESSION['turno2'] == $_SESSION["personagem4_pedra"]){
                if($_SESSION['turno3'] == $_SESSION["personagem1_pedra"] || $_SESSION['turno3'] == $_SESSION["personagem2_pedra"] || $_SESSION['turno3'] == $_SESSION["personagem3_pedra"] || $_SESSION['turno3'] == $_SESSION["personagem4_pedra"]){
                    if($_SESSION['turno4'] == $_SESSION["personagem1_pedra"] || $_SESSION['turno4'] == $_SESSION["personagem2_pedra"] || $_SESSION['turno4'] == $_SESSION["personagem3_pedra"] || $_SESSION['turno4'] == $_SESSION["personagem4_pedra"]){
                        $_SESSION['turno'] = "monstros";
                    } else {
                        $_SESSION['turno'] = $_SESSION['turno4'];
                    }
                } else {
                    $_SESSION['turno'] = $_SESSION['turno3'];
                }
            } else {
                $_SESSION['turno'] = $_SESSION['turno2'];
            }
        } else if($_SESSION['turno'] == $_SESSION['turno2']){
            if($_SESSION['turno3'] == $_SESSION["personagem1_pedra"] || $_SESSION['turno3'] == $_SESSION["personagem2_pedra"] || $_SESSION['turno3'] == $_SESSION["personagem3_pedra"] || $_SESSION['turno3'] == $_SESSION["personagem4_pedra"]){
                if($_SESSION['turno4'] == $_SESSION["personagem1_pedra"] || $_SESSION['turno4'] == $_SESSION["personagem2_pedra"] || $_SESSION['turno4'] == $_SESSION["personagem3_pedra"] || $_SESSION['turno4'] == $_SESSION["personagem4_pedra"]){
                        $_SESSION['turno'] = "monstros";
                } else {
                    $_SESSION['turno'] = $_SESSION['turno4'];
                }
            } else {
                $_SESSION['turno'] = $_SESSION['turno3'];
            }
        } else if($_SESSION['turno'] == $_SESSION['turno3']){
            if($_SESSION['turno4'] == $_SESSION["personagem1_pedra"] || $_SESSION['turno4'] == $_SESSION["personagem2_pedra"] || $_SESSION['turno4'] == $_SESSION["personagem3_pedra"] || $_SESSION['turno4'] == $_SESSION["personagem4_pedra"]){
                $_SESSION['turno'] = "monstros";
            } else {
                $_SESSION['turno'] = $_SESSION['turno4'];
            }
        } else if($_SESSION['turno'] == $_SESSION['turno4']){
            if($_SESSION['turno1'] == $_SESSION["personagem1_pedra"] || $_SESSION['turno1'] == $_SESSION["personagem2_pedra"] || $_SESSION['turno1'] == $_SESSION["personagem3_pedra"] || $_SESSION['turno1'] == $_SESSION["personagem4_pedra"]){
                if($_SESSION['turno2'] == $_SESSION["personagem1_pedra"] || $_SESSION['turno2'] == $_SESSION["personagem2_pedra"] || $_SESSION['turno2'] == $_SESSION["personagem3_pedra"] || $_SESSION['turno2'] == $_SESSION["personagem4_pedra"]){
                        $_SESSION['turno'] = $_SESSION['turno3'];
                } else {
                    $_SESSION['turno'] = $_SESSION['turno2'];
                }
            } else {
                $_SESSION['turno'] = $_SESSION['turno1'];
            }
        }
    }




unset($_SESSION['dar_item']);
unset($_SESSION['item_troca']);
unset($_SESSION['mostrar_itens']);
unset($_SESSION['confirmar_ataque']);
if($_SESSION['quantidade_monstro'] > 0){

} else {
    unset($_SESSION['monstro']);
    unset($_SESSION['nome_monstro']); 
    unset($_SESSION['nivel_monstro']);
    unset($_SESSION['quantidade_monstro']);
    unset($_SESSION['tesouro_monstro']);
    unset($_SESSION['hab1_monstro']);
    unset($_SESSION['hab2_monstro']);
    unset($_SESSION["arco_personagem1"]);
    unset($_SESSION["funda_personagem1"]);
    unset($_SESSION["arco_personagem2"]);
    unset($_SESSION["funda_personagem2"]);
    unset($_SESSION["arco_personagem3"]);
    unset($_SESSION["funda_personagem3"]);
    unset($_SESSION["arco_personagem4"]);
    unset($_SESSION["funda_personagem4"]);
    unset($_SESSION['teste_goblins']);
}
unset($_SESSION['dado1']);
$x = 2;
while(isset($_SESSION["dado$x"])){
    unset($_SESSION["dado$x"]);
    $x = $x + 1;
}

unset($_SESSION['falha_automatica']);
unset($_SESSION['opcao_magia']);
unset($_SESSION['magia_usada']);
unset($_SESSION['atacar_magia']);
unset($_SESSION['magia']);
unset($_SESSION['fim']);
unset($_SESSION['setar_magia']);
unset($_SESSION['dano']);
unset($_SESSION['bonus']);
unset($_SESSION['escolher_arma']);
unset($_SESSION['erro']);
unset($_SESSION['defesa_total']);
unset($_SESSION['dado']);
unset($_SESSION['defesa']);
unset($_SESSION['efeito_bonus']);
unset($_SESSION['vida_perdida']);
unset($_SESSION['escolher_cura']);
unset($_SESSION['mensagem']);
unset($_SESSION['escolher_protecao']);
unset($_SESSION['passar_defesa']);
unset($_SESSION['tesouro']);
unset($_SESSION['valor_tesouro']);
unset($_SESSION['fim_turno']);
unset($_SESSION['trolls_ressussitados']);
unset($_SESSION['subir_nivel']);
unset($_SESSION['upar']);
unset($_SESSION['bencao_ataque']);
unset($_SESSION['escolher_bencao']);
unset($_SESSION['ataque2']);
unset($_SESSION['alvo2']);
unset($_SESSION['defensor2']);
unset($_SESSION['alvo']);
unset($_SESSION['defensor1']);
unset($_SESSION['defensor']);

header('Location: tabletop.php');

?>