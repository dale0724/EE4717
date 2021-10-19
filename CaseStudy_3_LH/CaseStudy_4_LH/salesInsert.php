
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




/* NOT NULL - Each row must contain a value for that column, null values are not allowed
DEFAULT value - Set a default value that is added when no other value is passed
UNSIGNED - Used for number types, limits the stored data to positive numbers and zero
AUTO INCREMENT - MySQL automatically increases the value of the field by 1 each time a new record is added
PRIMARY KEY - Used to uniquely identify the rows in a table. The column with PRIMARY KEY setting is often an ID number, and is often used with AUTO_INCREMENT
*/
$sql = "INSERT INTO Sales_LH (Types, ProductName, Price, Quantity, TotalPrice)
VALUES ('Single', 'Java','2', '2', '4' );";
$sql .= "INSERT INTO Sales_LH (Types, ProductName, Price, Quantity, TotalPrice)
VALUES ('Double', 'Java','2.5', '2', '5' );";
$sql .= "INSERT INTO Sales_LH (Types, ProductName, Price, Quantity, TotalPrice)
VALUES ('Single', 'Mocha','2', '3', '6' );";
$sql .= "INSERT INTO Sales_LH (Types, ProductName, Price, Quantity, TotalPrice)
VALUES ('Double', 'Mocha','3', '3', '9' );";
$sql .= "INSERT INTO Sales_LH (Types, ProductName, Price, Quantity, TotalPrice)
VALUES ('Single', 'MCP','4.75', '3', '14.25' );";
$sql .= "INSERT INTO Sales_LH (Types, ProductName, Price, Quantity, TotalPrice)
VALUES ('Double', 'MCP','5.75', '3', '17.25' );";

if (mysqli_multi_query($conn, $sql)) {
    echo "New Records created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);}

mysqli_close($conn);
?>