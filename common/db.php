<?php
$server = "localhost:3308";
$username = "root";
$password = "";
$database = "discuss";

$conn = new mysqli($server, $username, $password, $database);
if ($conn->connect_error) {
    die("Not Connected with DB" . $conn->connect_error);
}

echo "Database Connection Successfully";
