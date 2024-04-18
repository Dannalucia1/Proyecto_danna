<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>PUNTO 2</title>
        <link rel="icon" type="image/x-icon" href="assets/portafolio.png" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
            <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
                <div class="container px-5">
                    <a class="navbar-brand" href="index.html"><span class="fw-bolder text-primary">Portafolio Virtual</span></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                            <li class="nav-item"><a class="nav-link" href="inicio.html">INICIO</a></li>
                            <li class="nav-item"><a class="nav-link" href="info.html">INFO.</a></li>
                            <li class="nav-item"><a class="nav-link" href="projects.html">TRABAJOS</a></li>
                            <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </nav>

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
    </body>
</html>