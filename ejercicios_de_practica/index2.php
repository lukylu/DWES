<?php
$menu = [
    "Primeros platos" => [
        "Ensalada", 
        "Sopa", 
        "Pasta",
        "Arroz"
    ],

    "Segundos platos" => [
        "Pollo", 
        "Pescado", 
        "Carne",
        "Vegetales"
    ],
]
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP2</title>
</head>
<body>

    <?php
    foreach($menu as $categoria => $platos){
    ?>
        <h3><?php echo $categoria; ?></h3>
        <ul>
            <?php
            foreach($platos as $plato){
                ?>
                <li><?php echo $plato; ?></li>
                <?php
            }
            ?>
        </ul>
    <?php
    }
    ?>

    <?php
    foreach($menu as $categoria => $platos){
    ?>
    <h3><?php echo $categoria; ?></h3>
    <?php
        foreach($platos as $plato){
    ?>
    <p><?php echo $plato; ?></p>
    <?php
        }
    }
    ?>

</body>
</html>