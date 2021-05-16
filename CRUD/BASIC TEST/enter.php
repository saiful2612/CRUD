<?php

include 'connection.php';


if($_SERVER["REQUEST_METHOD"]=="POST"){


    $username=$_POST['alu'];


    $sql= "INSERT INTO `practice` (`id`, `Name`) VALUES (NULL, '$username');";

    $query =mysqli_query($conn, $sql);
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
                    
        <label for="">Name</label>
        <input type="text" name="alu">
                
        <input type="submit" name="input" value="Submit">
                
    </form>
</body>
</html>