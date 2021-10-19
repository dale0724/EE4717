<!DOCTYPE html>
<html lang="en">

<head>
    <title>JavaJam Coffee House</title>
    <link rel="stylesheet" href="mystyle.css">
    <meta charset="utf-8">
</head>

<body>
<div id="wrapper">
    <header>
        <h1><img src="javalogo.gif"></h1>
    </header>
    <div id="leftcolumn">
        <nav>
            <ul>
                <li><a href="menu.php">Menu</a></li>
                <li><a href="price.php">Price</a></li>
                <li><a href="report.html">Report</a></li>
            </ul>
        </nav>
    </div>
    <div id="rightcolumn">
        <div class="content">
            <h2>Total dollar sales by products</h2>
            <div class="content">
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

                $sql = "SELECT ProductName,Types, SUM(Quantity) AS Q FROM Sales_LH GROUP BY Types,ProductName ORDER BY Q DESC";
                $result = mysqli_query($conn, $sql);
                 if (mysqli_num_rows($result) > 0) {
                     echo "<table id=\"menuTable\">";
                     echo "<tr><td><strong>ProductName</strong></td><td><strong>Type</strong></td><td><strong>Total Quantity</strong></td></tr>";
                     // output data of each row
                     while ($row = mysqli_fetch_assoc($result)) {
                         echo "<tr><td>".$row["ProductName"]."</td><td>".$row["Types"]."</td>"."<td align=right>".$row["Q"]."</td></tr>";
                     }
                     echo "</table>";
                 } else {
                     echo "error";
                 }
    mysqli_close($conn);
                ?>

            </div>

        </div>
    </div>
    <div id="myfooter">
        <footer>
            Copyright&copy; 2021 Hang Coffe<br> <a href="mailto: lihang@example.com">lihang@xxx.com</a>
        </footer>
    </div>
</div>
</body>

</html>