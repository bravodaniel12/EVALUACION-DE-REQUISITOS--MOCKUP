<?php
session_start();

// Inicializar las variables de sesión si aún no existen
if (!isset($_SESSION['ventas'])) {
    $_SESSION['ventas'] = array(
        'samsung' => 0,
        'motorola' => 0,
        'huawei' => 0
    );
}

// Definir los precios de los celulares
$precios = array(
    'samsung' => 600000,
    'motorola' => 500000,
    'huawei' => 550000
);

// Función para aplicar el descuento
function calcularDescuento($cantidad) {
    return ($cantidad > 10) ? 0.05 : 0;
}

// Procesar el formulario de ventas
if (isset($_POST['agregarVenta'])) {
    $marca = $_POST['marca'];
    $cantidad = (int)$_POST['cantidad'];

    if ($cantidad <= 0) {
        $error = 'Ingrese una cantidad válida.';
    } else {
        $_SESSION['ventas'][$marca] += $cantidad;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ventas de Celulares</title>
</head>
<body>
    <h1>Ventas de Celulares</h1>
    <form method="post">
        <label for="marca">Seleccione una marca:</label>
        <select id="marca" name="marca">
            <option value="samsung">Samsung</option>
            <option value="motorola">Motorola</option>
            <option value="huawei">Huawei</option>
        </select>
        <br>
        <label for="cantidad">Cantidad vendida:</label>
        <input type="number" id="cantidad" name="cantidad" min="1" required>
        <br>
        <button type="submit" name="agregarVenta">Agregar Venta</button>
    </form>

    <?php
    if (isset($error)) {
        echo '<p>' . $error . '</p>';
    }

    // Mostrar resultados
    echo '<h2>Resultado:</h2>';
    foreach ($_SESSION['ventas'] as $marca => $cantidadVendida) {
        $precioUnitario = $precios[$marca];
        $subtotal = $cantidadVendida * $precioUnitario;
        $descuentoAplicado = calcularDescuento($cantidadVendida) * $subtotal;
        $total = $subtotal - $descuentoAplicado;

        echo '<h3>' . ucfirst($marca) . '</h3>';
        echo '<p>Cantidad Vendida: ' . $cantidadVendida . '</p>';
        echo '<p>Precio Unitario: ' . $precioUnitario . '</p>';
        echo '<p>Subtotal: ' . $subtotal . '</p>';
        echo '<p>Descuento Aplicado: ' . $descuentoAplicado . '</p>';
        echo '<p>Total: ' . $total . '</p>';
    }
    ?>
</body>
</html>
