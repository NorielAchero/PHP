<?php

    $capitals = array("Usa"=>"Washington", 
                    "Japan"=>"Tokyo",
                    "SK"=>"Seoul");

    // echo $capitals["Usa"];

    $capitals["Usa"] = "asdasd";
    $capitals["asdasd"] = "123123";

    $keys = array_keys($capitals);
    $values = array_values($capitals);



    foreach($keys as $key){
        echo $key . "<br>";
    }

    foreach($values as $value){
        echo $value . "<br>";
    }

        $capitals = array_flip($capitals);

    foreach($capitals as $key => $value){
        echo "{$key} = {$value} <br>";
    }

?>