<?php
session_start();

unset($_SESSION['classe']);
unset($_SESSION['nome_pers']);
unset($_SESSION['classe']);
unset($_SESSION['nivel']);
unset($_SESSION['nivel_maximo']);
unset($_SESSION['vida_base']);
unset($_SESSION['vida_base']);
unset($_SESSION['dinheiro']);
unset($_SESSION['ataque']);
unset($_SESSION['defesa']);
unset($_SESSION['item1']);
unset($_SESSION['item2']);
unset($_SESSION['item3']);
unset($_SESSION['item4']);
unset($_SESSION['magia1']);
unset($_SESSION['magia2']);
unset($_SESSION['magia3']);
header('Location: form_pers.php');

?>