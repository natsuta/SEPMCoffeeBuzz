<?php include_once('header.php'); ?>
<title>Checkout</title>
<body>
	<h1>Checkout</h1>

	<?php
		$file = fopen("orders.csv", "a");
		$counter = file_get_contents("queuecounter.txt");
		$order_str = implode(",", $_SESSION['cart']);
		fwrite($file, $counter.",".$order_str."\n");

		$counter++;
		$recounter = fopen("queuecounter.txt", "w");
		fwrite($recounter, $counter);
		fclose($file);
		fclose($recounter);

		?>

</body>
<?php include_once('footer.php'); ?>