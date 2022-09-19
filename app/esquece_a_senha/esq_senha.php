<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esqueceu a Senha</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../assets/style/loginCadastrar.css">
    <link rel="stylesheet" href="../assets/style/loginCadastrar.css">
</head> 
<body>

    <header class="header-top">
        <a class="header-top__link" href="../index.php">X</a>
    </header>

    <main class="conteudo-login">
        <form action="env_email_senha.php" method="post" class="form">
            <label class="form-label" for="nome">Email</label>
            <input class="form-input" type="email" id="email" name="email" required>

            <input type="submit" value="Login" class="enviar">
        </form>
    </main>

    <footer class="foo-bot">.
        <div class="foo-caixa">
                <p class="copyright">&copy; Copyright Unending darkness - 2022</p>
                <img class="foo-img" src="/assets/img/logo.png" alt="Logo de Unending Darkness">
        </div>
    </footer>
</body>
</html>