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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Validación de acceso</title>
</head>
<body>
    <h1>Validación de acceso</h1>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
        <label for="usuario">Nombre de usuario:</label>
        <input type="text" name="usuario" required>
        <br>
        <label for="contraseña">Contraseña:</label>
        <input type="password" name="contraseña" required>
        <br>
        <input type="submit" value="Ingresar">
    </form>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<p>$mensaje</p>";
    }
    ?>
</body>
</html>
