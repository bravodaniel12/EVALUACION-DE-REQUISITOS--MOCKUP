<?php
function generarFibonacci($n) {
    if ($n <= 0) {
      return "0";
    } elseif ($n == 1) {
      return "0, 1";
    } elseif ($n == 2) {
      return "0, 1, 1";
    }
  
    $fibonacci = "0, 1";
    $a = 0;
    $b = 1;
  
    while ($n > 1) {
      $n--;
      $sum = $a + $b;
      $fibonacci .= ", ".$sum;
      $a = $b;
      $b = $sum;
    }
  
    return $fibonacci;
  }
  
  if (isset($_POST['number'])) {
    $number = (int)$_POST['number'];
    $result = generarFibonacci($number);
  } else {
    $result = "";
  }
  ?>
  
  <form method="POST" action="">
    <label for="number">Agregue numero: </label>
    <input type="number" id="number" name="number" min="0">
    <button type="submit">Generar secuencia Fibonacci</button>
  </form>
  
  <h4>Secuencia Fibonacci:</h4>
  <p><?php echo $result; ?></p>