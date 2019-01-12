<?php
	// Connect to database
	$con = mysqli_connect("localhost","root","","gym_lab_db");
	session_start();
	
	// Get on sale items
	$query_sales = "SELECT * FROM `sales` ORDER BY `id`";
 	$rows_sales = mysqli_query($con, $query_sales);
 	$numofrows_sales = mysqli_num_rows($rows_sales);


 	// Get protein items
 	$query_proteins = "SELECT * FROM `proteins` ORDER BY `id`";
 	$rows_proteins = mysqli_query($con, $query_proteins);
 	$numofrows_proteins = mysqli_num_rows($rows_proteins);


 	// Get creatine items
 	$query_creatines = "SELECT * FROM `creatines` ORDER BY `id`";
 	$rows_creatines = mysqli_query($con, $query_creatines);
 	$numofrows_creatines = mysqli_num_rows($rows_creatines);


 	// Get vitamin items
 	$query_vitamins = "SELECT * FROM `vitamins` ORDER BY `id`";
 	$rows_vitamins = mysqli_query($con, $query_vitamins);
 	$numofrows_vitamins = mysqli_num_rows($rows_vitamins);


 	// Get steroid items
 	$query_steroids = "SELECT * FROM `steroids` ORDER BY `id`";
 	$rows_steroids = mysqli_query($con, $query_steroids);
 	$numofrows_steroids = mysqli_num_rows($rows_steroids);
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="main.css">
	<title>Gym Lab</title>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<body>

	<!----- Main menu ----->
	<div class="navbar">
	 	<a href="#home">Home</a>
	  	<div class="dropdown">
	   		<button class="dropbtn"><?php echo $_SESSION['email']; ?>
	     		<i class="fa fa-caret-down"></i>
	   		</button>
	    	<div class="dropdown-content">
		      	<a href="#" name="acc_status">My Accout</a>
		      	<a href="index.php?logout='1'" name="logout" ">Logout</a>
	    	</div>	
	  	</div>
	  	<div class="dropdown">
	    	<button class="dropbtn">Products 
	      	<i class="fa fa-caret-down"></i>
	    	</button>
	    	<div class="dropdown-content">
	      		<a href="#Sales">Sales</a>
	      		<a href="#Proteins">Proteins</a>
	      		<a href="#Creatines">Creatines</a>
	      		<a href="#Vitamins">Vitamins</a>
	      		<a href="#Steroids">Steroids</a>
	    	</div>
	  	</div>	
	  		<a href="#Contact">Contact</a>	
	  		<div class="shopping_basket_container">
		  		<div class="shopping_basket">
		  			<a href="#">Shopping Basket</a>
		  		</div>
		  		<div class="shopping_box">
		  			<input class="box" type="text" disabled="disabled" name="text_box" value="€">
		  		</div>
		  	</div>

		</div>
		<!--- End of Main menu --->


		
		<!---- Slideshow Start ---->
		<div class="slideshow-container">
			<div class="mySlides fade">
			  <img class="slide_img" src="img/slides/slide1_edit.png">			  
			</div>

			<div class="mySlides fade">
			  <img class="slide_img" src="img/slides/slide2_edit.png">
			</div>

			<div class="mySlides fade">
			  <img class="slide_img" src="img/slides/slide3_edit.png">
			</div>

		</div>
		<br>
		<!-- Dots -->
		<div style="text-align:center">
		  <span class="dot"></span> 
		  <span class="dot"></span> 
		  <span class="dot"></span> 
		</div>
		<!--- End of Slideshow --->






		<!------ GymLab description ------>
		<div class="home_container">
			<img class="logo_img" src="img/gl.png" alt="Gym_Lab_logo">
			<div class="home_content">
				<p class="home_desc">Gym Lab, commonly referred to as GL's, is a Greek ecommercial shop based in Central Macedonia, in Thessaloniki. Our site is designed for your convenience. We deliver our qualitatively products to your home. Shop online and get great discounts. You can find us here..
					<a href="https://www.google.com/maps/place/New+Life/@40.5034403,22.9231105,17z/data=!4m12!1m6!3m5!1s0x14a815c1df746f9d:0x746e10aa20db44ce!2sNew+Life!8m2!3d40.5034362!4d22.9253045!3m4!1s0x14a815c1df746f9d:0x746e10aa20db44ce!8m2!3d40.5034362!4d22.9253045" target="_blank"><img class="location_pin" src="img/location_logo.png" alt="Location_Link"></a>
				</p>
			</div>
		</div>
		<!--- End of GymLab description --->






		<!-- Products container - Sales  -->
		<section id="Sales">
			<div class="sales_container">
				<h1>Sales</h1>
				<div class="cards_container">
					<ul>
						<?php
							while ($row = mysqli_fetch_object($rows_sales)) {
								include 'product_item.php';
							}
						?>
					</ul>
				</div>
			</div>
		</section>
		<!-- End of products container  -->


		<!-- Proteins container -->
		<section id="Proteins">
			<div class="proteins_container">
				<h1>Proteins</h1>
				<div class="cards_container">
					<ul>
						<?php
							while ($row = mysqli_fetch_object($rows_proteins)) {
								include 'product_item.php';
							}
						?>
					</ul>
				</div>
			</div>
		</section>
		<!-- End of proteins container -->


		<!-- Creatines container -->
		<section id="Creatines">
			<div class="creatines_container">
				<h1>Creatines</h1>
				<div class="cards_container">
					<ul>
						<?php
							while ($row = mysqli_fetch_object($rows_creatines)) {
								include 'product_item.php';
							}
						?>
					</ul>
				</div>
			</div>
		</section>
		<!-- End of creatines container -->


		<!-- Vitamins container -->
		<section id="Vitamins">
			<div class="vitamins_container">
				<h1>Vitamins</h1>
				<div class="cards_container">
					<ul>
						<?php
							while ($row = mysqli_fetch_object($rows_vitamins)) {
								include 'product_item.php';
							}
						?>
					</ul>
				</div>
			</div>
		</section>
		<!-- End of vitamins container -->


		<!-- Steroids container -->
		<section id="Steroids">
			<div class="steroids_container">
				<h1>Steroids</h1>
				<div class="cards_container">
					<ul>
						<?php
							while ($row = mysqli_fetch_object($rows_steroids)) {
								include 'product_item.php';
							}
						?>
					</ul>
				</div>
			</div>
		</section>
		<!-- End of steroids container -->

		




		<!-- Contact and copy rights  -->
		<div id="Contact" class="contact_container">
			<p>© 2018 GymLab.com. All rights reserved. GymLab.com℠ is trademark of GreekSupplements.gr
				<br><br>Always consult with a qualified healthcare professional prior to beginning any diet or exercise program or taking any dietary supplement. The content on our website is for informational and educational purposes only and is not intended as medical advice or to replace a relationship with a qualified healthcare professional.
				<br><br>
				Contact Us Here! E-mail: <u>GymLab@info.gr</u></p>

		</div>
		<!-- End of contact and copy rights -->





















	<script>
	var slideIndex = 0;
	showSlides();

	function showSlides() {
	  var i;
	  var slides = document.getElementsByClassName("mySlides");
	  var dots = document.getElementsByClassName("dot");
	  for (i = 0; i < slides.length; i++) {
	    slides[i].style.display = "none";  
	  }
	  slideIndex++;
	  if (slideIndex > slides.length) {slideIndex = 1}    
	  for (i = 0; i < dots.length; i++) {
	    dots[i].className = dots[i].className.replace(" active", "");
	  }
	  slides[slideIndex-1].style.display = "block";  
	  dots[slideIndex-1].className += " active";
	  setTimeout(showSlides, 5000); // Change image every 2 seconds
	}



	</script>
	</body>
</html>