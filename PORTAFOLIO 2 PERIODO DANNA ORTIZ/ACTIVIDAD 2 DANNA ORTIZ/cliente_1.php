<?php
$clientes = [
    ["nombre" => "Cliente 1", "factura" => 100.00],
    ["nombre" => "Cliente 2", "factura" => 150.50],
];
$meses = 6;
$mesActual = 1;
do {
    echo "Mes: $mesActual<br>";

    foreach ($clientes as $cliente) {
        echo "Factura para " . $cliente['nombre'] . ": $" . number_format($cliente['factura'], 2) . "<br>";
    
    }
    $mesActual++;
    echo "<br>";
} while ($mesActual <= $meses);
?>