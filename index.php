<?php 
	include('functions/functions.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>My Online Shop</title>
	<link rel="stylesheet" type="text/css" href="styles/style.css">
</head>
<body>
	<!-- main_wrapper start -->
	<div class="main_wrapper">
		<!-- header start -->
		<div class="header_wrapper">
			<img id="logo" src="images/logo.gif" >
			<img id="banner" src="images/ban.gif">
		</div>
		<!-- header ends -->

		<!-- menubar starts -->
		<div class="menubar">
			<ul id="menu">
				<li><a href="#">Home</a></li>
				<li><a href="#">All Products</a></li>
				<li><a href="#">My account</a></li>
				<li><a href="#">Sign Up</a></li>
				<li><a href="#">Shopping Cart</a></li>
				<li><a href="#">Contact Us</a></li>
			</ul>

			<div id="form">
				<form method="get" action="results.php" enctype="multipart/form-data">
					<input type="text" name="user_query" placeholder="Search a Product//" />
					<input type="submit" name="Search" value="Search" />
				</form>
			</div>
		</div>
		<!-- menubar ends -->

		<!-- content wrapper starts -->
		<div class="content_wrapper">
			<div id="sidebar">
				<div id="sidebar_title">Categories</div>
				<ul id="cats">
					<?php 
						getCats();
					?>
				</ul>

				<div id="sidebar_title">Brands</div>
				<ul id="cats">
					<?php 
						getBrands();
					?>
				</ul>

			</div>
			<div id="content_area">
				<div id="shopping_cart">
					<span style="float: right; font-size: 18px; padding: 5px; line-height: 40px;">
						Welcome Guest! <b style="color: yellow">Shopping Cart-</b>
						Total Items: Total Price:
						<a href="cart.php" style="color: yellow;">Go to cart</a>
					</span>
				</div>
				<div id="products_box">
					<?php getPro(); ?>
				</div>
			</div>
		</div>
		<!-- content wrapper ends -->

		<!-- footer starts -->
		<div id="footer">
			<h2 style="text-align: center; padding-top: 30px ">&copy; 2019 by Er. Yash</h2>

		</div>
		<!-- footer ends -->

	</div>
	<!-- main_wrapper start -->

</body>
</html>