<?php
echo "<h2 class='rykelmy__trocar'><a class='rykelmy__entrar' href='ver_inventarios.php'>Voltar aos Inventários</a></h2>";

session_start();
require_once '../../classes/repositorioTabletop.php'; 
$repositorio = new RepositorioTabletopMySQL(); 

$nome = $_POST['nome'];
$_SESSION['item'] = $item = $_POST['item'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../../../assets/style/reset.css">
    <link rel="stylesheet" href="../../../assets/style/tabletopJogo.css">
</head>
<body>
    
<?php
echo "<h1 class='selecao__prepa'>Item Selecionado para troca:</h1>";
echo "<div class='iten__troca'>".$item."</div>";
echo "<br>";

echo "<h2 class='selecap__prepa__segundario'>Troca de um Item por outro</h2>";
echo "<h3 class='botao__troca__h3'><a class='botao__troca__div' href='troca_justa.php'>Troca Igualitária</a></h3>";

echo "<h2 class='selecap__prepa__segundario'>Troca Direta<h2>";
echo "<h3 class='selecap__prepa__segundario'>Escolha um dos três personagens abaixo para dar o item selecionado</h3>";



$remetente = $repositorio->PegarIdRemetente($nome);
foreach ($remetente as $key) {
    $_SESSION['id_remetente'] = $id_remetente = $key['id_pers'];
    if($_SESSION['personagem1'] == $id_remetente){
        $id = $_SESSION['personagem2'];
        $personagem = $repositorio->MostrarPersonagem($id);
        foreach ($personagem as $key) {
            $destinatario = $key['nome'];
            $img = $key['img'];
            echo "<div class='mostrar__pers__dar'>";
                echo "<img src='../../$img'>";
                echo "<h2>Nome: ".$key['nome']."</h2>";
                echo "<h2>Classe: ".$key['classe']."</h2>";
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
                echo "<h2><a class='botao__troca' href='trocar_itens.php?id=$destinatario'>Dar Item</a></h2>";
            }
            echo "</div>";
        }
        $id = $_SESSION['personagem3'];
        $personagem = $repositorio->MostrarPersonagem($id);
        foreach ($personagem as $key) {
            $destinatario = $key['nome'];
            $img = $key['img'];
            echo "<div class='mostrar__pers__dar'>";
                echo "<img src='../../$img'>";
                echo "<h2>Nome: ".$key['nome']."</h2>";
                echo "<h2>Classe: ".$key['classe']."</h2>";
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
                echo "<h2><a class='botao__troca' href='trocar_itens.php?id=$destinatario'>Dar Item</a></h2>";
            }
            echo "</div>";
        }
        $id = $_SESSION['personagem4'];
        $personagem = $repositorio->MostrarPersonagem($id);
        foreach ($personagem as $key) {
            $destinatario = $key['nome'];
            $img = $key['img'];
            echo "<div class='mostrar__pers__dar'>";
                echo "<img src='../../$img'>";
                echo "<h2>Nome: ".$key['nome']."</h2>";
                echo "<h2>Classe: ".$key['classe']."</h2>";
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
                echo "<h2><a class='botao__troca' href='trocar_itens.php?id=$destinatario'>Dar Item</a></h2>";
            }
            echo "</div>";
        }
    } else if($_SESSION['personagem2'] == $id_remetente){
        $id = $_SESSION['personagem1'];
        $personagem = $repositorio->MostrarPersonagem($id);
        foreach ($personagem as $key) {
            $destinatario = $key['nome'];
            $img = $key['img'];
            echo "<div class='mostrar__pers__dar'>";
                echo "<img src='../../$img'>";
                echo "<h2>Nome: ".$key['nome']."</h2>";
                echo "<h2>Classe: ".$key['classe']."</h2>";
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
                echo "<h2><a class='botao__troca' href='trocar_itens.php?id=$destinatario'>Dar Item</a></h2>";
            }
            echo "</div>";
        }
        $id = $_SESSION['personagem3'];
        $personagem = $repositorio->MostrarPersonagem($id);
        foreach ($personagem as $key) {
            $destinatario = $key['nome'];
            $img = $key['img'];
            echo "<div class='mostrar__pers__dar'>";
                echo "<img src='../../$img'>";
                echo "<h2>Nome: ".$key['nome']."</h2>";
                echo "<h2>Classe: ".$key['classe']."</h2>";
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
                echo "<h2><a class='botao__troca' href='trocar_itens.php?id=$destinatario'>Dar Item</a></h2>";
            }
            echo "</div>";
        }
        $id = $_SESSION['personagem4'];
        $personagem = $repositorio->MostrarPersonagem($id);
        foreach ($personagem as $key) {
            $destinatario = $key['nome'];
            $img = $key['img'];
            echo "<div class='mostrar__pers__dar'>";
                echo "<img src='../../$img'>";
                echo "<h2>Nome: ".$key['nome']."</h2>";
                echo "<h2>Classe: ".$key['classe']."</h2>";
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
                echo "<h2><a class='botao__troca' href='trocar_itens.php?id=$destinatario'>Dar Item</a></h2>";
            }
            echo "</div>";
        }
    } else if($_SESSION['personagem3'] == $id_remetente){
        $id = $_SESSION['personagem1'];
        $personagem = $repositorio->MostrarPersonagem($id);
        foreach ($personagem as $key) {
            $destinatario = $key['nome'];
            $img = $key['img'];
            echo "<div class='mostrar__pers__dar'>";
                echo "<img src='../../$img'>";
                echo "<h2>Nome: ".$key['nome']."</h2>";
                echo "<h2>Classe: ".$key['classe']."</h2>";
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
                echo "<h2><a class='botao__troca' href='trocar_itens.php?id=$destinatario'>Dar Item</a></h2>";
            }
            echo "</div>";
        }
        $id = $_SESSION['personagem2'];
        $personagem = $repositorio->MostrarPersonagem($id);
        foreach ($personagem as $key) {
            $destinatario = $key['nome'];
            $img = $key['img'];
            echo "<div class='mostrar__pers__dar'>";
                echo "<img src='../../$img'>";
                echo "<h2>Nome: ".$key['nome']."</h2>";
                echo "<h2>Classe: ".$key['classe']."</h2>";
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
                echo "<h2><a class='botao__troca' href='trocar_itens.php?id=$destinatario'>Dar Item</a></h2>";
            }
            echo "</div>";
        }
        $id = $_SESSION['personagem4'];
        $personagem = $repositorio->MostrarPersonagem($id);
        foreach ($personagem as $key) {
            $destinatario = $key['nome'];
            $img = $key['img'];
            echo "<div class='mostrar__pers__dar'>";
                echo "<img src='../../$img'>";
                echo "<h2>Nome: ".$key['nome']."</h2>";
                echo "<h2>Classe: ".$key['classe']."</h2>";
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
                echo "<h2><a class='botao__troca' href='trocar_itens.php?id=$destinatario'>Dar Item</a></h2>";
            }
            echo "</div>";
        }
    } else if($_SESSION['personagem4'] == $id_remetente){
        $id = $_SESSION['personagem1'];
        $personagem = $repositorio->MostrarPersonagem($id);
        foreach ($personagem as $key) {
            $destinatario = $key['nome'];
            $img = $key['img'];
            echo "<div class='mostrar__pers__dar'>";
                echo "<img src='../../$img'>";
                echo "<h2>Nome: ".$key['nome']."</h2>";
                echo "<h2>Classe: ".$key['classe']."</h2>";
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
                echo "<h2><a class='botao__troca' href='trocar_itens.php?id=$destinatario'>Dar Item</a></h2>";
            }
            echo "</div>";
        }
        $id = $_SESSION['personagem2'];
        $personagem = $repositorio->MostrarPersonagem($id);
        foreach ($personagem as $key) {
            $destinatario = $key['nome'];
            $img = $key['img'];
            echo "<div class='mostrar__pers__dar'>";
                echo "<img src='../../$img'>";
                echo "<h2>Nome: ".$key['nome']."</h2>";
                echo "<h2>Classe: ".$key['classe']."</h2>";
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
                echo "<h2><a class='botao__troca' href='trocar_itens.php?id=$destinatario'>Dar Item</a></h2>";
            }
            echo "</div>";
        }
        $id = $_SESSION['personagem3'];
        $personagem = $repositorio->MostrarPersonagem($id);
        foreach ($personagem as $key) {
            $destinatario = $key['nome'];
            $img = $key['img'];
            echo "<div class='mostrar__pers__dar'>";
                echo "<img src='../../$img'>";
                echo "<h2>Nome: ".$key['nome']."</h2>";
                echo "<h2>Classe: ".$key['classe']."</h2>";
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
                echo "<h2><a class='botao__troca' href='trocar_itens.php?id=$destinatario'>Dar Item</a></h2>";
            }
            echo "</div>";
        }
    }
}



?>

</body>
</html>