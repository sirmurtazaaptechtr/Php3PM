<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <?php
    $name = $email = $age = "";
    
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $age = $_POST['age'];
    } 
    ?>

    <div class="container">
        <form action="abc.php" method="post">
            <div class="mb-3">
                <label for="name" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Full Name">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="age" class="form-label">Age in years</label>
                <input type="number" class="form-control" id="age" name="age">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-success">Send</button>
                <button type="reset" class="btn btn-danger">Clear</button>
            </div>
        </form>
    </div>

    <?php
        echo "<h2>Your Data</h2>";
        echo "<p>Name :$name</p>";
        echo "<p>email :$email</p>";
        echo "<p>age :$age</p>";
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>