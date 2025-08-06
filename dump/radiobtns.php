<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "radiobtns.php" method = "post">
        <input type = "radio" name = "card" value = "Visa"> Visa <br>
        <input type = "radio" name = "card" value = "Master"> Master <br>
        <input type = "radio" name = "card" value = "haha"> Haha <br>
        <input type = "submit" name = "confirm" value = "confirm">
    </form>
    
</body>
</html>

<?php

    if(isset($_POST["confirm"])){
        if(isset($_POST["card"])){
            $card = $_POST["card"];
            echo $card;
        }
        else{
            echo "Select a card";
        }
    }

?>