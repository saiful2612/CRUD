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

// Insert data in database
$sql = " INSERT INTO `sylhet` (`SNo`, `Name`, `Position`, `Exp`) VALUES (NULL, 'Sakib', 'Alrounder', '10');";
$result_two= mysqli_query($conn, $sql);

echo "<br>";


//Check the table is filled or not
if($result_two){
    echo "Table is filled successfully";
}else{
    echo "Table is not filled --> ".mysqli_error($conn);
}

//fetch data from Database 
$sql= "SELECT * FROM `sylhet` ";
$result_one=mysqli_query($conn, $sql);
echo mysqli_num_rows($result_one); 




?>