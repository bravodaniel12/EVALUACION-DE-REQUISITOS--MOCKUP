<?php
$fecha = "20/12/2032";
$numero = "uno dos tres cuatro cinco";
$date = "m-d-Y h:i:s a";


print_r (value :"<pre>");
print_r (explode(" ",$numero));
print_r (value :"</pre>");


print_r (value :"<pre>");
print_r (explode("/",$fecha));
print_r (value :"</pre>");

echo "<br>";

//el abs hace que un numero negativo se vuielva positivo ( valor absoluto )

echo abs(num:-4);
echo "<br>";

//esto hace que al redondear un valor, quedaria en (50)
echo floor(num:50.300);
echo "<br>";
echo "<br>";
 
// muestra la hora y la fecha
echo "COLOMBIA : ";
date_default_timezone_set('America/Bogota');
echo " La fecha y hora es ";
echo $dateF = date ('m-d-Y -h-i-s-a');

echo "<br>";
echo "<br>";
// mostrar la fecha y hora de forma separada
print_r (value :"<pre>");
print_r (explode("-",$dateF));
print_r (value :"</pre>");

echo "<br>";
echo "<br>";

//mostrar la fecha y hora china
echo " Shangai : ";
date_default_timezone_set('Asia/Shanghai');
echo " La fecha y hora es ";
echo $dateF = date ('m-d-Y -h-i-s-a');
// mostrar la fecha y hora de forma separada
print_r (value :"<pre>");
print_r (explode("-",$dateF));
print_r (value :"</pre>");
