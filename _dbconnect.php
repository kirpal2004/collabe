<?php
$server = "localhost:3308"; // Specify the new port here
$username = "root";
$password = "";
$database = "users";

// Connect to MySQL
$conn = mysqli_connect($server, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connected successfully!";
}
?>
