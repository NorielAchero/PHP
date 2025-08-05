<?php

    $foods = array("Apol", "Orange", "Banana");

    // echo $foods[0] . "<br>";
    // echo $foods[1] . "<br>";
    // echo $foods[2] . "<br>";


    $foods[0] = "Haha";
    array_push($foods, "Noriel", "asdasd");
    array_pop($foods);
    array_shift($foods);
    $foods = array_reverse($foods);
    echo count($foods);
    
    foreach($foods as $food){
        echo $food . "<br>";
    }

?>