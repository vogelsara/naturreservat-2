<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Naturreservat</title>
</head>
<body>

<?php

abstract class Animal {
    protected $name;

    function __construct($name) {
        $this->name = $name;
    }

    abstract function makeSound();
}

class Monkey extends Animal {
    public function makeSound() {
        return $this->name." says mak-mak";
    }
}

class Tiger extends Animal {
    public function makeSound() {
        return $this->name." says wááááááá";
    }
}

class Giraffe extends Animal {
    public function makeSound() {
        return $this->name." says i am a giraffe";
    }
}

class Coco {

}

?>

<?php

for ($i = 0; $i < $_GET["numberOfMonkeys"]; $i++) {
    $monkey = new Monkey($i."monkey");
    echo "<img src='img/monkey.png' onclick='alert(\"".$monkey->makeSound()."\")'/>\n";
}


for ($i = 0; $i < $_GET["numberOfGiraffes"]; $i++) {
    $giraffe = new Giraffe($i."giraffe");
    echo "<img src='img/giraffe.png' onclick='alert(\"".$giraffe->makeSound()."\")'/>\n";
}


for ($i = 0; $i < $_GET["numberOfTigers"]; $i++) {
    $tiger = new Tiger($i."tiger");
    echo "<img src='img/tiger.png' onclick='alert(\"".$tiger->makeSound()."\")'/>\n";
}


for ($i = 0; $i < $_GET["numberOfCocos"]; $i++) {
    echo "<img src='img/coco.png'/>\n";
}

?>

</body>
</html>

