<?php

session_start();
require_once '../classes/repositorioUsuario.php';
$repositorio = new RepositorioUsuariosMySQL();
$id_usuario = $_SESSION['id_amg'];

$informacoes = $repositorio->ListarDados($id_usuario);
$img = $repositorio->SetarImagemUsuario($id_usuario);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>perfil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../assets/style/reset.css">
    <link rel="stylesheet" href="../assets/style/home.css">
    <link rel="stylesheet" href="../assets/style/listaAmigos.css">
    <link rel="stylesheet" href="../assets/style/perfil.css">
</head>
<body>  
    <main class="meio">
            <div class="caixa ">
                <button class="caixa__botao"><a href="perfil.php" class="caixa__botao__link">Voltar</a></button>
            </div>
            <div class="caixa__foto__outroUsuario">
                <img class="caixa__foto__perfil" src="<?php echo $img ?>" alt="foto de perfil">
            </div>        
            <?php
            $dados = array_shift($informacoes);
            echo "<div class='caixa__outroUsuario'>";
            echo "<p class='informacao__label'>Nick</p>";
            echo "<p class='informacao__input'>".$dados->getNickUsuario()."</p>";
            echo "<p class='informacao__label'>Nome</p>";
            echo "<p class='informacao__input'>".$dados->getNomeUsuario()."</p>";
            echo "<p class='informacao__label'>Email</p>";
            echo "<p class='informacao__input'>".$dados->getEmailUsuario()."</p>";
            echo "<p class='informacao__label'>Bio</p>";
            echo "<p class='informacao__input__bio'>".$dados->getBioUsuario()."</p>";
            echo "</div>";

            $id_amg = $_SESSION['id_amg'];
            $id_usuario = $_SESSION['id_usuario'];

            $numeroLinhas = $repositorio->VerificarAmgUsuario($id_usuario,$id_amg);
            if($numeroLinhas > 0){
                echo "<h1>Já é seu amigo :)</h1>";
            } else {
                echo "<h2><a href='solic_amz.php'>Mandar Solicitação de Amizade :)</a></h2>";
            }
        ?>
    </main>
</body>
</html>
<?php

?>