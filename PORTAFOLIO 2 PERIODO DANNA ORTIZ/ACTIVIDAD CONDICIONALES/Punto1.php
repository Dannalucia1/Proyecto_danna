<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="estilos.css">
    <title>Registro de Ventas Diarias</title>
</head>
<body>
    <h1>Registro de Ventas Diarias</h1>
    <form action="ventas.php" method="post">
    <?php
        for ($dia = 1; $dia <= 7; $dia++) {
            echo "<label for='dia$dia'>Ventas del día $dia: </label>";
            echo "<input type='number' name='dia$dia' step='0.01' required><br>";
        }
        ?>
        <input type="submit" value="Calcular Total Semanal">
    </form>
</body>
</html>