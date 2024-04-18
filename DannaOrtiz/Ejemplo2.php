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
                <H2>Suma de 2 numeros en PHP</H2>
                <form action="Ejemplo2.php" method="POST">
                    <table>
                        <tr>
                            <td>
                                <p>Nota 1</p>
                                <input type="text" name="numero1">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Nota 2</p>
                                <input type="text" name="numero2">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Nota 3</p>
                                <input type="text" name="numero3">
                            </td>
                        </tr>
                        <tr>
                            <td> <input type="submit" value="Sumar"> </td>
                        </tr>
                    </table>
                </form>

                <br><br>

                <?php
if($_POST)
{
$num1 = $_POST
['numero1'];
$num2 = $_POST
['numero2'];
$num3 = $_POST
['numero3'];
$suma = $num1 + $num2 + $num3;
 echo "La suma de: ".$num1." y ".$num2." y ".$num3." es: ".$suma;

}
?>
            </center>
        </section>
    </main>
</body>

</html>