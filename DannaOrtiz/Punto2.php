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
            </center>
        </section>
    </main>
</body>

</html>