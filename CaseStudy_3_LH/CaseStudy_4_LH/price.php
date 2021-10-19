<?php
//if(isset($_POST['update'])){
// create short variable names
$javaSingle = $_POST['javaSingle'];
$javaDouble = $_POST['javaDouble'];
$mochaSingle=$_POST['mochaSingle'];
$mochaDouble = $_POST['mochaDouble'];
$mcpSingle=$_POST['mcpSingle'];
$mcpDouble = $_POST['mcpDouble'];

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


if ($javaSingle > 0){
    $sql = "UPDATE Price_LH SET newPrices='$javaSingle' WHERE id=1";

    if ($conn->query($sql) === false) {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
if($javaDouble>0){
    $sql = "UPDATE Price_LH SET newPrices='$javaDouble'WHERE id = 2";
    if ($conn->query($sql) === TRUE) {
        $res = mysqli_query($sql) ;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

if ($mochaSingle > 0){
    $sql = "UPDATE Price_LH SET newPrices='$mochaSingle' WHERE id=3";

    if ($conn->query($sql) === TRUE) {
        $res = mysqli_query($sql) ;

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

if ($mochaDouble > 0){
    $sql = "UPDATE Price_LH SET newPrices='$mochaDouble' WHERE id=4";

    if ($conn->query($sql) === TRUE) {
        $res = mysqli_query($sql) ;

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

if ($mcpSingle > 0){
    $sql = "UPDATE Price_LH SET newPrices='$mcpSingle' WHERE id=5";

    if ($conn->query($sql) === TRUE) {
        $res = mysqli_query($sql) ;

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

if ($mcpDouble > 0){
    $sql = "UPDATE Price_LH SET newPrices='$mcpDouble' WHERE id=6";

    if ($conn->query($sql) === TRUE) {
        $res = mysqli_query($sql) ;

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
//}

mysqli_close($conn);

//header("Location:Price_LH.php"); // redirect user

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>JavaJam Coffee House</title>
    <link rel="stylesheet" href="mystyle.css">
    <meta charset="utf-8">
    <script type="text/javascript" src="price.js"></script>
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
    <?php
    $servername = "localhost";
    $username = "f32ee";
    $password = "f32ee";
    $dbname = "f32ee";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$conn) {  //if not connected successfully
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT newPrices FROM Price_LH";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while ($row = mysqli_fetch_assoc($result)) {
            $pricelist[] = $row["newPrices"];
        }
    } else {
        echo "error";
    }
    mysqli_close($conn);
    ?>
    <div id="rightcolumn">
        <div class="content">
            <div>
                <h2 class="header2">Coffe at JavaJam</h2>
            </div>
            <div>
                <form action="price.php" method="post">
                    <table id="menuTable">
                        <tr>
                            <td>Just Java</td>
                            <td>
                                <p>ssssssssssss</p>
                                <div>
                                    <strong>Single Short: $<?php echo $pricelist[0]; ?></strong>
                                    <input type="text"  name="javaSingle" id="javaSingle" disabled><br>
                                    <strong>Single Short: $<?php echo $pricelist[1]; ?></strong>
                                    <input type="text" name="javaDouble" id="javaDouble" disabled>
                                </div>
                            </td>
                            <td>
                                <input type="checkbox" id="javaCheckBox">
                            </td>
                        </tr>
                        <tr>
                            <td>Mocha Latte</td>
                            <td>
                                <p>ssssssssssss</p>
                                <div>
                                    <strong>Single Short: $<?php echo $pricelist[2]; ?></strong>
                                    <input type="text" name="mochaSingle" id="mochaSingle" disabled><br>
                                    <strong>Single Short: $<?php echo $pricelist[3]; ?></strong>
                                    <input type="text" name="mochaDouble" id="mochaDouble" disabled>
                                </div>
                            </td>
                            </td>
                            <td>
                                <input type="checkbox" id="mochaCheckBox">
                            </td>
                        </tr>
                        <tr>
                            <td>MCP Latte</td>
                            <td>
                                <p>ssssssssssss</p>
                                <div>
                                    <strong>Single Short: $<?php echo $pricelist[4]; ?></strong>
                                    <input type="text" name="mcpSingle" id="mcpSingle" disabled><br>
                                    <strong>Single Short: $<?php echo $pricelist[5]; ?></strong>
                                    <input type="text" name="mcpDouble" id="mcpDouble" disabled>
                                </div>
                            </td>
                            </td>
                            <td>
                                <input type="checkbox" id="mcpCheckBox">
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td><button type="submit" id="submit" name="update" disabled>Update</button></td>
                        </tr>
                    </table>
                </form>
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