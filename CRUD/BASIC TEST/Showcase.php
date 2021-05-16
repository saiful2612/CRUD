<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
        </tr>

        <?php

        include 'connection.php';
        

        $sql= " SELECT * FROM `practice`";

        $query =mysqli_query($conn, $sql);

        while($res= mysqli_fetch_array($query)){

        ?>




    


        <tr>
            <td><?php echo $res['id']; ?></td>
            <td><?php echo $res['Name']; ?></td>         
            <td> <button><a href="Edit.php?id=<?php echo $res['id'];?>"> Update </a> </td>
        </tr>

        <?php
        }
        ?>


    </table>
</body>
</html>
