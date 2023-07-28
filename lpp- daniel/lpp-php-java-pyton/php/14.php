<input type="float" name="aluminio"><br><br>
<button type="submit">Enviar</button>
<form>
<?php
$acidez = $_POST['acidez'];
$materia = $_POST['materia'];
$fosforo = $_POST['fosforo'];
$calcio = $_POST['calcio'];
$magnesio = $_POST['magnesio'];
$aluminio = $_POST['aluminio'];
if ($acidez >= 5 && $acidez <= 5.5 &&
    $materia > 8 &&
    $fosforo > 30 &&
    $calcio > 0.9 &&
    $magnesio > 0.4 &&
    $aluminio < 1) {
        echo "<br>";
        echo "<br>";
        echo "APROBADO EL SUELO";
    } else{
        echo "<br>";
        echo "<br>";
        echo "NO APROBADO EL SUELO";
    }