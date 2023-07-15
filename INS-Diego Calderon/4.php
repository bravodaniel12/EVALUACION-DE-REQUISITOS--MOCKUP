<?php
function calcularSumaDigitos($numero) {
    $suma = 0;
    $numero = abs($numero); // Asegurarse de trabajar con el valor absoluto del número

    while ($numero > 0) {
        $digito = $numero % 10; // Obtener el último dígito
        $suma += $digito; // Agregar el dígito a la suma
        $numero = intdiv($numero, 10); // Eliminar el último dígito del número
    }

    return $suma;
}

// forma  de uso:
$numero = 12345;
$sumaDigitos = calcularSumaDigitos($numero);
echo "La suma de los dígitos de $numero es: $sumaDigitos";
?>