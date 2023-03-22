<?php
// Local and Global
    $p = 20;    
    function f () {
        global $q,$r;
        $p = 5;
        $q = 10;
        $r = "Ali Baba";
        echo "$p<br>";
    }
    f();
    echo "$q<br>";
    echo "$p<br>";

// Arrays
    $x = 30;
    $X = 40;
    echo "$x<br>";

    $a = array(50,60);
    echo "$a[0]<br>";
    echo "$a[1]<br>";
// Associative Arrays
    $b = array("Ahsan" => "20", "Husnain" => "19");

    echo $b["Ahsan"]."<br>";
    echo $b['Husnain']."<br>";
// SuperGlobal

    echo $GLOBALS['q']."<br>";
    echo $GLOBALS['r']."<br>";
    echo $_SERVER['PHP_SELF']."<br>";
    echo $_SERVER['GATEWAY_INTERFACE']."<br>";
    echo $_SERVER['SERVER_NAME']."<br>";
    echo $_SERVER['SERVER_PORT']."<br>";
    echo $_SERVER['REQUEST_METHOD']."<br>";
    echo $_GET['name']."<br>";
    echo $_GET['email']."<br>";
    echo $_POST['id']."<br>";
    echo $_POST['pwd']."<br>";

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
    <h1>Associative Arrays and Global Variables - Superglobals</h1>
    
    <form action="Mar202023-1.php" method="get">
        <input type="text" name="name" placeholder="Enter Full Name">
        <input type="email" name="email" placeholder="example@email.com">
        <input type="submit" value="Check">
    </form>
    <form action="Mar202023-1.php" method="post">
        <input type="text" name="id" placeholder="username">
        <input type="password" name="pwd" placeholder="password">
        <input type="submit" value="Login">
    </form>

    
</body>
</html>