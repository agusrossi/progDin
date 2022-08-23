<?php
if ($_POST) {
    $cantDeportes = count($_POST['deportes']);

    echo "Hola, yo soy {$_POST['nombre']}, {$_POST['apellido']} tengo {$_POST['edad']} años y vivo en {$_POST['direccion']} y juego {$cantDeportes} deportes";
} else {
    echo "no se encontraron datos";
}
