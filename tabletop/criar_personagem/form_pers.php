<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Personagem</title>
</head>
<body>

    <h1>Criação de Personagem</h1>

    <?php
        session_start();
        if(isset($_SESSION['nome_pers']) && isset($_SESSION['classe'])){
            unset($_SESSION['msg']);
            echo "<a href='voltar_classe.php'>Escolher outra classe</a>";
            echo "<div>";
            echo "<h2>Nome do Personagem: ".$_SESSION['nome_pers']."</h2>";
            echo "<h2>Classe: ".$_SESSION['classe']."</h2>";
            require_once '../classes/repositorioTabletop.php'; 
            $repositorio = new RepositorioTabletopMySQL();

            $classe = $_SESSION['classe'];

            $consulta = $repositorio->PegarInfoClasse($classe);
        
            foreach ($consulta as $key) {
                if($key['ataque'] != NULL){
                    $_SESSION['ataque'] = $key['ataque'];
                }
                if($key['defesa'] != NULL){
                    $_SESSION['defesa'] = $key['defesa'];
                }
                $_SESSION['nivel_maximo'] = $key['nivel_maximo'];
                $_SESSION['nivel'] = 1;
                $_SESSION['vida_base'] = $key['vida'];
                $_SESSION['x'] = $key['ouro'];
                if($key['hab1'] != NULL){
                    $_SESSION['hab1'] = $key['hab1'];
                }
                if($key['hab2'] != NULL){
                    $_SESSION['hab2'] = $key['hab2'];
                }
                if($key['hab3'] != NULL){
                    $_SESSION['hab3'] = $key['hab3'];
                }
                if($key['hab4'] != NULL){
                    $_SESSION['hab4'] = $key['hab4'];
                }
                if($key['hab5'] != NULL){
                    $_SESSION['hab5'] = $key['hab5'];
                }
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
                if($key['eq6'] != NULL){
                    $item6 = $key['eq6'];
                }
                if($key['eq7'] != NULL){
                    $item7 = $key['eq7'];
                }
                if($key['eq8'] != NULL){
                    $item8 = $key['eq8'];
                }
            }

            echo "<h2>Nível: ".$_SESSION['nivel']."(O nível máximo que o personagem pode chegar é <u>".$_SESSION['nivel_maximo']."</u>)</h2>";
            echo "<h2>Vida: ".$_SESSION['vida_base'] + $_SESSION['nivel']." (Vida base da sua classe mais seu nível)</h2>";
            if(isset($_SESSION['ataque'])){
                echo "<h2>Bônus de Ataque: ".$_SESSION['ataque']."</h2>";
            }      
            if(isset($_SESSION['defesa'])){
                echo "<h2>Bônus de Defesa: ".$_SESSION['defesa']."</h2>";
            }
            
            echo "<h2>Principais Características:</h2>";
            echo "<ul>";
                echo "<li>".$_SESSION['hab1']."</li>";
                if(isset($_SESSION['hab2'])){
                    echo "<li>".$_SESSION['hab2']."</li>";
                }
                if(isset($_SESSION['hab3'])){
                    echo "<li>".$_SESSION['hab3']."</li>";
                }
                if(isset($_SESSION['hab4'])){
                    echo "<li>".$_SESSION['hab4']."</li>";
                }
                if(isset($_SESSION['hab5'])){
                    echo "<li>".$_SESSION['hab5']."</li>";
                }
            echo "</ul>";

            if(isset($_SESSION['dinheiro'])){
                echo "<h2>Dinheiro Inicial: ".$_SESSION['dinheiro']."</h2>";
            } else {
                ?>
                    <form action="sortear/sortear_dinheiro.php" method="post">
                        <input type="submit" value="Sortear Dinheiro Inicial" name="sortear_dinheiro">
                    </form>
                <?php
            }

            if($_SESSION['classe'] == "Ladino"){
                $_SESSION['item1'] = $item1;
                echo "<form action='selec_itens.php' method='get'>";
                    echo "<select name='arma' id='arma'>";
                        echo "<option>".$item2."</option>";
                        echo "<option>".$item3."</option>";
                    echo "</select>";
                    echo "<input type='submit' value='Escolher'>";
                echo "</form>";
                $_SESSION['item4'] = $item4;
            } else if($_SESSION['classe'] == "Mago"){
                echo "<form action='selec_itens.php' method='get'>";
                    echo "<select name='arma' id='arma'>";
                        echo "<option>".$item1."</option>";
                        echo "<option>".$item2."</option>";
                    echo "</select>";
                    echo "<input type='submit' value='Escolher'>";
                echo "</form>";
                $_SESSION['item1'] = $item3;
                if(isset($_SESSION['magia1'])){
                    echo "<h3>1ª Magia: ".$_SESSION['magia1']."</h3>";
                    if(isset($_SESSION['magia2'])){
                        echo "<h3>2ª Magia: ".$_SESSION['magia2']."</h3>";
                        if(isset($_SESSION['magia3'])){
                            echo "<h3>3ª Magia: ".$_SESSION['magia3']."</h3>";
                        } else {
                            ?>
                                <form action="sortear/sortear_magia.php" method="post">
                                    <input type="submit" value="Sortear 3ª Magia">
                                </form>
                            <?php
                        }
                    } else {
                        ?>
                        <form action="sortear/sortear_magia.php" method="post">
                            <input type="submit" value="Sortear 2ª Magia">
                        </form>
                    <?php
                    } 
                } else {
                    ?>
                        <form action='sortear/sortear_magia.php' method='post'>
                            <input type='submit' value='Sortear 1ª Magia'>
                        </form>
                    <?php
                }
            } else if($_SESSION['classe'] == "Elfo"){
                $_SESSION['item1'] = $item1;
                $_SESSION['item3'] = $item4;
                echo "<form action='selec_itens.php' method='get'>";
                    echo "<select name='arma' id='arma'>";
                        echo "<option>".$item2."</option>";
                        echo "<option>".$item3."</option>";
                    echo "</select>";
                    echo "<input type='submit' value='Escolher'>";
                echo "</form>";
                if(isset($_SESSION['magia1'])){
                    echo "<h3>Magia: ".$_SESSION['magia1']."</h3>";
                } else {
                    ?>
                        <form action="sortear/sortear_magia.php" method="post">
                            <input type="submit" value="Sortear Magia">
                        </form>
                    <?php
                }
            } else if($_SESSION['classe'] == "Halfling"){
                echo "<form action='selec_itens.php' method='get'>";
                    echo "<select name='arma' id='arma'>";
                        echo "<option>".$item1."</option>";
                        echo "<option>".$item2."</option>";
                    echo "</select>";
                    echo "<input type='submit' value='Escolher'>";
                echo "</form>";
                $_SESSION['item3'] = $item3;
            } else if($_SESSION['classe'] == "Anão"){
                echo "<form action='selec_itens.php' method='get'>";
                    echo "<select name='arma' id='arma'>";
                        echo "<option>".$item1."</option>";
                        echo "<option>".$item2."</option>";
                    echo "</select>";
                    echo "<select name='armadura' id='armadura'>";
                        echo "<option>".$item3."</option>";
                        echo "<option>".$item4."</option>";
                        echo "<option>".$item5."</option>";
                        echo "<option>".$item6."</option>";
                    echo "</select>";
                    echo "<input type='submit' value='Escolher'>";
                echo "</form>";
            } else {
                if($_SESSION['classe'] == "Clérigo"){
                    $_SESSION['magia1'] = "curar";
                    $_SESSION['magia2'] = "benção";
                    echo "<h3>1ª Magia: ".$_SESSION['magia1']." (3 usos por aventura)</h3>";
                    echo "<h3>2ª Magia: ".$_SESSION['magia2']." (3 usos por aventura)</h3>";
                }
                $_SESSION['item1'] = $item1;
                    echo "<form action='selec_itens.php' method='get'>";
                        echo "<select name='arma' id='arma'>";
                            echo "<option>".$item2."</option>";
                            echo "<option>".$item3."</option>";
                                if(isset($item4)){
                                        echo "<option>".$item4."</option>";
                                }
                                if(isset($item5)){
                                        echo "<option>".$item5."</option>";
                                }
                                if(isset($item6)){
                                    echo "<option>".$item6."</option>";
                            }
                            echo "<input type='submit' value='Escolher'>";
                        echo "</select>";
                    echo "</form>";
            }

            echo "<h2>Itens Iniciais</h2>";
            echo "<ul>";
            if(isset($_SESSION['item1'])){
                echo "<li>".$_SESSION['item1']."</li>";
            }
            if(isset($_SESSION['item2'])){
                echo "<li>".$_SESSION['item2']."</li>";
            }
            if(isset($_SESSION['item3'])){
                echo "<li>".$_SESSION['item3']."</li>";
            }
            if(isset($_SESSION['item4'])){
                echo "<li>".$_SESSION['item4']."</li>";
            }
            if(isset($_SESSION['item5'])){
                echo "<li>".$_SESSION['item5']."</li>";
            }
            echo "</ul>";

            if(isset($_SESSION['nome_pers'])){
                if(isset($_SESSION['classe'])){
                    if(isset($_SESSION['nivel'])){
                        if(isset($_SESSION['vida_base'])){
                            if(isset($_SESSION['dinheiro'])){
                                if($_SESSION['classe'] == "Mago" || $_SESSION['classe'] == "Elfo" || $_SESSION['classe'] == "Clérigo"){
                                    if(isset($_SESSION['magia1'])){
                                        if($_SESSION['classe'] == "Mago"){
                                            if(isset($_SESSION['magia2'])){
                                                if(isset($_SESSION['magia3'])){
                                                    echo "<form action='cria_personagem.php' method='post'>";
                                                        echo "<input type='submit' value='CRIAR'>";
                                                    echo "</form>";
                                                    echo "</div>";
                                                }
                                            }
                                        } else {
                                            if(isset($_SESSION['item2'])){
                                                echo "<form action='cria_personagem.php' method='post'>";
                                                    echo "<input type='submit' value='CRIAR'>";
                                                echo "</form>";
                                                echo "</div>";
                                            }
                                        }
                                    }
                                } else {
                                    if(isset($_SESSION['item2'])){
                                        echo "<form action='cria_personagem.php' method='post'>";
                                            echo "<input type='submit' value='CRIAR'>";
                                        echo "</form>";
                                        echo "</div>";
                                    }
                                }
                            }
                        }
                    }
                }
            }
            
        } else {
            ?>  
                <form action="defini_classe.php" method="post">
                    <label for="nome">Nome do Personagem</label>  
                    <input type="text" id="nome" name="nome" required>
                    <label for="classe">Classe</label>
                    <select name="classe" id="classe">
                        <option value="Guerreiro" selected>Guerreiro</option>
                        <option value="Clérigo" >Clérigo</option>
                        <option value="Ladino" >Ladino</option>
                        <option value="Mago" >Mago</option>
                        <option value="Bárbaro" >Bárbaro</option>
                        <option value="Elfo">Elfo</option>
                        <option value="Anão" >Anão</option>
                        <option value="Halfling" >Halfling</option>
                    </select>
                    <input type="submit" value="Criar">
                    <?php
                        if(isset($_SESSION['msg'])){
                            echo "<h3 style='color: red'>".$_SESSION['msg']."</h3>";
                        }
                    ?>
                </form>
            <?php
        }
        
    ?>
 
    

</body>
</html>