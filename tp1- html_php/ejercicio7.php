<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
</head>

<body>
    <form id="ejercicio7" name="ejercicio7" method="GET" action="operaciones.php">
        <label for="num1">Ingrese dos numeros</label><br><br>
        <input type="text" name="num1" id="num1"><br>
        <input type="text" name="num2" id="num2"><br>
        <select name="operaciones" id="operaciones">
            <option value="suma">
                SUMAR
            </option>
            <option value="resta">
                RESTAR
            </option>
            <option value="multiplicar">
                MULTIPLICAR
            </option>
            <option value="division">
                DIVIR
            </option>
        </select><br><br>
        <input type="submit" name="Submit" value="Aceptar">
    </form>
</body>

</html>