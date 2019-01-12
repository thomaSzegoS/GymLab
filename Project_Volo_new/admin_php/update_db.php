<?php
	// Connect to database
	$con = mysqli_connect("localhost","root","","gym_lab_db");

	if (isset($_POST['update_db'])) {
		session_start();

		$id = mysqli_real_escape_string($con, $_POST['id']);
		$title = mysqli_real_escape_string($con, $_POST['title']);
		$description = mysqli_real_escape_string($con, $_POST['description']);
		$price = mysqli_real_escape_string($con, $_POST['price']);
		$image_path = mysqli_real_escape_string($con, $_POST['image_path']);


		// Upadate db values
		for ($i=0; $i<sizeof("SELECT COUNT(*) FROM products"); $i++) { 
			

			$sql = "UPDATE products SET title='$title', description='$description', price='$price', image_path='$image_path' WHERE id=1";
			mysqli_query($con, $sql);
		}
		$_SESSION['message'] = "Database updated successfully.";
		header("location: view_registrations.php");
	}
	
	$con->close();
?>