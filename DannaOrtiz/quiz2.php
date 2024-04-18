<?php
$descuento = "";
if (isset($_POST['puntos'])) {
    $puntos = $_POST['puntos'];
    if ($puntos < 100) {
        $descuento = "10%";
    } elseif ($puntos <= 150) {
        $descuento = $puntos < 150 ? "12%" : "15%";
    } else {
        $descuento = "20%";
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
                    Por favor, introduce el número de puntos: <input type="number" name="puntos">
                    <input type="submit" value="Calcular Descuento">
                </form>

                <?php
if ($descuento !== "") {
    echo "Se aplicará un descuento del $descuento.";
}
?>

            </center>
        </section>
    </main>
</body>

</html>