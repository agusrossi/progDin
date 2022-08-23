<?php
if ($_GET) {
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $operacion = $_GET['operaciones'];
    $resultado = 0;
    echo "<h2>El resultado es: </h2><br>";
    switch ($operacion) {
        case "suma":
            $resultado = $num1 + $num2;
            echo "{$num1} + {$num2} = {$resultado}";
            break;
        case "resta":
            $resultado = $num1 - $num2;
            echo "{$num1} - {$num2} = {$resultado}";
            break;
        case "multiplicar":
            $resultado = $num1 * $num2;
            echo "{$num1} * {$num2} = {$resultado}";
            break;
        case "division":
            $resultado = $num1 / $num2;
            echo "{$num1} / {$num2} = {$resultado}";
            break;
    }
} else {
}
