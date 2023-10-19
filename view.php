<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Product</title>
</head>

<body>
    <h1>View All Products here!</h1>
    <?php
    // view products from database
    $conn = mysqli_connect("localhost", "root", "", "cie-2");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    } else {
        $select = "select * from product";
        $result = mysqli_query($conn, $select);
        if (mysqli_num_rows($result) > 0) {
            echo "<table border='1'>";
            echo "<tr>";
            echo "<th>Product ID</th>";
            echo "<th>Product Name</th>";
            echo "<th>Product Price</th>";
            echo "<th>Product Quantity</th>";
            echo "</tr>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['pid'] . "</td>";
                echo "<td>" . $row['pname'] . "</td>";
                echo "<td>" . $row['price'] . "</td>";
                echo "<td>" . $row['qty'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "No products found.";
        }
    }
    ?>
    <br><br>
    <button type="submit" name="add" id="add"><a href="./add.php" target="_blank" rel="noopener noreferrer">Add
            Product</a></button>
    <button type="button" onclick="window.open('./delete.php', '_blank', 'noopener noreferrer')">Delete
        Product</button>
</body>

</html>