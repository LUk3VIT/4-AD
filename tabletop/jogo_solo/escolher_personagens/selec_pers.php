<?php

    session_start();
    require_once '../../classes/repositorioTabletop.php'; 
    $repositorio = new RepositorioTabletopMySQL();
    $id = $_SESSION['id_usuario'];
    $consulta = $repositorio->MostrarPersonagens($id);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selecione seus 4 personagens</title>
    <link rel="stylesheet" href="../../../assets/style/reset.css">
    <link rel="stylesheet" href="../../../assets/style/tabletopJogo.css">
</head>
<body>
    <?php

        $x = 0;
        foreach ($consulta as $key) {
            $nome = $key['nome'];
            $x = $x + 1;
        }
        if($x < 4){
            foreach ($consulta as $key) {
                $id = $key['id_pers'];
                if(isset($_SESSION['personagem1']) && $_SESSION['personagem1'] == $id){
                    $key['nome'];
                    $key['classe'];
                    $key['nivel'];
                } else if(isset($_SESSION['personagem2']) && $_SESSION['personagem2'] == $id){
                    $key['nome'];
                    $key['classe'];
                    $key['nivel'];
                } else if(isset($_SESSION['personagem3']) && $_SESSION['personagem3'] == $id){
                    $key['nome'];
                    $key['classe'];
                    $key['nivel'];
                } else if(isset($_SESSION['personagem4']) && $_SESSION['personagem4'] == $id){
                    $key['nome'];
                    $key['classe'];
                    $key['nivel'];
                } else {
                    echo "<div class='mostrar__pers'>"; 
                        $img = $key['img'];
                        echo "<img class='mostrar__pers__img' src='../../$img'>";
                        echo "<label for='selecionar'><h2>Nome: ".$key['nome']."</h2>";
                        echo "<h2>Classe: ".$key['classe']."</h2>";
                        echo "<h2>Nível: ".$key['nivel']."</h2></label>";
                        echo "<h2><a class='mostrar__pers__info' href='redirecionar_ver_personagem.php?ver=$id'>Ver mais Informações</a></h2>";
                        echo "<h2><a class='mostrar__pers__escolher' href='escolher_personagem.php?id=$id'>Escolher</a></h1>";
                    echo "</div>";
                }                        
            }

            echo "<h1 class='selecao'>Personagens Selecionados:</h1>";
            echo "<div class='exbir__personagens'>";
                if(isset($_SESSION['personagem1'])){
                $id = $_SESSION['personagem1'];
                $personagem = $repositorio->MostrarPersonagem($id);
                foreach ($personagem as $key) {
                    $recusar = true;
                    $x = $key['id_pers'];
                    echo "<div class='mostrar__pers'>";
                        $img = $key['img'];
                        echo "<img src='../../$img'>";
                        echo "<h2>Nome: ".$key['nome']."</h2>";
                        echo "<h2>Classe: ".$key['classe']."</h2>";
                        echo "<h2>Nível: ".$key['nivel']."</h2>";
                        echo "<h2><a class='mostrar__pers__info' href='redirecionar_ver_personagem.php?ver=$id'>Ver mais Informações</a></h2>";
                        echo "<h2><a class='tirar__perso' href='redirecionar_ver_personagem.php?tirar=$id'>Tirar</a></h2>";
                    echo "</div>";
                }
                }
                if(isset($_SESSION['personagem2'])){
                    $id = $_SESSION['personagem2'];
                    $personagem = $repositorio->MostrarPersonagem($id);
                    foreach ($personagem as $key) {
                        $recusar = true;
                        $x = $key['id_pers'];
                        echo "<div class='mostrar__pers'>";
                            $img = $key['img'];
                            echo "<img src='../../$img'>";
                            echo "<h2>Nome: ".$key['nome']."</h2>";
                            echo "<h2>Classe: ".$key['classe']."</h2>";
                            echo "<h2>Nível: ".$key['nivel']."</h2>";
                            echo "<h2><a class='mostrar__pers__info' href='redirecionar_ver_personagem.php?ver=$id'>Ver mais Informações</a></h2>";
                            echo "<h2><a class='tirar__perso' href='redirecionar_ver_personagem.php?tirar=$id'>Tirar</a></h2>";
                        echo "</div>";
                    }
                }
                if(isset($_SESSION['personagem3'])){
                    $id = $_SESSION['personagem3'];
                    $personagem = $repositorio->MostrarPersonagem($id);
                    foreach ($personagem as $key) {
                        $recusar = true;
                        $x = $key['id_pers'];
                        echo "<div class='mostrar__pers'>";
                            $img = $key['img'];
                            echo "<img src='../../$img'>";
                            echo "<h2>Nome: ".$key['nome']."</h2>";
                            echo "<h2>Classe: ".$key['classe']."</h2>";
                            echo "<h2>Nível: ".$key['nivel']."</h2>";
                            echo "<h2><a class='mostrar__pers__info' href='redirecionar_ver_personagem.php?ver=$id'>Ver mais Informações</a></h2>";
                            echo "<h2><a class='tirar__perso' href='redirecionar_ver_personagem.php?tirar=$id'>Tirar</a></h2>";
                        echo "</div>";
                    }
                }
                if(isset($_SESSION['personagem4'])){
                    $id = $_SESSION['personagem4'];
                    $personagem = $repositorio->MostrarPersonagem($id);
                    foreach ($personagem as $key) {
                        $recusar = true;
                        $x = $key['id_pers'];
                        echo "<div class='mostrar__pers'>";
                            $img = $key['img'];
                            echo "<img src='../../$img'>";
                            echo "<h2>Nome: ".$key['nome']."</h2>";
                            echo "<h2>Classe: ".$key['classe']."</h2>";
                            echo "<h2>Nível: ".$key['nivel']."</h2>";
                            echo "<h2><a class='mostrar__pers__info' href='redirecionar_ver_personagem.php?ver=$id'>Ver mais Informações</a></h2>";
                            echo "<h2><a class='tirar__perso' href='redirecionar_ver_personagem.php?tirar=$id'>Tirar</a></h2>";
                        echo "</div>";
                    }
                }
            echo "</div>";

            echo "<h1 class='selecao__aviso'>Você não tem personagens suficientes para iniciar uma aventura sozinho, crie mais personagens clicando no botão abaixo:<h1>";
            echo "<h2 class='rykelmy__personagem'><a class='rykelmy__personagem__link' href='../../criar_personagem/form_pers.php'>Criar mais Personagens</a></h2>";
        } else {
            echo "<h1 class='selecao' >Personagens Selecionados:</h1>";
            echo "<div class='exbir__personagens'>";
                if(isset($_SESSION['personagem1'])){
                $id = $_SESSION['personagem1'];
                $personagem = $repositorio->MostrarPersonagem($id);
                foreach ($personagem as $key) {
                    $recusar = true;
                    $x = $key['id_pers'];
                        echo "<div class='mostrar__pers'>";
                        $img = $key['img'];
                        echo "<img src='../../$img'>";
                        echo "<h2>Nome: ".$key['nome']."</h2>";
                        echo "<h2>Classe: ".$key['classe']."</h2>";
                        echo "<h2>Nível: ".$key['nivel']."</h2>";
                        echo "<h2><a class='mostrar__pers__info' href='redirecionar_ver_personagem.php?ver=$id'>Ver mais Informações</a></h2>";
                        echo "<h2><a class='tirar__perso' href='redirecionar_ver_personagem.php?tirar=$id'>Tirar</a></h2>";
                    echo "</div>";
                }
                }
                if(isset($_SESSION['personagem2'])){
                    $id = $_SESSION['personagem2'];
                    $personagem = $repositorio->MostrarPersonagem($id);
                    foreach ($personagem as $key) {
                        $recusar = true;
                        $x = $key['id_pers'];
                        echo "<div class='mostrar__pers'>";
                            $img = $key['img'];
                            echo "<img src='../../$img'>";
                            echo "<h2>Nome: ".$key['nome']."</h2>";
                            echo "<h2>Classe: ".$key['classe']."</h2>";
                            echo "<h2>Nível: ".$key['nivel']."</h2>";
                            echo "<h2><a class='mostrar__pers__info' href='redirecionar_ver_personagem.php?ver=$id'>Ver mais Informações</a></h2>";
                            echo "<h2><a class='tirar__perso' href='redirecionar_ver_personagem.php?tirar=$id'>Tirar</a></h2>";
                        echo "</div>";
                    }
                }
                if(isset($_SESSION['personagem3'])){
                    $id = $_SESSION['personagem3'];
                    $personagem = $repositorio->MostrarPersonagem($id);
                    foreach ($personagem as $key) {
                        $recusar = true;
                        $x = $key['id_pers'];
                        echo "<div class='mostrar__pers'>";
                            $img = $key['img'];
                            echo "<img src='../../$img'>";
                            echo "<h2>Nome: ".$key['nome']."</h2>";
                            echo "<h2>Classe: ".$key['classe']."</h2>";
                            echo "<h2>Nível: ".$key['nivel']."</h2>";
                            echo "<h2><a class='mostrar__pers__info' href='redirecionar_ver_personagem.php?ver=$id'>Ver mais Informações</a></h2>";
                            echo "<h2><a class='tirar__perso' href='redirecionar_ver_personagem.php?tirar=$id'>Tirar</a></h2>";
                        echo "</div>";
                    }
                }
                if(isset($_SESSION['personagem4'])){
                    $id = $_SESSION['personagem4'];
                    $personagem = $repositorio->MostrarPersonagem($id);
                    foreach ($personagem as $key) {
                        $recusar = true;
                        $x = $key['id_pers'];
                        echo "<div class='mostrar__pers'>";
                            $img = $key['img'];
                            echo "<img src='../../$img'>";
                            echo "<h2>Nome: ".$key['nome']."</h2>";
                            echo "<h2>Classe: ".$key['classe']."</h2>";
                            echo "<h2>Nível: ".$key['nivel']."</h2>";
                            echo "<h2><a class='mostrar__pers__info' href='redirecionar_ver_personagem.php?ver=$id'>Ver mais Informações</a></h2>";
                            echo "<h2><a class='tirar__perso' href='redirecionar_ver_personagem.php?tirar=$id'>Tirar</a></h2>";
                        echo "</div>";
                    }
                }
                echo "</div>";
            if(isset($_SESSION['personagem1']) && isset($_SESSION['personagem2']) && isset($_SESSION['personagem3']) && isset($_SESSION['personagem4'])){
                echo "<h1 class='selecao__aviso'>Número máximo de personagens selecionados alcançado!!!</h1>";
                echo "<h1 class='sala'><a  class='sala__preparacao' href='../index_jogo_solo.php'>Ir para sala de preparação</a></h1>";
            } else {
                foreach ($consulta as $key) {
                    $id = $key['id_pers'];
                    if(isset($_SESSION['personagem1']) && $_SESSION['personagem1'] == $id){
                        $key['nome'];
                        $key['classe'];
                        $key['nivel'];
                    } else if(isset($_SESSION['personagem2']) && $_SESSION['personagem2'] == $id){
                        $key['nome'];
                        $key['classe'];
                        $key['nivel'];
                    } else if(isset($_SESSION['personagem3']) && $_SESSION['personagem3'] == $id){
                        $key['nome'];
                        $key['classe'];
                        $key['nivel'];
                    } else if(isset($_SESSION['personagem4']) && $_SESSION['personagem4'] == $id){
                        $key['nome'];
                        $key['classe'];
                        $key['nivel'];
                    } else {
                        echo "<div class='mostrar__pers'>"; 
                            $img = $key['img'];
                            echo "<img src='../../$img'>";
                            echo "<label for='selecionar'><h2>Nome: ".$key['nome']."</ver2>";
                            echo "<h2>Classe: ".$key['classe']."</h2>";
                            echo "<h2>Nível: ".$key['nivel']."</h2></label>";
                            echo "<h2><a class='mostrar__pers__info' href='redirecionar_ver_personagem.php?ver=$id'>Ver mais Informações</a></h2>";
                            echo "<h2><a class='mostrar__pers__escolher' href='escolher_personagem.php?id=$id'>Escolher</a></h1>";
                        echo "</div>";
                    }                        
                }
            }
            echo "<h2><a class='rykelmy__personagem' href='../../criar_personagem/form_pers.php'>Criar mais Personagens</a></h2>";
        }

    ?>
</body>
</html>