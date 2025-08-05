<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Math Functions Exercise</title>
</head>
<body>

    <form action = "mathfunctionsex.php" method = "post">
      <label> Radius: </label><br>
        <input type = "text" name = "radius"><br>
    <input type = "submit" value = "calculate"><br>

</body>
</html>

<?php
    
    $radius = $_POST["radius"];
    $circumference = round(2 * pi() * $radius, 2);
    $area = round(pi() * $radius ** 2, 2);
    $volume = round(4/3 * pi() * $radius ** 3, 2);

    echo "Circumference is equal to {$circumference} <br>";
    echo "Area is equal to {$area} <br>";
    echo "Volume is equal to {$volume} <br>";





?>