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
    <h1>Form Summary</h1>
    <div class="container">        
        <?php
            $name = $email = $website = $comment = $gender = "";
            $flaged = false;
            function data_filter($theData)
            {
                $theData = trim($theData);
                $theData = stripslashes($theData);
                $theData = htmlspecialchars($theData);
                
                return $theData;
            }

            if($_SERVER['REQUEST_METHOD']==="POST")
            {
                $name = data_filter($_POST['fullName']);
                $email = data_filter($_POST['email']);
                $website = data_filter($_POST['website']);
                $comment = data_filter($_POST['comment']);
                $gender = data_filter($_POST['gender']);
                $flaged = true;
            }else{
                $name = data_filter($_GET['fullName']);
                $email = data_filter($_GET['email']);
                $website = data_filter($_GET['website']);
                $comment = data_filter($_GET['comment']);
                $gender = data_filter($_GET['gender']);
                $flaged = true;
            }            
            if($flaged){
                echo "<h2>Person's Details</h2>";
                echo "<strong>Full Name :</strong> $name <br>";
                echo "<strong>Email :</strong> $email <br>";
                echo "<strong>Website (URL) :</strong> $website <br>";
                echo "<strong>Comment :</strong> $comment <br>";
                echo "<strong>Gender :</strong> $gender <br>";
            }else{
                echo "<br> no data to show";
            }           
        ?>
    </div>
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>