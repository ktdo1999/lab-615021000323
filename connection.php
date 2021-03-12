<?php 

    $conn = mysqli_connect("localhost", "root", "", "test");
    
    if (!$conn) {
        die("Failed to connec to databse " . mysqli_error($conn));
    }
    mysqli_set_charset($conn,"utf8");
?>