<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Personagem</title>
</head>
<body>

    <h1>Criação de Personagem</h1>

    <form action="criar_pers.php" method="post">
        <label for="nome">Nome do Personagem</label>
        <input type="text" id="nome" name="nome" required>
        <label for="classe">Classe</label>
        <select name="classe" id="classe">
            <option value="guerreiro" selected>Guerreiro</option>
            <option value="clérigo" >Clérigo</option>
            <option value="ladino" >Ladino</option>
            <option value="mago" >Mago</option>
            <option value="bárbaro" >Bárbaro</option>
            <option value="elfo">Elfo</option>
            <option value="anão" >Anão</option>
            <option value="halfling" >Halfling</option>
        </select>
        <input type="submit" value="Criar">
    </form>

</body>
</html>