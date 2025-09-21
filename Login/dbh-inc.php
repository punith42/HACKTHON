<?php
$servername = "localhost";   // XAMPP MySQL server
$username   = "root";        // default user in XAMPP
$password   = "";            // default password is empty
$dbname     = "hackthon";    // <-- use the database you created

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
