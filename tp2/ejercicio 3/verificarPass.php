<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar login</title>
</head>

<body>
    <?php
    $usuarios = [
        ["usuario" => "Agustina", "pass" => "12345678"],
        ["usuario" => "Agustina", "pass" => "agustina2020"],
        ["usuario" => "Mirko", "pass" => "msy123"],
        ["usuario" => "Veronica", "pass" => "neuquen123"],
        ["usuario" => "Bruno", "pass" => "bruno123"],
        ["usuario" => "dante", "pass" => "1234"]
    ];

    if ($_POST) {
        // echo '<pre>';
        // var_dump($_POST);
        // echo '</pre>';
        $user = $_POST['user'];
        $password = $_POST['password'];
        $validar = false;
        $i = 0;

        while (!$validar && $i < count($usuarios)) {

            if ($user == $usuarios[$i]['usuario'] && $password == $usuarios[$i]['pass']) {
                $validar = true;
                echo "Estas logueado!";
            } else {
                $i++;
            }
        }

        if($validar == false) {
            echo "Usuario incorrecto";
        }
    } else {
        echo "no hay datos ingresados";
    }


    ?>
</body>

</html>