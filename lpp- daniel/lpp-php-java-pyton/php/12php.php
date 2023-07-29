<form action="#" method="post">
    <input type="email" name="correo" placeholder= "Escriba su correo:">
    <input type="password" name="contr" placeholder= "Escriba su contraseña:">
    <button type="submit">Enviar</button>
</form>

<?php
$correo = $_POST['correo'];
$contr = $_POST['contr'];


if ($correo.lower() == "danigobra2020@gmail.com" && $contr == "123456"){
    echo "Bienvenidos a fundamentos de la programación";
}
if ($correo != "danigobra2020@gmail.com" && $contr != "123456") {
    echo "Error en los datos ingresados"; 
}



 ?>