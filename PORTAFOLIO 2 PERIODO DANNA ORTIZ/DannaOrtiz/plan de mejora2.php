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
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["color"])) {
    $color = $_POST["color"];

    if ($color == "rojo") {
        echo "<h2>Finalizado. El color ingresado es rojo.</h2>";
    } else {
        echo "<h2>El color ingresado es: $color</h2>";

        echo '<h3>Ingrese otro color:</h3>
              <form method="post" action="'.htmlspecialchars($_SERVER["PHP_SELF"]).'">
                <input type="text" name="color" required>
                <input type="submit" value="Enviar">
              </form>';
    }
} else {
    echo '<h3>Ingrese un color:</h3>
          <form method="post" action="'.htmlspecialchars($_SERVER["PHP_SELF"]).'">
            <input type="text" name="color" required>
            <input type="submit" value="Enviar">
          </form>';
}
?>

            </center>
        </section>
    </main>
</body>

</html>