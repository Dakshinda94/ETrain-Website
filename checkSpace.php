<?php
	include_once 'config.php';
?>

<?php
	$mail = $_POST["E-mail"];
	$loc = $_POST["Location"];
	$st = $_POST["Station"];
	$date = $_POST["Date"];
	$time = $_POST["Time"];
	$hrs = $_POST["No_Of_Hrs"];
	$prpse= $_POST["Purpose"];
	
	$sql = "INSERT INTO space(E-mail,Location,Station,Date,Time,No_Of_Hrs,Purpose) 
	        VALUES('$mail','$loc',$st,$date,'$time',$hrs,$prpse)";
	
	if(mysqli_query($conn,$sql))
	{
		echo "<script> alert('Record added successfully');</script>";
		header("Location:home.html");
	}
	else
	{
		echo "<script> alert('Error : Could not save the data');</script>";
	}
	
	mysqli_close($conn);
?>