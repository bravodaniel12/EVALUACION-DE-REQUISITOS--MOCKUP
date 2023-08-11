<form action="#" method="POST">
    <select name="candidato" id="candidato">
        <option value="">Seleccionar...</option>
        <option value="0">Candidato 0</option>
        <option value="1">Candidato 1</option>
        <option value="2">Candidato 2</option>
        <option value="3">Candidato 3</option>
    </select>
    <button type="submit">Votar</button>
</form>

<form action="#" method="POST">
    <input type="hidden" name="reiniciarVotos">
    <button type="submit">Reiniciar votos</button>
</form>


<?php

session_start();
if (isset($_POST['candidato'])) {
    $candidato = intval($_POST['candidato']);
    if (!isset($_SESSION['candidatos'])) {
        $_SESSION['candidatos'] = [0, 0, 0, 0];
    }
    $_SESSION['candidatos'][$candidato] += 1;
    var_dump($_SESSION['candidatos']);

    $candidato0 = $_SESSION['candidatos'][0];
    $candidato1 = $_SESSION['candidatos'][1];
    $candidato2 = $_SESSION['candidatos'][2];
    $candidato3 = $_SESSION['candidatos'][3];
    
}

if (isset($_POST['reiniciarVotos'])) {
    $_SESSION['candidatos'] = [0, 0, 0, 0];
    echo "Votos reiniciados";
}