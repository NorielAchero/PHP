<?php
    $username = "Noriel-Achero";
    $username2 = "Noriel Achero Romero";
    $array = array("Asd", "123", "sdfgsdf");

    $username = strtolower($username);
    $username = strtoupper($username);
    $username = trim($username);
    $username = str_pad($username, 20, 'n');
    $username = str_replace("-", "?", $username);
    $username = strrev($username);
    $username = str_shuffle($username);
    $haha = strcmp($username, $username2);



    echo $username . "<br>";
    echo $haha . "<br>";
    echo strlen($username) . "<br>";
    echo strpos($username2, "-") . "<br>";
    echo substr($username2, 3, 5). "<br>";;

    $fullname = explode(" ", $username2);

    foreach($fullname as $name){
        echo $name . "<br>";
    }

    echo implode("-", $array);



?>