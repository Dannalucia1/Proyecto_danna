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

                <form method="post" action="">

                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon3">Ingrese un número</span>
                        <input type="number" class="form-control" aria-describedby="basic-addon3 basic-addon4"
                            name="numero" required>
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
    </center>
    </section>
    </main>
</body>

</html>