<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "crud";

    // Creation connection
    $conn = mysqli_connect($host, $username, $password, $dbname);

    // Check connection
    if (!$conn){
        die ("connection failed: " . mysqli_connect_error());
    }
?>