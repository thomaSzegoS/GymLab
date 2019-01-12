<?php
	$con = mysqli_connect("localhost","root","","gym_lab_db");

 	$query1 = "SELECT * FROM `users` ORDER BY `id`";
 	$rows1 = mysqli_query($con, $query1);
 	$numofrows1 = mysqli_num_rows($rows1);

 	$query2 = "SELECT * FROM `sales` ORDER BY `id`";
 	$rows2 = mysqli_query($con, $query2);
 	$numofrows2 = mysqli_num_rows($rows2);
?>


<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="admin.css">
		<title>Administrator</title>
	</head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<body>
		<div class="main_container">
			<!--  Users Container  -->
			<div class="users">
				<h1>Users</h1>
				<p><?=$numofrows1?> users found</p>
				<table class="users_table">
					<tr>
						<th>ID</th>
						<th>Email</th>
						<th>Password</th>
					</tr>
				 	<?php
				 		while ($row = mysqli_fetch_object($rows1)){
				 			include 'users_row.php';
				 		}
				 	?>
				</table>
			</div>

			<!--  Products Container  -->
			<form class="products" method="post" action="update_db.php">
				<h1>Sales</h1>
				<p><?=$numofrows2?> products found</p>
				<table class="products_table">
					<tr>
						<th>ID</th>
						<th>Title</th>
						<th>Description</th>
						<th>Price</th>
						<th>Image Path</th>
					</tr>
			 		<?php
			 			while ($row = mysqli_fetch_object($rows2)){
			 				include 'products_row.php';
			 			}
			 		?>
				</table>	
				<button type="submit" class="update_db_btn" name="update_db">Update Database</button>
			</form>
		</div>
	</body>
</html>