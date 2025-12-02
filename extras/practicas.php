<?php
require_once('./bbdd.php');
 
try {
    $conecta = new PDO($cadena_conexion, $usuario, $clave);
    $query = 'SELECT id, nombre, precio, imagen FROM pizzas';
    $consulta = $conecta->prepare($query);
    $consulta->execute();
} catch (PDOException $e) {
    $message = 'Error conectando a la base de datos: ' . $e->getMessage();
}
?>
 
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizzeria - La mia massa</title>
    <style>
        img {
            width: 150px;
        }
    </style>
</head>
<body>

    <?php require_once('./menu.php'); ?>

    <h1>Lista de pizzas</h1>

    <?php
    if($message=="") {
    ?>

    <table border="1" cellpadding="10" cellspacing="10">
        <tr>
            <th>Imagen</th>
            <th>Nombre</th>
            <th>Precio</th>
        </tr>

        <?php
        foreach ($consulta as $pizza):
        ?>

        <tr>
            <td><img src="./assets/images/pizzas/<?php htmlspecialchars($pizza["imagen"]); ?>" alt="Imagen de pizza"></td>
            <td><a href="pizza.php?id=<?= $pizza["id"] ?>"><?= $pizza["nombre"]; ?></a></td>
            <td><?= $pizza["precio"]; ?></td>
        </tr>

        <?php
        endforeach;
        ?>

    </table>

    <?php
    } else {
    ?>

    <p><?= $message; ?></p>

    <?php
    }
    ?>
 
<?php
if(isset($_GET["ID"])){
    $ID=$_GET["ID"];
}

$consulta -> BINDPARAM(":ID",$ID);
$consulta -> EXECUTE();

foreach($consulta as $pizza){
    $nombre = $pizza["nombre"];
    $precio = $pizza["precio"];
    $imagen = $pizza["imagen"];
    $descripcion = $pizza["descripcion"];
}
?>

</body>
</html>