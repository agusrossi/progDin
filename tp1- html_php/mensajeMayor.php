<?php
var_dump($_GET);
if ($_GET) {
    $años = $_GET['edad'];
    if ($años >= 18) {
        "Hola sos mayor de edad";
    } else {
        echo "Hola estas chiquito";
    }
} else {
    echo "no se encontraron datos";
}
