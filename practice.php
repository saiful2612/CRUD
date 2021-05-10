<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<?php
// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";
$nameErr=$emailErr=$genderErr=$websiteErr="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {


    if(empty($_POST["name"])){
        $nameErr="Name is requied";
    }else{
        $name = test_input($_POST["name"]);
    }
    if(empty($_POST["email"])){
        $emailErr="Email is required";
    }else{
        $email = test_input($_POST["email"]);
    }
    if(empty($_POST["website"])){
        $websteErr="Website is required";
    }else{
        $website = test_input($_POST["website"]);
    }
    if(empty($_POST["comment"])){
        $comment="";
    }else{
        $comment = test_input($_POST["comment"]);
    }

    if(empty($_POST["gender"])){
        $genderErr="Gender is requied";
    }else{
        $gender = test_input($_POST["gender"]);
    }  
}

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
    return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <br><br>
  E-mail: <input type="text" name="email">
  <br><br>
  Website: <input type="text" name="website">
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>

</body>
</html>