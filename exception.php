<?php

function devide($dividend , $divisior) {
    if($divisior == 0) {
        throw new Exception("Division by Zero");
    }
    return $dividend/$divisior;
}
try{
    devide(5,0);
} catch(Exception $e){
    echo '<pre>';
    print_r($e->getTrace());
    echo '</pre>';
}

?>