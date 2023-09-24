<?php

setcookie(
    name: "configCookie",
        value: "estoy solo en config",
        expires_or_options: time()  * 60, //ej expira en una hora. time() es el momento actual
        path: "/platzi/curso_php_sesiones_cookies_modularizacion/cookies_options/config_cookie/", // ruta donde esta disponible la cookie,
        domain: "localhost"
);

echo "<pre>";
var_dump($_COOKIE);
echo "</pre>";