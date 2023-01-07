<?php
    $servername = "localhost";
    $username = "it65309010020";
    $password = "12345";
    $dbname = "it65309010020";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }