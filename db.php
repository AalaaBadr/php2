<?php
// Credentials
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the data from the database
$sql = "SELECT * FROM mydb.onlineshoping";
$result = $conn->query($sql);
$result = $result->fetch_all(MYSQLI_ASSOC);
// Close connection
$conn->close();