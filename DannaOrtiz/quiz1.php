<?php
$precio = "";
if (isset($_POST['edad'])) {
    $edad = $_POST['edad'];
    if ($edad < 4) {
        $precio = "Gratis";
    } elseif ($edad <= 18) {
        $precio = "5000 pesos";
    } else {
        $precio = "10000 pesos";
    }
}
?>

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

                <form action="" method="post">
                    Por favor, introduce la edad del cliente: <input type="number" name="edad">
                    <input type="submit" value="Calcular Precio">
                </form>

                <?php
if ($precio !== "") {
    echo "El precio de la entrada es: $precio.";
}
?>

            </center>
        </section>
    </main>
</body>

</html>