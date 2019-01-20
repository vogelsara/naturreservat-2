<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="result.css">
    <title>Naturreservat</title>
</head>
<body id="result">

<?php

abstract class Animal {
    protected $name;

    function __construct($name) {
        $this->name = $name;
    }

    abstract function makeSound();
}

class Lion extends Animal {
    public function makeSound() {
        return $this->name." says ooooooOOOoooOOOOááááááá";
    }
}

class Antilope extends Animal {
    public function makeSound() {
        return $this->name." Ohh my God...a lion!";
    }
}

class Gorilla extends Animal {
    public function makeSound() {
        return $this->name." Hello! I am a gorilla.";
    }
}

class Palm {

}

class Pine {

}

class Rose {

}

?>

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION["formHasBeenSent"] = "true";
    $_SESSION["numberOfLions"] = $_POST["numberOfLions"];
    $_SESSION["numberOfAntilopes"] = $_POST["numberOfAntilopes"];
    $_SESSION["numberOfGorillas"] = $_POST["numberOfGorillas"];
    $_SESSION["numberOfPalms"] = $_POST["numberOfPalms"];
    $_SESSION["numberOfPines"] = $_POST["numberOfPines"];
    $_SESSION["numberOfRoses"] = $_POST["numberOfRoses"];
}

if (is_null($_SESSION["formHasBeenSent"])) {
    header('Location: settings.php');
}

for ($i = 0; $i < $_SESSION["numberOfLions"]; $i++) {
    $lion = new Lion($i."lion");
    echo "<img src='img/lion.png' onclick='alert(\"".$lion->makeSound()."\")'/>\n";
}


for ($i = 0; $i < $_SESSION["numberOfAntilopes"]; $i++) {
    $antilope = new Antilope($i."antilope");
    echo "<img src='img/antilope.png' onclick='alert(\"".$antilope->makeSound()."\")'/>\n";
}


for ($i = 0; $i < $_SESSION["numberOfGorillas"]; $i++) {
    $gorilla = new Gorilla($i."gorilla");
    echo "<img src='img/gorilla.png' onclick='alert(\"".$gorilla->makeSound()."\")'/>\n";
}


for ($i = 0; $i < $_SESSION["numberOfPalms"]; $i++) {
    echo "<img src='img/palm.png'/>\n";
}

for ($i = 0; $i < $_SESSION["numberOfPines"]; $i++) {
    echo "<img src='img/pine.png'/>\n";
}

for ($i = 0; $i < $_SESSION["numberOfRoses"]; $i++) {
    echo "<img src='img/rose.png'/>\n";
}

?>

<form action="restart.php">
    <input type="submit" value="Restart">
</form>

</body>
</html>

