<?php
session_start();

if (!isset($_SESSION['loggedin']) ||$_SESSION['loggedin'] !== true){
    //Si el usuario está loggeado, redirigir al index
    header('Location: index.php');
    exit;
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Productos del cliente</title>
</head>
<body>
    <!-- Aquí se puede incluir la información de los productos de los clientes -->
    <a href="dashboard.php">Volver al dashboard</a><br>
    <a href="logout.php">Cerrar Sesion</a>
</body>
</html>