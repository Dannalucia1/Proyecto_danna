<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Áreas</title>
</head>
<body>
    <h1>Calculadora de Áreas</h1>
    <form method="post" action="">
        <label for="figura">Selecciona la figura:</label>
        <select name="figura" required>
            <option value="cuadrado">Cuadrado</option>
            <option value="rectangulo">Rectángulo</option>
            <option value="triangulo">Triángulo</option>
            <option value="circulo">Círculo</option>
        </select><br>

        <label for="lado1">Lado 1 (si aplica):</label>
        <input type="number" name="lado1" step="0.01"><br>

        <label for="lado2">Lado 2 (si aplica):</label>
        <input type="number" name="lado2" step="0.01"><br>

        <label for="radio">Radio (si aplica):</label>
        <input type="number" name="radio" step="0.01"><br>

        <input type="submit" value="Calcular Área">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener los valores del formulario
        $figura = $_POST['figura'];
        $lado1 = $_POST['lado1'];
        $lado2 = $_POST['lado2'];
        $radio = $_POST['radio'];

        // Calcular el área según la figura
        switch ($figura) {
            case "cuadrado":
                $area = $lado1 * $lado1;
                break;
            case "rectangulo":
                $area = $lado1 * $lado2;
                break;
            case "triangulo":
                $area = 0.5 * $lado1 * $lado2;
                break;
            case "circulo":
                $area = M_PI * ($radio * $radio);
                break;
            default:
                $area = 0;
                echo "Figura no válida.";
        }

        // Mostrar el resultado del área
        if ($area > 0) {
            echo "El área de la figura seleccionada es: " . number_format($area, 2);
        }
    }
    ?>

</body>
</html>






