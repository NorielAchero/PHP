<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Math Functions</title>
</head>
<body>
    <form action = "mathfunctions.php" method = "post">
      <label> X: </label><br>
        <input type = "text" name = "x"><br>
    <label> Y: </label><br>
        <input type = "text" name = "y"><br>
    <label> Z: </label><br>
        <input type = "text" name = "z"><br>

    <input type = "submit" value = "total">

    </form>


</body>
</html>

<?php

    $x = $_POST["x"];
    $y = $_POST["y"];
    $z = $_POST["z"];
    $total = null;

    //$total = abs($x);
    //$total = round($x);
    //$total = floor($x);
    //$total = ceil($x);
    //$total = pow($x, $y);
    // $total = sqrt($x);
    //$total = max($x, $y, $z);
    //$total = min($x, $y, $z);
    // $total = pi();
    $total = rand(1, 100);
    echo $total;

?>