<?php
    // define variables and set to empty values
    $name = $email = $phone = "";    

    if($_SERVER['REQUEST_METHOD']==='POST'){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
    }
    else{
        $name = $_GET['name'];
        $email = $_GET['email'];
        $phone = $_GET['phone'];
    }

    echo "Name : $name<br>email : $email<br>Phone : $phone";
?>