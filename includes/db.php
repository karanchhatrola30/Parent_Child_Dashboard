<?php
// db.php
$host = "localhost";
$username = "root";
$password = "root";
$database = "parent_child_dashboard";

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
