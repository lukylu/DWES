<?php

$alumnos[1]->matricularEnAsignatura($asignaturas[0]);
$alumnos[2]->matricularEnAsignatura($asignaturas[1]);
$alumnos[3]->matricularEnAsignatura($asignaturas[2]);
$alumnos[4]->matricularEnAsignatura($asignaturas[0]);
$alumnos[5]->matricularEnAsignatura($asignaturas[1]);
$alumnos[6]->matricularEnAsignatura($asignaturas[1]);
$alumnos[7]->matricularEnAsignatura($asignaturas[2]);
$alumnos[8]->matricularEnAsignatura($asignaturas[1]);
$alumnos[9]->matricularEnAsignatura($asignaturas[0]);

$alumnosConDosAsignaturas = array_filter($alumnos, function ($alumno) {
    return count($alumno->getAsignaturas()) >= 2;
})
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Profesores</h1>

<?php
$profesores[1]->matricularEnAsignatura($asignaturas[0]);
$profesores[2]->matricularEnAsignatura($asignaturas[1]);
$profesores[3]->matricularEnAsignatura($asignaturas[2]);
$profesores[4]->matricularEnAsignatura($asignaturas[0]);
$profesores[5]->matricularEnAsignatura($asignaturas[1]);
$profesores[6]->matricularEnAsignatura($asignaturas[1]);
$profesores[7]->matricularEnAsignatura($asignaturas[2]);
$profesores[8]->matricularEnAsignatura($asignaturas[1]);
$profesores[9]->matricularEnAsignatura($asignaturas[0]);
?>
    
</body>
</html>