<?php
$servername = "localhost";
$username = "root";
$password = "0983";
$dbname = "membershiphp";

$conn = new mysqli($servername, $username, $password, $dbname, 3307);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error . ".<br> Please create a database and import the SQL file");
}

// Start Session
session_start();
?>