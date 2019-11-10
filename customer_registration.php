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
						<li class="active"><a href="index.php">Home</a></li>
						<li><a href="shop.php">Shop</a></li>
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
					<li>Customer Registration</li>
				</ul>
			</div>
			<!-- sidebar start -->
			<div class="col-md-3">
				<?php include('admin_area/includes/sidebar.php'); ?>
			</div>
			<!-- sidebar end -->

			<!-- col-md-9 start-->
			<div class="col-md-9">
				<!-- box start -->
				<div class="box">
					<!-- box-header start -->
					<div class="box-header">
						<center>
							<h2>Customer Registration</h2>
						</center>

					</div>
					<!-- box-header end -->
					<form action="customer_registration.php" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<label>Customer Name</label>
							<input type="text" name="c_name" required="" class="form-control">
						</div>
						<div class="form-group">
							<label>Customer Email</label>
							<input type="text" name="c_email" required="" class="form-control">
						</div>
						<div class="form-group">
							<label>Customer Password</label>
							<input type="password" name="c_password" required="" class="form-control">
						</div>
						<div class="form-group">
							<label>Country</label>
							<input type="text" name="c_country" required="" class="form-control">
						</div>
						<div class="form-group">
							<label>City</label>
							<input type="text" name="c_city" required="" class="form-control">
						</div>
						<div class="form-group">
							<label>Contact Number</label>
							<input type="text" name="c_contact" required="" class="form-control">
						</div>
						<div class="form-group">
							<label>Address</label>
							<input type="text" name="c_address" required="" class="form-control">
						</div>
						<div class="form-group">
							<label>Image</label>
							<input type="file" name="c_image" class="form-control" required="">
						</div>
						<div class="text-center">
							<button type="submit" name="submit" class="btn btn-primary"><i class="fa fa-user-md"></i> Register
								
							</button>
						</div>
					</form>
				</div>
				<!-- box end -->
			</div>
			<!-- col-md-9 end -->

		</div>
	</div>



	<!--footer start -->
	<?php 
		include('admin_area/includes/footer.php');
	?>
	<!-- footer end -->

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</body>
</html>
