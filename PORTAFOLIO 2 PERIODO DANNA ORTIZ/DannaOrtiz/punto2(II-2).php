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

                <?php
$facturasGeneradas = [];

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['num_clientes']) && isset($_POST['num_meses'])) {
    $numClientes = $_POST['num_clientes'];
    $numMeses = $_POST['num_meses'];
    $cliente = 1;

    do {

        for ($mes = 1; $mes <= $numMeses; $mes++) {

            $montoFactura = 200000;
            $facturasGeneradas[] = "Factura del cliente $cliente para el mes $mes: \$" . number_format($montoFactura, 2);
        }
        $cliente++;
    } while ($cliente <= $numClientes);
}
?>

                <center>
                    <h1>Generación de Facturas Mensuales</h1>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <label for="num_clientes">Número de Clientes:</label>
                        <input type="number" name="num_clientes" id="num_clientes" min="1" required><br><br>
                        <label for="num_meses">Número de Meses:</label>
                        <input type="number" name="num_meses" id="num_meses" min="1" required><br><br>
                        <input type="submit" value="Generar Facturas">
                    </form>

                    <?php if (!empty($facturasGeneradas)): ?>
                    <h2>Facturas Generadas</h2>
                    <ul>
                        <?php foreach ($facturasGeneradas as $factura): ?>
                        <li><?php echo $factura; ?></li>
                        <?php endforeach; ?>
                    </ul>
                    <?php endif; ?>
                </center>

    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
    </center>
    </section>
    </main>
</body>

</html>