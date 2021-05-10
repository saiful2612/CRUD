<?php
include 'conn.php';

if(isset($_POST['done'])){

    $id=$_GET['id'];
    $username=$_POST['username'];
    $nationality=$_POST['nationality'];
    $phone=$_POST['phone'];

    $sql= "UPDATE `studentlist` SET `username` = '$username', `nationality` = '$nationality',`phone`='$phone'  WHERE `studentlist`.`id` = $id";

    $query =mysqli_query($con, $sql);

    header('location: display.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    
    <div class="col-lg-6 m-auto">

        <form method="post" action="">
            <br><div class="card">
                <div class="card-header bg-dark">
                    <h1 class="text-white text-center">Update Information</h1>
                </div>

                <label for=""><b>Student Name</b></label>
                <input type="text" name="username" class="form-control" required><br>

                <label for=""><b>Nationality</b></label>
                <input type="text" name="nationality" class="form-control" required><br>

                <label for=""><b>Phone Number</b></label>
                <input type="int" name="phone" class="form-control" required><br>

                <button class="btn btn-success" name= "done" >Submit</button><br>

                <button class="btn btn-warning"><a href="display.php">Go To List</a></button><br>


            </div>
        </form>
    </div>

</body>
</html>