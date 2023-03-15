<?php
    // $num = 12;
    //______________________________________________________________________________
    // $maxMarks = 1150.0;
    // $obtMarks = 995.0;
    // $per = round($obtMarks/$maxMarks*100);
    //______________________________________________________________________________
    $num1 = 10;
    $num2 = 2;
    $op = 1;
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
    <!-- <h1>Even / Odd</h1> -->
    <!-- ______________________________________________________________________________ -->
    <!-- <h1>Result</h1> -->
    <!-- ______________________________________________________________________________ -->
    <h1>Calculator</h1>
    <?php
        // if($num % 2 === 0)
        // {
        //     echo "<h4>$num is Even</h4>";
        // }
        // else
        // {
        //     echo "<h4>$num is Odd</h4>";
        // }
        //______________________________________________________________________________
        // echo "<h4>Max Marks : $maxMarks</h4>";
        // echo "<h4>Obt. Marks : $obtMarks</h4>";
        // echo "<h4>Percentage : $per%</h4>";
        // if($per >= 80){
        //     echo "<h4>Grade : A+</h4>";
        // }else if($per >= 70){
        //     echo "<h4>Grade : A</h4>";
        // }else if($per >= 60){
        //     echo "<h4>Grade : B</h4>";
        // }else if($per >= 50){
        //     echo "<h4>Grade : C</h4>";
        // }else if($per >= 40){
        //     echo "<h4>Grade : D</h4>";
        // }else{
        //     echo "<h4>Grade : F</h4>";
        // }
        //______________________________________________________________________________
        // if($op === 1){
        //     $res = $num1 + $num2;
        //     echo "<h4>$num1 + $num2 = $res";
        // }elseif($op === 2){
        //     $res = $num1 - $num2;
        //     echo "<h4>$num1 - $num2 = $res";
        // }elseif($op === 3){
        //     $res = $num1 * $num2;
        //     echo "<h4>$num1 x $num2 = $res";
        // }elseif($op === 4){
        //     $res = $num1 / $num2;
        //     echo "<h4>$num1 / $num2 = $res";
        // }elseif($op === 5){
        //     $res = $num1 % $num2;
        //     echo "<h4>$num1 % $num2 = $res";
        // }else{
        //     echo "Invalid Input!";
        // }
        switch($op){
            case 1:
                $res = $num1 + $num2;
                echo "<h4>$num1 + $num2 = $res";
            break;
            case 2:
                $res = $num1 - $num2;
                echo "<h4>$num1 - $num2 = $res";
            break;
            case 3:
                $res = $num1 * $num2;
                echo "<h4>$num1 X $num2 = $res";
            break;
            case 4:
                $res = $num1 / $num2;
                echo "<h4>$num1 / $num2 = $res";
            break;
            case 5:
                $res = $num1 % $num2;
                echo "<h4>$num1 % $num2 = $res";
            break;
            default:
                echo "Invalid Input!";
            break;
        }
    ?>    
</body>
</html>