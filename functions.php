<?php


    function happy_birthday(){
        echo "HBD";
    }

    function printhaha($n){
        for($i = 0; $i < $n; $i++){
            echo "Haha" . $i + 1 . "<br>";
        }
    }

    echo happy_birthday();
    echo printhaha();



?>