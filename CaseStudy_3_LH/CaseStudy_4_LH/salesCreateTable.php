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



/* The SQL query must be quoted in PHP
String values inside the SQL query must be quoted
Numeric values must not be quoted
The word NULL must not be quoted*/

// sql to create table
$sql = "CREATE TABLE Sales_LH (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
Types VARCHAR(30) NOT NULL,
ProductName VARCHAR(30) NOT NULL,
Price DEC(10,2),
Quantity INT(30) NOT NULL,
TotalPrice DEC(10,2),
reg_date TIMESTAMP
)";

/* NOT NULL - Each row must contain a value for that column, null values are not allowed
DEFAULT value - Set a default value that is added when no other value is passed
UNSIGNED - Used for number types, limits the stored data to positive numbers and zero
AUTO INCREMENT - MySQL automatically increases the value of the field by 1 each time a new record is added
PRIMARY KEY - Used to uniquely identify the rows in a table. The column with PRIMARY KEY setting is often an ID number, and is often used with AUTO_INCREMENT
*/



if (mysqli_query($conn, $sql)) {
    echo "Table MySalesQuantities created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>