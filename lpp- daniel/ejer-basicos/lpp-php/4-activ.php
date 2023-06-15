<form action = "#"method = "post">
    <input type="text" name="nombre" placeholder="Ingrese nombre">
    <input type="text" name="apellido" placeholder="Ingrese apellido">
    <input type="number" name="base" placeholder="Dijite Sueldo base">
    <button type="submit"> Enviar </button>
</form>

<?php
$dato1= $_POST['nombre'];
$dato2 = $_POST['apellido'];
$dato3 = $_POST['base'];
$aumento= $dato3*0.15;
$total = $aumento+$dato3;



echo " Su nombre es " .$dato1. " ".$dato2;
echo "<br>";
echo " Su sueldo base es = " .$dato3;
echo "<br>";
echo "Su aumento sera de =" .$aumento;
echo "<br>";
echo " Su sueldo  total sera de = " .$total;

