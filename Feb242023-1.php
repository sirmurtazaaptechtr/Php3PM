<?php
    // All my variables goes here ...

    $ttopic = "Basic PHP Syntax, PHP Comments, PHP Variables";  
    $fullname = "Syed Murtaza Hussain";
    $txt = "Hello world!";
    $x = 5;
    $y = 10.5;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $ttopic;?></title>
</head>
<body>
    <h1><?php echo $ttopic;?></h1>

    <?php
        // This is a single-line comment
        # This is also a single-line comment 

        /*
        this 
        is 
        multiline 
        comment
        */
        echo "text only ";
        echo "<h2>This is my heading Level 2</h2> ";
        
        echo $fullname;//this line displayes my name
        echo "<br>".$fullname." is my full name";

        echo "<br>".$x+$y;
        echo "<br>".$x.", ".$y." and ".$fullname;
    ?>
    
</body>
</html>