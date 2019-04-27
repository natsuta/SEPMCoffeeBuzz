<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="wireframe.css">
	<header><h1>4U CoffeeBuzz</h1></header>
</head>
<nav>
	<a href="index.php">Home</a>
	<a href="menu.php">Menu</a>
	<a href="order.php">Order Form</a>
	<a href="cart.php">Cart</a>
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