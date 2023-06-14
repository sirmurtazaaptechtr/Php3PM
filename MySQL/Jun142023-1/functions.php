<?php
    function clean_data($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }    
    function connect_DB ($database = "")  {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = $database;
        // Create connection
        global $conn;
        $conn = new mysqli($servername, $username, $password,$database);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }else{
            echo "mySQL database connected";
        }        
    } 