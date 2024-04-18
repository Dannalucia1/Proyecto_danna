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
                <form action="calcula_area_triangulo.php" method="post">
                    <label for="base">Base:</label>
                    <input type="text" id="base" name="base" required>
                    <br>
                    <label for="altura">Altura:</label>
                    <input type="text" id="altura" name="altura" required>
                    <br>
                    <input type="submit" value="Calcular el área">
                </form><br><br>

                <?php
    function calcular_area_triangulo($base, $altura) {
        return ($base * $altura) / 2;
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $base = $_POST['base'];
        $altura = $_POST['altura'];
        $area = calcular_area_triangulo($base, $altura);
        echo "El área del triangulo es: " . $area;
    }
?>
            </center>
        </section>
    </main>
</body>

</html>