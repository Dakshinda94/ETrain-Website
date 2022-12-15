<?php 
$servername = "localhost:3306"; 
$username = "root"; 
$password = ""; 
$dbName = "Ceylon_train";

// Create connection 
$conn = new mysqli($servername, $username, $password, $dbName); 
// Check connection 
if ($conn->connect_error) 
{ 
	die("Connection failed: " . $conn->connect_error); 
} 

echo "<script> alert('Connected successfully')</script>"; 
?>