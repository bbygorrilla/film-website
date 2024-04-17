<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "film_database";

// Maak verbinding
$conn = new mysqli($servername, $username, $password, $dbname);

// Check verbinding
if ($conn->connect_error) {
    echo "Could not connect: " . $conn->connect_error;
}
?>