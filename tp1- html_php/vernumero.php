<?php
if ($_GET) {
    $numero = $_GET['numero_form'];
    if ($numero > 0) {
        echo "el numero es positivo";
    } else {
        if ($numero == 0) {
            echo "el numero es cero";
        } else {
            echo "el numero es negativo";
        }
    }
} else {
    echo "no se ingresaron datos";
}
