<?php


// connection
$serverName = "localhost";
$UserName = "db_89560";
$Password = "db89560!";
$DBName = "Images";

$conn = mysqli_connect($serverName, $UserName, $Password, $DBName);

if (!$conn) {
    die("Connection Failed : " . mysqli_connect_error());
}

else {
   echo "succes connection";
}
