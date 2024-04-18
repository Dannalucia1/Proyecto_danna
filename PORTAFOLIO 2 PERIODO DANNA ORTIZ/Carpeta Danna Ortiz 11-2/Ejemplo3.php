<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de IMC</title>
</head>
<body>
    <h1>Calculadora de IMC</h1>
    <form method="post" action="Ejemplo3.php">
        <label for="peso">Peso (kg):</label>
        <input type="number" name="peso" step="0.01" required><br>

        <label for="altura">Altura (metros):</label>
        <input type="number" name="altura" step="0.01" required><br>

        <input type="submit" value="Calcular IMC">
    </form>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>Resultado del IMC</title>
</head>
<body>
    <h1>Resultado del IMC</h1>

    <?php
    // Obtener los valores de peso y altura desde el formulario
    $peso = $_POST['peso'];
    $altura = $_POST['altura'];

    // Calcular el IMC
    $imc = $peso / ($altura * $altura);

    // Mostrar el resultado del IMC
    echo "Tu Índice de Masa Corporal (IMC) es: " . number_format($imc, 2);

    // Interpretar el resultado del IMC
    if ($imc < 18.5) {
        echo "<p>Bajo peso.</p>";
    } elseif ($imc >= 18.5 && $imc < 24.9) {
        echo "<p>Peso saludable.</p>";
    } elseif ($imc >= 25 && $imc < 29.9) {
        echo "<p>Sobrepeso.</p>";
    } else {
        echo "<p>Obesidad.</p>";
    }
    ?>

</body>
</html>
