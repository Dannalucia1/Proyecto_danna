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
    <meta charset="UTF-8">
    <title>Evaluación de calificaciones</title>
</head>
<body>
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
</body>
</html>
