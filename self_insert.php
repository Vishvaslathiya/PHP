<?php
$conn = mysqli_connect("localhost", "root", "", "cie-2");
function insertion($conn)
{

    if (mysqli_connect_errno()) {
        echo "Error Occurred: " . mysqli_connect_error();
    } else {
        if (isset($_POST['submit']) && !empty($_POST['sname']) && !empty($_POST['sem']) && !empty($_POST['class'])) {
            $sname = $_POST['sname'];
            $sem = $_POST['sem'];
            $class = $_POST['class'];
            $img = $_POST['img'];

            $insert = "INSERT INTO std1 (name, sem, class, img) VALUES ('$sname', $sem, '$class', '$img')";
            $result = mysqli_query($conn, $insert);

            if (!$result) {
                echo "Insertion Failed: " . mysqli_error($conn);
            } else {
                echo "Insertion Success!";
            }
        } else {
            echo ' Enter All Details : ';
        }
    }
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    insertion($conn);
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Database</title>
</head>

<body>

    <h1>Insertion In Student</h1>

    <form action="" method="post">

        <br>
        <label>Enter Student ID : </label>
        <input type="number" name="sid" id="sid" disabled>

        <br>
        <label>Enter Student Name : </label>
        <input type="text" name="sname" id="sname">

        <br>
        <label>Enter Student Sem : </label>
        <input type="number" name="sem" id="sem">

        <br>
        <label>Enter Student Division : </label>
        <input type="text" name="class" id="class">

        <br>
        <label>Enter Student Image Path : </label>
        <input type="text" name="img" id="img">

        <br>
        <button type="submit" name="submit" id="submit">Add Student</button>

    </form>

</body>

</html>