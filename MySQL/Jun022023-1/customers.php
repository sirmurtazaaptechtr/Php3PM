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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous"/>
    <title>Welcome to Northwind - Customers</title>
</head>
<body>
    <h1>Customers of Northwind</h1>
    <table class="table table-dark table-hover">
        <thead>
            <tr>
                <th>Sr.no.</th>
                <th>CustomerID</th>
                <th>CompanyName</th>
                <th>ContactName</th>
                <th>ContactTitle</th>
                <th>Address</th>
                <th>City</th>
                <th>Region</th>
                <th>PostalCode</th>
                <th>Country</th>
                <th>Phone</th>
                <th>Fax</th>
                <th>Image</th>
                <th>ImageThumbnail</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Check connection
            if($connection->connect_error){
                die("<p>Connection Failed! : ".$connection->connect_error."</p>");
            }else{
                echo "<p>$database Connected Successfully!</p>";
                // executed query and saved records in sql obj form
                $result = $connection->query($sqlQ1);
                if($result->num_rows > 0){
                    $srno = 1;
                    while($row = $result->fetch_assoc()) {                        
                        echo "<tr>";
                            echo "<td>$srno</td>";
                            foreach($row as $attribute=>$value)
                            {
                                echo "<td>$value</td>";
                            }
                        echo "</tr>";
                        $srno++;
                    }
                    }else{
                        echo "0 results found";
                    }
            $connection->close();
        }
        ?>
    </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>