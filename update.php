<?php
    include('connect.php');

    if(isset($_POST['edit'])){
        $EdID = $_POST['edId'];
        $EdName = $_POST['edName'];
        $EdAge = $_POST['edAge'];
        $EdAddress = $_POST['edAddress'];

    }

    if(isset($_POST['submit'])){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $age = $_POST['age'];
        $address = $_POST['address'];

        $update = "UPDATE users SET name = '$name', age=$age, address='$address' WHERE id=$id";
        $sqlUp = mysqli_query($connect, $update);

        echo "<script>alert('Data Updated')</script>";
        echo "<script>window.location.href='index.php'</script>";

    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Form</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: white;
            margin: 0;
        }
        .container {
            width: 10%;
            padding: 10px;
            border-radius: 10px;
            box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2);
            text-align: center;
            background-color: white;
            color: black;
            border: 3px solid #0288d1;
        }
        form {
            border: 2px solid #0288d1;
            padding: 30px;
            border-radius: 10px;
            display: inline-block;
            background-color: #e0f7fa;
            width: 20%;
        }
        label, input {
            display: block;
            margin: 15px auto;
            width: 90%;
        }
        input[type="submit"] {
            background-color: #0288d1;
            color: white;
            border: none;
            padding: 12px;
            cursor: pointer;
            border-radius: 5px;
            width: 95%;
        }
        input[type="submit"]:hover {
            background-color: #01579b;
        }
        a{
           
            margin-top: 10px; 
            padding: 10px;
            text-decoration: none;
            color: #0288d1;
            font-weight: bold;
            border: 2px solid #0288d1;
            border-radius: 10px;
            text-align: center;
            background-color: white;
        }
        a:hover {
            background-color: #0288d1;
            color: white;
        }
    </style>
</head>
<body>
    
    <a href="index.php">Back</a>
    <form action="update.php" method="post">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="<?= $EdName ?>"><br>

        <label for="age">AGE</label>
        <input type="number" name="age" id="age" value="<?= $EdAge ?>"><br>
        
        <label for="address">Address</label>
        <input type="text" name="address" id="address" value="<?= $EdAddress ?>"><br>

        <input type="hidden" name="id" id="id" value="<?= $EdID ?>">
        
        <input type="submit" name="submit" id="submit" value="Update"><br>
    </form>

</body>
</html>