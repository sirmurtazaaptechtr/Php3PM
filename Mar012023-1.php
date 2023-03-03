<?php
    $firstName = "Syed";
    $lastName = 'Hussain';    
    echo "My Full Name is $firstName $lastName";
    echo var_dump($firstName);
    $num = 123456789;
    echo "<br>";
    echo "num holds $num";
    echo "<br>";
    echo var_dump($num);    
    
    $fnum = 123.456789;
    echo "<br>";
    echo "num holds $fnum";
    echo "<br>";
    echo var_dump($fnum);    
    $x = true;
    $y = false;

    echo "<br>";
    echo var_dump($x);
    echo "<br>";
    echo var_dump($y);

    $str = "Ali";
    $str = "Raza";
    echo "<br>";
    echo var_dump($str);

    $str = array("Ali",18,"Raza",20.5);
    echo "<br>str holds $str[0] and $str[1]";
    echo "<br>";
    echo var_dump($str);

    $empty = null;
    echo "<br> $empty";
    echo "<br>";
    echo var_dump($empty);

    $text = "Syed Murtaza Hussain";

    $len = strlen($text);
    $wc = str_word_count($text);
    $rev = strrev($text); 
    $pos = strpos($text,"Murtaza");

    echo "<br>$text has $len characters including spaces.";
    echo "<br>$text has $wc Words.";
    echo "<br>Reverse of $text is $rev.";
    echo "<br> Murtaza in $text is at $pos";

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