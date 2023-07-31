<form action="#"method="post">
    <input type="text" name="nombre" placeholder="Ingrese su nombre">
    <input type="text" name="genero" placeholder="Ingrese su genero">
    <input type="text" name="salario" placeholder="Ingrese su salario">
    <input type="number" name="tiempo_servicio" placeholder="Ingrese el tiempo de servicio">
    <button type="submit">Enviar</button>
</form>


<?php

    $nombre = $_POST["nombre"];
    $genero = $_POST["genero"];
    $salario = $_POST["salario"];
    $tiempo = $_POST["tiempo_servicio"];
    $aumento15 = ($salario*0.15);
    $bonificacion15 = ($salario+$aumento15);
    $aumento20 = ($salario*0.2);
    $bonificacion20 = ($salario+$aumento20);
    if($genero == "hombre"){
        if ($tiempo > 5){
            echo('Hola '.$nombre. 'su salario basico es de '.$salario.' pero con la bonificacion del 20% su salario sera de '.$bonificacion20);
        }
        elseif($tiempo <= 5){
            echo('Hola '.$nombre. 'su salario basico es de '.$salario.' pero con la bonificacion del 15% su salario sera de '.$bonificacion15);
        }
    }
    if($genero == "mujer"){
        if ($tiempo > 6){
            echo('Hola '.$nombre. 'su salario basico es de '.$salario.' pero con la bonificacion del 20% su salario sera de '.$bonificacion20);
        }
        elseif($tiempo <= 6){
            echo('Hola '.$nombre. 'su salario basico es de '.$salario.' pero con la bonificacion del 15% su salario sera de '.$bonificacion15);
        }
    }
?>