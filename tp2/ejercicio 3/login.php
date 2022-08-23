<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="../../src/js/jquery.js"></script>
    <script src="../../src/js/jquery.validate.min.js"></script>
    <script src="../../src/js/localization/messages_es.js"></script>
    <script src="../../node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="../../node_modules/bootstrap/dist/css/bootstrap.css">

    <title>Ejercicio 3</title>
</head>

<body>

    <div class="m-0 vh-100 row justify-content-center align-items-center" style="background-color: gray;">

        <div class="col-xs-12 col-md-3" style="background-color: #ede9e8; padding: 20px; border-radius: 4px;">
            <div class="card-header" style="font-weight: bold; margin-bottom: 5px; text-align: center;">
                Member Login
            </div>

            <div class="card-body">
                <form id="formulario" action="verificarPass.php" method="POST">
                    <div>

                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"></path>
                                    </svg>
                                </span>
                                <input name="user" id="user" type="text" class="form-control" placeholder="Username" aria-label="Input group example" aria-describedby="basic-addon1">
                            </div>
                        </div>

                        <br>

                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16">
                                        <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z" />
                                    </svg>
                                </span>
                                <input name="password" id="password" type="password" class="form-control" placeholder="Password" aria-label="Input group example" aria-describedby="basic-addon1">
                            </div>
                        </div>

                    </div>

                    <div class="form-group" style="margin-top: 10px;">
                        <input class="btn btn-success form-control" id="btnSubmit" type="submit" value="Login">
                    </div>

                </form>

            </div>
        </div>

    </div>

    <script src="validacion.js"></script>
</body>

</html>