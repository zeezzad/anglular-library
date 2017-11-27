<?php

$host = "root"; /* Host name */
$user = ""; /* User */
$password = ""; /* Password */
$dbname = "javawebmvc"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
 die("Connection failed: " . mysqli_connect_error());
}


$sel = mysqli_query($con,"select * from user");
$data = array();

while ($row = mysqli_fetch_array($sel)) {
 $data[] = array("Uername"=>$row['USERNAME'],"Password"=>$row['PASSWORD']);
}
echo json_encode($data);
?>