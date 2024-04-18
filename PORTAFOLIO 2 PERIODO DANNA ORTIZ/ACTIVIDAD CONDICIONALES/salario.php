<?php
$empleados = [
    ['nombre' => 'Empleado 1', 'sueldo' => 2500.00],
    ['nombre' => 'Empleado 2', 'sueldo' => 3000.00],
];
$totalSueldos = 0;
$contador = 0;
$indice = 0;
do {
    $totalSueldos += $empleados[$indice]['sueldo'];
    $contador++;
    $indice++;
} while ($indice < count($empleados));

$salarioPromedio = $totalSueldos / $contador;

echo "El salario promedio es: $" . number_format($salarioPromedio, 2);
?>