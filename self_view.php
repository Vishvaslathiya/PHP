<?php

$conn = mysqli_connect("localhost", "root", "", "cie-2");
if(mysqli_connect_errno()){
    echo "Connection Failed !";
}else{
    $sql = "select * from std1";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
        echo "<table border='5'>";
        echo "<tr>";    
        echo "<th>ID</th>";
        echo "<th>Name</th>";
        echo "<th>Semester</th>";
        echo "<th>Class</th>";
        echo "<th>Image</th>";
        echo "</tr>";
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['sem'] . "</td>";
            echo "<td>" . $row['class'] . "</td>";
            echo "<td>" . $row['img'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }else{
        echo "No Data Found !";
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Data In CRUD</title>
</head>
<body>
    <h1>View Student Details</h1>
    <hr>

</body>
</html>