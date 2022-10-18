<?php
    session_start();
    require_once '../classes/repositorioTabletop.php'; 
    $repositorio = new RepositorioTabletopMySQL();

    $classe = $_SESSION['classe'];
    $x = 2;
    $dinheiro = 0;

    $dinheiro = 0;
        while($x > 0){
             echo $x = $x - 1;
            $dinheiro = $dinheiro + rand(1,6);
            echo $dinheiro; 
            echo "<br>";
        }
        echo $dinheiro;
    exit;
    

    $consulta = $repositorio->PegarInfoClasse($classe);
 
    foreach ($consulta as $key) {
        $x = 2;
        $item1 = $key['eq1'];
        if($key['eq2'] != NULL){
            $item2 = $key['eq2'];
        }
        if($key['eq3'] != NULL){
            $item3 = $key['eq3'];
        }
        if($key['eq4'] != NULL){
            $item4 = $key['eq4'];
        }
        if($key['eq5'] != NULL){
            $item5 = $key['eq5'];
        }

    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Definindo itens e outras características</title>
</head>
<body>
    <input type="button" value="">
</body>
</html>