<?php
$servername = "localhost";
$username = "f32ee";
$password = "f32ee";
$dbname = "f32ee";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to create table
$sql = "CREATE TABLE Price_LH (
ID INT(40) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
type VARCHAR(40) NOT NULL,
newPrices double NOT NULL
)";

if (mysqli_query($conn, $sql)) {
    echo "Table Price_LH created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>