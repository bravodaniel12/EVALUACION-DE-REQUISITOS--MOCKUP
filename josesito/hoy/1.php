
<!DOCTYPE html>
<html>
<head>
    <title>Votaciónes a la alcaldia</title>
</head>
<body>
    <h1> Elecciones de candidatos a la alcaldia - pitalito</h1>

    <h3>Candidatos :</h3>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="Ficha candidato #1"> Candidato #1: Sergio Mauricio Zúñiga</label>
        <input type="number" id="Candidato1" name="Candidato1"><br><br>
        <label for="Ficha candidato #2">Candidato #2: Yider Luna Joven</label>
        <input type="number" id="Candidato2" name="Candidato2"><br><br>
        <label for="Ficha candidato #3">Candidato #3: Franklin Alexander Vega</label>
        <input type="number" id="Candidato3" name="Candidato3"><br><br>
        <label for="voto_blanco">#4 Voto en blanco</label>
        <input type="number" id="voto_blanco" name="voto_blanco"><br><br>
        <input type="submit" name="enviar" value="Enviar">
    </form>

    <h2>Resultados:</h2>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $candidato1 = $_POST["Candidato1"];
            $candidato2 = $_POST["Candidato2"];
            $candidato3 = $_POST["Candidato3"];
            $voto_blanco = $_POST["voto_blanco"];

            $total_votos = $candidato1 + $candidato2 + $candidato3 + $voto_blanco;

            echo "<strong> <p>El total de participantes fue de " . $total_votos . "</p></strong>";

            if ($total_votos > 0) {
                $candidatos = array("Sergio Mauricio Zúñiga", "Yider Luna Joven", "Franklin Alexander Vega", "Voto en blanco");
                $votos = array($candidato1, $candidato2, $candidato3, $voto_blanco);

                $max_votos = max($votos);
                $ganadores = array();
                $empates = array();

                for ($i = 0; $i < count($votos); $i++) {
                    if ($votos[$i] == $max_votos) {
                        $ganadores[] = $i;
                    } else {
                        $empates[] = $i;
                    }
                }

                if (count($ganadores) == 1) {
                    $ganador_index = $ganadores[0];
                    echo "<p>El ganador es el Candidato " . ($ganador_index + 1) . "( " . $candidatos[$ganador_index] . ")</p>";
                } else {
                    echo "<p>Hay empate entre los siguientes candidatos:</p>";
                    foreach ($ganadores as $index) {
                        echo "<p>Candidato " . ($index + 1) . " (" . $candidatos[$index] . ")</p>";
                    }
                }
                        else {
                            foreach ($votos as $index => $candidato) {
                                echo "<p>El Candidato " . ($index + 1) . " (" . $candidatos[$index] . ") obtuvo " . $candidato . " votos</p>";
                     } 
                }
                echo "<p>No se registraron votos</p>";
            }
    ?>
</body>
</html>