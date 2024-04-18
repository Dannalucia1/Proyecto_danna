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
                <form method="post">
                    <label for="numero"> Ingrese un numero:</label>
                    <input type="number" name="numero" id="numero">
                    <input type="submit" value="determinar">
                </form>

                <?php
if ($_SERVER["REQUEST_METHOD"] =="POST") 
{
$numero = $_POST["numero"];

if ($numero > 0) {
    echo "El numero $numero es positivo.";
} elseif ($numero < 0) {
    echo "El numero $numero es negativo.";
} else {
    echo " El numero $numero es cero.";
}

}
?>
            </center>
        </section>
    </main>
</body>

</html>