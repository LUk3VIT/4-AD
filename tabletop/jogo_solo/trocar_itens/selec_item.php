<?php
echo "<h2><a href='ver_inventarios.php'>Voltar aos Inventários</a></h2>";

session_start();
require_once '../../classes/repositorioTabletop.php'; 
$repositorio = new RepositorioTabletopMySQL(); 

$nome = $_POST['nome'];
$_SESSION['item'] = $item = $_POST['item'];

echo "<h1>Item Selecionado para troca: <div style='border: solid 2px red'>".$item."</div></h1>";
echo "<br>";

echo "<h2>Troca de um Item por outro</h2>";
echo "<h3><a href='troca_justa.php'>Troca Igualitária</a></h3>";

echo "<h2>Troca Direta<h2>";
echo "<h3>Escolha um dos três personagens abaixo para dar o item selecionado</h3>";
$remetente = $repositorio->PegarIdRemetente($nome);
foreach ($remetente as $key) {
    $_SESSION['id_remetente'] = $id_remetente = $key['id_pers'];
    if($_SESSION['personagem1'] == $id_remetente){
        $id = $_SESSION['personagem2'];
        $personagem = $repositorio->MostrarPersonagem($id);
        foreach ($personagem as $key) {
            $destinatario = $key['nome'];
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
                echo "<h2><a href='trocar_itens.php?id=$destinatario'>Dar Item</a></h2>";
            }
        }
        $id = $_SESSION['personagem3'];
        $personagem = $repositorio->MostrarPersonagem($id);
        foreach ($personagem as $key) {
            $destinatario = $key['nome'];
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
                echo "<h2><a href='trocar_itens.php?id=$destinatario'>Dar Item</a></h2>";
            }
        }
        $id = $_SESSION['personagem4'];
        $personagem = $repositorio->MostrarPersonagem($id);
        foreach ($personagem as $key) {
            $destinatario = $key['nome'];
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
                echo "<h2><a href='trocar_itens.php?id=$destinatario'>Dar Item</a></h2>";
            }
        }
    } else if($_SESSION['personagem2'] == $id_remetente){
        $id = $_SESSION['personagem1'];
        $personagem = $repositorio->MostrarPersonagem($id);
        foreach ($personagem as $key) {
            $destinatario = $key['nome'];
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
                echo "<h2><a href='trocar_itens.php?id=$destinatario'>Dar Item</a></h2>";
            }
        }
        $id = $_SESSION['personagem3'];
        $personagem = $repositorio->MostrarPersonagem($id);
        foreach ($personagem as $key) {
            $destinatario = $key['nome'];
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
                echo "<h2><a href='trocar_itens.php?id=$destinatario'>Dar Item</a></h2>";
            }
        }
        $id = $_SESSION['personagem4'];
        $personagem = $repositorio->MostrarPersonagem($id);
        foreach ($personagem as $key) {
            $destinatario = $key['nome'];
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
                echo "<h2><a href='trocar_itens.php?id=$destinatario'>Dar Item</a></h2>";
            }
        }
    } else if($_SESSION['personagem3'] == $id_remetente){
        $id = $_SESSION['personagem1'];
        $personagem = $repositorio->MostrarPersonagem($id);
        foreach ($personagem as $key) {
            $destinatario = $key['nome'];
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
                echo "<h2><a href='trocar_itens.php?id=$destinatario'>Dar Item</a></h2>";
            }
        }
        $id = $_SESSION['personagem2'];
        $personagem = $repositorio->MostrarPersonagem($id);
        foreach ($personagem as $key) {
            $destinatario = $key['nome'];
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
                echo "<h2><a href='trocar_itens.php?id=$destinatario'>Dar Item</a></h2>";
            }
        }
        $id = $_SESSION['personagem4'];
        $personagem = $repositorio->MostrarPersonagem($id);
        foreach ($personagem as $key) {
            $destinatario = $key['nome'];
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
                echo "<h2><a href='trocar_itens.php?id=$destinatario'>Dar Item</a></h2>";
            }
        }
    } else if($_SESSION['personagem4'] == $id_remetente){
        $id = $_SESSION['personagem1'];
        $personagem = $repositorio->MostrarPersonagem($id);
        foreach ($personagem as $key) {
            $destinatario = $key['nome'];
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
                echo "<h2><a href='trocar_itens.php?id=$destinatario'>Dar Item</a></h2>";
            }
        }
        $id = $_SESSION['personagem2'];
        $personagem = $repositorio->MostrarPersonagem($id);
        foreach ($personagem as $key) {
            $destinatario = $key['nome'];
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
                echo "<h2><a href='trocar_itens.php?id=$destinatario'>Dar Item</a></h2>";
            }
        }
        $id = $_SESSION['personagem3'];
        $personagem = $repositorio->MostrarPersonagem($id);
        foreach ($personagem as $key) {
            $destinatario = $key['nome'];
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
                echo "<h2><a href='trocar_itens.php?id=$destinatario'>Dar Item</a></h2>";
            }
        }
    }
}

?>