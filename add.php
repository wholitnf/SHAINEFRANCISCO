<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: white;
            margin: 0;
        }
        .container {
            width: 50%;
            padding: 30px;
            border-radius: 20px;
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
    </style>
</head>
<body>
<form action = "add.php" method = "get">
    <label> Enter your ID: </label>
    <input type = "number" id="id" name= "id"> </br>
    <label> Enter your Name: </label>
    <input type = "text" id="name" name= "name"> </br>
    <label for = "age"> Enter your Age: </label>
    <input type = "number" id= "age" name = "age"></br>
    <label for = "address"> Enter your Address:
    <input type = "text" id= "address" name="address"> </br>
    <input name = "Submit" value = "Submit" type= "Submit">
    </form>
</body>
</html>

<?php
include('connect.php');

if(isset($_GET['Submit'])){
    $id = $_GET['id'];
    $name = $_GET['name'];
    $age = $_GET['age'];
    $address = $_GET['address'];

    $Add = "INSERT INTO users VALUES( '$id', '$name', $age, '$address')";

    $sqlAdd = mysqli_query ($connect, $Add);
    echo "<script>alert ('New data Added!') </script>";
    echo "<script>window.location.href ='index.php'</script>";
}
