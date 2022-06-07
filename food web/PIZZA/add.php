<?php 

include('config/db_connect.php');


$email = $title = $ingredients = '';
$errors = array('email' => '', 'title' => '', 'ingredients' => '');



if (isset($_POST['submit']) && isset($_FILES['my_image'])) {

/*	echo "<pre>";
	print_r($_FILES['my_image']);
	echo "<pre>";
*/
	$img_name = $_FILES['my_image']['name'];
	$img_size = $_FILES['my_image']['size'];
	$tmp_name = $_FILES['my_image']['tmp_name'];
	$error = $_FILES['my_image']['error'];

	$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jpg", "jpeg", "png", "jfif");

			if(in_array($img_ex_lc,$allowed_exs)){
					$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;

					$img_upload_path = 'uploads/'.$new_img_name;
					move_uploaded_file($tmp_name, $img_upload_path);



			



	if(empty($_POST['email'])){
		$errors['email'] = "An email is required <br />";
	}
	else{
		$email = $_POST['email'];
		if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			$errors['email'] = 'Enter a valid email <br />';
		}
	}

	if(empty($_POST['title'])){
		$errors['title'] =  "A title is required <br />";
	}
	else{
		$title = $_POST['title'];

		if(!preg_match('/^([a-zA-Z\s]+)(-\s*[a-zA-Z\s]*)*$/', $title)){
			$errors['title'] = 'title can contain only letters and space <br />';
		}
	}

	if(empty($_POST['ingredients'])){
		$errors['ingredients'] = "At least one ingredients is required <br />";
	}
	else{
		$ingredients = $_POST['ingredients'];

		if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)){
			$errors['ingredients'] = 'Ingredients must be a comma seperated list <br />';
		}
	}


	if(!array_filter($errors)){

		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$title = mysqli_real_escape_string($conn, $_POST['title']);
		$ingredients = mysqli_real_escape_string($conn, $_POST['ingredients']);

		// $sql = "INSERT INTO photos(image) VALUES('$new_img_name')";
		// 			mysqli_query($connection, $sql);

		$sql = "INSERT INTO PIZZA(title, ingredients, email, image) VALUES('$title', '$ingredients', '$email', '$new_img_name')";

		if(mysqli_query($conn, $sql)){
			header("Location: home.php");
		}else{
			echo 'query error: ' . mysqli_error($conn);
		}

		
	}
}
	
}

 ?>


<!DOCTYPE html>
<html>
<?php include('templates/header.php'); ?>

<section class="container grey-text section">
	<h4 class="center pink-text">Add New food</h4>
	<form class="white" action="add.php" method="POST" enctype="multipart/form-data">

		<div class="input-field">
			<input type="file" name="my_image" id="inpFile">
			<div class="image-preview" id="imagePreview">
			<img src="" alt="Image Preview" class="image-preview__image" name="image"></img>
			<span class="image-preview__default-text">Image Preview</span>
		
	</div>
		</div>

		<div class="input-field">
			<input type="text" id ="email" name="email" value = "<?php echo $email;?>">
			<label for="email">Your Email</label>
			<div class="red-text"> <?php echo $errors['email']; ?> </div>	
		</div>

		<div class="input-field">
			<input type="text" id="title" name="title" value="<?php echo $title;?>">
			<label for="title">Food title</label>
			<div class="red-text"> <?php echo $errors['title']; ?> </div>
		</div>

		<div class="input-field">
		<input type="text" id="ingredients" name="ingredients" value="<?php echo $ingredients;?>">
		<label for="ingredients">Ingredients (comma seperated)</label>
		<div class="red-text"> <?php echo $errors['ingredients']; ?> </div>
		</div>

		<div class="center">
			<input class="btn z-depth-0 blue darken-4" type="submit" name="submit" value="submit">
		</div>
	</form>
</section>
<?php include('templates/footer.php');?>
</html>