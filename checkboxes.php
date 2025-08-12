<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "checkboxes.php" method = "post">
        <input type = "checkbox" name = "cards[]" value = "Visa"> Visa <br>
        <input type = "checkbox" name = "cards[]" value = "Master"> Master <br>
        <input type = "checkbox" name = "cards[]" value = "haha"> Haha <br>
        <input type = "submit" name = "submit">
    </form>
    
</body>
</html>

<?php

    if(isset($_POST["submit"])){

        $cards = $_POST["cards"];
        
        foreach ($cards as $card){
            echo $card . "<br>";
        }
    }
    else{
        echo "nullasdfsd";
    }

?>