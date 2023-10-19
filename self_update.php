<?php

$conn = mysqli_connect("localhost", "root", "", "cie-2");
if (mysqli_connect_errno()) {
    echo "Connection Failed !";
} else {
    echo "Connection Success !";

    if (isset($_POST['update']) && !empty($_POST['sid']) && !empty($_POST['sname']) && !empty($_POST['sem']) && !empty($_POST['div']) && !empty($_POST['img'])) {

        $sid = $_POST['sid'];
        $sname = $_POST['sname'];
        $sem = $_POST['sem'];
        $class = $_POST['div'];
        $img = $_POST['img'];

        $update = "update std1 set name = '$sname', sem = $sem, class = '$class', img = '$img' where id = $sid";
        $result = mysqli_query($conn, $update);

        if(!$result){
            echo "Updation Failed : " . mysqli_error($conn);
        }else{
            echo "Updation Success !";
            
        }
        
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Student</title>
</head>

<body>

    <h1>Update Student Details Here</h1>
    <hr>
    <form action="" method="post">

        <br>
        <label>Enter Student ID : </label>
        <input type="number" name="sid" id="sid">

        <br>
        <label>Enter Student Name : </label>
        <input type="text" name="sname" id="sname">

        <br>
        <label>Enter Student Semester : </label>
        <input type="number" name="sem" id="sem">

        <br>
        <label>Enter Student Division : </label>
        <input type="text" name="div" id="div">

        <br>
        <label>Enter Student Image Path : </label>
        <input type="text" name="img" id="img">
        <br>
        <button type="submit" name="update" style="margin-left: 20px; font-size: 18px;">Update Student Details</button>
        <br>


    </form>

</body>

</html>