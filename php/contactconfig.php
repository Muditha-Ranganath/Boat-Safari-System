<?php  
       $servername = "localhost";  
       $username = "root";  
       $password = "";  
	   $dbName = "contact";
		$conn = new mysqli($servername, $username, $password,$dbName);
		// Check connection
	if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
	}
	echo "Connected successfully";
?>   