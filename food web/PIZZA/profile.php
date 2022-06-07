<?php 
include('templates/header.php');
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>PROFILE</title>
</head>
<body>

	<div class="container">
		
		<div class="card">
			
			<div class="card-title center">
				<h3>PROFILE</h3>
			</div>

			<div class="card-content">
				<h5>HI! <?php echo $_SESSION['username'] ?> </h5>
			</div>

		</div>

	</div>

	<?php include('templates/footer.php'); ?>

</body>
</html>