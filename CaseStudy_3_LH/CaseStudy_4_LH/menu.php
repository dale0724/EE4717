<!DOCTYPE html>
<html lang="en">

<head>
    <title>JavaJam Coffee House</title>
    <link rel="stylesheet" href="mystyle.css">
    <meta charset="utf-8">
    <script type="text/javascript" src="menu.js"></script>
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
                <table id="menuTable">
                    <tr>
                        <td>Just Java</td>
                        <td>
                            <p>ssssssssssss</p>
                            <div>
                                <input type="radio" name="javaType" id="javaSingle" value="<?php echo $pricelist[0]; ?>" checked>
                                  <label for="javaType"><strong>Single Short: $<?php echo $pricelist[0]; ?></strong> </label>
                                <input type="radio" name="javaType" id="javaDouble" value="<?php echo $pricelist[1]; ?>">
                                  <label for="javaType"><strong>Double Short: $<?php echo $pricelist[1]; ?></strong> </label>
                            </div>
                        </td>
                        <td><input type="text" class="quantity" id="Java"></td>
                        <td>
                            <p id="javaPrice">0.0</p>
                        </td>
                    </tr>
                    <tr>
                        <td>Mocha Latte</td>
                        <td>
                            <p>ssssssssssss</p>
                            <div>
                                <input type="radio" name="mochaType" id="mochaSingle" value="<?php echo $pricelist[2]; ?>" checked>
                                  <label for="mochaType"><strong>Single Short: $<?php echo $pricelist[2]; ?></strong> </label>
                                <input type="radio" name="mochaType" id="mochaDouble" value="<?php echo $pricelist[3]; ?>">
                                  <label for="mochaType"><strong>Double Short: $<?php echo $pricelist[3]; ?></strong> </label>
                            </div>
                        </td>
                        </td>
                        <td><input type="text" class="quantity" id="Mocha"></td>
                        <td>
                            <p id="mochaPrice">0.0</p>
                        </td>
                    </tr>
                    <tr>
                        <td>MCP Latte</td>
                        <td>
                            <p>ssssssssssss</p>
                            <div>
                                <input type="radio" name="mcpType" id="mcpSingle" value="<?php echo $pricelist[4]; ?>" checked>
                                  <label for="mcpType"><strong>Single Short: $<?php echo $pricelist[4]; ?></strong> </label>
                                <input type="radio" name="mcpType" id="mcpDouble" value="<?php echo $pricelist[5]; ?>">
                                  <label for="mcpType"><strong>Double Short: $<?php echo $pricelist[5]; ?></strong> </label>
                            </div>
                        </td>
                        </td>
                        <td><input type="text" class="quantity" id="MCP"></td>
                        <td>
                            <p id="mcpPrice">0.0</p>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Total Price:</td>
                        <td><p id="totalPrice">0.0</p></td>
                    </tr>
                </table>
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