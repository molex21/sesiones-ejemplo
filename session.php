<?php declare(strict_types=1);
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: form_login.php');
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesión</title>
</head>
<body>
    <p>Hola! <?=$_SESSION['user']?>  , !has iniciado sesión correctamente!</p>

    <a href="logout.php"> Cerrar sesión </a>
</body>
</html>