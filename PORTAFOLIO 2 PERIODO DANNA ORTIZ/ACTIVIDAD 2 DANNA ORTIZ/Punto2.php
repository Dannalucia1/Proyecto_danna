<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="estilos2.css">
    <title>Generación de Facturas Mensuales</title>
</head>
<body>
    <h1>Generador de Facturas Mensuales</h1>
    <form action="cliente.php" method="post">
        <label for="meses">Número de Meses:</label>
        <input type="number" id="meses" name="meses" min="1" max="12" required>
        <label for="cliente">Seleccionar Cliente:</label>
        <select id="cliente" name="cliente">
            <option value="todos">Todos los Clientes</option>
        </select>

        <input type="submit" value="Generar Facturas">
    </form>
</body>
</html>