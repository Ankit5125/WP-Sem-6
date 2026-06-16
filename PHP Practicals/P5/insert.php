<?php
$conn = new mysqli("localhost", "root", "", "StudentDB");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$roll = $_POST['roll'];
$name = $_POST['name'];
$marks = $_POST['marks'];

$sql = "INSERT INTO student (roll, sname, marks) VALUES ('$roll', '$name', '$marks')";

if ($conn->query($sql) === TRUE) {
    echo "Record inserted successfully";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>