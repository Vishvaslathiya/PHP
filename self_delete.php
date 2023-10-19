<?php

$conn = mysqli_connect("localhost", "root", "", "cie-2");
if (mysqli_connect_errno()) {
    echo "Connection Failed !";
} else {
    echo "Connection Success !";

    if (isset($_POST['delete']) && !empty($_POST['sid'])) {

        $sid = $_POST['sid'];

        $delete = "delete from std1 where id = $sid";
        $result = mysqli_query($conn, $delete);

        if (!$result) {
            echo "Deletion Failed : " . mysqli_error($conn);
        } else {
            echo "Deletion Success !";

        }

    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Student</title>
</head>

<body>

    <h1>Delete Student Details Here</h1>
    <hr>
    <form action="" method="post">

        <br>
        <label>Enter Student ID : </label>
        <input type="number" name="sid" id="sid">

        <button type="submit" name="delete" style="margin-left: 20px; font-size: 18px;">Delete Student Details</button>
        <br>


    </form>

</body>

</html>