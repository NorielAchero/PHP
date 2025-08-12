<?php

    $age = 100;

    if($age >= 100){
        echo "You are dead!";
    }
    elseif($age <= 0){
        echo "Not a valid age!";
    }
    elseif($age >= 18){
        echo "You are not a minor!";
    }
    else{
        echo "You are a minor!";
    }

    $adult = true;


    if($adult){
        echo "<br> You are not a minor!";
    }
    else{
        echo "You are a minor!";
    }

?>