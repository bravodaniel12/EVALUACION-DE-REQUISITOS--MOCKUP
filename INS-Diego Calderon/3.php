<?php
function ordenarArray($arr) {
    $n = count($arr);

    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($arr[$j] > $arr[$j + 1]) {
                // Intercambiar los elementos si están en el orden incorrecto
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }

    return $arr;
}

// uso
$miArray = array(4, 2, 7, 1, 9, 3);
$miArrayOrdenado = ordenarArray($miArray);

echo "Array original: " . implode(", ", $miArray) . "<br>";
echo "Array ordenado: " . implode(", ", $miArrayOrdenado);
?>