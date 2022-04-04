<?php
header("Cache-Control: no-cache");
$servername = "localhost";
$username = "uv4jfy8hstlbk";
$password = "0zq6pgbnetnn";
$dbname = "db20oreidi8qpm";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 
?>