
<?php

function ordenarArray($arreglo) {
    $longitud = count($arreglo);
    for ($i = 0; $i < $longitud; $i++) {
        for ($j = 0; $j < $longitud - 1; $j++) {
            if ($arreglo[$j] > $arreglo[$j + 1]) {
                $temporal = $arreglo[$j];
                $arreglo[$j] = $arreglo[$j + 1];
                $arreglo[$j + 1] = $temporal;
            }
        }
    }
}

$Arreglo = [5, 1, 80, 10, 7, 66, 100];
echo "Antes de ordenar: ";
print_r($Arreglo);
# Lo ordenamos
ordenarArray($arreglo);
echo "Después de ordenar: ";
print_r($arreglo);