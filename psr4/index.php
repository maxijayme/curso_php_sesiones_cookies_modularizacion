<?php
require("vendor/autoload.php");
require("app/logic/CreateHuman.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        Mi nombre es <?= $humano1->getName(); ?> y tengo <?= $humano1->getAge();?> años </br>
        Mi nombre es <?= $humano2->getName(); ?> y tengo <?= $humano2->getAge();?> años y puedo <?= $humano2->abilities(); ?>
    </p>
</body>
</html>