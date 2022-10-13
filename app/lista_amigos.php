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
    <title>Document</title>
</head>
<body>

        <?php
            foreach ($informacoes as $key) {
                $x = $key['id_usuario'];
                echo "<div style='border: solid 2px red'>";
                echo "<h2>".$key['nome_usuario']."</h2>";
                echo "<h2>".$key['email_usuario']."</h2>";
                echo "<h2><a href='Chat/chat_privado/index_chat_privado.php?id=$x'>Conversar</a></h2>";
                echo "<h2><a href='ver_perfil.php?id=$x'>Ver Perfil</a></h2>";
                echo "</div>";
            }
        ?>

</body>
</html>