<?php

session_start();

unset($_SESSION['mapa_inicial']);
unset($_SESSION['mapa1']);
unset($_SESSION['mapa2']);
unset($_SESSION['mapa_geral']);
unset($_SESSION['mapa_atual']);

header('Location: tabletop.php');

?>