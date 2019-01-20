<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Naturreservat2</title>
</head>
<body>

<?php

    if (isset($_SESSION["formHasBeenSent"])) {
        die('ERROR: Form has been already sent');
    }

?>

    <form action="results.php" method="post">
    Apor: <input type="number" name="numberOfMonkeys"><br>
    Giraffer: <input type="number" name="numberOfGiraffes"><br>
    Tigrar: <input type="number" name="numberOfTigers"><br>
    Kokosnötter: <input type="number" name="numberOfCocos"><br>
    <input type="submit">
    </form>

</body>
</html>