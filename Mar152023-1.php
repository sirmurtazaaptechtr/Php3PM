<?php
    $cnt = 0;//Just Created and initilized a variable which we will use later.
    
    $names = array("Ahsan","Husnain","Saqlain","Shabbir","Shayan","Rohan","Yaseen","Fatima","Soban","Kinza");
    $ages = array(20,18,14,14,20,18,19,20,21,19);
    
    $data = array("Ahsan"=>"20","Husnain"=>"18","Saqlain"=>"14","Shabbir"=>"14","Shayan"=>"20","Rohan"=>"18","Yaseen"=>"19","Fatima"=>"20","Soban"=>"21","Kinza"=>"19");

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
    <?php
echo "<br>____________________________While Loop____________________________<br>";
        
        $cnt = 1;
        while($cnt <= 5)
        {
            echo "$cnt. My loop is Working. <br>";
            $cnt ++;
        }

echo "<br>____________________________Do While Loop____________________________<br>";
        
        $cnt = 1;
        do{
            echo "$cnt. My loop is Working. <br>";
            $cnt ++;
        }while($cnt <= 5);
        
echo "<br>____________________________For Loop____________________________<br>";

        for($cnt=1;$cnt<=5;$cnt++)
        {
            echo $cnt.". My loop is Working. <br>";
        }

echo "<br>____________________________Printing Array's Data using Loop____________________________<br>";

        // echo $names[0]."<br>"; 
        // echo $names[1]."<br>"; 
        // echo $names[2]."<br>"; 
        // echo $names[3]."<br>"; 
        // echo $names[4]."<br>"; 
        // echo $names[5]."<br>"; 
        // echo $names[6]."<br>"; 
        // echo $names[7]."<br>"; 
        // echo $names[8]."<br>"; 
        // echo $names[9]."<br>";
echo "<br>___For Loop___<br>"; 

        for($cnt=0; $cnt<count($names); $cnt++)
        {
            echo ($cnt+1).". $names[$cnt]"."<br>";
        }

echo "<br>___ForEach Loop___<br>";
        
        foreach($names as $name)
        {
            echo "$name <br>";
        }

echo "<br>___ForEach Loop with index variable___<br>";
        
        foreach($names as $index => $name)
        {
            echo "$index - $name <br>";
        }
echo "<br>___Printing Associative array using ForEach Loop with index variable___<br>";
        foreach($data as $name => $age)
        {
            echo "$name - $age <br>";
        }
    ?>
        
</body>
</html>