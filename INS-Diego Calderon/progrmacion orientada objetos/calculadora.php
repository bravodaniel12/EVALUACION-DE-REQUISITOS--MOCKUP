<?php

require_once ("classOperaciones.php");

$Calculadora = new Operaciones(2,2);

echo $Calculadora -> suma();
echo "</br>";
echo $Calculadora -> resta();
echo "</br>";
echo $Calculadora -> divicion();
echo "</br>";
echo $Calculadora ->multiplicacion();
