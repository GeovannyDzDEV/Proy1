<?php
$error; //podemos definirla como variable de estado
if(!empty($_POST['username']) && !empty($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    if($username == "cliente" && $password == "123"){
        $error="okcl";
        echo "Accedió como cliente";
        header("Location:ecomm.html");
    }elseif($username == "administrador" && $password == "asd"){
        echo "Accedió como administrador";
        header("Location:admin.php");
    }else{
        $error="okadm";
        $error="incorrecto";
        echo "Usuario o Contraseña no válida";
        header("Location:errorpage.html");

    }
}else{
    $error="vacio";
    echo "Los datos están vacíos";
    header("Location:errorpage.html");
}
