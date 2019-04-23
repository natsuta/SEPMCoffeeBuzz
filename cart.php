<?php include_once('header.php'); ?>
<title>Order Form</title>
<body>
	<?php 
		if (isset($_POST)){
			$_SESSION[cart][] = $_POST;
		}
	?>
	<p>Test</p>

	<form action="" method="post"></form>

</body>
<?php include_once('footer.php'); ?>