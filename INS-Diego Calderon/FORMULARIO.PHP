<?php
/* 
var_dump($_POST); */


$contra = "9a08ac2722aad19b65d454a22373fa26";

$usuario = "sergio";
 
if ($contra == md5($_POST["contrasenia"]) and ($usuario == $_POST["usuario"])){
    echo "<br><h1>Bienvenido</h1>";

}else {
    echo "<br><h1>Error inicie de nuevo</h1>";
}


?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <form action="" method="post">
    <label for="">Usuario</label>
    <input type="text" name="usuario">
    <br>
    <br>
    <label for="">Contraseña</label>
    <input type="text" name="contrasenia">
    <br>
    <br>
    <input type="submit" value="Enviar">

    </form>
</body>
</html>