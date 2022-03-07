<?php
	session_start();
	if (isset($_SESSION['userlogin'])) {
		header("location: ../Futsal/html/index.php");
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Log In</title>
	<!--Bootstrap v4-->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

	<!--CSS-->
	<link rel="stylesheet" type="text/css" href="..\Futsal\style\userlogin.css">

	<!--Font Awesome-->
	<script src="https://kit.fontawesome.com/c63ef4dfe1.js" crossorigin="anonymous"></script>

</head>
<body>
	<div class="login">
		<div class="card">
			<div class="logo">
				<img src="img/logo.png">
			</div>
			<form class="form" method="Post">
				<div class="input-group">
					<div class="input-icon"><i class="fa fa-user"></i></div>
					<input type="text" name="username" class="form-control" placeholder="abc@email.com" required id="username">
				</div>
				<div class="input-group">
					<div class="input-icon"><i class="fa fa-key"></i></div>
					<input type="password" name="password" class="form-control" placeholder="Password" required id="password">
				</div>
				<div class="input-group mb-3">
					  
					      <input type="checkbox" id="rememberme">
					  
					 	<label for="rememberme">Remember Me</label>
					</div>
					<div class="log-btn">
						<button class="btn btn-primary" id="login" >Log In</button>
					</div>
					<div class="signup">
						<p>Don't Have an Account? <a href="registration/registration.php">Sign Up</a></p>
					</div>

			</form>
		</div>
		
	</div>

	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

	<script type="text/javascript">
		$(function(){
			$('#login').click(function(e){
				
				var valid = this.form.checkValidity();

				if(valid){
					var username = $('#username').val();
					var password = $('#password').val();
				}

				e.preventDefault();

				$.ajax( {

					type: 'Post',
					url: 'jslogin.php',
					data: {username: username, password: password},
					success: function(data){
						alert(data);
						if ($.trim(data) === "User loged in") {
							setTimeout('window.location.href= "../Futsal/html/index.php"', 1000);
						}
						if ($.trim(data) === "Admin loged in") {
							setTimeout('window.location.href= "../Futsal/html/admin.php"', 1000);
						}
					},
					error: function(data){
						alert("Fail");
					}

				});

			});

		});
	</script>
</body>
</html>