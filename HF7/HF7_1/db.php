<?php
$servername = "localhost";
$username = "root";
$db="shoplist";


// Create connection
$conn = new mysqli($servername, $username,"",$db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";