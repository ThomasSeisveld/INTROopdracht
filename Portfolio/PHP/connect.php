<?php
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$password = $_POST['password'];
$number = $_POST['number'];



// connection
$serverName = "localhost";
$UserName = "root";
$Password = "";
$DBName = "HuizenverkoopDB";

$conn = mysqli_connect($serverName, $UserName, $Password, $DBName);

if (!$conn) {
    die("Connection Failed : " . mysqli_connect_error());
}

else {
    $stmt = $conn->prepare("insert into registration(firstName, lastName, gender, email, password, number) values(?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssi", $firstName, $lastName, $gender, $email, $password, $number);
    $execval = $stmt->execute();
    echo $execval;
    echo "Registration successfully...";
    $stmt->close();
    $conn->close();
}
