<?php

session_start();
require_once '../classes/repositorioTabletop.php'; 
$repositorio = new RepositorioTabletopMySQL(); 

$nome_pers = $_POST['nome'];
$numeroLinhas = $repositorio->VerificarNome($nome_pers);
if($numeroLinhas > 0){
    $_SESSION['msg'] = "Nome de personagem não disponível, tente outro";
    header('Location: form_pers.php');
} else {
    if(isset($_POST['nome'])){
        $_SESSION['nome_pers'] = $_POST['nome']; 
        $_SESSION['classe'] = $_POST['classe'];

        header('Location: form_pers.php');
    }
}

echo "<h2><a href='#'>Jogar</a></h2>";

?>