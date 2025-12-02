<?php
    
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>menú</title>
</head>
<body>

<?php if (isset($_SESSION["rol"])) { ?>
<li><a href="logout.php">Logout</a></li>
<?php } else { ?>
<li><a href="login.php">Login</a></li>
<?php } ?>

<?php if (isset($_SESSION["rol"]) && $_SESSION["rol"] == "admin") { ?>
<li><a href="admin-pizzas.php">Administrar pizzas</a></li>
<?php } ?>
    
</body>
</html>