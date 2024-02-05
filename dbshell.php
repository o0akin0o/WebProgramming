<?php
$servername = "localhost";
$port = 3306;
$username = "quan23001";
$password = "thooVBLq";
$dbname = "wp_quan23001";

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>