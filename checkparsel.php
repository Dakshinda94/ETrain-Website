<?php
	include_once 'config.php';
?>

<?php
	$frm = $_POST["from"];
	$to = $_POST["to"];
	$dt = $_POST["ticket_date"];
	$trn = $_POST["train"];
	$wet = $_POST["weight"];
	$ntr = $_POST["nature"];
	
	$sql = "INSERT INTO Item (From,To,Date,Train_type,Weight,Nature) 
	        VALUES('$frm','$to',$dt,$trn,'$wet',$ntr)";
	
	if(mysqli_query($conn,$sql))
	{
		echo "<script> alert('Record added successfully');</script>";
	}
	else
	{
		echo "<script> alert('Error : Could not save the data');</script>";
	}
	
	mysqli_close($conn);
?>