<?php include_once('header.php'); ?>
<title>Order Form</title>
<body>
	<script type="text/javascript" src="orderproc.js"></script>
	<h1>Order Form</h1>
	<p>Test</p>

	<form action="cart.php" method="post">
		<table>
			<tr>
				<th>Products</th>
				<th>Small</th>
				<th>Medium</th>
				<th>Large</th>
				<th>Subtotal</th>
			</tr>

			<tr>
				<th>Expresso</th>
				<th><select id="Exp" name="Exp" onchange="calcResult()">
						<option value="0">0</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
					</select>
				</th>
				<th><select disabled>
						<option value="0">0</option>
					</select>
				</th>
				<th><select disabled>
						<option value="0">0</option>
					</select>
				</th>
				<th><p id="ST1"></p></th>
			</tr>

			<tr>
				<th>Double Expresso</th>
				<th><select id="DExp" name="DExp" onchange="calcResult()">
						<option value="0">0</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
					</select>
				</th>
				<th><select disabled>
						<option value="0">0</option>
					</select>
				</th>
				<th><select disabled>
						<option value="0">0</option>
					</select>
				</th>
				<th><p id="ST2"></p></th>
			</tr>
		
			<tr>
				<th>Latte</th>
				<th><select disabled>
						<option value="0">0</option>
					</select>
				</th>
				<th><select disabled>
						<option value="0">0</option>
					</select>
				</th>
				<th><select id="Lat" name="Lat" onchange="calcResult()">
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
				<th><select disabled>
						<option value="0">0</option>
					</select>
				</th>
				<th><select id="MCap" name="MCap" onchange="calcResult()">
						<option value="0">0</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
					</select>
				</th>
				<th><select id="LCap" name="LCap" onchange="calcResult()">
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
				<th><select disabled>
						<option value="0">0</option>
					</select>
				</th>
				<th><select id="MLB" name="MLB" onchange="calcResult()">
						<option value="0">0</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
					</select>
				</th>
				<th><select id="LLB" name="LLB" onchange="calcResult()">
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
				<th><select disabled>
						<option value="0">0</option>
					</select>
				</th>
				<th><select id="MChoc" name="MChoc" onchange="calcResult()">
						<option value="0">0</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
					</select>
				</th>
				<th><select id="LChoc" name="LChoc" onchange="calcResult()">
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
				<th><select disabled>
						<option value="0">0</option>
					</select>
				</th>
				<th><select id="MEarl" name="MEarl" onchange="calcResult()">
						<option value="0">0</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
					</select>
				</th>
				<th><select id="LEarl" name="LEarl" onchange="calcResult()">
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
				<th><select disabled>
						<option value="0">0</option>
					</select>
				</th>
				<th><select id="MAssam" name="MAssam" onchange="calcResult()">
						<option value="0">0</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
					</select>
				</th>
				<th><select id="LAssam" name="LAssam" onchange="calcResult()">
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
				<th><select disabled>
						<option value="0">0</option>
					</select>
				</th>
				<th><select id="MGreen" name="MGreen" onchange="calcResult()">
						<option value="0">0</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
					</select>
				</th>
				<th><select id="LGreen" name="LGreen" onchange="calcResult()">
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
				<th><select disabled>
						<option value="0">0</option>
					</select>
				</th>
				<th><select id="MMint" name="MMint" onchange="calcResult()">
						<option value="0">0</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
					</select>
				</th>
				<th><select id="LMint" name="LMint" onchange="calcResult()">
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
			<tr>
				<th>Total</th>
				<th></th>
				<th></th>
				<th></th>
				<th><p id="totalPrice"></p></th>
			</tr>
		</table>

		<?php
			if (file_exists("foodstock.csv") == true){
				echo "<script type='text/javascript' src='orderprocfood.js'></script>";
				echo "<table>";
				$file = fopen("foodstock.csv", "r");
				$count = 1;
				$row = fgetcsv($file);
				while(($row = fgetcsv($file)) != false) {
					echo "<tr>";
					echo "<th>$row[0] $row[1]</th>";
					echo "<th><select id='spitem$count'
						name='spitem$count' onchange=''>";
					if ($row[2] <= 5){
						for($i=0; $i<$row[2]; $i++){
							echo "<option value=$i>$i</option>";
						}
					}
					else {
						for($i=0; $i<=5; $i++){
							echo "<option value=$i>$i</option>";
						}
					}
					echo "</select>";
					echo "</th>";

					echo "</tr>";
					$count++;
				}
				echo "</table>";
			}
		?>


		<input type="submit" value="Submit" />
	</form>
</body>
<?php include_once('footer.php'); ?>