<?php
    $servername = "localhost";
    $username = "chrisede";
    $password = "chrisede1234";
    $dbname = "gratitude_journal";

    // Create a connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    // echo "Connected successfully";
?>
