<?php
session_start();
require_once '../../classes/repositorioTabletop.php'; 
$repositorio = new RepositorioTabletopMySQL();
$id = $_SESSION['id_remetente'];
$personagem = $repositorio->MostrarPersonagem($id);
foreach ($personagem as $key) {
    $nome_remetente = $key['nome'];
    $classe_remetente = $key['classe'];
    $img = $key['img'];
}
?> 
<!DOCTYPE html>
<html lang="pt-br"> 
<head> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escolher Item da Troca Justa</title>
</head>
<body>
    <h2><a href='ver_inventarios.php'>Voltar aos Inventários</a></h2>
    <h1>Inventários:<h1>
    <?php echo "<img src='../../$img'>";  ?>
    <h2>Nome do Remetente: <?php echo $nome_remetente ?></h2>
    <h2>Classe do Remetente: <?php echo $classe_remetente ?></h2>
    <h2>Item já escolhido: <?php echo $_SESSION['item'] ?></h2>
    <?php
        if($_SESSION['id_remetente'] == $_SESSION['personagem1']){
            $id = $_SESSION['personagem2'];
            $personagem = $repositorio->MostrarPersonagem($id);
            foreach ($personagem as $key) {
                $nome = $key['nome'];
                $img = $key['img'];
                echo "<img src='../../$img'>";
                echo "<h2>Nome: ".$key['nome']."</h2>";
                echo "<h2>Classe: ".$key['classe']."</h2>";
                echo "<h2>Nível: ".$key['nivel']."</h2>";
                echo "<h2>Dinheiro: ".$key['dinheiro']."</h2>";
                $classe = $key['classe'];
                $x = 0;
                $verificar_itens = $repositorio->VerificarItem($classe);
                foreach ($verificar_itens as $key) {
                    $key['nome'];
                    if($_SESSION['item'] == $key['nome']){
                        $x = $x + 1;
                    } 
                }
                if($x > 0){
                    echo "<h2 style='color:red'>A classe deste personagem não pode usar este Item!!!</h2>";
                } else {
                    $id = $_SESSION['id_remetente'];
                    $personagem = $repositorio->MostrarPersonagem($id);
                    foreach ($personagem as $key) {
                        $classe = $key['classe'];
                        $verif = $repositorio->VerificarItem($classe);
                        foreach ($verif as $key) {
                            if(isset($proib1)){
                                if(isset($proib2)){
                                    if(isset($proib3)){
                                        if(isset($proib4)){
                                            if(isset($proib5)){
                                                if(isset($proib6)){
                                                    if(isset($proib7)){
                                                        if(isset($proib8)){
                                                            if(isset($proib9)){
                                                                if(isset($proib10)){
                                                                    if(isset($proib11)){

                                                                    } else {
                                                                        if(isset($key['nome'])){
                                                                             $proib11 = $key['nome'];
                                                                            
                                                                        }
                                                                    }
                                                                } else {
                                                                    if(isset($key['nome'])){
                                                                         $proib10 = $key['nome'];
                                                                        
                                                                    }
                                                                }
                                                            } else {
                                                                if(isset($key['nome'])){
                                                                     $proib9 = $key['nome'];
                                                                    
                                                                }
                                                            }
                                                        } else {
                                                            if(isset($key['nome'])){
                                                                 $proib8 = $key['nome'];
                                                                
                                                            }
                                                        }
                                                    } else {
                                                        if(isset($key['nome'])){
                                                             $proib7 = $key['nome'];
                                                           
                                                        }
                                                    }
                                                } else {
                                                    if(isset($key['nome'])){
                                                         $proib6 = $key['nome'];
                                                       
                                                    }
                                                }
                                            } else {
                                                if(isset($key['nome'])){
                                                     $proib5 = $key['nome'];
                                                    
                                                }
                                            }
                                        } else {
                                            if(isset($key['nome'])){
                                                 $proib4 = $key['nome'];
                                                
                                            }
                                        }
                                    } else {
                                        if(isset($key['nome'])){
                                             $proib3 = $key['nome'];
                                            
                                        }
                                    }
                                } else {
                                    if(isset($key['nome'])){
                                         $proib2 = $key['nome'];
                                        
                                    }
                                }
                            } else {
                                if(isset($key['nome'])){
                                    $proib1 = $key['nome'];
                                    
                                }
                            }
                        }
                        $inventario = $repositorio->MostrarInventario($nome);
                        foreach ($inventario as $key) {
                            
                            echo "<ul>";
                                $item1 = $key['item1'];
                                if(isset($proib1) && $proib1 == $item1 || isset($proib2) && $proib2 == $item1 || isset($proib3) && $proib3 == $item1 || isset($proib4) && $proib4 == $item1 || isset($proib5) && $proib5 == $item1 || isset($proib6) && $proib6 == $item1 || isset($proib7) && $proib7 == $item1 || isset($proib8) && $proib8 == $item1 || isset($proib9) && $proib9 == $item1 || isset($proib10) && $proib10 == $item1 || isset($proib11) && $proib11 == $item1 ){
                                    echo "<li>".$key['item1']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                    </li>";
                                } else {
                                    echo "<li>".$key['item1']."
                                        <form action='s_item2.php' method='post'>
                                        <label for='nome' hidden></label>
                                        <input type='text' id='nome' name='nome' value='$nome' hidden>
                                        <label for='item' hidden></label>
                                        <input type='text' id='item' name='item' value='$item1' hidden>
                                        <input type='submit' value='Trocar'>
                                        </form>
                                    </li>";
                                }
                                $item2 = $key['item2'];
                                if(isset($proib1) && $proib1 == $item2 || isset($proib2) && $proib2 == $item2 || isset($proib3) && $proib3 == $item2 || isset($proib4) && $proib4 == $item2 || isset($proib5) && $proib5 == $item2 || isset($proib6) && $proib6 == $item2 || isset($proib7) && $proib7 == $item2 || isset($proib8) && $proib8 == $item2 || isset($proib9) && $proib9 == $item2 || isset($proib10) && $proib10 == $item2 || isset($proib11) && $proib11 == $item2 ){
                                    echo "<li>".$key['item2']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                    </li>";
                                } else {
                                    echo "<li>".$key['item2']."
                                        <form action='s_item2.php' method='post'>
                                        <label for='nome' hidden></label>
                                        <input type='text' id='nome' name='nome' value='$nome' hidden>
                                        <label for='item' hidden></label>
                                        <input type='text' id='item' name='item' value='$item2' hidden>
                                        <input type='submit' value='Trocar'>
                                        </form>
                                    </li>";
                                }
                                if($key['item3'] != NULL){
                                    $item3 = $key['item3'];
                                    if(isset($proib1) && $proib1 == $item3 || isset($proib2) && $proib2 == $item3 || isset($proib3) && $proib3 == $item3 || isset($proib4) && $proib4 == $item3 || isset($proib5) && $proib5 == $item3 || isset($proib6) && $proib6 == $item3 || isset($proib7) && $proib7 == $item3 || isset($proib8) && $proib8 == $item3 || isset($proib9) && $proib9 == $item3 || isset($proib10) && $proib10 == $item3 || isset($proib11) && $proib11 == $item3 ){
                                        echo "<li>".$key['item3']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item3']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item3' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item4'] != NULL){
                                    $item4 = $key['item4'];
                                    if(isset($proib1) && $proib1 == $item4 || isset($proib2) && $proib2 == $item4 || isset($proib3) && $proib3 == $item4 || isset($proib4) && $proib4 == $item4 || isset($proib5) && $proib5 == $item4 || isset($proib6) && $proib6 == $item4 || isset($proib7) && $proib7 == $item4 || isset($proib8) && $proib8 == $item4 || isset($proib9) && $proib9 == $item4 || isset($proib10) && $proib10 == $item4 || isset($proib11) && $proib11 == $item4 ){
                                        echo "<li>".$key['item4']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item4']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item4' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item5'] != NULL){
                                    $item5 = $key['item5'];
                                    if(isset($proib1) && $proib1 == $item5 || isset($proib2) && $proib2 == $item5 || isset($proib3) && $proib3 == $item5 || isset($proib4) && $proib4 == $item5 || isset($proib5) && $proib5 == $item5 || isset($proib6) && $proib6 == $item5 || isset($proib7) && $proib7 == $item5 || isset($proib8) && $proib8 == $item5 || isset($proib9) && $proib9 == $item5 || isset($proib10) && $proib10 == $item5 || isset($proib11) && $proib11 == $item5 ){
                                        echo "<li>".$key['item5']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item5']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item5' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item6'] != NULL){
                                    $item6 = $key['item6'];
                                    if(isset($proib1) && $proib1 == $item6 || isset($proib2) && $proib2 == $item6 || isset($proib3) && $proib3 == $item6 || isset($proib4) && $proib4 == $item6 || isset($proib5) && $proib5 == $item6 || isset($proib6) && $proib6 == $item6 || isset($proib7) && $proib7 == $item6 || isset($proib8) && $proib8 == $item6 || isset($proib9) && $proib9 == $item6 || isset($proib10) && $proib10 == $item6 || isset($proib11) && $proib11 == $item6 ){
                                        echo "<li>".$key['item6']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item6']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item6' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item7'] != NULL){
                                    $item7 = $key['item7'];
                                    if(isset($proib1) && $proib1 == $item7 || isset($proib2) && $proib2 == $item7 || isset($proib3) && $proib3 == $item7 || isset($proib4) && $proib4 == $item7 || isset($proib5) && $proib5 == $item7 || isset($proib6) && $proib6 == $item7 || isset($proib7) && $proib7 == $item7 || isset($proib8) && $proib8 == $item7 || isset($proib9) && $proib9 == $item7 || isset($proib10) && $proib10 == $item7 || isset($proib11) && $proib11 == $item7 ){
                                        echo "<li>".$key['item7']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item7']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item7' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item8'] != NULL){
                                    $item8 = $key['item8'];
                                    if(isset($proib1) && $proib1 == $item8 || isset($proib2) && $proib2 == $item8 || isset($proib3) && $proib3 == $item8 || isset($proib4) && $proib4 == $item8 || isset($proib5) && $proib5 == $item8 || isset($proib6) && $proib6 == $item8 || isset($proib7) && $proib7 == $item8 || isset($proib8) && $proib8 == $item8 || isset($proib9) && $proib9 == $item8 || isset($proib10) && $proib10 == $item8 || isset($proib11) && $proib11 == $item8 ){
                                        echo "<li>".$key['item8']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item8']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item8' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item9'] != NULL){
                                    $item9 = $key['item9'];
                                    if(isset($proib1) && $proib1 == $item9 || isset($proib2) && $proib2 == $item9 || isset($proib3) && $proib3 == $item9 || isset($proib4) && $proib4 == $item9 || isset($proib5) && $proib5 == $item9 || isset($proib6) && $proib6 == $item9 || isset($proib7) && $proib7 == $item9|| isset($proib8) && $proib8 == $item9 || isset($proib9) && $proib9 == $item9 || isset($proib10) && $proib10 == $item9 || isset($proib11) && $proib11 == $item9 ){
                                        echo "<li>".$key['item9']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item9']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item9' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item10'] != NULL){
                                    $item10 = $key['item10'];
                                    if(isset($proib1) && $proib1 == $item10 || isset($proib2) && $proib2 == $item10 || isset($proib3) && $proib3 == $item10 || isset($proib4) && $proib4 == $item10 || isset($proib5) && $proib5 == $item10 || isset($proib6) && $proib6 == $item10 || isset($proib7) && $proib7 == $item10 || isset($proib8) && $proib8 == $item10 || isset($proib9) && $proib9 == $item10 || isset($proib10) && $proib10 == $item10 || isset($proib11) && $proib11 == $item10 ){
                                        echo "<li>".$key['item10']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item10']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item10' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item11'] != NULL){
                                    $item11 = $key['item11'];
                                    if(isset($proib1) && $proib1 == $item11 || isset($proib2) && $proib2 == $item11 || isset($proib3) && $proib3 == $item11 || isset($proib4) && $proib4 == $item11 || isset($proib5) && $proib5 == $item11 || isset($proib6) && $proib6 == $item11 || isset($proib7) && $proib7 == $item11 || isset($proib8) && $proib8 == $item11 || isset($proib9) && $proib9 == $item11 || isset($proib10) && $proib10 == $item11 || isset($proib11) && $proib11 == $item11 ){
                                        echo "<li>".$key['item11']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item11']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item11' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item12'] != NULL){
                                    $item12 = $key['item12'];
                                    if(isset($proib1) && $proib1 == $item12 || isset($proib2) && $proib2 == $item12 || isset($proib3) && $proib3 == $item12 || isset($proib4) && $proib4 == $item12 || isset($proib5) && $proib5 == $item12 || isset($proib6) && $proib6 == $item12 || isset($proib7) && $proib7 == $item12 || isset($proib8) && $proib8 == $item12 || isset($proib9) && $proib9 == $item12 || isset($proib10) && $proib10 == $item12 || isset($proib11) && $proib11 == $item12 ){
                                        echo "<li>".$key['item12']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item12']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item12' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item13'] != NULL){
                                    $item13 = $key['item13'];
                                    if(isset($proib1) && $proib1 == $item13 || isset($proib2) && $proib2 == $item13 || isset($proib3) && $proib3 == $item13 || isset($proib4) && $proib4 == $item13 || isset($proib5) && $proib5 == $item13 || isset($proib6) && $proib6 == $item13 || isset($proib7) && $proib7 == $item13 || isset($proib8) && $proib8 == $item13 || isset($proib9) && $proib9 == $item13 || isset($proib10) && $proib10 == $item13 || isset($proib11) && $proib11 == $item13 ){
                                        echo "<li>".$key['item13']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item13']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item13' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item14'] != NULL){
                                    $item14 = $key['item14'];
                                    if(isset($proib1) && $proib1 == $item14 || isset($proib2) && $proib2 == $item14 || isset($proib3) && $proib3 == $item14 || isset($proib4) && $proib4 == $item14 || isset($proib5) && $proib5 == $item14 || isset($proib6) && $proib6 == $item14 || isset($proib7) && $proib7 == $item14 || isset($proib8) && $proib8 == $item14 || isset($proib9) && $proib9 == $item14 || isset($proib10) && $proib10 == $item14 || isset($proib11) && $proib11 == $item14 ){
                                        echo "<li>".$key['item14']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item14']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item14' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item15'] != NULL){
                                    $item15 = $key['item15'];
                                    if(isset($proib1) && $proib1 == $item15 || isset($proib2) && $proib2 == $item15 || isset($proib3) && $proib3 == $item15 || isset($proib4) && $proib4 == $item15 || isset($proib5) && $proib5 == $item15 || isset($proib6) && $proib6 == $item15 || isset($proib7) && $proib7 == $item15 || isset($proib8) && $proib8 == $item15 || isset($proib9) && $proib9 == $item15 || isset($proib10) && $proib10 == $item15 || isset($proib11) && $proib11 == $item15 ){
                                        echo "<li>".$key['item15']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item15']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item15' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item16'] != NULL){
                                    $item16 = $key['item16'];
                                    if(isset($proib1) && $proib1 == $item16 || isset($proib2) && $proib2 == $item16 || isset($proib3) && $proib3 == $item16 || isset($proib4) && $proib4 == $item16 || isset($proib5) && $proib5 == $item16 || isset($proib6) && $proib6 == $item16 || isset($proib7) && $proib7 == $item16 || isset($proib8) && $proib8 == $item16 || isset($proib9) && $proib9 == $item16 || isset($proib10) && $proib10 == $item16 || isset($proib11) && $proib11 == $item16 ){
                                        echo "<li>".$key['item16']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item16']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item16' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item17'] != NULL){
                                    $item17 = $key['item17'];
                                    if(isset($proib1) && $proib1 == $item17 || isset($proib2) && $proib2 == $item17 || isset($proib3) && $proib3 == $item17 || isset($proib4) && $proib4 == $item17 || isset($proib5) && $proib5 == $item17 || isset($proib6) && $proib6 == $item17 || isset($proib7) && $proib7 == $item17 || isset($proib8) && $proib8 == $item17 || isset($proib9) && $proib9 == $item17 || isset($proib10) && $proib10 == $item17 || isset($proib11) && $proib11 == $item17 ){
                                        echo "<li>".$key['item17']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item17']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item17' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item18'] != NULL){
                                    $item18 = $key['item18'];
                                    if(isset($proib1) && $proib1 == $item18 || isset($proib2) && $proib2 == $item18 || isset($proib3) && $proib3 == $item18 || isset($proib4) && $proib4 == $item18 || isset($proib5) && $proib5 == $item18 || isset($proib6) && $proib6 == $item18 || isset($proib7) && $proib7 == $item18 || isset($proib8) && $proib8 == $item18 || isset($proib9) && $proib9 == $item18 || isset($proib10) && $proib10 == $item18 || isset($proib11) && $proib11 == $item18 ){
                                        echo "<li>".$key['item18']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item18']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item18' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item19'] != NULL){
                                    $item19 = $key['item19'];
                                    if(isset($proib1) && $proib1 == $item19 || isset($proib2) && $proib2 == $item19 || isset($proib3) && $proib3 == $item19 || isset($proib4) && $proib4 == $item19 || isset($proib5) && $proib5 == $item19 || isset($proib6) && $proib6 == $item19 || isset($proib7) && $proib7 == $item19 || isset($proib8) && $proib8 == $item19 || isset($proib9) && $proib9 == $item19 || isset($proib10) && $proib10 == $item19 || isset($proib11) && $proib11 == $item19 ){
                                        echo "<li>".$key['item19']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item19']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item19' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item20'] != NULL){
                                    $item20 = $key['item20'];
                                    if(isset($proib1) && $proib1 == $item20 || isset($proib2) && $proib2 == $item20 || isset($proib3) && $proib3 == $item20 || isset($proib4) && $proib4 == $item20 || isset($proib5) && $proib5 == $item20 || isset($proib6) && $proib6 == $item20 || isset($proib7) && $proib7 == $item20 || isset($proib8) && $proib8 == $item20 || isset($proib9) && $proib9 == $item20 || isset($proib10) && $proib10 == $item20 || isset($proib11) && $proib11 == $item20 ){
                                        echo "<li>".$key['item20']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item20']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item20' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item21'] != NULL){
                                    $item21 = $key['item21'];
                                    if(isset($proib1) && $proib1 == $item21 || isset($proib2) && $proib2 == $item21 || isset($proib3) && $proib3 == $item21 || isset($proib4) && $proib4 == $item21 || isset($proib5) && $proib5 == $item21 || isset($proib6) && $proib6 == $item21 || isset($proib7) && $proib7 == $item21 || isset($proib8) && $proib8 == $item21 || isset($proib9) && $proib9 == $item21 || isset($proib10) && $proib10 == $item21 || isset($proib11) && $proib11 == $item21 ){
                                        echo "<li>".$key['item21']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item21']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item21' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item22'] != NULL){
                                    $item22 = $key['item22'];
                                    if(isset($proib1) && $proib1 == $item22 || isset($proib2) && $proib2 == $item22 || isset($proib3) && $proib3 == $item22 || isset($proib4) && $proib4 == $item22 || isset($proib5) && $proib5 == $item22 || isset($proib6) && $proib6 == $item22 || isset($proib7) && $proib7 == $item22 || isset($proib8) && $proib8 == $item22 || isset($proib9) && $proib9 == $item22 || isset($proib10) && $proib10 == $item22 || isset($proib11) && $proib11 == $item22 ){
                                        echo "<li>".$key['item22']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item22']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item22' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item23'] != NULL){
                                    $item23 = $key['item23'];
                                    if(isset($proib1) && $proib1 == $item23 || isset($proib2) && $proib2 == $item23 || isset($proib3) && $proib3 == $item23 || isset($proib4) && $proib4 == $item23 || isset($proib5) && $proib5 == $item23 || isset($proib6) && $proib6 == $item23 || isset($proib7) && $proib7 == $item23 || isset($proib8) && $proib8 == $item23 || isset($proib9) && $proib9 == $item23 || isset($proib10) && $proib10 == $item23 || isset($proib11) && $proib11 == $item23 ){
                                        echo "<li>".$key['item23']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item23']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item23' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item24'] != NULL){
                                    $item24 = $key['item24'];
                                    if(isset($proib1) && $proib1 == $item24 || isset($proib2) && $proib2 == $item24 || isset($proib3) && $proib3 == $item24 || isset($proib4) && $proib4 == $item24 || isset($proib5) && $proib5 == $item24 || isset($proib6) && $proib6 == $item24 || isset($proib7) && $proib7 == $item24 || isset($proib8) && $proib8 == $item24 || isset($proib9) && $proib9 == $item24 || isset($proib10) && $proib10 == $item24 || isset($proib11) && $proib11 == $item24 ){
                                        echo "<li>".$key['item24']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item24']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item24' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item25'] != NULL){
                                    if(isset($proib1) && $proib1 == $item25 || isset($proib2) && $proib2 == $item25 || isset($proib3) && $proib3 == $item25 || isset($proib4) && $proib4 == $item25 || isset($proib5) && $proib5 == $item25 || isset($proib6) && $proib6 == $item25 || isset($proib7) && $proib7 == $item25 || isset($proib8) && $proib8 == $item25 || isset($proib9) && $proib9 == $item25 || isset($proib10) && $proib10 == $item25 || isset($proib11) && $proib11 == $item25 ){
                                        echo "<li>".$key['item25']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item25']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item25' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                echo "</ul>";
                            }
                        }
                    }
                    $id = $_SESSION['personagem3'];
                    $personagem = $repositorio->MostrarPersonagem($id);
                    foreach ($personagem as $key) {
                    $nome = $key['nome'];
                    $img = $key['img'];
                    echo "<img src='../../$img'>";
                    echo "<h2>Nome: ".$key['nome']."</h2>";
                    echo "<h2>Classe: ".$key['classe']."</h2>";
                    echo "<h2>Nível: ".$key['nivel']."</h2>";
                    echo "<h2>Dinheiro: ".$key['dinheiro']."</h2>";
                    $classe = $key['classe'];
                    $x = 0;
                    $verificar_itens = $repositorio->VerificarItem($classe);
                    foreach ($verificar_itens as $key) {
                        $key['nome'];
                        if($_SESSION['item'] == $key['nome']){
                            $x = $x + 1;
                        } 
                    }
                    if($x > 0){
                        echo "<h2 style='color:red'>A classe deste personagem não pode usar este Item!!!</h2>";
                    } else {
                    $id = $_SESSION['id_remetente'];
                    $personagem = $repositorio->MostrarPersonagem($id);
                    foreach ($personagem as $key) {
                        $classe = $key['classe'];
                        $verif = $repositorio->VerificarItem($classe);
                        foreach ($verif as $key) {
                            if(isset($proib1)){
                                if(isset($proib2)){
                                    if(isset($proib3)){
                                        if(isset($proib4)){
                                            if(isset($proib5)){
                                                if(isset($proib6)){
                                                    if(isset($proib7)){
                                                        if(isset($proib8)){
                                                            if(isset($proib9)){
                                                                if(isset($proib10)){
                                                                    if(isset($proib11)){

                                                                    } else {
                                                                        if(isset($key['nome'])){
                                                                             $proib11 = $key['nome'];
                                                                            
                                                                        }
                                                                    }
                                                                } else {
                                                                    if(isset($key['nome'])){
                                                                         $proib10 = $key['nome'];
                                                                        
                                                                    }
                                                                }
                                                            } else {
                                                                if(isset($key['nome'])){
                                                                     $proib9 = $key['nome'];
                                                                    
                                                                }
                                                            }
                                                        } else {
                                                            if(isset($key['nome'])){
                                                                 $proib8 = $key['nome'];
                                                                
                                                            }
                                                        }
                                                    } else {
                                                        if(isset($key['nome'])){
                                                             $proib7 = $key['nome'];
                                                            
                                                        }
                                                    }
                                                } else {
                                                    if(isset($key['nome'])){
                                                         $proib6 = $key['nome'];
                                                        
                                                    }
                                                }
                                            } else {
                                                if(isset($key['nome'])){
                                                     $proib5 = $key['nome'];
                                                    
                                                }
                                            }
                                        } else {
                                            if(isset($key['nome'])){
                                                 $proib4 = $key['nome'];
                                                
                                            }
                                        }
                                    } else {
                                        if(isset($key['nome'])){
                                             $proib3 = $key['nome'];
                                            
                                        }
                                    }
                                } else {
                                    if(isset($key['nome'])){
                                         $proib2 = $key['nome'];
                                        
                                    }
                                }
                            } else {
                                if(isset($key['nome'])){
                                    $proib1 = $key['nome'];
                                    
                                }
                            }
                        }
                        $inventario = $repositorio->MostrarInventario($nome);
                        foreach ($inventario as $key) {
                            
                            echo "<ul>";
                                $item1 = $key['item1'];
                                if(isset($proib1) && $proib1 == $item1 || isset($proib2) && $proib2 == $item1 || isset($proib3) && $proib3 == $item1 || isset($proib4) && $proib4 == $item1 || isset($proib5) && $proib5 == $item1 || isset($proib6) && $proib6 == $item1 || isset($proib7) && $proib7 == $item1 || isset($proib8) && $proib8 == $item1 || isset($proib9) && $proib9 == $item1 || isset($proib10) && $proib10 == $item1 || isset($proib11) && $proib11 == $item1 ){
                                    echo "<li>".$key['item1']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                    </li>";
                                } else {
                                    echo "<li>".$key['item1']."
                                        <form action='s_item2.php' method='post'>
                                        <label for='nome' hidden></label>
                                        <input type='text' id='nome' name='nome' value='$nome' hidden>
                                        <label for='item' hidden></label>
                                        <input type='text' id='item' name='item' value='$item1' hidden>
                                        <input type='submit' value='Trocar'>
                                        </form>
                                    </li>";
                                }
                                $item2 = $key['item2'];
                                if(isset($proib1) && $proib1 == $item2 || isset($proib2) && $proib2 == $item2 || isset($proib3) && $proib3 == $item2 || isset($proib4) && $proib4 == $item2 || isset($proib5) && $proib5 == $item2 || isset($proib6) && $proib6 == $item2 || isset($proib7) && $proib7 == $item2 || isset($proib8) && $proib8 == $item2 || isset($proib9) && $proib9 == $item2 || isset($proib10) && $proib10 == $item2 || isset($proib11) && $proib11 == $item2 ){
                                    echo "<li>".$key['item2']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                    </li>";
                                } else {
                                    echo "<li>".$key['item2']."
                                        <form action='s_item2.php' method='post'>
                                        <label for='nome' hidden></label>
                                        <input type='text' id='nome' name='nome' value='$nome' hidden>
                                        <label for='item' hidden></label>
                                        <input type='text' id='item' name='item' value='$item2' hidden>
                                        <input type='submit' value='Trocar'>
                                        </form>
                                    </li>";
                                }
                                if($key['item3'] != NULL){
                                    $item3 = $key['item3'];
                                    if(isset($proib1) && $proib1 == $item3 || isset($proib2) && $proib2 == $item3 || isset($proib3) && $proib3 == $item3 || isset($proib4) && $proib4 == $item3 || isset($proib5) && $proib5 == $item3 || isset($proib6) && $proib6 == $item3 || isset($proib7) && $proib7 == $item3 || isset($proib8) && $proib8 == $item3 || isset($proib9) && $proib9 == $item3 || isset($proib10) && $proib10 == $item3 || isset($proib11) && $proib11 == $item3 ){
                                        echo "<li>".$key['item3']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item3']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item3' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item4'] != NULL){
                                    $item4 = $key['item4'];
                                    if(isset($proib1) && $proib1 == $item4 || isset($proib2) && $proib2 == $item4 || isset($proib3) && $proib3 == $item4 || isset($proib4) && $proib4 == $item4 || isset($proib5) && $proib5 == $item4 || isset($proib6) && $proib6 == $item4 || isset($proib7) && $proib7 == $item4 || isset($proib8) && $proib8 == $item4 || isset($proib9) && $proib9 == $item4 || isset($proib10) && $proib10 == $item4 || isset($proib11) && $proib11 == $item4 ){
                                        echo "<li>".$key['item4']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item4']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item4' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item5'] != NULL){
                                    $item5 = $key['item5'];
                                    if(isset($proib1) && $proib1 == $item5 || isset($proib2) && $proib2 == $item5 || isset($proib3) && $proib3 == $item5 || isset($proib4) && $proib4 == $item5 || isset($proib5) && $proib5 == $item5 || isset($proib6) && $proib6 == $item5 || isset($proib7) && $proib7 == $item5 || isset($proib8) && $proib8 == $item5 || isset($proib9) && $proib9 == $item5 || isset($proib10) && $proib10 == $item5 || isset($proib11) && $proib11 == $item5 ){
                                        echo "<li>".$key['item5']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item5']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item5' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item6'] != NULL){
                                    $item6 = $key['item6'];
                                    if(isset($proib1) && $proib1 == $item6 || isset($proib2) && $proib2 == $item6 || isset($proib3) && $proib3 == $item6 || isset($proib4) && $proib4 == $item6 || isset($proib5) && $proib5 == $item6 || isset($proib6) && $proib6 == $item6 || isset($proib7) && $proib7 == $item6 || isset($proib8) && $proib8 == $item6 || isset($proib9) && $proib9 == $item6 || isset($proib10) && $proib10 == $item6 || isset($proib11) && $proib11 == $item6 ){
                                        echo "<li>".$key['item6']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item6']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item6' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item7'] != NULL){
                                    $item7 = $key['item7'];
                                    if(isset($proib1) && $proib1 == $item7 || isset($proib2) && $proib2 == $item7 || isset($proib3) && $proib3 == $item7 || isset($proib4) && $proib4 == $item7 || isset($proib5) && $proib5 == $item7 || isset($proib6) && $proib6 == $item7 || isset($proib7) && $proib7 == $item7 || isset($proib8) && $proib8 == $item7 || isset($proib9) && $proib9 == $item7 || isset($proib10) && $proib10 == $item7 || isset($proib11) && $proib11 == $item7 ){
                                        echo "<li>".$key['item7']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item7']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item7' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item8'] != NULL){
                                    $item8 = $key['item8'];
                                    if(isset($proib1) && $proib1 == $item8 || isset($proib2) && $proib2 == $item8 || isset($proib3) && $proib3 == $item8 || isset($proib4) && $proib4 == $item8 || isset($proib5) && $proib5 == $item8 || isset($proib6) && $proib6 == $item8 || isset($proib7) && $proib7 == $item8 || isset($proib8) && $proib8 == $item8 || isset($proib9) && $proib9 == $item8 || isset($proib10) && $proib10 == $item8 || isset($proib11) && $proib11 == $item8 ){
                                        echo "<li>".$key['item8']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item8']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item8' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item9'] != NULL){
                                    $item9 = $key['item9'];
                                    if(isset($proib1) && $proib1 == $item9 || isset($proib2) && $proib2 == $item9 || isset($proib3) && $proib3 == $item9 || isset($proib4) && $proib4 == $item9 || isset($proib5) && $proib5 == $item9 || isset($proib6) && $proib6 == $item9 || isset($proib7) && $proib7 == $item9|| isset($proib8) && $proib8 == $item9 || isset($proib9) && $proib9 == $item9 || isset($proib10) && $proib10 == $item9 || isset($proib11) && $proib11 == $item9 ){
                                        echo "<li>".$key['item9']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item9']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item9' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item10'] != NULL){
                                    $item10 = $key['item10'];
                                    if(isset($proib1) && $proib1 == $item10 || isset($proib2) && $proib2 == $item10 || isset($proib3) && $proib3 == $item10 || isset($proib4) && $proib4 == $item10 || isset($proib5) && $proib5 == $item10 || isset($proib6) && $proib6 == $item10 || isset($proib7) && $proib7 == $item10 || isset($proib8) && $proib8 == $item10 || isset($proib9) && $proib9 == $item10 || isset($proib10) && $proib10 == $item10 || isset($proib11) && $proib11 == $item10 ){
                                        echo "<li>".$key['item10']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item10']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item10' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item11'] != NULL){
                                    $item11 = $key['item11'];
                                    if(isset($proib1) && $proib1 == $item11 || isset($proib2) && $proib2 == $item11 || isset($proib3) && $proib3 == $item11 || isset($proib4) && $proib4 == $item11 || isset($proib5) && $proib5 == $item11 || isset($proib6) && $proib6 == $item11 || isset($proib7) && $proib7 == $item11 || isset($proib8) && $proib8 == $item11 || isset($proib9) && $proib9 == $item11 || isset($proib10) && $proib10 == $item11 || isset($proib11) && $proib11 == $item11 ){
                                        echo "<li>".$key['item11']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item11']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item11' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item12'] != NULL){
                                    $item12 = $key['item12'];
                                    if(isset($proib1) && $proib1 == $item12 || isset($proib2) && $proib2 == $item12 || isset($proib3) && $proib3 == $item12 || isset($proib4) && $proib4 == $item12 || isset($proib5) && $proib5 == $item12 || isset($proib6) && $proib6 == $item12 || isset($proib7) && $proib7 == $item12 || isset($proib8) && $proib8 == $item12 || isset($proib9) && $proib9 == $item12 || isset($proib10) && $proib10 == $item12 || isset($proib11) && $proib11 == $item12 ){
                                        echo "<li>".$key['item12']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item12']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item12' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item13'] != NULL){
                                    $item13 = $key['item13'];
                                    if(isset($proib1) && $proib1 == $item13 || isset($proib2) && $proib2 == $item13 || isset($proib3) && $proib3 == $item13 || isset($proib4) && $proib4 == $item13 || isset($proib5) && $proib5 == $item13 || isset($proib6) && $proib6 == $item13 || isset($proib7) && $proib7 == $item13 || isset($proib8) && $proib8 == $item13 || isset($proib9) && $proib9 == $item13 || isset($proib10) && $proib10 == $item13 || isset($proib11) && $proib11 == $item13 ){
                                        echo "<li>".$key['item13']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item13']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item13' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item14'] != NULL){
                                    $item14 = $key['item14'];
                                    if(isset($proib1) && $proib1 == $item14 || isset($proib2) && $proib2 == $item14 || isset($proib3) && $proib3 == $item14 || isset($proib4) && $proib4 == $item14 || isset($proib5) && $proib5 == $item14 || isset($proib6) && $proib6 == $item14 || isset($proib7) && $proib7 == $item14 || isset($proib8) && $proib8 == $item14 || isset($proib9) && $proib9 == $item14 || isset($proib10) && $proib10 == $item14 || isset($proib11) && $proib11 == $item14 ){
                                        echo "<li>".$key['item14']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item14']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item14' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item15'] != NULL){
                                    $item15 = $key['item15'];
                                    if(isset($proib1) && $proib1 == $item15 || isset($proib2) && $proib2 == $item15 || isset($proib3) && $proib3 == $item15 || isset($proib4) && $proib4 == $item15 || isset($proib5) && $proib5 == $item15 || isset($proib6) && $proib6 == $item15 || isset($proib7) && $proib7 == $item15 || isset($proib8) && $proib8 == $item15 || isset($proib9) && $proib9 == $item15 || isset($proib10) && $proib10 == $item15 || isset($proib11) && $proib11 == $item15 ){
                                        echo "<li>".$key['item15']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item15']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item15' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item16'] != NULL){
                                    $item16 = $key['item16'];
                                    if(isset($proib1) && $proib1 == $item16 || isset($proib2) && $proib2 == $item16 || isset($proib3) && $proib3 == $item16 || isset($proib4) && $proib4 == $item16 || isset($proib5) && $proib5 == $item16 || isset($proib6) && $proib6 == $item16 || isset($proib7) && $proib7 == $item16 || isset($proib8) && $proib8 == $item16 || isset($proib9) && $proib9 == $item16 || isset($proib10) && $proib10 == $item16 || isset($proib11) && $proib11 == $item16 ){
                                        echo "<li>".$key['item16']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item16']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item16' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item17'] != NULL){
                                    $item17 = $key['item17'];
                                    if(isset($proib1) && $proib1 == $item17 || isset($proib2) && $proib2 == $item17 || isset($proib3) && $proib3 == $item17 || isset($proib4) && $proib4 == $item17 || isset($proib5) && $proib5 == $item17 || isset($proib6) && $proib6 == $item17 || isset($proib7) && $proib7 == $item17 || isset($proib8) && $proib8 == $item17 || isset($proib9) && $proib9 == $item17 || isset($proib10) && $proib10 == $item17 || isset($proib11) && $proib11 == $item17 ){
                                        echo "<li>".$key['item17']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item17']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item17' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item18'] != NULL){
                                    $item18 = $key['item18'];
                                    if(isset($proib1) && $proib1 == $item18 || isset($proib2) && $proib2 == $item18 || isset($proib3) && $proib3 == $item18 || isset($proib4) && $proib4 == $item18 || isset($proib5) && $proib5 == $item18 || isset($proib6) && $proib6 == $item18 || isset($proib7) && $proib7 == $item18 || isset($proib8) && $proib8 == $item18 || isset($proib9) && $proib9 == $item18 || isset($proib10) && $proib10 == $item18 || isset($proib11) && $proib11 == $item18 ){
                                        echo "<li>".$key['item18']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item18']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item18' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item19'] != NULL){
                                    $item19 = $key['item19'];
                                    if(isset($proib1) && $proib1 == $item19 || isset($proib2) && $proib2 == $item19 || isset($proib3) && $proib3 == $item19 || isset($proib4) && $proib4 == $item19 || isset($proib5) && $proib5 == $item19 || isset($proib6) && $proib6 == $item19 || isset($proib7) && $proib7 == $item19 || isset($proib8) && $proib8 == $item19 || isset($proib9) && $proib9 == $item19 || isset($proib10) && $proib10 == $item19 || isset($proib11) && $proib11 == $item19 ){
                                        echo "<li>".$key['item19']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item19']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item19' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item20'] != NULL){
                                    $item20 = $key['item20'];
                                    if(isset($proib1) && $proib1 == $item20 || isset($proib2) && $proib2 == $item20 || isset($proib3) && $proib3 == $item20 || isset($proib4) && $proib4 == $item20 || isset($proib5) && $proib5 == $item20 || isset($proib6) && $proib6 == $item20 || isset($proib7) && $proib7 == $item20 || isset($proib8) && $proib8 == $item20 || isset($proib9) && $proib9 == $item20 || isset($proib10) && $proib10 == $item20 || isset($proib11) && $proib11 == $item20 ){
                                        echo "<li>".$key['item20']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item20']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item20' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item21'] != NULL){
                                    $item21 = $key['item21'];
                                    if(isset($proib1) && $proib1 == $item21 || isset($proib2) && $proib2 == $item21 || isset($proib3) && $proib3 == $item21 || isset($proib4) && $proib4 == $item21 || isset($proib5) && $proib5 == $item21 || isset($proib6) && $proib6 == $item21 || isset($proib7) && $proib7 == $item21 || isset($proib8) && $proib8 == $item21 || isset($proib9) && $proib9 == $item21 || isset($proib10) && $proib10 == $item21 || isset($proib11) && $proib11 == $item21 ){
                                        echo "<li>".$key['item21']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item21']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item21' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item22'] != NULL){
                                    $item22 = $key['item22'];
                                    if(isset($proib1) && $proib1 == $item22 || isset($proib2) && $proib2 == $item22 || isset($proib3) && $proib3 == $item22 || isset($proib4) && $proib4 == $item22 || isset($proib5) && $proib5 == $item22 || isset($proib6) && $proib6 == $item22 || isset($proib7) && $proib7 == $item22 || isset($proib8) && $proib8 == $item22 || isset($proib9) && $proib9 == $item22 || isset($proib10) && $proib10 == $item22 || isset($proib11) && $proib11 == $item22 ){
                                        echo "<li>".$key['item22']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item22']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item22' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item23'] != NULL){
                                    $item23 = $key['item23'];
                                    if(isset($proib1) && $proib1 == $item23 || isset($proib2) && $proib2 == $item23 || isset($proib3) && $proib3 == $item23 || isset($proib4) && $proib4 == $item23 || isset($proib5) && $proib5 == $item23 || isset($proib6) && $proib6 == $item23 || isset($proib7) && $proib7 == $item23 || isset($proib8) && $proib8 == $item23 || isset($proib9) && $proib9 == $item23 || isset($proib10) && $proib10 == $item23 || isset($proib11) && $proib11 == $item23 ){
                                        echo "<li>".$key['item23']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item23']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item23' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item24'] != NULL){
                                    $item24 = $key['item24'];
                                    if(isset($proib1) && $proib1 == $item24 || isset($proib2) && $proib2 == $item24 || isset($proib3) && $proib3 == $item24 || isset($proib4) && $proib4 == $item24 || isset($proib5) && $proib5 == $item24 || isset($proib6) && $proib6 == $item24 || isset($proib7) && $proib7 == $item24 || isset($proib8) && $proib8 == $item24 || isset($proib9) && $proib9 == $item24 || isset($proib10) && $proib10 == $item24 || isset($proib11) && $proib11 == $item24 ){
                                        echo "<li>".$key['item24']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item24']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item24' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item25'] != NULL){
                                    if(isset($proib1) && $proib1 == $item25 || isset($proib2) && $proib2 == $item25 || isset($proib3) && $proib3 == $item25 || isset($proib4) && $proib4 == $item25 || isset($proib5) && $proib5 == $item25 || isset($proib6) && $proib6 == $item25 || isset($proib7) && $proib7 == $item25 || isset($proib8) && $proib8 == $item25 || isset($proib9) && $proib9 == $item25 || isset($proib10) && $proib10 == $item25 || isset($proib11) && $proib11 == $item25 ){
                                        echo "<li>".$key['item25']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item25']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item25' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                echo "</ul>";
                            }
                        }
                        }
                    }
                    $id = $_SESSION['personagem4'];
                    $personagem = $repositorio->MostrarPersonagem($id);
                    foreach ($personagem as $key) {
                    $nome = $key['nome'];
                    $img = $key['img'];
                    echo "<img src='../../$img'>";
                    echo "<h2>Nome: ".$key['nome']."</h2>";
                    echo "<h2>Classe: ".$key['classe']."</h2>";
                    echo "<h2>Nível: ".$key['nivel']."</h2>";
                    echo "<h2>Dinheiro: ".$key['dinheiro']."</h2>";
                    $classe = $key['classe'];
                    $x = 0;
                    $verificar_itens = $repositorio->VerificarItem($classe);
                    foreach ($verificar_itens as $key) {
                        $key['nome'];
                        if($_SESSION['item'] == $key['nome']){
                            $x = $x + 1;
                        } 
                    }
                    if($x > 0){
                        echo "<h2 style='color:red'>A classe deste personagem não pode usar este Item!!!</h2>";
                    } else {
                    $id = $_SESSION['id_remetente'];
                    $personagem = $repositorio->MostrarPersonagem($id);
                    foreach ($personagem as $key) {
                        $classe = $key['classe'];
                        $verif = $repositorio->VerificarItem($classe);
                        foreach ($verif as $key) {
                            if(isset($proib1)){
                                if(isset($proib2)){
                                    if(isset($proib3)){
                                        if(isset($proib4)){
                                            if(isset($proib5)){
                                                if(isset($proib6)){
                                                    if(isset($proib7)){
                                                        if(isset($proib8)){
                                                            if(isset($proib9)){
                                                                if(isset($proib10)){
                                                                    if(isset($proib11)){

                                                                    } else {
                                                                        if(isset($key['nome'])){
                                                                             $proib11 = $key['nome'];
                                                                            
                                                                        }
                                                                    }
                                                                } else {
                                                                    if(isset($key['nome'])){
                                                                         $proib10 = $key['nome'];
                                                                        
                                                                    }
                                                                }
                                                            } else {
                                                                if(isset($key['nome'])){
                                                                     $proib9 = $key['nome'];
                                                                    
                                                                }
                                                            }
                                                        } else {
                                                            if(isset($key['nome'])){
                                                                 $proib8 = $key['nome'];
                                                                
                                                            }
                                                        }
                                                    } else {
                                                        if(isset($key['nome'])){
                                                             $proib7 = $key['nome'];
                                                            
                                                        }
                                                    }
                                                } else {
                                                    if(isset($key['nome'])){
                                                        $proib6 = $key['nome'];
                                                        
                                                    }
                                                }
                                            } else {
                                                if(isset($key['nome'])){
                                                    $proib5 = $key['nome'];
                                                    
                                                }
                                            }
                                        } else {
                                            if(isset($key['nome'])){
                                                $proib4 = $key['nome'];
                                                
                                            }
                                        }
                                    } else {
                                        if(isset($key['nome'])){
                                            $proib3 = $key['nome'];
                                            
                                        }
                                    }
                                } else {
                                    if(isset($key['nome'])){
                                        $proib2 = $key['nome'];
                                        
                                    }
                                }
                            } else {
                                if(isset($key['nome'])){
                                    $proib1 = $key['nome'];
                                    
                                }
                            }
                        }
                        $inventario = $repositorio->MostrarInventario($nome);
                        foreach ($inventario as $key) {
                            
                            echo "<ul>";
                                $item1 = $key['item1'];
                                if(isset($proib1) && $proib1 == $item1 || isset($proib2) && $proib2 == $item1 || isset($proib3) && $proib3 == $item1 || isset($proib4) && $proib4 == $item1 || isset($proib5) && $proib5 == $item1 || isset($proib6) && $proib6 == $item1 || isset($proib7) && $proib7 == $item1 || isset($proib8) && $proib8 == $item1 || isset($proib9) && $proib9 == $item1 || isset($proib10) && $proib10 == $item1 || isset($proib11) && $proib11 == $item1 ){
                                    echo "<li>".$key['item1']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                    </li>";
                                } else {
                                    echo "<li>".$key['item1']."
                                        <form action='s_item2.php' method='post'>
                                        <label for='nome' hidden></label>
                                        <input type='text' id='nome' name='nome' value='$nome' hidden>
                                        <label for='item' hidden></label>
                                        <input type='text' id='item' name='item' value='$item1' hidden>
                                        <input type='submit' value='Trocar'>
                                        </form>
                                    </li>";
                                }
                                $item2 = $key['item2'];
                                if(isset($proib1) && $proib1 == $item2 || isset($proib2) && $proib2 == $item2 || isset($proib3) && $proib3 == $item2 || isset($proib4) && $proib4 == $item2 || isset($proib5) && $proib5 == $item2 || isset($proib6) && $proib6 == $item2 || isset($proib7) && $proib7 == $item2 || isset($proib8) && $proib8 == $item2 || isset($proib9) && $proib9 == $item2 || isset($proib10) && $proib10 == $item2 || isset($proib11) && $proib11 == $item2 ){
                                    echo "<li>".$key['item2']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                    </li>";
                                } else {
                                    echo "<li>".$key['item2']."
                                        <form action='s_item2.php' method='post'>
                                        <label for='nome' hidden></label>
                                        <input type='text' id='nome' name='nome' value='$nome' hidden>
                                        <label for='item' hidden></label>
                                        <input type='text' id='item' name='item' value='$item2' hidden>
                                        <input type='submit' value='Trocar'>
                                        </form>
                                    </li>";
                                }
                                if($key['item3'] != NULL){
                                    $item3 = $key['item3'];
                                    if(isset($proib1) && $proib1 == $item3 || isset($proib2) && $proib2 == $item3 || isset($proib3) && $proib3 == $item3 || isset($proib4) && $proib4 == $item3 || isset($proib5) && $proib5 == $item3 || isset($proib6) && $proib6 == $item3 || isset($proib7) && $proib7 == $item3 || isset($proib8) && $proib8 == $item3 || isset($proib9) && $proib9 == $item3 || isset($proib10) && $proib10 == $item3 || isset($proib11) && $proib11 == $item3 ){
                                        echo "<li>".$key['item3']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item3']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item3' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item4'] != NULL){
                                    $item4 = $key['item4'];
                                    if(isset($proib1) && $proib1 == $item4 || isset($proib2) && $proib2 == $item4 || isset($proib3) && $proib3 == $item4 || isset($proib4) && $proib4 == $item4 || isset($proib5) && $proib5 == $item4 || isset($proib6) && $proib6 == $item4 || isset($proib7) && $proib7 == $item4 || isset($proib8) && $proib8 == $item4 || isset($proib9) && $proib9 == $item4 || isset($proib10) && $proib10 == $item4 || isset($proib11) && $proib11 == $item4 ){
                                        echo "<li>".$key['item4']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item4']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item4' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item5'] != NULL){
                                    $item5 = $key['item5'];
                                    if(isset($proib1) && $proib1 == $item5 || isset($proib2) && $proib2 == $item5 || isset($proib3) && $proib3 == $item5 || isset($proib4) && $proib4 == $item5 || isset($proib5) && $proib5 == $item5 || isset($proib6) && $proib6 == $item5 || isset($proib7) && $proib7 == $item5 || isset($proib8) && $proib8 == $item5 || isset($proib9) && $proib9 == $item5 || isset($proib10) && $proib10 == $item5 || isset($proib11) && $proib11 == $item5 ){
                                        echo "<li>".$key['item5']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item5']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item5' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item6'] != NULL){
                                    $item6 = $key['item6'];
                                    if(isset($proib1) && $proib1 == $item6 || isset($proib2) && $proib2 == $item6 || isset($proib3) && $proib3 == $item6 || isset($proib4) && $proib4 == $item6 || isset($proib5) && $proib5 == $item6 || isset($proib6) && $proib6 == $item6 || isset($proib7) && $proib7 == $item6 || isset($proib8) && $proib8 == $item6 || isset($proib9) && $proib9 == $item6 || isset($proib10) && $proib10 == $item6 || isset($proib11) && $proib11 == $item6 ){
                                        echo "<li>".$key['item6']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item6']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item6' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item7'] != NULL){
                                    $item7 = $key['item7'];
                                    if(isset($proib1) && $proib1 == $item7 || isset($proib2) && $proib2 == $item7 || isset($proib3) && $proib3 == $item7 || isset($proib4) && $proib4 == $item7 || isset($proib5) && $proib5 == $item7 || isset($proib6) && $proib6 == $item7 || isset($proib7) && $proib7 == $item7 || isset($proib8) && $proib8 == $item7 || isset($proib9) && $proib9 == $item7 || isset($proib10) && $proib10 == $item7 || isset($proib11) && $proib11 == $item7 ){
                                        echo "<li>".$key['item7']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item7']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item7' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item8'] != NULL){
                                    $item8 = $key['item8'];
                                    if(isset($proib1) && $proib1 == $item8 || isset($proib2) && $proib2 == $item8 || isset($proib3) && $proib3 == $item8 || isset($proib4) && $proib4 == $item8 || isset($proib5) && $proib5 == $item8 || isset($proib6) && $proib6 == $item8 || isset($proib7) && $proib7 == $item8 || isset($proib8) && $proib8 == $item8 || isset($proib9) && $proib9 == $item8 || isset($proib10) && $proib10 == $item8 || isset($proib11) && $proib11 == $item8 ){
                                        echo "<li>".$key['item8']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item8']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item8' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item9'] != NULL){
                                    $item9 = $key['item9'];
                                    if(isset($proib1) && $proib1 == $item9 || isset($proib2) && $proib2 == $item9 || isset($proib3) && $proib3 == $item9 || isset($proib4) && $proib4 == $item9 || isset($proib5) && $proib5 == $item9 || isset($proib6) && $proib6 == $item9 || isset($proib7) && $proib7 == $item9|| isset($proib8) && $proib8 == $item9 || isset($proib9) && $proib9 == $item9 || isset($proib10) && $proib10 == $item9 || isset($proib11) && $proib11 == $item9 ){
                                        echo "<li>".$key['item9']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item9']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item9' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item10'] != NULL){
                                    $item10 = $key['item10'];
                                    if(isset($proib1) && $proib1 == $item10 || isset($proib2) && $proib2 == $item10 || isset($proib3) && $proib3 == $item10 || isset($proib4) && $proib4 == $item10 || isset($proib5) && $proib5 == $item10 || isset($proib6) && $proib6 == $item10 || isset($proib7) && $proib7 == $item10 || isset($proib8) && $proib8 == $item10 || isset($proib9) && $proib9 == $item10 || isset($proib10) && $proib10 == $item10 || isset($proib11) && $proib11 == $item10 ){
                                        echo "<li>".$key['item10']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item10']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item10' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item11'] != NULL){
                                    $item11 = $key['item11'];
                                    if(isset($proib1) && $proib1 == $item11 || isset($proib2) && $proib2 == $item11 || isset($proib3) && $proib3 == $item11 || isset($proib4) && $proib4 == $item11 || isset($proib5) && $proib5 == $item11 || isset($proib6) && $proib6 == $item11 || isset($proib7) && $proib7 == $item11 || isset($proib8) && $proib8 == $item11 || isset($proib9) && $proib9 == $item11 || isset($proib10) && $proib10 == $item11 || isset($proib11) && $proib11 == $item11 ){
                                        echo "<li>".$key['item11']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item11']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item11' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item12'] != NULL){
                                    $item12 = $key['item12'];
                                    if(isset($proib1) && $proib1 == $item12 || isset($proib2) && $proib2 == $item12 || isset($proib3) && $proib3 == $item12 || isset($proib4) && $proib4 == $item12 || isset($proib5) && $proib5 == $item12 || isset($proib6) && $proib6 == $item12 || isset($proib7) && $proib7 == $item12 || isset($proib8) && $proib8 == $item12 || isset($proib9) && $proib9 == $item12 || isset($proib10) && $proib10 == $item12 || isset($proib11) && $proib11 == $item12 ){
                                        echo "<li>".$key['item12']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item12']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item12' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item13'] != NULL){
                                    $item13 = $key['item13'];
                                    if(isset($proib1) && $proib1 == $item13 || isset($proib2) && $proib2 == $item13 || isset($proib3) && $proib3 == $item13 || isset($proib4) && $proib4 == $item13 || isset($proib5) && $proib5 == $item13 || isset($proib6) && $proib6 == $item13 || isset($proib7) && $proib7 == $item13 || isset($proib8) && $proib8 == $item13 || isset($proib9) && $proib9 == $item13 || isset($proib10) && $proib10 == $item13 || isset($proib11) && $proib11 == $item13 ){
                                        echo "<li>".$key['item13']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item13']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item13' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item14'] != NULL){
                                    $item14 = $key['item14'];
                                    if(isset($proib1) && $proib1 == $item14 || isset($proib2) && $proib2 == $item14 || isset($proib3) && $proib3 == $item14 || isset($proib4) && $proib4 == $item14 || isset($proib5) && $proib5 == $item14 || isset($proib6) && $proib6 == $item14 || isset($proib7) && $proib7 == $item14 || isset($proib8) && $proib8 == $item14 || isset($proib9) && $proib9 == $item14 || isset($proib10) && $proib10 == $item14 || isset($proib11) && $proib11 == $item14 ){
                                        echo "<li>".$key['item14']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item14']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item14' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item15'] != NULL){
                                    $item15 = $key['item15'];
                                    if(isset($proib1) && $proib1 == $item15 || isset($proib2) && $proib2 == $item15 || isset($proib3) && $proib3 == $item15 || isset($proib4) && $proib4 == $item15 || isset($proib5) && $proib5 == $item15 || isset($proib6) && $proib6 == $item15 || isset($proib7) && $proib7 == $item15 || isset($proib8) && $proib8 == $item15 || isset($proib9) && $proib9 == $item15 || isset($proib10) && $proib10 == $item15 || isset($proib11) && $proib11 == $item15 ){
                                        echo "<li>".$key['item15']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item15']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item15' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item16'] != NULL){
                                    $item16 = $key['item16'];
                                    if(isset($proib1) && $proib1 == $item16 || isset($proib2) && $proib2 == $item16 || isset($proib3) && $proib3 == $item16 || isset($proib4) && $proib4 == $item16 || isset($proib5) && $proib5 == $item16 || isset($proib6) && $proib6 == $item16 || isset($proib7) && $proib7 == $item16 || isset($proib8) && $proib8 == $item16 || isset($proib9) && $proib9 == $item16 || isset($proib10) && $proib10 == $item16 || isset($proib11) && $proib11 == $item16 ){
                                        echo "<li>".$key['item16']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item16']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item16' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item17'] != NULL){
                                    $item17 = $key['item17'];
                                    if(isset($proib1) && $proib1 == $item17 || isset($proib2) && $proib2 == $item17 || isset($proib3) && $proib3 == $item17 || isset($proib4) && $proib4 == $item17 || isset($proib5) && $proib5 == $item17 || isset($proib6) && $proib6 == $item17 || isset($proib7) && $proib7 == $item17 || isset($proib8) && $proib8 == $item17 || isset($proib9) && $proib9 == $item17 || isset($proib10) && $proib10 == $item17 || isset($proib11) && $proib11 == $item17 ){
                                        echo "<li>".$key['item17']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item17']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item17' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item18'] != NULL){
                                    $item18 = $key['item18'];
                                    if(isset($proib1) && $proib1 == $item18 || isset($proib2) && $proib2 == $item18 || isset($proib3) && $proib3 == $item18 || isset($proib4) && $proib4 == $item18 || isset($proib5) && $proib5 == $item18 || isset($proib6) && $proib6 == $item18 || isset($proib7) && $proib7 == $item18 || isset($proib8) && $proib8 == $item18 || isset($proib9) && $proib9 == $item18 || isset($proib10) && $proib10 == $item18 || isset($proib11) && $proib11 == $item18 ){
                                        echo "<li>".$key['item18']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item18']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item18' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item19'] != NULL){
                                    $item19 = $key['item19'];
                                    if(isset($proib1) && $proib1 == $item19 || isset($proib2) && $proib2 == $item19 || isset($proib3) && $proib3 == $item19 || isset($proib4) && $proib4 == $item19 || isset($proib5) && $proib5 == $item19 || isset($proib6) && $proib6 == $item19 || isset($proib7) && $proib7 == $item19 || isset($proib8) && $proib8 == $item19 || isset($proib9) && $proib9 == $item19 || isset($proib10) && $proib10 == $item19 || isset($proib11) && $proib11 == $item19 ){
                                        echo "<li>".$key['item19']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item19']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item19' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item20'] != NULL){
                                    $item20 = $key['item20'];
                                    if(isset($proib1) && $proib1 == $item20 || isset($proib2) && $proib2 == $item20 || isset($proib3) && $proib3 == $item20 || isset($proib4) && $proib4 == $item20 || isset($proib5) && $proib5 == $item20 || isset($proib6) && $proib6 == $item20 || isset($proib7) && $proib7 == $item20 || isset($proib8) && $proib8 == $item20 || isset($proib9) && $proib9 == $item20 || isset($proib10) && $proib10 == $item20 || isset($proib11) && $proib11 == $item20 ){
                                        echo "<li>".$key['item20']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item20']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item20' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item21'] != NULL){
                                    $item21 = $key['item21'];
                                    if(isset($proib1) && $proib1 == $item21 || isset($proib2) && $proib2 == $item21 || isset($proib3) && $proib3 == $item21 || isset($proib4) && $proib4 == $item21 || isset($proib5) && $proib5 == $item21 || isset($proib6) && $proib6 == $item21 || isset($proib7) && $proib7 == $item21 || isset($proib8) && $proib8 == $item21 || isset($proib9) && $proib9 == $item21 || isset($proib10) && $proib10 == $item21 || isset($proib11) && $proib11 == $item21 ){
                                        echo "<li>".$key['item21']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item21']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item21' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item22'] != NULL){
                                    $item22 = $key['item22'];
                                    if(isset($proib1) && $proib1 == $item22 || isset($proib2) && $proib2 == $item22 || isset($proib3) && $proib3 == $item22 || isset($proib4) && $proib4 == $item22 || isset($proib5) && $proib5 == $item22 || isset($proib6) && $proib6 == $item22 || isset($proib7) && $proib7 == $item22 || isset($proib8) && $proib8 == $item22 || isset($proib9) && $proib9 == $item22 || isset($proib10) && $proib10 == $item22 || isset($proib11) && $proib11 == $item22 ){
                                        echo "<li>".$key['item22']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item22']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item22' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item23'] != NULL){
                                    $item23 = $key['item23'];
                                    if(isset($proib1) && $proib1 == $item23 || isset($proib2) && $proib2 == $item23 || isset($proib3) && $proib3 == $item23 || isset($proib4) && $proib4 == $item23 || isset($proib5) && $proib5 == $item23 || isset($proib6) && $proib6 == $item23 || isset($proib7) && $proib7 == $item23 || isset($proib8) && $proib8 == $item23 || isset($proib9) && $proib9 == $item23 || isset($proib10) && $proib10 == $item23 || isset($proib11) && $proib11 == $item23 ){
                                        echo "<li>".$key['item23']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item23']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item23' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item24'] != NULL){
                                    $item24 = $key['item24'];
                                    if(isset($proib1) && $proib1 == $item24 || isset($proib2) && $proib2 == $item24 || isset($proib3) && $proib3 == $item24 || isset($proib4) && $proib4 == $item24 || isset($proib5) && $proib5 == $item24 || isset($proib6) && $proib6 == $item24 || isset($proib7) && $proib7 == $item24 || isset($proib8) && $proib8 == $item24 || isset($proib9) && $proib9 == $item24 || isset($proib10) && $proib10 == $item24 || isset($proib11) && $proib11 == $item24 ){
                                        echo "<li>".$key['item24']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item24']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item24' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item25'] != NULL){
                                    if(isset($proib1) && $proib1 == $item25 || isset($proib2) && $proib2 == $item25 || isset($proib3) && $proib3 == $item25 || isset($proib4) && $proib4 == $item25 || isset($proib5) && $proib5 == $item25 || isset($proib6) && $proib6 == $item25 || isset($proib7) && $proib7 == $item25 || isset($proib8) && $proib8 == $item25 || isset($proib9) && $proib9 == $item25 || isset($proib10) && $proib10 == $item25 || isset($proib11) && $proib11 == $item25 ){
                                        echo "<li>".$key['item25']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item25']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item25' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                echo "</ul>";
                            }
                        }
                        }
                    }
                } 
            } else if($_SESSION['id_remetente'] == $_SESSION['personagem2']){
                $id = $_SESSION['personagem1'];
                $personagem = $repositorio->MostrarPersonagem($id);
                foreach ($personagem as $key) {
                $nome = $key['nome'];
                $img = $key['img'];
                echo "<img src='../../$img'>";
                echo "<h2>Nome: ".$key['nome']."</h2>";
                echo "<h2>Classe: ".$key['classe']."</h2>";
                echo "<h2>Nível: ".$key['nivel']."</h2>";
                echo "<h2>Dinheiro: ".$key['dinheiro']."</h2>";
                $classe = $key['classe'];
                $x = 0;
                $verificar_itens = $repositorio->VerificarItem($classe);
                foreach ($verificar_itens as $key) {
                    if($_SESSION['item'] == $key['nome']){
                        $x = $x + 1;
                    } 
                }
                if($x > 0){
                    echo "<h2 style='color:red'>A classe deste personagem não pode usar este Item!!!</h2>";
                } else {
                    $id = $_SESSION['id_remetente'];
                    $personagem = $repositorio->MostrarPersonagem($id);
                    foreach ($personagem as $key) {
                        $classe = $key['classe'];
                        $verif = $repositorio->VerificarItem($classe);
                        foreach ($verif as $key) {
                            if(isset($proib1)){
                                if(isset($proib2)){
                                    if(isset($proib3)){
                                        if(isset($proib4)){
                                            if(isset($proib5)){
                                                if(isset($proib6)){
                                                    if(isset($proib7)){
                                                        if(isset($proib8)){
                                                            if(isset($proib9)){
                                                                if(isset($proib10)){
                                                                    if(isset($proib11)){

                                                                    } else {
                                                                        if(isset($key['nome'])){
                                                                             $proib11 = $key['nome'];
                                                                            
                                                                        }
                                                                    }
                                                                } else {
                                                                    if(isset($key['nome'])){
                                                                         $proib10 = $key['nome'];
                                                                        
                                                                    }
                                                                }
                                                            } else {
                                                                if(isset($key['nome'])){
                                                                    $proib9 = $key['nome'];
                                                                   
                                                                }
                                                            }
                                                        } else {
                                                            if(isset($key['nome'])){
                                                                 $proib8 = $key['nome'];
                                                               
                                                            }
                                                        }
                                                    } else {
                                                        if(isset($key['nome'])){
                                                             $proib7 = $key['nome'];
                                                           
                                                        }
                                                    }
                                                } else {
                                                    if(isset($key['nome'])){
                                                        $proib6 = $key['nome'];
                                                       
                                                    }
                                                }
                                            } else {
                                                if(isset($key['nome'])){
                                                    $proib5 = $key['nome'];
                                                    
                                                }
                                            }
                                        } else {
                                            if(isset($key['nome'])){
                                                 $proib4 = $key['nome'];
                                               
                                            }
                                        }
                                    } else {
                                        if(isset($key['nome'])){
                                             $proib3 = $key['nome'];
                                            
                                        }
                                    }
                                } else {
                                    if(isset($key['nome'])){
                                         $proib2 = $key['nome'];
                                        
                                    }
                                }
                            } else {
                                if(isset($key['nome'])){
                                     $proib1 = $key['nome'];
                                    
                                }
                            }
                        }
                        $inventario = $repositorio->MostrarInventario($nome);
                        foreach ($inventario as $key) {
                            
                            echo "<ul>";
                                $item1 = $key['item1'];
                                if(isset($proib1) && $proib1 == $item1 || isset($proib2) && $proib2 == $item1 || isset($proib3) && $proib3 == $item1 || isset($proib4) && $proib4 == $item1 || isset($proib5) && $proib5 == $item1 || isset($proib6) && $proib6 == $item1 || isset($proib7) && $proib7 == $item1 || isset($proib8) && $proib8 == $item1 || isset($proib9) && $proib9 == $item1 || isset($proib10) && $proib10 == $item1 || isset($proib11) && $proib11 == $item1 ){
                                    echo "<li>".$key['item1']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                    </li>";
                                } else {
                                    echo "<li>".$key['item1']."
                                        <form action='s_item2.php' method='post'>
                                        <label for='nome' hidden></label>
                                        <input type='text' id='nome' name='nome' value='$nome' hidden>
                                        <label for='item' hidden></label>
                                        <input type='text' id='item' name='item' value='$item1' hidden>
                                        <input type='submit' value='Trocar'>
                                        </form>
                                    </li>";
                                }
                                $item2 = $key['item2'];
                                if(isset($proib1) && $proib1 == $item2 || isset($proib2) && $proib2 == $item2 || isset($proib3) && $proib3 == $item2 || isset($proib4) && $proib4 == $item2 || isset($proib5) && $proib5 == $item2 || isset($proib6) && $proib6 == $item2 || isset($proib7) && $proib7 == $item2 || isset($proib8) && $proib8 == $item2 || isset($proib9) && $proib9 == $item2 || isset($proib10) && $proib10 == $item2 || isset($proib11) && $proib11 == $item2 ){
                                    echo "<li>".$key['item2']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                    </li>";
                                } else {
                                    echo "<li>".$key['item2']."
                                        <form action='s_item2.php' method='post'>
                                        <label for='nome' hidden></label>
                                        <input type='text' id='nome' name='nome' value='$nome' hidden>
                                        <label for='item' hidden></label>
                                        <input type='text' id='item' name='item' value='$item2' hidden>
                                        <input type='submit' value='Trocar'>
                                        </form>
                                    </li>";
                                }
                                if($key['item3'] != NULL){
                                    $item3 = $key['item3'];
                                    if(isset($proib1) && $proib1 == $item3 || isset($proib2) && $proib2 == $item3 || isset($proib3) && $proib3 == $item3 || isset($proib4) && $proib4 == $item3 || isset($proib5) && $proib5 == $item3 || isset($proib6) && $proib6 == $item3 || isset($proib7) && $proib7 == $item3 || isset($proib8) && $proib8 == $item3 || isset($proib9) && $proib9 == $item3 || isset($proib10) && $proib10 == $item3 || isset($proib11) && $proib11 == $item3 ){
                                        echo "<li>".$key['item3']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item3']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item3' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item4'] != NULL){
                                    $item4 = $key['item4'];
                                    if(isset($proib1) && $proib1 == $item4 || isset($proib2) && $proib2 == $item4 || isset($proib3) && $proib3 == $item4 || isset($proib4) && $proib4 == $item4 || isset($proib5) && $proib5 == $item4 || isset($proib6) && $proib6 == $item4 || isset($proib7) && $proib7 == $item4 || isset($proib8) && $proib8 == $item4 || isset($proib9) && $proib9 == $item4 || isset($proib10) && $proib10 == $item4 || isset($proib11) && $proib11 == $item4 ){
                                        echo "<li>".$key['item4']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item4']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item4' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item5'] != NULL){
                                    $item5 = $key['item5'];
                                    if(isset($proib1) && $proib1 == $item5 || isset($proib2) && $proib2 == $item5 || isset($proib3) && $proib3 == $item5 || isset($proib4) && $proib4 == $item5 || isset($proib5) && $proib5 == $item5 || isset($proib6) && $proib6 == $item5 || isset($proib7) && $proib7 == $item5 || isset($proib8) && $proib8 == $item5 || isset($proib9) && $proib9 == $item5 || isset($proib10) && $proib10 == $item5 || isset($proib11) && $proib11 == $item5 ){
                                        echo "<li>".$key['item5']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item5']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item5' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item6'] != NULL){
                                    $item6 = $key['item6'];
                                    if(isset($proib1) && $proib1 == $item6 || isset($proib2) && $proib2 == $item6 || isset($proib3) && $proib3 == $item6 || isset($proib4) && $proib4 == $item6 || isset($proib5) && $proib5 == $item6 || isset($proib6) && $proib6 == $item6 || isset($proib7) && $proib7 == $item6 || isset($proib8) && $proib8 == $item6 || isset($proib9) && $proib9 == $item6 || isset($proib10) && $proib10 == $item6 || isset($proib11) && $proib11 == $item6 ){
                                        echo "<li>".$key['item6']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item6']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item6' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item7'] != NULL){
                                    $item7 = $key['item7'];
                                    if(isset($proib1) && $proib1 == $item7 || isset($proib2) && $proib2 == $item7 || isset($proib3) && $proib3 == $item7 || isset($proib4) && $proib4 == $item7 || isset($proib5) && $proib5 == $item7 || isset($proib6) && $proib6 == $item7 || isset($proib7) && $proib7 == $item7 || isset($proib8) && $proib8 == $item7 || isset($proib9) && $proib9 == $item7 || isset($proib10) && $proib10 == $item7 || isset($proib11) && $proib11 == $item7 ){
                                        echo "<li>".$key['item7']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item7']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item7' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item8'] != NULL){
                                    $item8 = $key['item8'];
                                    if(isset($proib1) && $proib1 == $item8 || isset($proib2) && $proib2 == $item8 || isset($proib3) && $proib3 == $item8 || isset($proib4) && $proib4 == $item8 || isset($proib5) && $proib5 == $item8 || isset($proib6) && $proib6 == $item8 || isset($proib7) && $proib7 == $item8 || isset($proib8) && $proib8 == $item8 || isset($proib9) && $proib9 == $item8 || isset($proib10) && $proib10 == $item8 || isset($proib11) && $proib11 == $item8 ){
                                        echo "<li>".$key['item8']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item8']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item8' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item9'] != NULL){
                                    $item9 = $key['item9'];
                                    if(isset($proib1) && $proib1 == $item9 || isset($proib2) && $proib2 == $item9 || isset($proib3) && $proib3 == $item9 || isset($proib4) && $proib4 == $item9 || isset($proib5) && $proib5 == $item9 || isset($proib6) && $proib6 == $item9 || isset($proib7) && $proib7 == $item9|| isset($proib8) && $proib8 == $item9 || isset($proib9) && $proib9 == $item9 || isset($proib10) && $proib10 == $item9 || isset($proib11) && $proib11 == $item9 ){
                                        echo "<li>".$key['item9']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item9']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item9' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item10'] != NULL){
                                    $item10 = $key['item10'];
                                    if(isset($proib1) && $proib1 == $item10 || isset($proib2) && $proib2 == $item10 || isset($proib3) && $proib3 == $item10 || isset($proib4) && $proib4 == $item10 || isset($proib5) && $proib5 == $item10 || isset($proib6) && $proib6 == $item10 || isset($proib7) && $proib7 == $item10 || isset($proib8) && $proib8 == $item10 || isset($proib9) && $proib9 == $item10 || isset($proib10) && $proib10 == $item10 || isset($proib11) && $proib11 == $item10 ){
                                        echo "<li>".$key['item10']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item10']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item10' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item11'] != NULL){
                                    $item11 = $key['item11'];
                                    if(isset($proib1) && $proib1 == $item11 || isset($proib2) && $proib2 == $item11 || isset($proib3) && $proib3 == $item11 || isset($proib4) && $proib4 == $item11 || isset($proib5) && $proib5 == $item11 || isset($proib6) && $proib6 == $item11 || isset($proib7) && $proib7 == $item11 || isset($proib8) && $proib8 == $item11 || isset($proib9) && $proib9 == $item11 || isset($proib10) && $proib10 == $item11 || isset($proib11) && $proib11 == $item11 ){
                                        echo "<li>".$key['item11']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item11']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item11' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item12'] != NULL){
                                    $item12 = $key['item12'];
                                    if(isset($proib1) && $proib1 == $item12 || isset($proib2) && $proib2 == $item12 || isset($proib3) && $proib3 == $item12 || isset($proib4) && $proib4 == $item12 || isset($proib5) && $proib5 == $item12 || isset($proib6) && $proib6 == $item12 || isset($proib7) && $proib7 == $item12 || isset($proib8) && $proib8 == $item12 || isset($proib9) && $proib9 == $item12 || isset($proib10) && $proib10 == $item12 || isset($proib11) && $proib11 == $item12 ){
                                        echo "<li>".$key['item12']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item12']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item12' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item13'] != NULL){
                                    $item13 = $key['item13'];
                                    if(isset($proib1) && $proib1 == $item13 || isset($proib2) && $proib2 == $item13 || isset($proib3) && $proib3 == $item13 || isset($proib4) && $proib4 == $item13 || isset($proib5) && $proib5 == $item13 || isset($proib6) && $proib6 == $item13 || isset($proib7) && $proib7 == $item13 || isset($proib8) && $proib8 == $item13 || isset($proib9) && $proib9 == $item13 || isset($proib10) && $proib10 == $item13 || isset($proib11) && $proib11 == $item13 ){
                                        echo "<li>".$key['item13']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item13']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item13' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item14'] != NULL){
                                    $item14 = $key['item14'];
                                    if(isset($proib1) && $proib1 == $item14 || isset($proib2) && $proib2 == $item14 || isset($proib3) && $proib3 == $item14 || isset($proib4) && $proib4 == $item14 || isset($proib5) && $proib5 == $item14 || isset($proib6) && $proib6 == $item14 || isset($proib7) && $proib7 == $item14 || isset($proib8) && $proib8 == $item14 || isset($proib9) && $proib9 == $item14 || isset($proib10) && $proib10 == $item14 || isset($proib11) && $proib11 == $item14 ){
                                        echo "<li>".$key['item14']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item14']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item14' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item15'] != NULL){
                                    $item15 = $key['item15'];
                                    if(isset($proib1) && $proib1 == $item15 || isset($proib2) && $proib2 == $item15 || isset($proib3) && $proib3 == $item15 || isset($proib4) && $proib4 == $item15 || isset($proib5) && $proib5 == $item15 || isset($proib6) && $proib6 == $item15 || isset($proib7) && $proib7 == $item15 || isset($proib8) && $proib8 == $item15 || isset($proib9) && $proib9 == $item15 || isset($proib10) && $proib10 == $item15 || isset($proib11) && $proib11 == $item15 ){
                                        echo "<li>".$key['item15']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item15']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item15' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item16'] != NULL){
                                    $item16 = $key['item16'];
                                    if(isset($proib1) && $proib1 == $item16 || isset($proib2) && $proib2 == $item16 || isset($proib3) && $proib3 == $item16 || isset($proib4) && $proib4 == $item16 || isset($proib5) && $proib5 == $item16 || isset($proib6) && $proib6 == $item16 || isset($proib7) && $proib7 == $item16 || isset($proib8) && $proib8 == $item16 || isset($proib9) && $proib9 == $item16 || isset($proib10) && $proib10 == $item16 || isset($proib11) && $proib11 == $item16 ){
                                        echo "<li>".$key['item16']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item16']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item16' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item17'] != NULL){
                                    $item17 = $key['item17'];
                                    if(isset($proib1) && $proib1 == $item17 || isset($proib2) && $proib2 == $item17 || isset($proib3) && $proib3 == $item17 || isset($proib4) && $proib4 == $item17 || isset($proib5) && $proib5 == $item17 || isset($proib6) && $proib6 == $item17 || isset($proib7) && $proib7 == $item17 || isset($proib8) && $proib8 == $item17 || isset($proib9) && $proib9 == $item17 || isset($proib10) && $proib10 == $item17 || isset($proib11) && $proib11 == $item17 ){
                                        echo "<li>".$key['item17']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item17']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item17' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item18'] != NULL){
                                    $item18 = $key['item18'];
                                    if(isset($proib1) && $proib1 == $item18 || isset($proib2) && $proib2 == $item18 || isset($proib3) && $proib3 == $item18 || isset($proib4) && $proib4 == $item18 || isset($proib5) && $proib5 == $item18 || isset($proib6) && $proib6 == $item18 || isset($proib7) && $proib7 == $item18 || isset($proib8) && $proib8 == $item18 || isset($proib9) && $proib9 == $item18 || isset($proib10) && $proib10 == $item18 || isset($proib11) && $proib11 == $item18 ){
                                        echo "<li>".$key['item18']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item18']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item18' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item19'] != NULL){
                                    $item19 = $key['item19'];
                                    if(isset($proib1) && $proib1 == $item19 || isset($proib2) && $proib2 == $item19 || isset($proib3) && $proib3 == $item19 || isset($proib4) && $proib4 == $item19 || isset($proib5) && $proib5 == $item19 || isset($proib6) && $proib6 == $item19 || isset($proib7) && $proib7 == $item19 || isset($proib8) && $proib8 == $item19 || isset($proib9) && $proib9 == $item19 || isset($proib10) && $proib10 == $item19 || isset($proib11) && $proib11 == $item19 ){
                                        echo "<li>".$key['item19']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item19']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item19' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item20'] != NULL){
                                    $item20 = $key['item20'];
                                    if(isset($proib1) && $proib1 == $item20 || isset($proib2) && $proib2 == $item20 || isset($proib3) && $proib3 == $item20 || isset($proib4) && $proib4 == $item20 || isset($proib5) && $proib5 == $item20 || isset($proib6) && $proib6 == $item20 || isset($proib7) && $proib7 == $item20 || isset($proib8) && $proib8 == $item20 || isset($proib9) && $proib9 == $item20 || isset($proib10) && $proib10 == $item20 || isset($proib11) && $proib11 == $item20 ){
                                        echo "<li>".$key['item20']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item20']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item20' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item21'] != NULL){
                                    $item21 = $key['item21'];
                                    if(isset($proib1) && $proib1 == $item21 || isset($proib2) && $proib2 == $item21 || isset($proib3) && $proib3 == $item21 || isset($proib4) && $proib4 == $item21 || isset($proib5) && $proib5 == $item21 || isset($proib6) && $proib6 == $item21 || isset($proib7) && $proib7 == $item21 || isset($proib8) && $proib8 == $item21 || isset($proib9) && $proib9 == $item21 || isset($proib10) && $proib10 == $item21 || isset($proib11) && $proib11 == $item21 ){
                                        echo "<li>".$key['item21']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item21']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item21' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item22'] != NULL){
                                    $item22 = $key['item22'];
                                    if(isset($proib1) && $proib1 == $item22 || isset($proib2) && $proib2 == $item22 || isset($proib3) && $proib3 == $item22 || isset($proib4) && $proib4 == $item22 || isset($proib5) && $proib5 == $item22 || isset($proib6) && $proib6 == $item22 || isset($proib7) && $proib7 == $item22 || isset($proib8) && $proib8 == $item22 || isset($proib9) && $proib9 == $item22 || isset($proib10) && $proib10 == $item22 || isset($proib11) && $proib11 == $item22 ){
                                        echo "<li>".$key['item22']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item22']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item22' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item23'] != NULL){
                                    $item23 = $key['item23'];
                                    if(isset($proib1) && $proib1 == $item23 || isset($proib2) && $proib2 == $item23 || isset($proib3) && $proib3 == $item23 || isset($proib4) && $proib4 == $item23 || isset($proib5) && $proib5 == $item23 || isset($proib6) && $proib6 == $item23 || isset($proib7) && $proib7 == $item23 || isset($proib8) && $proib8 == $item23 || isset($proib9) && $proib9 == $item23 || isset($proib10) && $proib10 == $item23 || isset($proib11) && $proib11 == $item23 ){
                                        echo "<li>".$key['item23']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item23']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item23' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item24'] != NULL){
                                    $item24 = $key['item24'];
                                    if(isset($proib1) && $proib1 == $item24 || isset($proib2) && $proib2 == $item24 || isset($proib3) && $proib3 == $item24 || isset($proib4) && $proib4 == $item24 || isset($proib5) && $proib5 == $item24 || isset($proib6) && $proib6 == $item24 || isset($proib7) && $proib7 == $item24 || isset($proib8) && $proib8 == $item24 || isset($proib9) && $proib9 == $item24 || isset($proib10) && $proib10 == $item24 || isset($proib11) && $proib11 == $item24 ){
                                        echo "<li>".$key['item24']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item24']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item24' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item25'] != NULL){
                                    if(isset($proib1) && $proib1 == $item25 || isset($proib2) && $proib2 == $item25 || isset($proib3) && $proib3 == $item25 || isset($proib4) && $proib4 == $item25 || isset($proib5) && $proib5 == $item25 || isset($proib6) && $proib6 == $item25 || isset($proib7) && $proib7 == $item25 || isset($proib8) && $proib8 == $item25 || isset($proib9) && $proib9 == $item25 || isset($proib10) && $proib10 == $item25 || isset($proib11) && $proib11 == $item25 ){
                                        echo "<li>".$key['item25']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item25']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item25' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                echo "</ul>";
                            }
                        }
                    }
                    $id = $_SESSION['personagem3'];
                    $personagem = $repositorio->MostrarPersonagem($id);
                    foreach ($personagem as $key) {
                    $nome = $key['nome'];
                    $img = $key['img'];
                    echo "<img src='../../$img'>";
                    echo "<h2>Nome: ".$key['nome']."</h2>";
                    echo "<h2>Classe: ".$key['classe']."</h2>";
                    echo "<h2>Nível: ".$key['nivel']."</h2>";
                    echo "<h2>Dinheiro: ".$key['dinheiro']."</h2>";
                    $classe = $key['classe'];
                    $x = 0;
                    $verificar_itens = $repositorio->VerificarItem($classe);
                    foreach ($verificar_itens as $key) {
                        $key['nome'];
                        if($_SESSION['item'] == $key['nome']){
                            $x = $x + 1;
                        } 
                    }
                    if($x > 0){
                        echo "<h2 style='color:red'>A classe deste personagem não pode usar este Item!!!</h2>";
                    } else {
                    $id = $_SESSION['id_remetente'];
                    $personagem = $repositorio->MostrarPersonagem($id);
                    foreach ($personagem as $key) {
                        $classe = $key['classe'];
                        $verif = $repositorio->VerificarItem($classe);
                        foreach ($verif as $key) {
                            if(isset($proib1)){
                                if(isset($proib2)){
                                    if(isset($proib3)){
                                        if(isset($proib4)){
                                            if(isset($proib5)){
                                                if(isset($proib6)){
                                                    if(isset($proib7)){
                                                        if(isset($proib8)){
                                                            if(isset($proib9)){
                                                                if(isset($proib10)){
                                                                    if(isset($proib11)){

                                                                    } else {
                                                                        if(isset($key['nome'])){
                                                                            $proib11 = $key['nome'];
                                                                            
                                                                        }
                                                                    }
                                                                } else {
                                                                    if(isset($key['nome'])){
                                                                        $proib10 = $key['nome'];
                                                                       
                                                                    }
                                                                }
                                                            } else {
                                                                if(isset($key['nome'])){
                                                                    $proib9 = $key['nome'];
                                                                   
                                                                }
                                                            }
                                                        } else {
                                                            if(isset($key['nome'])){
                                                                $proib8 = $key['nome'];
                                                                
                                                            }
                                                        }
                                                    } else {
                                                        if(isset($key['nome'])){
                                                            $proib7 = $key['nome'];
                                                            
                                                        }
                                                    }
                                                } else {
                                                    if(isset($key['nome'])){
                                                        $proib6 = $key['nome'];
                                                        
                                                    }
                                                }
                                            } else {
                                                if(isset($key['nome'])){
                                                    $proib5 = $key['nome'];
                                                    
                                                }
                                            }
                                        } else {
                                            if(isset($key['nome'])){
                                                $proib4 = $key['nome'];
                                                
                                            }
                                        }
                                    } else {
                                        if(isset($key['nome'])){
                                            $proib3 = $key['nome'];
                                            
                                        }
                                    }
                                } else {
                                    if(isset($key['nome'])){
                                        $proib2 = $key['nome'];
                                        
                                    }
                                }
                            } else {
                                if(isset($key['nome'])){
                                    $proib1 = $key['nome'];
                                    
                                }
                            }
                        }
                        $inventario = $repositorio->MostrarInventario($nome);
                        foreach ($inventario as $key) {
                            
                            echo "<ul>";
                            $item1 = $key['item1'];
                            if(isset($proib1) && $proib1 == $item1 || isset($proib2) && $proib2 == $item1 || isset($proib3) && $proib3 == $item1 || isset($proib4) && $proib4 == $item1 || isset($proib5) && $proib5 == $item1 || isset($proib6) && $proib6 == $item1 || isset($proib7) && $proib7 == $item1 || isset($proib8) && $proib8 == $item1 || isset($proib9) && $proib9 == $item1 || isset($proib10) && $proib10 == $item1 || isset($proib11) && $proib11 == $item1 ){
                                echo "<li>".$key['item1']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                </li>";
                            } else {
                                echo "<li>".$key['item1']."
                                    <form action='s_item2.php' method='post'>
                                    <label for='nome' hidden></label>
                                    <input type='text' id='nome' name='nome' value='$nome' hidden>
                                    <label for='item' hidden></label>
                                    <input type='text' id='item' name='item' value='$item1' hidden>
                                    <input type='submit' value='Trocar'>
                                    </form>
                                </li>";
                            }
                            $item2 = $key['item2'];
                            if(isset($proib1) && $proib1 == $item2 || isset($proib2) && $proib2 == $item2 || isset($proib3) && $proib3 == $item2 || isset($proib4) && $proib4 == $item2 || isset($proib5) && $proib5 == $item2 || isset($proib6) && $proib6 == $item2 || isset($proib7) && $proib7 == $item2 || isset($proib8) && $proib8 == $item2 || isset($proib9) && $proib9 == $item2 || isset($proib10) && $proib10 == $item2 || isset($proib11) && $proib11 == $item2 ){
                                echo "<li>".$key['item2']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                </li>";
                            } else {
                                echo "<li>".$key['item2']."
                                    <form action='s_item2.php' method='post'>
                                    <label for='nome' hidden></label>
                                    <input type='text' id='nome' name='nome' value='$nome' hidden>
                                    <label for='item' hidden></label>
                                    <input type='text' id='item' name='item' value='$item2' hidden>
                                    <input type='submit' value='Trocar'>
                                    </form>
                                </li>";
                            }
                            if($key['item3'] != NULL){
                                $item3 = $key['item3'];
                                if(isset($proib1) && $proib1 == $item3 || isset($proib2) && $proib2 == $item3 || isset($proib3) && $proib3 == $item3 || isset($proib4) && $proib4 == $item3 || isset($proib5) && $proib5 == $item3 || isset($proib6) && $proib6 == $item3 || isset($proib7) && $proib7 == $item3 || isset($proib8) && $proib8 == $item3 || isset($proib9) && $proib9 == $item3 || isset($proib10) && $proib10 == $item3 || isset($proib11) && $proib11 == $item3 ){
                                    echo "<li>".$key['item3']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                    </li>";
                                } else {
                                    echo "<li>".$key['item3']."
                                        <form action='s_item2.php' method='post'>
                                        <label for='nome' hidden></label>
                                        <input type='text' id='nome' name='nome' value='$nome' hidden>
                                        <label for='item' hidden></label>
                                        <input type='text' id='item' name='item' value='$item3' hidden>
                                        <input type='submit' value='Trocar'>
                                        </form>
                                    </li>";
                                }
                            }
                            if($key['item4'] != NULL){
                                $item4 = $key['item4'];
                                if(isset($proib1) && $proib1 == $item4 || isset($proib2) && $proib2 == $item4 || isset($proib3) && $proib3 == $item4 || isset($proib4) && $proib4 == $item4 || isset($proib5) && $proib5 == $item4 || isset($proib6) && $proib6 == $item4 || isset($proib7) && $proib7 == $item4 || isset($proib8) && $proib8 == $item4 || isset($proib9) && $proib9 == $item4 || isset($proib10) && $proib10 == $item4 || isset($proib11) && $proib11 == $item4 ){
                                    echo "<li>".$key['item4']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                    </li>";
                                } else {
                                    echo "<li>".$key['item4']."
                                        <form action='s_item2.php' method='post'>
                                        <label for='nome' hidden></label>
                                        <input type='text' id='nome' name='nome' value='$nome' hidden>
                                        <label for='item' hidden></label>
                                        <input type='text' id='item' name='item' value='$item4' hidden>
                                        <input type='submit' value='Trocar'>
                                        </form>
                                    </li>";
                                }
                            }
                            if($key['item5'] != NULL){
                                $item5 = $key['item5'];
                                if(isset($proib1) && $proib1 == $item5 || isset($proib2) && $proib2 == $item5 || isset($proib3) && $proib3 == $item5 || isset($proib4) && $proib4 == $item5 || isset($proib5) && $proib5 == $item5 || isset($proib6) && $proib6 == $item5 || isset($proib7) && $proib7 == $item5 || isset($proib8) && $proib8 == $item5 || isset($proib9) && $proib9 == $item5 || isset($proib10) && $proib10 == $item5 || isset($proib11) && $proib11 == $item5 ){
                                    echo "<li>".$key['item5']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                    </li>";
                                } else {
                                    echo "<li>".$key['item5']."
                                        <form action='s_item2.php' method='post'>
                                        <label for='nome' hidden></label>
                                        <input type='text' id='nome' name='nome' value='$nome' hidden>
                                        <label for='item' hidden></label>
                                        <input type='text' id='item' name='item' value='$item5' hidden>
                                        <input type='submit' value='Trocar'>
                                        </form>
                                    </li>";
                                }
                            }
                            if($key['item6'] != NULL){
                                $item6 = $key['item6'];
                                if(isset($proib1) && $proib1 == $item6 || isset($proib2) && $proib2 == $item6 || isset($proib3) && $proib3 == $item6 || isset($proib4) && $proib4 == $item6 || isset($proib5) && $proib5 == $item6 || isset($proib6) && $proib6 == $item6 || isset($proib7) && $proib7 == $item6 || isset($proib8) && $proib8 == $item6 || isset($proib9) && $proib9 == $item6 || isset($proib10) && $proib10 == $item6 || isset($proib11) && $proib11 == $item6 ){
                                    echo "<li>".$key['item6']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                    </li>";
                                } else {
                                    echo "<li>".$key['item6']."
                                        <form action='s_item2.php' method='post'>
                                        <label for='nome' hidden></label>
                                        <input type='text' id='nome' name='nome' value='$nome' hidden>
                                        <label for='item' hidden></label>
                                        <input type='text' id='item' name='item' value='$item6' hidden>
                                        <input type='submit' value='Trocar'>
                                        </form>
                                    </li>";
                                }
                            }
                            if($key['item7'] != NULL){
                                $item7 = $key['item7'];
                                if(isset($proib1) && $proib1 == $item7 || isset($proib2) && $proib2 == $item7 || isset($proib3) && $proib3 == $item7 || isset($proib4) && $proib4 == $item7 || isset($proib5) && $proib5 == $item7 || isset($proib6) && $proib6 == $item7 || isset($proib7) && $proib7 == $item7 || isset($proib8) && $proib8 == $item7 || isset($proib9) && $proib9 == $item7 || isset($proib10) && $proib10 == $item7 || isset($proib11) && $proib11 == $item7 ){
                                    echo "<li>".$key['item7']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                    </li>";
                                } else {
                                    echo "<li>".$key['item7']."
                                        <form action='s_item2.php' method='post'>
                                        <label for='nome' hidden></label>
                                        <input type='text' id='nome' name='nome' value='$nome' hidden>
                                        <label for='item' hidden></label>
                                        <input type='text' id='item' name='item' value='$item7' hidden>
                                        <input type='submit' value='Trocar'>
                                        </form>
                                    </li>";
                                }
                            }
                            if($key['item8'] != NULL){
                                $item8 = $key['item8'];
                                if(isset($proib1) && $proib1 == $item8 || isset($proib2) && $proib2 == $item8 || isset($proib3) && $proib3 == $item8 || isset($proib4) && $proib4 == $item8 || isset($proib5) && $proib5 == $item8 || isset($proib6) && $proib6 == $item8 || isset($proib7) && $proib7 == $item8 || isset($proib8) && $proib8 == $item8 || isset($proib9) && $proib9 == $item8 || isset($proib10) && $proib10 == $item8 || isset($proib11) && $proib11 == $item8 ){
                                    echo "<li>".$key['item8']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                    </li>";
                                } else {
                                    echo "<li>".$key['item8']."
                                        <form action='s_item2.php' method='post'>
                                        <label for='nome' hidden></label>
                                        <input type='text' id='nome' name='nome' value='$nome' hidden>
                                        <label for='item' hidden></label>
                                        <input type='text' id='item' name='item' value='$item8' hidden>
                                        <input type='submit' value='Trocar'>
                                        </form>
                                    </li>";
                                }
                            }
                            if($key['item9'] != NULL){
                                $item9 = $key['item9'];
                                if(isset($proib1) && $proib1 == $item9 || isset($proib2) && $proib2 == $item9 || isset($proib3) && $proib3 == $item9 || isset($proib4) && $proib4 == $item9 || isset($proib5) && $proib5 == $item9 || isset($proib6) && $proib6 == $item9 || isset($proib7) && $proib7 == $item9|| isset($proib8) && $proib8 == $item9 || isset($proib9) && $proib9 == $item9 || isset($proib10) && $proib10 == $item9 || isset($proib11) && $proib11 == $item9 ){
                                    echo "<li>".$key['item9']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                    </li>";
                                } else {
                                    echo "<li>".$key['item9']."
                                        <form action='s_item2.php' method='post'>
                                        <label for='nome' hidden></label>
                                        <input type='text' id='nome' name='nome' value='$nome' hidden>
                                        <label for='item' hidden></label>
                                        <input type='text' id='item' name='item' value='$item9' hidden>
                                        <input type='submit' value='Trocar'>
                                        </form>
                                    </li>";
                                }
                            }
                            if($key['item10'] != NULL){
                                $item10 = $key['item10'];
                                if(isset($proib1) && $proib1 == $item10 || isset($proib2) && $proib2 == $item10 || isset($proib3) && $proib3 == $item10 || isset($proib4) && $proib4 == $item10 || isset($proib5) && $proib5 == $item10 || isset($proib6) && $proib6 == $item10 || isset($proib7) && $proib7 == $item10 || isset($proib8) && $proib8 == $item10 || isset($proib9) && $proib9 == $item10 || isset($proib10) && $proib10 == $item10 || isset($proib11) && $proib11 == $item10 ){
                                    echo "<li>".$key['item10']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                    </li>";
                                } else {
                                    echo "<li>".$key['item10']."
                                        <form action='s_item2.php' method='post'>
                                        <label for='nome' hidden></label>
                                        <input type='text' id='nome' name='nome' value='$nome' hidden>
                                        <label for='item' hidden></label>
                                        <input type='text' id='item' name='item' value='$item10' hidden>
                                        <input type='submit' value='Trocar'>
                                        </form>
                                    </li>";
                                }
                            }
                            if($key['item11'] != NULL){
                                $item11 = $key['item11'];
                                if(isset($proib1) && $proib1 == $item11 || isset($proib2) && $proib2 == $item11 || isset($proib3) && $proib3 == $item11 || isset($proib4) && $proib4 == $item11 || isset($proib5) && $proib5 == $item11 || isset($proib6) && $proib6 == $item11 || isset($proib7) && $proib7 == $item11 || isset($proib8) && $proib8 == $item11 || isset($proib9) && $proib9 == $item11 || isset($proib10) && $proib10 == $item11 || isset($proib11) && $proib11 == $item11 ){
                                    echo "<li>".$key['item11']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                    </li>";
                                } else {
                                    echo "<li>".$key['item11']."
                                        <form action='s_item2.php' method='post'>
                                        <label for='nome' hidden></label>
                                        <input type='text' id='nome' name='nome' value='$nome' hidden>
                                        <label for='item' hidden></label>
                                        <input type='text' id='item' name='item' value='$item11' hidden>
                                        <input type='submit' value='Trocar'>
                                        </form>
                                    </li>";
                                }
                            }
                            if($key['item12'] != NULL){
                                $item12 = $key['item12'];
                                if(isset($proib1) && $proib1 == $item12 || isset($proib2) && $proib2 == $item12 || isset($proib3) && $proib3 == $item12 || isset($proib4) && $proib4 == $item12 || isset($proib5) && $proib5 == $item12 || isset($proib6) && $proib6 == $item12 || isset($proib7) && $proib7 == $item12 || isset($proib8) && $proib8 == $item12 || isset($proib9) && $proib9 == $item12 || isset($proib10) && $proib10 == $item12 || isset($proib11) && $proib11 == $item12 ){
                                    echo "<li>".$key['item12']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                    </li>";
                                } else {
                                    echo "<li>".$key['item12']."
                                        <form action='s_item2.php' method='post'>
                                        <label for='nome' hidden></label>
                                        <input type='text' id='nome' name='nome' value='$nome' hidden>
                                        <label for='item' hidden></label>
                                        <input type='text' id='item' name='item' value='$item12' hidden>
                                        <input type='submit' value='Trocar'>
                                        </form>
                                    </li>";
                                }
                            }
                            if($key['item13'] != NULL){
                                $item13 = $key['item13'];
                                if(isset($proib1) && $proib1 == $item13 || isset($proib2) && $proib2 == $item13 || isset($proib3) && $proib3 == $item13 || isset($proib4) && $proib4 == $item13 || isset($proib5) && $proib5 == $item13 || isset($proib6) && $proib6 == $item13 || isset($proib7) && $proib7 == $item13 || isset($proib8) && $proib8 == $item13 || isset($proib9) && $proib9 == $item13 || isset($proib10) && $proib10 == $item13 || isset($proib11) && $proib11 == $item13 ){
                                    echo "<li>".$key['item13']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                    </li>";
                                } else {
                                    echo "<li>".$key['item13']."
                                        <form action='s_item2.php' method='post'>
                                        <label for='nome' hidden></label>
                                        <input type='text' id='nome' name='nome' value='$nome' hidden>
                                        <label for='item' hidden></label>
                                        <input type='text' id='item' name='item' value='$item13' hidden>
                                        <input type='submit' value='Trocar'>
                                        </form>
                                    </li>";
                                }
                            }
                            if($key['item14'] != NULL){
                                $item14 = $key['item14'];
                                if(isset($proib1) && $proib1 == $item14 || isset($proib2) && $proib2 == $item14 || isset($proib3) && $proib3 == $item14 || isset($proib4) && $proib4 == $item14 || isset($proib5) && $proib5 == $item14 || isset($proib6) && $proib6 == $item14 || isset($proib7) && $proib7 == $item14 || isset($proib8) && $proib8 == $item14 || isset($proib9) && $proib9 == $item14 || isset($proib10) && $proib10 == $item14 || isset($proib11) && $proib11 == $item14 ){
                                    echo "<li>".$key['item14']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                    </li>";
                                } else {
                                    echo "<li>".$key['item14']."
                                        <form action='s_item2.php' method='post'>
                                        <label for='nome' hidden></label>
                                        <input type='text' id='nome' name='nome' value='$nome' hidden>
                                        <label for='item' hidden></label>
                                        <input type='text' id='item' name='item' value='$item14' hidden>
                                        <input type='submit' value='Trocar'>
                                        </form>
                                    </li>";
                                }
                            }
                            if($key['item15'] != NULL){
                                $item15 = $key['item15'];
                                if(isset($proib1) && $proib1 == $item15 || isset($proib2) && $proib2 == $item15 || isset($proib3) && $proib3 == $item15 || isset($proib4) && $proib4 == $item15 || isset($proib5) && $proib5 == $item15 || isset($proib6) && $proib6 == $item15 || isset($proib7) && $proib7 == $item15 || isset($proib8) && $proib8 == $item15 || isset($proib9) && $proib9 == $item15 || isset($proib10) && $proib10 == $item15 || isset($proib11) && $proib11 == $item15 ){
                                    echo "<li>".$key['item15']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                    </li>";
                                } else {
                                    echo "<li>".$key['item15']."
                                        <form action='s_item2.php' method='post'>
                                        <label for='nome' hidden></label>
                                        <input type='text' id='nome' name='nome' value='$nome' hidden>
                                        <label for='item' hidden></label>
                                        <input type='text' id='item' name='item' value='$item15' hidden>
                                        <input type='submit' value='Trocar'>
                                        </form>
                                    </li>";
                                }
                            }
                            if($key['item16'] != NULL){
                                $item16 = $key['item16'];
                                if(isset($proib1) && $proib1 == $item16 || isset($proib2) && $proib2 == $item16 || isset($proib3) && $proib3 == $item16 || isset($proib4) && $proib4 == $item16 || isset($proib5) && $proib5 == $item16 || isset($proib6) && $proib6 == $item16 || isset($proib7) && $proib7 == $item16 || isset($proib8) && $proib8 == $item16 || isset($proib9) && $proib9 == $item16 || isset($proib10) && $proib10 == $item16 || isset($proib11) && $proib11 == $item16 ){
                                    echo "<li>".$key['item16']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                    </li>";
                                } else {
                                    echo "<li>".$key['item16']."
                                        <form action='s_item2.php' method='post'>
                                        <label for='nome' hidden></label>
                                        <input type='text' id='nome' name='nome' value='$nome' hidden>
                                        <label for='item' hidden></label>
                                        <input type='text' id='item' name='item' value='$item16' hidden>
                                        <input type='submit' value='Trocar'>
                                        </form>
                                    </li>";
                                }
                            }
                            if($key['item17'] != NULL){
                                $item17 = $key['item17'];
                                if(isset($proib1) && $proib1 == $item17 || isset($proib2) && $proib2 == $item17 || isset($proib3) && $proib3 == $item17 || isset($proib4) && $proib4 == $item17 || isset($proib5) && $proib5 == $item17 || isset($proib6) && $proib6 == $item17 || isset($proib7) && $proib7 == $item17 || isset($proib8) && $proib8 == $item17 || isset($proib9) && $proib9 == $item17 || isset($proib10) && $proib10 == $item17 || isset($proib11) && $proib11 == $item17 ){
                                    echo "<li>".$key['item17']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                    </li>";
                                } else {
                                    echo "<li>".$key['item17']."
                                        <form action='s_item2.php' method='post'>
                                        <label for='nome' hidden></label>
                                        <input type='text' id='nome' name='nome' value='$nome' hidden>
                                        <label for='item' hidden></label>
                                        <input type='text' id='item' name='item' value='$item17' hidden>
                                        <input type='submit' value='Trocar'>
                                        </form>
                                    </li>";
                                }
                            }
                            if($key['item18'] != NULL){
                                $item18 = $key['item18'];
                                if(isset($proib1) && $proib1 == $item18 || isset($proib2) && $proib2 == $item18 || isset($proib3) && $proib3 == $item18 || isset($proib4) && $proib4 == $item18 || isset($proib5) && $proib5 == $item18 || isset($proib6) && $proib6 == $item18 || isset($proib7) && $proib7 == $item18 || isset($proib8) && $proib8 == $item18 || isset($proib9) && $proib9 == $item18 || isset($proib10) && $proib10 == $item18 || isset($proib11) && $proib11 == $item18 ){
                                    echo "<li>".$key['item18']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                    </li>";
                                } else {
                                    echo "<li>".$key['item18']."
                                        <form action='s_item2.php' method='post'>
                                        <label for='nome' hidden></label>
                                        <input type='text' id='nome' name='nome' value='$nome' hidden>
                                        <label for='item' hidden></label>
                                        <input type='text' id='item' name='item' value='$item18' hidden>
                                        <input type='submit' value='Trocar'>
                                        </form>
                                    </li>";
                                }
                            }
                            if($key['item19'] != NULL){
                                $item19 = $key['item19'];
                                if(isset($proib1) && $proib1 == $item19 || isset($proib2) && $proib2 == $item19 || isset($proib3) && $proib3 == $item19 || isset($proib4) && $proib4 == $item19 || isset($proib5) && $proib5 == $item19 || isset($proib6) && $proib6 == $item19 || isset($proib7) && $proib7 == $item19 || isset($proib8) && $proib8 == $item19 || isset($proib9) && $proib9 == $item19 || isset($proib10) && $proib10 == $item19 || isset($proib11) && $proib11 == $item19 ){
                                    echo "<li>".$key['item19']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                    </li>";
                                } else {
                                    echo "<li>".$key['item19']."
                                        <form action='s_item2.php' method='post'>
                                        <label for='nome' hidden></label>
                                        <input type='text' id='nome' name='nome' value='$nome' hidden>
                                        <label for='item' hidden></label>
                                        <input type='text' id='item' name='item' value='$item19' hidden>
                                        <input type='submit' value='Trocar'>
                                        </form>
                                    </li>";
                                }
                            }
                            if($key['item20'] != NULL){
                                $item20 = $key['item20'];
                                if(isset($proib1) && $proib1 == $item20 || isset($proib2) && $proib2 == $item20 || isset($proib3) && $proib3 == $item20 || isset($proib4) && $proib4 == $item20 || isset($proib5) && $proib5 == $item20 || isset($proib6) && $proib6 == $item20 || isset($proib7) && $proib7 == $item20 || isset($proib8) && $proib8 == $item20 || isset($proib9) && $proib9 == $item20 || isset($proib10) && $proib10 == $item20 || isset($proib11) && $proib11 == $item20 ){
                                    echo "<li>".$key['item20']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                    </li>";
                                } else {
                                    echo "<li>".$key['item20']."
                                        <form action='s_item2.php' method='post'>
                                        <label for='nome' hidden></label>
                                        <input type='text' id='nome' name='nome' value='$nome' hidden>
                                        <label for='item' hidden></label>
                                        <input type='text' id='item' name='item' value='$item20' hidden>
                                        <input type='submit' value='Trocar'>
                                        </form>
                                    </li>";
                                }
                            }
                            if($key['item21'] != NULL){
                                $item21 = $key['item21'];
                                if(isset($proib1) && $proib1 == $item21 || isset($proib2) && $proib2 == $item21 || isset($proib3) && $proib3 == $item21 || isset($proib4) && $proib4 == $item21 || isset($proib5) && $proib5 == $item21 || isset($proib6) && $proib6 == $item21 || isset($proib7) && $proib7 == $item21 || isset($proib8) && $proib8 == $item21 || isset($proib9) && $proib9 == $item21 || isset($proib10) && $proib10 == $item21 || isset($proib11) && $proib11 == $item21 ){
                                    echo "<li>".$key['item21']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                    </li>";
                                } else {
                                    echo "<li>".$key['item21']."
                                        <form action='s_item2.php' method='post'>
                                        <label for='nome' hidden></label>
                                        <input type='text' id='nome' name='nome' value='$nome' hidden>
                                        <label for='item' hidden></label>
                                        <input type='text' id='item' name='item' value='$item21' hidden>
                                        <input type='submit' value='Trocar'>
                                        </form>
                                    </li>";
                                }
                            }
                            if($key['item22'] != NULL){
                                $item22 = $key['item22'];
                                if(isset($proib1) && $proib1 == $item22 || isset($proib2) && $proib2 == $item22 || isset($proib3) && $proib3 == $item22 || isset($proib4) && $proib4 == $item22 || isset($proib5) && $proib5 == $item22 || isset($proib6) && $proib6 == $item22 || isset($proib7) && $proib7 == $item22 || isset($proib8) && $proib8 == $item22 || isset($proib9) && $proib9 == $item22 || isset($proib10) && $proib10 == $item22 || isset($proib11) && $proib11 == $item22 ){
                                    echo "<li>".$key['item22']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                    </li>";
                                } else {
                                    echo "<li>".$key['item22']."
                                        <form action='s_item2.php' method='post'>
                                        <label for='nome' hidden></label>
                                        <input type='text' id='nome' name='nome' value='$nome' hidden>
                                        <label for='item' hidden></label>
                                        <input type='text' id='item' name='item' value='$item22' hidden>
                                        <input type='submit' value='Trocar'>
                                        </form>
                                    </li>";
                                }
                            }
                            if($key['item23'] != NULL){
                                $item23 = $key['item23'];
                                if(isset($proib1) && $proib1 == $item23 || isset($proib2) && $proib2 == $item23 || isset($proib3) && $proib3 == $item23 || isset($proib4) && $proib4 == $item23 || isset($proib5) && $proib5 == $item23 || isset($proib6) && $proib6 == $item23 || isset($proib7) && $proib7 == $item23 || isset($proib8) && $proib8 == $item23 || isset($proib9) && $proib9 == $item23 || isset($proib10) && $proib10 == $item23 || isset($proib11) && $proib11 == $item23 ){
                                    echo "<li>".$key['item23']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                    </li>";
                                } else {
                                    echo "<li>".$key['item23']."
                                        <form action='s_item2.php' method='post'>
                                        <label for='nome' hidden></label>
                                        <input type='text' id='nome' name='nome' value='$nome' hidden>
                                        <label for='item' hidden></label>
                                        <input type='text' id='item' name='item' value='$item23' hidden>
                                        <input type='submit' value='Trocar'>
                                        </form>
                                    </li>";
                                }
                            }
                            if($key['item24'] != NULL){
                                $item24 = $key['item24'];
                                if(isset($proib1) && $proib1 == $item24 || isset($proib2) && $proib2 == $item24 || isset($proib3) && $proib3 == $item24 || isset($proib4) && $proib4 == $item24 || isset($proib5) && $proib5 == $item24 || isset($proib6) && $proib6 == $item24 || isset($proib7) && $proib7 == $item24 || isset($proib8) && $proib8 == $item24 || isset($proib9) && $proib9 == $item24 || isset($proib10) && $proib10 == $item24 || isset($proib11) && $proib11 == $item24 ){
                                    echo "<li>".$key['item24']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                    </li>";
                                } else {
                                    echo "<li>".$key['item24']."
                                        <form action='s_item2.php' method='post'>
                                        <label for='nome' hidden></label>
                                        <input type='text' id='nome' name='nome' value='$nome' hidden>
                                        <label for='item' hidden></label>
                                        <input type='text' id='item' name='item' value='$item24' hidden>
                                        <input type='submit' value='Trocar'>
                                        </form>
                                    </li>";
                                }
                            }
                            if($key['item25'] != NULL){
                                if(isset($proib1) && $proib1 == $item25 || isset($proib2) && $proib2 == $item25 || isset($proib3) && $proib3 == $item25 || isset($proib4) && $proib4 == $item25 || isset($proib5) && $proib5 == $item25 || isset($proib6) && $proib6 == $item25 || isset($proib7) && $proib7 == $item25 || isset($proib8) && $proib8 == $item25 || isset($proib9) && $proib9 == $item25 || isset($proib10) && $proib10 == $item25 || isset($proib11) && $proib11 == $item25 ){
                                    echo "<li>".$key['item25']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                    </li>";
                                } else {
                                    echo "<li>".$key['item25']."
                                        <form action='s_item2.php' method='post'>
                                        <label for='nome' hidden></label>
                                        <input type='text' id='nome' name='nome' value='$nome' hidden>
                                        <label for='item' hidden></label>
                                        <input type='text' id='item' name='item' value='$item25' hidden>
                                        <input type='submit' value='Trocar'>
                                        </form>
                                    </li>";
                                }
                            }
                            echo "</ul>";
                            }
                        }
                        }
                    }
                    $id = $_SESSION['personagem4'];
                    $personagem = $repositorio->MostrarPersonagem($id);
                    foreach ($personagem as $key) {
                    $nome = $key['nome'];
                    $img = $key['img'];
                    echo "<img src='../../$img'>";
                    echo "<h2>Nome: ".$key['nome']."</h2>";
                    echo "<h2>Classe: ".$key['classe']."</h2>";
                    echo "<h2>Nível: ".$key['nivel']."</h2>";
                    echo "<h2>Dinheiro: ".$key['dinheiro']."</h2>";
                    $classe = $key['classe'];
                    $x = 0;
                    $verificar_itens = $repositorio->VerificarItem($classe);
                    foreach ($verificar_itens as $key) {
                        $key['nome'];
                        if($_SESSION['item'] == $key['nome']){
                            $x = $x + 1;
                        } 
                    }
                    if($x > 0){
                        echo "<h2 style='color:red'>A classe deste personagem não pode usar este Item!!!</h2>";
                    } else {
                    $id = $_SESSION['id_remetente'];
                    $personagem = $repositorio->MostrarPersonagem($id);
                    foreach ($personagem as $key) {
                        $classe = $key['classe'];
                        $verif = $repositorio->VerificarItem($classe);
                        foreach ($verif as $key) {
                            if(isset($proib1)){
                                if(isset($proib2)){
                                    if(isset($proib3)){
                                        if(isset($proib4)){
                                            if(isset($proib5)){
                                                if(isset($proib6)){
                                                    if(isset($proib7)){
                                                        if(isset($proib8)){
                                                            if(isset($proib9)){
                                                                if(isset($proib10)){
                                                                    if(isset($proib11)){

                                                                    } else {
                                                                        if(isset($key['nome'])){
                                                                            $proib11 = $key['nome'];
                                                                            
                                                                        }
                                                                    }
                                                                } else {
                                                                    if(isset($key['nome'])){
                                                                         $proib10 = $key['nome'];
                                                                        
                                                                    }
                                                                }
                                                            } else {
                                                                if(isset($key['nome'])){
                                                                    $proib9 = $key['nome'];
                                                                    
                                                                }
                                                            }
                                                        } else {
                                                            if(isset($key['nome'])){
                                                                $proib8 = $key['nome'];
                                                                
                                                            }
                                                        }
                                                    } else {
                                                        if(isset($key['nome'])){
                                                            $proib7 = $key['nome'];
                                                            
                                                        }
                                                    }
                                                } else {
                                                    if(isset($key['nome'])){
                                                        $proib6 = $key['nome'];
                                                        
                                                    }
                                                }
                                            } else {
                                                if(isset($key['nome'])){
                                                    $proib5 = $key['nome'];
                                                    
                                                }
                                            }
                                        } else {
                                            if(isset($key['nome'])){
                                                $proib4 = $key['nome'];
                                                
                                            }
                                        }
                                    } else {
                                        if(isset($key['nome'])){
                                            $proib3 = $key['nome'];
                                            
                                        }
                                    }
                                } else {
                                    if(isset($key['nome'])){
                                        $proib2 = $key['nome'];
                                        
                                    }
                                }
                            } else {
                                if(isset($key['nome'])){
                                    $proib1 = $key['nome'];
                                    
                                }
                            }
                        }
                        $inventario = $repositorio->MostrarInventario($nome);
                        foreach ($inventario as $key) {
                            
                            echo "<ul>";
                                $item1 = $key['item1'];
                                if(isset($proib1) && $proib1 == $item1 || isset($proib2) && $proib2 == $item1 || isset($proib3) && $proib3 == $item1 || isset($proib4) && $proib4 == $item1 || isset($proib5) && $proib5 == $item1 || isset($proib6) && $proib6 == $item1 || isset($proib7) && $proib7 == $item1 || isset($proib8) && $proib8 == $item1 || isset($proib9) && $proib9 == $item1 || isset($proib10) && $proib10 == $item1 || isset($proib11) && $proib11 == $item1 ){
                                    echo "<li>".$key['item1']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                    </li>";
                                } else {
                                    echo "<li>".$key['item1']."
                                        <form action='s_item2.php' method='post'>
                                        <label for='nome' hidden></label>
                                        <input type='text' id='nome' name='nome' value='$nome' hidden>
                                        <label for='item' hidden></label>
                                        <input type='text' id='item' name='item' value='$item1' hidden>
                                        <input type='submit' value='Trocar'>
                                        </form>
                                    </li>";
                                }
                                $item2 = $key['item2'];
                                if(isset($proib1) && $proib1 == $item2 || isset($proib2) && $proib2 == $item2 || isset($proib3) && $proib3 == $item2 || isset($proib4) && $proib4 == $item2 || isset($proib5) && $proib5 == $item2 || isset($proib6) && $proib6 == $item2 || isset($proib7) && $proib7 == $item2 || isset($proib8) && $proib8 == $item2 || isset($proib9) && $proib9 == $item2 || isset($proib10) && $proib10 == $item2 || isset($proib11) && $proib11 == $item2 ){
                                    echo "<li>".$key['item2']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                    </li>";
                                } else {
                                    echo "<li>".$key['item2']."
                                        <form action='s_item2.php' method='post'>
                                        <label for='nome' hidden></label>
                                        <input type='text' id='nome' name='nome' value='$nome' hidden>
                                        <label for='item' hidden></label>
                                        <input type='text' id='item' name='item' value='$item2' hidden>
                                        <input type='submit' value='Trocar'>
                                        </form>
                                    </li>";
                                }
                                if($key['item3'] != NULL){
                                    $item3 = $key['item3'];
                                    if(isset($proib1) && $proib1 == $item3 || isset($proib2) && $proib2 == $item3 || isset($proib3) && $proib3 == $item3 || isset($proib4) && $proib4 == $item3 || isset($proib5) && $proib5 == $item3 || isset($proib6) && $proib6 == $item3 || isset($proib7) && $proib7 == $item3 || isset($proib8) && $proib8 == $item3 || isset($proib9) && $proib9 == $item3 || isset($proib10) && $proib10 == $item3 || isset($proib11) && $proib11 == $item3 ){
                                        echo "<li>".$key['item3']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item3']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item3' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item4'] != NULL){
                                    $item4 = $key['item4'];
                                    if(isset($proib1) && $proib1 == $item4 || isset($proib2) && $proib2 == $item4 || isset($proib3) && $proib3 == $item4 || isset($proib4) && $proib4 == $item4 || isset($proib5) && $proib5 == $item4 || isset($proib6) && $proib6 == $item4 || isset($proib7) && $proib7 == $item4 || isset($proib8) && $proib8 == $item4 || isset($proib9) && $proib9 == $item4 || isset($proib10) && $proib10 == $item4 || isset($proib11) && $proib11 == $item4 ){
                                        echo "<li>".$key['item4']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item4']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item4' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item5'] != NULL){
                                    $item5 = $key['item5'];
                                    if(isset($proib1) && $proib1 == $item5 || isset($proib2) && $proib2 == $item5 || isset($proib3) && $proib3 == $item5 || isset($proib4) && $proib4 == $item5 || isset($proib5) && $proib5 == $item5 || isset($proib6) && $proib6 == $item5 || isset($proib7) && $proib7 == $item5 || isset($proib8) && $proib8 == $item5 || isset($proib9) && $proib9 == $item5 || isset($proib10) && $proib10 == $item5 || isset($proib11) && $proib11 == $item5 ){
                                        echo "<li>".$key['item5']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item5']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item5' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item6'] != NULL){
                                    $item6 = $key['item6'];
                                    if(isset($proib1) && $proib1 == $item6 || isset($proib2) && $proib2 == $item6 || isset($proib3) && $proib3 == $item6 || isset($proib4) && $proib4 == $item6 || isset($proib5) && $proib5 == $item6 || isset($proib6) && $proib6 == $item6 || isset($proib7) && $proib7 == $item6 || isset($proib8) && $proib8 == $item6 || isset($proib9) && $proib9 == $item6 || isset($proib10) && $proib10 == $item6 || isset($proib11) && $proib11 == $item6 ){
                                        echo "<li>".$key['item6']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item6']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item6' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item7'] != NULL){
                                    $item7 = $key['item7'];
                                    if(isset($proib1) && $proib1 == $item7 || isset($proib2) && $proib2 == $item7 || isset($proib3) && $proib3 == $item7 || isset($proib4) && $proib4 == $item7 || isset($proib5) && $proib5 == $item7 || isset($proib6) && $proib6 == $item7 || isset($proib7) && $proib7 == $item7 || isset($proib8) && $proib8 == $item7 || isset($proib9) && $proib9 == $item7 || isset($proib10) && $proib10 == $item7 || isset($proib11) && $proib11 == $item7 ){
                                        echo "<li>".$key['item7']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item7']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item7' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item8'] != NULL){
                                    $item8 = $key['item8'];
                                    if(isset($proib1) && $proib1 == $item8 || isset($proib2) && $proib2 == $item8 || isset($proib3) && $proib3 == $item8 || isset($proib4) && $proib4 == $item8 || isset($proib5) && $proib5 == $item8 || isset($proib6) && $proib6 == $item8 || isset($proib7) && $proib7 == $item8 || isset($proib8) && $proib8 == $item8 || isset($proib9) && $proib9 == $item8 || isset($proib10) && $proib10 == $item8 || isset($proib11) && $proib11 == $item8 ){
                                        echo "<li>".$key['item8']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item8']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item8' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item9'] != NULL){
                                    $item9 = $key['item9'];
                                    if(isset($proib1) && $proib1 == $item9 || isset($proib2) && $proib2 == $item9 || isset($proib3) && $proib3 == $item9 || isset($proib4) && $proib4 == $item9 || isset($proib5) && $proib5 == $item9 || isset($proib6) && $proib6 == $item9 || isset($proib7) && $proib7 == $item9|| isset($proib8) && $proib8 == $item9 || isset($proib9) && $proib9 == $item9 || isset($proib10) && $proib10 == $item9 || isset($proib11) && $proib11 == $item9 ){
                                        echo "<li>".$key['item9']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item9']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item9' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item10'] != NULL){
                                    $item10 = $key['item10'];
                                    if(isset($proib1) && $proib1 == $item10 || isset($proib2) && $proib2 == $item10 || isset($proib3) && $proib3 == $item10 || isset($proib4) && $proib4 == $item10 || isset($proib5) && $proib5 == $item10 || isset($proib6) && $proib6 == $item10 || isset($proib7) && $proib7 == $item10 || isset($proib8) && $proib8 == $item10 || isset($proib9) && $proib9 == $item10 || isset($proib10) && $proib10 == $item10 || isset($proib11) && $proib11 == $item10 ){
                                        echo "<li>".$key['item10']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item10']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item10' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item11'] != NULL){
                                    $item11 = $key['item11'];
                                    if(isset($proib1) && $proib1 == $item11 || isset($proib2) && $proib2 == $item11 || isset($proib3) && $proib3 == $item11 || isset($proib4) && $proib4 == $item11 || isset($proib5) && $proib5 == $item11 || isset($proib6) && $proib6 == $item11 || isset($proib7) && $proib7 == $item11 || isset($proib8) && $proib8 == $item11 || isset($proib9) && $proib9 == $item11 || isset($proib10) && $proib10 == $item11 || isset($proib11) && $proib11 == $item11 ){
                                        echo "<li>".$key['item11']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item11']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item11' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item12'] != NULL){
                                    $item12 = $key['item12'];
                                    if(isset($proib1) && $proib1 == $item12 || isset($proib2) && $proib2 == $item12 || isset($proib3) && $proib3 == $item12 || isset($proib4) && $proib4 == $item12 || isset($proib5) && $proib5 == $item12 || isset($proib6) && $proib6 == $item12 || isset($proib7) && $proib7 == $item12 || isset($proib8) && $proib8 == $item12 || isset($proib9) && $proib9 == $item12 || isset($proib10) && $proib10 == $item12 || isset($proib11) && $proib11 == $item12 ){
                                        echo "<li>".$key['item12']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item12']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item12' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item13'] != NULL){
                                    $item13 = $key['item13'];
                                    if(isset($proib1) && $proib1 == $item13 || isset($proib2) && $proib2 == $item13 || isset($proib3) && $proib3 == $item13 || isset($proib4) && $proib4 == $item13 || isset($proib5) && $proib5 == $item13 || isset($proib6) && $proib6 == $item13 || isset($proib7) && $proib7 == $item13 || isset($proib8) && $proib8 == $item13 || isset($proib9) && $proib9 == $item13 || isset($proib10) && $proib10 == $item13 || isset($proib11) && $proib11 == $item13 ){
                                        echo "<li>".$key['item13']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item13']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item13' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item14'] != NULL){
                                    $item14 = $key['item14'];
                                    if(isset($proib1) && $proib1 == $item14 || isset($proib2) && $proib2 == $item14 || isset($proib3) && $proib3 == $item14 || isset($proib4) && $proib4 == $item14 || isset($proib5) && $proib5 == $item14 || isset($proib6) && $proib6 == $item14 || isset($proib7) && $proib7 == $item14 || isset($proib8) && $proib8 == $item14 || isset($proib9) && $proib9 == $item14 || isset($proib10) && $proib10 == $item14 || isset($proib11) && $proib11 == $item14 ){
                                        echo "<li>".$key['item14']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item14']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item14' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item15'] != NULL){
                                    $item15 = $key['item15'];
                                    if(isset($proib1) && $proib1 == $item15 || isset($proib2) && $proib2 == $item15 || isset($proib3) && $proib3 == $item15 || isset($proib4) && $proib4 == $item15 || isset($proib5) && $proib5 == $item15 || isset($proib6) && $proib6 == $item15 || isset($proib7) && $proib7 == $item15 || isset($proib8) && $proib8 == $item15 || isset($proib9) && $proib9 == $item15 || isset($proib10) && $proib10 == $item15 || isset($proib11) && $proib11 == $item15 ){
                                        echo "<li>".$key['item15']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item15']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item15' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item16'] != NULL){
                                    $item16 = $key['item16'];
                                    if(isset($proib1) && $proib1 == $item16 || isset($proib2) && $proib2 == $item16 || isset($proib3) && $proib3 == $item16 || isset($proib4) && $proib4 == $item16 || isset($proib5) && $proib5 == $item16 || isset($proib6) && $proib6 == $item16 || isset($proib7) && $proib7 == $item16 || isset($proib8) && $proib8 == $item16 || isset($proib9) && $proib9 == $item16 || isset($proib10) && $proib10 == $item16 || isset($proib11) && $proib11 == $item16 ){
                                        echo "<li>".$key['item16']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item16']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item16' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item17'] != NULL){
                                    $item17 = $key['item17'];
                                    if(isset($proib1) && $proib1 == $item17 || isset($proib2) && $proib2 == $item17 || isset($proib3) && $proib3 == $item17 || isset($proib4) && $proib4 == $item17 || isset($proib5) && $proib5 == $item17 || isset($proib6) && $proib6 == $item17 || isset($proib7) && $proib7 == $item17 || isset($proib8) && $proib8 == $item17 || isset($proib9) && $proib9 == $item17 || isset($proib10) && $proib10 == $item17 || isset($proib11) && $proib11 == $item17 ){
                                        echo "<li>".$key['item17']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item17']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item17' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item18'] != NULL){
                                    $item18 = $key['item18'];
                                    if(isset($proib1) && $proib1 == $item18 || isset($proib2) && $proib2 == $item18 || isset($proib3) && $proib3 == $item18 || isset($proib4) && $proib4 == $item18 || isset($proib5) && $proib5 == $item18 || isset($proib6) && $proib6 == $item18 || isset($proib7) && $proib7 == $item18 || isset($proib8) && $proib8 == $item18 || isset($proib9) && $proib9 == $item18 || isset($proib10) && $proib10 == $item18 || isset($proib11) && $proib11 == $item18 ){
                                        echo "<li>".$key['item18']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item18']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item18' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item19'] != NULL){
                                    $item19 = $key['item19'];
                                    if(isset($proib1) && $proib1 == $item19 || isset($proib2) && $proib2 == $item19 || isset($proib3) && $proib3 == $item19 || isset($proib4) && $proib4 == $item19 || isset($proib5) && $proib5 == $item19 || isset($proib6) && $proib6 == $item19 || isset($proib7) && $proib7 == $item19 || isset($proib8) && $proib8 == $item19 || isset($proib9) && $proib9 == $item19 || isset($proib10) && $proib10 == $item19 || isset($proib11) && $proib11 == $item19 ){
                                        echo "<li>".$key['item19']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item19']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item19' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item20'] != NULL){
                                    $item20 = $key['item20'];
                                    if(isset($proib1) && $proib1 == $item20 || isset($proib2) && $proib2 == $item20 || isset($proib3) && $proib3 == $item20 || isset($proib4) && $proib4 == $item20 || isset($proib5) && $proib5 == $item20 || isset($proib6) && $proib6 == $item20 || isset($proib7) && $proib7 == $item20 || isset($proib8) && $proib8 == $item20 || isset($proib9) && $proib9 == $item20 || isset($proib10) && $proib10 == $item20 || isset($proib11) && $proib11 == $item20 ){
                                        echo "<li>".$key['item20']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item20']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item20' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item21'] != NULL){
                                    $item21 = $key['item21'];
                                    if(isset($proib1) && $proib1 == $item21 || isset($proib2) && $proib2 == $item21 || isset($proib3) && $proib3 == $item21 || isset($proib4) && $proib4 == $item21 || isset($proib5) && $proib5 == $item21 || isset($proib6) && $proib6 == $item21 || isset($proib7) && $proib7 == $item21 || isset($proib8) && $proib8 == $item21 || isset($proib9) && $proib9 == $item21 || isset($proib10) && $proib10 == $item21 || isset($proib11) && $proib11 == $item21 ){
                                        echo "<li>".$key['item21']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item21']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item21' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item22'] != NULL){
                                    $item22 = $key['item22'];
                                    if(isset($proib1) && $proib1 == $item22 || isset($proib2) && $proib2 == $item22 || isset($proib3) && $proib3 == $item22 || isset($proib4) && $proib4 == $item22 || isset($proib5) && $proib5 == $item22 || isset($proib6) && $proib6 == $item22 || isset($proib7) && $proib7 == $item22 || isset($proib8) && $proib8 == $item22 || isset($proib9) && $proib9 == $item22 || isset($proib10) && $proib10 == $item22 || isset($proib11) && $proib11 == $item22 ){
                                        echo "<li>".$key['item22']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item22']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item22' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item23'] != NULL){
                                    $item23 = $key['item23'];
                                    if(isset($proib1) && $proib1 == $item23 || isset($proib2) && $proib2 == $item23 || isset($proib3) && $proib3 == $item23 || isset($proib4) && $proib4 == $item23 || isset($proib5) && $proib5 == $item23 || isset($proib6) && $proib6 == $item23 || isset($proib7) && $proib7 == $item23 || isset($proib8) && $proib8 == $item23 || isset($proib9) && $proib9 == $item23 || isset($proib10) && $proib10 == $item23 || isset($proib11) && $proib11 == $item23 ){
                                        echo "<li>".$key['item23']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item23']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item23' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item24'] != NULL){
                                    $item24 = $key['item24'];
                                    if(isset($proib1) && $proib1 == $item24 || isset($proib2) && $proib2 == $item24 || isset($proib3) && $proib3 == $item24 || isset($proib4) && $proib4 == $item24 || isset($proib5) && $proib5 == $item24 || isset($proib6) && $proib6 == $item24 || isset($proib7) && $proib7 == $item24 || isset($proib8) && $proib8 == $item24 || isset($proib9) && $proib9 == $item24 || isset($proib10) && $proib10 == $item24 || isset($proib11) && $proib11 == $item24 ){
                                        echo "<li>".$key['item24']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item24']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item24' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item25'] != NULL){
                                    if(isset($proib1) && $proib1 == $item25 || isset($proib2) && $proib2 == $item25 || isset($proib3) && $proib3 == $item25 || isset($proib4) && $proib4 == $item25 || isset($proib5) && $proib5 == $item25 || isset($proib6) && $proib6 == $item25 || isset($proib7) && $proib7 == $item25 || isset($proib8) && $proib8 == $item25 || isset($proib9) && $proib9 == $item25 || isset($proib10) && $proib10 == $item25 || isset($proib11) && $proib11 == $item25 ){
                                        echo "<li>".$key['item25']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item25']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item25' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                echo "</ul>";
                            }
                        }
                        }
                    }
                }
            } else if($_SESSION['id_remetente'] == $_SESSION['personagem3']){
                $id = $_SESSION['personagem1'];
                $personagem = $repositorio->MostrarPersonagem($id);
                foreach ($personagem as $key) {
                $nome = $key['nome'];
                $img = $key['img'];
                echo "<img src='../../$img'>";
                echo "<h2>Nome: ".$key['nome']."</h2>";
                echo "<h2>Classe: ".$key['classe']."</h2>";
                echo "<h2>Nível: ".$key['nivel']."</h2>";
                echo "<h2>Dinheiro: ".$key['dinheiro']."</h2>";
                $classe = $key['classe'];
                $x = 0;
                $verificar_itens = $repositorio->VerificarItem($classe);
                foreach ($verificar_itens as $key) {
                    if($_SESSION['item'] == $key['nome']){
                        $x = $x + 1;
                    } 
                }
                if($x > 0){
                    echo "<h2 style='color:red'>A classe deste personagem não pode usar este Item!!!</h2>";
                } else {
                    $id = $_SESSION['id_remetente'];
                    $personagem = $repositorio->MostrarPersonagem($id);
                    foreach ($personagem as $key) {
                        $classe = $key['classe'];
                        $verif = $repositorio->VerificarItem($classe);
                        foreach ($verif as $key) {
                            if(isset($proib1)){
                                if(isset($proib2)){
                                    if(isset($proib3)){
                                        if(isset($proib4)){
                                            if(isset($proib5)){
                                                if(isset($proib6)){
                                                    if(isset($proib7)){
                                                        if(isset($proib8)){
                                                            if(isset($proib9)){
                                                                if(isset($proib10)){
                                                                    if(isset($proib11)){

                                                                    } else {
                                                                        if(isset($key['nome'])){
                                                                             $proib11 = $key['nome'];
                                                                            
                                                                        }
                                                                    }
                                                                } else {
                                                                    if(isset($key['nome'])){
                                                                        $proib10 = $key['nome'];
                                                                        
                                                                    }
                                                                }
                                                            } else {
                                                                if(isset($key['nome'])){
                                                                    $proib9 = $key['nome'];
                                                                    
                                                                }
                                                            }
                                                        } else {
                                                            if(isset($key['nome'])){
                                                                $proib8 = $key['nome'];
                                                                
                                                            }
                                                        }
                                                    } else {
                                                        if(isset($key['nome'])){
                                                            $proib7 = $key['nome'];
                                                            
                                                        }
                                                    }
                                                } else {
                                                    if(isset($key['nome'])){
                                                        $proib6 = $key['nome'];
                                                        
                                                    }
                                                }
                                            } else {
                                                if(isset($key['nome'])){
                                                    $proib5 = $key['nome'];
                                                    
                                                }
                                            }
                                        } else {
                                            if(isset($key['nome'])){
                                                $proib4 = $key['nome'];
                                                
                                            }
                                        }
                                    } else {
                                        if(isset($key['nome'])){
                                            $proib3 = $key['nome'];
                                            
                                        }
                                    }
                                } else {
                                    if(isset($key['nome'])){
                                        $proib2 = $key['nome'];
                                        
                                    }
                                }
                            } else {
                                if(isset($key['nome'])){
                                    $proib1 = $key['nome'];
                                    
                                }
                            }
                        }
                        $inventario = $repositorio->MostrarInventario($nome);
                        foreach ($inventario as $key) {
                            
                            echo "<ul>";
                                $item1 = $key['item1'];
                                if(isset($proib1) && $proib1 == $item1 || isset($proib2) && $proib2 == $item1 || isset($proib3) && $proib3 == $item1 || isset($proib4) && $proib4 == $item1 || isset($proib5) && $proib5 == $item1 || isset($proib6) && $proib6 == $item1 || isset($proib7) && $proib7 == $item1 || isset($proib8) && $proib8 == $item1 || isset($proib9) && $proib9 == $item1 || isset($proib10) && $proib10 == $item1 || isset($proib11) && $proib11 == $item1 ){
                                    echo "<li>".$key['item1']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                    </li>";
                                } else {
                                    echo "<li>".$key['item1']."
                                        <form action='s_item2.php' method='post'>
                                        <label for='nome' hidden></label>
                                        <input type='text' id='nome' name='nome' value='$nome' hidden>
                                        <label for='item' hidden></label>
                                        <input type='text' id='item' name='item' value='$item1' hidden>
                                        <input type='submit' value='Trocar'>
                                        </form>
                                    </li>";
                                }
                                $item2 = $key['item2'];
                                if(isset($proib1) && $proib1 == $item2 || isset($proib2) && $proib2 == $item2 || isset($proib3) && $proib3 == $item2 || isset($proib4) && $proib4 == $item2 || isset($proib5) && $proib5 == $item2 || isset($proib6) && $proib6 == $item2 || isset($proib7) && $proib7 == $item2 || isset($proib8) && $proib8 == $item2 || isset($proib9) && $proib9 == $item2 || isset($proib10) && $proib10 == $item2 || isset($proib11) && $proib11 == $item2 ){
                                    echo "<li>".$key['item2']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                    </li>";
                                } else {
                                    echo "<li>".$key['item2']."
                                        <form action='s_item2.php' method='post'>
                                        <label for='nome' hidden></label>
                                        <input type='text' id='nome' name='nome' value='$nome' hidden>
                                        <label for='item' hidden></label>
                                        <input type='text' id='item' name='item' value='$item2' hidden>
                                        <input type='submit' value='Trocar'>
                                        </form>
                                    </li>";
                                }
                                if($key['item3'] != NULL){
                                    $item3 = $key['item3'];
                                    if(isset($proib1) && $proib1 == $item3 || isset($proib2) && $proib2 == $item3 || isset($proib3) && $proib3 == $item3 || isset($proib4) && $proib4 == $item3 || isset($proib5) && $proib5 == $item3 || isset($proib6) && $proib6 == $item3 || isset($proib7) && $proib7 == $item3 || isset($proib8) && $proib8 == $item3 || isset($proib9) && $proib9 == $item3 || isset($proib10) && $proib10 == $item3 || isset($proib11) && $proib11 == $item3 ){
                                        echo "<li>".$key['item3']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item3']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item3' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item4'] != NULL){
                                    $item4 = $key['item4'];
                                    if(isset($proib1) && $proib1 == $item4 || isset($proib2) && $proib2 == $item4 || isset($proib3) && $proib3 == $item4 || isset($proib4) && $proib4 == $item4 || isset($proib5) && $proib5 == $item4 || isset($proib6) && $proib6 == $item4 || isset($proib7) && $proib7 == $item4 || isset($proib8) && $proib8 == $item4 || isset($proib9) && $proib9 == $item4 || isset($proib10) && $proib10 == $item4 || isset($proib11) && $proib11 == $item4 ){
                                        echo "<li>".$key['item4']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item4']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item4' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item5'] != NULL){
                                    $item5 = $key['item5'];
                                    if(isset($proib1) && $proib1 == $item5 || isset($proib2) && $proib2 == $item5 || isset($proib3) && $proib3 == $item5 || isset($proib4) && $proib4 == $item5 || isset($proib5) && $proib5 == $item5 || isset($proib6) && $proib6 == $item5 || isset($proib7) && $proib7 == $item5 || isset($proib8) && $proib8 == $item5 || isset($proib9) && $proib9 == $item5 || isset($proib10) && $proib10 == $item5 || isset($proib11) && $proib11 == $item5 ){
                                        echo "<li>".$key['item5']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item5']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item5' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item6'] != NULL){
                                    $item6 = $key['item6'];
                                    if(isset($proib1) && $proib1 == $item6 || isset($proib2) && $proib2 == $item6 || isset($proib3) && $proib3 == $item6 || isset($proib4) && $proib4 == $item6 || isset($proib5) && $proib5 == $item6 || isset($proib6) && $proib6 == $item6 || isset($proib7) && $proib7 == $item6 || isset($proib8) && $proib8 == $item6 || isset($proib9) && $proib9 == $item6 || isset($proib10) && $proib10 == $item6 || isset($proib11) && $proib11 == $item6 ){
                                        echo "<li>".$key['item6']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item6']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item6' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item7'] != NULL){
                                    $item7 = $key['item7'];
                                    if(isset($proib1) && $proib1 == $item7 || isset($proib2) && $proib2 == $item7 || isset($proib3) && $proib3 == $item7 || isset($proib4) && $proib4 == $item7 || isset($proib5) && $proib5 == $item7 || isset($proib6) && $proib6 == $item7 || isset($proib7) && $proib7 == $item7 || isset($proib8) && $proib8 == $item7 || isset($proib9) && $proib9 == $item7 || isset($proib10) && $proib10 == $item7 || isset($proib11) && $proib11 == $item7 ){
                                        echo "<li>".$key['item7']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item7']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item7' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item8'] != NULL){
                                    $item8 = $key['item8'];
                                    if(isset($proib1) && $proib1 == $item8 || isset($proib2) && $proib2 == $item8 || isset($proib3) && $proib3 == $item8 || isset($proib4) && $proib4 == $item8 || isset($proib5) && $proib5 == $item8 || isset($proib6) && $proib6 == $item8 || isset($proib7) && $proib7 == $item8 || isset($proib8) && $proib8 == $item8 || isset($proib9) && $proib9 == $item8 || isset($proib10) && $proib10 == $item8 || isset($proib11) && $proib11 == $item8 ){
                                        echo "<li>".$key['item8']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item8']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item8' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item9'] != NULL){
                                    $item9 = $key['item9'];
                                    if(isset($proib1) && $proib1 == $item9 || isset($proib2) && $proib2 == $item9 || isset($proib3) && $proib3 == $item9 || isset($proib4) && $proib4 == $item9 || isset($proib5) && $proib5 == $item9 || isset($proib6) && $proib6 == $item9 || isset($proib7) && $proib7 == $item9|| isset($proib8) && $proib8 == $item9 || isset($proib9) && $proib9 == $item9 || isset($proib10) && $proib10 == $item9 || isset($proib11) && $proib11 == $item9 ){
                                        echo "<li>".$key['item9']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item9']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item9' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item10'] != NULL){
                                    $item10 = $key['item10'];
                                    if(isset($proib1) && $proib1 == $item10 || isset($proib2) && $proib2 == $item10 || isset($proib3) && $proib3 == $item10 || isset($proib4) && $proib4 == $item10 || isset($proib5) && $proib5 == $item10 || isset($proib6) && $proib6 == $item10 || isset($proib7) && $proib7 == $item10 || isset($proib8) && $proib8 == $item10 || isset($proib9) && $proib9 == $item10 || isset($proib10) && $proib10 == $item10 || isset($proib11) && $proib11 == $item10 ){
                                        echo "<li>".$key['item10']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item10']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item10' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item11'] != NULL){
                                    $item11 = $key['item11'];
                                    if(isset($proib1) && $proib1 == $item11 || isset($proib2) && $proib2 == $item11 || isset($proib3) && $proib3 == $item11 || isset($proib4) && $proib4 == $item11 || isset($proib5) && $proib5 == $item11 || isset($proib6) && $proib6 == $item11 || isset($proib7) && $proib7 == $item11 || isset($proib8) && $proib8 == $item11 || isset($proib9) && $proib9 == $item11 || isset($proib10) && $proib10 == $item11 || isset($proib11) && $proib11 == $item11 ){
                                        echo "<li>".$key['item11']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item11']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item11' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item12'] != NULL){
                                    $item12 = $key['item12'];
                                    if(isset($proib1) && $proib1 == $item12 || isset($proib2) && $proib2 == $item12 || isset($proib3) && $proib3 == $item12 || isset($proib4) && $proib4 == $item12 || isset($proib5) && $proib5 == $item12 || isset($proib6) && $proib6 == $item12 || isset($proib7) && $proib7 == $item12 || isset($proib8) && $proib8 == $item12 || isset($proib9) && $proib9 == $item12 || isset($proib10) && $proib10 == $item12 || isset($proib11) && $proib11 == $item12 ){
                                        echo "<li>".$key['item12']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item12']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item12' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item13'] != NULL){
                                    $item13 = $key['item13'];
                                    if(isset($proib1) && $proib1 == $item13 || isset($proib2) && $proib2 == $item13 || isset($proib3) && $proib3 == $item13 || isset($proib4) && $proib4 == $item13 || isset($proib5) && $proib5 == $item13 || isset($proib6) && $proib6 == $item13 || isset($proib7) && $proib7 == $item13 || isset($proib8) && $proib8 == $item13 || isset($proib9) && $proib9 == $item13 || isset($proib10) && $proib10 == $item13 || isset($proib11) && $proib11 == $item13 ){
                                        echo "<li>".$key['item13']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item13']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item13' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item14'] != NULL){
                                    $item14 = $key['item14'];
                                    if(isset($proib1) && $proib1 == $item14 || isset($proib2) && $proib2 == $item14 || isset($proib3) && $proib3 == $item14 || isset($proib4) && $proib4 == $item14 || isset($proib5) && $proib5 == $item14 || isset($proib6) && $proib6 == $item14 || isset($proib7) && $proib7 == $item14 || isset($proib8) && $proib8 == $item14 || isset($proib9) && $proib9 == $item14 || isset($proib10) && $proib10 == $item14 || isset($proib11) && $proib11 == $item14 ){
                                        echo "<li>".$key['item14']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item14']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item14' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item15'] != NULL){
                                    $item15 = $key['item15'];
                                    if(isset($proib1) && $proib1 == $item15 || isset($proib2) && $proib2 == $item15 || isset($proib3) && $proib3 == $item15 || isset($proib4) && $proib4 == $item15 || isset($proib5) && $proib5 == $item15 || isset($proib6) && $proib6 == $item15 || isset($proib7) && $proib7 == $item15 || isset($proib8) && $proib8 == $item15 || isset($proib9) && $proib9 == $item15 || isset($proib10) && $proib10 == $item15 || isset($proib11) && $proib11 == $item15 ){
                                        echo "<li>".$key['item15']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item15']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item15' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item16'] != NULL){
                                    $item16 = $key['item16'];
                                    if(isset($proib1) && $proib1 == $item16 || isset($proib2) && $proib2 == $item16 || isset($proib3) && $proib3 == $item16 || isset($proib4) && $proib4 == $item16 || isset($proib5) && $proib5 == $item16 || isset($proib6) && $proib6 == $item16 || isset($proib7) && $proib7 == $item16 || isset($proib8) && $proib8 == $item16 || isset($proib9) && $proib9 == $item16 || isset($proib10) && $proib10 == $item16 || isset($proib11) && $proib11 == $item16 ){
                                        echo "<li>".$key['item16']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item16']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item16' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item17'] != NULL){
                                    $item17 = $key['item17'];
                                    if(isset($proib1) && $proib1 == $item17 || isset($proib2) && $proib2 == $item17 || isset($proib3) && $proib3 == $item17 || isset($proib4) && $proib4 == $item17 || isset($proib5) && $proib5 == $item17 || isset($proib6) && $proib6 == $item17 || isset($proib7) && $proib7 == $item17 || isset($proib8) && $proib8 == $item17 || isset($proib9) && $proib9 == $item17 || isset($proib10) && $proib10 == $item17 || isset($proib11) && $proib11 == $item17 ){
                                        echo "<li>".$key['item17']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item17']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item17' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item18'] != NULL){
                                    $item18 = $key['item18'];
                                    if(isset($proib1) && $proib1 == $item18 || isset($proib2) && $proib2 == $item18 || isset($proib3) && $proib3 == $item18 || isset($proib4) && $proib4 == $item18 || isset($proib5) && $proib5 == $item18 || isset($proib6) && $proib6 == $item18 || isset($proib7) && $proib7 == $item18 || isset($proib8) && $proib8 == $item18 || isset($proib9) && $proib9 == $item18 || isset($proib10) && $proib10 == $item18 || isset($proib11) && $proib11 == $item18 ){
                                        echo "<li>".$key['item18']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item18']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item18' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item19'] != NULL){
                                    $item19 = $key['item19'];
                                    if(isset($proib1) && $proib1 == $item19 || isset($proib2) && $proib2 == $item19 || isset($proib3) && $proib3 == $item19 || isset($proib4) && $proib4 == $item19 || isset($proib5) && $proib5 == $item19 || isset($proib6) && $proib6 == $item19 || isset($proib7) && $proib7 == $item19 || isset($proib8) && $proib8 == $item19 || isset($proib9) && $proib9 == $item19 || isset($proib10) && $proib10 == $item19 || isset($proib11) && $proib11 == $item19 ){
                                        echo "<li>".$key['item19']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item19']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item19' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item20'] != NULL){
                                    $item20 = $key['item20'];
                                    if(isset($proib1) && $proib1 == $item20 || isset($proib2) && $proib2 == $item20 || isset($proib3) && $proib3 == $item20 || isset($proib4) && $proib4 == $item20 || isset($proib5) && $proib5 == $item20 || isset($proib6) && $proib6 == $item20 || isset($proib7) && $proib7 == $item20 || isset($proib8) && $proib8 == $item20 || isset($proib9) && $proib9 == $item20 || isset($proib10) && $proib10 == $item20 || isset($proib11) && $proib11 == $item20 ){
                                        echo "<li>".$key['item20']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item20']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item20' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item21'] != NULL){
                                    $item21 = $key['item21'];
                                    if(isset($proib1) && $proib1 == $item21 || isset($proib2) && $proib2 == $item21 || isset($proib3) && $proib3 == $item21 || isset($proib4) && $proib4 == $item21 || isset($proib5) && $proib5 == $item21 || isset($proib6) && $proib6 == $item21 || isset($proib7) && $proib7 == $item21 || isset($proib8) && $proib8 == $item21 || isset($proib9) && $proib9 == $item21 || isset($proib10) && $proib10 == $item21 || isset($proib11) && $proib11 == $item21 ){
                                        echo "<li>".$key['item21']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item21']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item21' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item22'] != NULL){
                                    $item22 = $key['item22'];
                                    if(isset($proib1) && $proib1 == $item22 || isset($proib2) && $proib2 == $item22 || isset($proib3) && $proib3 == $item22 || isset($proib4) && $proib4 == $item22 || isset($proib5) && $proib5 == $item22 || isset($proib6) && $proib6 == $item22 || isset($proib7) && $proib7 == $item22 || isset($proib8) && $proib8 == $item22 || isset($proib9) && $proib9 == $item22 || isset($proib10) && $proib10 == $item22 || isset($proib11) && $proib11 == $item22 ){
                                        echo "<li>".$key['item22']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item22']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item22' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item23'] != NULL){
                                    $item23 = $key['item23'];
                                    if(isset($proib1) && $proib1 == $item23 || isset($proib2) && $proib2 == $item23 || isset($proib3) && $proib3 == $item23 || isset($proib4) && $proib4 == $item23 || isset($proib5) && $proib5 == $item23 || isset($proib6) && $proib6 == $item23 || isset($proib7) && $proib7 == $item23 || isset($proib8) && $proib8 == $item23 || isset($proib9) && $proib9 == $item23 || isset($proib10) && $proib10 == $item23 || isset($proib11) && $proib11 == $item23 ){
                                        echo "<li>".$key['item23']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item23']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item23' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item24'] != NULL){
                                    $item24 = $key['item24'];
                                    if(isset($proib1) && $proib1 == $item24 || isset($proib2) && $proib2 == $item24 || isset($proib3) && $proib3 == $item24 || isset($proib4) && $proib4 == $item24 || isset($proib5) && $proib5 == $item24 || isset($proib6) && $proib6 == $item24 || isset($proib7) && $proib7 == $item24 || isset($proib8) && $proib8 == $item24 || isset($proib9) && $proib9 == $item24 || isset($proib10) && $proib10 == $item24 || isset($proib11) && $proib11 == $item24 ){
                                        echo "<li>".$key['item24']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item24']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item24' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item25'] != NULL){
                                    if(isset($proib1) && $proib1 == $item25 || isset($proib2) && $proib2 == $item25 || isset($proib3) && $proib3 == $item25 || isset($proib4) && $proib4 == $item25 || isset($proib5) && $proib5 == $item25 || isset($proib6) && $proib6 == $item25 || isset($proib7) && $proib7 == $item25 || isset($proib8) && $proib8 == $item25 || isset($proib9) && $proib9 == $item25 || isset($proib10) && $proib10 == $item25 || isset($proib11) && $proib11 == $item25 ){
                                        echo "<li>".$key['item25']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item25']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item25' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                echo "</ul>";
                            }
                        }
                    }
                    $id = $_SESSION['personagem2'];
                    $personagem = $repositorio->MostrarPersonagem($id);
                    foreach ($personagem as $key) {
                    $nome = $key['nome'];
                    $img = $key['img'];
                    echo "<img src='../../$img'>";
                    echo "<h2>Nome: ".$key['nome']."</h2>";
                    echo "<h2>Classe: ".$key['classe']."</h2>";
                    echo "<h2>Nível: ".$key['nivel']."</h2>";
                    echo "<h2>Dinheiro: ".$key['dinheiro']."</h2>";
                    $classe = $key['classe'];
                    $x = 0;
                    $verificar_itens = $repositorio->VerificarItem($classe);
                    foreach ($verificar_itens as $key) {
                        $key['nome'];
                        if($_SESSION['item'] == $key['nome']){
                            $x = $x + 1;
                        } 
                    }
                    if($x > 0){
                        echo "<h2 style='color:red'>A classe deste personagem não pode usar este Item!!!</h2>";
                    } else {
                    $id = $_SESSION['id_remetente'];
                    $personagem = $repositorio->MostrarPersonagem($id);
                    foreach ($personagem as $key) {
                        $classe = $key['classe'];
                        $verif = $repositorio->VerificarItem($classe);
                        foreach ($verif as $key) {
                            if(isset($proib1)){
                                if(isset($proib2)){
                                    if(isset($proib3)){
                                        if(isset($proib4)){
                                            if(isset($proib5)){
                                                if(isset($proib6)){
                                                    if(isset($proib7)){
                                                        if(isset($proib8)){
                                                            if(isset($proib9)){
                                                                if(isset($proib10)){
                                                                    if(isset($proib11)){

                                                                    } else {
                                                                        if(isset($key['nome'])){
                                                                             $proib11 = $key['nome'];
                                                                            
                                                                        }
                                                                    }
                                                                } else {
                                                                    if(isset($key['nome'])){
                                                                        $proib10 = $key['nome'];
                                                                        
                                                                    }
                                                                }
                                                            } else {
                                                                if(isset($key['nome'])){
                                                                    $proib9 = $key['nome'];
                                                                    
                                                                }
                                                            }
                                                        } else {
                                                            if(isset($key['nome'])){
                                                                $proib8 = $key['nome'];
                                                                
                                                            }
                                                        }
                                                    } else {
                                                        if(isset($key['nome'])){
                                                            $proib7 = $key['nome'];
                                                            
                                                        }
                                                    }
                                                } else {
                                                    if(isset($key['nome'])){
                                                        $proib6 = $key['nome'];
                                                        
                                                    }
                                                }
                                            } else {
                                                if(isset($key['nome'])){
                                                    $proib5 = $key['nome'];
                                                    
                                                }
                                            }
                                        } else {
                                            if(isset($key['nome'])){
                                                $proib4 = $key['nome'];
                                                
                                            }
                                        }
                                    } else {
                                        if(isset($key['nome'])){
                                            $proib3 = $key['nome'];
                                            
                                        }
                                    }
                                } else {
                                    if(isset($key['nome'])){
                                        $proib2 = $key['nome'];
                                        
                                    }
                                }
                            } else {
                                if(isset($key['nome'])){
                                    $proib1 = $key['nome'];
                                    
                                }
                            }
                        }
                        $inventario = $repositorio->MostrarInventario($nome);
                        foreach ($inventario as $key) {
                            
                            echo "<ul>";
                                $item1 = $key['item1'];
                                if(isset($proib1) && $proib1 == $item1 || isset($proib2) && $proib2 == $item1 || isset($proib3) && $proib3 == $item1 || isset($proib4) && $proib4 == $item1 || isset($proib5) && $proib5 == $item1 || isset($proib6) && $proib6 == $item1 || isset($proib7) && $proib7 == $item1 || isset($proib8) && $proib8 == $item1 || isset($proib9) && $proib9 == $item1 || isset($proib10) && $proib10 == $item1 || isset($proib11) && $proib11 == $item1 ){
                                    echo "<li>".$key['item1']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                    </li>";
                                } else {
                                    echo "<li>".$key['item1']."
                                        <form action='s_item2.php' method='post'>
                                        <label for='nome' hidden></label>
                                        <input type='text' id='nome' name='nome' value='$nome' hidden>
                                        <label for='item' hidden></label>
                                        <input type='text' id='item' name='item' value='$item1' hidden>
                                        <input type='submit' value='Trocar'>
                                        </form>
                                    </li>";
                                }
                                $item2 = $key['item2'];
                                if(isset($proib1) && $proib1 == $item2 || isset($proib2) && $proib2 == $item2 || isset($proib3) && $proib3 == $item2 || isset($proib4) && $proib4 == $item2 || isset($proib5) && $proib5 == $item2 || isset($proib6) && $proib6 == $item2 || isset($proib7) && $proib7 == $item2 || isset($proib8) && $proib8 == $item2 || isset($proib9) && $proib9 == $item2 || isset($proib10) && $proib10 == $item2 || isset($proib11) && $proib11 == $item2 ){
                                    echo "<li>".$key['item2']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                    </li>";
                                } else {
                                    echo "<li>".$key['item2']."
                                        <form action='s_item2.php' method='post'>
                                        <label for='nome' hidden></label>
                                        <input type='text' id='nome' name='nome' value='$nome' hidden>
                                        <label for='item' hidden></label>
                                        <input type='text' id='item' name='item' value='$item2' hidden>
                                        <input type='submit' value='Trocar'>
                                        </form>
                                    </li>";
                                }
                                if($key['item3'] != NULL){
                                    $item3 = $key['item3'];
                                    if(isset($proib1) && $proib1 == $item3 || isset($proib2) && $proib2 == $item3 || isset($proib3) && $proib3 == $item3 || isset($proib4) && $proib4 == $item3 || isset($proib5) && $proib5 == $item3 || isset($proib6) && $proib6 == $item3 || isset($proib7) && $proib7 == $item3 || isset($proib8) && $proib8 == $item3 || isset($proib9) && $proib9 == $item3 || isset($proib10) && $proib10 == $item3 || isset($proib11) && $proib11 == $item3 ){
                                        echo "<li>".$key['item3']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item3']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item3' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item4'] != NULL){
                                    $item4 = $key['item4'];
                                    if(isset($proib1) && $proib1 == $item4 || isset($proib2) && $proib2 == $item4 || isset($proib3) && $proib3 == $item4 || isset($proib4) && $proib4 == $item4 || isset($proib5) && $proib5 == $item4 || isset($proib6) && $proib6 == $item4 || isset($proib7) && $proib7 == $item4 || isset($proib8) && $proib8 == $item4 || isset($proib9) && $proib9 == $item4 || isset($proib10) && $proib10 == $item4 || isset($proib11) && $proib11 == $item4 ){
                                        echo "<li>".$key['item4']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item4']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item4' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item5'] != NULL){
                                    $item5 = $key['item5'];
                                    if(isset($proib1) && $proib1 == $item5 || isset($proib2) && $proib2 == $item5 || isset($proib3) && $proib3 == $item5 || isset($proib4) && $proib4 == $item5 || isset($proib5) && $proib5 == $item5 || isset($proib6) && $proib6 == $item5 || isset($proib7) && $proib7 == $item5 || isset($proib8) && $proib8 == $item5 || isset($proib9) && $proib9 == $item5 || isset($proib10) && $proib10 == $item5 || isset($proib11) && $proib11 == $item5 ){
                                        echo "<li>".$key['item5']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item5']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item5' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item6'] != NULL){
                                    $item6 = $key['item6'];
                                    if(isset($proib1) && $proib1 == $item6 || isset($proib2) && $proib2 == $item6 || isset($proib3) && $proib3 == $item6 || isset($proib4) && $proib4 == $item6 || isset($proib5) && $proib5 == $item6 || isset($proib6) && $proib6 == $item6 || isset($proib7) && $proib7 == $item6 || isset($proib8) && $proib8 == $item6 || isset($proib9) && $proib9 == $item6 || isset($proib10) && $proib10 == $item6 || isset($proib11) && $proib11 == $item6 ){
                                        echo "<li>".$key['item6']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item6']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item6' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item7'] != NULL){
                                    $item7 = $key['item7'];
                                    if(isset($proib1) && $proib1 == $item7 || isset($proib2) && $proib2 == $item7 || isset($proib3) && $proib3 == $item7 || isset($proib4) && $proib4 == $item7 || isset($proib5) && $proib5 == $item7 || isset($proib6) && $proib6 == $item7 || isset($proib7) && $proib7 == $item7 || isset($proib8) && $proib8 == $item7 || isset($proib9) && $proib9 == $item7 || isset($proib10) && $proib10 == $item7 || isset($proib11) && $proib11 == $item7 ){
                                        echo "<li>".$key['item7']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item7']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item7' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item8'] != NULL){
                                    $item8 = $key['item8'];
                                    if(isset($proib1) && $proib1 == $item8 || isset($proib2) && $proib2 == $item8 || isset($proib3) && $proib3 == $item8 || isset($proib4) && $proib4 == $item8 || isset($proib5) && $proib5 == $item8 || isset($proib6) && $proib6 == $item8 || isset($proib7) && $proib7 == $item8 || isset($proib8) && $proib8 == $item8 || isset($proib9) && $proib9 == $item8 || isset($proib10) && $proib10 == $item8 || isset($proib11) && $proib11 == $item8 ){
                                        echo "<li>".$key['item8']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item8']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item8' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item9'] != NULL){
                                    $item9 = $key['item9'];
                                    if(isset($proib1) && $proib1 == $item9 || isset($proib2) && $proib2 == $item9 || isset($proib3) && $proib3 == $item9 || isset($proib4) && $proib4 == $item9 || isset($proib5) && $proib5 == $item9 || isset($proib6) && $proib6 == $item9 || isset($proib7) && $proib7 == $item9|| isset($proib8) && $proib8 == $item9 || isset($proib9) && $proib9 == $item9 || isset($proib10) && $proib10 == $item9 || isset($proib11) && $proib11 == $item9 ){
                                        echo "<li>".$key['item9']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item9']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item9' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item10'] != NULL){
                                    $item10 = $key['item10'];
                                    if(isset($proib1) && $proib1 == $item10 || isset($proib2) && $proib2 == $item10 || isset($proib3) && $proib3 == $item10 || isset($proib4) && $proib4 == $item10 || isset($proib5) && $proib5 == $item10 || isset($proib6) && $proib6 == $item10 || isset($proib7) && $proib7 == $item10 || isset($proib8) && $proib8 == $item10 || isset($proib9) && $proib9 == $item10 || isset($proib10) && $proib10 == $item10 || isset($proib11) && $proib11 == $item10 ){
                                        echo "<li>".$key['item10']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item10']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item10' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item11'] != NULL){
                                    $item11 = $key['item11'];
                                    if(isset($proib1) && $proib1 == $item11 || isset($proib2) && $proib2 == $item11 || isset($proib3) && $proib3 == $item11 || isset($proib4) && $proib4 == $item11 || isset($proib5) && $proib5 == $item11 || isset($proib6) && $proib6 == $item11 || isset($proib7) && $proib7 == $item11 || isset($proib8) && $proib8 == $item11 || isset($proib9) && $proib9 == $item11 || isset($proib10) && $proib10 == $item11 || isset($proib11) && $proib11 == $item11 ){
                                        echo "<li>".$key['item11']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item11']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item11' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item12'] != NULL){
                                    $item12 = $key['item12'];
                                    if(isset($proib1) && $proib1 == $item12 || isset($proib2) && $proib2 == $item12 || isset($proib3) && $proib3 == $item12 || isset($proib4) && $proib4 == $item12 || isset($proib5) && $proib5 == $item12 || isset($proib6) && $proib6 == $item12 || isset($proib7) && $proib7 == $item12 || isset($proib8) && $proib8 == $item12 || isset($proib9) && $proib9 == $item12 || isset($proib10) && $proib10 == $item12 || isset($proib11) && $proib11 == $item12 ){
                                        echo "<li>".$key['item12']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item12']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item12' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item13'] != NULL){
                                    $item13 = $key['item13'];
                                    if(isset($proib1) && $proib1 == $item13 || isset($proib2) && $proib2 == $item13 || isset($proib3) && $proib3 == $item13 || isset($proib4) && $proib4 == $item13 || isset($proib5) && $proib5 == $item13 || isset($proib6) && $proib6 == $item13 || isset($proib7) && $proib7 == $item13 || isset($proib8) && $proib8 == $item13 || isset($proib9) && $proib9 == $item13 || isset($proib10) && $proib10 == $item13 || isset($proib11) && $proib11 == $item13 ){
                                        echo "<li>".$key['item13']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item13']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item13' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item14'] != NULL){
                                    $item14 = $key['item14'];
                                    if(isset($proib1) && $proib1 == $item14 || isset($proib2) && $proib2 == $item14 || isset($proib3) && $proib3 == $item14 || isset($proib4) && $proib4 == $item14 || isset($proib5) && $proib5 == $item14 || isset($proib6) && $proib6 == $item14 || isset($proib7) && $proib7 == $item14 || isset($proib8) && $proib8 == $item14 || isset($proib9) && $proib9 == $item14 || isset($proib10) && $proib10 == $item14 || isset($proib11) && $proib11 == $item14 ){
                                        echo "<li>".$key['item14']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item14']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item14' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item15'] != NULL){
                                    $item15 = $key['item15'];
                                    if(isset($proib1) && $proib1 == $item15 || isset($proib2) && $proib2 == $item15 || isset($proib3) && $proib3 == $item15 || isset($proib4) && $proib4 == $item15 || isset($proib5) && $proib5 == $item15 || isset($proib6) && $proib6 == $item15 || isset($proib7) && $proib7 == $item15 || isset($proib8) && $proib8 == $item15 || isset($proib9) && $proib9 == $item15 || isset($proib10) && $proib10 == $item15 || isset($proib11) && $proib11 == $item15 ){
                                        echo "<li>".$key['item15']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item15']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item15' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item16'] != NULL){
                                    $item16 = $key['item16'];
                                    if(isset($proib1) && $proib1 == $item16 || isset($proib2) && $proib2 == $item16 || isset($proib3) && $proib3 == $item16 || isset($proib4) && $proib4 == $item16 || isset($proib5) && $proib5 == $item16 || isset($proib6) && $proib6 == $item16 || isset($proib7) && $proib7 == $item16 || isset($proib8) && $proib8 == $item16 || isset($proib9) && $proib9 == $item16 || isset($proib10) && $proib10 == $item16 || isset($proib11) && $proib11 == $item16 ){
                                        echo "<li>".$key['item16']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item16']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item16' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item17'] != NULL){
                                    $item17 = $key['item17'];
                                    if(isset($proib1) && $proib1 == $item17 || isset($proib2) && $proib2 == $item17 || isset($proib3) && $proib3 == $item17 || isset($proib4) && $proib4 == $item17 || isset($proib5) && $proib5 == $item17 || isset($proib6) && $proib6 == $item17 || isset($proib7) && $proib7 == $item17 || isset($proib8) && $proib8 == $item17 || isset($proib9) && $proib9 == $item17 || isset($proib10) && $proib10 == $item17 || isset($proib11) && $proib11 == $item17 ){
                                        echo "<li>".$key['item17']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item17']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item17' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item18'] != NULL){
                                    $item18 = $key['item18'];
                                    if(isset($proib1) && $proib1 == $item18 || isset($proib2) && $proib2 == $item18 || isset($proib3) && $proib3 == $item18 || isset($proib4) && $proib4 == $item18 || isset($proib5) && $proib5 == $item18 || isset($proib6) && $proib6 == $item18 || isset($proib7) && $proib7 == $item18 || isset($proib8) && $proib8 == $item18 || isset($proib9) && $proib9 == $item18 || isset($proib10) && $proib10 == $item18 || isset($proib11) && $proib11 == $item18 ){
                                        echo "<li>".$key['item18']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item18']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item18' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item19'] != NULL){
                                    $item19 = $key['item19'];
                                    if(isset($proib1) && $proib1 == $item19 || isset($proib2) && $proib2 == $item19 || isset($proib3) && $proib3 == $item19 || isset($proib4) && $proib4 == $item19 || isset($proib5) && $proib5 == $item19 || isset($proib6) && $proib6 == $item19 || isset($proib7) && $proib7 == $item19 || isset($proib8) && $proib8 == $item19 || isset($proib9) && $proib9 == $item19 || isset($proib10) && $proib10 == $item19 || isset($proib11) && $proib11 == $item19 ){
                                        echo "<li>".$key['item19']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item19']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item19' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item20'] != NULL){
                                    $item20 = $key['item20'];
                                    if(isset($proib1) && $proib1 == $item20 || isset($proib2) && $proib2 == $item20 || isset($proib3) && $proib3 == $item20 || isset($proib4) && $proib4 == $item20 || isset($proib5) && $proib5 == $item20 || isset($proib6) && $proib6 == $item20 || isset($proib7) && $proib7 == $item20 || isset($proib8) && $proib8 == $item20 || isset($proib9) && $proib9 == $item20 || isset($proib10) && $proib10 == $item20 || isset($proib11) && $proib11 == $item20 ){
                                        echo "<li>".$key['item20']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item20']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item20' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item21'] != NULL){
                                    $item21 = $key['item21'];
                                    if(isset($proib1) && $proib1 == $item21 || isset($proib2) && $proib2 == $item21 || isset($proib3) && $proib3 == $item21 || isset($proib4) && $proib4 == $item21 || isset($proib5) && $proib5 == $item21 || isset($proib6) && $proib6 == $item21 || isset($proib7) && $proib7 == $item21 || isset($proib8) && $proib8 == $item21 || isset($proib9) && $proib9 == $item21 || isset($proib10) && $proib10 == $item21 || isset($proib11) && $proib11 == $item21 ){
                                        echo "<li>".$key['item21']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item21']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item21' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item22'] != NULL){
                                    $item22 = $key['item22'];
                                    if(isset($proib1) && $proib1 == $item22 || isset($proib2) && $proib2 == $item22 || isset($proib3) && $proib3 == $item22 || isset($proib4) && $proib4 == $item22 || isset($proib5) && $proib5 == $item22 || isset($proib6) && $proib6 == $item22 || isset($proib7) && $proib7 == $item22 || isset($proib8) && $proib8 == $item22 || isset($proib9) && $proib9 == $item22 || isset($proib10) && $proib10 == $item22 || isset($proib11) && $proib11 == $item22 ){
                                        echo "<li>".$key['item22']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item22']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item22' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item23'] != NULL){
                                    $item23 = $key['item23'];
                                    if(isset($proib1) && $proib1 == $item23 || isset($proib2) && $proib2 == $item23 || isset($proib3) && $proib3 == $item23 || isset($proib4) && $proib4 == $item23 || isset($proib5) && $proib5 == $item23 || isset($proib6) && $proib6 == $item23 || isset($proib7) && $proib7 == $item23 || isset($proib8) && $proib8 == $item23 || isset($proib9) && $proib9 == $item23 || isset($proib10) && $proib10 == $item23 || isset($proib11) && $proib11 == $item23 ){
                                        echo "<li>".$key['item23']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item23']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item23' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item24'] != NULL){
                                    $item24 = $key['item24'];
                                    if(isset($proib1) && $proib1 == $item24 || isset($proib2) && $proib2 == $item24 || isset($proib3) && $proib3 == $item24 || isset($proib4) && $proib4 == $item24 || isset($proib5) && $proib5 == $item24 || isset($proib6) && $proib6 == $item24 || isset($proib7) && $proib7 == $item24 || isset($proib8) && $proib8 == $item24 || isset($proib9) && $proib9 == $item24 || isset($proib10) && $proib10 == $item24 || isset($proib11) && $proib11 == $item24 ){
                                        echo "<li>".$key['item24']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item24']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item24' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item25'] != NULL){
                                    if(isset($proib1) && $proib1 == $item25 || isset($proib2) && $proib2 == $item25 || isset($proib3) && $proib3 == $item25 || isset($proib4) && $proib4 == $item25 || isset($proib5) && $proib5 == $item25 || isset($proib6) && $proib6 == $item25 || isset($proib7) && $proib7 == $item25 || isset($proib8) && $proib8 == $item25 || isset($proib9) && $proib9 == $item25 || isset($proib10) && $proib10 == $item25 || isset($proib11) && $proib11 == $item25 ){
                                        echo "<li>".$key['item25']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item25']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item25' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                echo "</ul>";
                            }
                        }
                        }
                    }
                    $id = $_SESSION['personagem4'];
                    $personagem = $repositorio->MostrarPersonagem($id);
                    foreach ($personagem as $key) {
                    $nome = $key['nome'];
                    $img = $key['img'];
                    echo "<img src='../../$img'>";
                    echo "<h2>Nome: ".$key['nome']."</h2>";
                    echo "<h2>Classe: ".$key['classe']."</h2>";
                    echo "<h2>Nível: ".$key['nivel']."</h2>";
                    echo "<h2>Dinheiro: ".$key['dinheiro']."</h2>";
                    $classe = $key['classe'];
                    $x = 0;
                    $verificar_itens = $repositorio->VerificarItem($classe);
                    foreach ($verificar_itens as $key) {
                        $key['nome'];
                        if($_SESSION['item'] == $key['nome']){
                            $x = $x + 1;
                        } 
                    }
                    if($x > 0){
                        echo "<h2 style='color:red'>A classe deste personagem não pode usar este Item!!!</h2>";
                    } else {
                    $id = $_SESSION['id_remetente'];
                    $personagem = $repositorio->MostrarPersonagem($id);
                    foreach ($personagem as $key) {
                        $classe = $key['classe'];
                        $verif = $repositorio->VerificarItem($classe);
                        foreach ($verif as $key) {
                            if(isset($proib1)){
                                if(isset($proib2)){
                                    if(isset($proib3)){
                                        if(isset($proib4)){
                                            if(isset($proib5)){
                                                if(isset($proib6)){
                                                    if(isset($proib7)){
                                                        if(isset($proib8)){
                                                            if(isset($proib9)){
                                                                if(isset($proib10)){
                                                                    if(isset($proib11)){

                                                                    } else {
                                                                        if(isset($key['nome'])){
                                                                            $proib11 = $key['nome'];
                                                                            
                                                                        }
                                                                    }
                                                                } else {
                                                                    if(isset($key['nome'])){
                                                                        $proib10 = $key['nome'];
                                                                        
                                                                    }
                                                                }
                                                            } else {
                                                                if(isset($key['nome'])){
                                                                    $proib9 = $key['nome'];
                                                                    
                                                                }
                                                            }
                                                        } else {
                                                            if(isset($key['nome'])){
                                                                $proib8 = $key['nome'];
                                                                
                                                            }
                                                        }
                                                    } else {
                                                        if(isset($key['nome'])){
                                                            $proib7 = $key['nome'];
                                                            
                                                        }
                                                    }
                                                } else {
                                                    if(isset($key['nome'])){
                                                        $proib6 = $key['nome'];
                                                        
                                                    }
                                                }
                                            } else {
                                                if(isset($key['nome'])){
                                                    $proib5 = $key['nome'];
                                                    
                                                }
                                            }
                                        } else {
                                            if(isset($key['nome'])){
                                                $proib4 = $key['nome'];
                                                
                                            }
                                        }
                                    } else {
                                        if(isset($key['nome'])){
                                            $proib3 = $key['nome'];
                                            
                                        }
                                    }
                                } else {
                                    if(isset($key['nome'])){
                                        $proib2 = $key['nome'];
                                        
                                    }
                                }
                            } else {
                                if(isset($key['nome'])){
                                    $proib1 = $key['nome'];
                                    
                                }
                            }
                        }
                        $inventario = $repositorio->MostrarInventario($nome);
                        foreach ($inventario as $key) {
                            
                            echo "<ul>";
                                $item1 = $key['item1'];
                                if(isset($proib1) && $proib1 == $item1 || isset($proib2) && $proib2 == $item1 || isset($proib3) && $proib3 == $item1 || isset($proib4) && $proib4 == $item1 || isset($proib5) && $proib5 == $item1 || isset($proib6) && $proib6 == $item1 || isset($proib7) && $proib7 == $item1 || isset($proib8) && $proib8 == $item1 || isset($proib9) && $proib9 == $item1 || isset($proib10) && $proib10 == $item1 || isset($proib11) && $proib11 == $item1 ){
                                    echo "<li>".$key['item1']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                    </li>";
                                } else {
                                    echo "<li>".$key['item1']."
                                        <form action='s_item2.php' method='post'>
                                        <label for='nome' hidden></label>
                                        <input type='text' id='nome' name='nome' value='$nome' hidden>
                                        <label for='item' hidden></label>
                                        <input type='text' id='item' name='item' value='$item1' hidden>
                                        <input type='submit' value='Trocar'>
                                        </form>
                                    </li>";
                                }
                                $item2 = $key['item2'];
                                if(isset($proib1) && $proib1 == $item2 || isset($proib2) && $proib2 == $item2 || isset($proib3) && $proib3 == $item2 || isset($proib4) && $proib4 == $item2 || isset($proib5) && $proib5 == $item2 || isset($proib6) && $proib6 == $item2 || isset($proib7) && $proib7 == $item2 || isset($proib8) && $proib8 == $item2 || isset($proib9) && $proib9 == $item2 || isset($proib10) && $proib10 == $item2 || isset($proib11) && $proib11 == $item2 ){
                                    echo "<li>".$key['item2']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                    </li>";
                                } else {
                                    echo "<li>".$key['item2']."
                                        <form action='s_item2.php' method='post'>
                                        <label for='nome' hidden></label>
                                        <input type='text' id='nome' name='nome' value='$nome' hidden>
                                        <label for='item' hidden></label>
                                        <input type='text' id='item' name='item' value='$item2' hidden>
                                        <input type='submit' value='Trocar'>
                                        </form>
                                    </li>";
                                }
                                if($key['item3'] != NULL){
                                    $item3 = $key['item3'];
                                    if(isset($proib1) && $proib1 == $item3 || isset($proib2) && $proib2 == $item3 || isset($proib3) && $proib3 == $item3 || isset($proib4) && $proib4 == $item3 || isset($proib5) && $proib5 == $item3 || isset($proib6) && $proib6 == $item3 || isset($proib7) && $proib7 == $item3 || isset($proib8) && $proib8 == $item3 || isset($proib9) && $proib9 == $item3 || isset($proib10) && $proib10 == $item3 || isset($proib11) && $proib11 == $item3 ){
                                        echo "<li>".$key['item3']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item3']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item3' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item4'] != NULL){
                                    $item4 = $key['item4'];
                                    if(isset($proib1) && $proib1 == $item4 || isset($proib2) && $proib2 == $item4 || isset($proib3) && $proib3 == $item4 || isset($proib4) && $proib4 == $item4 || isset($proib5) && $proib5 == $item4 || isset($proib6) && $proib6 == $item4 || isset($proib7) && $proib7 == $item4 || isset($proib8) && $proib8 == $item4 || isset($proib9) && $proib9 == $item4 || isset($proib10) && $proib10 == $item4 || isset($proib11) && $proib11 == $item4 ){
                                        echo "<li>".$key['item4']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item4']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item4' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item5'] != NULL){
                                    $item5 = $key['item5'];
                                    if(isset($proib1) && $proib1 == $item5 || isset($proib2) && $proib2 == $item5 || isset($proib3) && $proib3 == $item5 || isset($proib4) && $proib4 == $item5 || isset($proib5) && $proib5 == $item5 || isset($proib6) && $proib6 == $item5 || isset($proib7) && $proib7 == $item5 || isset($proib8) && $proib8 == $item5 || isset($proib9) && $proib9 == $item5 || isset($proib10) && $proib10 == $item5 || isset($proib11) && $proib11 == $item5 ){
                                        echo "<li>".$key['item5']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item5']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item5' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item6'] != NULL){
                                    $item6 = $key['item6'];
                                    if(isset($proib1) && $proib1 == $item6 || isset($proib2) && $proib2 == $item6 || isset($proib3) && $proib3 == $item6 || isset($proib4) && $proib4 == $item6 || isset($proib5) && $proib5 == $item6 || isset($proib6) && $proib6 == $item6 || isset($proib7) && $proib7 == $item6 || isset($proib8) && $proib8 == $item6 || isset($proib9) && $proib9 == $item6 || isset($proib10) && $proib10 == $item6 || isset($proib11) && $proib11 == $item6 ){
                                        echo "<li>".$key['item6']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item6']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item6' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item7'] != NULL){
                                    $item7 = $key['item7'];
                                    if(isset($proib1) && $proib1 == $item7 || isset($proib2) && $proib2 == $item7 || isset($proib3) && $proib3 == $item7 || isset($proib4) && $proib4 == $item7 || isset($proib5) && $proib5 == $item7 || isset($proib6) && $proib6 == $item7 || isset($proib7) && $proib7 == $item7 || isset($proib8) && $proib8 == $item7 || isset($proib9) && $proib9 == $item7 || isset($proib10) && $proib10 == $item7 || isset($proib11) && $proib11 == $item7 ){
                                        echo "<li>".$key['item7']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item7']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item7' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item8'] != NULL){
                                    $item8 = $key['item8'];
                                    if(isset($proib1) && $proib1 == $item8 || isset($proib2) && $proib2 == $item8 || isset($proib3) && $proib3 == $item8 || isset($proib4) && $proib4 == $item8 || isset($proib5) && $proib5 == $item8 || isset($proib6) && $proib6 == $item8 || isset($proib7) && $proib7 == $item8 || isset($proib8) && $proib8 == $item8 || isset($proib9) && $proib9 == $item8 || isset($proib10) && $proib10 == $item8 || isset($proib11) && $proib11 == $item8 ){
                                        echo "<li>".$key['item8']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item8']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item8' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item9'] != NULL){
                                    $item9 = $key['item9'];
                                    if(isset($proib1) && $proib1 == $item9 || isset($proib2) && $proib2 == $item9 || isset($proib3) && $proib3 == $item9 || isset($proib4) && $proib4 == $item9 || isset($proib5) && $proib5 == $item9 || isset($proib6) && $proib6 == $item9 || isset($proib7) && $proib7 == $item9|| isset($proib8) && $proib8 == $item9 || isset($proib9) && $proib9 == $item9 || isset($proib10) && $proib10 == $item9 || isset($proib11) && $proib11 == $item9 ){
                                        echo "<li>".$key['item9']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item9']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item9' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item10'] != NULL){
                                    $item10 = $key['item10'];
                                    if(isset($proib1) && $proib1 == $item10 || isset($proib2) && $proib2 == $item10 || isset($proib3) && $proib3 == $item10 || isset($proib4) && $proib4 == $item10 || isset($proib5) && $proib5 == $item10 || isset($proib6) && $proib6 == $item10 || isset($proib7) && $proib7 == $item10 || isset($proib8) && $proib8 == $item10 || isset($proib9) && $proib9 == $item10 || isset($proib10) && $proib10 == $item10 || isset($proib11) && $proib11 == $item10 ){
                                        echo "<li>".$key['item10']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item10']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item10' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item11'] != NULL){
                                    $item11 = $key['item11'];
                                    if(isset($proib1) && $proib1 == $item11 || isset($proib2) && $proib2 == $item11 || isset($proib3) && $proib3 == $item11 || isset($proib4) && $proib4 == $item11 || isset($proib5) && $proib5 == $item11 || isset($proib6) && $proib6 == $item11 || isset($proib7) && $proib7 == $item11 || isset($proib8) && $proib8 == $item11 || isset($proib9) && $proib9 == $item11 || isset($proib10) && $proib10 == $item11 || isset($proib11) && $proib11 == $item11 ){
                                        echo "<li>".$key['item11']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item11']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item11' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item12'] != NULL){
                                    $item12 = $key['item12'];
                                    if(isset($proib1) && $proib1 == $item12 || isset($proib2) && $proib2 == $item12 || isset($proib3) && $proib3 == $item12 || isset($proib4) && $proib4 == $item12 || isset($proib5) && $proib5 == $item12 || isset($proib6) && $proib6 == $item12 || isset($proib7) && $proib7 == $item12 || isset($proib8) && $proib8 == $item12 || isset($proib9) && $proib9 == $item12 || isset($proib10) && $proib10 == $item12 || isset($proib11) && $proib11 == $item12 ){
                                        echo "<li>".$key['item12']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item12']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item12' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item13'] != NULL){
                                    $item13 = $key['item13'];
                                    if(isset($proib1) && $proib1 == $item13 || isset($proib2) && $proib2 == $item13 || isset($proib3) && $proib3 == $item13 || isset($proib4) && $proib4 == $item13 || isset($proib5) && $proib5 == $item13 || isset($proib6) && $proib6 == $item13 || isset($proib7) && $proib7 == $item13 || isset($proib8) && $proib8 == $item13 || isset($proib9) && $proib9 == $item13 || isset($proib10) && $proib10 == $item13 || isset($proib11) && $proib11 == $item13 ){
                                        echo "<li>".$key['item13']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item13']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item13' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item14'] != NULL){
                                    $item14 = $key['item14'];
                                    if(isset($proib1) && $proib1 == $item14 || isset($proib2) && $proib2 == $item14 || isset($proib3) && $proib3 == $item14 || isset($proib4) && $proib4 == $item14 || isset($proib5) && $proib5 == $item14 || isset($proib6) && $proib6 == $item14 || isset($proib7) && $proib7 == $item14 || isset($proib8) && $proib8 == $item14 || isset($proib9) && $proib9 == $item14 || isset($proib10) && $proib10 == $item14 || isset($proib11) && $proib11 == $item14 ){
                                        echo "<li>".$key['item14']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item14']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item14' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item15'] != NULL){
                                    $item15 = $key['item15'];
                                    if(isset($proib1) && $proib1 == $item15 || isset($proib2) && $proib2 == $item15 || isset($proib3) && $proib3 == $item15 || isset($proib4) && $proib4 == $item15 || isset($proib5) && $proib5 == $item15 || isset($proib6) && $proib6 == $item15 || isset($proib7) && $proib7 == $item15 || isset($proib8) && $proib8 == $item15 || isset($proib9) && $proib9 == $item15 || isset($proib10) && $proib10 == $item15 || isset($proib11) && $proib11 == $item15 ){
                                        echo "<li>".$key['item15']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item15']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item15' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item16'] != NULL){
                                    $item16 = $key['item16'];
                                    if(isset($proib1) && $proib1 == $item16 || isset($proib2) && $proib2 == $item16 || isset($proib3) && $proib3 == $item16 || isset($proib4) && $proib4 == $item16 || isset($proib5) && $proib5 == $item16 || isset($proib6) && $proib6 == $item16 || isset($proib7) && $proib7 == $item16 || isset($proib8) && $proib8 == $item16 || isset($proib9) && $proib9 == $item16 || isset($proib10) && $proib10 == $item16 || isset($proib11) && $proib11 == $item16 ){
                                        echo "<li>".$key['item16']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item16']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item16' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item17'] != NULL){
                                    $item17 = $key['item17'];
                                    if(isset($proib1) && $proib1 == $item17 || isset($proib2) && $proib2 == $item17 || isset($proib3) && $proib3 == $item17 || isset($proib4) && $proib4 == $item17 || isset($proib5) && $proib5 == $item17 || isset($proib6) && $proib6 == $item17 || isset($proib7) && $proib7 == $item17 || isset($proib8) && $proib8 == $item17 || isset($proib9) && $proib9 == $item17 || isset($proib10) && $proib10 == $item17 || isset($proib11) && $proib11 == $item17 ){
                                        echo "<li>".$key['item17']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item17']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item17' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item18'] != NULL){
                                    $item18 = $key['item18'];
                                    if(isset($proib1) && $proib1 == $item18 || isset($proib2) && $proib2 == $item18 || isset($proib3) && $proib3 == $item18 || isset($proib4) && $proib4 == $item18 || isset($proib5) && $proib5 == $item18 || isset($proib6) && $proib6 == $item18 || isset($proib7) && $proib7 == $item18 || isset($proib8) && $proib8 == $item18 || isset($proib9) && $proib9 == $item18 || isset($proib10) && $proib10 == $item18 || isset($proib11) && $proib11 == $item18 ){
                                        echo "<li>".$key['item18']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item18']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item18' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item19'] != NULL){
                                    $item19 = $key['item19'];
                                    if(isset($proib1) && $proib1 == $item19 || isset($proib2) && $proib2 == $item19 || isset($proib3) && $proib3 == $item19 || isset($proib4) && $proib4 == $item19 || isset($proib5) && $proib5 == $item19 || isset($proib6) && $proib6 == $item19 || isset($proib7) && $proib7 == $item19 || isset($proib8) && $proib8 == $item19 || isset($proib9) && $proib9 == $item19 || isset($proib10) && $proib10 == $item19 || isset($proib11) && $proib11 == $item19 ){
                                        echo "<li>".$key['item19']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item19']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item19' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item20'] != NULL){
                                    $item20 = $key['item20'];
                                    if(isset($proib1) && $proib1 == $item20 || isset($proib2) && $proib2 == $item20 || isset($proib3) && $proib3 == $item20 || isset($proib4) && $proib4 == $item20 || isset($proib5) && $proib5 == $item20 || isset($proib6) && $proib6 == $item20 || isset($proib7) && $proib7 == $item20 || isset($proib8) && $proib8 == $item20 || isset($proib9) && $proib9 == $item20 || isset($proib10) && $proib10 == $item20 || isset($proib11) && $proib11 == $item20 ){
                                        echo "<li>".$key['item20']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item20']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item20' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item21'] != NULL){
                                    $item21 = $key['item21'];
                                    if(isset($proib1) && $proib1 == $item21 || isset($proib2) && $proib2 == $item21 || isset($proib3) && $proib3 == $item21 || isset($proib4) && $proib4 == $item21 || isset($proib5) && $proib5 == $item21 || isset($proib6) && $proib6 == $item21 || isset($proib7) && $proib7 == $item21 || isset($proib8) && $proib8 == $item21 || isset($proib9) && $proib9 == $item21 || isset($proib10) && $proib10 == $item21 || isset($proib11) && $proib11 == $item21 ){
                                        echo "<li>".$key['item21']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item21']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item21' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item22'] != NULL){
                                    $item22 = $key['item22'];
                                    if(isset($proib1) && $proib1 == $item22 || isset($proib2) && $proib2 == $item22 || isset($proib3) && $proib3 == $item22 || isset($proib4) && $proib4 == $item22 || isset($proib5) && $proib5 == $item22 || isset($proib6) && $proib6 == $item22 || isset($proib7) && $proib7 == $item22 || isset($proib8) && $proib8 == $item22 || isset($proib9) && $proib9 == $item22 || isset($proib10) && $proib10 == $item22 || isset($proib11) && $proib11 == $item22 ){
                                        echo "<li>".$key['item22']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item22']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item22' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item23'] != NULL){
                                    $item23 = $key['item23'];
                                    if(isset($proib1) && $proib1 == $item23 || isset($proib2) && $proib2 == $item23 || isset($proib3) && $proib3 == $item23 || isset($proib4) && $proib4 == $item23 || isset($proib5) && $proib5 == $item23 || isset($proib6) && $proib6 == $item23 || isset($proib7) && $proib7 == $item23 || isset($proib8) && $proib8 == $item23 || isset($proib9) && $proib9 == $item23 || isset($proib10) && $proib10 == $item23 || isset($proib11) && $proib11 == $item23 ){
                                        echo "<li>".$key['item23']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item23']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item23' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item24'] != NULL){
                                    $item24 = $key['item24'];
                                    if(isset($proib1) && $proib1 == $item24 || isset($proib2) && $proib2 == $item24 || isset($proib3) && $proib3 == $item24 || isset($proib4) && $proib4 == $item24 || isset($proib5) && $proib5 == $item24 || isset($proib6) && $proib6 == $item24 || isset($proib7) && $proib7 == $item24 || isset($proib8) && $proib8 == $item24 || isset($proib9) && $proib9 == $item24 || isset($proib10) && $proib10 == $item24 || isset($proib11) && $proib11 == $item24 ){
                                        echo "<li>".$key['item24']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item24']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item24' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item25'] != NULL){
                                    if(isset($proib1) && $proib1 == $item25 || isset($proib2) && $proib2 == $item25 || isset($proib3) && $proib3 == $item25 || isset($proib4) && $proib4 == $item25 || isset($proib5) && $proib5 == $item25 || isset($proib6) && $proib6 == $item25 || isset($proib7) && $proib7 == $item25 || isset($proib8) && $proib8 == $item25 || isset($proib9) && $proib9 == $item25 || isset($proib10) && $proib10 == $item25 || isset($proib11) && $proib11 == $item25 ){
                                        echo "<li>".$key['item25']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item25']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item25' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                echo "</ul>";
                            }
                        }
                        }
                    }
                }
            } else if($_SESSION['id_remetente'] == $_SESSION['personagem4']){
                $id = $_SESSION['personagem1'];
                $personagem = $repositorio->MostrarPersonagem($id);
                foreach ($personagem as $key) {
                $nome = $key['nome'];
                $img = $key['img'];
                echo "<img src='../../$img'>";
                echo "<h2>Nome: ".$key['nome']."</h2>";
                echo "<h2>Classe: ".$key['classe']."</h2>";
                echo "<h2>Nível: ".$key['nivel']."</h2>";
                echo "<h2>Dinheiro: ".$key['dinheiro']."</h2>";
                $classe = $key['classe'];
                $x = 0;
                $verificar_itens = $repositorio->VerificarItem($classe);
                foreach ($verificar_itens as $key) {
                    $key['nome'];
                    if($_SESSION['item'] == $key['nome']){
                        $x = $x + 1;
                    } 
                }
                if($x > 0){
                    echo "<h2 style='color:red'>A classe deste personagem não pode usar este Item!!!</h2>";
                } else {
                    $id = $_SESSION['id_remetente'];
                    $personagem = $repositorio->MostrarPersonagem($id);
                    foreach ($personagem as $key) {
                        $classe = $key['classe'];
                        $verif = $repositorio->VerificarItem($classe);
                        foreach ($verif as $key) {
                            if(isset($proib1)){
                                if(isset($proib2)){
                                    if(isset($proib3)){
                                        if(isset($proib4)){
                                            if(isset($proib5)){
                                                if(isset($proib6)){
                                                    if(isset($proib7)){
                                                        if(isset($proib8)){
                                                            if(isset($proib9)){
                                                                if(isset($proib10)){
                                                                    if(isset($proib11)){

                                                                    } else {
                                                                        if(isset($key['nome'])){
                                                                            $proib11 = $key['nome'];
                                                                            
                                                                        }
                                                                    }
                                                                } else {
                                                                    if(isset($key['nome'])){
                                                                         $proib10 = $key['nome'];
                                                                        
                                                                    }
                                                                }
                                                            } else {
                                                                if(isset($key['nome'])){
                                                                    $proib9 = $key['nome'];
                                                                    
                                                                }
                                                            }
                                                        } else {
                                                            if(isset($key['nome'])){
                                                                $proib8 = $key['nome'];
                                                                
                                                            }
                                                        }
                                                    } else {
                                                        if(isset($key['nome'])){
                                                            $proib7 = $key['nome'];
                                                            
                                                        }
                                                    }
                                                } else {
                                                    if(isset($key['nome'])){
                                                        $proib6 = $key['nome'];
                                                        
                                                    }
                                                }
                                            } else {
                                                if(isset($key['nome'])){
                                                    $proib5 = $key['nome'];
                                                    
                                                }
                                            }
                                        } else {
                                            if(isset($key['nome'])){
                                                $proib4 = $key['nome'];
                                                
                                            }
                                        }
                                    } else {
                                        if(isset($key['nome'])){
                                            $proib3 = $key['nome'];
                                            
                                        }
                                    }
                                } else {
                                    if(isset($key['nome'])){
                                        $proib2 = $key['nome'];
                                        
                                    }
                                }
                            } else {
                                if(isset($key['nome'])){
                                    $proib1 = $key['nome'];
                                    
                                }
                            }
                        }
                        $inventario = $repositorio->MostrarInventario($nome);
                        foreach ($inventario as $key) {
                            
                            echo "<ul>";
                                $item1 = $key['item1'];
                                if(isset($proib1) && $proib1 == $item1 || isset($proib2) && $proib2 == $item1 || isset($proib3) && $proib3 == $item1 || isset($proib4) && $proib4 == $item1 || isset($proib5) && $proib5 == $item1 || isset($proib6) && $proib6 == $item1 || isset($proib7) && $proib7 == $item1 || isset($proib8) && $proib8 == $item1 || isset($proib9) && $proib9 == $item1 || isset($proib10) && $proib10 == $item1 || isset($proib11) && $proib11 == $item1 ){
                                    echo "<li>".$key['item1']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                    </li>";
                                } else {
                                    echo "<li>".$key['item1']."
                                        <form action='s_item2.php' method='post'>
                                        <label for='nome' hidden></label>
                                        <input type='text' id='nome' name='nome' value='$nome' hidden>
                                        <label for='item' hidden></label>
                                        <input type='text' id='item' name='item' value='$item1' hidden>
                                        <input type='submit' value='Trocar'>
                                        </form>
                                    </li>";
                                }
                                $item2 = $key['item2'];
                                if(isset($proib1) && $proib1 == $item2 || isset($proib2) && $proib2 == $item2 || isset($proib3) && $proib3 == $item2 || isset($proib4) && $proib4 == $item2 || isset($proib5) && $proib5 == $item2 || isset($proib6) && $proib6 == $item2 || isset($proib7) && $proib7 == $item2 || isset($proib8) && $proib8 == $item2 || isset($proib9) && $proib9 == $item2 || isset($proib10) && $proib10 == $item2 || isset($proib11) && $proib11 == $item2 ){
                                    echo "<li>".$key['item2']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                    </li>";
                                } else {
                                    echo "<li>".$key['item2']."
                                        <form action='s_item2.php' method='post'>
                                        <label for='nome' hidden></label>
                                        <input type='text' id='nome' name='nome' value='$nome' hidden>
                                        <label for='item' hidden></label>
                                        <input type='text' id='item' name='item' value='$item2' hidden>
                                        <input type='submit' value='Trocar'>
                                        </form>
                                    </li>";
                                }
                                if($key['item3'] != NULL){
                                    $item3 = $key['item3'];
                                    if(isset($proib1) && $proib1 == $item3 || isset($proib2) && $proib2 == $item3 || isset($proib3) && $proib3 == $item3 || isset($proib4) && $proib4 == $item3 || isset($proib5) && $proib5 == $item3 || isset($proib6) && $proib6 == $item3 || isset($proib7) && $proib7 == $item3 || isset($proib8) && $proib8 == $item3 || isset($proib9) && $proib9 == $item3 || isset($proib10) && $proib10 == $item3 || isset($proib11) && $proib11 == $item3 ){
                                        echo "<li>".$key['item3']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item3']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item3' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item4'] != NULL){
                                    $item4 = $key['item4'];
                                    if(isset($proib1) && $proib1 == $item4 || isset($proib2) && $proib2 == $item4 || isset($proib3) && $proib3 == $item4 || isset($proib4) && $proib4 == $item4 || isset($proib5) && $proib5 == $item4 || isset($proib6) && $proib6 == $item4 || isset($proib7) && $proib7 == $item4 || isset($proib8) && $proib8 == $item4 || isset($proib9) && $proib9 == $item4 || isset($proib10) && $proib10 == $item4 || isset($proib11) && $proib11 == $item4 ){
                                        echo "<li>".$key['item4']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item4']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item4' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item5'] != NULL){
                                    $item5 = $key['item5'];
                                    if(isset($proib1) && $proib1 == $item5 || isset($proib2) && $proib2 == $item5 || isset($proib3) && $proib3 == $item5 || isset($proib4) && $proib4 == $item5 || isset($proib5) && $proib5 == $item5 || isset($proib6) && $proib6 == $item5 || isset($proib7) && $proib7 == $item5 || isset($proib8) && $proib8 == $item5 || isset($proib9) && $proib9 == $item5 || isset($proib10) && $proib10 == $item5 || isset($proib11) && $proib11 == $item5 ){
                                        echo "<li>".$key['item5']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item5']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item5' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item6'] != NULL){
                                    $item6 = $key['item6'];
                                    if(isset($proib1) && $proib1 == $item6 || isset($proib2) && $proib2 == $item6 || isset($proib3) && $proib3 == $item6 || isset($proib4) && $proib4 == $item6 || isset($proib5) && $proib5 == $item6 || isset($proib6) && $proib6 == $item6 || isset($proib7) && $proib7 == $item6 || isset($proib8) && $proib8 == $item6 || isset($proib9) && $proib9 == $item6 || isset($proib10) && $proib10 == $item6 || isset($proib11) && $proib11 == $item6 ){
                                        echo "<li>".$key['item6']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item6']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item6' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item7'] != NULL){
                                    $item7 = $key['item7'];
                                    if(isset($proib1) && $proib1 == $item7 || isset($proib2) && $proib2 == $item7 || isset($proib3) && $proib3 == $item7 || isset($proib4) && $proib4 == $item7 || isset($proib5) && $proib5 == $item7 || isset($proib6) && $proib6 == $item7 || isset($proib7) && $proib7 == $item7 || isset($proib8) && $proib8 == $item7 || isset($proib9) && $proib9 == $item7 || isset($proib10) && $proib10 == $item7 || isset($proib11) && $proib11 == $item7 ){
                                        echo "<li>".$key['item7']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item7']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item7' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item8'] != NULL){
                                    $item8 = $key['item8'];
                                    if(isset($proib1) && $proib1 == $item8 || isset($proib2) && $proib2 == $item8 || isset($proib3) && $proib3 == $item8 || isset($proib4) && $proib4 == $item8 || isset($proib5) && $proib5 == $item8 || isset($proib6) && $proib6 == $item8 || isset($proib7) && $proib7 == $item8 || isset($proib8) && $proib8 == $item8 || isset($proib9) && $proib9 == $item8 || isset($proib10) && $proib10 == $item8 || isset($proib11) && $proib11 == $item8 ){
                                        echo "<li>".$key['item8']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item8']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item8' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item9'] != NULL){
                                    $item9 = $key['item9'];
                                    if(isset($proib1) && $proib1 == $item9 || isset($proib2) && $proib2 == $item9 || isset($proib3) && $proib3 == $item9 || isset($proib4) && $proib4 == $item9 || isset($proib5) && $proib5 == $item9 || isset($proib6) && $proib6 == $item9 || isset($proib7) && $proib7 == $item9|| isset($proib8) && $proib8 == $item9 || isset($proib9) && $proib9 == $item9 || isset($proib10) && $proib10 == $item9 || isset($proib11) && $proib11 == $item9 ){
                                        echo "<li>".$key['item9']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item9']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item9' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item10'] != NULL){
                                    $item10 = $key['item10'];
                                    if(isset($proib1) && $proib1 == $item10 || isset($proib2) && $proib2 == $item10 || isset($proib3) && $proib3 == $item10 || isset($proib4) && $proib4 == $item10 || isset($proib5) && $proib5 == $item10 || isset($proib6) && $proib6 == $item10 || isset($proib7) && $proib7 == $item10 || isset($proib8) && $proib8 == $item10 || isset($proib9) && $proib9 == $item10 || isset($proib10) && $proib10 == $item10 || isset($proib11) && $proib11 == $item10 ){
                                        echo "<li>".$key['item10']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item10']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item10' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item11'] != NULL){
                                    $item11 = $key['item11'];
                                    if(isset($proib1) && $proib1 == $item11 || isset($proib2) && $proib2 == $item11 || isset($proib3) && $proib3 == $item11 || isset($proib4) && $proib4 == $item11 || isset($proib5) && $proib5 == $item11 || isset($proib6) && $proib6 == $item11 || isset($proib7) && $proib7 == $item11 || isset($proib8) && $proib8 == $item11 || isset($proib9) && $proib9 == $item11 || isset($proib10) && $proib10 == $item11 || isset($proib11) && $proib11 == $item11 ){
                                        echo "<li>".$key['item11']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item11']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item11' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item12'] != NULL){
                                    $item12 = $key['item12'];
                                    if(isset($proib1) && $proib1 == $item12 || isset($proib2) && $proib2 == $item12 || isset($proib3) && $proib3 == $item12 || isset($proib4) && $proib4 == $item12 || isset($proib5) && $proib5 == $item12 || isset($proib6) && $proib6 == $item12 || isset($proib7) && $proib7 == $item12 || isset($proib8) && $proib8 == $item12 || isset($proib9) && $proib9 == $item12 || isset($proib10) && $proib10 == $item12 || isset($proib11) && $proib11 == $item12 ){
                                        echo "<li>".$key['item12']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item12']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item12' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item13'] != NULL){
                                    $item13 = $key['item13'];
                                    if(isset($proib1) && $proib1 == $item13 || isset($proib2) && $proib2 == $item13 || isset($proib3) && $proib3 == $item13 || isset($proib4) && $proib4 == $item13 || isset($proib5) && $proib5 == $item13 || isset($proib6) && $proib6 == $item13 || isset($proib7) && $proib7 == $item13 || isset($proib8) && $proib8 == $item13 || isset($proib9) && $proib9 == $item13 || isset($proib10) && $proib10 == $item13 || isset($proib11) && $proib11 == $item13 ){
                                        echo "<li>".$key['item13']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item13']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item13' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item14'] != NULL){
                                    $item14 = $key['item14'];
                                    if(isset($proib1) && $proib1 == $item14 || isset($proib2) && $proib2 == $item14 || isset($proib3) && $proib3 == $item14 || isset($proib4) && $proib4 == $item14 || isset($proib5) && $proib5 == $item14 || isset($proib6) && $proib6 == $item14 || isset($proib7) && $proib7 == $item14 || isset($proib8) && $proib8 == $item14 || isset($proib9) && $proib9 == $item14 || isset($proib10) && $proib10 == $item14 || isset($proib11) && $proib11 == $item14 ){
                                        echo "<li>".$key['item14']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item14']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item14' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item15'] != NULL){
                                    $item15 = $key['item15'];
                                    if(isset($proib1) && $proib1 == $item15 || isset($proib2) && $proib2 == $item15 || isset($proib3) && $proib3 == $item15 || isset($proib4) && $proib4 == $item15 || isset($proib5) && $proib5 == $item15 || isset($proib6) && $proib6 == $item15 || isset($proib7) && $proib7 == $item15 || isset($proib8) && $proib8 == $item15 || isset($proib9) && $proib9 == $item15 || isset($proib10) && $proib10 == $item15 || isset($proib11) && $proib11 == $item15 ){
                                        echo "<li>".$key['item15']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item15']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item15' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item16'] != NULL){
                                    $item16 = $key['item16'];
                                    if(isset($proib1) && $proib1 == $item16 || isset($proib2) && $proib2 == $item16 || isset($proib3) && $proib3 == $item16 || isset($proib4) && $proib4 == $item16 || isset($proib5) && $proib5 == $item16 || isset($proib6) && $proib6 == $item16 || isset($proib7) && $proib7 == $item16 || isset($proib8) && $proib8 == $item16 || isset($proib9) && $proib9 == $item16 || isset($proib10) && $proib10 == $item16 || isset($proib11) && $proib11 == $item16 ){
                                        echo "<li>".$key['item16']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item16']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item16' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item17'] != NULL){
                                    $item17 = $key['item17'];
                                    if(isset($proib1) && $proib1 == $item17 || isset($proib2) && $proib2 == $item17 || isset($proib3) && $proib3 == $item17 || isset($proib4) && $proib4 == $item17 || isset($proib5) && $proib5 == $item17 || isset($proib6) && $proib6 == $item17 || isset($proib7) && $proib7 == $item17 || isset($proib8) && $proib8 == $item17 || isset($proib9) && $proib9 == $item17 || isset($proib10) && $proib10 == $item17 || isset($proib11) && $proib11 == $item17 ){
                                        echo "<li>".$key['item17']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item17']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item17' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item18'] != NULL){
                                    $item18 = $key['item18'];
                                    if(isset($proib1) && $proib1 == $item18 || isset($proib2) && $proib2 == $item18 || isset($proib3) && $proib3 == $item18 || isset($proib4) && $proib4 == $item18 || isset($proib5) && $proib5 == $item18 || isset($proib6) && $proib6 == $item18 || isset($proib7) && $proib7 == $item18 || isset($proib8) && $proib8 == $item18 || isset($proib9) && $proib9 == $item18 || isset($proib10) && $proib10 == $item18 || isset($proib11) && $proib11 == $item18 ){
                                        echo "<li>".$key['item18']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item18']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item18' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item19'] != NULL){
                                    $item19 = $key['item19'];
                                    if(isset($proib1) && $proib1 == $item19 || isset($proib2) && $proib2 == $item19 || isset($proib3) && $proib3 == $item19 || isset($proib4) && $proib4 == $item19 || isset($proib5) && $proib5 == $item19 || isset($proib6) && $proib6 == $item19 || isset($proib7) && $proib7 == $item19 || isset($proib8) && $proib8 == $item19 || isset($proib9) && $proib9 == $item19 || isset($proib10) && $proib10 == $item19 || isset($proib11) && $proib11 == $item19 ){
                                        echo "<li>".$key['item19']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item19']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item19' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item20'] != NULL){
                                    $item20 = $key['item20'];
                                    if(isset($proib1) && $proib1 == $item20 || isset($proib2) && $proib2 == $item20 || isset($proib3) && $proib3 == $item20 || isset($proib4) && $proib4 == $item20 || isset($proib5) && $proib5 == $item20 || isset($proib6) && $proib6 == $item20 || isset($proib7) && $proib7 == $item20 || isset($proib8) && $proib8 == $item20 || isset($proib9) && $proib9 == $item20 || isset($proib10) && $proib10 == $item20 || isset($proib11) && $proib11 == $item20 ){
                                        echo "<li>".$key['item20']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item20']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item20' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item21'] != NULL){
                                    $item21 = $key['item21'];
                                    if(isset($proib1) && $proib1 == $item21 || isset($proib2) && $proib2 == $item21 || isset($proib3) && $proib3 == $item21 || isset($proib4) && $proib4 == $item21 || isset($proib5) && $proib5 == $item21 || isset($proib6) && $proib6 == $item21 || isset($proib7) && $proib7 == $item21 || isset($proib8) && $proib8 == $item21 || isset($proib9) && $proib9 == $item21 || isset($proib10) && $proib10 == $item21 || isset($proib11) && $proib11 == $item21 ){
                                        echo "<li>".$key['item21']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item21']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item21' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item22'] != NULL){
                                    $item22 = $key['item22'];
                                    if(isset($proib1) && $proib1 == $item22 || isset($proib2) && $proib2 == $item22 || isset($proib3) && $proib3 == $item22 || isset($proib4) && $proib4 == $item22 || isset($proib5) && $proib5 == $item22 || isset($proib6) && $proib6 == $item22 || isset($proib7) && $proib7 == $item22 || isset($proib8) && $proib8 == $item22 || isset($proib9) && $proib9 == $item22 || isset($proib10) && $proib10 == $item22 || isset($proib11) && $proib11 == $item22 ){
                                        echo "<li>".$key['item22']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item22']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item22' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item23'] != NULL){
                                    $item23 = $key['item23'];
                                    if(isset($proib1) && $proib1 == $item23 || isset($proib2) && $proib2 == $item23 || isset($proib3) && $proib3 == $item23 || isset($proib4) && $proib4 == $item23 || isset($proib5) && $proib5 == $item23 || isset($proib6) && $proib6 == $item23 || isset($proib7) && $proib7 == $item23 || isset($proib8) && $proib8 == $item23 || isset($proib9) && $proib9 == $item23 || isset($proib10) && $proib10 == $item23 || isset($proib11) && $proib11 == $item23 ){
                                        echo "<li>".$key['item23']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item23']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item23' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item24'] != NULL){
                                    $item24 = $key['item24'];
                                    if(isset($proib1) && $proib1 == $item24 || isset($proib2) && $proib2 == $item24 || isset($proib3) && $proib3 == $item24 || isset($proib4) && $proib4 == $item24 || isset($proib5) && $proib5 == $item24 || isset($proib6) && $proib6 == $item24 || isset($proib7) && $proib7 == $item24 || isset($proib8) && $proib8 == $item24 || isset($proib9) && $proib9 == $item24 || isset($proib10) && $proib10 == $item24 || isset($proib11) && $proib11 == $item24 ){
                                        echo "<li>".$key['item24']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item24']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item24' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item25'] != NULL){
                                    if(isset($proib1) && $proib1 == $item25 || isset($proib2) && $proib2 == $item25 || isset($proib3) && $proib3 == $item25 || isset($proib4) && $proib4 == $item25 || isset($proib5) && $proib5 == $item25 || isset($proib6) && $proib6 == $item25 || isset($proib7) && $proib7 == $item25 || isset($proib8) && $proib8 == $item25 || isset($proib9) && $proib9 == $item25 || isset($proib10) && $proib10 == $item25 || isset($proib11) && $proib11 == $item25 ){
                                        echo "<li>".$key['item25']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item25']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item25' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                echo "</ul>";
                            }
                        }
                    }
                    $id = $_SESSION['personagem2'];
                    $personagem = $repositorio->MostrarPersonagem($id);
                    foreach ($personagem as $key) {
                    $nome = $key['nome'];
                    $img = $key['img'];
                    echo "<img src='../../$img'>";
                    echo "<h2>Nome: ".$key['nome']."</h2>";
                    echo "<h2>Classe: ".$key['classe']."</h2>";
                    echo "<h2>Nível: ".$key['nivel']."</h2>";
                    echo "<h2>Dinheiro: ".$key['dinheiro']."</h2>";
                    $classe = $key['classe'];
                    $x = 0;
                    $verificar_itens = $repositorio->VerificarItem($classe);
                    foreach ($verificar_itens as $key) {
                        $key['nome'];
                        if($_SESSION['item'] == $key['nome']){
                            $x = $x + 1;
                        } 
                    }
                    if($x > 0){
                        echo "<h2 style='color:red'>A classe deste personagem não pode usar este Item!!!</h2>";
                    } else {
                    $id = $_SESSION['id_remetente'];
                    $personagem = $repositorio->MostrarPersonagem($id);
                    foreach ($personagem as $key) {
                        $classe = $key['classe'];
                        $verif = $repositorio->VerificarItem($classe);
                        foreach ($verif as $key) {
                            if(isset($proib1)){
                                if(isset($proib2)){
                                    if(isset($proib3)){
                                        if(isset($proib4)){
                                            if(isset($proib5)){
                                                if(isset($proib6)){
                                                    if(isset($proib7)){
                                                        if(isset($proib8)){
                                                            if(isset($proib9)){
                                                                if(isset($proib10)){
                                                                    if(isset($proib11)){

                                                                    } else {
                                                                        if(isset($key['nome'])){
                                                                            $proib11 = $key['nome'];
                                                                            
                                                                        }
                                                                    }
                                                                } else {
                                                                    if(isset($key['nome'])){
                                                                        $proib10 = $key['nome'];
                                                                        
                                                                    }
                                                                }
                                                            } else {
                                                                if(isset($key['nome'])){
                                                                    $proib9 = $key['nome'];
                                                                    
                                                                }
                                                            }
                                                        } else {
                                                            if(isset($key['nome'])){
                                                                 $proib8 = $key['nome'];
                                                                
                                                            }
                                                        }
                                                    } else {
                                                        if(isset($key['nome'])){
                                                             $proib7 = $key['nome'];
                                                            
                                                        }
                                                    }
                                                } else {
                                                    if(isset($key['nome'])){
                                                         $proib6 = $key['nome'];
                                                        
                                                    }
                                                }
                                            } else {
                                                if(isset($key['nome'])){
                                                    $proib5 = $key['nome'];
                                                    
                                                }
                                            }
                                        } else {
                                            if(isset($key['nome'])){
                                                $proib4 = $key['nome'];
                                                
                                            }
                                        }
                                    } else {
                                        if(isset($key['nome'])){
                                            $proib3 = $key['nome'];
                                            
                                        }
                                    }
                                } else {
                                    if(isset($key['nome'])){
                                        $proib2 = $key['nome'];
                                        
                                    }
                                }
                            } else {
                                if(isset($key['nome'])){
                                    $proib1 = $key['nome'];
                                    
                                }
                            }
                        }
                        $inventario = $repositorio->MostrarInventario($nome);
                        foreach ($inventario as $key) {
                            
                            echo "<ul>";
                                $item1 = $key['item1'];
                                if(isset($proib1) && $proib1 == $item1 || isset($proib2) && $proib2 == $item1 || isset($proib3) && $proib3 == $item1 || isset($proib4) && $proib4 == $item1 || isset($proib5) && $proib5 == $item1 || isset($proib6) && $proib6 == $item1 || isset($proib7) && $proib7 == $item1 || isset($proib8) && $proib8 == $item1 || isset($proib9) && $proib9 == $item1 || isset($proib10) && $proib10 == $item1 || isset($proib11) && $proib11 == $item1 ){
                                    echo "<li>".$key['item1']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                    </li>";
                                } else {
                                    echo "<li>".$key['item1']."
                                        <form action='s_item2.php' method='post'>
                                        <label for='nome' hidden></label>
                                        <input type='text' id='nome' name='nome' value='$nome' hidden>
                                        <label for='item' hidden></label>
                                        <input type='text' id='item' name='item' value='$item1' hidden>
                                        <input type='submit' value='Trocar'>
                                        </form>
                                    </li>";
                                }
                                $item2 = $key['item2'];
                                if(isset($proib1) && $proib1 == $item2 || isset($proib2) && $proib2 == $item2 || isset($proib3) && $proib3 == $item2 || isset($proib4) && $proib4 == $item2 || isset($proib5) && $proib5 == $item2 || isset($proib6) && $proib6 == $item2 || isset($proib7) && $proib7 == $item2 || isset($proib8) && $proib8 == $item2 || isset($proib9) && $proib9 == $item2 || isset($proib10) && $proib10 == $item2 || isset($proib11) && $proib11 == $item2 ){
                                    echo "<li>".$key['item2']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                    </li>";
                                } else {
                                    echo "<li>".$key['item2']."
                                        <form action='s_item2.php' method='post'>
                                        <label for='nome' hidden></label>
                                        <input type='text' id='nome' name='nome' value='$nome' hidden>
                                        <label for='item' hidden></label>
                                        <input type='text' id='item' name='item' value='$item2' hidden>
                                        <input type='submit' value='Trocar'>
                                        </form>
                                    </li>";
                                }
                                if($key['item3'] != NULL){
                                    $item3 = $key['item3'];
                                    if(isset($proib1) && $proib1 == $item3 || isset($proib2) && $proib2 == $item3 || isset($proib3) && $proib3 == $item3 || isset($proib4) && $proib4 == $item3 || isset($proib5) && $proib5 == $item3 || isset($proib6) && $proib6 == $item3 || isset($proib7) && $proib7 == $item3 || isset($proib8) && $proib8 == $item3 || isset($proib9) && $proib9 == $item3 || isset($proib10) && $proib10 == $item3 || isset($proib11) && $proib11 == $item3 ){
                                        echo "<li>".$key['item3']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item3']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item3' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item4'] != NULL){
                                    $item4 = $key['item4'];
                                    if(isset($proib1) && $proib1 == $item4 || isset($proib2) && $proib2 == $item4 || isset($proib3) && $proib3 == $item4 || isset($proib4) && $proib4 == $item4 || isset($proib5) && $proib5 == $item4 || isset($proib6) && $proib6 == $item4 || isset($proib7) && $proib7 == $item4 || isset($proib8) && $proib8 == $item4 || isset($proib9) && $proib9 == $item4 || isset($proib10) && $proib10 == $item4 || isset($proib11) && $proib11 == $item4 ){
                                        echo "<li>".$key['item4']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item4']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item4' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item5'] != NULL){
                                    $item5 = $key['item5'];
                                    if(isset($proib1) && $proib1 == $item5 || isset($proib2) && $proib2 == $item5 || isset($proib3) && $proib3 == $item5 || isset($proib4) && $proib4 == $item5 || isset($proib5) && $proib5 == $item5 || isset($proib6) && $proib6 == $item5 || isset($proib7) && $proib7 == $item5 || isset($proib8) && $proib8 == $item5 || isset($proib9) && $proib9 == $item5 || isset($proib10) && $proib10 == $item5 || isset($proib11) && $proib11 == $item5 ){
                                        echo "<li>".$key['item5']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item5']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item5' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item6'] != NULL){
                                    $item6 = $key['item6'];
                                    if(isset($proib1) && $proib1 == $item6 || isset($proib2) && $proib2 == $item6 || isset($proib3) && $proib3 == $item6 || isset($proib4) && $proib4 == $item6 || isset($proib5) && $proib5 == $item6 || isset($proib6) && $proib6 == $item6 || isset($proib7) && $proib7 == $item6 || isset($proib8) && $proib8 == $item6 || isset($proib9) && $proib9 == $item6 || isset($proib10) && $proib10 == $item6 || isset($proib11) && $proib11 == $item6 ){
                                        echo "<li>".$key['item6']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item6']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item6' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item7'] != NULL){
                                    $item7 = $key['item7'];
                                    if(isset($proib1) && $proib1 == $item7 || isset($proib2) && $proib2 == $item7 || isset($proib3) && $proib3 == $item7 || isset($proib4) && $proib4 == $item7 || isset($proib5) && $proib5 == $item7 || isset($proib6) && $proib6 == $item7 || isset($proib7) && $proib7 == $item7 || isset($proib8) && $proib8 == $item7 || isset($proib9) && $proib9 == $item7 || isset($proib10) && $proib10 == $item7 || isset($proib11) && $proib11 == $item7 ){
                                        echo "<li>".$key['item7']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item7']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item7' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item8'] != NULL){
                                    $item8 = $key['item8'];
                                    if(isset($proib1) && $proib1 == $item8 || isset($proib2) && $proib2 == $item8 || isset($proib3) && $proib3 == $item8 || isset($proib4) && $proib4 == $item8 || isset($proib5) && $proib5 == $item8 || isset($proib6) && $proib6 == $item8 || isset($proib7) && $proib7 == $item8 || isset($proib8) && $proib8 == $item8 || isset($proib9) && $proib9 == $item8 || isset($proib10) && $proib10 == $item8 || isset($proib11) && $proib11 == $item8 ){
                                        echo "<li>".$key['item8']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item8']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item8' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item9'] != NULL){
                                    $item9 = $key['item9'];
                                    if(isset($proib1) && $proib1 == $item9 || isset($proib2) && $proib2 == $item9 || isset($proib3) && $proib3 == $item9 || isset($proib4) && $proib4 == $item9 || isset($proib5) && $proib5 == $item9 || isset($proib6) && $proib6 == $item9 || isset($proib7) && $proib7 == $item9|| isset($proib8) && $proib8 == $item9 || isset($proib9) && $proib9 == $item9 || isset($proib10) && $proib10 == $item9 || isset($proib11) && $proib11 == $item9 ){
                                        echo "<li>".$key['item9']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item9']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item9' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item10'] != NULL){
                                    $item10 = $key['item10'];
                                    if(isset($proib1) && $proib1 == $item10 || isset($proib2) && $proib2 == $item10 || isset($proib3) && $proib3 == $item10 || isset($proib4) && $proib4 == $item10 || isset($proib5) && $proib5 == $item10 || isset($proib6) && $proib6 == $item10 || isset($proib7) && $proib7 == $item10 || isset($proib8) && $proib8 == $item10 || isset($proib9) && $proib9 == $item10 || isset($proib10) && $proib10 == $item10 || isset($proib11) && $proib11 == $item10 ){
                                        echo "<li>".$key['item10']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item10']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item10' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item11'] != NULL){
                                    $item11 = $key['item11'];
                                    if(isset($proib1) && $proib1 == $item11 || isset($proib2) && $proib2 == $item11 || isset($proib3) && $proib3 == $item11 || isset($proib4) && $proib4 == $item11 || isset($proib5) && $proib5 == $item11 || isset($proib6) && $proib6 == $item11 || isset($proib7) && $proib7 == $item11 || isset($proib8) && $proib8 == $item11 || isset($proib9) && $proib9 == $item11 || isset($proib10) && $proib10 == $item11 || isset($proib11) && $proib11 == $item11 ){
                                        echo "<li>".$key['item11']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item11']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item11' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item12'] != NULL){
                                    $item12 = $key['item12'];
                                    if(isset($proib1) && $proib1 == $item12 || isset($proib2) && $proib2 == $item12 || isset($proib3) && $proib3 == $item12 || isset($proib4) && $proib4 == $item12 || isset($proib5) && $proib5 == $item12 || isset($proib6) && $proib6 == $item12 || isset($proib7) && $proib7 == $item12 || isset($proib8) && $proib8 == $item12 || isset($proib9) && $proib9 == $item12 || isset($proib10) && $proib10 == $item12 || isset($proib11) && $proib11 == $item12 ){
                                        echo "<li>".$key['item12']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item12']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item12' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item13'] != NULL){
                                    $item13 = $key['item13'];
                                    if(isset($proib1) && $proib1 == $item13 || isset($proib2) && $proib2 == $item13 || isset($proib3) && $proib3 == $item13 || isset($proib4) && $proib4 == $item13 || isset($proib5) && $proib5 == $item13 || isset($proib6) && $proib6 == $item13 || isset($proib7) && $proib7 == $item13 || isset($proib8) && $proib8 == $item13 || isset($proib9) && $proib9 == $item13 || isset($proib10) && $proib10 == $item13 || isset($proib11) && $proib11 == $item13 ){
                                        echo "<li>".$key['item13']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item13']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item13' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item14'] != NULL){
                                    $item14 = $key['item14'];
                                    if(isset($proib1) && $proib1 == $item14 || isset($proib2) && $proib2 == $item14 || isset($proib3) && $proib3 == $item14 || isset($proib4) && $proib4 == $item14 || isset($proib5) && $proib5 == $item14 || isset($proib6) && $proib6 == $item14 || isset($proib7) && $proib7 == $item14 || isset($proib8) && $proib8 == $item14 || isset($proib9) && $proib9 == $item14 || isset($proib10) && $proib10 == $item14 || isset($proib11) && $proib11 == $item14 ){
                                        echo "<li>".$key['item14']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item14']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item14' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item15'] != NULL){
                                    $item15 = $key['item15'];
                                    if(isset($proib1) && $proib1 == $item15 || isset($proib2) && $proib2 == $item15 || isset($proib3) && $proib3 == $item15 || isset($proib4) && $proib4 == $item15 || isset($proib5) && $proib5 == $item15 || isset($proib6) && $proib6 == $item15 || isset($proib7) && $proib7 == $item15 || isset($proib8) && $proib8 == $item15 || isset($proib9) && $proib9 == $item15 || isset($proib10) && $proib10 == $item15 || isset($proib11) && $proib11 == $item15 ){
                                        echo "<li>".$key['item15']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item15']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item15' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item16'] != NULL){
                                    $item16 = $key['item16'];
                                    if(isset($proib1) && $proib1 == $item16 || isset($proib2) && $proib2 == $item16 || isset($proib3) && $proib3 == $item16 || isset($proib4) && $proib4 == $item16 || isset($proib5) && $proib5 == $item16 || isset($proib6) && $proib6 == $item16 || isset($proib7) && $proib7 == $item16 || isset($proib8) && $proib8 == $item16 || isset($proib9) && $proib9 == $item16 || isset($proib10) && $proib10 == $item16 || isset($proib11) && $proib11 == $item16 ){
                                        echo "<li>".$key['item16']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item16']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item16' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item17'] != NULL){
                                    $item17 = $key['item17'];
                                    if(isset($proib1) && $proib1 == $item17 || isset($proib2) && $proib2 == $item17 || isset($proib3) && $proib3 == $item17 || isset($proib4) && $proib4 == $item17 || isset($proib5) && $proib5 == $item17 || isset($proib6) && $proib6 == $item17 || isset($proib7) && $proib7 == $item17 || isset($proib8) && $proib8 == $item17 || isset($proib9) && $proib9 == $item17 || isset($proib10) && $proib10 == $item17 || isset($proib11) && $proib11 == $item17 ){
                                        echo "<li>".$key['item17']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item17']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item17' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item18'] != NULL){
                                    $item18 = $key['item18'];
                                    if(isset($proib1) && $proib1 == $item18 || isset($proib2) && $proib2 == $item18 || isset($proib3) && $proib3 == $item18 || isset($proib4) && $proib4 == $item18 || isset($proib5) && $proib5 == $item18 || isset($proib6) && $proib6 == $item18 || isset($proib7) && $proib7 == $item18 || isset($proib8) && $proib8 == $item18 || isset($proib9) && $proib9 == $item18 || isset($proib10) && $proib10 == $item18 || isset($proib11) && $proib11 == $item18 ){
                                        echo "<li>".$key['item18']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item18']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item18' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item19'] != NULL){
                                    $item19 = $key['item19'];
                                    if(isset($proib1) && $proib1 == $item19 || isset($proib2) && $proib2 == $item19 || isset($proib3) && $proib3 == $item19 || isset($proib4) && $proib4 == $item19 || isset($proib5) && $proib5 == $item19 || isset($proib6) && $proib6 == $item19 || isset($proib7) && $proib7 == $item19 || isset($proib8) && $proib8 == $item19 || isset($proib9) && $proib9 == $item19 || isset($proib10) && $proib10 == $item19 || isset($proib11) && $proib11 == $item19 ){
                                        echo "<li>".$key['item19']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item19']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item19' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item20'] != NULL){
                                    $item20 = $key['item20'];
                                    if(isset($proib1) && $proib1 == $item20 || isset($proib2) && $proib2 == $item20 || isset($proib3) && $proib3 == $item20 || isset($proib4) && $proib4 == $item20 || isset($proib5) && $proib5 == $item20 || isset($proib6) && $proib6 == $item20 || isset($proib7) && $proib7 == $item20 || isset($proib8) && $proib8 == $item20 || isset($proib9) && $proib9 == $item20 || isset($proib10) && $proib10 == $item20 || isset($proib11) && $proib11 == $item20 ){
                                        echo "<li>".$key['item20']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item20']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item20' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item21'] != NULL){
                                    $item21 = $key['item21'];
                                    if(isset($proib1) && $proib1 == $item21 || isset($proib2) && $proib2 == $item21 || isset($proib3) && $proib3 == $item21 || isset($proib4) && $proib4 == $item21 || isset($proib5) && $proib5 == $item21 || isset($proib6) && $proib6 == $item21 || isset($proib7) && $proib7 == $item21 || isset($proib8) && $proib8 == $item21 || isset($proib9) && $proib9 == $item21 || isset($proib10) && $proib10 == $item21 || isset($proib11) && $proib11 == $item21 ){
                                        echo "<li>".$key['item21']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item21']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item21' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item22'] != NULL){
                                    $item22 = $key['item22'];
                                    if(isset($proib1) && $proib1 == $item22 || isset($proib2) && $proib2 == $item22 || isset($proib3) && $proib3 == $item22 || isset($proib4) && $proib4 == $item22 || isset($proib5) && $proib5 == $item22 || isset($proib6) && $proib6 == $item22 || isset($proib7) && $proib7 == $item22 || isset($proib8) && $proib8 == $item22 || isset($proib9) && $proib9 == $item22 || isset($proib10) && $proib10 == $item22 || isset($proib11) && $proib11 == $item22 ){
                                        echo "<li>".$key['item22']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item22']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item22' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item23'] != NULL){
                                    $item23 = $key['item23'];
                                    if(isset($proib1) && $proib1 == $item23 || isset($proib2) && $proib2 == $item23 || isset($proib3) && $proib3 == $item23 || isset($proib4) && $proib4 == $item23 || isset($proib5) && $proib5 == $item23 || isset($proib6) && $proib6 == $item23 || isset($proib7) && $proib7 == $item23 || isset($proib8) && $proib8 == $item23 || isset($proib9) && $proib9 == $item23 || isset($proib10) && $proib10 == $item23 || isset($proib11) && $proib11 == $item23 ){
                                        echo "<li>".$key['item23']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item23']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item23' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item24'] != NULL){
                                    $item24 = $key['item24'];
                                    if(isset($proib1) && $proib1 == $item24 || isset($proib2) && $proib2 == $item24 || isset($proib3) && $proib3 == $item24 || isset($proib4) && $proib4 == $item24 || isset($proib5) && $proib5 == $item24 || isset($proib6) && $proib6 == $item24 || isset($proib7) && $proib7 == $item24 || isset($proib8) && $proib8 == $item24 || isset($proib9) && $proib9 == $item24 || isset($proib10) && $proib10 == $item24 || isset($proib11) && $proib11 == $item24 ){
                                        echo "<li>".$key['item24']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item24']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item24' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item25'] != NULL){
                                    if(isset($proib1) && $proib1 == $item25 || isset($proib2) && $proib2 == $item25 || isset($proib3) && $proib3 == $item25 || isset($proib4) && $proib4 == $item25 || isset($proib5) && $proib5 == $item25 || isset($proib6) && $proib6 == $item25 || isset($proib7) && $proib7 == $item25 || isset($proib8) && $proib8 == $item25 || isset($proib9) && $proib9 == $item25 || isset($proib10) && $proib10 == $item25 || isset($proib11) && $proib11 == $item25 ){
                                        echo "<li>".$key['item25']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item25']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item25' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                echo "</ul>";
                            }
                        }
                        }
                    }
                    $id = $_SESSION['personagem3'];
                    $personagem = $repositorio->MostrarPersonagem($id);
                    foreach ($personagem as $key) {
                    $nome = $key['nome'];
                    $img = $key['img'];
                    echo "<img src='../../$img'>";
                    echo "<h2>Nome: ".$key['nome']."</h2>";
                    echo "<h2>Classe: ".$key['classe']."</h2>";
                    echo "<h2>Nível: ".$key['nivel']."</h2>";
                    echo "<h2>Dinheiro: ".$key['dinheiro']."</h2>";
                    $classe = $key['classe'];
                    $x = 0;
                    $verificar_itens = $repositorio->VerificarItem($classe);
                    foreach ($verificar_itens as $key) {
                        $key['nome'];
                        if($_SESSION['item'] == $key['nome']){
                            $x = $x + 1;
                        } 
                    }
                    if($x > 0){
                        echo "<h2 style='color:red'>A classe deste personagem não pode usar este Item!!!</h2>";
                    } else {
                    $id = $_SESSION['id_remetente'];
                    $personagem = $repositorio->MostrarPersonagem($id);
                    foreach ($personagem as $key) {
                        $classe = $key['classe'];
                        $verif = $repositorio->VerificarItem($classe);
                        foreach ($verif as $key) {
                            if(isset($proib1)){
                                if(isset($proib2)){
                                    if(isset($proib3)){
                                        if(isset($proib4)){
                                            if(isset($proib5)){
                                                if(isset($proib6)){
                                                    if(isset($proib7)){
                                                        if(isset($proib8)){
                                                            if(isset($proib9)){
                                                                if(isset($proib10)){
                                                                    if(isset($proib11)){

                                                                    } else {
                                                                        if(isset($key['nome'])){
                                                                            $proib11 = $key['nome'];
                                                                           
                                                                        }
                                                                    }
                                                                } else {
                                                                    if(isset($key['nome'])){
                                                                        $proib10 = $key['nome'];
                                                                    
                                                                    }
                                                                }
                                                            } else {
                                                                if(isset($key['nome'])){
                                                                    $proib9 = $key['nome'];
                                                                    
                                                                }
                                                            }
                                                        } else {
                                                            if(isset($key['nome'])){
                                                                $proib8 = $key['nome'];
                                                               
                                                            }
                                                        }
                                                    } else {
                                                        if(isset($key['nome'])){
                                                            $proib7 = $key['nome'];
                                                            
                                                        }
                                                    }
                                                } else {
                                                    if(isset($key['nome'])){
                                                        $proib6 = $key['nome'];
                                                        
                                                    }
                                                }
                                            } else {
                                                if(isset($key['nome'])){
                                                    $proib5 = $key['nome'];
                                                    
                                                }
                                            }
                                        } else {
                                            if(isset($key['nome'])){
                                                $proib4 = $key['nome'];
                                                
                                            }
                                        }
                                    } else {
                                        if(isset($key['nome'])){
                                            $proib3 = $key['nome'];
                                            
                                        }
                                    }
                                } else {
                                    if(isset($key['nome'])){
                                        $proib2 = $key['nome'];
                                        
                                    }
                                }
                            } else {
                                if(isset($key['nome'])){
                                    $proib1 = $key['nome'];
                                    
                                }
                            }
                        }
                        $inventario = $repositorio->MostrarInventario($nome);
                        foreach ($inventario as $key) {
                            
                            echo "<ul>";
                                $item1 = $key['item1'];
                                if(isset($proib1) && $proib1 == $item1 || isset($proib2) && $proib2 == $item1 || isset($proib3) && $proib3 == $item1 || isset($proib4) && $proib4 == $item1 || isset($proib5) && $proib5 == $item1 || isset($proib6) && $proib6 == $item1 || isset($proib7) && $proib7 == $item1 || isset($proib8) && $proib8 == $item1 || isset($proib9) && $proib9 == $item1 || isset($proib10) && $proib10 == $item1 || isset($proib11) && $proib11 == $item1 ){
                                    echo "<li>".$key['item1']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                    </li>";
                                } else {
                                    echo "<li>".$key['item1']."
                                        <form action='s_item2.php' method='post'>
                                        <label for='nome' hidden></label>
                                        <input type='text' id='nome' name='nome' value='$nome' hidden>
                                        <label for='item' hidden></label>
                                        <input type='text' id='item' name='item' value='$item1' hidden>
                                        <input type='submit' value='Trocar'>
                                        </form>
                                    </li>";
                                }
                                $item2 = $key['item2'];
                                if(isset($proib1) && $proib1 == $item2 || isset($proib2) && $proib2 == $item2 || isset($proib3) && $proib3 == $item2 || isset($proib4) && $proib4 == $item2 || isset($proib5) && $proib5 == $item2 || isset($proib6) && $proib6 == $item2 || isset($proib7) && $proib7 == $item2 || isset($proib8) && $proib8 == $item2 || isset($proib9) && $proib9 == $item2 || isset($proib10) && $proib10 == $item2 || isset($proib11) && $proib11 == $item2 ){
                                    echo "<li>".$key['item2']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                    </li>";
                                } else {
                                    echo "<li>".$key['item2']."
                                        <form action='s_item2.php' method='post'>
                                        <label for='nome' hidden></label>
                                        <input type='text' id='nome' name='nome' value='$nome' hidden>
                                        <label for='item' hidden></label>
                                        <input type='text' id='item' name='item' value='$item2' hidden>
                                        <input type='submit' value='Trocar'>
                                        </form>
                                    </li>";
                                }
                                if($key['item3'] != NULL){
                                    $item3 = $key['item3'];
                                    if(isset($proib1) && $proib1 == $item3 || isset($proib2) && $proib2 == $item3 || isset($proib3) && $proib3 == $item3 || isset($proib4) && $proib4 == $item3 || isset($proib5) && $proib5 == $item3 || isset($proib6) && $proib6 == $item3 || isset($proib7) && $proib7 == $item3 || isset($proib8) && $proib8 == $item3 || isset($proib9) && $proib9 == $item3 || isset($proib10) && $proib10 == $item3 || isset($proib11) && $proib11 == $item3 ){
                                        echo "<li>".$key['item3']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item3']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item3' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item4'] != NULL){
                                    $item4 = $key['item4'];
                                    if(isset($proib1) && $proib1 == $item4 || isset($proib2) && $proib2 == $item4 || isset($proib3) && $proib3 == $item4 || isset($proib4) && $proib4 == $item4 || isset($proib5) && $proib5 == $item4 || isset($proib6) && $proib6 == $item4 || isset($proib7) && $proib7 == $item4 || isset($proib8) && $proib8 == $item4 || isset($proib9) && $proib9 == $item4 || isset($proib10) && $proib10 == $item4 || isset($proib11) && $proib11 == $item4 ){
                                        echo "<li>".$key['item4']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item4']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item4' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item5'] != NULL){
                                    $item5 = $key['item5'];
                                    if(isset($proib1) && $proib1 == $item5 || isset($proib2) && $proib2 == $item5 || isset($proib3) && $proib3 == $item5 || isset($proib4) && $proib4 == $item5 || isset($proib5) && $proib5 == $item5 || isset($proib6) && $proib6 == $item5 || isset($proib7) && $proib7 == $item5 || isset($proib8) && $proib8 == $item5 || isset($proib9) && $proib9 == $item5 || isset($proib10) && $proib10 == $item5 || isset($proib11) && $proib11 == $item5 ){
                                        echo "<li>".$key['item5']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item5']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item5' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item6'] != NULL){
                                    $item6 = $key['item6'];
                                    if(isset($proib1) && $proib1 == $item6 || isset($proib2) && $proib2 == $item6 || isset($proib3) && $proib3 == $item6 || isset($proib4) && $proib4 == $item6 || isset($proib5) && $proib5 == $item6 || isset($proib6) && $proib6 == $item6 || isset($proib7) && $proib7 == $item6 || isset($proib8) && $proib8 == $item6 || isset($proib9) && $proib9 == $item6 || isset($proib10) && $proib10 == $item6 || isset($proib11) && $proib11 == $item6 ){
                                        echo "<li>".$key['item6']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item6']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item6' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item7'] != NULL){
                                    $item7 = $key['item7'];
                                    if(isset($proib1) && $proib1 == $item7 || isset($proib2) && $proib2 == $item7 || isset($proib3) && $proib3 == $item7 || isset($proib4) && $proib4 == $item7 || isset($proib5) && $proib5 == $item7 || isset($proib6) && $proib6 == $item7 || isset($proib7) && $proib7 == $item7 || isset($proib8) && $proib8 == $item7 || isset($proib9) && $proib9 == $item7 || isset($proib10) && $proib10 == $item7 || isset($proib11) && $proib11 == $item7 ){
                                        echo "<li>".$key['item7']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item7']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item7' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item8'] != NULL){
                                    $item8 = $key['item8'];
                                    if(isset($proib1) && $proib1 == $item8 || isset($proib2) && $proib2 == $item8 || isset($proib3) && $proib3 == $item8 || isset($proib4) && $proib4 == $item8 || isset($proib5) && $proib5 == $item8 || isset($proib6) && $proib6 == $item8 || isset($proib7) && $proib7 == $item8 || isset($proib8) && $proib8 == $item8 || isset($proib9) && $proib9 == $item8 || isset($proib10) && $proib10 == $item8 || isset($proib11) && $proib11 == $item8 ){
                                        echo "<li>".$key['item8']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item8']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item8' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item9'] != NULL){
                                    $item9 = $key['item9'];
                                    if(isset($proib1) && $proib1 == $item9 || isset($proib2) && $proib2 == $item9 || isset($proib3) && $proib3 == $item9 || isset($proib4) && $proib4 == $item9 || isset($proib5) && $proib5 == $item9 || isset($proib6) && $proib6 == $item9 || isset($proib7) && $proib7 == $item9|| isset($proib8) && $proib8 == $item9 || isset($proib9) && $proib9 == $item9 || isset($proib10) && $proib10 == $item9 || isset($proib11) && $proib11 == $item9 ){
                                        echo "<li>".$key['item9']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item9']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item9' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item10'] != NULL){
                                    $item10 = $key['item10'];
                                    if(isset($proib1) && $proib1 == $item10 || isset($proib2) && $proib2 == $item10 || isset($proib3) && $proib3 == $item10 || isset($proib4) && $proib4 == $item10 || isset($proib5) && $proib5 == $item10 || isset($proib6) && $proib6 == $item10 || isset($proib7) && $proib7 == $item10 || isset($proib8) && $proib8 == $item10 || isset($proib9) && $proib9 == $item10 || isset($proib10) && $proib10 == $item10 || isset($proib11) && $proib11 == $item10 ){
                                        echo "<li>".$key['item10']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item10']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item10' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item11'] != NULL){
                                    $item11 = $key['item11'];
                                    if(isset($proib1) && $proib1 == $item11 || isset($proib2) && $proib2 == $item11 || isset($proib3) && $proib3 == $item11 || isset($proib4) && $proib4 == $item11 || isset($proib5) && $proib5 == $item11 || isset($proib6) && $proib6 == $item11 || isset($proib7) && $proib7 == $item11 || isset($proib8) && $proib8 == $item11 || isset($proib9) && $proib9 == $item11 || isset($proib10) && $proib10 == $item11 || isset($proib11) && $proib11 == $item11 ){
                                        echo "<li>".$key['item11']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item11']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item11' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item12'] != NULL){
                                    $item12 = $key['item12'];
                                    if(isset($proib1) && $proib1 == $item12 || isset($proib2) && $proib2 == $item12 || isset($proib3) && $proib3 == $item12 || isset($proib4) && $proib4 == $item12 || isset($proib5) && $proib5 == $item12 || isset($proib6) && $proib6 == $item12 || isset($proib7) && $proib7 == $item12 || isset($proib8) && $proib8 == $item12 || isset($proib9) && $proib9 == $item12 || isset($proib10) && $proib10 == $item12 || isset($proib11) && $proib11 == $item12 ){
                                        echo "<li>".$key['item12']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item12']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item12' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item13'] != NULL){
                                    $item13 = $key['item13'];
                                    if(isset($proib1) && $proib1 == $item13 || isset($proib2) && $proib2 == $item13 || isset($proib3) && $proib3 == $item13 || isset($proib4) && $proib4 == $item13 || isset($proib5) && $proib5 == $item13 || isset($proib6) && $proib6 == $item13 || isset($proib7) && $proib7 == $item13 || isset($proib8) && $proib8 == $item13 || isset($proib9) && $proib9 == $item13 || isset($proib10) && $proib10 == $item13 || isset($proib11) && $proib11 == $item13 ){
                                        echo "<li>".$key['item13']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item13']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item13' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item14'] != NULL){
                                    $item14 = $key['item14'];
                                    if(isset($proib1) && $proib1 == $item14 || isset($proib2) && $proib2 == $item14 || isset($proib3) && $proib3 == $item14 || isset($proib4) && $proib4 == $item14 || isset($proib5) && $proib5 == $item14 || isset($proib6) && $proib6 == $item14 || isset($proib7) && $proib7 == $item14 || isset($proib8) && $proib8 == $item14 || isset($proib9) && $proib9 == $item14 || isset($proib10) && $proib10 == $item14 || isset($proib11) && $proib11 == $item14 ){
                                        echo "<li>".$key['item14']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item14']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item14' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item15'] != NULL){
                                    $item15 = $key['item15'];
                                    if(isset($proib1) && $proib1 == $item15 || isset($proib2) && $proib2 == $item15 || isset($proib3) && $proib3 == $item15 || isset($proib4) && $proib4 == $item15 || isset($proib5) && $proib5 == $item15 || isset($proib6) && $proib6 == $item15 || isset($proib7) && $proib7 == $item15 || isset($proib8) && $proib8 == $item15 || isset($proib9) && $proib9 == $item15 || isset($proib10) && $proib10 == $item15 || isset($proib11) && $proib11 == $item15 ){
                                        echo "<li>".$key['item15']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item15']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item15' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item16'] != NULL){
                                    $item16 = $key['item16'];
                                    if(isset($proib1) && $proib1 == $item16 || isset($proib2) && $proib2 == $item16 || isset($proib3) && $proib3 == $item16 || isset($proib4) && $proib4 == $item16 || isset($proib5) && $proib5 == $item16 || isset($proib6) && $proib6 == $item16 || isset($proib7) && $proib7 == $item16 || isset($proib8) && $proib8 == $item16 || isset($proib9) && $proib9 == $item16 || isset($proib10) && $proib10 == $item16 || isset($proib11) && $proib11 == $item16 ){
                                        echo "<li>".$key['item16']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item16']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item16' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item17'] != NULL){
                                    $item17 = $key['item17'];
                                    if(isset($proib1) && $proib1 == $item17 || isset($proib2) && $proib2 == $item17 || isset($proib3) && $proib3 == $item17 || isset($proib4) && $proib4 == $item17 || isset($proib5) && $proib5 == $item17 || isset($proib6) && $proib6 == $item17 || isset($proib7) && $proib7 == $item17 || isset($proib8) && $proib8 == $item17 || isset($proib9) && $proib9 == $item17 || isset($proib10) && $proib10 == $item17 || isset($proib11) && $proib11 == $item17 ){
                                        echo "<li>".$key['item17']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item17']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item17' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item18'] != NULL){
                                    $item18 = $key['item18'];
                                    if(isset($proib1) && $proib1 == $item18 || isset($proib2) && $proib2 == $item18 || isset($proib3) && $proib3 == $item18 || isset($proib4) && $proib4 == $item18 || isset($proib5) && $proib5 == $item18 || isset($proib6) && $proib6 == $item18 || isset($proib7) && $proib7 == $item18 || isset($proib8) && $proib8 == $item18 || isset($proib9) && $proib9 == $item18 || isset($proib10) && $proib10 == $item18 || isset($proib11) && $proib11 == $item18 ){
                                        echo "<li>".$key['item18']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item18']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item18' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item19'] != NULL){
                                    $item19 = $key['item19'];
                                    if(isset($proib1) && $proib1 == $item19 || isset($proib2) && $proib2 == $item19 || isset($proib3) && $proib3 == $item19 || isset($proib4) && $proib4 == $item19 || isset($proib5) && $proib5 == $item19 || isset($proib6) && $proib6 == $item19 || isset($proib7) && $proib7 == $item19 || isset($proib8) && $proib8 == $item19 || isset($proib9) && $proib9 == $item19 || isset($proib10) && $proib10 == $item19 || isset($proib11) && $proib11 == $item19 ){
                                        echo "<li>".$key['item19']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item19']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item19' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item20'] != NULL){
                                    $item20 = $key['item20'];
                                    if(isset($proib1) && $proib1 == $item20 || isset($proib2) && $proib2 == $item20 || isset($proib3) && $proib3 == $item20 || isset($proib4) && $proib4 == $item20 || isset($proib5) && $proib5 == $item20 || isset($proib6) && $proib6 == $item20 || isset($proib7) && $proib7 == $item20 || isset($proib8) && $proib8 == $item20 || isset($proib9) && $proib9 == $item20 || isset($proib10) && $proib10 == $item20 || isset($proib11) && $proib11 == $item20 ){
                                        echo "<li>".$key['item20']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item20']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item20' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item21'] != NULL){
                                    $item21 = $key['item21'];
                                    if(isset($proib1) && $proib1 == $item21 || isset($proib2) && $proib2 == $item21 || isset($proib3) && $proib3 == $item21 || isset($proib4) && $proib4 == $item21 || isset($proib5) && $proib5 == $item21 || isset($proib6) && $proib6 == $item21 || isset($proib7) && $proib7 == $item21 || isset($proib8) && $proib8 == $item21 || isset($proib9) && $proib9 == $item21 || isset($proib10) && $proib10 == $item21 || isset($proib11) && $proib11 == $item21 ){
                                        echo "<li>".$key['item21']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item21']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item21' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item22'] != NULL){
                                    $item22 = $key['item22'];
                                    if(isset($proib1) && $proib1 == $item22 || isset($proib2) && $proib2 == $item22 || isset($proib3) && $proib3 == $item22 || isset($proib4) && $proib4 == $item22 || isset($proib5) && $proib5 == $item22 || isset($proib6) && $proib6 == $item22 || isset($proib7) && $proib7 == $item22 || isset($proib8) && $proib8 == $item22 || isset($proib9) && $proib9 == $item22 || isset($proib10) && $proib10 == $item22 || isset($proib11) && $proib11 == $item22 ){
                                        echo "<li>".$key['item22']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item22']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item22' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item23'] != NULL){
                                    $item23 = $key['item23'];
                                    if(isset($proib1) && $proib1 == $item23 || isset($proib2) && $proib2 == $item23 || isset($proib3) && $proib3 == $item23 || isset($proib4) && $proib4 == $item23 || isset($proib5) && $proib5 == $item23 || isset($proib6) && $proib6 == $item23 || isset($proib7) && $proib7 == $item23 || isset($proib8) && $proib8 == $item23 || isset($proib9) && $proib9 == $item23 || isset($proib10) && $proib10 == $item23 || isset($proib11) && $proib11 == $item23 ){
                                        echo "<li>".$key['item23']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item23']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item23' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item24'] != NULL){
                                    $item24 = $key['item24'];
                                    if(isset($proib1) && $proib1 == $item24 || isset($proib2) && $proib2 == $item24 || isset($proib3) && $proib3 == $item24 || isset($proib4) && $proib4 == $item24 || isset($proib5) && $proib5 == $item24 || isset($proib6) && $proib6 == $item24 || isset($proib7) && $proib7 == $item24 || isset($proib8) && $proib8 == $item24 || isset($proib9) && $proib9 == $item24 || isset($proib10) && $proib10 == $item24 || isset($proib11) && $proib11 == $item24 ){
                                        echo "<li>".$key['item24']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item24']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item24' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                if($key['item25'] != NULL){
                                    if(isset($proib1) && $proib1 == $item25 || isset($proib2) && $proib2 == $item25 || isset($proib3) && $proib3 == $item25 || isset($proib4) && $proib4 == $item25 || isset($proib5) && $proib5 == $item25 || isset($proib6) && $proib6 == $item25 || isset($proib7) && $proib7 == $item25 || isset($proib8) && $proib8 == $item25 || isset($proib9) && $proib9 == $item25 || isset($proib10) && $proib10 == $item25 || isset($proib11) && $proib11 == $item25 ){
                                        echo "<li>".$key['item25']."<a style='color:red'> (Este item não pode ser recebido pela classe do seu personagem!!!)</a>
                                        </li>";
                                    } else {
                                        echo "<li>".$key['item25']."
                                            <form action='s_item2.php' method='post'>
                                            <label for='nome' hidden></label>
                                            <input type='text' id='nome' name='nome' value='$nome' hidden>
                                            <label for='item' hidden></label>
                                            <input type='text' id='item' name='item' value='$item25' hidden>
                                            <input type='submit' value='Trocar'>
                                            </form>
                                        </li>";
                                    }
                                }
                                echo "</ul>";
                            }
                        }
                        }
                    }
                }
            }
    ?>
</body>
</html>