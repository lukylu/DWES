<?php

    $lineas = 25;
    if (isset($_GET['lines'])) {
        $lineas = max(1, (int) $_GET['lines']);
    }
    echo "<pre>";

    for ($i = 0; $i < $lineas; $i++) {
        $asteriscos = 2 * $i + 1;           
        $espacio = $lineas - $i - 1;    
        echo str_repeat(' ', $espacio) . str_repeat('*', $asteriscos) . PHP_EOL;
    }
        echo "</pre>";

?>