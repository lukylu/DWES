<?php
$cadena_conexion = 'mysql:dbname=users;host=localhost';
$usuario = 'root';
$clave = '';

try {
    $conecta = new PDO($cadena_conexion, $usuario, $clave);
    $query = 'SELECT user, rol FROM users';
    $consuta = $conecta->query($query);
    echo "Registros encontrados: " . $consuta->rowCount() . "<br><br>";
    foreach ($consulta as $row) {
        print $row["user"] . " - ";
        print $row["rol"] . "<br>";
    }
} catch (PDOException $e) {
    echo "Error conectando a la base de datos: " . $e->getMessage();
}
?>