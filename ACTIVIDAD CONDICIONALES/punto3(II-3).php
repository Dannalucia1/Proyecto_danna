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
                            <li class="nav-item"><a class="nav-link" href="index(II).html">VOLVER</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">PUNTO 3</h1>
                    <p class="lead fw-normal text-white-50 mb-0">Samuel Alejandro Fernandez Quintero</p><br>
                    <p class="lead fw-normal text-white-50 mb-0">11-2</p><br>
                </div>
            </div>
        </header><br><br>

        <form method="post" action="">

        <div class="input-group">
            <span class="input-group-text" id="basic-addon3">Ingrese un número</span>
            <input type="number" class="form-control" aria-describedby="basic-addon3 basic-addon4" name="numero" required>
            <input type="submit" class='btn btn-dark' value="Mostrar tabla">
        </div>
    </form>

    <div id="tabla">
        <center><?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $numero = $_POST["numero"];
            echo "<h3>Tabla de multiplicar del $numero:</h3>";

            for ($i = 1; $i <= 10; $i++) {
                $resultado = $numero * $i;
                echo "<p>$numero x $i = $resultado</p>";
            }
        }
        ?></center>
    </div>
        </main>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>