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
	<div class="container" id="slider">
		<div class="col-md-12">
			<div class="carousel slide " id="myCarousel" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="myCarousel" data-slide-to="1"></li>
					<li data-target="myCarousel" data-slide-to="2"></li>
					<li data-target="myCarousel" data-slide-to="3"></li>
				</ol>
				<!-- carousel start -->
				<div class="carousel-inner">
					<div class="item active">
						<img src="admin_area/slider_images/slider1.jpg">
					</div>
					<div class="item ">
						<img src="admin_area/slider_images/slider2.jpg">
					</div>
					<div class="item">
						<img src="admin_area/slider_images/slider3.jpg">
					</div>
					<div class="item">
						<img src="admin_area/slider_images/slider4.jpg">
					</div>
				</div>
				<!-- carousel end -->
				<a href="#myCarousel" class="left carousel-control" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a href="#myCarousel" class="right carousel-control" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
	</div>
	<!-- Advantage start -->
	<div id="advantage">
		<!-- container start -->
		<div class="container">
			<!-- same height start -->
			<div class="same-height">
				<!-- col sm start -->
				<div class="col-sm-4">
					<div class="box same-height">
						<div class="icon">
							<i class="fa fa-heart"></i>
						</div>
						<h3><a href="#">BEST PRICES</a></h3>
						<p>You can check on all others sites about the price and than compare with us.</p>
					</div>
				</div>
				<!-- col sm end -->
				<!-- col sm start -->
				<div class="col-sm-4">
					<div class="box same-height">
						<div class="icon">
							<i class="fa fa-heart"></i>
						</div>
						<h3><a href="#">100% SATISFACTION GUARANTEED FROM US</a></h3>
						<p>Free returns on everything for one month.</p>
					</div>
				</div>
				<!-- col sm end -->
				<!-- col sm start -->
				<div class="col-sm-4">
					<div class="box same-height">
						<div class="icon">
							<i class="fa fa-heart"></i>
						</div>
						<h3><a href="#">WE LOVE OUR CUSTOMERS</a></h3>
						<p>We are known to provide best possible service ever.</p>
					</div>
				</div>
				<!-- col sm end -->
			</div>
			<!-- same height end -->
		</div>
		<!-- container close -->
	</div>
	<!-- Advantage end -->

	<!-- hot start  -->
	<div id="hot">
		<div class="box">
			<div class="container">
				<div class="col-md-12">
					<h2>Latest this week</h2>
				</div>
			</div>
		</div>
	</div>
	<!-- hot end -->

	<div id="content" class="container">
		<div class="row">
			<div class="col-sm-4 col-sm-6 single">
				<div class="product"></div>
			</div>
		</div>
	</div>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</body>
</html>
