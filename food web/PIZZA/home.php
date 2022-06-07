<?php 
session_start();



if(!isset($_SESSION['username'])){
    $_SESSION['message'] = "You must log in first to view this page";
    header("Location: ../index.php");
}

if(isset($_GET['logout'])){
    echo "logout";
    session_destroy();
    unset($_SESSION['username']);
    header("Location: ../index.php");
}


 ?>

<?php 

include('config/db_connect.php');

$sql = 'SELECT title, ingredients, id, image FROM PIZZA ORDER BY created_at DESC';



$result = mysqli_query($conn, $sql);

$pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

mysqli_free_result($result);

mysqli_close($conn);



 ?>



<!DOCTYPE html>
<html>
<?php include('templates/header.php'); ?>

<h3 class="center pink-text">Foods!
<?php echo $_SESSION['username'];?>
</h3>

<div class="container cyan darken-1">
	<div class="row">
		
		<?php foreach($pizzas as $pizza){ ?>

			<script>
				console.log($pizza['ingredients']);
			</script>

			<div class="col s12 m6">
				<div class="card z-depth-0">
					<div class="card-image image_display"> 
					<!-- <img src="img/pasta.jpg" class="pizza"> -->
					<img src="uploads/<?=$pizza['image']?>" style="width: 100%; height: 300px;">

					<a href="#" class="btn-floating pink pulse halfway-fab ">
						<i class="material-icons">favorite</i>
					</a>

					</div>
					<div class="card-content center">
						<h6 style="text-decoration: underline; font-weight: bold;"> <?php echo htmlspecialchars($pizza['title']); ?> </h6>
						<ul>
							<?php foreach(explode(',', $pizza['ingredients']) as $ing){ ?>
							<li><?php echo htmlspecialchars($ing); ?></li>
							<?php } ?>
						</ul>
					</div>
					<div class="card-action right-align">
						<a class="brand-text brown-text text-darken-4" href="details.php?id=<?php echo $pizza['id']; ?> ">more info</a>
					</div>
				</div>
			</div>
		<?php }; ?>

	</div>
</div>

<?php include('templates/footer.php'); ?>

</html>