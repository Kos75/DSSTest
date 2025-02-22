<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    header("Location: dashboard.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <h2>Login</h2>
            <form action="login.php" method="POST">
                <label>Usuario:</label>
                <input type="text" name="username" required><br>
                <label>Contraseña:</label>
                <input type="password" name="password" required><br>
                <button type="submit">Ingresar</button>
            </form>
    </div>
</body>
</html>