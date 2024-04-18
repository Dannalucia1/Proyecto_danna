<?php
$precio = "";
if (isset($_POST['edad'])) {
    $edad = $_POST['edad'];
    if ($edad < 4) {
        $precio = "Gratis";
    } elseif ($edad <= 18) {
        $precio = "5000 pesos";
    } else {
        $precio = "10000 pesos";
    }
}
?>

<form action="" method="post">
    Por favor, introduce la edad del cliente: <input type="number" name="edad">
    <input type="submit" value="Calcular Precio">
</form>

<?php
if ($precio !== "") {
    echo "El precio de la entrada es: $precio.";
}
?>
