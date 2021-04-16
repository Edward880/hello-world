<!DOCTYPE html>
<html>
<head>
	<title>Food sahre | Register</title>
	<<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<style type="text/css">
		form{
			text-align: left;
			width: 100%;
		}
		img{
			height: 200px;
			width: 200px;
		}
		.container{
			background-color: #F2EBEE;
			width: 40%;
			height: 450px;
		}
		.alert{
			width: 100%;
		}
		body{
			background-color: cream;
		}
	
	</style>
</head>
<body>
	<br><br>
	
	<div class="container">
		<center>
		<div class="alert alert-success" role="alert">
  			<h3>Register</h3>
			</div>
			</center>

			<div class="row">
			<div class="col-4">
					<img src="https://cdn.pixabay.com/photo/2015/12/08/19/08/castle-1083570__340.png" class="img-fluid">
			</div>
			
			
			<div class="col">
				<center>

					<form method="POST" action="">
					  <div class="mb-3">
					    <label for="exampleInputEmail1" class="form-label">Full Name</label>
					    <input type="text" class="form-control" name="full_name" required>
					
					  </div>

					   <div class="mb-3">
					    <label for="exampleInputEmail1" class="form-label">Email</label>
					    <input type="email" class="form-control" name="email" required>
					
					  </div>

	

					    <div class="mb-3">
					    <label for="exampleInputEmail1" class="form-label">Phone</label>
					    <input type=text class="form-control" name="Phone" required>
					
					  </div>
					  <div class="mb-3">
					    <label for="exampleInputEmail1" class="form-label">Password</label>
					    <input type="password" class="form-control" name="password" required>
					
					  </div>
					  
			  
			  <button name="register" type="submit" class="btn btn-success">Register</button>
			</form>
			</center>

				<?php
				require('dbconnect.php');

				
				
				if (isset($_POST['register'])) {
					
					$fullName = $_POST['full_name'];
					$email = $_POST['email'];
					$role = 'user';
					$Phone = $_POST['Phone'];
					$password = $_POST['password'];

					
					//$encryptedPassword = password_hash($password, PASSWORD_DEFAULT);

					$query = "INSERT INTO customer VALUES('$fullName', '$email','$Phone','$role', '$password')";
					
					$executeQuery = mysqli_query($con, $query);
					if ($executeQuery) 
					{
						
  					header('location: login.php');
					}
					else{
						echo(mysqli_error($con));

					}
  					

				}
			

			?>
				
			</div>
		</div>
		
	</div>
</body>


</html>