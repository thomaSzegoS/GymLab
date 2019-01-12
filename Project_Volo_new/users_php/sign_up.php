<?php
	// Connect to database
	$con = mysqli_connect("localhost","root","","gym_lab_db");

	if (isset($_POST['signup_btn'])) {
		session_start();
		
		$email = mysqli_real_escape_string($con, $_POST['email']);
		$password = mysqli_real_escape_string($con, $_POST['password']);
		$password_repeat = mysqli_real_escape_string($con, $_POST['password_repeat']);

		if ($password == $password_repeat) {
			// Create user
			$password = md5($password);  // md5 encryption before storing
			$sql = "INSERT INTO users (email, password) VALUES ('$email', '$password')";
			mysqli_query($con, $sql);
			$_SESSION['email'] = $email;
			$_SESSION['message'] = "You registered successfully!";
			header("location: home.php");
		}
		else {
			$_SESSION['message'] = "The two passwords do not match";

		}
	}
?>