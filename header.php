<?php session_start(); ?>
<!DOCTYPE html>
<!-- Split components into PHP modules later -->
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" media="screen" href="main.css">
	<script src="main.js"></script>
</head>
<nav>
	<a href="index.php">Home</a>
	<a href="menu.php">Menu</a>
	<a href="order.php">Order Form</a>
	<a href="queue.php">Queue Info</a>
	<?php 
	if(isset($_SESSION['user'])){
		echo "<a href='logout.php'>Logout</a>";
	}
	else {
		echo "<a href='login.php'>Login</a>";
	}
	?>
</nav>