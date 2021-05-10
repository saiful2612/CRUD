<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Form Handling</title>
    </head>
    <body>

        <?php
            $name=$email='';
            $nameErr=$emailErr='';

            if($_SERVER["REQUEST_METHOD"]=="POST"){

                // $name=$_REQUEST["name"];
                // $email=$_REQUEST["email"];

                if(empty($_POST['name'])){
                    $nameErr= "Name is required";
                }else {
                    $name = test_input($_POST['name']);
                    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
                        $nameErr = "Only letters and white space allowed";
                    }
                }
                echo "<br>";
                if(empty($_POST['email'])){
                    $emailErr= "Email is required";
                }else {
                    $email =test_input($_POST['email']);
                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        $emailErr = "Invalid email format";
                    }
                }
            }  
            function test_input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }  
        ?>



        <form method ="POST" action="">      
            Name: <input type="text" name="name" required>
            <span class="error">* <?php echo $nameErr;?></span>
            <br><br>
            Email: <input type="email" name="email" value="">
            <span class="error">* <?php echo $emailErr;?></span>
            <br><br>
            <input type="submit" value="SUBMIT">
            
        </form>

        <?php
            echo "<h2> Your Input </h2>";
            echo "<br>";
            echo $name;
            echo "<br>";
            echo $email;
        ?>
    </body>
</html>