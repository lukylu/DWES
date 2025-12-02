<?php
$animales = [
    "Perro", 
    "Gato", 
    "Ratón", 
    "Pájaro"
];
?>

<?php
$animalesSonando = [
    "Perro" => "Guau",
    "Gato" => "Miau",
    "Ratón" => "Chirp",
    "Pájaro" => "Pío"
];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>DWES - Tema 2 - Tarea 01</h1>
    <h2>Arrays</h2>

    <ul>
        <?php
        foreach($animales as $animal){
        ?>
            <li><?php echo $animal; ?></li>
        <?php } ?>
    </ul>

    <ul>
        <?php
        sort($animales);
        foreach($animales as $animal){
        ?>
            <li><?php echo $animal; ?></li>
        <?php } ?>
    </ul>

    <ul> 
        <?php
        rsort($animales);
        foreach ($animales as $animal){
        ?>
            <li><?php echo $animal; ?></li>
        <?php } ?>
    </ul>

    <ul>
        <?php
        for($i=0;$i<count($animales); $i++){
        ?>
            <li><?php echo $animales[$i]; ?></li>
        <?php } ?>
    </ul>
    
    <ul>
        <?php
        foreach($animalesSonando as $animal => $sonido){
        ?>
            <li><?php echo "El " . $animal . " hace " . $sonido; ?></li>
        <?php } ?>
    </ul>

</body>
</html>