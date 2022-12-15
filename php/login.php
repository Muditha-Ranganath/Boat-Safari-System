<?php
	include_once 'config.php';
?>

<?php
	$email = $_POST["email"];
	$password = $_POST["psw"];

	$email = md5($email);
	$sql = "SELECT * FROM Register WHERE email='$email'";
	$result = mysqli_query($db, $sql);
	
	if(mysqli_num_rows($result) == 1) {
		echo "<script>alert('Login successful!!')</script>";
		header("Location:..\html/Profilepage.html");
	}
	else {
		echo "<script>alert('Login Unsuccessful!!')</script>";
	}
	
	mysqli_close($conn);
?>