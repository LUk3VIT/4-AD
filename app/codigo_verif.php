<!DOCTYPE html>
<html lang="pt-br">
<head>  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificação de Email</title>
</head>
<body>
    <form action="insere_usuario.php" method="POST">
        <label for="verificar">Código de Verificação(Foi enviado ao email digitado anteriormente)</label>
        <input type="text" name="verificar" id="verificar">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>