<?php
$servername = "35.198.59.7";
$username = "root";
$password = "kamehouse";
$dbname = "cek";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

mysqli_close($conn);
?>
