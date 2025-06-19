<?php
include_once "config.php";


 $sql = "SELECT * FROM products";


$getUsers = $conn->prepare($sql);


$getUsers->execute();


$users = $getUsers->fetchAll();



?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <style>
        table,td,th{
            border:1px solid black;
            border-collapse :collapse;
        }


        th , td{
            padding:12px 24px;
        }
    </style>
</head>


<body>
    <table>
        <thead>
            <th>Id</th>
            <th>Name</th>
            <th>Category</th>
             <th>Price</th>

        </thead>
        <tbody>
            <?php foreach ($users as $user) { ?>
                <tr>
                    <td><?php echo $user['id'] ?></td>
                    <td><?php echo $user['name'] ?></td>
                    <td><?php echo $user['category'] ?></td>
                    <td><?php echo $user['price'] ?></td>
                    <td><a href="delete.php?id=<?php echo $user['id'] ?>">Delete </a></td>
                   
                </tr>
            <?php } ?>
        </tbody>
    </table>
     <button type="submit" name ="submit">Add</button>
</body>


</html>






