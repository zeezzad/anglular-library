<?php

$postdata = file_get_contents(php://input);
$request  = json_decode($postdata);
$username = $request->username;
$password = $request->password;

$sername = "localhost";
$user    = "root";
$pass    = "";
$db      = "javawebmvc";

$conn = new mysqli($sername,$user,$pass,$db);

if ($conn->connect_error) {
    die("Connect Error: " .$conn->connect_error);
}

$sql = "insert into user(username,password)values($username,$password)";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>