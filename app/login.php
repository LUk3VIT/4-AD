<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../assets/style/reset.css">
    <link rel="stylesheet" href="../assets/style/loginCadastrar.css">
</head>
<body>
    <header class="header-top">
        <a class="header-top__link" href="../index.html">X</a>
    </header>

    <main class="conteudo-login">
        <form action="login_usuario.php" method="post" class="form">
            <label class="form-label" for="nome">Nome</label>
            <input class="form-input" type="text" id="nome" required>

            <label class="form-label" for="password">Senha</label>
            <input class="form-input" type="password" id="password" required>

            <a class="form-link__cadastra" href="../app/cadastro.php">Cadastrar</a>
            <a class="form-link__esqueceu" href="">Esqueceu sua senha?</a>
            <input type="submit" value="Login" class="enviar">
        </form>
    </main>

    <footer class="foo-bot">
        <img class="foo-img" src="../assets/img/logo.png" alt="Logo de Infinity darkness">
        <p class="copyright">&copy; Copyright Infinity darkness - 2019</p>
    </footer>
</body>
</html>