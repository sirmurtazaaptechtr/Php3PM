<?php
    $text = "Aptech Learning Ladder is a 360-degree program that is both, innovative in nature and simple to teach & use. With Learning Ladder, Aptech introduces children at kindergarten levels and above to the joys of computer-based learning. With these programs, interactivity is key; children get an opportunity to play and learn simultaneously. The end result is an increased interest in, and passion for, learning, from a very young age.";

    $regEx = "/aptech/i";

    $match = preg_match($regEx,$text);
    $noOfOccr = preg_match_all($regEx,$text);

    $repText = preg_replace($regEx,"Microsoft",$text);

    echo("$match<br>");
    echo("$noOfOccr<br>");
    echo("$repText<br>");

    if($match == 0)
    {
        echo "text not found<br>"; 
    }
    else
    {
        echo "$noOfOccr match found<br>";
    }

    $text = "Aly is a good boy. Ali is my friend. aly goes to school with me. Ale is happy.";
    // $regEx = "/Al[iy][^e]/i";
    $regEx = "/al[iy][^e]/i";

    echo preg_match_all($regEx,$text)."<br>";

    $regEx = "/^[0-9+]{5}-[0-9+]{7}-[0-9]{1}$/";

    $cnics = array("murtaza"=>"42101-9156417-9","Shayan"=>"42201-9026626-3","Yaseen"=>"42301-1792641-1");
    
    echo preg_match($regEx,$cnics['Shayan']);


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