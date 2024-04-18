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

                $productos = array("Manzana" => 2.5, "Plátano" => 1.8, "Naranja" => 3.2, "Pera" => 2.0);
                $producto_mas_caro = "";

                $precio_mas_alto = 0;

                foreach ($productos as $producto => $precio) {

                    if ($precio > $precio_mas_alto) {

                        $precio_mas_alto = $precio;

                        $producto_mas_caro = $producto;
                    }
                }

                echo "<h4>La fruta más cara es $producto_mas_caro, con un precio de: $precio_mas_alto <h4>";

                ?>
            </center>
        </section>
    </main>
</body>

</html>