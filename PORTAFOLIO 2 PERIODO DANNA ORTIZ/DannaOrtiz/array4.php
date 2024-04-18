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
                <h1>Insertar Valores en un Arreglo</h1>

                <form method="post">
                    <label for="numero">Inserta un número:</label>
                    <input type="number" id="numero" name="numero">
                    <button type="submit">Agregar</button>
                </form>

                <?php
                $arreglo = array();
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $numero = $_POST["numero"];
                    if (!empty($numero)) {
                        $arreglo[] = $numero;
                    } else {
                        echo "<p>Por favor, ingresa un número válido.</p>";
                    }
                }
                if (!empty($arreglo)) {
                    echo "<h2>Arreglo Actualizado:</h2>";
                    echo "<pre>";
                    print_r($arreglo);
                    echo "</pre>";
                }
                ?>
            </center>
        </section>
    </main>
</body>

</html>