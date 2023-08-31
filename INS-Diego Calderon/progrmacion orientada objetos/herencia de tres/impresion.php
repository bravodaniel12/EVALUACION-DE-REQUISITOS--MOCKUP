<?php
require_once("classEmpleado.php");
require_once("classCliente.php");


echo "<h1> Persona nueva para empleado </h1>";

$objEmpleado = new Empleado(123,"Elpepe",18);
$objEmpleado ->setPuestos("vendedor");
echo $objEmpleado->getDatosPersonales();
echo "Puesto: Admi".$objEmpleado->getPuestos();

echo "<h1> Persona nueva para cliente </h1>";

$objCliente = new Cliente(153,"Juan perico",18);
$objCliente ->setCreditos("100.000.000");   // con este lo llamamos
echo $objCliente->getDatosPersonales(); // con get mostramos el dato
echo "credito: ".$objCliente->getCreditos(); // con este lo mostramos