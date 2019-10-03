<?php $title="Login Page" ?>
<?php include('assets/header.php'); ?>
<div class="container">
	<form action="login.php" method="post">
		<div class="row panel">
		<div class="col"></div>
		<div class="col-6 panel-body">
	  	<div class="form-group">
		    <label for="exampleInputEmail1">Email address</label>
		    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="username">
	  	</div>
	  	<div class="form-group">
		    <label for="exampleInputPassword1">Password</label>
		    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
	  	</div>
	  	<button type="submit" class="btn btn-primary" name="submit">Submit</button>
	  	</div>
	  	<div class="col"></div>
	  </div>
	</form>
	
</div>
<?php 
	if(isset($_POST['submit'])){
		$username=$_POST['username'];
		$password=$_POST['password'];

		$query='SELECT * FROM `users` WHERE `useremail`="$username" and `password`="$password"';
		$run = mysqli_query($con, $query);
		$row = mysqli_num_rows($run);

		if(row==1){

		}
		else{
			?><script type="text/javascript">alert("Username or Password not found");</script><?php 
		}
	}
?>
<?php include('assets/footer.php'); ?>