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
                <?php
                $numeros = array();
                for ($i = 0; $i < 10; $i++) {
                    $numeros[] = rand(1, 100);
                }

                $pares = array();
                $impares = array();

                foreach ($numeros as $numero) {
                    if ($numero % 2 == 0) {
                        $pares[] = $numero;
                    } else {
                        $impares[] = $numero;
                    }
                }

                echo "<h2>Números Pares:</h2>";
                echo "<pre>";
                print_r($pares);
                echo "</pre>";

                echo "<h2>Números Impares:</h2>";
                echo "<pre>";
                print_r($impares);
                echo "</pre>";
                ?>
            </center>
        </section>
    </main>
</body>

</html>