<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../../src/js/jquery.js"></script>
    <script src="../../src/js/jquery.validate.min.js"></script>

    <title>Document</title>
</head>

<body>
    <form id="basic-form" action="" method="post">
        <p>
            <label for="name">Name <span>(required, at least 3 characters)</span></label>
            <input id="name" name="name" minlength="3" type="text" required>
        </p>
        <p>
            <label for="email">E-Mail <span>(required)</span></label>
            <input id="email" type="email" name="email" required>
        </p>
        <p>
            <input class="submit" type="submit" value="SUBMIT">
        </p>
    </form>

    <script>
        $(document).ready(function() {
            $("#basic-form").validate();
        });
    </script>
</body>

</html>