<?php

$turno = readline(prompt: "ingrese su horario de trabajo: ");
$horasTrabajadas = intval(readline(prompt: "ingrese las horas trabajadas: "));


$tarifaDiurna = 10;
$tarifaNocturna = 15;


if ($turno.lower() == 'diurno') {
    $valorPagar = $tarifaDiurna * $horasTrabajadas;
} elseif ($turno.lower() == 'nocturno') {
    $valorPagar = $tarifaNocturna * $horasTrabajadas;
} else {
    $valorPagar = 0; 
}

// Mostramos el resultado
echo "El valor a pagar es: $" . $valorPagar;
?>
