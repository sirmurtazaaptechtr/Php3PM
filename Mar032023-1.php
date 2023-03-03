<?php
    $text = "Syed Murtaza Hussain";
    $newText = str_replace("Murtaza ","",$text);
    echo "$newText <br>";
    $x = 5;
    var_dump($x);
    echo "<br>";
    var_dump(is_int($x));    
    echo "<br>". PHP_INT_MAX;
    echo "<br>";
    echo "<br>". PHP_INT_MIN;
    echo "<br>". PHP_INT_SIZE ." bytes";
    $x = 10.365;
    echo "<br>";
    var_dump($x);
    echo "<br>";
    var_dump(is_float($x));
    echo "<br>";    
    echo "<br>". PHP_FLOAT_MAX;
    echo "<br>". PHP_FLOAT_MIN;
    echo "<br>". PHP_FLOAT_DIG ." digits precise value";    
    $x = 1.9e310;
    echo "<br>";
    var_dump($x);
    echo "<br>";
    var_dump(is_infinite($x));
    $x = 5985;
    echo "<br>";
    var_dump($x);
    echo "<br>";
    var_dump(is_numeric($x));    
    $x = "5985";
    echo "<br>";
    var_dump($x);
    echo "<br>";
    var_dump(is_numeric($x));
    $x = "59.85" + 100;
    echo "<br>";
    var_dump($x);
    echo "<br>";
    var_dump(is_numeric($x));
    $x = "Hello";
    echo "<br>";
    var_dump($x);
    echo "<br>";
    var_dump(is_numeric($x));    
    echo "<br>";
    
    $x = 68.147;
    var_dump($x);
    echo "<br>";
    $y = (int)$x;
    var_dump($y);
    echo "<br>";
    
    $x = "22.7";
    var_dump($x);
    echo "<br>";
    $y = (int)$x;
    var_dump($y);
    echo "<br>";
    $z = (float)$x;
    var_dump($z);
    echo "<br>";

    echo pi()."<br>";
    echo min(0, 150, 30, 20, -8, -200)."<br>";
    echo max(0, 150, 30, 20, -8, -200)."<br>";
    echo abs(-16.7)."<br>";
    echo sqrt(81)."<br>";
    echo round(0.60)."<br>";
    echo round(0.49)."<br>";
    echo rand(0,10)."<br>";

    define("myConst","Syed Murtaza Hussain");
    echo myConst ."<br>";

    define("names", ["Ahsan","Husnain","Saqlain","Shabbir","Shayan","Rohaan","Yaseen","Fatima","Soban","Kinza"]);
    echo names[4]."<br>";


    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>