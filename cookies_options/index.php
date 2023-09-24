<?php

if(!isset($_COOKIE["globalCookie"])){
    setcookie(
        name: "globalCookie",
        value: "estoy en todo el sitio",
        expires_or_options: time()  * 60, //ej expira en una hora. time() es el momento actual
        path: "/", // ruta donde esta disponible la cookie,
        domain: "localhost"
    );
}

echo "<pre>";
var_dump($_COOKIE);
echo "</pre>";