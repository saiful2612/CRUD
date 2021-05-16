<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     
     <!-- <?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> // used in action attribute of form -->


    <form action="" method="post">
                
    <label for="">Name</label>
    <input type="text" name="alu">

    <input type="submit" name="input" value="Submit">

    </form>

    <!-- <?php

    // Could be accessable but not recognizible to name attribute. 

    $name= $_POST["alu"];
    echo $name;
    
    ?> -->    

    <?php

    // Procedure-1

    $name="";            

    if($_SERVER["REQUEST_METHOD"]=="POST"){        
        $name = $_POST["alu"];
    }

    echo $name ;
    ?>



    <!-- <?php

    // Procedure-2
    
    if(isset($_POST['input'])){
        $username=$_POST["alu"];

        echo $username;
    }

    ?> -->




    <div class="output">




    </div>


</body>
</html>