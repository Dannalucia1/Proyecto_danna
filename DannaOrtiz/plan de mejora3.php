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
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["numero"])) {
    $numero = $_POST["numero"];

    echo "<h2>Tabla de Multiplicar del $numero:</h2>";

    echo "<ul>";
    for ($i = 1; $i <= 10; $i++) {
        echo "<li>$numero x $i = " . ($numero * $i) . "</li>";
    }
    echo "</ul>";
}
?>

                <h2>Ingrese un número para mostrar su tabla de multiplicar:</h2>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <input type="number" name="numero" required>
                    <input type="submit" value="Mostrar Tabla">
                </form>


            </center>
        </section>
    </main>
</body>

</html>