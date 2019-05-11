<?php include_once('header.php'); ?>
<title>Checkout</title>
<body>
	<h1>Checkout</h1>

	<form action="checkout.php" method="POST">
			Name: <input type="text" name="name" id="name">
			<br/><br/>
			Credit Card Number: <input type="text" name="creditcardno" id="creditcardno">
			<br/><br/>
			<button type="submit" value="Submit">Submit</button>
		</form>

</body>
<?php include_once('footer.php'); ?>