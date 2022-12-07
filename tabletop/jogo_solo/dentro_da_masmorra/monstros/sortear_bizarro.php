<?php

session_start();
require_once '../../../classes/repositorioTabletop.php'; 
$repositorio = new RepositorioTabletopMySQL();

if(isset($_SESSION['cont_chefe'])){
    $_SESSION['cont_chefe'] = $_SESSION['cont_chefe'] + 1;
} else {
    $_SESSION['cont_chefe'] = 1;
}

$dado = rand(1,6);

$bizarro = $repositorio->SortearBizarro($dado);
foreach ($bizarro as $key) {
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
    $_SESSION['hab4_boss'] = "";
}

if($_SESSION['nome_boss'] == "Catoplebas"){
    $_SESSION['olhar_catoplebas'] = true;
}

if($_SESSION['nome_boss'] == "Gremlins Invisíveis"){
    $_SESSION['nivel_boss'] = "?????";
    $_SESSION['vida_boss'] = "?????";
}

$_SESSION['turno'] = $_SESSION['turno1'];
header('Location: ../tabletop.php');

?>