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
                <form action="" method="post">
                    <input class="campotexto" type="text" name="productos" id="productos" placeholder="nombre del producto">
                    <br><br>
                    <input class="campotexto" type="number" name="cant" id="cant" placeholder="cantidad del producto">
                    <br><br>
                    <input class="button-87" type="submit" value="Imprimir">
                </form>

                <?php

                if ($_SERVER["REQUEST_METHOD"] == "POST") {

                    $producton = $_POST["productos"];
                    $cant = $_POST["cant"];



                    $productos = array($producton => $cant);

                    foreach ($productos as $producton => $cant) {
                        echo $producton . " tiene " . $cant . " cantidades.";
                    }
                }

                ?>
            </center>
        </section>
    </main>
</body>

</html>