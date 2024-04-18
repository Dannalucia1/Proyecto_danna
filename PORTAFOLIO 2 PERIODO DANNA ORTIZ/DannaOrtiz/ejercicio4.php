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
                <h1>Calculadora de Índice de Masa Corporal</h1>

                <p>Introduce tu peso (en kg) y altura (en metros):</p>

                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <label for="peso">Peso:</label>
                    <input type="text" id="peso" name="peso">
                    <br>
                    <label for="altura">Altura:</label>
                    <input type="text" id="altura" name="altura">
                    <br>
                    <input type="submit" value="Calcular IMC">
                </form>
            </center>

            <center><?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $peso = $_POST["peso"];
    $altura = $_POST["altura"];
    $imc = $peso / ($altura * $altura);
    echo "Tu índice de masa corporal es: " .$imc;
}
?>
            </center>
        </section>
    </main>
</body>

</html>