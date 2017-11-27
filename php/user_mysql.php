<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$conn = new mysqli("localhost", "root", "", "javawebmvc");

$result = $conn->query("SELECT USERNAME, PASSWORD FROM user");

$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
    if ($outp != "") {$outp .= ",";}
    $outp .= '{"Username":"'  . $rs["USERNAME"] . '",';
    $outp .= '"password":"'   . $rs["PASSWORD"] . '",';
    
}
$outp ='{"records":['.$outp.']}';
$conn->close();

echo($outp);
?>