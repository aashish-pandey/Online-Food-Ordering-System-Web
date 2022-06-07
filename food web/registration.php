<?php include('server.php') ?>

<!DOCTYPE html>
<html>
<head>
	  <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


	<!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

	<title>Registration</title>
</head>
<body>

	<div class="container">
		
		

		<div class="container">

			<div class="card" style="margin-top: 10%;">

				<div class= "card-title">
			
			<h2 class="center">Register</h2>

		</div>

		<form action="registration.php" method="POST">

			<?php include('errors.php') ?>

			<div class="card-content">
			
			<div>
				
				<label for="username">Username</label>
				<input type="text" name="username" required>

			</div>

			<div>
				
				<label for="email">Email</label>
				<input type="text" name="email" required>

			</div>

			<div>
				
				<label for="password">Password</label>
				<input type="password" name="password_1" required>

			</div>

			<div>
				
				<label for="password_2">Confirm Password</label>
				<input type="password" name="password_2" required>

			</div>

			<div class="center" style="margin-top: 7px;">

			<button type="submit" name="reg_user" class="btn indigo waves-effect waves-lighten">Submit</button>
			<p class ="flow-text" style="font-size: 2.5vh; margin-top: 7px">Already a user?<a href="index.php"><b>Log In</b></a></p>

			</div>
			</div>
		</form>
		</div>

		

		</div>

	</div>

</body>
</html>