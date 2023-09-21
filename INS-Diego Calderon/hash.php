<?php

/* $clave = "hola1";
echo hash("md5",$clave)."<br>";

foreach(hash_algos() as $algoritmos) {
    echo $algoritmos."  -  ".hash($algoritmos,$clave)."<br>";
}   */

///
echo "<br>";
echo "<br>";
echo "////////////////////////////////////";
echo "<br>";
echo "<br>";

$clave = "2e80a184267270fc8a50f3f9aef3902e";

if (password_verify('hola1',$clave)) {
    echo " la contraseña esta bien";
}else {
    echo " la contra esta mal";
}
// vamos a mostrar si la clave es la misma que la otra
echo "<br>";

