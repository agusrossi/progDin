<?php
if ($_GET) {
    $horas = [$_GET['lunes'], $_GET['martes'], $_GET['miercoles'], $_GET['jueves'], $_GET['viernes']];
    $cantHoras = 0;
    for ($i = 0; $i < count($horas); $i++) {
        $cantHoras += $horas[$i];
    }
    echo "Horas totales : " . $cantHoras;
} else {
    echo "no se ingresaron datos";
}
