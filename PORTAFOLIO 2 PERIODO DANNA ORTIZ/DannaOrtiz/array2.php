<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles.css" />
    <title>Tu Página Web</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
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
                function generarNumeroAleatorio()
                {
                    return rand(1, 100);
                }

                $numeros = array();
                foreach (range(1, 5) as $i) {
                    $numero = generarNumeroAleatorio();
                    $cuadrado = pow($numero, 2);
                    $cubo = pow($numero, 3);
                    $numeros[] = array('numero' => $numero, 'cuadrado' => $cuadrado, 'cubo' => $cubo);
                }

                echo "<h2>Números aleatorios, cuadrados y cubos</h2>";
                echo "<table border='1'>";
                echo "<tr><th>Número</th><th>Cuadrado</th><th>Cubo</th></tr>";
                foreach ($numeros as $numero) {
                    echo "<tr>";
                    echo "<td>{$numero['numero']}</td>";
                    echo "<td>{$numero['cuadrado']}</td>";
                    echo "<td>{$numero['cubo']}</td>";
                    echo "</tr>";
                }
                echo "</table>";
                ?>

            </center>
        </section>
    </main>
</body>

</html>