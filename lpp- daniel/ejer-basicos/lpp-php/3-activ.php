<form action = "#"method = "post">
    <input type="number" name="dato1">
    <input type="number" name="dato2">
    <button type="submit"> Enviar </button>
</form>

<?php
$dato1= $_POST['dato1'];
$dato2 = $_POST['dato2'];
$total1= $dato1+$dato2;
$total2= $dato1-$dato2;
$total3= $dato1*$dato2;

echo " Ingrese primer dato ".$dato1;
echo "</br>";
echo " Ingrese segundo dato ".$dato2;
echo "<br>";
echo "</br>";
echo " Sus datos en suma son = ".$total1;
echo "<br>";
echo " Sus datos en resta son = ".$total2;
echo "<br>";
echo " Sus datos en multiplicacion son = ".$total3;


?>