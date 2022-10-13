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
                echo "<div style='border: solid 2px red'>";
                echo "<h2>".$key['nome_usuario']."</h2>";
                echo "<h2>".$key['email_usuario']."</h2>";
                echo "<h2><a href='A.php'><button onclick='".$_SESSION['id_dest'] = $key['id_usuario']."'>Conversar</button></a></h2>";
                echo "<h2><a href='#'>Ver Perfil</a></h2>";
                echo $_SESSION['id_dest'] = $key['id_usuario'];
                echo "</div>";
            }
        ?>

</body>
</html>