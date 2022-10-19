<?php

session_start();
if(isset($_SESSION['id_usuario'])){

} else {
    header('Location: login.php');
}
require_once '../classes/repositorioUsuario.php';
$repositorio = new RepositorioUsuariosMySQL();
$id_usuario = $_SESSION['id_usuario'];
$informacoes = $repositorio->ListarUsuarios($id_usuario);

?>
<!DOCTYPE html> 
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de amigos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../assets/style/reset.css">
    <link rel="stylesheet" href="../assets/style/listaAmigos.css">

</head> 
<body>

    <div class="caixa">
        <button class="caixa__botao"><a href="perfil.php" class="caixa__botao__link">Voltar</a></button>
    </div>

    <div class="lista">
        <?php
            foreach ($informacoes as $key) {
                $x = $key['id_usuario'];
                $id_usuario = $x;
                $verificar = $repositorio->VerificarImagem($id_usuario);
                
                
                echo '<div class="lista__caixa">';
                if($verificar > 0){
                    $setar = $repositorio->SetarImagemUsuario($id_usuario);
                    echo "<div class='caixa__img'>";
                    echo "<img src=".$setar.">";
                    echo "</div>";
                }
                $x = $key['id_usuario'];
                echo "<h2 class='nome__usuario'>".$key['nome_usuario']."</h2>";
                echo "<h2 class='link'><a class='link_a' href='Chat/chat_privado/index_chat_privado.php?id=$x'>Conversar</a></h2>";
                echo "<h2 class='link'><a class='link_a' href='redirecionar.php?id=$x'>Ver Perfil</a></h2>";
                echo "</div>";
            }
        ?>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>