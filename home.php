<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
</head>
<body>
<?php
// Iniciar sesión en la página de inicio 🚀
session_start();

if (isset($_SESSION['nombre']) && isset($_SESSION['email'])) {
    $nombre = $_SESSION['nombre'];
    $email = $_SESSION['email'];
    // Mostrar los datos del usuario 🌟
    echo '<h1>BIENVENIDO ' . $nombre . '!</h1>';
    echo '<p>Email: ' . $email . '</p>';
} else {
    // Si no se ha iniciado sesión, puedes redirigir al usuario a la página de inicio de sesión 🚧
    header("location:index.php");
}
?>

<a href="logout.php">Cerrar sesión</a>
    
</body>
</html>
