<?php
//date() devuelve la fecha en formato texto
$now = date("H:i");
echo("la hora actual en España es: " . $now);
echo("\n");
date_default_timezone_set("America/Argentina/Buenos_Aires");
echo ("la hora actual en Argentina es: " . date("H:i"));

echo("\n");
//strtotime convierte un string en formato tiempo unix

$unix_time_last_monday = strtotime("last monday");
echo date("d-m-Y",$unix_time_last_monday);

echo("\n");

$today = new DateTime();
$today->format("d-m-Y");
$my_birthday = new DateTime("19-07-1983");
$hasPassed = $my_birthday->diff($today);
echo ($hasPassed->format("Han pasado %y años, %m meses y %d días desde que nací"));

echo("\n");
// Crear desde un formato dado
$fecha = DateTime::createFromFormat("l j F Y", "Sunday 17 April 2022");
echo $fecha->format('Y-m-d');
echo("\n");

//Modificar una fecha
$today = new DateTime();
$today->modify("+1 day");
echo $today->format("Y-m-d H:i:s");
