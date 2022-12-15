<?php
	include_once 'contactconfig.php';
?>

<?php
	$name = $_POST["name"];
	$email = $_POST["email"];
	$subject = $_POST["subject"];
	
	$sql = "insert into submitcontact(id,name,email,subject)values('','$name','$email','$subject')";
	
	if(mysqli_query($conn,$sql)) {
		echo "<script>alert('Submit successful!!')</script>";
		header("Location:..\html/Homepage.html");
	}
	else {
		echo "<script>alert('Submit Unsuccessful!!')</script>";
	}
	
	mysqli_close($conn);
?>