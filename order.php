<?php include_once('header.php'); ?>
<title>Order Form</title>
<body>
	<p>Test</p>

	<form action="cart.php" method="post">
		<table>
			<tr>
				<th>Products</th>
				<th>Price</th>
				<th>Quantity</th>
				<th></th>
				<th></th>
				<th>Subtotal</th>
			</tr>

			<tr>
				<th>Expresso</th>
				<th>$2.50</th>
				<th>Small:
					<select id="Cap" name="Cap" onchange="calcResult()">
						<option value="0">0</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
					</select>
				</th>
				<th>Medium:
					<select disabled>
						<option value="0">0</option>
					</select>
				</th>
				<th>Large:
					<select disabled>
						<option value="0">0</option>
					</select>
				</th>
				<th><p id="ST1"></p></th>
			</tr>

			<tr>
				<th>Double Expresso</th>
				<th>$2.50</th>
				<th>Small:
					<select id="Cap" name="Cap" onchange="calcResult()">
						<option value="0">0</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
					</select>
				</th>
				<th>Medium:
					<select disabled>
						<option value="0">0</option>
					</select>
				</th>
				<th>Large:
					<select disabled>
						<option value="0">0</option>
					</select>
				</th>
				<th><p id="ST2"></p></th>
			</tr>
		
			<tr>
				<th>Latte</th>
				<th>$2.50</th>
				<th>Small:
					<select disabled>
						<option value="0">0</option>
					</select>
				</th>
				<th>Medium:
					<select disabled>
						<option value="0">0</option>
					</select>
				</th>
				<th>Large:
					<select id="Cap" name="Cap" onchange="calcResult()">
						<option value="0">0</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
					</select>
				</th>
				<th><p id="ST3"></p></th>
			</tr>

			<tr>
				<th>Cappuccino</th>
				<th>$2.50</th>
				<th>Small:
					<select disabled>
						<option value="0">0</option>
					</select>
				</th>
				<th>Medium:
					<select id="Cap" name="Cap" onchange="calcResult()">
						<option value="0">0</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
					</select>
				</th>
				<th>Large:
					<select id="Cap" name="Cap" onchange="calcResult()">
						<option value="0">0</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
					</select>
				</th>
				<th><p id="ST4"></p></th>
			</tr>

			<tr>
				<th>Long Black</th>
				<th>$2.50</th>
				<th>Small:
					<select disabled>
						<option value="0">0</option>
					</select>
				</th>
				<th>Medium:
					<select id="Cap" name="Cap" onchange="calcResult()">
						<option value="0">0</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
					</select>
				</th>
				<th>Large:
					<select id="Cap" name="Cap" onchange="calcResult()">
						<option value="0">0</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
					</select>
				</th>
				<th><p id="ST5"></p></th>
			</tr>

			<tr>
				<th>Hot Chocolate</th>
				<th>$2.50</th>
				<th>Small:
					<select disabled>
						<option value="0">0</option>
					</select>
				</th>
				<th>Medium:
					<select id="Cap" name="Cap" onchange="calcResult()">
						<option value="0">0</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
					</select>
				</th>
				<th>Large:
					<select id="Cap" name="Cap" onchange="calcResult()">
						<option value="0">0</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
					</select>
				</th>
				<th><p id="ST6"></p></th>
			</tr>

			<tr>
				<th>Earl Grey</th>
				<th>$2.50</th>
				<th>Small:
					<select disabled>
						<option value="0">0</option>
					</select>
				</th>
				<th>Medium:
					<select id="Cap" name="Cap" onchange="calcResult()">
						<option value="0">0</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
					</select>
				</th>
				<th>Large:
					<select id="Cap" name="Cap" onchange="calcResult()">
						<option value="0">0</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
					</select>
				</th>
				<th><p id="ST7"></p></th>
			</tr>

			<tr>
				<th>Assam</th>
				<th>$2.50</th>
				<th>Small:
					<select disabled>
						<option value="0">0</option>
					</select>
				</th>
				<th>Medium:
					<select id="Cap" name="Cap" onchange="calcResult()">
						<option value="0">0</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
					</select>
				</th>
				<th>Large:
					<select id="Cap" name="Cap" onchange="calcResult()">
						<option value="0">0</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
					</select>
				</th>
				<th><p id="ST8"></p></th>
			</tr>

			<tr>
				<th>Green Tea</th>
				<th>$2.50</th>
				<th>Small:
					<select disabled>
						<option value="0">0</option>
					</select>
				</th>
				<th>Medium:
					<select id="Cap" name="Cap" onchange="calcResult()">
						<option value="0">0</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
					</select>
				</th>
				<th>Large:
					<select id="Cap" name="Cap" onchange="calcResult()">
						<option value="0">0</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
					</select>
				</th>
				<th><p id="ST9"></p></th>
			</tr>

			<tr>
				<th>Mint Tea</th>
				<th>$2.50</th>
				<th>Small:
					<select disabled>
						<option value="0">0</option>
					</select>
				</th>
				<th>Medium:
					<select id="Cap" name="Cap" onchange="calcResult()">
						<option value="0">0</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
					</select>
				</th>
				<th>Large:
					<select id="Cap" name="Cap" onchange="calcResult()">
						<option value="0">0</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
					</select>
				</th>
				<th><p id="ST10"></p></th>
			</tr>
		</table>
	
		<input type="submit" value="submit">Submit</input>
	</form>

</body>
<?php include_once('footer.php'); ?>