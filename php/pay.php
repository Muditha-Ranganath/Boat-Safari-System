<?php
	include_once 'payconfig.php';
?>

<?php
	$name = $_POST["firstname"];
	$email = $_POST["email"];
	$address = $_POST["address"];
	$city = $_POST["city"];
	$state = $_POST["state"];
	$zip = $_POST["zip"];
	$Cname = $_POST["cardname"];
	$Cnumber = $_POST["cardnumber"];
	$Emonth = $_POST["expmonth"];
	$Eyear = $_POST["expyear"];
	$cvv = $_POST["cvv"];

	$sql = "insert into paysubmit(id,firstname,email,address,city,state,zip,cardname,cardnumber,expmonth,expyear,cvv)values('','$name','$email','$address','$city','$state','$zip','$Cname','$Cnumber','$Emonth','$Eyear','$cvv')";
	
	if(mysqli_query($conn,$sql)) {
		echo "<script>alert('Patment successful!!')</script>";
		header("Location:..\html/Safaripage.html");
	}
	else {
		echo "<script>alert('Payment Unsuccessful!!')</script>";
	}
	
	mysqli_close($conn);
?>