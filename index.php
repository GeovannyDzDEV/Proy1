<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="=UTF-8">
    <link rel="icon" href="./img/g.ico">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body class="bg-info d-flex justify-content-center align-items-center vh-100">
    <div class="bg-white p-5 rounded-5 text-secondary" style="width:25rem">
        <div class="d-flex justify-content-center">
            <img src="./assets/login-icon.svg" alt="login-icon"
            style="height: 7rem">
            
        </div>
        <div class="texxt-center fs-1 fw-bold">Iniciar Sesión:</div>
        <div>
            <div>
                <img src="./assets/username-icon.svg" alt="username-icon" style="height: 1rem">
            </div>
        </div>   
    
        <div class="text-info align-items-center w-100 mt-4">
    <form action="procesar.php" method="POST">
    <p><label>Usuario:</label>
    <div class="align-items-center"><input type = "text" name = "username" required><br><br></p> </div>

    <p><label>Contraseña</label>
    <div class="align-items-center"><input type = "password" name = "password" required><br><br></p> </div>
   
    <?php if(isset($_GET['error'])){
    $error = $_GET['error'];
    if($error == "incorrecto"){
        echo "<h2>El usuaio o contraseña no son correctos</h2>";
    }
    if($error == "vacio"){
        echo "<h2>Los datos enciados se encuentran vacíos</h2>";
    }
}
?>
    <button type="submit">Iniciar Sesión</button></div>
    </form>
    </div>
</body>        
</html>

