<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="product_item.css">
</head>
	<body>
		<li class="product_item">
			<div class="prod_container">
				<img class="product_img" src="<?= $row->image_path ?>" alt="Product_Image" style="width:100%">
				<div class="prod_overlay">
					<div class="prod_text">
						<p><?= $row->description ?></p>
					</div>
				</div>
			</div>
			<h2><?= $row->title ?></h2>
			<p class="price"><?= $row->price ?>€</p>
			<p><button>Add to Cart</button></p>
		</li>	
	</body>
</html>