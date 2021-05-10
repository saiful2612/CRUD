
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
    <div class="container">
        <div class="col-lg-12">
            <br><br>
            <h1 class="text-center text-primary">Display table data</h1>
            <br>
            <table class="table table-striped table-hover table-bordered">
                <tr class="bg-dark text-white text-center">
                    <th>ID</th>
                    <th>Name</th>
                    <th>Nationality</th>
                    <th>Phone Number</th>
                    <th>Action</th>

                </tr>
    <?php

        include 'conn.php';

        $sql= " SELECT * FROM studentlist";

        $query =mysqli_query($con, $sql);

        while($res= mysqli_fetch_array($query)){

    ?>

                <tr class="text-center">
                    <td> <?php echo $res['id']; ?></td>
                    <td> <?php echo $res['username']; ?></td>
                    <td> <?php echo $res['nationality']; ?></td>
                    <td> <?php echo $res['phone']; ?></td>
                    <td> <button class="btn btn-primary" ><a href="update.php?id=<?php echo $res['id'];
                    ?>" class="text-white" > Update </a> </button> </td>
                    <td><button class="btn btn-danger" > <a href="delete.php?id=<?php echo $res['id']; ?>" class="text-white">Delete</a> </button></td>
                </tr>

                <?php
                    }
                ?>

            </table>

            <button class="btn btn-warning"><a href="insert.php">Insert Page</a></button>

        </div>
    </div>


</body>
</html>