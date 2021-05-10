<?php

echo "Database Connection <br>";


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

// Create Databse
$sql = "CREATE DATABASE cricketteam ";             // cricketteam is the name of database
$result= mysqli_query($conn, $sql);


// Checking the database create or not 
if($result){
    echo "Database is created successfully";
} else{
    echo "Database is not created ---> ".mysqli_error($conn);
}

// check database exists or not by saying :true or false
echo "<br>";
echo "The result is : ";
echo var_dump($result);                             
echo "<br>";

// create a table in database 
$sql_one= "CREATE TABLE `Sylhet` ( `SNo` INT(6) NOT NULL AUTO_INCREMENT , `Name` VARCHAR(12) NOT NULL , `Position` VARCHAR(12) NOT NULL , `Exp` INT(6) NOT NULL , PRIMARY KEY (`SNo`))";    
$result_one =mysqli_query($conn, $sql_one);

echo "<br>";


// Check table exist or not in Database
if($result_one){
    echo "Table is created <br>";
}else{
    echo "Table is not created --> ".mysqli_error($conn);
}

echo "<br>"

// Insert data in database
$sql_two = " INSERT INTO `sylhet` (`SNo`, `Name`, `Position`, `Exp`) VALUES (NULL, 'Riyaz', 'Batter', '6');";
$result_two= mysqli_query($conn, $sql_two);

echo "<br>";

if($result_two){
    echo "Table is filled successfully";
}else{
    echo "Table is not filled --> ".mysqli_error($conn);
}


//
?>