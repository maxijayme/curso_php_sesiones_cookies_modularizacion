<?php

function mathError(){
    echo 20/0;
}
try {
    mathError();
} catch (\Throwable $e) {
    echo $e->getMessage();
    echo("\n");
    echo $e->getCode();
    echo("\n");
    echo $e->getFile();
}
