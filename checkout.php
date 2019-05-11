<?php include_once('header.php'); ?>
<title>Checkout</title>
<body>
	<h1>Checkout</h1>

	<?php
		$file = fopen("orders.csv", "a");
		$details = fopen("details.csv", "a");
		$counter = file_get_contents("queuecounter.txt");
		$order_str = implode(",", $_SESSION['cart']);
		$det_str = implode(",", $_POST);
		fwrite($file, $counter.",".$order_str."\n");
		fwrite($details, $counter.",".$det_str."\n");

		$counter++;
		if($counter > 100)
			$counter = 1;
		$recounter = fopen("queuecounter.txt", "w");
		fwrite($recounter, $counter);
		fclose($file);
		fclose($recounter);
		echo "<h2>Your order is being processed!</h2>"
		?>

</body>
<?php include_once('footer.php'); ?>