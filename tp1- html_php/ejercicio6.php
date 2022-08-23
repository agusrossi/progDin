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

    <form id="form2" name="form2" method="POST" action="deportes.php">
        Nombre: <input name="nombre" type="text" id="nombre" /> <br />
        Apellido: <input name="apellido" type="text" id="apellido" /> <br />
        Edad: <input name="edad" type="number" id="edad" /> <br />
        Direccion: <input name="direccion" type="text" id="direccion" /> <br />
        <input type="radio" name="estudio" id="estudion't" value="no tiene">
        <label for="estudion't"> No tiene estudios</label><br />
        <input type="radio" name="estudio" id="primario" value="primarios">
        <label for="primario"> Estudios primarios</label><br />
        <input type="radio" name="estudio" id="secundario" value="secundarios">
        <label for="secundario"> Estudios secundarios</label><br />
        <label for="sexo">Elija su sexo</label>
        <select name="sexo" id="sexo">
            <option value="femenino">Femenino</option>
            <option value="masculino">Masculino</option>
            <option value="otro">Otro</option>
        </select><br /><br />
        <input type="checkbox" name="deportes[]" id="futbol" value="futbol">
        <label for="futbol"> Futbol</label>
        <input type="checkbox" name="deportes[]" id="basket" value="basket">
        <label for="basket"> Basket</label>
        <input type="checkbox" name="deportes[]" id="voley" value="voley">
        <label for="voley">Voley</label>
        <input type="checkbox" name="deportes[]" id="tennis" value="tennis">
        <label for="tennis">Tennis</label><br />

        <input type="submit" name="Submit" value="Enviar">
    </form>
</body>

</html>