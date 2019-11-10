<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="styles/style.css">
	<title>E Commerce Store</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


</head>
<body>
	<!--  Top Bar Start-->
	<div id="top">
		<!-- Container Start  -->
		<div class="container">
			<div class="col-md-6 offer">
				<a href="#" class="btn btn-success btn-sm">Welcome Guest</a>
				<a href="#">Shopping Cart Total Price: INR 100, Total Items 2</a>
			</div>
			<div class="col-md-6">
				<ul class="menu">
					<li><a href="customer_registration.php">Registration</a></li>
					<li><a href="checkout.php">My Account</a></li>
					<li><a href="cart.php">Go to Cart</a></li>
					<li><a href="login.php">Login</a></li>


 				</ul>
			</div>
		</div>	
		<!-- Container End -->
	</div>
	<!-- top ended -->

	<!-- Navbar started -->
	<div class="navbar navbar-default" id="navbar">
		<div class="container">
			<div class="navbar-header">
				<a href="index.php" class="navbar-brand home">
					<img src="images/logo.jpg" height="60" alt="ecommerce">
				</a>
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
					<span class="sr-only">Toggle Navigation</span>
					<i class="fa fa-align-justify"></i>
					
				</button>
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">
					<span class="sr-only"></span>					
					<i class="fa fa-search"></i>
				</button>
			</div>
			<!-- navbar collapse start -->
			<div class="navbar-collapse collapse" id="navigation">
				
				<!-- padding nav start -->
				<div class="padding-nav">
					<ul class="nav navbar-nav navbar-left">
						<li><a href="index.php">Home</a></li>
						<li class="active"><a href="shop.php">Shop</a></li>
						<li><a href="checkout.php">My account</a></li>
						<li><a href="cart.php">Shopping Cart</a></li>
						<li><a href="about.php">About Us</a></li>
						<li><a href="services.php">Services</a></li>
						<li><a href="contact.php">Contact Us</a></li>
					</ul>
				</div>
				<!-- padding nav stop -->
				<a href="cart.php" class="btn btn-primary navbar-btn right">
					<i class="fa fa-shopping-cart"></i>
					<span>4 items In Cart</span>
					
				</a>
				<div class="navbar-collapse collapse right">
					<button class="btn navbar-btn btn-primary" type="button" data-toggle="collapse" data-target="#search">
						<span class="sr-only">Toggle Search</span>
						<i class="fa fa-search"></i>
					</button>
				</div>
				<!-- navbar collapse end -->
				<div class="collapse clearflix" id="search">
					<form class="navbar-form" method="get action='result.php'">
						<div class="input-group">
							<input type="text" name="user_query" placeholder="Search" class="form-control" required="requried">
							<span class="input-group-btn">
								<button type="submit" value="Search" name="search" class="btn btn-primary">
								<i class="fa fa-search"></i>
								
								</button>
							</span>
						</div>
					</form>
					
				</div>
			</div>
		</div>
	</div>
	<!-- Navbar ended -->

	<!-- container start -->
	<div id="content">
		<!-- col md 12 start -->
		<div class="container">
			<div class="col-md-12">
				<ul class="breadcrumb">
					<li><a href="home.php">Home</a></li>
					<li>Shop</li>
				</ul>
			</div>
			<!-- sidebar start -->
			<div class="col-md-3">
				<?php include('admin_area/includes/sidebar.php'); ?>
			</div>
			<!-- sidebar end -->

			<div class="col-md-9">
				<!-- shop heading start -->

				<div class="box">
					<h1>Shop</h1>
					<p>This theme is created by Yash Agarwal, who is the student of GLA University.</p>
				</div>				
			
				<!-- shop heading end -->
				<div class="row">
					<!-- product show start -->
					<div class="col-md-4 col-sm-6 center responsive">
						<div class="product">
							<a href="details.php"><img src="admin_area/product_images/shirt1.jpg"></a>
							<div class="text">
								<h3>
									<a href="details.php">Cool white shirt</a>
								</h3>
								<p class="price">INR 200</p>
								<p class="buttons">
									<a href="details.php" class="btn btn-default">View Details</a>
									<a href="details.php" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to Cart</a>
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 center responsive">
						<div class="product">
							<a href="details.php"><img src="admin_area/product_images/shirt1.jpg"></a>
							<div class="text">
								<h3>
									<a href="details.php">Cool white shirt</a>
								</h3>
								<p class="price">INR 200</p>
								<p class="buttons">
									<a href="details.php" class="btn btn-default">View Details</a>
									<a href="details.php" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to Cart</a>
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 center responsive">
						<div class="product">
							<a href="details.php"><img src="admin_area/product_images/shirt1.jpg"></a>
							<div class="text">
								<h3>
									<a href="details.php">Cool white shirt</a>
								</h3>
								<p class="price">INR 200</p>
								<p class="buttons">
									<a href="details.php" class="btn btn-default">View Details</a>
									<a href="details.php" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to Cart</a>
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 center responsive">
						<div class="product">
							<a href="details.php"><img src="admin_area/product_images/shirt1.jpg"></a>
							<div class="text">
								<h3>
									<a href="details.php">Cool white shirt</a>
								</h3>
								<p class="price">INR 200</p>
								<p class="buttons">
									<a href="details.php" class="btn btn-default">View Details</a>
									<a href="details.php" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to Cart</a>
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 center responsive">
						<div class="product">
							<a href="details.php"><img src="admin_area/product_images/shirt1.jpg"></a>
							<div class="text">
								<h3>
									<a href="details.php">Cool white shirt</a>
								</h3>
								<p class="price">INR 200</p>
								<p class="buttons">
									<a href="details.php" class="btn btn-default">View Details</a>
									<a href="details.php" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to Cart</a>
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 center responsive">
						<div class="product">
							<a href="details.php"><img src="admin_area/product_images/shirt1.jpg"></a>
							<div class="text">
								<h3>
									<a href="details.php">Cool white shirt</a>
								</h3>
								<p class="price">INR 200</p>
								<p class="buttons">
									<a href="details.php" class="btn btn-default">View Details</a>
									<a href="details.php" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to Cart</a>
								</p>
							</div>
						</div>
					</div>
					<!-- product show end -->

				</div>
				<center>
				<ul class="pagination">
					<li><a href="shop.php">First Page</a></li>
					<li><a href="shop.php">2</a></li>
					<li><a href="shop.php">3</a></li>
					<li><a href="shop.php">4</a></li>
					<li><a href="shop.php">5</a></li>
					<li><a href="shop.php">6</a></li>
					<li><a href="shop.php">Last Page</a></li>
				</ul>
			</center> 
			</div>	
			
		</div>
		<!-- col md 12 end -->
	</div>
	<!-- container end -->



	<!--footer start -->
	<?php 
		include('admin_area/includes/footer.php');
	?>
	<!-- footer end -->

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</body>
</html>
