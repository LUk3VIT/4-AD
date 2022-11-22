<!DOCTYPE html>
<html lang="pt-br">
<head>  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificação de Email</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../assets/style/reset.css">
    <link rel="stylesheet" href="../assets/style/loginCadastrar.css">
</head>
<body>
    <header class="header-top">
        <a class="header-top__link" href="../index.php">X</a>
    </header>
    <main class="conteudo-login">
        <form class="form" action="insere_usuario.php" method="POST">
            <label class="form-label" for="verificar">Código de Verificação</label>
            <input class="form-input" type="text" name="verificar" id="verificar">
            <input class="enviar" type="submit" value="Enviar">
        </form>
    </main>
    <footer class="foo-bot">
        <div class="foo-caixa">
            <img class="foo-img" src="../assets/img/logo.png" alt="Logo de Unending Darkness">
            <p class="copyright">&copy; Copyright Unending darkness - 2019</p>
        </div>
    </footer>
</body>
</html>