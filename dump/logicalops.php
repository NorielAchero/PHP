<?php
    // || && !
    $temp = 10;
    $cloudy = true;

    if($temp < 0 || $temp > 30){
        echo "The temp is bad <br>";
    }
    else{
        echo "The temp is good <br>";
    }

    if(!$cloudy){
        echo "It's cloudy <br>";
    }
    else{
        echo "It's sunny <br>";
    }

?>