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
                $dias = array("Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sábado", "Domingo",);
                echo "<h2>Días de la semana: <br><br></h2>";
                echo "<h4>" . $dias[0] . "<br><br>" . $dias[1] . "<br><br>" . $dias[2] . "<br><br>" . $dias[3] . "<br><br>" . $dias[4] . "<br><br>" . $dias[5] . "<br><br>" . $dias[6] . "</h4>";

                ?>
            </center>
        </section>
    </main>
</body>

</html>