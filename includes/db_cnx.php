<?php
    $servername = "localhost";
    $username = "pulchart_admin";
    $password = "pulchart_admin_123";
    $db_name = "pulchart_pulchart";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    mysqli_select_db($conn,$db_name);
?>
