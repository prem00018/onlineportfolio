<?php
$servername = "localhost"; // or your DB server
$username = "root"; // your MySQL username
$password = ""; // your MySQL password
$dbname = "onlineportfolio"; // your DB name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
