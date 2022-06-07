
 <!-- <footer class="page-footer grey darken-4"> -->
 	<!-- <div class="container">
 		
 		<div class="row">
 			
 			<div class="col s12 l6">
 				<h5>About us</h5>
 				<p>We are a group of developers that are working on the 
 				website developing projects. We can develop projects for your business as well as assignment
 			feel free to contact us for any query</p>
 			</div>

 			<div class="col s12 l4 offset-l2">
 				<h5>Connect</h5>
 				<ul>
 					<li><a href="#" class="grey-text text-lighten-3">Facebook</a></li>
 					<li><a href="#" class="grey-text text-lighten-3">Instagram</a></li>
 					<li><a href="#" class="grey-text text-lighten-3">Instagram</a></li>
 				</ul>
 			</div>


 		</div>

 	</div> -->
 	<footer class="footer-copyright section transparent">
 	<div class="container center-align purple-text text-darken-3">Copyright &copy; 2021 TDE</div>
 	</div>
 </footer>

 <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
  <!-- Compiled and minified JavaScript -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

 	<script type="text/javascript">
 		//preview image while adding new food item
		const	inpFile = document.getElementById("inpFile");
		const previewContainer = document.getElementById("imagePreview");
		const previewImage = previewContainer.querySelector(".image-preview__image");
		const previewDefaultText = previewContainer.querySelector(".image-preview__default-text");


		inpFile.addEventListener("change", function(){
			const file = this.files[0];

			if (file) {
				const reader = new FileReader();

				previewDefaultText.style.display = "none";
				previewImage.style.display = "block";

				reader.addEventListener("load", function(){
					
					previewImage.setAttribute("src", this.result);
				});

				reader.readAsDataURL(file);
			}else{
				previewDefaultText.style.display =null;
				previewImage.style.display = null;
				previewImage.setAttribute("src", "");

			}	
		});

	</script>
</body>

