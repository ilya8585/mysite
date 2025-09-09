<?php
$servername = "MariaDB-11.7"; // Or your MariaDB server's IP address
$username = "root";
$password = "";
$dbname = "mysite";

$pdo = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);

$conn = new mysqli($servername, $username, $password, $dbname);

// Create connection


// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully to MariaDB!";


$conn->close();
