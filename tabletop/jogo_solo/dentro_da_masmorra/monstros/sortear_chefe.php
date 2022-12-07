<?php

session_start();
require_once '../../../classes/repositorioTabletop.php'; 
$repositorio = new RepositorioTabletopMySQL();

if($_SESSION['cont_chefe']){
    $_SESSION['cont_chefe'] = $_SESSION['cont_chefe'] + 1;
    $x = rand(1,6) + $_SESSION['cont_chefe'];
    if($x >= 6){
        $_SESSION['boss_final'] = true;
    }
} else {
    $_SESSION['cont_chefe'] = 1;
    $x = rand(1,6) + $_SESSION['cont_chefe'];
    if($x >= 6){
        $_SESSION['boss_final'] = true;
    }
}

$dado = 5;
$chefe = $repositorio->SortearChefe($dado);
foreach ($chefe as $key) {
    $_SESSION['boss'] = true;
    $_SESSION['nome_boss'] = $key['nome'];
    $_SESSION['nivel_boss'] = $key['nivel'];
    $_SESSION['vida_total_boss'] = $key['vida'];
    $_SESSION['img_boss'] = $key['img'];
    $_SESSION['tesouro_boss'] = $key['tesouro'];
    $_SESSION['ataques_boss'] = $key['ataques'];
    $_SESSION['ataques_defender'] = $key['ataques'];
    $_SESSION['hab1_boss'] = $key['hab1'];
    $_SESSION['hab2_boss'] = $key['hab2'];
    $_SESSION['hab3_boss'] = $key['hab3'];
    $_SESSION['hab4_boss'] = $key['hab4'];
}

if($_SESSION['nome_boss'] == "Senhor do Caos"){
    $dado = rand(1,6);
    if($dado >= 1 && $dado <=3){
        $_SESSION['hab2_boss'] = "";
        $_SESSION['hab3_boss'] = "";
        $_SESSION['hab4_boss'] = "";
        $_SESSION['hab1_boss'] = "Nenhum poder especial";
    } else if($dado == 4){
        $chance = rand(1,2);
        if($chance == 1){
            $_SESSION['mau_olhado_1'] = true;
        } else {
            $_SESSION['mau_olhado_2'] = true;
        }
        $_SESSION['hab2_boss'] = "";
        $_SESSION['hab3_boss'] = "";
    } else if($dado == 5){
        $_SESSION['dreno_energia'] = true;
        $_SESSION['hab1_boss'] = "";
        $_SESSION['hab3_boss'] = "";
    } else if($dado == 6){
        $_SESSION['fire_blast'] = true;
        $_SESSION['hab1_boss'] = "";
        $_SESSION['hab2_boss'] = "";
    }
}

if(isset($_SESSION['boss_final'])){
    $_SESSION['ataques_boss'] = $_SESSION['ataques_defender'] = $_SESSION['ataques_boss'] + 1;
    $_SESSION['vida_total_boss'] = $_SESSION['vida_total_boss'] + 1;
}

$_SESSION['turno'] = $_SESSION['turno1'];
header('Location: ../tabletop.php');

?>