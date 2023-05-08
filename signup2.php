<?php
	$firstName = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	// Database connection
	$conn = new mysqli('localhost','root','','game');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	}
	 else {
		$stmt = $conn->prepare("insert into signup2(username, email, passwd) values(?, ?, ?)");
		$stmt->bind_param("ssi", $firstName, $email, $password);
		$execval = $stmt->execute();
		echo $execval;
      header("Location:login.html");
		$stmt->close();
		$conn->close();
	}
?>