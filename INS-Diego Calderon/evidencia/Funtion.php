<?php
function calcular_descuento ($preciOrignal, $descuento) {
    $preciofinal = $preciOrignal - ($preciOrignal * ($descuento/100));
}
    return $preciofinal;
    