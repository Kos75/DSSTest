<?php
session_start();

// Credenciales simuladas
$usuario_correcto = "admin";
$password_correcta = "1234";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === $usuario_correcto && $password === $password_correcta) {
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
        exit;
    } else {
        echo "Credenciales incorrectas. <a href='index.php'>Volver</a>";
    }
}
?>