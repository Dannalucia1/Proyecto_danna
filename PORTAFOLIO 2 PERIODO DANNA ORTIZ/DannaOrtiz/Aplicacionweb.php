<?php
$usuarioRegistrado = "usuario";
$contraseñaRegistrada = "contraseña";

$mensaje = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuarioIngresado = $_POST["usuario"];
    $contraseñaIngresada = $_POST["contraseña"];
    
    if ($usuarioIngresado == $usuarioRegistrado && $contraseñaIngresada == $contraseñaRegistrada) {
        $mensaje = "Bienvenido, usuario registrado. Tienes acceso completo a la aplicación.";
    } elseif ($usuarioIngresado == "invitado" && $contraseñaIngresada == "") {
        $mensaje = "Bienvenido, usuario invitado. Tu acceso es limitado.";
    } else {
        $mensaje = "Nombre de usuario o contraseña incorrectos. Inténtalo de nuevo.";
    }
}
?>

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
                <h1>Validación de acceso</h1>
                <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
                    <label for="usuario">Nombre de usuario:</label>
                    <input type="text" name="usuario" required>
                    <br><br>
                    <label for="contraseña">Contraseña:</label>
                    <input type="password" name="contraseña" required>
                    <br><br>
                    <input type="submit" value="Ingresar">
                    <br><br>
                </form>
            </center>

            <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<center><p>$mensaje</p></center>";
    }
    ?>
        </section>
    </main>
</body>

</html>