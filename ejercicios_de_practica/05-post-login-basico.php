<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"];
    $clave = $_POST["clave"];
    if ($usuario == "Paco");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if (isset($eror)) {
    ?>
        <p>Revise su usuario y contraseña</p>
    <?php
    }
    ?>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="usuario">Usuario
            <input type="text" name="usuario" value="<?php if (isset($usuario)) echo $usuario; ?>">
        </label>
        <label for="clave">Clave



    ?>
</body>
</html>