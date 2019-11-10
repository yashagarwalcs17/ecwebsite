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
				<!-- row start -->
				<div class="row" id="productmain">
					<!-- Specific Product Image Slider Start -->
					<div class="col-sm-6">
						<div id="mainimage">
							<div id="mycarousel" class="carousel slide" data-ride="carousel">
								<ol class="carousel-indicators">
									<li data-target="#mycarousel" data-slide-to="0" class="active"></li>
									<li data-target="#mycarousel" data-slide-to="1" ></li>
									<li data-target="#mycarousel" data-slide-to="2" ></li>
								</ol>
								<!-- carousel inner start -->
								<div class="carousel-inner">
									<div class="item active" >
										<center>
											<img src="admin_area/product_images/shirt1.jpg" class="img-responsive">
										</center>
									</div>
									<div class="item">
										<img src="admin_area/product_images/shirt2.jpg" class="img-responsive">
									</div>
									<div class="item" >
										<center>
											<img src="admin_area/product_images/shirt3.jpg" class="img-responsive">
										</center>
									</div>
								</div>
								<!-- carousel inner end -->
								<a href="#mycarousel" class="left carousel-control" data-slide="prev">
									<span class="glyphicon glyphicon-chevron-left"></span>
									<span class="sr-only">Previous</span>
								</a>

								<a href="#mycarousel" class="right carousel-control" data-slide="next">
									<span class="glyphicon glyphicon-chevron-right"></span>
									<span class="sr-only">Next</span>
								</a>
							</div>
						</div>
					</div>	
					<!-- Specific Product Image Slider End -->
					<div class="col-sm-6">
						<!-- box start -->
						<div class="box">
							<h1 class="text-center">Cool white shirt </h1>
							<form action="details.php" method="post" class="form-horizontal">
								<!-- Product buying details Start -->
								<div class="form-group">
									<label class="com-md-5 control-label">Product Quantity</label>
									<!-- product quantity start -->
									<div class="col-md-7">
										<select name="product_qty" class="form-control">
											<option>1</option>											
											<option>2</option>											
											<option>3</option>											
											<option>4</option>											
											<option>5</option>											
										</select>
									</div>
									<!-- product quantity end -->

								</div>	
								<div class="form-group">
									<label class="com-md-5 control-label">Product Size</label>
									<!-- product size start -->
									<div class="col-md-7">
										<select name="product_size" class="form-control">
											<option>S</option>											
											<option>M</option>											
											<option>L</option>											
											<option>XL</option>											
											<option>XXL</option>											
										</select>
									</div>
									<!-- product size end -->

								</div>	
								<!-- Product buying details End -->
								<p class="price">INR 200</p>
								<p class="text-center buttons">
									<button class="btn btn-primary" type="submit">
										<i class="fa fa-shopping-cart"></i>Add to cart
									</button>
								</p>
							</form>
						</div>
						<!-- box end  -->
						<div class="col-xs-4">
							<a href="#" class="thumb">
								<img src="admin_area/product_images/shirt1.jpg" class="img-responsive">
							</a>
						</div>
						<div class="col-xs-4">
							<a href="#" class="thumb">
								<img src="admin_area/product_images/shirt2.jpg" class="img-responsive">
							</a>
						</div>
						<div class="col-xs-4">
							<a href="#" class="thumb">
								<img src="admin_area/product_images/shirt3.jpg" class="img-responsive">
							</a>
						</div>
					</div>
				</div>
				<!-- row end -->
				<div class="box" id="details">
					<h4>Product Details</h4>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
					<h4 >Size</h4>
					<ul>
						<li>Small</li>
						<li>Medium</li>
						<li>Large</li>
						<li>Extra Large</li>
						<li>Small</li>
						<li>Extra Extra Large</li>

					</ul>
				</div>
				<!-- row same-height-row start -->
				<div id="row same-height-row">
					<!-- col-md-3 col-sm-6 start -->
					<div class="col-md-3 col-sm-6">
						<!-- box same-height headline start -->
						<div class="box same-height headline">
							<h3 class="text-center">You Also Like These Products</h3>
						</div> 
						<!-- box same-height headline end -->
					</div>
					<!-- col-md-3 col-sm-6 end  -->
					<!-- center-responsive col-md-3 start -->
					<div class="center-responsive col-md-3">
						<div class="product same-height">
							<a href="">
								<img src="admin_area/product_images/shirt1.jpg" class="img-responsive">
							</a>

							<div class="text">
								<h3><a href="details.php">Cool white shirt</a></h3>
								<p class="price">INR 199</p>
							</div>
						</div>
					</div>
					<!-- center-responsive col-md-3 end -->
					<!-- center-responsive col-md-3 start -->
					<div class="center-responsive col-md-3">
						<div class="product same-height">
							<a href="">
								<img src="admin_area/product_images/shirt1.jpg" class="img-responsive">
							</a>

							<div class="text">
								<h3><a href="details.php">Cool white shirt</a></h3>
								<p class="price">INR 199</p>
							</div>
						</div>
					</div>
					<!-- center-responsive col-md-3 end -->
					<!-- center-responsive col-md-3 start -->
					<div class="center-responsive col-md-3">
						<div class="product same-height">
							<a href="">
								<img src="admin_area/product_images/shirt1.jpg" class="img-responsive">
							</a>

							<div class="text">
								<h3><a href="details.php">Cool white shirt</a></h3>
								<p class="price">INR 199</p>
							</div>
						</div>
					</div>
					<!-- center-responsive col-md-3 end -->
				</div>
				<!-- row same-height-row end -->
			</div>

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
