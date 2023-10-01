<?php

    //fecha con funciones / esctructurada / procedimineto

    $date = date_create();
    $interval = date_interval_create_from_date_string("2 days");
    date_add($date, $interval);
    echo(date_format($date,"d-m-Y"));

    echo("\n");
    //fecha con POO

    $dateOPP = new DateTime();
    $intervalOPP = DateInterval::createFromDateString("2 days");
    $dateOPP->add($intervalOPP);
    echo ($date->format("d-m-y"));