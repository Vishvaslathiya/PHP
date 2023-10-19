<?php

function addProduct($conn)
{
    if (isset($_POST["add"]) && !empty($_POST['pname']) && !empty($_POST['pprice']) && !empty($_POST['qty'])) {
        $pid = $_POST['pid'];
        $productName = $_POST['pname'];
        $productPrice = $_POST['pprice'];
        $quantity = $_POST['qty'];

            $insertQuery = "INSERT INTO product (pname, price, qty) VALUES ('$productName', $productPrice, $quantity)";

            if (mysqli_query($conn, $insertQuery)) {
                echo "<script>alert('Product added successfully.');</script>";
            } else {
                echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
            }
        }
        else {
        echo "<script>alert('Please fill all the fields.');</script>";
        return;
        
    }
}

$conn = mysqli_connect("localhost", "root", "", "cie-2");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    addProduct($conn);
}

mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
</head>

<body>
    <div class="container">
        <form action="" method="post">
            <h1>Add Product</h1>

            <label>Enter Product ID : </label>
            <input type="number" name="pid" id="pid" disabled><br>

            <label>Enter Product Name : </label>
            <input type="text" name="pname" id="pname"><br>

            <label>Enter Product Price : </label>
            <input type="number" name="pprice" id="pprice"><br>

            <label>Enter Product Quantity : </label>
            <input type="number" name="qty" id="qty"><br>

            <button type="submit" name="add" id="add">Add Product</button>
            <button type="button" onclick="window.open('./view.php', '_blank', 'noopener noreferrer')">View
                Product</button>
            <button type="button" onclick="window.open('./delete.php', '_blank', 'noopener noreferrer')">Delete
                Product</button>
        </form>
    </div>
</body>

</html>