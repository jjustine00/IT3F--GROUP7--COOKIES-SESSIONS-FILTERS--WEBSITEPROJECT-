<?php
$servername = "localhost";  // Replace with your server info
$username = "root";         // Replace with your MySQL username
$password = "";             // Replace with your MySQL password
$dbname = "pet_shop";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
