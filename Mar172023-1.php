<?php declare(strict_types=1);
    function myFun () {
        echo "Hi There!<br>";
    }
    function showMsg(string $name, int $age) {
        echo "Dear $name, you are $age years old.<br>";
    }
    function add2Nums($num1,$num2)
    {
        $sum = $num1 + $num2;
        return $sum;
    }
    function onlyReturn() {
        return "this function only return this line";
    }
    function add2Numbers(int $a, int $b) : int {
        return $a + $b ;
    }
    function add_five(&$value) {
        $value += 5;
        echo $value."<br>";
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All about php functions</title>
</head>
<body>
    <h1>Php Functions</h1>
    <?php
        myFun();
        myFun();
        showMsg("Husnain Ali Jutt",18);
        showMsg("Fatima Zehra",20);
        $a = 14;
        $b = 17;
        $result = add2Nums($a,$b);
        echo "$a + $b = $result <br>";
        
        $ret = onlyReturn();
        echo $ret."<br>";
        
        showMsg("Ali Raza",23);
        $a = 2;
        $b = 5;
        echo "$a + $b = ".add2Numbers($a,$b)."<br>";

        $num = 1;
        add_five($num);
        echo $num;
        
    ?>
</body>
</html>