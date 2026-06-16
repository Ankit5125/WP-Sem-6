<?php
$servername = "localhost";
$username = "root";
$password = "";
$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "CREATE DATABASE studentDB";
if ($conn->query($sql) === TRUE) {
    echo "Database 'studentDB' created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}
$conn->close(); 
?>