<?php

    $db_server = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "registration";
    $conn = "";

    try{
        $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
        echo "<script>console.log(' DB Connected');</script>";
    }
    catch(mysqli_sql_exception){
        echo "<script>console.log(' DB Connected');</script>";
    }
    
?>