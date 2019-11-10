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
						<li><a href="shop.php">Shop</a></li>
						<li><a href="checkout.php">My account</a></li>
						<li class="active"><a href="cart.php">Shopping Cart</a></li>
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
		<div class="container">
			<!-- col md 12 start -->
			<div class="col-md-12">
				<ul class="breadcrumb">
					<li><a href="home.php">Home</a></li>
					<li>Cart</li>
				</ul>
			</div>
			<!-- col md 12 end -->
			<!-- col-md-9 start -->

			<div class="col-md-9" id="cart">
				<div class="box">
					<form action="cart.php" method="post" enctype="multipart-form-data">
						<h1>Shopping Cart</h1>
						<p class="text-muted">Currently You have 3 item(s) in your cart.</p>
						<!-- table-responsive start -->
						<div class="table-responsive">
							<table class="table">
								<thead>
									<tr>
										<th colspan="2">Product</th>
										<th>Quantity</th>
										<th>Unit Price</th>
										<th>Size</th>
										<th colspan="1">Delete</th>
										<th colspan="1">Sub Total</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											<img src="admin_area/product_images/shirt1.jpg">
										</td>
										<td>White Cool Shitd</td>
										<td>2</td>
										<td>INR 199</td>
										<td>Large</td>
										<td><input type="checkbox" name="remove[]"></td>
										<td>INR 398</td>
									</tr>
									<tr>
										<td>
											<img src="admin_area/product_images/watch1.jpg">
										</td>
										<td>Cool Wrist Watch</td>
										<td>3</td>
										<td>INR 50</td>
										<td>Small</td>
										<td><input type="checkbox" name="remove[]"></td>
										<td>INR 150</td>
									</tr>
								</tbody>
								<tfoot>
									<tr>
										<th colspan="5">Total</th>
										<th colspan="2">INR 398</th>
									</tr>
								</tfoot>
							</table>
						</div>
						<!-- table-responsive end -->
						<div class="box-footer">
							<!-- pull-left start -->
							<div class="pull-left">
								<a href="index.php" class="btn btn-default">
									<i class="fa fa-chevron-left"></i>Continue Shopping
								</a>
							</div>
							<!-- pull-left end -->
							<!-- pull-right start -->
							<div class="pull-right">
								<button class="btn btn-default" type="submit" name="update" value="Update Cart">
									<i class="fa fa-refresh"></i>Update Cart
								</button>
								<a href="checkout.php" class="btn btn-primary">
									Proceed to Checkout <i class="fa fa-chevron-right"></i>
								</a>
							</div>

						</div>


					</form>
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
			<!-- col-md-9 end -->

			<!-- col-md-3 start -->
			<div class="col-md-3">
				<div class="box" id="order-summary">
					<div class="box-header">
						<h3>Order Summary</h3>
					</div>
					<p class="text-muted">
						Shipping and Additional costs are calculated based on the values you have entered.
					</p>
					<div class="table-responsive">
						<table class="table">
							<tbody>
								<tr>
									<td>Order Subtotal</td>
									<th>INR 398</th>
								</tr>
								
								<tr>
									<td>Shipping and Handling</td>
									<td>INR 0</td>
								</tr>

								<tr>
									<td>Tax</td>
									<td>INR 0</td>
								</tr>

								<tr class="total">
									<td>Total</td>
									<th>INR 399</th>
								</tr>

							</tbody>
						</table>
					</div>
				</div>
			</div>
			<!-- col-md-3 end -->

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
