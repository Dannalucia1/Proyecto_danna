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
                <h1>Calculadora de IMC</h1>
                <form method="post" action="Ejemplo3.php">
                    <label for="peso">Peso (kg):</label>
                    <input type="number" name="peso" step="0.01" required><br>

                    <label for="altura">Altura (metros):</label>
                    <input type="number" name="altura" step="0.01" required><br>

                    <input type="submit" value="Calcular IMC">
                </form><br><br>
                <h1>Resultado del IMC</h1>

                <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $peso = $_POST['peso'];
    $altura = $_POST['altura'];

    $imc = $peso / ($altura * $altura);

    echo "Tu Índice de Masa Corporal (IMC) es: " . number_format($imc, 2);

    if ($imc < 18.5) {
        echo "<p>Bajo peso.</p>";
    } elseif ($imc >= 18.5 && $imc < 24.9) {
        echo "<p>Peso saludable.</p>";
    } elseif ($imc >= 25 && $imc < 29.9) {
        echo "<p>Sobrepeso.</p>";
    } else {
        echo "<p>Obesidad.</p>";
    }
}

    ?>

            </center>
        </section>
    </main>
</body>

</html>