<!DOCTYPE html>
<html>
	<meta charset=utf-8>
	<meta name=viewport content="width=device-width, initial-scale=1">
<head>
	<title>LOGIN PAGE</title>
	<style type="text/css">
		*{font-family: century gothic;}
		 #ull>li{
			height:60px;
			background-color:#33b5e5;
			box-shadow: 0 0 10px 0 rgba(0,0,0,0.4);
		}
	</style>
	<?php include "meta.php"; ?>
</head>
<body>
	<div class="container-fluid mt-1 sticky-top"> <?php include "navbar.php"; ?></div>
	<div class="container-fluid mt-5 z-">
		<div class=" row d-flex justify-content-center ">
			<div class="col-md-5">
				<div class="card shadow-bg">
					<div class="card-header">
						<div class="d-flex justify-content-center">
							<h2>Login here</h2>
						<div width="120" height="120"></div>
							<img src="./backimage/num1.png" alt="" width="120" height="120"
							 style="border-radius: 50%;"class=" d-block mx-auto"> 
						</div>
					</div>
					<div class="card-body mt-1">
						<form method="POST" action="loginactualizer.php">
							<div class="form-group">
								<label for="username_email">Username or Email</label>
								<input class="form-control" type="text" name="username_email">						
							</div>
							<div class="form-group">
								<label for="current-password"> Password</label>
								<input class="form-control" type="password" id="password" name="password">	
							</div>
							<div class="d-flex justify-content-center">
							<input type="submit" name="submit">
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