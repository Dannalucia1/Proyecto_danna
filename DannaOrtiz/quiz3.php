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
                    <label for="numero">Introduce un número:</label>
                    <input type="number" id="numero" name="numero" required>
                    <button type="submit">Mostrar Tabla</button>
                </form>

                <?php
    if (isset($_POST['numero'])) {
        $numero = $_POST['numero'];
        echo "<h3>Tabla del $numero</h3>";
        echo "<table>";
        for ($i = 1; $i <= 10; $i++) {
            echo "<tr><td>$numero</td><td>x</td><td>$i</td><td>=" . ($numero * $i) . "</td></tr>";
        }
        echo "</table>";
    }
    ?>
            </center>
        </section>
    </main>
</body>

</html>