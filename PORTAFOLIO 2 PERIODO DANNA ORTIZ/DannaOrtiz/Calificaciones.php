<?php
$mensaje = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $calificacion = $_POST["calificacion"];
    
    if ($calificacion >= 90) {
        $mensaje = "Excelente trabajo. ¡Felicidades por tu sobresaliente rendimiento!";
    } elseif ($calificacion >= 80 && $calificacion <= 89) {
        $mensaje = "Buen trabajo. Tu esfuerzo está rindiendo frutos.";
    } elseif ($calificacion >= 70 && $calificacion <= 79) {
        $mensaje = "Aprobado. Sigue esforzándote para mejorar tus resultados.";
    } else {
        $mensaje = "No aprobado. Te animamos a buscar ayuda adicional y mejorar en la siguiente evaluación.";
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
                <h1>Evaluación de calificaciones</h1>
                <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
                    <label for="calificacion">Ingresa la calificación del estudiante (0-100):</label>
                    <input type="number" name="calificacion" min="0" max="100" required>
                    <br>
                    <input type="submit" value="Evaluar">
                </form>

                <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<p>$mensaje</p>";
    }
    ?>
            </center>
        </section>
    </main>
</body>

</html>