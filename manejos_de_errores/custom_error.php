<?php

class MyException extends Exception{
    public function getMyCustomExceptionMsg(){
        return "Mi mensaje de error personalizado";
    }
}

function mathError(){
    echo 20/0;
}

try {
    throw new MyException;
} catch (MyException $e) {
    echo $e->getMyCustomExceptionMsg();
}
finally{
    echo("\n");
    echo "Siempre me ejecuto";
}