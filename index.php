<?php declare(strict_types=1);
session_start();

$cont = isset($_SESSION['cont'])? $_SESSION['cont'] : 0;
$cont += 1;

$_SESSION['cont'] = $cont;
echo "<h3>Ejercicio 1:</h3><br>";
echo $cont;

echo "<br>";

echo "session id=".session_id();

