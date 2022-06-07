<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	  <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


	<!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

	<title>Log In</title>
</head>
<body>

	<div class="container">
		
			<div class="row">

				<div class="col s12 l8 offset-l2">

					<div class="card" style="margin-top: 20%;">

						<div class="card-title">
				
							<h2 class="center">Log In</h2>

						</div>

						<form action="index.php" method="POST">
							<?php include('errors.php') ?>

							<div class="card-content">
								
									<div>
										
										<label for="username">Username</label>
										<input type="text" name="username">

									</div>

								
									<div>
										
										<label for="password">Password</label>
										<input type="password" name="password_1">

									</div>


								
									<div class="center" style="margin-top: 7px;">
									<button type="submit" name="login_user" class="btn indigo"> Log In</button>
									<p class="flow-text" style="font-size: 2.5vh; margin-top: 7px">Not a user?<a href="registration.php"><b>Register Here</b></a></p>
									</div>
							</div>
						</form>
					</div>
				</div>
			</div>

	</div>

</body>
</html>