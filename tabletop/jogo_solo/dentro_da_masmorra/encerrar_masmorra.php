<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../../assets/style/style.css">
</head>
<body>
    <div>
        <h1>Fim</h1>
        
        <a href="../../../index.php">sair</a>
    </div>
</body>
</html>
=======
<?php

session_start();
require_once '../../classes/repositorioTabletop.php'; 
$repositorio = new RepositorioTabletopMySQL();

echo "Masmorra Finalizada";
echo "<br>";
echo "<a href='#'>Sair</a>";

?>
>>>>>>> 0731ab3ec0907fe24747575d24f287019810f17b
