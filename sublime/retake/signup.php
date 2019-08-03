<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset=utf-8>
		<meta name=viewport content="width=device-width, initial-scale=1">
		<title> Sign up page</title>
		<style type="text/css">
			*{font-family: century gothic;}
			#ull>li{
				height:60px;
				background-color:#33b5e5;
				box-shadow: 0 0 10px 0 rgba(0,0,0,0.4);
			}
		</style>
		<?php include 'meta.php'; ?>
	</head>
	<body>
		<div class="container-fluid mt-1 sticky-top"> <?php include 'navbar.php'; ?> </div>
		<div class="container-fluid mt-5 z-">
			<div class=" row d-flex justify-content-center ">
				<div class="col-md-6">
					<div class="card shadow-bg">
						<div class="card-header">
							<div class="d-flex justify-content-center">
								<h2>Sing up here</h2> 
							</div>
						</div>
						<div class="card-body mt-1">
							<?php 
								if (isset($_SESSION['user_exists'])){
							?>
								<div class="alert-danger"> Sorry, User already exists, please try another email.</div>
							<?php
								unset($_SESSION['user_exists']);	
								}
							?>
							<?php								
								if (isset($_SESSION['un_Succesful_sign_up'])){
							?>
								<div class="alert-danger"> Something went wrong!</div>
							<?php
								unset($_SESSION['un_Succesful_sign_up']);	
								}
							?>
							<form method="POST" action="signupactualizer.php">
								<div class="form-group">
									<label for="firstname">Firstname</label>
									<input type="text" class="form-control" name="firstname">
								</div>
								<div class="form-group">
									<label for="lastname">Lastname</label>
									<input type="text" class="form-control" name="lastname">
								</div>
								<div class="form-group">
									<label for="username">Username</label>
									<input type="text" class="form-control" name="username">
								</div>
								<div class="form-group">
									<label for="password">Password</label>
									<input type="current-password" class="form-control" name="password" >

								</div>
								<div class="form-group">
									<label for="email">Email</label>
									<input type="text" class="form-control" name="email">		
								</div>
								<div class="d-flex justify-content-center">
									<input type="submit" class="btn" name="submit">
								</div>
							</form>
						</div>
						<div class="card-footer mr-5"></div>						
					</div>
				</div>
			</div>
		</div>	
	</body>
</html>

