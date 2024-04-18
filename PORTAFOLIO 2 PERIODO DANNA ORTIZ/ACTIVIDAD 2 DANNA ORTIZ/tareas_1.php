<?php
    $tareas = ["Ir al supermercado", "Llamar al electricista", "Pagar las facturas", "Programar reunión con el equipo", "Leer un libro"];

    for ($i = 0; $i < count($tareas); $i++) {
        echo "<li>" . $tareas[$i] . "</li>";
    }
?>