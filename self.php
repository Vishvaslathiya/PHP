<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    
    <title>Shop</title>

    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            width: 100%;
            background-color: bisque;
        }
        .container{
            width: 100%;
            height: 100vh;
            display: flex;
        }
        .sidebar{
            width: 40%;
            height: 100%;
            background-color: #000;
            color: white;
            padding: 1em;
            /* box-sizing: border-box; */
        }
        .Main{
            width: 80%;
            height: 100%;
            padding: 1em;   
            /* box-sizing: border-box; */
            background-color: aqua;
        }
        
       
        nav {
            background-color: #000;
            color: white;
            /* padding: 1em; */
            box-sizing: border-box;
            height: 100%;
            width: 100%; /* Adjust the width of the navbar */
            display: flex;
            flex-direction: column;
            
            border: 3px solid white;
        }
        
        nav a {
            margin-top: 20px;
            text-decoration: none;
            color: white;
            padding: 0.5em;
            margin: 10px;
            padding-left: 30px;
            /* text-align: center; */
            border: 3px solid white;
            text-decoration: none;
            background-color: gray;
            color: white;
            
        }
    </style>
</head>
<body>
    
        <div class="container">
            <div class="sidebar">
                <h1>Shop</h1>
                <nav>
                    
                    <a href="self.php">Home</a>
                    <a href="add.php">Add</a>
                    <a href="view.php">View</a>
                    <a href="update.php">Update</a>
                    <a href="delete.php">Delete</a>
                </nav>
            </div>
            <div class="Main">Main</div>
        </div>
    




</body>
</html>