<?php
	include_once 'config.php';
?>

<?php
	$fname = $_POST["firstname"];
	$lname = $_POST["lastname"];
	$gender = $_POST["gender"];
	$phone = $_POST["phone"];
	$birthday = $_POST["birthday"];
	$email = $_POST["email"];
	$password = $_POST["psw"];

	$sql = "insert into signup(id,firstname,lastname,gender,phone,birthday,email,psw)values('','$fname','$lname','$gender','$phone','$birthday','$email','$psw')";
	
	if(mysqli_query($conn,$sql)) {
		echo "<script>alert('Register successful!!')</script>";
		header("Location:..\html/Profilepage.html");
	}
	else {
		echo "<script>alert('Register Unsuccessful!!')</script>";
	}
	
	mysqli_close($conn);
?>