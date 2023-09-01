<?php
require_once("classMesa.php");
require_once("classMueble.php");
require_once("classProducto.php");

echo "<h1> PRODUCTO INFO </h1>";
$objProducto = new Producto ("Pan","500 Pesos");
echo $objProducto->getInfoProducto();

echo "<h1> MUEBLE INFO </h1>";
$objMueble = new Mueble ("Tres Pieles","122.000","Rojo","Madera");
echo $objMueble->getInfoProducto();

echo "<h1> MESA INFO </h1>";

$objMesa = new Mesa ("Mesa Inglesa","122.000","Rojo","Madera","Cilindrica","Cuatro x 20");
$objMesa ->setForma("cuato x cautro");
echo $objMesa->getInfoProducto();
echo "Forma: " .$objMesa->getForma();


