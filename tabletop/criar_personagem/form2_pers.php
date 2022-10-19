<?php
    session_start();
    require_once '../classes/repositorioTabletop.php'; 
    $repositorio = new RepositorioTabletopMySQL();

    $classe = $_SESSION['classe'];
    $x = 2;
    $dinheiro = 0;

    $dinheiro = 0;
        while($x > 0){
            $x = $x - 1;
            $dinheiro = $dinheiro + rand(1,6); 
            $dinheiro; 
        }
        $dinheiro;
    

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
        <?php
        if($_SESSION['classe'] == "Ladino"){
            $_SESSION['item1'] = "corda";
            $_SESSION['item2'] = "armadura leve";
            $_SESSION['item3'] = "arma de uma mão leve";
        } else if($_SESSION['classe'] == "Mago"){
            $_SESSION['item1'] = "arma de mão leve";
            if(isset($_SESSION['magia1'])){
                echo "<h3>1ª Magia: ".$_SESSION['magia1']."</h3>";
                if(isset($_SESSION['magia2'])){
                    echo "<h3>2ª Magia: ".$_SESSION['magia2']."</h3>";
                    if(isset($_SESSION['magia3'])){
                        echo "<h3>3ª Magia: ".$_SESSION['magia3']."</h3>";
                    } else {
                        ?>
                            <form action='sortear_magia.php' method='post'>
                                <input type='submit' value='Sortear 3ª Magia'>
                            </form>
                        <?php
                    }
                } else {
                    ?>
                    <form action='sortear_magia.php' method='post'>
                        <input type='submit' value='Sortear 2ª Magia'>
                    </form>
                <?php
                } 
            } else {
                ?>
                    <form action='sortear_magia.php' method='post'>
                        <input type='submit' value='Sortear 1ª Magia'>
                    </form>
                <?php
            }
        } else if($_SESSION['classe'] == "Elfo"){
            $_SESSION['item1'] = "arco";
            $_SESSION['item2'] = "armadura leve";
            $_SESSION['item3'] = "arma de uma mão leve";
            if(isset($_SESSION['magia1'])){
                echo "<h3>Magia: ".$_SESSION['magia1']."</h3>";
            } else {
                ?>
                    <form action='sortear_magia.php' method='post'>
                        <input type='submit' value='Sortear Magia'>
                    </form>
                <?php
            }
        } else if($_SESSION['classe'] == "Halfling"){
            $_SESSION['item1'] = "funda";
            $_SESSION['item2'] = "arma de uma mão leve";
        } else {
            echo "<label for='itens'>Itens Iniciais</label>";
            $_SESSION['item1'] = $item1;
            echo "<select name='itens' id='itens'>";
                    echo "<option value='$item2' >$item2</option>";
                    echo "<option value='$item3' >$item3</option>";
                    if(isset($item4)){
                        echo "<option value='$item4' >$item4</option>";
                        if(isset($item5)){
                            echo "<option value='$item5' >$item5</option>";
                        }
                    }
            echo "</select>";
        }
       
        ?>
</body>
</html>