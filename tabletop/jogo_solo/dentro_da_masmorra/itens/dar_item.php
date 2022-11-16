<?php

session_start();
require_once '../../../classes/repositorioTabletop.php'; 
$repositorio = new RepositorioTabletopMySQL();

if(isset($_GET['item'])){
    $_SESSION['item_troca'] = $_GET['item'];
}
 
if(isset($_GET['dest'])){
    
    // destinatário

    $nome = $_GET['dest'];
    $espac_vaz = $repositorio->MostrarInventario($nome);
    foreach ($espac_vaz as $key) {

        $id_inventario = $key['id_inventario'];
        $id_usuario = $key['id_usuario'];
        $nome_pers = $key['nome_pers'];
        $item1 = $key['item1'];
        $item2 = $key['item2'];
        $item3 = $key['item3'];
        $item4 = $key['item4'];
        $item5 = $key['item5'];
        $item6 = $key['item6'];
        $item7 = $key['item7'];
        $item8 = $key['item8'];
        $item9 = $key['item9'];
        $item10 = $key['item10'];
        $item11 = $key['item11'];
        $item12 = $key['item12'];
        $item13 = $key['item13'];
        $item14 = $key['item14'];
        $item15 = $key['item15'];
        $item16 = $key['item16'];
        $item17 = $key['item17'];
        $item18 = $key['item18'];
        $item19 = $key['item19'];
        $item20 = $key['item20'];
        $item21 = $key['item21'];
        $item22 = $key['item22'];
        $item23 = $key['item23'];
        $item24 = $key['item24'];
        $item25 = $key['item25'];

        if($key['item1'] == NULL){ 
            $item = "item1";
        } else if($key['item2'] == NULL){
            $item = "item2";
        } else if($key['item3'] == NULL){
            $item = "item3";
        } else if($key['item4'] == NULL){
            $item = "item4";
        } else if($key['item5'] == NULL){
            $item = "item5";
        } else if($key['item6'] == NULL){
            $item = "item6";
        } else if($key['item7'] == NULL){
            $item = "item7";
        } else if($key['item8'] == NULL){
            $item = "item8";
        } else if($key['item9'] == NULL){
            $item = "item9";
        } else if($key['item10'] == NULL){
            $item = "item10";
        } else if($key['item11'] == NULL){
            $item = "item11";
        } else if($key['item12'] == NULL){
            $item = "item12";
        } else if($key['item13'] == NULL){
            $item = "item13";
        } else if($key['item14'] == NULL){
            $item = "item14";
        } else if($key['item15'] == NULL){
            $item = "item15";
        } else if($key['item16'] == NULL){
            $item = "item16";
        } else if($key['item17'] == NULL){
            $item = "item17";
        } else if($key['item18'] == NULL){
            $item = "item18";
        } else if($key['item19'] == NULL){
            $item = "item19";
        } else if($key['item20'] == NULL){
            $item = "item20";
        } else if($key['item21'] == NULL){
            $item = "item21";
        } else if($key['item22'] == NULL){
            $item = "item22";
        } else if($key['item23'] == NULL){
            $item = "item23";
        } else if($key['item24'] == NULL){
            $item = "item24";
        } else if($key['item25'] == NULL){
            $item = "item25";
        } else {
            $_SESSION['msg'] = "Inventário do personagem selecionado para receber o item está lotado";
        }


        if($item == "item1"){
            $item1 = $_SESSION['item_troca'];
        } else if($item == "item2"){
            $item2 = $_SESSION['item_troca'];
        } else if($item == "item3"){
            $item3 = $_SESSION['item_troca'];
        } else if($item == "item4"){
            $item4 = $_SESSION['item_troca'];
        } else if($item == "item5"){
            $item5 = $_SESSION['item_troca'];
        } else if($item == "item6"){
            $item6 = $_SESSION['item_troca'];
        } else if($item == "item7"){
            $item7 = $_SESSION['item_troca'];
        } else if($item == "item8"){
            $item8 = $_SESSION['item_troca'];
        } else if($item == "item9"){
            $item9 = $_SESSION['item_troca'];
        } else if($item == "item10"){
            $item10 = $_SESSION['item_troca'];
        } else if($item == "item11"){
            $item11 = $_SESSION['item_troca'];
        } else if($item == "item12"){
            $item12 = $_SESSION['item_troca'];
        } else if($item == "item13"){
            $item13 = $_SESSION['item_troca'];
        } else if($item == "item14"){
            $item14 = $_SESSION['item_troca'];
        } else if($item == "item15"){
            $item15 = $_SESSION['item_troca'];
        } else if($item == "item16"){
            $item16 = $_SESSION['item_troca'];
        } else if($item == "item17"){
            $item17 = $_SESSION['item_troca'];
        } else if($item == "item18"){
            $item18 = $_SESSION['item_troca'];
        } else if($item == "item19"){
            $item19 = $_SESSION['item_troca'];
        } else if($item == "item20"){
            $item20 = $_SESSION['item_troca'];
        } else if($item == "item21"){
            $item21 = $_SESSION['item_troca'];
        } else if($item == "item22"){
            $item22 = $_SESSION['item_troca'];
        } else if($item == "item23"){
            $item23 = $_SESSION['item_troca'];
        } else if($item == "item24"){
            $item24 = $_SESSION['item_troca'];
        } else if($item == "item25"){
            $item25 = $_SESSION['item_troca'];
        }

        $usuario = $nome;
        $apagar_item = $repositorio->ApagarItem($usuario);
        $recolocar_inventario = $repositorio->AdicionarItem($id_inventario,$id_usuario,$nome_pers,$item1,$item2,$item3,$item4,$item5,$item6,$item7,$item8,$item9,$item10,$item11,$item12,$item13,$item14,$item15,$item16,$item17,$item18,$item19,$item20,$item21,$item22,$item23,$item24,$item25);
    }

    // remetente

    $id = $_SESSION['turno'];
    $personagem = $repositorio->MostrarPersonagem($id);
    foreach ($personagem as $key) {
        $nome = $key['nome'];
        $inventario = $repositorio->MostrarInventario($nome);
        foreach ($inventario as $key) {
            if($_SESSION['item_troca'] == $key['item1']){
                $apagar = "item1";
            } else if($_SESSION['item_troca'] == $key['item2']){
                $apagar = "item2";
            } else if($_SESSION['item_troca'] == $key['item3']){
                $apagar = "item3";
            } else if($_SESSION['item_troca'] == $key['item4']){
                $apagar = "item4";
            } else if($_SESSION['item_troca'] == $key['item5']){
                $apagar = "item5";
            } else if($_SESSION['item_troca'] == $key['item6']){
                $apagar = "item6";
            } else if($_SESSION['item_troca'] == $key['item7']){
                $apagar = "item7";
            } else if($_SESSION['item_troca'] == $key['item8']){
                $apagar = "item8";
            } else if($_SESSION['item_troca'] == $key['item9']){
                $apagar = "item9";
            } else if($_SESSION['item_troca'] == $key['item10']){
                $apagar = "item10";
            } else if($_SESSION['item_troca'] == $key['item11']){
                $apagar = "item11";
            } else if($_SESSION['item_troca'] == $key['item12']){
                $apagar = "item12";
            } else if($_SESSION['item_troca'] == $key['item13']){
                $apagar = "item13";
            } else if($_SESSION['item_troca'] == $key['item14']){
                $apagar = "item14";
            } else if($_SESSION['item_troca'] == $key['item15']){
                $apagar = "item15";
            } else if($_SESSION['item_troca'] == $key['item16']){
                $apagar = "item16";
            } else if($_SESSION['item_troca'] == $key['item17']){
                $apagar = "item17";
            } else if($_SESSION['item_troca'] == $key['item18']){
                $apagar = "item18";
            } else if($_SESSION['item_troca'] == $key['item19']){
                $apagar = "item19";
            } else if($_SESSION['item_troca'] == $key['item20']){
                $apagar = "item20";
            } else if($_SESSION['item_troca'] == $key['item21']){
                $apagar = "item21";
            } else if($_SESSION['item_troca'] == $key['item22']){
                $apagar = "item22";
            } else if($_SESSION['item_troca'] == $key['item23']){
                $apagar = "item23";
            } else if($_SESSION['item_troca'] == $key['item24']){
                $apagar = "item24";
            } else if($_SESSION['item_troca'] == $key['item25']){
                $apagar = "item25";
            }
            
    
            $id_inventario = $key['id_inventario'];
            $id_usuario = $key['id_usuario'];
            $nome_pers = $key['nome_pers'];
            $item1 = $key['item1'];
            $item2 = $key['item2'];
            $item3 = $key['item3'];
            $item4 = $key['item4'];
            $item5 = $key['item5'];
            $item6 = $key['item6'];
            $item7 = $key['item7'];
            $item8 = $key['item8'];
            $item9 = $key['item9'];
            $item10 = $key['item10'];
            $item11 = $key['item11'];
            $item12 = $key['item12'];
            $item13 = $key['item13'];
            $item14 = $key['item14'];
            $item15 = $key['item15'];
            $item16 = $key['item16'];
            $item17 = $key['item17'];
            $item18 = $key['item18'];
            $item19 = $key['item19'];
            $item20 = $key['item20'];
            $item21 = $key['item21'];
            $item22 = $key['item22'];
            $item23 = $key['item23'];
            $item24 = $key['item24'];
            $item25 = $key['item25'];
        
    
        if($apagar == "item1"){
            $item1 = "";
        } else if($apagar == "item2"){
            $item2 = "";
        } else if($apagar == "item3"){
            $item3 = "";
        }else if($apagar == "item4"){
            $item4 = "";
        }else if($apagar == "item5"){
            $item5 = "";
        }else if($apagar == "item6"){
            $item6 = "";
        }else if($apagar == "item7"){
            $item7 = "";
        }else if($apagar == "item8"){
            $item8 = "";
        }else if($apagar == "item9"){
            $item9 = "";
        }else if($apagar == "item10"){
            $item10 = "";
        }else if($apagar == "item11"){
            $item11 = "";
        }else if($apagar == "item12"){
            $item12 = "";
        }else if($apagar == "item13"){
            $item13 = "";
        }else if($apagar == "item14"){
            $item14 = "";
        }else if($apagar == "item15"){
            $item15 = "";
        }else if($apagar == "item16"){
            $item16 = "";
        }else if($apagar == "item17"){
            $item17 = "";
        }else if($apagar == "item18"){
            $item18 = "";
        }else if($apagar == "item19"){
            $item19 = "";
        }else if($apagar == "item20"){
            $item20 = "";
        }else if($apagar == "item21"){
            $item21 = "";
        }else if($apagar == "item22"){
            $item22 = "";
        }else if($apagar == "item23"){
            $item23 = "";
        }else if($apagar == "item24"){
            $item24 = "";
        }else if($apagar == "item25"){
            $item25 = "";
        }

        $usuario = $nome;
        $apagar_item = $repositorio->ApagarItem($usuario);
        $recolocar_inventario = $repositorio->AdicionarItem($id_inventario,$id_usuario,$nome_pers,$item1,$item2,$item3,$item4,$item5,$item6,$item7,$item8,$item9,$item10,$item11,$item12,$item13,$item14,$item15,$item16,$item17,$item18,$item19,$item20,$item21,$item22,$item23,$item24,$item25);
        }
    }

    $item = $_SESSION['item_troca'];
    if($item == $_SESSION['armadura_personagem1']){
        unset($_SESSION['armadura_personagem1']);
    } else if($item == $_SESSION['armadura_personagem2']){
        unset($_SESSION['armadura_personagem2']);
    } else if($item == $_SESSION['armadura_personagem3']){
        unset($_SESSION['armadura_personagem3']);
    } else if($item == $_SESSION['armadura_personagem4']){
        unset($_SESSION['armadura_personagem4']);
    } else if($item == $_SESSION['arma1_personagem1']){
        unset($_SESSION['arma1_personagem1']);
    } else if($item == $_SESSION['arma2_personagem1']){
        unset($_SESSION['arma2_personagem1']);
    } else if($item == $_SESSION['arma1_personagem2']){
        unset($_SESSION['arma1_personagem2']);
    } else if($item == $_SESSION['arma2_personagem2']){
        unset($_SESSION['arma2_personagem2']);
    } else if($item == $_SESSION['arma1_personagem3']){
        unset($_SESSION['arma1_personagem3']);
    } else if($item == $_SESSION['arma2_personagem3']){
        unset($_SESSION['arma2_personagem3']);
    }  else if($item == $_SESSION['arma1_personagem4']){
        unset($_SESSION['arma1_personagem4']);
    } else if($item == $_SESSION['arma2_personagem4']){
        unset($_SESSION['arma2_personagem4']);
    }

    unset($_SESSION['item_troca']);
    unset($_SESSION['dar_item']);
    $id = $_SESSION['turno'];
    header("Location: ../passar_turno.php?id=$id");
} else {
    unset($_SESSION['mostrar_itens']);
    $_SESSION['dar_item'] = true;
    header('Location: ../tabletop.php');
}

?>