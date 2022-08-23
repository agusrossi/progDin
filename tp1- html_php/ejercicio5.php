<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 5</title>
    <style>
        form input {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>

    <form id="form2" name="form2" method="POST" action="">
        Nombre: <input name="nombre" type="text" id="nombre" /> <br />
        Apellido: <input name="apellido" type="text" id="apellido" /> <br />
        Edad: <input name="edad" type="number" id="edad" /> <br />
        Direccion: <input name="direccion" type="text" id="direccion" /> <br />
        <input type="radio" name="estudio" id="estudio">
        <label for="estudio"> No tiene estudios</label><br />
        <input type="radio" name="estudio" id="estudio">
        <label for="estudio"> Estudios primarios</label><br />
        <input type="radio" name="estudio" id="estudio">
        <label for="estudio"> Estudios secundarios</label><br />
        <label for="sexo">Elija su sexo</label>
        <select name="sexo" id="sexo">
            <option value="femenino">Femenino</option>
            <option value="masculino">Masculino</option>
            <option value="otro">Otro</option>
        </select><br />
        <input type="submit" name="Submit" value="Enviar">
    </form>
</body>

</html>