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
                <div class='form'>
                    <h1>Registro de Ventas Diarias</h1><br><br>
                    <form method='POST' action='punto1.php'>
                        <div class='input-group flex-nowrap'>
                            <span class='input-group-text' id='addon-wrapping'>DIGITE VENTA:</span>
                            <input type='number' class='form-control' aria-describedby='addon-wrapping' id='ventas'
                                name='ventas'>
                        </div><br>
                        <button type='submit' class='btn btn-dark'>Calcular</button>
                        <br><br><br>
                    </form>
                </div>


                <?php
    $total = 0;
    $dia = 0;
      if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['ventas'])) {
        do {
            $ventas = $_POST['ventas'];
            $total += $ventas;
            $dia++;
            echo "<br>Dia: $dia ";
            echo "<br>Total acumulado de Ventas Semanal: $$total <br>";   
    } while ($dia < 7);    
        }
    ?>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
    </center>
    </section>
    </main>
</body>

</html>