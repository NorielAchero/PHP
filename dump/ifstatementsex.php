<?php

    $hours = 50;
    $rate = 15;
    $weeklyPay = null;

    if($hours <= 0){
        $weeklyPay = 0;
    }
    elseif($hours <= 40){
        $weeklyPay = $hours * $rate;
    }
    else{
        $weeklyPay = ($rate * 40) + (($hours - 40) * ($rate * 1.5));
    }

    echo "You made a \${$weeklyPay}";


?>