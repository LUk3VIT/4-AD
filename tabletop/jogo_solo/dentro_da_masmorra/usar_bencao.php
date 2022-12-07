<?php
 
session_start();

$id = $_SESSION['turno'];
if($id == $_SESSION['personagem1']){
    $a = "1";
} else if($id == $_SESSION['personagem2']){
    $a = "2";
} else if($id == $_SESSION['personagem3']){
    $a = "3";
} else if($id == $_SESSION['personagem4']){
    $a = "4";
}

if(isset($_SESSION["bencao_personagem$a"])){
    if($_SESSION["bencao_personagem$a"] == 0){
        $_SESSION['erro'] = "Você já usou a magia de benção tres vezes nessa aventura, só poderá usar novamente com esse personagem na próxima aventura!!!";
        header('Location: tabletop.php');
        exit;
    }
} else {
    $_SESSION["bencao_personagem$a"] = 3;
}

if(isset($_SESSION['bencao_ataque'])){
    unset($_SESSION['escolher_bençao']);
    if($_GET['id'] == $_SESSION['personagem1']){
        unset($_SESSION['personagem1_pedra']);
    } else if($_GET['id'] == $_SESSION['personagem2']){
        unset($_SESSION['personagem2_pedra']);
    } else if($_GET['id'] == $_SESSION['personagem3']){
        unset($_SESSION['personagem3_pedra']);
    } else if($_GET['id'] == $_SESSION['personagem4']){
        unset($_SESSION['personagem4_pedra']);
    }
    $_SESSION["magia_usada"] = "benção";

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
    header('Location: passar_turno.php');
    exit;
}

if(isset($_GET['id'])){
    unset($_SESSION['escolher_bençao']);
    if($_GET['id'] == $_SESSION['personagem1']){
        unset($_SESSION['personagem1_pedra']);
    } else if($_GET['id'] == $_SESSION['personagem2']){
        unset($_SESSION['personagem2_pedra']);
    } else if($_GET['id'] == $_SESSION['personagem3']){
        unset($_SESSION['personagem3_pedra']);
    } else if($_GET['id'] == $_SESSION['personagem4']){
        unset($_SESSION['personagem4_pedra']);
    }
    $_SESSION["bencao_personagem$a"] = $_SESSION["bencao_personagem$a"] - 1;
    if(isset($_SESSION['bencao_ataque'])){
        if($_SESSION['atacante_bencao'] == $_SESSION['personagem1']){
            $a = "1";
        } else if($_SESSION['atacante_bencao'] == $_SESSION['personagem2']){
            $a = "2";
        } else if($_SESSION['atacante_bencao'] == $_SESSION['personagem2']){
            $a = "3";
        } else if($_SESSION['atacante_bencao'] == $_SESSION['personagem2']){
            $a = "4";
        }

        $_SESSION['magia_usada'] = "benção";
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
    header('Location: passar_turno.php');
} else  {
    $_SESSION['escolher_bençao'] = true;
    header('Location: tabletop.php');
}

?>