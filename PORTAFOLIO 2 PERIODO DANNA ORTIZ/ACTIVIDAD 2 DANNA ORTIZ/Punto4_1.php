<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de Sueldos de Empleados</title>
</head>
<body>
    <h1>Ingreso de Sueldos de Empleados</h1>
    <form action="salario.php" method="post">
        <p>Ingrese la cantidad de empleados: <input type="number" name="cantidad_empleados" min="1" required></p>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>