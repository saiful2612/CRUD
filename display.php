<?php

//Connecting to the database
$servername= "localhost";
$username = "root";
$password = "";
$database = "cricketteam";

// Create connection 
$conn= mysqli_connect($servername, $username, $password, $database);

// Check connection 
if(!$conn){
    die("connection faild :" .mysqli_connect_error());
}else{
    echo "Succesfully Connected With the Databse";
}

echo "<br>";

//fetch data from Database 
$sql= "SELECT * FROM `sylhet` ";
$result=mysqli_query($conn, $sql);

//Number of records
$num= mysqli_num_rows($result);
echo $num;

echo "<br>";


//Display data on the screen
if($num>0){
 // $row =mysqli_fetch_assoc($result);
    while($row =mysqli_fetch_assoc($result)){
        echo $row['SNo'].'Hello Mr. '.$row['Name'];
        echo "<br>";
    }
}


?>