<?php

    $server = "localhost";
    $username = "root";
    $password = "";
    $db_name = "fix-it";

    $conn = mysqli_connect($server, $username, $password, $db_name);

    if (!$conn){
        exit ("Error connecting to database: " .mysqli_connect_error($conn));
    }else{
        // echo "Connected Successfully";
    }

?>