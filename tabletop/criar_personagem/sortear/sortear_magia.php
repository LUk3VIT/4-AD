<?php

session_start();

require_once '../../classes/repositorioTabletop.php'; 
$repositorio = new RepositorioTabletopMySQL();

if(isset($_SESSION['magia1'])){
    if(isset($_SESSION['magia2'])){
        if(isset($_SESSION['magia3'])){
            header('Location: ../form_pers.php');
        } else { 
            $id = rand(1,6);
            $magia = $repositorio->EscolherMagia($id);
            echo $_SESSION['magia3'] = $magia;
            header('Location: ../form_pers.php');
        }
    } else {
        $id = rand(1,6);
        $magia = $repositorio->EscolherMagia($id);
        $_SESSION['magia2'] = $magia;
        header('Location: ../form_pers.php');
    }
} else {
    $id = rand(1,6);
    $magia = $repositorio->EscolherMagia($id);
    echo $_SESSION['magia1'] = $magia;
    header('Location: ../form_pers.php');
}


?>