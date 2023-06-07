<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "northwind";

    $sqlQ1 = "SELECT * FROM `customers`";
    $sqlQ2 = "SELECT * FROM `customers` WHERE CustomerID is null;";

    // Create connection
    $connection = new mysqli($servername,$username,$password,$database);    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Welcome to Northwind - Customers</title>
</head>
<body>
    <?php
        // Check connection
        if($connection->connect_error){
            die("<p>Connection Failed! : ".$connection->connect_error."</p>");
        }else{
            echo "<p>$database Connected Successfully!</p>";
            // executed query and saved records in sql obj form
            $result = $connection->query($sqlQ1);        
            
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()) {
                    echo "<div>";
                        echo "<ol>";
                        foreach($row as $attribute=>$value)
                        {
                            echo "<li>$attribute - $value</li>";
                        }
                        echo "</ol>";
                    echo "</div>";
                }
            }else{
                echo "0 results found";
            }
            $connection->close();
        }
    ?>
</body>
</html>