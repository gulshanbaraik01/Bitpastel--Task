<!DOCTYPE html>
<html language="English ">
	<head>
		<title>Login Page</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
		<link rel="stylesheet" type="text/css" href="css/global.css">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script>
		
				   
	</script>
			
	</head>
	
	<body class="bg">
		<div class="container-fluid  " >
			<div class="row">
				<div class="col-md-4 col-sm-4 col-xs-12"></div>
					<div class="col-md-4 col-sm-4 col-xs-12">
						<form class="form-container" action="login_process.php" method="POST">
							<h1>Login</h1>
			  				<div class="form-group">
			    					<label for="exampleInputEmail1">Email</label>
			    					<input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email" required>
			  				</div>
							<div class="form-group">
								 <label for="exampleInputPassword1">Password</label>
								  <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
							</div>
							<div class="checkbox">
								  <label>
								  <input type="checkbox"> Remember me
								   </label>
							</div>
                                          		<button type="submit" name="submit" class="btn btn-success ">Login</button>
                                          
							<a href="registration.php">
							<button type="button" class="btn btn-success ">Sign Up</button></a>
						</form>
					</div>
			</div>
		</div>
		
	</body>

					
</html>
