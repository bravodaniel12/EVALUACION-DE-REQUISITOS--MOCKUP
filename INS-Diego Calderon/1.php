<?php

function esPalíndromo($cadena)
{
    // Eliminamos los espacios en blanco y convertimos todo a minúsculas
    $cadena = strtolower(str_replace(' ', '', $cadena));
    
    // Invertimos la cadena
    $invertida = strrev($cadena);
    
    // Verificamos si la cadena invertida es igual a la cadena original
    if ($cadena === $invertida) {
        return true;
    } else {
        return false;
    }
}

// Ejemplo de uso

$cadena1 = readline(prompt:"ingrese primera frase \n");

if (esPalíndromo($cadena1)) {
    echo '"' . $cadena1 . '" es un palíndromo';
} else {
    echo '"' . $cadena1 . '" no es un palíndromo';
}

echo "\n";

$cadena2 = readline(prompt:"ingrese segundo frase \n");

if (esPalíndromo($cadena2)) {
    echo '"' . $cadena2 . '" es un palíndromo';
} else {
    echo '"' . $cadena2 . '" no es un palíndromo';
}
?>