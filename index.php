<?php session_start(); ?>

!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Naturreservat2</title>
</head>
<body>
<?php

    if (is_null($_SESSION["formHasBeenSent"])) {
        header('Location: settings.php');
    } else {
        header('Location: results.php');
    }

?> 
</body>
</html>