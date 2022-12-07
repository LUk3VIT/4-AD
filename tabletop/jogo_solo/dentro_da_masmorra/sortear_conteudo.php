<?php

session_start();

$dado = 11;

if($dado == 2){
    header('Location: roda_recompensa.php');
    exit;
} else if($dado == 3){
    $_SESSION['tesouro_armadilha'] = true;
    header('Location: rodar_armadilha.php');
} else if($dado == 4){
     if(isset($_SESSION['corredor'])){
          $_SESSION['sala_vazia'] = true;
          header('Location: tabletop.php');
          exit;
     } else {
          header('Location: monstros/sortear_bizarro.php');
     }
} else if($dado == 5){
     header('Location: monstros/sortear_minion.php');
     exit;
} else if($dado == 6){
     header('Location: monstros/sortear_verme.php');
     exit;
} else if($dado == 7){
     header('Location: monstros/sortear_minion.php');
     exit;
} else if($dado == 8){
     if(isset($_SESSION['corredor'])){
          $_SESSION['sala_vazia'] = true;
          header('Location: tabletop.php');
          exit;
     } else {
          header('Location: monstros/sortear_minion.php');
          exit;
     }
} else if($dado == 9){
     $_SESSION['sala_vazia'] = true;
     header('Location: tabletop.php');
     exit;
} else if($dado == 10){
     if(isset($_SESSION['corredor'])){
          $_SESSION['sala_vazia'] = true;
          header('Location: tabletop.php');
          exit;
     } else {
          header('Location: monstros/sortear_bizarro.php');
          exit;
     }
} else if($dado == 11){
     header('Location: monstros/sortear_chefe.php');
     exit;
} else if($dado == 12){
     if(isset($_SESSION['corredor'])){
          $_SESSION['sala_vazia'] = true;
          header('Location: tabletop.php');
          exit;
     } else {
          $_SESSION['dragao'] = true;
          header('Location: monstros/sortear_chefe.php');
          exit;
     }
}

?>