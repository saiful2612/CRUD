
<?php

$insert= false;
//Connecting to the database
$servername= "localhost";
$username = "root";
$password = "";
$database = "notes";

// Create connection 
$conn= mysqli_connect($servername, $username, $password, $database);


// Check connection 
if(!$conn){
    die("connection failed :" .mysqli_connect_error());
}
if($_SERVER['REQUEST_METHOD']== 'POST'){
    if(isset($_POST['snoEdit'])){
        echo "yes";
        exit();
    }

    //update the record
    $sno=$_POST["snoEdit"];
    $title= $_POST["titleEdit"];
    $description= $_POST["descriptionEdit"];
        
    $sql = "UPDATE `notes` SET `title` = '$title', `description` = '$description' WHERE `notes`.`sno` = $sno";
    $result=mysqli_query($conn, $sql);
    if($result){
        echo "Succesfully Updated";
    }else{
        echo "We couldnot updated ";
    }
}
// else{
//     $title= $_POST["title"];
//     $description= $_POST["description"];

//     // //Insert data
//     $sql = "INSERT INTO `notes`(`title`, `description`) VALUES('$title', '$description')";
//     $result=mysqli_query($conn, $sql);
//     // echo $result;
//     if($result){
//         $insert=true;
//         // echo "Data inserted";        
//     }else{
//         echo "Data not inserted  -->".mysqli_error($conn);
//     }
// }

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <!-- Edit modal -->
    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal">
        Edit Modal
    </button> -->

    <!-- Edit Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit this Note</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="snoEdit" id="snoEdit">
                    <form acrtion="/phpt/index.php" method="post">
            
                        <div class="form-group mb-3">
                            <label for="title" class="form-label">Note Title</label>
                            <input type="text" class="form-control" id="titleEdit" name="titleEdit">
                        </div>
                        <div class="form-group mb-3">
                            <label for="desc" class="form-label">Note Description</label>
                            <textarea class="form-control" id="descriptionEdit" name="descriptionEdit" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Update note</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>




    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"   aria-expanded="false"     
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <?php
    
    if($insert){
        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
        <strong>Success!</strong> Your record has been inserted successfully.
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      </div>";
    }

    ?>

    <div class="container my-4">
        <h2>Add a Note</h2>
        <form acrtion="/phpt/index.php" method="post">
            
            <div class="form-group mb-3">
                <label for="title" class="form-label">Note Title</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="form-group mb-3">
                <label for="desc" class="form-label">Note Description</label>
                <textarea class="form-control" id="description" name="description" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Add note</button>
        </form>

    </div>

    <div class="container">


        <table class="table">
            <thead>
                <tr>
                    <th scope="col">SNo</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $sql= "SELECT * FROM `notes`";
                    $result = mysqli_query($conn, $sql);
                    $sno=0;
                    while($row = mysqli_fetch_assoc($result)){
                        $sno= $sno+1;
                        echo "<tr>
                        <th scope='row'>".$sno ." </th>
                        <td>". $row['title'] ."</td>
                        <td>". $row['description'] ."</td>
                        <td> <button class='edit btn btn-sm btn-primary' id=".$row['sno'].">Edit</button> <a href='/del'>Delete</a> </td>
                    </tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>


    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>

    <script>
        edits= document.getElementsByClassName('edit');
        Array.from(edits).forEach((element)=>{
            element.addEventListener('click', (e)=>{
                // console.log('edit');
                tr= e.target.parentNode.parentNode;
                // console.log('tr');
                title=tr.getElementsByTagName("td")[0].innerText;
                description=tr.getElementsByTagName("td")[1].innerText;
                descriptionEdit.value=description;
                titleEdit.value=title;
                snoEdit.value=e.target.id;
                $('#editModal').modal('toggle');

;
            })
        })
    </script>
  </body>
</html>
