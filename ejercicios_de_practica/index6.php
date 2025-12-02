<?php

$menu = [
    "Primeros platos" => [
        "Ensalada", 
        "Sopa", 
        "Pasta",
        "Arroz"
    ],

    "Precios" => [
        "Ensalada" => 5,
        "Sopa" => 4,
        "Pasta" => 6,
        "Arroz" => 5
    ]
]
;

    function precio($plato) {
        return $menu["Precios"][$plato];
    }

    function total() {
        $total = 0;
        foreach ($menu["Precios"] as $precio) {
            $total += $precio;
        }
        return $total;
    }

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comanda</title>
</head>
<body>

    <ul>
        <?php 

            echo precio();
            echo total();

        ?>
    </ul>


    
</body>
</html>