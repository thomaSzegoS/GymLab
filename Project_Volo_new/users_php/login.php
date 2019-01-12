<?php
	// Connect to database
	$con = mysqli_connect("localhost","root","","gym_lab_db");

	if (isset($_POST['login_btn'])) {
		session_start();

		$email = mysqli_real_escape_string($con, $_POST['email']);
		$password = mysqli_real_escape_string($con, $_POST['password']);
		
		$password = md5($password); // encrypt password before comparing with that from database


		// Administrator login
		if ($email == "admin") {
			$query1 = "SELECT id FROM users WHERE email='admin' and password='$password'";
			$result1 = mysqli_query($con, $query1);
			$count1 = mysqli_num_rows($result1);

			if ($count1 == 1) {
				// log admin in
				$_SESSION['email'] = $email;
				$_SESSION['message'] = "You are now logged in!";
				header("location: ../admin_php/view_registrations.php");
			}

		}
		// User login
		else if ($email != "admin") {
			$query2 = "SELECT id FROM users WHERE email='$email' and password='$password'";
			$result2 = mysqli_query($con, $query2);
			$count2 = mysqli_num_rows($result2);

			if ($count2 == 1) {
				// log user in
				$_SESSION['email'] = $email;
				$_SESSION['message'] = "You are now logged in!";
				header("location: ../home.php");
			}

		}
		else {
			$_SESSION['message'] = "Your Email or Password is invalid";
		}
	}



	// To prevent mysql injection
	//	$email = stripcslashes($email);
	//	$password = stripcslashes($password);

	// Logout
	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['email']);
		unset($_SESSION['message']);
		header('location: ../index.html');
	}
?>