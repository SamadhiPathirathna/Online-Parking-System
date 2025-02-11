<?php
//The connection object
$conn=new mysqli("localhost","root","","automated parking");
// Check connection
if($conn->connect_error){
die("Connection failed: " . $conn->connect_error);
}
?>