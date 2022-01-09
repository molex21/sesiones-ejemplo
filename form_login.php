<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesión</title>
</head>
<body>

    <?php if (isset($_SESSION['message'])): ?>
        <p>
            <?php
            echo $_SESSION['message'];
            unset($_SESSION['message']);
            ?>
        </p>
    <?php endif; ?>

    <h2> Inicio de sesión </h2>
    <form action="login.php" method="POST">
        <input type="text" name="user" placeholder="Usuario">
        <input type="password" name="pass" placeholder="Contraseña">
        <input type="submit" value="Enviar">
    </form>  
</body>
</html>