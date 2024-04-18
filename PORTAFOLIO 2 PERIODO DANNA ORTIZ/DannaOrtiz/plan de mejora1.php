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
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["numero_N"])) {
    $numero_N = $_POST["numero_N"];

    $numero_intentado = $_POST["numero"];

    if ($numero_intentado == $numero_N) {
        echo "<h2>¡Felicidades! Adivinaste el número.</h2>";
    } elseif ($numero_intentado < $numero_N) {
        echo "<h2>El número ingresado es menor que $numero_N.</h2>";
    } else {
        echo "<h2>El número ingresado es mayor que $numero_N.</h2>";
    }
}
?>

                <h2>Ingresa un número N:</h2>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <input type="number" name="numero_N" autofocus required>
                    <br>
                    <h3>Intenta adivinar el número:</h3>
                    <input type="number" name="numero" required>
                    <input type="submit" value="Adivinar">
                </form>
            </center>
        </section>
    </main>
</body>

</html>