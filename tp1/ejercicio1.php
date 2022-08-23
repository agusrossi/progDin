<html>

<head>

</head>

<body>
    <?php

    /**
     * EJERCICIO 1
     */
    // $aux=14;
    // echo "el valor de aux es: ".$aux;

    /**
     * EJERCICIO 2
     */
    // $nombre = "Agustina";
    // $apellido = "Rossi";
    // $edad = 24;
    // $direccion = "av. arg 123";
    // // echo "nombre " . strtoupper($nombre) . "<br> Apellido " . strtoupper($apellido) . "<br>edad " . $edad . "<br>Direccion " . strtoupper($direccion);

    /**
     * EJERCICIO 3
     */
    // $array = [
    //     "nombre" => $nombre,
    //     "apellido" => $apellido,
    //     "edad" => $edad,
    //     "direccion" => $direccion
    // ];
    // foreach ($array as $key => $posicion) {
    //     echo $key . " " . $posicion . "<br>";
    // }


    /**
     * EJERCICIO 4
     */
    // $a = 15;
    // $b = 94;
    // $c = 73;
    // echo min($a, $b, $c);
    // echo max($a, $b, $c);


    /**
     * EJERCICIO 5
     */
    // $valor = 0;
    // for ($i = 0; $i < 11; $i++) {
    //     $valor = 2 * $i;
    //     echo "<h2> 2 x {$i} = {$valor}</h2>";
    // }
    //falta while y do while


    /**
     * EJERCICIO 6
     */
    // $horario = [
    //     "lunes" => ["arquitectura" => 20, "diseño grafico" => 10, "jasdfh" => 34],
    //     "martes" => ["diseño grafico" => "16hs a 20hs"],
    //     "miercoles" => ["arquitectura" => "16hs a 20hs"],
    //     "jueves" => ["prog. dinamica" => "16hs a 20hs"],
    //     "viernes" => ["prog. dinamica" => "16hs a 20hs"]
    // ];
    // foreach ($horario as $dia => $valor) {
    //     echo "<h5>Dia: {$dia}</h5>";
    //     foreach ($valor as $materia => $cargaHoraria) {
    //         echo "<h6> materia: {$materia}  horario: {$cargaHoraria}</h6>";
    //     }
    // }


    /**
     * EJERCICIO 7
     */


    /**
     * EJERCICIO 8
     */


    /**
     * EJERCICIO 9
     */
    // $numeros = [3, 1, 5, 3, 8, 13, 234, 57, 98, 8];
    // $aux = $numeros[0];
    // for ($i = 1; $i < count($numeros); $i++) {
    //     if ($aux < $numeros[$i]) {
    //         $aux = $numeros[$i];
    //     }
    // }
    // echo "el numero mas grande es: " . $aux;

    /**
     * EJERCICIO 10
     */

    // // <?php
    // //Incluir aquí la definición de la function
    // divisores($parametro);
    // $num=20;
    // echo "Los divisores de $num son: ";
    // foreach(divisores($num) as $divisor)
    // echo "$divisor <br />";
    // date_default_timezone_set('America/Argentina/Buenos_Aires');
   

    $hora = date("H:i");
    $horaActual = strtotime("now");
    if ($horaActual >= strtotime("5:00") && $horaActual <= strtotime("12:59")) {
        echo "Buenos dias ";
    } else {
        if ($horaActual >= strtotime("13:00") && $horaActual <= strtotime("19:59")) {
            echo "buenas tardes";
        } else {
            if ($horaActual >= strtotime("20:00") && $horaActual <= strtotime("4:59")) {
                echo "buenas noches";
            }
        }
    }



    /**
     * EJERCICIO 11
     */


    /**
     * EJERCICIO 12
     */


    ?>
</body>

</html>