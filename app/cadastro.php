<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
    <script src='https://www.google.com/recaptcha/api.js?hl=pt-BR'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../assets/style/reset.css">
    <link rel="stylesheet" href="../assets/style/loginCadastrar.css">
</head>
<body>
    <header class="header-top">
        <a class="header-top__link" href="../index.php">X</a>
    </header>

    <main class="conteudo-cadastro">
        <form action="insere_usuario.php" method="post" class="form">
            <label class="form-label" for="nome">Nome</label>
            <input class="form-input" type="text" id="nome" name="nome" placeholder="boby Barbaro061" required>

            <label class="form-label" for="email">E-mail</label>
            <input class="form-input" type="email" id="email" name="email" placeholder="exemplo123@gmail.com" required>

            <label class="form-label" for="password">Senha</label>
            <input class="form-input" type="password" id="password" name="senha" required>

            <a class="form-link__login" href="login.php">Login</a>
            <input type="submit" value="cadastrar" class="enviar">
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