<?php
$descuento = "";
if (isset($_POST['puntos'])) {
    $puntos = $_POST['puntos'];
    if ($puntos < 100) {
        $descuento = "10%";
    } elseif ($puntos <= 150) {
        $descuento = $puntos < 150 ? "12%" : "15%";
    } else {
        $descuento = "20%";
    }
}
?>

<form action="" method="post">
    Por favor, introduce el número de puntos: <input type="number" name="puntos">
    <input type="submit" value="Calcular Descuento">
</form>

<?php
if ($descuento !== "") {
    echo "Se aplicará un descuento del $descuento.";
}
?>
