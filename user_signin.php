

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<script src="jquery.min.js"></script>
	<script src="bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css\Sign_in.css">
</head>
<body>
	
	<div class="form-header">
				
	</div>
		<div class="signin-form">

			<form method="post" action="signin_form.php" enctype="multipart/form-data">
				 <?php include("signin_form.php"); ?>
				<h2>Log in to Forum</h2>
				
					<div class="form-group">
						<label>Email</label>
						<input type="email" class="form-control" name="email"  placeholder="someone@site.com" autocomplete="off" required>
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" class="form-control" name="password" placeholder="password" autocomplete="off" required>
					</div>
					<div class="small">Forgot Password? <a href="forgot_pass.php">Click here</a></div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary btn-lg active" name="signin">Sign in</button>
					</div>
			</form>
			<div class="text-center small" style="color: #67428B">Don't have an account? <a href="signup.php">Create account</a></div>
		</div>
	
</body>
</html>