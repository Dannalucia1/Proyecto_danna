<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $montoCompra = $_POST["montoCompra"];
    
    if ($montoCompra >= 100) {
        $descuento = 0.10;  // 10%
    } elseif ($montoCompra >= 50) {
        $descuento = 0.05;  // 5%
    } else {
        $descuento = 0.00;  // 0%
    }
    
    $montoDescuento = $montoCompra * $descuento;
    $montoFinal = $montoCompra - $montoDescuento;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calculadora de descuento</title>
</head>
<body>
    <h1>Calculadora de descuento</h1>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
        <label for="montoCompra">Monto total de la compra:</label>
        <input type="number" name="montoCompra" required>
        <input type="submit" value="Calcular descuento">
    </form>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<h2>Resumen de la compra:</h2>";
        echo "Monto original: $" . number_format($montoCompra, 2) . "<br>";
        echo "Descuento aplicado: " . ($descuento * 100) . "%<br>";
        echo "Monto del descuento: $" . number_format($montoDescuento, 2) . "<br>";
        echo "Monto final: $" . number_format($montoFinal, 2);
    }
    ?>
</body>
</html>
