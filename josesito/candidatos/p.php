<!DOCTYPE html>
<html>
<head>
    <title>ELECCIONES PITALITO</title>
</head>
<body>
    <h1>Sistema de Votación </h1>
    <form method="POST" action="#">
        <input type="radio" name="voto" value="Sergio Mauricio Zúñiga"> Sergio Mauricio Zúñiga<br>
        <input type="radio" name="voto" value="Yider Luna Joven"> Yider Luna Joven<br>
        <input type="radio" name="voto" value="Franklin Alexander Vega"> Franklin Alexander Vega<br>
        <input type="radio" name="voto" value="Voto en blanco"> Voto en blanco<br>
        <input type="submit" value="Votar">
    </form>
</body>
</html>
<?php


$votos = array(
    "Sergio Mauricio Zúñiga" => 0,
    "Yider Luna Joven" => 0,
    "Franklin Alexander Vega" => 0,
    "Voto en blanco" => 0
);

if ($_SERVER["REQUEST_METHOD"] === "POST") {  //
  
    if (isset($_POST["voto"])) {
        $voto = $_POST["voto"];
        //contar votos
        if (array_key_exists($voto, $votos)) {
            $votos[$voto]++;
        }
    }
}

function obtenerGanador($votos) {
    $ganador = null;
    $mayorVotos = 0;
    
    foreach ($votos as $candidato => $cantidadVotos) {
        if ($cantidadVotos > $mayorVotos) {
            $ganador = $candidato;
            $mayorVotos = $cantidadVotos;
        }
    }
    
    return $ganador;
}

function obtenerCantidadVotos($votos) {
    return array_sum($votos);
}

?>

      <?php  if (isset($_POST["voto"])): ?> 
            <?php
            $ganador = obtenerGanador($votos);
            $cantidadVotos = obtenerCantidadVotos($votos);
            ?>
            <h2>RESULTADO:</h2>
            <p>El ganador es: <?php echo $ganador; ?></p>
            <p>Cantidad total de votos: <?php echo $cantidadVotos; ?></p>
        <?php else: ?>
            <p>Porfavor, seleccione una casilla</p>
        <?php endif; ?>
    

