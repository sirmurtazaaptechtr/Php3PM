<?php
    // All variables goes here
    $myText = "Aptech Learning";
    $x = 5;
    $y = 4;       
    function myFun()
    {
        global $x, $y;
        echo "<br>Inside myFun ---> x = $x and y = $y";
    }
    function theFun()
    {
        static $num = 0;
        $num++;
        echo "<br>The value of num is $num";
    }      
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
    <h4>
        <?php
            echo "I Love $myText";
            echo "<br> $x+$y";
            echo "<br>". $x+$y;
            echo "<br>".$GLOBALS['y'];
            myFun();
            echo "<br>Outside myFun ---> x = $x and y = $y";            
            theFun();
            theFun();
            theFun();
        ?>
    </h4>

    
</body>
</html>