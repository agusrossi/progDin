<?php
if ($_POST) {
    echo "Hola, yo soy {$_POST['nombre']} , {$_POST['apellido']} tengo {$_POST['edad']} años y vivo en {$_POST['direccion']}";
} else {
    echo "no se encontraron datos";
}
