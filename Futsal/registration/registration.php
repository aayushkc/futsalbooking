<?php 
include('userregistration.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registration</title>
	<!--Bootstrap v4-->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

	<!--CSS-->
	<link rel="stylesheet" type="text/css" href="..\style\registration.css">

	<!--Font Awesome-->
	<script src="https://kit.fontawesome.com/c63ef4dfe1.js" crossorigin="anonymous"></script>
</head>
<body>
	<div class="register">
		
			<h1>Register</h1>
			<div class="content">
			<form class="form" action="registration.php" method="POST">
				<?php include('error.php')?>
				<div class="input-group">
					<div class="input-icon"><i class="fa fa-user"></i></div>
					<input type="text" name="username" class="form-control" placeholder="User Name" required id="username">
				</div>

				<div class="input-group">
					<div class="input-icon"><i class="fa fa-user"></i></div>
					<input type="text" name="lastname" class="form-control" placeholder="Last Name" required id="lastname">
				</div>

				<div class="input-group">
					<div class="input-icon"><i class="fa fa-envelope"></i></div>
					<input type="email" name="email" class="form-control" placeholder="abc@email.com" required id="email">
				</div>

				<div class="input-group">
					<div class="input-icon"><i class="fa fa-key"></i></div>
					<input type="password" name="password" class="form-control" placeholder="Password" required id="password">
				</div>
				
					<div class="log-btn">
						<button class="btn btn-primary" id="login" type="submit" value="submit">Sign Up</button>
					</div>

			</form>
		</div>
		
	</div>
</body>
</html>