
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
   <!--Made with love by Mutiullah Samim -->
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="css/login2css.css">
</head>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Sign In</h3>
                <div class="contenedor">
                	<a href="https://www.facebook.com/">
                    	<div class="d-flex justify-content-end social_icon_facebook">
					    	<span>
								<i class="fab fa-facebook-square">
								</i>
							</span>
                    	</div>
					</a>


					<a href="https://accounts.google.com/AccountChooser/signinchooser?service=mail&continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&flowName=GlifWebSignIn&flowEntry=AccountChooser">    
                    	<div class="d-flex justify-content-end social_icon_gmail">
							<span>
								<i class="fab fa-google-plus-square">
								</i>
							</span>
                   		</div>
					</a>

					
					<a href="https://www.twitter.com">
                   	 	<div class="d-flex justify-content-end social_icon_twitter">
							<span>
								<i class="fab fa-twitter-square">
								</i>
							</span>
                    	</div>
					</a>
                </div>
				
				
			</div>
			<div class="card-body">
				<form action="controladorlogin2.php" method="POST">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input required="true" type="text" name="username" class="form-control" placeholder="username">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input required="true" type="password" name="pass1" class="form-control" placeholder="password">
					</div>
					<div class="row align-items-center remember">
						<input type="checkbox">Remember Me
					</div>

					<div class="container_btn">
						<div class="form-group">
							<input type="submit" value="Login" class="btn float-center login_btn">
						</div>
					
						<div class="register">
							<a href="registro2.php">
								<input href="registro2.php"  value="Register" class="btn float-right reg_btn">
							</a>
						</div>
					</div>
				</form>
				
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					Don't have an account?<a href="registro2.php">Sign Up</a>
				</div>
				<div class="d-flex justify-content-center">
					<a href="#">Forgot your password?</a>
				</div>
			</div>
		</div>
	</div>
	
</div>


</body>
</html>