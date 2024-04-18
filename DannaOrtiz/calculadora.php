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
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles.css" />
    <title>Tu Página Web</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</head>

<body>
<?php
include("head.php");
?>
    <br /><br />

    <main>
        <section class="actividad">
            <center>
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
            </center>
        </section>
    </main>
</body>

</html>