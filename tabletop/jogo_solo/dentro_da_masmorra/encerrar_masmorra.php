<?php

session_start();
require_once '../../classes/repositorioTabletop.php'; 
$repositorio = new RepositorioTabletopMySQL();

echo "Masmorra Finalizada";
echo "<br>";
echo "<a href='#'>Sair</a>";

?>