<?php
//$postdata = json_decode(file_get_contents("php://input"));
//$request  = json_decode($postdata);
//$username = $postdata->username;
//$password = $postdata->password;
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

$sername = "localhost";
$user    = "root";
$pass    = "";
$db      = "javawebmvc";

$conn = new mysqli($sername,$user,$pass,$db);

if ($conn->connect_error) {
    die("Connect Error: " .$conn->connect_error);
}

$sql = "INSERT INTO user (USERNAME, PASSWORD) VALUES ('$username', '$password')";
if ($conn->query($sql) === TRUE) {
    header("Refresh:0; url=index.html");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>


