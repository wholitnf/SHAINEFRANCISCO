<?php
    include('connect.php');

    $select = "SELECT * FROM users";
    $sqlselect = mysqli_query($connect, $select);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Info</title>
    <style>
        a{
            font-size: 50px;
            background-color:rgba(50, 115, 177, 0.9);
            color: #eee;
            text-decoration: none;
            border-spacing: 0;
            border-radius: 10px;
            border: 2px solid black;
            text-align: center;
        }
        table{
            border: 5px solid black;
            text-align: center;
            font-size: 50px;
            width: 100%;
            border-spacing: 0;
            border-radius: 10px;
            border-collapse: separate;
        }
        th{
            background-color: rgba(40, 140, 233, 0.9);
            border: 2px solid black;
            padding: 15px;
            font-size: 50px;
        }
        td{
            border: 2px solid black;
            padding: 10px;
            border-collapse: separte;
            overflow: hidden;
        }
        th.id-column, td.id-column {
        background-color: rgba(25, 45, 230, 0.9);  
        color: black;
        font-weight: bold; 
        }
        
        button{
            font-size: 30px;
            cursor: pointer;
        }
        .btn{
            border: none;
            font-size: 30px;
            cursor: pointer;
        }
        .edit{
            border: 2px solid black;
            color: black;
            padding: 10px;
            border-radius: 10px;
            border-collapse: separate;
        }
        .delete{
            border: 2px solid black;
            color: black;
            padding: 10px; 
            border-radius: 10px;
            border-collapse: separate; 
        }
    </style>
</head>
<body>
    <a type="button" id="add" href="add.php">Add+</a>
    <table>
        <tr>
        <th class="id-column">ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Address</th>
            <th colspan="2">Action</th>
        </tr>

        <?php foreach($sqlselect as $result => $value) {  ?>
            <tr>
            <td class="id-column"><?php echo $value['id'] ?></td>
                <td><?php echo $value['name'] ?></td>
                <td><?php echo $value['age'] ?></td>
                <td><?php echo $value['address'] ?></td>
                <td>
                    <form action="update.php" method="post">
                        <input class="btn edit" type="submit" value="Edit" name="edit">
                        <input type="hidden" name="edId" value="<?= $value['id'] ?>">
                        <input type="hidden" name="edName" value="<?= $value['name'] ?>">
                        <input type="hidden" name="edAge" value="<?= $value['age'] ?>">
                        <input type="hidden" name="edAddress" value="<?= $value['address'] ?>">
                    </form>
                </td>
                <td>
                    <form action="delete.php" method="post">
                        <input type="hidden" name="delID" value="<?= $value['id'] ?>">
                        <input class="btn delete" type="submit" value="Delete" name="delete">
                    </form>
                </td>
            </tr>
        <?php } ?>
    </table>

</body>
</html>