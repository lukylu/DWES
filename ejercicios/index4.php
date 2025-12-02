<?php
    function saludo() {
        echo "Hola, bienvenido a mi sitio web!<br>";
    }

    function saludo2() {
        return "Hola, bienvenido a mi sitio web!<br>";
    }

    saludo();
    $contestacion = saludo2();
    echo $contestacion;

    function saludo3($nombre="Desconocido") {
        return "Hola $nombre, bienvenido a mi sitio web!<br>";
    }
    $contestacion = saludo3();
    echo $contestacion;

    function sumaResta($numero1, $numero2, $operacion) {    
        if ($operacion == "suma") {
            return $numero1 + $numero2;
        } elseif ($operacion == "resta") {
            return $numero1 - $numero2;
        } else {
            return "Operación no válida";
        }
    }

    echo sumaResta(5, 3, "resta");

    /*
    function sumaResta2($numero1, $numero2) {
        if ($numero1 == "+") {
            return $numero1 + $numero2;
        } else {
            return $numero1 - $numero2;
        }
    }

    echo sumaResta2(5, 3);
    */ 
?>