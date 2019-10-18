<?php 
	session_start();
	if(isset($_SESSION['uid'])){
		header('location:index.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<style type="text/css">
		*, html {
		  box-sizing: border-box;
		  padding:0;
		  margin:0;
		}

		*, *:before, *:after {
		  box-sizing: inherit;
		}

		body {
		  display: grid;
		  justify-items: center;
		}

		form {
		  display: grid;
		  justify-items: center;
		}

		div {
		  width:100%;
		  justify-items: center;
		  padding:1em;
		}

		div.signup {
		  min-width:200px;
		  max-width:400px;
		  padding:.8em 2em;
		}

		.login-container {
		  min-width:200px;
		  max-width:400px;
		  background:#fff;
		  border:1px solid #ccc;
		  margin-top:30px;
		  border-radius:8px;
		}

		label, input {
		  justify-items: center;
		  display:block;
		  padding: 1.2em;
		}

		input {
		  width: 100%;
		  border:1px solid #ccc;
		  border-radius:4px;
		  line-height: 1;
		}

		button[type="submit"] {
		  width:100%;
		  padding:10px;
		  background:#00ccff;
		  color:#fff;
		  font:bold 14px Arial, sans-serif;
		  border:none;
		  border-radius:4px;
		  line-height: 1;
		  cursor:pointer;
		  border:1px solid #fff;
		  box-shadow: inset 0 0 2px 0 #333;
		}

		button[type="submit"]:hover {
		  background:#0097bd;
		  transition: background ease-in .1s;
		}

		/***TYPOGRAPHY***/
		h1 {
		  font: bold 32px Arial, sans-serif;
		  text-align:center;
		  text-shadow: 1px 2px 0 rgba(50, 50, 50, 0.8);
		  background-color:#fff;
		  color:transparent;
		  background-clip:text;
		}

		p, label {
		  font: 14px/14px "Arial", sans-serif;
		  padding: .5em 0;
		  color: #666;
		}

		p, a, a:link, a:visited, a:hover, a:active {
		  font: 12px/14px "Arial", sans-serif;
		  color: #666;
		}

		a:hover {
		  font: 12px/14px "Arial", sans-serif;
		  color: #000;
		}

		@media (max-width: 799px) {
		  .login-container {
		    min-width:200px;
		    max-width:400px;
		    background:#fff;
		    border:none;
		    margin-top:0;
		  }
		}
	</style>
</head>
<body>
	<div class="login-container">
	  	<form action="/" method="get">
		  	<div>
			    <h1>Member Login</h1>
		  	</div>
		    <div>
		        <label for="name">Username</label>
		        <input type="text" id="name" name="username" required>
		    </div>
		    <div>
		        <label for="password">Password</label>
		        <input type="password" id="password" name="password" required>
		        <p>Forgot <a href="#">Your Password?</a></p>
		    </div>
		    <div>
		      <button type="submit">Submit</button>
		   	</div>
	  	</form>
	</div><!--Login-container-->
	<div class="signup">
		<p>Don't have an account? <a href="signup.php">Sign Up</a> &mdash; we won't bite :)</p>
	</div>
  
</body>
</html>
<?php 
	if(isset($_POST['submit'])){
		$username=$_POST['username'];
		$password=$_POST['password'];

		$query='SELECT * FROM `users` WHERE `useremail`="$username" and `password`="$password"';
		$run = mysqli_query($con, $query);
		$row = mysqli_num_rows($run);

		if($row < 1){
			?>
			<script type="text/javascript">alert("Username of Password not found");</script>
			<?php
		}	
		else{
			$data = mysqli_fetch_assoc($run);
			$userid = $data['userid'];
			$_SESSION['userid']=$userid;
			header('location:index.php');
		}	
	}
?>
