<?php

include 'connection.php';

$id=$_GET['id'];
$sql="SELECT * FROM practice WHERE id= $id";
$query=mysqli_query($conn, $sql);

// $result=  mysqli_fetch_array($query);

while($res= mysqli_fetch_array($query)){
    
    $old_id= $res['id'];            // DB column name
    $old_username= $res['Name'];          // DB coloumn name
}

if(isset($_POST['input'])){

    $id=$_GET['id'];
    $username=$_POST['alu'];

    $sql= "UPDATE `practice` SET `Name` = '$username' WHERE `practice`.`id` = $id;";

    $query =mysqli_query($conn, $sql); 

    header('location: Showcase.php');
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
                    <!-- $result['Name'] -->
        <label for="">Name</label>
        <input type="text" name="alu" value="<?php echo $old_username; ?>">   
                
        <input type="submit" name="input" value="Edit">
                
    </form>
</body>
</html>