<?php

function deleteProduct($conn, $productId)
{
    $deleteQuery = "DELETE FROM product WHERE pid = $productId";

    if (mysqli_query($conn, $deleteQuery)) {
        return true;
    } else {
        return false;
    }
}

$conn = mysqli_connect("localhost", "root", "", "cie-2");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$productId = isset($_POST['product_id']) ? (int) $_POST['product_id'] : 0;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (deleteProduct($conn, $productId)) {
        echo "<script>alert('Product deleted successfully.');</script>";
    } else {
        echo "<script>alert('Error deleting product: " . mysqli_error($conn) . "');</script>";
    }
}

mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Product</title>
</head>

<body>

    <h1>Delete Product Here!</h1>
    <form action="" method="post" onsubmit="return confirm('Are you sure you want to delete this product?');">
        <label>Enter Product ID to delete:</label>
        <input type="text" name="product_id" id="product_id">
        <br>
        <button type="submit">Delete Product</button>
    </form>

    <br><br>

    <button type="button" onclick="window.open('./view.php', '_blank', 'noopener noreferrer')">View Product</button>
    <button type="button" onclick="window.open('./update.php', '_blank', 'noopener noreferrer')">Update Product</button>

</body>

</html>
