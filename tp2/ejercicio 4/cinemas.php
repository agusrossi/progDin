<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../../src/js/jquery.js"></script>
    <script src="../../src/js/jquery.validate.min.js"></script>
    <script src="../../src/js/localization/messages_es.js"></script>
    <script src="../../node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="../../node_modules/bootstrap/dist/css/bootstrap.css">


    <title>Cinemas</title>
</head>

<body>
    <style>
        label {

            font-weight: bold;
        }

        .error {
            color: red;
            font-style: italic;
        }
    </style>

    <div class="m-0 vh-100 row justify-content-center align-items-center" style="background-color: gray; box-shadow: 5px 10px #888888;">

        <div class="col-xs-12 col-md-10" style="background-color: #ede9e8; padding: 20px; border-radius: 4px;">
            <div class="card-header" style="font-weight: bold; margin-bottom: 5px; text-align: center;">
                <h1><b>CINEM@S</b></h1>
            </div>
            <div>
                <form id="form-cine" class="needs-validation" novalidate action="des-pelicula.php" method="POST">

                    <div class="card-body">

                        <div class="row">

                            <div class="form-group col-md-6">
                                <label for="titulo-pelicula">Titulo</label>
                                <input name="titulo-pelicula" id="titulo-pelicula" type="text" placeholder="" class="form-control inputs" required>
                                <div class="valid-feedback">
                                    ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                    Este campo es obligatorio
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="actor-pelicula">Actores</label>
                                <input name="actor-pelicula" id="actor-pelicula" type="text" class="form-control inputs" required>
                                <div class="valid-feedback">
                                    ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                    Este campo es obligatorio
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="director-pelicula">Director</label>
                                <input required name="director-pelicula" id="director-pelicula" type="text" class="form-control inputs">
                                <div class="valid-feedback">
                                    ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                    Este campo es obligatorio
                                </div>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="guion-pelicula">Guion</label>
                                <input required name="guion-pelicula" id="guion-pelicula" type="text" class="form-control inputs">
                                <div class="valid-feedback">
                                    ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                    Este campo es obligatorio
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="produccion-pelicula">Produccion</label>
                                <input required name="produccion-pelicula" id="produccion-pelicula" type="text" class="form-control inputs">
                                <div class="valid-feedback">
                                    ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                    Este campo es obligatorio
                                </div>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="anio-pelicula">Año</label>
                                <input required name="anio-pelicula" id="anio-pelicula" type="number" min="1" maxlength="4" class="form-control inputs">
                                <div class="valid-feedback">
                                    ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                    Este campo es obligatorio
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="negrita" for="genero">Género</label>
                                <select class="form-select" name="genero" id="genero" required>
                                    <option selected disabled value="">-- Seleccione --</option>
                                    <option value="1">Comedia</option>
                                    <option value="2">Drama</option>
                                    <option value="3">Terror</option>
                                    <option value="4">Románticas</option>
                                    <option value="5">Suspenso</option>
                                </select>
                                <div class="valid-feedback">
                                    ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                    Este campo es obligatorio
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="nacionalidad-pelicula">Nacionalidad</label>
                                <input required name="nacionalidad-pelicula" id="nacionalidad-pelicula" type="text" class="form-control inputs">
                                <div class="valid-feedback">
                                    ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                    Este campo es obligatorio
                                </div>
                            </div>

                        </div>

                        <div class="row">


                            <div class="form-group col-md-6">
                                <label for="duracion-pelicula">Duracion</label>
                                <input required name="duracion-pelicula" id="duracion-pelicula" type="number" class="form-control inputs">
                                <small>(Minutos)</small>
                                <div class="valid-feedback">
                                    ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                    Este campo es obligatorio
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="edad">Restricciones de edad</label><br>

                                <input required type="radio" name="edad" id="radiobtn" value="Todo Publico" class="inputs">
                                <label style="font-weight:400;" for="todoPublico">Todo Publico</label>

                                <input required type="radio" name="edad" id="radiobtn" value="Mayores a 7 años" class="inputs">
                                <label style="font-weight:400;" for="mayor7">Mayores a 7 años</label>

                                <input required type="radio" name="edad" id="radiobtn" value="Mayores de 18 años" class="inputs">
                                <label style="font-weight:400;" for="mayor18">Mayores de 18 años</label>
                            </div>
                        </div>
                        <div class="row">
                            <label for="sinopsis-pelicula">Sinopsis</label>
                            <textarea class="form-control inputs" name="sinopsis-pelicula" id="sinopsis-pelicula" cols="30" rows="3" required></textarea>
                        </div>

                    </div>

                    <div class="d-flex justify-content-end gap-3" style="margin-top: 10px;">
                        <input required class="btn btn-primary " id="btnSubmit" type="submit" value="Enviar">
                        <input required class="btn btn-light" id="borrar" type="button" value="Borrar">
                    </div>

                </form>

            </div>
        </div>

    </div>
    </div>

    <script>
        // Ejemplo de JavaScript inicial para deshabilitar el envío de formularios si hay campos no válidos
        (function() {
            'use strict'

            // Obtener todos los formularios a los que queremos aplicar estilos de validación de Bootstrap personalizados
            var forms = document.querySelectorAll('.needs-validation')

            // Bucle sobre ellos y evitar el envío
            Array.prototype.slice.call(forms)
                .forEach(function(form) {
                    form.addEventListener('submit', function(event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
        })()

        const borrar = document.getElementById('borrar');
        const inputs = document.querySelectorAll('.inputs');
        const selector = document.querySelector('SELECT');
        const labels = document.getElementById('radiobtn');

        borrar.addEventListener('click', function() {
            for (let i = 0; i < inputs.length; i++) {
                inputs[i].value = '';
                selector.value = 0;

                if (labels[i].checked == true) {
                    labels[i].checked = false;
                }
            }
        });
    </script>
</body>

</html>