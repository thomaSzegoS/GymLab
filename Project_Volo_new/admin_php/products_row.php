<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="admin.css">
</head>
	<body>
		<form action="update_db.php">
			<tr>
				<td> 
					<input type="text" name="id" value="<?= $row->id ?>" disabled>
				</td>
				<td> 
					<input type="text" name="title" value="<?= $row->title ?>">
				</td>
				<td> 
					<input type="text" name="description" value="<?= $row->description ?>">
				</td>
				<td>
					<input type="text" name="price" value="<?= $row->price ?>">
				</td>
				<td>
					<input type="text" name="image_path" value="<?= $row->image_path ?>">
				</td>
			</tr>
		</form>
	</body>
</html>