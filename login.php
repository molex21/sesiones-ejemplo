<?php declare(strict_types=1);
session_start();
unset($_SESSION['user']);

$userAccount = [
    'alejandro' => password_hash('1234', PASSWORD_DEFAULT),
    'alumno' => password_hash('php', PASSWORD_DEFAULT),
       
];


if (!isset($_POST['user']) || !isset($_POST['pass'])) {
    $_SESSION['message']= "Escriba usuario y contraseña";
    header("Location: form_login.php");
    exit();
}

$user = $_POST['user'];
$password = $_POST['pass'];

if (!isset($userAccount[$user]) || !password_verify($password, $userAccount[$user])) {
    $_SESSION['message']= "Usuario o contraseña erroneos";
    header("Location: form_login.php");
    exit();
}

$_SESSION['user'] = $user;

header("Location: session.php");
exit();

