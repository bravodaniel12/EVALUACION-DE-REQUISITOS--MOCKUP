<form action = "#"method = "post">
    <input type="number" name="dato1">
    <input type="number" name="dato2">
    <button type="submit"> Enviar </button>
</form>

<?php
$dato1= $_POST['dato1'];
$dato2 = $_POST['dato2'];
$total= $dato1+$dato2;

echo " ingrese primer dato ".$dato1;
echo " ingrese segundo dato ".$dato2;
echo "  sus datos son ".$total;

?>