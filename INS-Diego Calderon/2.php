<?php
function generarFibonacci($numero) {
  $secuencia = array(); // Lista para almacenar la secuencia de Fibonacci
  
  // Verificar si el número es mayor o igual a 0
  if ($numero >= 0) {
    // Caso base: agregar los primeros dos números de la secuencia
    $secuencia[] = 0;
    if ($numero > 0) {
      $secuencia[] = 1;
    }
  
    // Generar el resto de la secuencia
    $anterior = 0;
    $actual = 1;
  
    while (($anterior + $actual) <= $numero) {
      $siguiente = $anterior + $actual;
      $secuencia[] = $siguiente;
  
      $anterior = $actual;
      $actual = $siguiente;
    }
  }
  
  return $secuencia;
}

// Ejemplo de uso
$numero = intval(readline(prompt:"ingrese un Numero: \n"));

$secuenciaFibonacci = generarFibonacci($numero);

// Imprimir la secuencia generada
echo "Secuencia de Fibonacci hasta {$numero}:\n";
foreach ($secuenciaFibonacci as $numero) {
  echo $numero . ", ";
}
?>