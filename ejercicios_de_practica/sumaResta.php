<?php

    function sumaResta($numero1, $numero2, $operacion) {    
        if ($operacion == "suma") {
            return $numero1 + $numero2;
        } elseif ($operacion == "resta") {
            return $numero1 - $numero2;
        } else {
            return "Operación no válida";
        }
    }

?>