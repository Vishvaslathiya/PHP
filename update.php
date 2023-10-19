
<?php
function getProductDetails($conn, $productId)
{
    $query = "SELECT pname, price, qty FROM product WHERE pid = $productId";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        return $row;
    } else {
        return false;
    }
}

function updateProduct($conn, $productId, $newName, $newPrice, $newQuantity)
{
    $updateQuery = "UPDATE product SET pname = '$newName', price = $newPrice, qty = $newQuantity WHERE pid = $productId";

    if (mysqli_query($conn, $updateQuery)) {
        return true;
    } else {
        return false;
    }
}

$conn = mysqli_connect("localhost", "root", "", "cie-2");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$productId = isset($_POST['product_id']) ? (int)$_POST['product_id'] : 0;

if (isset($_POST['fetch'])) {
    $productDetails = getProductDetails($conn, $productId);
}

if (isset($_POST['update'])) {
    $newName = $_POST['new_name'];
    $newPrice = (float)$_POST['new_price'];
    $newQuantity = (int)$_POST['new_quantity'];

    if (updateProduct($conn, $productId, $newName, $newPrice, $newQuantity)) {
        echo "<script>alert('Product updated successfully.');</script>";
        // Clear the form after successful update
        $productDetails = [];
    } else {
        echo "<script>alert('Error updating product: " . mysqli_error($conn) . "');</script>";
    }
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product</title>
</head>

<body>
    <div class="container">
        <form action="" method="post">
            <h1>Update Product</h1>

            <label>Enter Product ID : </label>
            <input type="number" name="product_id" id="product_id" required>
            <button type="submit" name="fetch">Fetch Product</button>

            <?php if (isset($productDetails) && $productDetails): ?>
                <br>
                <!-- <label>Product ID: <?php echo $productDetails['productId']; ?></label><br> -->
                <label>Product Name: <?php echo $productDetails['pname']; ?></label><br>
                <label>Product Price: <?php echo $productDetails['price']; ?></label><br>
                <label>Product Quantity: <?php echo $productDetails['qty']; ?></label><br>

                <label>New Product Name : </label>
                <input type="text" name="new_name" id="new_name" required>

                <label>New Product Price : </label>
                <input type="number" name="new_price" id="new_price" required>

                <label>New Product Quantity : </label>
                <input type="number" name="new_quantity" id="new_quantity" required>

                <button type="submit" name="update">Update Product</button>
            <?php endif; ?>
        </form>
    </div>
</body>

</html>
