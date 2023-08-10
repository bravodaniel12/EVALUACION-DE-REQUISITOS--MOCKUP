<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metodo Burbuja</title>
</head>
<body>
   
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

//  uso
$miArray = array(34, 2, 7, 11, 9, 17);
$miArrayOrdenado = ordenarArray($miArray);

echo "Array original: " . implode(", ", $miArray) . "<br>". "<br>";

echo "Array ordenado: " . implode(", ", $miArrayOrdenado);
?>
</body>
</html>