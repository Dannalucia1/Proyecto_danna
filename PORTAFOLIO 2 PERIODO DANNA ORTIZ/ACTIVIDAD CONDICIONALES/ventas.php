<?php
$total_semanal = 0;

for ($dia = 1; $dia <= 7; $dia++) {
    $ventas_diarias = $_POST["dia$dia"];
    if ($ventas_diarias >= 0) {
        $total_semanal += $ventas_diarias;
    } else {
        echo "Por favor, ingrese números positivos para las ventas.<br>";
        exit;
    }
}

echo "El total de ventas de la semana es: $" . number_format($total_semanal, 2);
?>