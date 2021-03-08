<?php

// basic old fashion callback function
    function my_call($item){
        return strlen($item);
    }

    $strings = ["apple","orange","mango","banana"];
    $lengths = array_map("my_call",$strings);


    echo "<pre>";
     var_dump($lengths);
    echo "</pre>";

// anonymous function as callback function

    $strings2 = ["tesla","neurolink","spacex","openai"];
    $lengths2 = array_map(function($i){ return strlen($i);} , $strings2);

    echo "<pre>";
    var_dump($lengths2);
    echo "</pre>";


    $person = '{"John":21,"Ben":24,"Joe":43}';
    var_dump(json_decode($person)); 
    
    $studnet = array("Volvo","BMW","Toyota");
    echo json_encode($studnet);



?>