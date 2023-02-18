<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true){
    //Si el usuario no está logueado, redirigir al index
    header('Location: index.php');  
    exit; 
}
// Incrementar el contador de acceso
$access_count = isset($_SESSION['access_count']) ? $_SESSION['access_count']+1:
$_SESSION['access_count'] = $access_count;
?>
<!DOCTYPE html>
<html>
<head>
    <title> Dashboard </title>
</head>
<body>
    <h1> Bienvenido, <?php echo $_POST['username']; ?></h1>
    <p> Has accedido a esta página <?php echo $access_count; ?> veces.</p>

    <!--Aqui es donde se debe incluir la grpafica que se desea mostrar -->

    <a href="productos.php">Productos del cliente</a><br>
    <a href="total.php">Total del cliente</a><br>
    <a href="logout.php">Cerrar Sesion</a>
</body>
</html>