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
 
    <form action="defini_classe.php" method="post">
        <label for="nome">Nome do Personagem</label> 
        <input type="text" id="nome" name="nome" required>
        <label for="classe">Classe</label>
        <select name="classe" id="classe">
            <option value="Guerreiro" selected>Guerreiro</option>
            <option value="Clérigo" >Clérigo</option>
            <option value="Ladino" >Ladino</option>
            <option value="Mago" >Mago</option>
            <option value="Bárbaro" >Bárbaro</option>
            <option value="Elfo">Elfo</option>
            <option value="Anão" >Anão</option>
            <option value="Halfling" >Halfling</option>
        </select>
        <input type="submit" value="Criar">
    </form>

</body>
</html>