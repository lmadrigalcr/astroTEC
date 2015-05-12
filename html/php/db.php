<?php
$servername = "localhost";
$username = "development";
$password = "12345";
$db = "astroDB"

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>