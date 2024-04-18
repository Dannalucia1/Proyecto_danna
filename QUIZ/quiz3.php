<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tabla de Multiplicar con PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
            text-align: left;
        }
        table {
            margin-top: 10px;
        }
    </style>
</head>
<body>
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
</body>
</html>
