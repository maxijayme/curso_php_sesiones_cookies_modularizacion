<?php
setcookie(
    name: "navColor",
    value: "#786578"
);

$color= $_COOKIE["navColor"] ?? "#121f3d";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header style="background: <?= $color ?>; height: 30px">
        <nav  ></nav>
    </header>
    <main>Cambio color según el name de la cookie</main>
</body>
</html>