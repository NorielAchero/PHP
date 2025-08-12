<?php

    $password = "noriel";

    $hash = password_hash($password, PASSWORD_DEFAULT);

    echo $hash . "<br>";

    if(password_verify($password, $hash)){
        echo "The same haha.";
    }


?>