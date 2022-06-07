<?php 


$conn = mysqli_connect('localhost', 'aashish', 'text123', 'aashish_pizza');

if(!$conn){
	echo 'Connection error: ' . mysqli_connect_error();
}


 ?>