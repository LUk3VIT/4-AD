<?php

session_start();
require_once '../../classes/repositorioTabletop.php'; 
$repositorio = new RepositorioTabletopMySQL();
if(isset($_SESSION['id_comprador'])){
    $id = $_SESSION['id_comprador'];
} else {
    $id = $_GET['id'];
    $_SESSION['id_comprador'] = $id;
}


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja de Itens</title>
</head>
<body>
    <h2><a href='selecionar_personagem.php'>Voltar para escolher personagem</a></h2>
    <h1>Loja de itens e Equipamentos para sua aventura<h1>
        <?php if(isset($_SESSION['msg'])){
            echo "<a style='color: red'>".$_SESSION['msg']."</a>";
            unset($_SESSION['msg']);
        } ?>
    <div style='border: solid 2px red; height: 150px; width: 400px'>
        <?php
            $personagem = $repositorio->MostrarPersonagem($id);
            foreach ($personagem as $key) {
                $classe = $key['classe'];
                $nome_pers = $key['nome'];
                $dinheiro = $key['dinheiro'];
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
                ?>
                <h6>Nome: <?php echo $nome_pers?> Classe: <?php echo $classe?></h6>
                <h6>Dinheiro: <?php echo $dinheiro?></h6>
                <?php
                echo "Inventario";
                    $nome = $nome_pers;
                    $inventario = $repositorio->MostrarInventario($nome);
                    foreach ($inventario as $key) {
                        echo "<ul style='border: solid 2px black; margin-bottom: 250px'>";
                            $item1 = $key['item1'];
                            echo "<li>".$key['item1']."</li>";
                            $item2 = $key['item2'];
                            echo "<li>".$key['item2']."</li>";
                            if($key['item3'] != NULL){
                                $item3 = $key['item3'];
                                echo "<li>".$key['item3']."</li>";
                            }
                            if($key['item4'] != NULL){
                                $item4 = $key['item4'];
                                echo "<li>".$key['item4']."</li>";
                            }
                            if($key['item5'] != NULL){
                                $item5 = $key['item5'];
                                echo "<li>".$key['item5']."</li>";
                            }
                            if($key['item6'] != NULL){
                                $item6 = $key['item6'];
                                echo "<li>".$key['item6']."</li>";
                            }
                            if($key['item7'] != NULL){
                                $item7 = $key['item7'];
                                echo "<li>".$key['item7']."</li>";
                            }
                            if($key['item8'] != NULL){
                                $item8 = $key['item8'];
                                echo "<li>".$key['item8']."</li>";
                            }
                            if($key['item9'] != NULL){
                                $item9 = $key['item9'];
                                echo "<li>".$key['item9']."</li>";
                            }
                            if($key['item10'] != NULL){
                                $item10 = $key['item10'];
                                echo "<li>".$key['item10']."</li>";
                            }
                            if($key['item11'] != NULL){
                                $item11 = $key['item11'];
                                echo "<li>".$key['item11']."</li>";
                            }
                            if($key['item12'] != NULL){
                                $item12 = $key['item12'];
                                echo "<li>".$key['item12']."</li>";
                            }
                            if($key['item13'] != NULL){
                                $item13 = $key['item13'];
                                echo "<li>".$key['item13']."</li>";
                            }
                            if($key['item14'] != NULL){
                                $item14 = $key['item14'];
                                echo "<li>".$key['item14']."</li>";
                            }
                            if($key['item15'] != NULL){
                                $item15 = $key['item15'];
                                echo "<li>".$key['item15']."</li>";
                            }
                            if($key['item16'] != NULL){
                                $item16 = $key['item16'];
                                echo "<li>".$key['item16']."</li>";
                            }
                            if($key['item17'] != NULL){
                                $item17 = $key['item17'];
                                echo "<li>".$key['item17']."</li>";
                            }
                            if($key['item18'] != NULL){
                                $item18 = $key['item18'];
                                echo "<li>".$key['item18']."</li>";
                            }
                            if($key['item19'] != NULL){
                                $item19 = $key['item19'];
                                echo "<li>".$key['item19']."</li>";
                            }
                            if($key['item20'] != NULL){
                                $item20 = $key['item20'];
                                echo "<li>".$key['item20']."</li>";
                            }
                            if($key['item21'] != NULL){
                                $item21 = $key['item21'];
                                echo "<li>".$key['item21']."</li>";
                            }
                            if($key['item22'] != NULL){
                                $item22 = $key['item22'];
                                echo "<li>".$key['item22']."</li>";
                            }
                            if($key['item23'] != NULL){
                                $item23 = $key['item23'];
                                echo "<li>".$key['item4']."</li>";
                            }
                            if($key['item24'] != NULL){
                                $item24 = $key['item24'];
                                echo "<li>".$key['item24']."</li>";
                            }
                            if($key['item25'] != NULL){
                                $item25 = $key['item25'];
                                echo "<li>".$key['item25']."</li>";
                            }
                        echo "</ul>";
                        echo "<br>";
                        echo "<br>";
                        echo "<br>";
                        echo "<br>";
                        echo "<br>";
                        echo "<br>";
                        echo "<br>";
                        echo "<br>";
                    }
            }
        ?>
    </div>
    <div>
        <br>
        <br>
        <br>
        <?php
            echo "<table style='border: solid 2px black;margin-top: 250px'>";
                echo "<tr>";
                    echo "<td style='border-right: solid 2px black'> Nome do Item </td>";
                    echo "<td style='border-right: solid 2px black'>Tipo do Item</td>";
                    echo "<td style='border-right: solid 2px black'> Descrição do Item </td>";
                    echo "<td> Preço </td>";
                echo "</tr>";

                $item1 = "bandagem";
                if(isset($proib1) && $proib1 == $item1 || isset($proib2) && $proib2 == $item1 || isset($proib3) && $proib3 == $item1 || isset($proib4) && $proib4 == $item1 || isset($proib5) && $proib5 == $item1 || isset($proib6) && $proib6 == $item1 || isset($proib7) && $proib7 == $item1 || isset($proib8) && $proib8 == $item1 || isset($proib9) && $proib9 == $item1 || isset($proib10) && $proib10 == $item1 || isset($proib11) && $proib11 == $item1 ){
                    echo "<tr>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> Bandagem </td>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> Utilizável </td>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> Recupera 1 de vida do personagem, só pode ser usado uma vez por masmorra e não pode ser usado durante combate. </td>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> 5 </td>";
                        echo "<td style='border-top: solid 2px black;color: red'>A classe do personagem selecionado não pode usar este item!!!</td>";
                    echo "</tr>";
                } else {
                    echo "<tr>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> Bandagem </td>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> Utilizável </td>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> Recupera 1 de vida do personagem, só pode ser usado uma vez por masmorra e não pode ser usado durante combate. </td>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> 5 </td>";
                        echo "<td style='border-top: solid 2px black'><a href='comprar.php?id=bandagem'>Comprar</a></td>";
                    echo "</tr>";
                }

                $item1 = "feitiço de benção";
                if(isset($proib1) && $proib1 == $item1 || isset($proib2) && $proib2 == $item1 || isset($proib3) && $proib3 == $item1 || isset($proib4) && $proib4 == $item1 || isset($proib5) && $proib5 == $item1 || isset($proib6) && $proib6 == $item1 || isset($proib7) && $proib7 == $item1 || isset($proib8) && $proib8 == $item1 || isset($proib9) && $proib9 == $item1 || isset($proib10) && $proib10 == $item1 || isset($proib11) && $proib11 == $item1 ){
                    echo "<tr>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> Feitiço de Benção </td>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> Utilizável </td>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> os personagens pagam a igreja local para lançar uma bênção , para remover uma condição de jogo como ser amaldiçoado ou um membro do grupo ter virado pedra. </td>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> 100 </td>";
                        echo "<td style='border-top: solid 2px black;color: red'>A classe do personagem selecionado não pode usar este item!!!</td>";
                    echo "</tr>";
                } else {
                    echo "<tr>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> Feitiço de Benção </td>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> Utilizável </td>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> os personagens pagam a igreja local para lançar uma bênção , para remover uma condição de jogo como ser amaldiçoado ou um membro do grupo ter virado pedra. </td>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> 100 </td>";
                        echo "<td style='border-top: solid 2px black'><a href='comprar.php?id=bencao'>Comprar</a></td>";
                    echo "</tr>";
                }
                
                $item1 = "frasco de água benta";
                if(isset($proib1) && $proib1 == $item1 || isset($proib2) && $proib2 == $item1 || isset($proib3) && $proib3 == $item1 || isset($proib4) && $proib4 == $item1 || isset($proib5) && $proib5 == $item1 || isset($proib6) && $proib6 == $item1 || isset($proib7) && $proib7 == $item1 || isset($proib8) && $proib8 == $item1 || isset($proib9) && $proib9 == $item1 || isset($proib10) && $proib10 == $item1 || isset($proib11) && $proib11 == $item1 ){
                    echo "<tr>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> Frasco de água benta </td>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> Utilizável </td>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> Um frasco de água benta, se jogado como um ataque contra um criatura suscetível a ela (vampiros, demônios), automaticamente inflige 1 ferimento a criatura. A igreja restringe o uso de santo da água, então uma equipe pode comprar um máximo de um frasco por personagem. </td>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> 30 </td>";
                        echo "<td style='border-top: solid 2px black;color: red'>A classe do personagem selecionado não pode usar este item!!!</td>";
                    echo "</tr>";
                } else {
                    echo "<tr>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> Frasco de água benta </td>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> Utilizável </td>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> Um frasco de água benta, se jogado como um ataque contra um criatura suscetível a ela (vampiros, demônios), automaticamente inflige 1 ferimento a criatura. A igreja restringe o uso de santo da água, então uma equipe pode comprar um máximo de um frasco por personagem. </td>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> 30 </td>";
                        echo "<td style='border-top: solid 2px black'><a href='comprar.php?id=agua_benta'>Comprar</a></td>";
                    echo "</tr>";
                }

                $item1 = "poção de cura";
                if(isset($proib1) && $proib1 == $item1 || isset($proib2) && $proib2 == $item1 || isset($proib3) && $proib3 == $item1 || isset($proib4) && $proib4 == $item1 || isset($proib5) && $proib5 == $item1 || isset($proib6) && $proib6 == $item1 || isset($proib7) && $proib7 == $item1 || isset($proib8) && $proib8 == $item1 || isset($proib9) && $proib9 == $item1 || isset($proib10) && $proib10 == $item1 || isset($proib11) && $proib11 == $item1 ){
                    echo "<tr>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> Poção de Cura </td>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> Utilizável </td>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> Beber o conteúdo deste frasco, mesmo no meio de um combate, irá restaurar vida de um personagem totalmente, um personagem não pode tomar mais de uma poção de cura por aventura. </td>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> 100 </td>";
                        echo "<td style='border-top: solid 2px black;color: red'>A classe do personagem selecionado não pode usar este item!!!</td>";
                    echo "</tr>";
                } else {
                    echo "<tr>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> Poção de Cura </td>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> Utilizável </td>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> Beber o conteúdo deste frasco, mesmo no meio de um combate, irá restaurar vida de um personagem totalmente, um personagem não pode tomar mais de uma poção de cura por aventura. </td>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> 100 </td>";
                        echo "<td style='border-top: solid 2px black'><a href='comprar.php?id=poção_cura'>Comprar</a></td>";
                    echo "</tr>";
                }

                $item1 = "ritual de ressureição";
                if(isset($proib1) && $proib1 == $item1 || isset($proib2) && $proib2 == $item1 || isset($proib3) && $proib3 == $item1 || isset($proib4) && $proib4 == $item1 || isset($proib5) && $proib5 == $item1 || isset($proib6) && $proib6 == $item1 || isset($proib7) && $proib7 == $item1 || isset($proib8) && $proib8 == $item1 || isset($proib9) && $proib9 == $item1 || isset($proib10) && $proib10 == $item1 || isset($proib11) && $proib11 == $item1 ){
                    echo "<tr>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> Ritual de Ressurreição </td>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> Utilizável </td>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> Isso é comprado entre uma aventura e outra para permitir que um personagem morto volte a vida. </td>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> 1000 </td>";
                        echo "<td style='border-top: solid 2px black;color: red'>A classe do personagem selecionado não pode usar este item!!!</td>";
                    echo "</tr>";
                } else {
                    echo "<tr>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> Ritual de Ressurreição </td>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> Utilizável </td>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> Isso é comprado entre uma aventura e outra para permitir que um personagem morto volte a vida. </td>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> 1000 </td>";
                        echo "<td style='border-top: solid 2px black'><a href='comprar.php?id=ressurreição'>Comprar</a></td>";
                    echo "</tr>";
                }

                $item1 = "corda";
                if(isset($proib1) && $proib1 == $item1 || isset($proib2) && $proib2 == $item1 || isset($proib3) && $proib3 == $item1 || isset($proib4) && $proib4 == $item1 || isset($proib5) && $proib5 == $item1 || isset($proib6) && $proib6 == $item1 || isset($proib7) && $proib7 == $item1 || isset($proib8) && $proib8 == $item1 || isset($proib9) && $proib9 == $item1 || isset($proib10) && $proib10 == $item1 || isset($proib11) && $proib11 == $item1 ){
                    echo "<tr>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> Corda </td>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> Utilizável </td>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> Isso pode ser necessário para amarrar um monstro derrotado. </td>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> 4 </td>";
                        echo "<td style='border-top: solid 2px black;color: red'>A classe do personagem selecionado não pode usar este item!!!</td>";
                    echo "</tr>";
                } else {
                    echo "<tr>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> Corda </td>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> Utilizável </td>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> Isso pode ser necessário para amarrar um monstro derrotado. </td>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> 4 </td>";
                        echo "<td style='border-top: solid 2px black'><a href='comprar.php?id=corda'>Comprar</a></td>";
                    echo "</tr>";
                }

                $item1 = "lanterna";
                if(isset($proib1) && $proib1 == $item1 || isset($proib2) && $proib2 == $item1 || isset($proib3) && $proib3 == $item1 || isset($proib4) && $proib4 == $item1 || isset($proib5) && $proib5 == $item1 || isset($proib6) && $proib6 == $item1 || isset($proib7) && $proib7 == $item1 || isset($proib8) && $proib8 == $item1 || isset($proib9) && $proib9 == $item1 || isset($proib10) && $proib10 == $item1 || isset($proib11) && $proib11 == $item1 ){
                    echo "<tr>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> Lanterna </td>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black; color: red'> Essencial para uma aventura </td>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> Uma equipe deve ter pelo menos uma lanterna, e atribuí-lo a um personagem. Esse personagem deve usar uma mão para levar a lanterna e não pode usar arco, escudo ou arma de duas mãos. Se o portador da lanterna é morto, outro personagem deve pegar a lanterna no final do combate atual. Você pode também decidir levar mais de uma lanterna, apenas no caso, caso nenhum personagem leve a lanterna o grupo entrará na masmorra no mais puro breu e assim terão -1 em todos os testes. </td>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> 4 </td>";
                        echo "<td style='border-top: solid 2px black;color: red'>A classe do personagem selecionado não pode usar este item!!!</td>";
                    echo "</tr>";
                } else {
                    echo "<tr>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> Lanterna </td>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black; color: red'> Essencial para uma aventura </td>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> Uma equipe deve ter pelo menos uma lanterna, e atribuí-lo a um personagem. Esse personagem deve usar uma mão para levar a lanterna e não pode usar arco, escudo ou arma de duas mãos. Se o portador da lanterna é morto, outro personagem deve pegar a lanterna no final do combate atual. Você pode também decidir levar mais de uma lanterna, apenas no caso, caso nenhum personagem leve a lanterna o grupo entrará na masmorra no mais puro breu e assim terão -1 em todos os testes. </td>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> 4 </td>";
                        echo "<td style='border-top: solid 2px black'><a href='comprar.php?id=lanterna'>Comprar</a></td>";
                    echo "</tr>";
                }

                $item1 = "escudo";
                if(isset($proib1) && $proib1 == $item1 || isset($proib2) && $proib2 == $item1 || isset($proib3) && $proib3 == $item1 || isset($proib4) && $proib4 == $item1 || isset($proib5) && $proib5 == $item1 || isset($proib6) && $proib6 == $item1 || isset($proib7) && $proib7 == $item1 || isset($proib8) && $proib8 == $item1 || isset($proib9) && $proib9 == $item1 || isset($proib10) && $proib10 == $item1 || isset($proib11) && $proib11 == $item1 ){
                    echo "<tr>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> Escudo </td>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> Defesa </td>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> Isso dá +1 para o usuário em rolagens de defesa. Este bônus não se aplica quando o personagem está fugindo de um combate ou quando ele é surpreendido por monstros errantes. Certos ataques de monstros ignoram o bônus do escudo.  </td>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> 5 </td>";
                        echo "<td style='border-top: solid 2px black;color: red'>A classe do personagem selecionado não pode usar este item!!!</td>";
                    echo "</tr>";
                } else {
                    echo "<tr>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> Escudo </td>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> Defesa </td>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> Isso dá +1 para o usuário em rolagens de defesa. Este bônus não se aplica quando o personagem está fugindo de um combate ou quando ele é surpreendido por monstros errantes. Certos ataques de monstros ignoram o bônus do escudo.  </td>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> 5 </td>";
                        echo "<td style='border-top: solid 2px black'><a href='comprar.php?id=escudo'>Comprar</a></td>";
                    echo "</tr>";
                }

                $item1 = "armadura de aço";
                if(isset($proib1) && $proib1 == $item1 || isset($proib2) && $proib2 == $item1 || isset($proib3) && $proib3 == $item1 || isset($proib4) && $proib4 == $item1 || isset($proib5) && $proib5 == $item1 || isset($proib6) && $proib6 == $item1 || isset($proib7) && $proib7 == $item1 || isset($proib8) && $proib8 == $item1 || isset($proib9) && $proib9 == $item1 || isset($proib10) && $proib10 == $item1 || isset($proib11) && $proib11 == $item1 ){
                    echo "<tr>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> Armadura de Aço </td>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> Defesa </td>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> Uma armadura de aço adiciona +2 ao usuário em rolagem de defesa. Certos ataques de monstros irão ignorar este bônus. Armadura pesada faz o usuário ficar lento, então em certos casos, o personagem terá um modificador negativo em seus saves. Armadura pesada é projetada para caber um usuário, então você não pode transferilo para outro personagem se o original o usuário morre. </td>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> 30 </td>";
                        echo "<td style='border-top: solid 2px black;color: red'>A classe do personagem selecionado não pode usar este item!!!</td>";
                    echo "</tr>";
                } else {
                    echo "<tr>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> Armadura de Aço </td>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> Defesa </td>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> Uma armadura de aço adiciona +2 ao usuário em rolagem de defesa. Certos ataques de monstros irão ignorar este bônus. Armadura pesada faz o usuário ficar lento, então em certos casos, o personagem terá um modificador negativo em seus saves. Armadura pesada é projetada para caber um usuário, então você não pode transferilo para outro personagem se o original o usuário morre. </td>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> 30 </td>";
                        echo "<td style='border-top: solid 2px black'><a href='comprar.php?id=armadura_aco'>Comprar</a></td>";
                    echo "</tr>";
                }
            
                $item1 = "armadura de malha";
                if(isset($proib1) && $proib1 == $item1 || isset($proib2) && $proib2 == $item1 || isset($proib3) && $proib3 == $item1 || isset($proib4) && $proib4 == $item1 || isset($proib5) && $proib5 == $item1 || isset($proib6) && $proib6 == $item1 || isset($proib7) && $proib7 == $item1 || isset($proib8) && $proib8 == $item1 || isset($proib9) && $proib9 == $item1 || isset($proib10) && $proib10 == $item1 || isset($proib11) && $proib11 == $item1 ){
                    echo "<tr>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> Armadura de Malha </td>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> Defesa </td>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> Armadura leve adiciona +1 as rolagens de defesa do usuário. Certos ataques de monstros ignoram este bônus. Quando o usuário original morre, você pode reatribuir armaduras leves para outro usuário da mesma espécie. </td>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> 10 </td>";
                        echo "<td style='border-top: solid 2px black;color: red'>A classe do personagem selecionado não pode usar este item!!!</td>";
                    echo "</tr>";
                } else {
                    echo "<tr>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> Armadura de Malha </td>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> Defesa </td>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> Armadura leve adiciona +1 as rolagens de defesa do usuário. Certos ataques de monstros ignoram este bônus. Quando o usuário original morre, você pode reatribuir armaduras leves para outro usuário da mesma espécie. </td>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> 10 </td>";
                        echo "<td style='border-top: solid 2px black'><a href='comprar.php?id=armadura_malha'>Comprar</a></td>";
                    echo "</tr>";
                }

                $item1 = "espada curta";
                if(isset($proib1) && $proib1 == $item1 || isset($proib2) && $proib2 == $item1 || isset($proib3) && $proib3 == $item1 || isset($proib4) && $proib4 == $item1 || isset($proib5) && $proib5 == $item1 || isset($proib6) && $proib6 == $item1 || isset($proib7) && $proib7 == $item1 || isset($proib8) && $proib8 == $item1 || isset($proib9) && $proib9 == $item1 || isset($proib10) && $proib10 == $item1 || isset($proib11) && $proib11 == $item1 ){
                    echo "<tr>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> Espada Curta </td>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> Arma de uma mão cortante </td>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> Arma cortante que dá um bônus de ataque igual a +1. Bastante utilizada para finalizar Trolls. </td>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> 6 </td>";
                        echo "<td style='border-top: solid 2px black;color: red'>A classe do personagem selecionado não pode usar este item!!!</td>";
                    echo "</tr>";
                } else {
                    echo "<tr>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> Espada Curta </td>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> Arma de uma mão cortante </td>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> Arma cortante que dá um bônus de ataque igual a +1. Bastante utilizada para finalizar Trolls. </td>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> 6 </td>";
                        echo "<td style='border-top: solid 2px black'><a href='comprar.php?id=espada_curta'>Comprar</a></td>";
                    echo "</tr>";
                }

                $item1 = "mangual";
                if(isset($proib1) && $proib1 == $item1 || isset($proib2) && $proib2 == $item1 || isset($proib3) && $proib3 == $item1 || isset($proib4) && $proib4 == $item1 || isset($proib5) && $proib5 == $item1 || isset($proib6) && $proib6 == $item1 || isset($proib7) && $proib7 == $item1 || isset($proib8) && $proib8 == $item1 || isset($proib9) && $proib9 == $item1 || isset($proib10) && $proib10 == $item1 || isset($proib11) && $proib11 == $item1 ){
                    echo "<tr>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> Mangual </td>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> Arma de uma mão esmagadora </td>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> Arma cortante que dá um bônus de ataque igual a +1. Porém tem um bônus adicional contra esqueletos. </td>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> 6 </td>";
                        echo "<td style='border-top: solid 2px black;color: red'>A classe do personagem selecionado não pode usar este item!!!</td>";
                    echo "</tr>";
                } else {
                    echo "<tr>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> Mangual </td>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> Arma de uma mão esmagadora </td>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> Arma cortante que dá um bônus de ataque igual a +1. Porém tem um bônus adicional contra esqueletos. </td>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> 6 </td>";
                        echo "<td style='border-top: solid 2px black'><a href='comprar.php?id=mangual'>Comprar</a></td>";
                    echo "</tr>";
                }

                $item1 = "adaga";
                if(isset($proib1) && $proib1 == $item1 || isset($proib2) && $proib2 == $item1 || isset($proib3) && $proib3 == $item1 || isset($proib4) && $proib4 == $item1 || isset($proib5) && $proib5 == $item1 || isset($proib6) && $proib6 == $item1 || isset($proib7) && $proib7 == $item1 || isset($proib8) && $proib8 == $item1 || isset($proib9) && $proib9 == $item1 || isset($proib10) && $proib10 == $item1 || isset($proib11) && $proib11 == $item1 ){
                    echo "<tr>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> Adaga </td>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> Arma de uma mão leve cortante </td>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> Esta arma cortante dá ao usuário um -1 nos testes de ataque.  </td>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> 5 </td>";
                        echo "<td style='border-top: solid 2px black;color: red'>A classe do personagem selecionado não pode usar este item!!!</td>";
                    echo "</tr>";
                } else {
                    echo "<tr>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> Adaga </td>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> Arma de uma mão leve cortante </td>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> Esta arma cortante dá ao usuário um -1 nos testes de ataque.  </td>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> 5 </td>";
                        echo "<td style='border-top: solid 2px black'><a href='comprar.php?id=adaga'>Comprar</a></td>";
                    echo "</tr>";
                }
                
                $item1 = "tonfa";
                if(isset($proib1) && $proib1 == $item1 || isset($proib2) && $proib2 == $item1 || isset($proib3) && $proib3 == $item1 || isset($proib4) && $proib4 == $item1 || isset($proib5) && $proib5 == $item1 || isset($proib6) && $proib6 == $item1 || isset($proib7) && $proib7 == $item1 || isset($proib8) && $proib8 == $item1 || isset($proib9) && $proib9 == $item1 || isset($proib10) && $proib10 == $item1 || isset($proib11) && $proib11 == $item1 ){
                    echo "<tr>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> Tonfa </td>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> Arma de uma mão leve esmagadora </td>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> Esta arma esmagadora dá ao usuário um -1 nos testes de ataque.  </td>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> 5 </td>";
                        echo "<td style='border-top: solid 2px black;color: red'>A classe do personagem selecionado não pode usar este item!!!</td>";
                    echo "</tr>";
                } else {
                    echo "<tr>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> Tonfa </td>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> Arma de uma mão leve esmagadora </td>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> Esta arma esmagadora dá ao usuário um -1 nos testes de ataque.  </td>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> 5 </td>";
                        echo "<td style='border-top: solid 2px black'><a href='comprar.php?id=tonfa'>Comprar</a></td>";
                    echo "</tr>";
                }

                $item1 = "espada montante";
                if(isset($proib1) && $proib1 == $item1 || isset($proib2) && $proib2 == $item1 || isset($proib3) && $proib3 == $item1 || isset($proib4) && $proib4 == $item1 || isset($proib5) && $proib5 == $item1 || isset($proib6) && $proib6 == $item1 || isset($proib7) && $proib7 == $item1 || isset($proib8) && $proib8 == $item1 || isset($proib9) && $proib9 == $item1 || isset($proib10) && $proib10 == $item1 || isset($proib11) && $proib11 == $item1 ){
                    echo "<tr>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> Espada Montante </td>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> Arma de duas mãos cortante </td>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> Essa arma requer duas mãos para ser usado ( o usuário não pode carregar escudo ou lanterna), mas dá +1 o Ataque do portador na rolagem.  </td>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> 15 </td>";
                        echo "<td style='border-top: solid 2px black;color: red'>A classe do personagem selecionado não pode usar este item!!!</td>";
                    echo "</tr>";
                } else {
                    echo "<tr>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> Espada Montante </td>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> Arma de duas mãos cortante </td>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> Essa arma requer duas mãos para ser usado ( o usuário não pode carregar escudo ou lanterna), mas dá +1 o Ataque do portador na rolagem.  </td>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> 15 </td>";
                        echo "<td style='border-top: solid 2px black'><a href='comprar.php?id=espada_montante'>Comprar</a></td>";
                    echo "</tr>";
                }

                $item1 = "martelo de guerra";
                if(isset($proib1) && $proib1 == $item1 || isset($proib2) && $proib2 == $item1 || isset($proib3) && $proib3 == $item1 || isset($proib4) && $proib4 == $item1 || isset($proib5) && $proib5 == $item1 || isset($proib6) && $proib6 == $item1 || isset($proib7) && $proib7 == $item1 || isset($proib8) && $proib8 == $item1 || isset($proib9) && $proib9 == $item1 || isset($proib10) && $proib10 == $item1 || isset($proib11) && $proib11 == $item1 ){
                    echo "<tr>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> Martelo de Guerra </td>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> Arma de duas mãos esmagadora </td>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> Essa arma requer duas mãos para ser usado ( o usuário não pode carregar escudo ou lanterna), mas dá +1 o Ataque do portador na rolagem. </td>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> 15 </td>";
                        echo "<td style='border-top: solid 2px black;color: red'>A classe do personagem selecionado não pode usar este item!!!</td>";
                    echo "</tr>";
                } else {
                    echo "<tr>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> Martelo de Guerra </td>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> Arma de duas mãos esmagadora </td>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> Essa arma requer duas mãos para ser usado ( o usuário não pode carregar escudo ou lanterna), mas dá +1 o Ataque do portador na rolagem. </td>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> 15 </td>";
                        echo "<td style='border-top: solid 2px black'><a href='comprar.php?id=martelo_guerra'>Comprar</a></td>";
                    echo "</tr>";
                }

                $item1 = "arco";
                if(isset($proib1) && $proib1 == $item1 || isset($proib2) && $proib2 == $item1 || isset($proib3) && $proib3 == $item1 || isset($proib4) && $proib4 == $item1 || isset($proib5) && $proib5 == $item1 || isset($proib6) && $proib6 == $item1 || isset($proib7) && $proib7 == $item1 || isset($proib8) && $proib8 == $item1 || isset($proib9) && $proib9 == $item1 || isset($proib10) && $proib10 == $item1 || isset($proib11) && $proib11 == $item1 ){
                    echo "<tr>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> Arco </td>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> Arma a distância cortante </td>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> Permite que um personagem execute um único ataque antes dos monstros, mesmo quando eles agem primeiro obrigatoriamente, porém depois do uso o personagem tem que gastar uma ação para guardar o arco e puxar outra arma. </td>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> 15 </td>";
                        echo "<td style='border-top: solid 2px black;color: red'>A classe do personagem selecionado não pode usar este item!!!</td>";
                    echo "</tr>";
                } else {
                    echo "<tr>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> Arco </td>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> Arma a distância cortante </td>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> Permite que um personagem execute um único ataque antes dos monstros, mesmo quando eles agem primeiro obrigatoriamente, porém depois do uso o personagem tem que gastar uma ação para guardar o arco e puxar outra arma. </td>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> 15 </td>";
                        echo "<td style='border-top: solid 2px black'><a href='comprar.php?id=arco'>Comprar</a></td>";
                    echo "</tr>";
                }

                $item1 = "funda";
                if(isset($proib1) && $proib1 == $item1 || isset($proib2) && $proib2 == $item1 || isset($proib3) && $proib3 == $item1 || isset($proib4) && $proib4 == $item1 || isset($proib5) && $proib5 == $item1 || isset($proib6) && $proib6 == $item1 || isset($proib7) && $proib7 == $item1 || isset($proib8) && $proib8 == $item1 || isset($proib9) && $proib9 == $item1 || isset($proib10) && $proib10 == $item1 || isset($proib11) && $proib11 == $item1 ){
                    echo "<tr>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> Funda </td>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> Arma a distância esmagadora </td>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> Esta arma funciona como um arco, mas a -1.  </td>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> 4 </td>";
                        echo "<td style='border-top: solid 2px black;color: red'>A classe do personagem selecionado não pode usar este item!!!</td>";
                    echo "</tr>";
                } else {
                    echo "<tr>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> Funda </td>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> Arma a distância esmagadora </td>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> Esta arma funciona como um arco, mas a -1.  </td>";
                        echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> 4 </td>";
                        echo "<td style='border-top: solid 2px black'><a href='comprar.php?id=funda'>Comprar</a></td>";
                    echo "</tr>";
                }
                
                    if($classe == "Mago"){
                            echo "<tr>";
                                echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> Livro de Feitiços </td>";
                                echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> Arma essencial do Mago </td>";
                                echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> Permite a um Mago lançar feitiços, assim ele é extremamente necessário para um mago. </td>";
                                echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> 250 </td>";
                                echo "<td style='border-top: solid 2px black'><a href='comprar.php?id=livro_feitiços'>Comprar</a></td>";
                            echo "</tr>";
                    }
            echo "</table>";

            $nome = $nome_pers;
            $inventario = $repositorio->MostrarInventario($nome);
            foreach ($inventario as $key) {
                if($key['item1'] != NULL){
                    $item = $key['item1'];
                    $valor = $repositorio->VerPreco($item);
                    foreach ($valor as $x) {
                        $preco_item1 = $x['valor'] / 2;
                        $tipo_item1 = $x['tipo'];
                    }
                }
                if($key['item2'] != NULL){
                    $item = $key['item2'];
                    $valor = $repositorio->VerPreco($item);
                    foreach ($valor as $x) {
                        $preco_item2 = $x['valor'] / 2;
                        $tipo_item2 = $x['tipo'];
                    }
                }
                if($key['item3'] != NULL){
                    $item = $key['item3'];
                    $valor = $repositorio->VerPreco($item);
                    foreach ($valor as $x) {
                        $preco_item3 = $x['valor'] / 2;
                        $tipo_item3 = $x['tipo'];
                    }
                }
                if($key['item4'] != NULL){
                    $item = $key['item4'];
                    $valor = $repositorio->VerPreco($item);
                    foreach ($valor as $x) {
                        $preco_item4 = $x['valor'] / 2;
                        $tipo_item4 = $x['tipo'];
                    }
                }
                if($key['item5'] != NULL){
                    $item = $key['item5'];
                    $valor = $repositorio->VerPreco($item);
                    foreach ($valor as $x) {
                        $preco_item5 = $x['valor'] / 2;
                        $tipo_item5 = $x['tipo'];
                    }
                }
                if($key['item6'] != NULL){
                    $item = $key['item6'];
                    $valor = $repositorio->VerPreco($item);
                    foreach ($valor as $x) {
                        $preco_item6 = $x['valor'] / 2;
                        $tipo_item6 = $x['tipo'];
                    }
                }
                if($key['item7'] != NULL){
                    $item = $key['item7'];
                    $valor = $repositorio->VerPreco($item);
                    foreach ($valor as $x) {
                        $preco_item7 = $x['valor'] / 2;
                        $tipo_item7 = $x['tipo'];
                    }
                }
                if($key['item8'] != NULL){
                    $item = $key['item8'];
                    $valor = $repositorio->VerPreco($item);
                    foreach ($valor as $x) {
                        $preco_item8 = $x['valor'] / 2;
                        $tipo_item8 = $x['tipo'];
                    }
                }
                if($key['item9'] != NULL){
                    $item = $key['item9'];
                    $valor = $repositorio->VerPreco($item);
                    foreach ($valor as $x) {
                        $preco_item9 = $x['valor'] / 2;
                        $tipo_item9 = $x['tipo'];
                    }
                }
                if($key['item10'] != NULL){
                    $item = $key['item10'];
                    $valor = $repositorio->VerPreco($item);
                    foreach ($valor as $x) {
                        $preco_item10 = $x['valor'] / 2;
                        $tipo_item10 = $x['tipo'];
                    }
                }
                if($key['item11'] != NULL){
                    $item = $key['item11'];
                    $valor = $repositorio->VerPreco($item);
                    foreach ($valor as $x) {
                        $preco_item11 = $x['valor'] / 2;
                        $tipo_item11 = $x['tipo'];
                    }
                }
                if($key['item12'] != NULL){
                    $item = $key['item12'];
                    $valor = $repositorio->VerPreco($item);
                    foreach ($valor as $x) {
                        $preco_item12 = $x['valor'] / 2;
                        $tipo_item12 = $x['tipo'];
                    }
                }
                if($key['item13'] != NULL){
                    $item = $key['item13'];
                    $valor = $repositorio->VerPreco($item);
                    foreach ($valor as $x) {
                        $preco_item13 = $x['valor'] / 2;
                        $tipo_item13 = $x['tipo'];
                    }
                }
                if($key['item14'] != NULL){
                    $item = $key['item14'];
                    $valor = $repositorio->VerPreco($item);
                    foreach ($valor as $x) {
                        $preco_item14 = $x['valor'] / 2;
                        $tipo_item14 = $x['tipo'];
                    }
                }
                if($key['item15'] != NULL){
                    $item = $key['item15'];
                    $valor = $repositorio->VerPreco($item);
                    foreach ($valor as $x) {
                        $preco_item15 = $x['valor'] / 2;
                        $tipo_item15 = $x['tipo'];
                    }
                }
                if($key['item16'] != NULL){
                    $item = $key['item16'];
                    $valor = $repositorio->VerPreco($item);
                    foreach ($valor as $x) {
                        $preco_item16 = $x['valor'] / 2;
                        $tipo_item16 = $x['tipo'];
                    }
                }
                if($key['item17'] != NULL){
                    $item = $key['item17'];
                    $valor = $repositorio->VerPreco($item);
                    foreach ($valor as $x) {
                        $preco_item17 = $x['valor'] / 2;
                        $tipo_item17 = $x['tipo'];
                    }
                }
                if($key['item18'] != NULL){
                    $item = $key['item18'];
                    $valor = $repositorio->VerPreco($item);
                    foreach ($valor as $x) {
                        $preco_item18 = $x['valor'] / 2;
                        $tipo_item18 = $x['tipo'];
                    }
                }
                if($key['item19'] != NULL){
                    $item = $key['item19'];
                    $valor = $repositorio->VerPreco($item);
                    foreach ($valor as $x) {
                        $preco_item19 = $x['valor'] / 2;
                        $tipo_item19 = $x['tipo'];
                    }
                }
                if($key['item20'] != NULL){
                    $item = $key['item20'];
                    $valor = $repositorio->VerPreco($item);
                    foreach ($valor as $x) {
                        $preco_item20 = $x['valor'] / 2;
                        $tipo_item20 = $x['tipo'];
                    }
                }
                if($key['item21'] != NULL){
                    $item = $key['item21'];
                    $valor = $repositorio->VerPreco($item);
                    foreach ($valor as $x) {
                        $preco_item21 = $x['valor'] / 2;
                        $tipo_item21 = $x['tipo'];
                    }
                }
                if($key['item22'] != NULL){
                    $item = $key['item22'];
                    $valor = $repositorio->VerPreco($item);
                    foreach ($valor as $x) {
                        $preco_item22 = $x['valor'] / 2;
                        $tipo_item22 = $x['tipo'];
                    }
                }
                if($key['item23'] != NULL){
                    $item = $key['item23'];
                    $valor = $repositorio->VerPreco($item);
                    foreach ($valor as $x) {
                        $preco_item23 = $x['valor'] / 2;
                        $tipo_item23 = $x['tipo'];
                    }
                }
                if($key['item24'] != NULL){
                    $item = $key['item24'];
                    $valor = $repositorio->VerPreco($item);
                    foreach ($valor as $x) {
                        $preco_item24 = $x['valor'] / 2;
                        $tipo_item24 = $x['tipo'];
                    }
                }
                if($key['item25'] != NULL){
                    $item = $key['item25'];
                    $valor = $repositorio->VerPreco($item);
                    foreach ($valor as $x) {
                        $preco_item25 = $x['valor'] / 2;
                        $tipo_item25 = $x['tipo'];
                    }
                }
            }

            echo "<h4>Vender Seus Itens</h4>";
            echo "<table style='border: solid 2px black;margin-top: 250px'>";
                    echo "<tr>";
                        echo "<td style='border-right: solid 2px black'> Item </td>";
                        echo "<td style='border-right: solid 2px black'> Tipo </td>";
                        echo "<td> Preço </td>";
                    echo "</tr>";
                    $inventario = $repositorio->MostrarInventario($nome);
                    foreach ($inventario as $key) {
                        if($key['item1'] != NULL){
                            $item1 = $key['item1'];
                            echo "<tr>";
                                echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> ".$key['item1']." </td>";
                                echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> ".$tipo_item1." </td>";
                                echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> ".$preco_item1." </td>";
                                echo "<td style='border-top: solid 2px black'>
                                    <form action='vender.php' method='POST'>
                                        <input type='text' name='item' value='$item1' hidden>
                                        <input type='text' name='preco' value='$preco_item1' hidden>
                                        <input type='submit' value='Vender'>
                                    </form>
                                </td>";
                            echo "</tr>";
                        }
                        if($key['item2'] != NULL){
                            $item2 = $key['item2'];
                            echo "<tr>";
                                echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> ".$key['item2']." </td>";
                                echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> ".$tipo_item2." </td>";
                                echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> ".$preco_item2." </td>";
                                echo "<td style='border-top: solid 2px black'>
                                    <form action='vender.php' method='POST'>
                                        <input type='text' name='item' value='$item2' hidden>
                                        <input type='text' name='preco' value='$preco_item2' hidden>
                                        <input type='submit' value='Vender'>
                                    </form>
                                </td>";
                            echo "</tr>";
                        }
                        if($key['item3'] != NULL){
                            $item3 = $key['item3'];
                            echo "<tr>";
                                echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> ".$key['item3']." </td>";
                                echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> ".$tipo_item3." </td>";
                                echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> ".$preco_item3." </td>";
                                echo "<td style='border-top: solid 2px black'>
                                    <form action='vender.php' method='POST'>
                                        <input type='text' name='item' value='$item3' hidden>
                                        <input type='text' name='preco' value='$preco_item3' hidden>
                                        <input type='submit' value='Vender'>
                                    </form>
                                </td>";
                            echo "</tr>";
                        }
                        if($key['item4'] != NULL){
                            $item4 = $key['item4'];
                            echo "<tr>";
                                echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> ".$key['item4']." </td>";
                                echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> ".$tipo_item4." </td>";
                                echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> ".$preco_item4." </td>";
                                echo "<td style='border-top: solid 2px black'>
                                    <form action='vender.php' method='POST'>
                                        <input type='text' name='item' value='$item4' hidden>
                                        <input type='text' name='preco' value='$preco_item4' hidden>
                                        <input type='submit' value='Vender'>
                                    </form>
                                </td>";
                            echo "</tr>";
                        }
                        if($key['item5'] != NULL){
                            $item5 = $key['item5'];
                            echo "<tr>";
                                echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> ".$key['item5']." </td>";
                                echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> ".$tipo_item5." </td>";
                                echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> ".$preco_item5." </td>";
                                echo "<td style='border-top: solid 2px black'>
                                    <form action='vender.php' method='POST'>
                                        <input type='text' name='item' value='$item5' hidden>
                                        <input type='text' name='preco' value='$preco_item5' hidden>
                                        <input type='submit' value='Vender'>
                                    </form>
                                </td>";
                            echo "</tr>";
                        }
                        if($key['item6'] != NULL){
                            $item6 = $key['item6'];
                            echo "<tr>";
                                echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> ".$key['item6']." </td>";
                                echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> ".$tipo_item6." </td>";
                                echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> ".$preco_item6." </td>";
                                echo "<td style='border-top: solid 2px black'>
                                    <form action='vender.php' method='POST'>
                                        <input type='text' name='item' value='$item6' hidden>
                                        <input type='text' name='preco' value='$preco_item6' hidden>
                                        <input type='submit' value='Vender'>
                                    </form>
                                </td>";
                            echo "</tr>";
                        }
                        if($key['item7'] != NULL){
                            $item7 = $key['item7'];
                            echo "<tr>";
                                echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> ".$key['item7']." </td>";
                                echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> ".$tipo_item7." </td>";
                                echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> ".$preco_item7." </td>";
                                echo "<td style='border-top: solid 2px black'>
                                    <form action='vender.php' method='POST'>
                                        <input type='text' name='item' value='$item7' hidden>
                                        <input type='text' name='preco' value='$preco_item7' hidden>
                                        <input type='submit' value='Vender'>
                                    </form>
                                </td>";
                            echo "</tr>";
                        }
                        if($key['item8'] != NULL){
                            $item8 = $key['item8'];
                            echo "<tr>";
                                echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> ".$key['item8']." </td>";
                                echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> ".$tipo_item8." </td>";
                                echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> ".$preco_item8." </td>";
                                echo "<td style='border-top: solid 2px black'>
                                    <form action='vender.php' method='POST'>
                                        <input type='text' name='item' value='$item8' hidden>
                                        <input type='text' name='preco' value='$preco_item8' hidden>
                                        <input type='submit' value='Vender'>
                                    </form>
                                </td>";
                            echo "</tr>";
                        }
                        if($key['item9'] != NULL){
                            $item9 = $key['item9'];
                            echo "<tr>";
                                echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> ".$key['item9']." </td>";
                                echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> ".$tipo_item9." </td>";
                                echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> ".$preco_item9." </td>";
                                echo "<td style='border-top: solid 2px black'>
                                    <form action='vender.php' method='POST'>
                                        <input type='text' name='item' value='$item9' hidden>
                                        <input type='text' name='preco' value='$preco_item9' hidden>
                                        <input type='submit' value='Vender'>
                                    </form>
                                </td>";
                            echo "</tr>";
                        }
                        if($key['item10'] != NULL){
                            $item10 = $key['item10'];
                            echo "<tr>";
                                echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> ".$key['item10']." </td>";
                                echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> ".$tipo_item10." </td>";
                                echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> ".$preco_item10." </td>";
                                echo "<td style='border-top: solid 2px black'>
                                    <form action='vender.php' method='POST'>
                                        <input type='text' name='item' value='$item10' hidden>
                                        <input type='text' name='preco' value='$preco_item10' hidden>
                                        <input type='submit' value='Vender'>
                                    </form>
                                </td>";
                            echo "</tr>";
                        }
                        if($key['item11'] != NULL){
                            $item11 = $key['item11'];
                            echo "<tr>";
                                echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> ".$key['item11']." </td>";
                                echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> ".$tipo_item11." </td>";
                                echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> ".$preco_item11." </td>";
                                echo "<td style='border-top: solid 2px black'>
                                    <form action='vender.php' method='POST'>
                                        <input type='text' name='item' value='$item11' hidden>
                                        <input type='text' name='preco' value='$preco_item11' hidden>
                                        <input type='submit' value='Vender'>
                                    </form>
                                </td>";
                            echo "</tr>";
                        }
                        if($key['item12'] != NULL){
                            $item12 = $key['item12'];
                            echo "<tr>";
                                echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> ".$key['item12']." </td>";
                                echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> ".$tipo_item12." </td>";
                                echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> ".$preco_item12." </td>";
                                echo "<td style='border-top: solid 2px black'>
                                    <form action='vender.php' method='POST'>
                                        <input type='text' name='item' value='$item12' hidden>
                                        <input type='text' name='preco' value='$preco_item12' hidden>
                                        <input type='submit' value='Vender'>
                                    </form>
                                </td>";
                            echo "</tr>";
                        }
                        if($key['item13'] != NULL){
                            $item13 = $key['item13'];
                            echo "<tr>";
                                echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> ".$key['item13']." </td>";
                                echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> ".$tipo_item13." </td>";
                                echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> ".$preco_item13." </td>";
                                echo "<td style='border-top: solid 2px black'>
                                    <form action='vender.php' method='POST'>
                                        <input type='text' name='item' value='$item13' hidden>
                                        <input type='text' name='preco' value='$preco_item13' hidden>
                                        <input type='submit' value='Vender'>
                                    </form>
                                </td>";
                            echo "</tr>";
                        }
                        if($key['item14'] != NULL){
                            $item14 = $key['item14'];
                            echo "<tr>";
                                echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> ".$key['item14']." </td>";
                                echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> ".$tipo_item14." </td>";
                                echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> ".$preco_item14." </td>";
                                echo "<td style='border-top: solid 2px black'>
                                    <form action='vender.php' method='POST'>
                                        <input type='text' name='item' value='$item14' hidden>
                                        <input type='text' name='preco' value='$preco_item14' hidden>
                                        <input type='submit' value='Vender'>
                                    </form>
                                </td>";
                            echo "</tr>";
                        }
                        if($key['item15'] != NULL){
                            $item15 = $key['item15'];
                            echo "<tr>";
                                echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> ".$key['item15']." </td>";
                                echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> ".$tipo_item15." </td>";
                                echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> ".$preco_item15." </td>";
                                echo "<td style='border-top: solid 2px black'>
                                    <form action='vender.php' method='POST'>
                                        <input type='text' name='item' value='$item15' hidden>
                                        <input type='text' name='preco' value='$preco_item15' hidden>
                                        <input type='submit' value='Vender'>
                                    </form>
                                </td>";
                            echo "</tr>";
                        }
                        if($key['item16'] != NULL){
                            $item16 = $key['item16'];
                            echo "<tr>";
                                echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> ".$key['item16']." </td>";
                                echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> ".$tipo_item16." </td>";
                                echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> ".$preco_item16." </td>";
                                echo "<td style='border-top: solid 2px black'>
                                    <form action='vender.php' method='POST'>
                                        <input type='text' name='item' value='$item16' hidden>
                                        <input type='text' name='preco' value='$preco_item16' hidden>
                                        <input type='submit' value='Vender'>
                                    </form>
                                </td>";
                            echo "</tr>";
                        }
                        if($key['item17'] != NULL){
                            $item17 = $key['item17'];
                            echo "<tr>";
                                echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> ".$key['item17']." </td>";
                                echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> ".$tipo_item17." </td>";
                                echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> ".$preco_item17." </td>";
                                echo "<td style='border-top: solid 2px black'>
                                    <form action='vender.php' method='POST'>
                                        <input type='text' name='item' value='$item17' hidden>
                                        <input type='text' name='preco' value='$preco_item17' hidden>
                                        <input type='submit' value='Vender'>
                                    </form>
                                </td>";
                            echo "</tr>";
                        }
                        if($key['item18'] != NULL){
                            $item18 = $key['item18'];
                            echo "<tr>";
                                echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> ".$key['item18']." </td>";
                                echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> ".$tipo_item18." </td>";
                                echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> ".$preco_item18." </td>";
                                echo "<td style='border-top: solid 2px black'>
                                    <form action='vender.php' method='POST'>
                                        <input type='text' name='item' value='$item18' hidden>
                                        <input type='text' name='preco' value='$preco_item18' hidden>
                                        <input type='submit' value='Vender'>
                                    </form>
                                </td>";
                            echo "</tr>";
                        }
                        if($key['item19'] != NULL){
                            $item19 = $key['item19'];
                            echo "<tr>";
                                echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> ".$key['item19']." </td>";
                                echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> ".$tipo_item19." </td>";
                                echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> ".$preco_item19." </td>";
                                echo "<td style='border-top: solid 2px black'>
                                    <form action='vender.php' method='POST'>
                                        <input type='text' name='item' value='$item19' hidden>
                                        <input type='text' name='preco' value='$preco_item19' hidden>
                                        <input type='submit' value='Vender'>
                                    </form>
                                </td>";
                            echo "</tr>";
                        }
                        if($key['item20'] != NULL){
                            $item20 = $key['item20'];
                            echo "<tr>";
                                echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> ".$key['item20']." </td>";
                                echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> ".$tipo_item20." </td>";
                                echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> ".$preco_item20." </td>";
                                echo "<td style='border-top: solid 2px black'>
                                    <form action='vender.php' method='POST'>
                                        <input type='text' name='item' value='$item20' hidden>
                                        <input type='text' name='preco' value='$preco_item20' hidden>
                                        <input type='submit' value='Vender'>
                                    </form>
                                </td>";
                            echo "</tr>";
                        }
                        if($key['item21'] != NULL){
                            $item21 = $key['item21'];
                            echo "<tr>";
                                echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> ".$key['item21']." </td>";
                                echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> ".$tipo_item21." </td>";
                                echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> ".$preco_item21." </td>";
                                echo "<td style='border-top: solid 2px black'>
                                    <form action='vender.php' method='POST'>
                                        <input type='text' name='item' value='$item21' hidden>
                                        <input type='text' name='preco' value='$preco_item21' hidden>
                                        <input type='submit' value='Vender'>
                                    </form>
                                </td>";
                            echo "</tr>";
                        }
                        if($key['item22'] != NULL){
                            $item22 = $key['item22'];
                            echo "<tr>";
                                echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> ".$key['item22']." </td>";
                                echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> ".$tipo_item22." </td>";
                                echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> ".$preco_item22." </td>";
                                echo "<td style='border-top: solid 2px black'>
                                    <form action='vender.php' method='POST'>
                                        <input type='text' name='item' value='$item22' hidden>
                                        <input type='text' name='preco' value='$preco_item22' hidden>
                                        <input type='submit' value='Vender'>
                                    </form>
                                </td>";
                            echo "</tr>";
                        }
                        if($key['item23'] != NULL){
                            $item23 = $key['item23'];
                            echo "<tr>";
                                echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> ".$key['item23']." </td>";
                                echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> ".$tipo_item23." </td>";
                                echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> ".$preco_item23." </td>";
                                echo "<td style='border-top: solid 2px black'>
                                    <form action='vender.php' method='POST'>
                                        <input type='text' name='item' value='$item23' hidden>
                                        <input type='text' name='preco' value='$preco_item23' hidden>
                                        <input type='submit' value='Vender'>
                                    </form>
                                </td>";
                            echo "</tr>";
                        }
                        if($key['item24'] != NULL){
                            $item24 = $key['item24'];
                            echo "<tr>";
                                echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> ".$key['item24']." </td>";
                                echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> ".$tipo_item24." </td>";
                                echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> ".$preco_item24." </td>";
                                echo "<td style='border-top: solid 2px black'>
                                    <form action='vender.php' method='POST'>
                                        <input type='text' name='item' value='$item24' hidden>
                                        <input type='text' name='preco' value='$preco_item24' hidden>
                                        <input type='submit' value='Vender'>
                                    </form>
                                </td>";
                            echo "</tr>";
                        }
                        if($key['item25'] != NULL){
                            $item25 = $key['item25'];
                            echo "<tr>";
                                echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> ".$key['item25']." </td>";
                                echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> ".$tipo_item25." </td>";
                                echo "<td style='border-right: solid 2px black; border-top: solid 2px black'> ".$preco_item25." </td>";
                                echo "<td style='border-top: solid 2px black'>
                                    <form action='vender.php' method='POST'>
                                        <input type='text' name='item' value='$item25' hidden>
                                        <input type='text' name='preco' value='$preco_item25' hidden>
                                        <input type='submit' value='Vender'>
                                    </form>
                                </td>";
                            echo "</tr>";
                        }
                    }
            echo "</table>";
        ?>
    </div>
</body>
</html>