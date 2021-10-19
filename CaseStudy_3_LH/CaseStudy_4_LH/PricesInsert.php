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

$sql = "INSERT INTO Price_LH (id, type, newPrices)
VALUES ('1','singleJava','1.2');";
$sql .= "INSERT INTO Price_LH (id, type, newPrices)
VALUES ('2','doubleJava','2');";
$sql .= "INSERT INTO Price_LH (id, type, newPrices)
VALUES ('3','singleLait','2');";
$sql .= "INSERT INTO Price_LH (id, type, newPrices)
VALUES ('4','doubleLiat','3');";
$sql .= "INSERT INTO Price_LH (id, type, newPrices)
VALUES ('5','singleCapp','4.5');";
$sql .= "INSERT INTO Price_LH (id, type, newPrices)
VALUES ('6','doubleCapp','6');";

if (mysqli_multi_query($conn, $sql)) {
    echo "New Records created successfully";
} else {
    echo "Error inserting: " . mysqli_error($conn);}

mysqli_close($conn);
?>