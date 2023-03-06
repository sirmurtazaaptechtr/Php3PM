<?php
    $x = 12;
    $y = 6;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <h1>PHP Operators</h1>
    <h2>PHP Arithmetic Operators</h2>
    <p><?php echo "The sum of $x and $y is " . $x+$y;?></p>
    <p><?php echo "$x + $y = " . $x+$y;?></p>
    <p><?php echo "The difference of $x and $y is " . $x-$y;?></p>
    <p><?php echo "$x - $y = " . $x-$y;?></p>
    <p><?php echo "$x X $y = " . $x*$y;?></p>
    <p><?php echo "$x / $y = " . $x/$y;?></p>
    <p><?php echo "$x ^ $y = " . $x**$y;?></p>
    <p><?php echo "$x % $y = " . $x%$y;?></p>
    <h2>PHP Assignment Operators</h2>
    <p>
        <?php
            echo "BA(\$x , \$y) : $x , $y";
            $x=$y;
            echo" (\$x=\$y) AA(\$x , \$y) : $x , $y<br>";

            echo "BA(\$x , \$y) : $x , $y ";
            $x+=$y;
            echo" (\$x+=\$y) AA(\$x , \$y) : $x , $y<br>";

            echo "BA(\$x , \$y) : $x , $y ";
            $x-=$y;
            echo" (\$x-=\$y) AA(\$x , \$y) : $x , $y<br>";

            echo "BA(\$x , \$y) : $x , $y ";
            $x*=$y;
            echo" (\$x*=\$y) AA(\$x , \$y) : $x , $y<br>";

            echo "BA(\$x , \$y) : $x , $y ";
            $x/=$y;
            echo" (\$x/=\$y) AA(\$x , \$y) : $x , $y<br>";

            echo "BA(\$x , \$y) : $x , $y ";
            $x%=$y;
            echo" (\$x%=\$y) AA(\$x , \$y) : $x , $y<br>";
        ?>
    </p>
    <h2>PHP Comparison Operators</h2>
    <?php
        $a = 14.0;
        $b = 14;

        $c =  $a==$b;        
        echo "<p>\$a = $a and \$b = $b  \$a == \$b gives $c</p>";

        $c =  $a===$b;
        echo "<p>\$a = $a and \$b = $b  \$a === \$b gives $c</p>";
        
        $c = $a != $b;
        echo "<p>\$a = $a and \$b = $b  \$a === \$b gives $c</p>";
        
        $c = $a !== $b;
        echo "<p>\$a = $a and \$b = $b  \$a === \$b gives $c</p>";
    ?>


    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>