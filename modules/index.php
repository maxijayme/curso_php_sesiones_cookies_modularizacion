<?php
require("logic/CreateHuman.php");
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
        Mi nombre es <?= $humano1->getName(); ?> y tengo <?= $humano1->getAge();?> años
    </p>
</body>
</html>