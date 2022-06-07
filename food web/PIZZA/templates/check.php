<?php 

session_start();

if(!isset($_SESSION['username'])){
	$_SESSION['message'] = "You must log in first to view this page";
	header("Location: index.php");
}

if(isset($_GET['logout'])){
	session_destroy();
	unset($_SESSION['username']);
	header("Location: index.php");
}
 ?>