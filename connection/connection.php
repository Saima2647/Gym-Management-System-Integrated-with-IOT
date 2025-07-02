<?php
// Replace these values with your actual MySQL database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "golddb";
$port=3307;

// Create a connection to the MySQL database
$conn = new mysqli($servername, $username, $password, $dbname,$port);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>