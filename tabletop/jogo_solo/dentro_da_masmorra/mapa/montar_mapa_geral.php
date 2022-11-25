<?php

session_start();
require_once '../../../classes/repositorioTabletop.php'; 
$repositorio = new RepositorioTabletopMySQL();


// Definindo medidas

$altura_total_mapa_geral = "250";
$largura_total_mapa_geral = "300";

if(isset($_SESSION['altura_atual_mapa_geral']) && isset($_SESSION['largura_atual_mapa_geral'])){
    
} else {
    $_SESSION['largura_total_mapa_geral'] = "300";
    $_SESSION['altura_total_mapa_geral'] = "250";
    $_SESSION['largura_atual_mapa_geral'] = "300";
    $_SESSION['altura_atual_mapa_geral'] = "250";
}
$img = $_SESSION['mapa_atual'];
list($largura_imagem,$altura_imagem) = getimagesize("../".$img);
$largura_imagem;
$altura_imagem;

if(isset($_SESSION['mapa1'])){
   if(isset($_SESSION['mapa2'])){
        if(isset($_SESSION['mapa3'])){
            if(isset($_SESSION['mapa4'])){
                if(isset($_SESSION['mapa5'])){
                    if(isset($_SESSION['mapa6'])){
                        if(isset($_SESSION['mapa7'])){
                            if(isset($_SESSION['mapa8'])){
                                if(isset($_SESSION['mapa9'])){
                                    if(isset($_SESSION['mapa10'])){
                                        if(isset($_SESSION['mapa11'])){
                                            if(isset($_SESSION['mapa12'])){
                                                if(isset($_SESSION['mapa13'])){
                                                    if(isset($_SESSION['mapa14'])){
                                                        if(isset($_SESSION['mapa15'])){

                                                        } else {
                                                            $_SESSION['altura_mapa15'] = $altura_imagem;
                                                            $_SESSION['largura_mapa15'] = $largura_imagem;
                                                            $_SESSION['mapa15'] = $_SESSION['mapa_atual'];
                                                            $_SESSION['margin_left_15'] = ($_SESSION['largura_total_mapa_geral'] - $largura_imagem) / 2;
                                                            $_SESSION['altura_atual_mapa_geral'] = $_SESSION['margin_top_15'] = $_SESSION['altura_total_mapa_geral'] - $altura_imagem;
                                                        }
                                                    } else {
                                                        $_SESSION['altura_mapa14'] = $altura_imagem;
                                                        $_SESSION['largura_mapa14'] = $largura_imagem;
                                                        $_SESSION['mapa14'] = $_SESSION['mapa_atual'];
                                                        $_SESSION['margin_left_14'] = ($_SESSION['largura_total_mapa_geral'] - $largura_imagem) / 2;
                                                        $_SESSION['altura_atual_mapa_geral'] = $_SESSION['margin_top_14'] = $_SESSION['altura_total_mapa_geral'] - $altura_imagem;
                                                    }
                                                } else {
                                                    $_SESSION['altura_mapa13'] = $altura_imagem;
                                                    $_SESSION['largura_mapa13'] = $largura_imagem;
                                                    $_SESSION['mapa13'] = $_SESSION['mapa_atual'];
                                                    $_SESSION['margin_left_13'] = ($_SESSION['largura_total_mapa_geral'] - $largura_imagem) / 2;
                                                    $_SESSION['altura_atual_mapa_geral'] = $_SESSION['margin_top_13'] = $_SESSION['altura_total_mapa_geral'] - $altura_imagem;
                                                }
                                            } else {
                                                $_SESSION['altura_mapa12'] = $altura_imagem;
                                                $_SESSION['largura_mapa12'] = $largura_imagem;
                                                $_SESSION['mapa12'] = $_SESSION['mapa_atual'];
                                                $_SESSION['margin_left_12'] = ($_SESSION['largura_total_mapa_geral'] - $largura_imagem) / 2;
                                                $_SESSION['altura_atual_mapa_geral'] = $_SESSION['margin_top_12'] = $_SESSION['altura_total_mapa_geral'] - $altura_imagem;
                                            }
                                        } else {
                                            $_SESSION['altura_mapa11'] = $altura_imagem;
                                            $_SESSION['largura_mapa11'] = $largura_imagem;
                                            $_SESSION['mapa11'] = $_SESSION['mapa_atual'];
                                            $_SESSION['margin_left_11'] = ($_SESSION['largura_total_mapa_geral'] - $largura_imagem) / 2;
                                            $_SESSION['altura_atual_mapa_geral'] = $_SESSION['margin_top_11'] = $_SESSION['altura_total_mapa_geral'] - $altura_imagem;
                                        }
                                    } else {
                                        $_SESSION['altura_mapa10'] = $altura_imagem;
                                        $_SESSION['largura_mapa10'] = $largura_imagem;
                                        $_SESSION['mapa10'] = $_SESSION['mapa_atual'];
                                        $_SESSION['margin_left_10'] = ($_SESSION['largura_total_mapa_geral'] - $largura_imagem) / 2;
                                        $_SESSION['altura_atual_mapa_geral'] = $_SESSION['margin_top_10'] = $_SESSION['altura_total_mapa_geral'] - $altura_imagem;
                                    }
                                } else {
                                    $_SESSION['altura_mapa9'] = $altura_imagem;
                                    $_SESSION['largura_mapa9'] = $largura_imagem;
                                    $_SESSION['mapa9'] = $_SESSION['mapa_atual'];
                                    $_SESSION['margin_left_9'] = ($_SESSION['largura_total_mapa_geral'] - $largura_imagem) / 2;
                                    $_SESSION['altura_atual_mapa_geral'] = $_SESSION['margin_top_9'] = $_SESSION['altura_total_mapa_geral'] - $altura_imagem;
                                }
                            } else {
                                $_SESSION['altura_mapa8'] = $altura_imagem;
                                $_SESSION['largura_mapa8'] = $largura_imagem;
                                $_SESSION['mapa8'] = $_SESSION['mapa_atual'];
                                $_SESSION['margin_left_8'] = ($_SESSION['largura_total_mapa_geral'] - $largura_imagem) / 2;
                                $_SESSION['altura_atual_mapa_geral'] = $_SESSION['margin_top_8'] = $_SESSION['altura_total_mapa_geral'] - $altura_imagem;
                            }
                        } else {
                            $_SESSION['altura_mapa7'] = $altura_imagem;
                            $_SESSION['largura_mapa7'] = $largura_imagem;
                            $_SESSION['mapa7'] = $_SESSION['mapa_atual'];
                            $_SESSION['margin_left_7'] = ($_SESSION['largura_total_mapa_geral'] - $largura_imagem) / 2;
                            $_SESSION['altura_atual_mapa_geral'] = $_SESSION['margin_top_7'] = $_SESSION['altura_total_mapa_geral'] - $altura_imagem;
                        }
                    } else {
                        $_SESSION['altura_mapa6'] = $altura_imagem;
                        $_SESSION['largura_mapa6'] = $largura_imagem;
                        $_SESSION['mapa6'] = $_SESSION['mapa_atual'];
                        $_SESSION['margin_left_6'] = ($_SESSION['largura_total_mapa_geral'] - $largura_imagem) / 2;
                        $_SESSION['altura_atual_mapa_geral'] = $_SESSION['margin_top_6'] = $_SESSION['altura_total_mapa_geral'] - $altura_imagem;
                    }
                } else {
                    $_SESSION['altura_mapa5'] = $altura_imagem;
                    $_SESSION['largura_mapa5'] = $largura_imagem;
                    $_SESSION['mapa5'] = $_SESSION['mapa_atual'];
                    $_SESSION['margin_left_5'] = ($_SESSION['largura_total_mapa_geral'] - $largura_imagem) / 2;
                    $_SESSION['altura_atual_mapa_geral'] = $_SESSION['margin_top_5'] = $_SESSION['altura_total_mapa_geral'] - $altura_imagem;
                }
            } else {
                $_SESSION['altura_mapa4'] = $altura_imagem;
                $_SESSION['largura_mapa4'] = $largura_imagem;
                $_SESSION['mapa4'] = $_SESSION['mapa_atual'];
                $_SESSION['margin_left_4'] = ($_SESSION['largura_total_mapa_geral'] - $largura_imagem) / 2;
                $_SESSION['altura_atual_mapa_geral'] = $_SESSION['margin_top_4'] = $_SESSION['altura_total_mapa_geral'] - $altura_imagem;
            }
        } else {
            $_SESSION['altura_mapa3'] = $altura_imagem;
            $_SESSION['largura_mapa3'] = $largura_imagem;
            $_SESSION['mapa3'] = $_SESSION['mapa_atual'];
            $_SESSION['margin_left_3'] = ($_SESSION['largura_total_mapa_geral'] - $largura_imagem) / 2;
            $_SESSION['altura_atual_mapa_geral'] = $_SESSION['margin_top_3'] = $_SESSION['altura_total_mapa_geral'] - $altura_imagem;
        }
   } else {
        $_SESSION['altura_mapa2'] = $altura_imagem;
        $_SESSION['largura_mapa2'] = $largura_imagem;
        $_SESSION['mapa2'] = $_SESSION['mapa_atual'];
        $_SESSION['margin_left_2'] = ($_SESSION['largura_total_mapa_geral'] - $largura_imagem) / 2;
        $_SESSION['altura_atual_mapa_geral'] = $_SESSION['margin_top'] = $_SESSION['altura_total_mapa_geral'] - ($altura_imagem + $_SESSION['altura_mapa1']);
   }
} else {
    $_SESSION['altura_mapa1'] = $altura_imagem;
    $_SESSION['largura_mapa1'] = $largura_imagem;
    $_SESSION['mapa1'] = $_SESSION['mapa_atual'];
    $_SESSION['margin_left_1'] = ($_SESSION['largura_total_mapa_geral'] - $largura_imagem) / 2;
    $_SESSION['altura_atual_mapa_geral'] = $_SESSION['margin_top'] = $_SESSION['altura_total_mapa_geral'] - $altura_imagem;
}


    
echo $_SESSION['mapa_geral'] = 

'<div style="display:flex">
    <img src='.$_SESSION['mapa1'].' style="margin-top:'.$_SESSION['margin_top'].'px;margin-left:'.$_SESSION['margin_left_1'].'px">
</div>';

if(isset($_SESSION['mapa2'])){
    
    if($_SESSION['dir'] == "cima"){
        $mapa = $_SESSION['mapa_atual'];
        $px_baixo = $repositorio->PuxarPixelAberturaBaixo($mapa);
        if($px_baixo > ($_SESSION['largura_mapa2'] / 2)){

        } else {
            $px_baixo = $_SESSION['largura_mapa2'] - $px_baixo;
            $_SESSION['margin_left_2'] = $_SESSION['margin_left_2'] - $px_baixo;
        }
        

        $_SESSION['mapa_geral'] = 

        '<div style="display:flex">
            <img src="'.$_SESSION['mapa2'].'" style="margin-top:'.$_SESSION['margin_top'].'px;margin-left:'.$_SESSION['margin_left_2'].'px">
        </div>
        <div style="display:flex">
            <img src='.$_SESSION['mapa1'].' style="margin-top:px;margin-left:'.$_SESSION['margin_left_1'].'px">
        </div>';
   }
   if(isset($_SESSION['mapa3'])){
        header('Location: ../tabletop.php'); 
        exit;
   } else {
        header('Location: ../tabletop.php'); 
        exit;
   }
} else {
    header('Location: ../tabletop.php');
    exit;
}


echo $_SESSION['mapa_geral'] = 

    '<div style="display:flex">
        <img src='.$_SESSION['mapa1'].' style="margin-top:'.$_SESSION['margin_top_1'].'px;margin-left:'.$_SESSION['margin_left_1'].'px">
    </div>';
    header('Location: ../tabletop.php');


echo "OI";
   
   $_SESSION['mapa_geral'] = 

    '<div style="display:flex">
        <img src='.$_SESSION['mapa1'].' style="margin-top:px;margin-left:'.$_SESSION['margin_left_1'].'px">
    </div>';
    header('Location: ../tabletop.php');





// tamanho height: 250px; width: 300px

// largura x altura px
?>