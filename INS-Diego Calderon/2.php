<form action="#" method="post">
<h3>Ingrese un número entero</h3>
    <input step="any" type="number" name="numero" placeholder="ingrese un fibonacci entero">
    <button type="submit">Enviar</button>
</form>
<?php
$numero = $_POST['numero'];

function generaFibonacci($numero){ /* La función generaFibonacci() toma el parámetro $limite que representa el número especificado por el usuario. */
$num3 = 0; /* que almacena el valor inicial de 0. */
$num2 = 1; /* que almacena el valor inicial de 1. */
/* que se inicializa en 0 y se irá actualizando a medida que se genera la secuencia. */
for($num1 = 0; $num1 <= $numero; $num1+0){  /* Se utiliza un bucle for para generar y mostrar la secuencia de Fibonacci. El bucle se ejecuta mientras $num1 sea menor o igual al límite especificado por el usuario ($num1 <= $limite). */
    echo $num3 . " "; /* Se muestra el valor actual de la secuencia */
    
    $num3 = $num2+$num1;
    $num2 = $num1;
    $num1 = $num3;
    /* Se actualizan los valores de las variables $num3, $num2 y $num1 para generar el siguiente número de Fibonacci. Aquí se utiliza una técnica de actualización de variables en la que primero se actualiza $num3 sumando los valores anteriores de $num2 y $num1, luego se actualiza $num2 con el valor anterior de $num1 y finalmente se actualiza $num1 con el valor actual de $num3 */
}
}
generaFibonacci($numero);