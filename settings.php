<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Naturreservat2</title>
</head>
<body>

<?php

    if (isset($_SESSION["formHasBeenSent"])) {
        die('ERROR: Form has been already sent');
    }

?>

    <form action="results.php" method="post">
    Lions: <input type="number" name="numberOfLions"><br>
    Antilopes: <input type="number" name="numberOfAntilopes"><br>
    Gorillas: <input type="number" name="numberOfGorillas"><br>
    Palms: <input type="number" name="numberOfPalms"><br>
    Pines: <input type="number" name="numberOfPines"><br>
    Roses: <input type="number" name="numberOfRoses"><br>
    <input type="submit">
    </form>

</body>
</html>