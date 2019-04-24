<?php include_once('header.php'); ?>
<title>Order Form</title>
<body>
	<title>Shopping Cart</title>
	<h1>Shopping Cart</h1>

	<?php
		//to edit food items (from CSV), find 'spitem' fields
		if(isset($_POST['delete'])) {
			switch($_POST['delete']){
				case 'Exp':
					$_SESSION['cart']['Exp'] = 0;
					break;
				case 'DExp':
					$_SESSION['cart']['DExp'] = 0;
					break;
				case 'Lat':
					$_SESSION['cart']['Lat'] = 0;	
					break;
				case 'MCap':
					$_SESSION['cart']['MCap'] = 0;	
					break;
				case 'LCap':
					$_SESSION['cart']['LCap'] = 0;	
					break;
				case 'MLB':
					$_SESSION['cart']['MLB'] = 0;	
					break;
				case 'LLB':
					$_SESSION['cart']['LLB'] = 0;	
					break;
				case 'MChoc':
					$_SESSION['cart']['MChoc'] = 0;	
					break;
				case 'LChoc':
					$_SESSION['cart']['LChoc'] = 0;	
					break;
				case 'MEarl':
					$_SESSION['cart']['MEarl'] = 0;	
					break;
				case 'LEarl':
					$_SESSION['cart']['LEarl'] = 0;	
					break;
				case 'MAssam':
					$_SESSION['cart']['MAssam'] = 0;	
					break;
				case 'LAssam':
					$_SESSION['cart']['LAssam'] = 0;	
					break;
				case 'MGreen':
					$_SESSION['cart']['MGreen'] = 0;	
					break;
				case 'LGreen':
					$_SESSION['cart']['LGreen'] = 0;	
					break;
				case 'MMint':
					$_SESSION['cart']['MMint'] = 0;	
					break;
				case 'LMint':
					$_SESSION['cart']['LMint'] = 0;	
					break;
				case 'spitem1':
					$_SESSION['cart']['spitem1'] = 0;	
					break;
				case 'spitem2':
					$_SESSION['cart']['spitem2'] = 0;	
					break;
				case 'spitem3':
					$_SESSION['cart']['spitem3'] = 0;	
					break;
				case 'spitem4':
					$_SESSION['cart']['spitem4'] = 0;	
					break;
				case 'spitem5':
					$_SESSION['cart']['spitem5'] = 0;	
					break;
			}
		}
		elseif(isset($_POST['clear'])) {
			unset($_SESSION['cart']);
		}
		else {
			// Adding items to cart
			if($_POST){
				$_SESSION['cart']['Exp'] += $_POST['Exp'];
				$_SESSION['cart']['DExp'] += $_POST['DExp'];
				$_SESSION['cart']['Lat'] += $_POST['Lat'];
				$_SESSION['cart']['MCap'] += $_POST['MCap'];
				$_SESSION['cart']['LCap'] += $_POST['LCap'];
				$_SESSION['cart']['MLB'] += $_POST['MLB'];
				$_SESSION['cart']['LLB'] += $_POST['LLB'];
				$_SESSION['cart']['MChoc'] += $_POST['MChoc'];
				$_SESSION['cart']['LChoc'] += $_POST['LChoc'];
				$_SESSION['cart']['MEarl'] += $_POST['MEarl'];
				$_SESSION['cart']['LEarl'] += $_POST['LEarl'];
				$_SESSION['cart']['MAssam'] += $_POST['MAssam'];
				$_SESSION['cart']['LAssam'] += $_POST['LAssam'];
				$_SESSION['cart']['MGreen'] += $_POST['MGreen'];
				$_SESSION['cart']['LGreen'] += $_POST['LGreen'];
				$_SESSION['cart']['MMint'] += $_POST['MMint'];
				$_SESSION['cart']['LMint'] += $_POST['LMint'];
				$_SESSION['cart']['spitem1'] += $_POST['spitem1'];
				$_SESSION['cart']['spitem2'] += $_POST['spitem2'];
				$_SESSION['cart']['spitem3'] += $_POST['spitem3'];
				$_SESSION['cart']['spitem4'] += $_POST['spitem4'];
				$_SESSION['cart']['spitem5'] += $_POST['spitem5'];
			}
		}

		//calculating total price
		if(isset($_SESSION['cart'])){
			$_SESSION['cart']['totalPrice'] = 0;
			$_SESSION['cart']['totalPrice'] += $_SESSION['cart']['Exp']*2.75;
			$_SESSION['cart']['totalPrice'] += $_SESSION['cart']['DExp']*3.50;
			$_SESSION['cart']['totalPrice'] += $_SESSION['cart']['Lat']*4.70;
			$_SESSION['cart']['totalPrice'] += $_SESSION['cart']['MCap']*4.25;
			$_SESSION['cart']['totalPrice'] += $_SESSION['cart']['LCap']*4.70;
			$_SESSION['cart']['totalPrice'] += $_SESSION['cart']['MLB']*4.25;
			$_SESSION['cart']['totalPrice'] += $_SESSION['cart']['LLB']*4.70;
			$_SESSION['cart']['totalPrice'] += $_SESSION['cart']['MChoc']*4.20;
			$_SESSION['cart']['totalPrice'] += $_SESSION['cart']['LChoc']*4.65;
			$_SESSION['cart']['totalPrice'] += $_SESSION['cart']['MEarl']*3.40;
			$_SESSION['cart']['totalPrice'] += $_SESSION['cart']['LEarl']*4.50;
			$_SESSION['cart']['totalPrice'] += $_SESSION['cart']['MAssam']*3.40;
			$_SESSION['cart']['totalPrice'] += $_SESSION['cart']['LAssam']*4.50;
			$_SESSION['cart']['totalPrice'] += $_SESSION['cart']['MGreen']*3.40;
			$_SESSION['cart']['totalPrice'] += $_SESSION['cart']['LGreen']*4.50;
			$_SESSION['cart']['totalPrice'] += $_SESSION['cart']['MMint']*3.40;
			$_SESSION['cart']['totalPrice'] += $_SESSION['cart']['LMint']*4.50;
			//update prices from here
			$_SESSION['cart']['totalPrice'] += $_SESSION['cart']['spitem1']*4.50;
			$_SESSION['cart']['totalPrice'] += $_SESSION['cart']['spitem2']*4.50;
			$_SESSION['cart']['totalPrice'] += $_SESSION['cart']['spitem3']*4.00;
			$_SESSION['cart']['totalPrice'] += $_SESSION['cart']['spitem4']*4.00;
			$_SESSION['cart']['totalPrice'] += $_SESSION['cart']['spitem5']*6.50;
		}
	?>

	<?php
		if(isset($_SESSION['cart'])){
			echo "<form action='cart.php' method='post'>";
			echo "<table>";
				echo "<tr>";
					echo "<th>Products</th>";
					echo "<th>Quantity</th>";
					echo "<th>Subtotal</th>";
					echo "<th>Delete</th>";
				echo "</tr>";

				if($_SESSION['cart']['Exp'] > 0){
					echo "<tr>";
						echo "<th>Expresso</th>";
						echo "<th>";
						print_r($_SESSION['cart']['Exp']);
						echo "</th>";
						echo "<th>";
						print_r($_SESSION['cart']['Exp']*2.75);
						echo "</th>";
						echo "<th>";
						echo "<button type='submit' name='delete' value='Exp'>Delete</button>";
						echo "</th>";
					echo "</tr>";
					
				}
				
				if($_SESSION['cart']['DExp'] > 0){
					echo "<tr>";
						echo "<th>Double Expresso</th>";
						echo "<th>";
						print_r($_SESSION['cart']['DExp']);
						echo "</th>";
						echo "<th>";
						print_r($_SESSION['cart']['DExp']*3.50);
						echo "</th>";
						echo "<th>";
						echo "<button type='submit' name='delete' value='DExp'>Delete</button>";
						echo "</th>";
					echo "</tr>";
				}
			
				if($_SESSION['cart']['Lat'] > 0){
					echo "<tr>";
						echo "<th>Latte/th>";
						echo "<th>$4.70</th>";
						echo "<th>";
						print_r($_SESSION['cart']['Lat']);
						echo "</th>";
						echo "<th>";
						print_r($_SESSION['cart']['Lat']*4.70);
						echo "</th>";
						echo "<th>";
						echo "<button type='submit' name='delete' value='Lat'>Delete</button>";
						echo "</th>";
					echo "</tr>";
				}
			
				if($_SESSION['cart']['MCap'] > 0){
					echo "<tr>";
						echo "<th>Cappuccino (Medium)</th>";
						echo "<th>";
						print_r($_SESSION['cart']['MCap']);
						echo "</th>";
						echo "<th>";
						print_r($_SESSION['cart']['MCap']*4.25);
						echo "</th>";
						echo "<th>";
						echo "<button type='submit' name='delete' value='MCap'>Delete</button>";
						echo "</th>";
					echo "</tr>";
				}
			
				if($_SESSION['cart']['LCap'] > 0){
					echo "<tr>";
						echo "<th>Cappuccino (Large)</th>";
						echo "<th>";
						print_r($_SESSION['cart']['LCap']);
						echo "</th>";
						echo "<th>";
						print_r($_SESSION['cart']['LCap']*4.70);
						echo "</th>";
						echo "<th>";
						echo "<button type='submit' name='delete' value='LCap'>Delete</button>";
						echo "</th>";
					echo "</tr>";
				}
			
				if($_SESSION['cart']['MLB'] > 0){
					echo "<tr>";
						echo "<th>Long Black (Medium)</th>";
						echo "<th>";
						print_r($_SESSION['cart']['MLB']);
						echo "</th>";
						echo "<th>";
						print_r($_SESSION['cart']['MLB']*4.25);
						echo "</th>";
						echo "<th>";
						echo "<button type='submit' name='delete' value='MLB'>Delete</button>";
						echo "</th>";
					echo "</tr>";
				}
			
				if($_SESSION['cart']['LLB'] > 0){
					echo "<tr>";
						echo "<th>Long Black (Large)</th>";
						echo "<th>$89.99</th>";
						echo "<th>";
						print_r($_SESSION['cart']['LLB']);
						echo "</th>";
						echo "<th>";
						print_r($_SESSION['cart']['LLB']*4.70);
						echo "</th>";
						echo "<th>";
						echo "<button type='submit' name='delete' value='LLB'>Delete</button>";
						echo "</th>";
					echo "</tr>";
				}
			
				if($_SESSION['cart']['MChoc'] > 0){
					echo "<tr>";
						echo "<th>Hot Chocolate (Medium)</th>";
						echo "<th>";
						print_r($_SESSION['cart']['MChoc']);
						echo "</th>";
						echo "<th>";
						print_r($_SESSION['cart']['MChoc']*99.99);
						echo "</th>";
						echo "<th>";
						echo "<button type='submit' name='delete' value='MChoc'>Delete</button>";
						echo "</th>";
					echo "</tr>";
				}
			
				if($_SESSION['cart']['LChoc'] > 0){
					echo "<tr>";
						echo "<th>Hot Chocolate (Large)</th>";
						echo "<th>";
						print_r($_SESSION['cart']['LChoc']);
						echo "</th>";
						echo "<th>";
						print_r($_SESSION['cart']['LChoc']*4.65);
						echo "</th>";
						echo "<th>";
						echo "<button type='submit' name='delete' value='LChoc'>Delete</button>";
						echo "</th>";
					echo "</tr>";
				}
			
				if($_SESSION['cart']['MEarl'] > 0){
					echo "<tr>";
						echo "<th>Earl Grey (Medium)</th>";
						echo "<th>";
						print_r($_SESSION['cart']['MEarl']);
						echo "</th>";
						echo "<th>";
						print_r($_SESSION['cart']['MEarl']*3.40);
						echo "</th>";
						echo "<th>";
						echo "<button type='submit' name='delete' value='MEarl'>Delete</button>";
						echo "</th>";
					echo "</tr>";
				}
				if($_SESSION['cart']['LEarl'] > 0){
					echo "<tr>";
						echo "<th>Earl Grey (Large)</th>";
						echo "<th>";
						print_r($_SESSION['cart']['LEarl']);
						echo "</th>";
						echo "<th>";
						print_r($_SESSION['cart']['LEarl']*4.50);
						echo "</th>";
						echo "<th>";
						echo "<button type='submit' name='delete' value='LEarl'>Delete</button>";
						echo "</th>";
					echo "</tr>";
				}
				
				if($_SESSION['cart']['MAssam'] > 0){
					echo "<tr>";
						echo "<th>Assam (Medium</th>";
						echo "<th>";
						print_r($_SESSION['cart']['MAssam']);
						echo "</th>";
						echo "<th>";
						print_r($_SESSION['cart']['MAssam']*3.40);
						echo "</th>";
						echo "<th>";
						echo "<button type='submit' name='delete' value='MAssam'>Delete</button>";
						echo "</th>";
					echo "</tr>";
				}
			
				if($_SESSION['cart']['LAssam'] > 0){
					echo "<tr>";
						echo "<th>Assam (Large)</th>";
						echo "<th>";
						print_r($_SESSION['cart']['LAssam']);
						echo "</th>";
						echo "<th>";
						print_r($_SESSION['cart']['LAssam']*4.50);
						echo "</th>";
						echo "<th>";
						echo "<button type='submit' name='delete' value='LAssam'>Delete</button>";
						echo "</th>";
					echo "</tr>";
				}
			
				if($_SESSION['cart']['MGreen'] > 0){
					echo "<tr>";
						echo "<th>Green Tea (Medium)</th>";
						echo "<th>";
						print_r($_SESSION['cart']['MGreen']);
						echo "</th>";
						echo "<th>";
						print_r($_SESSION['cart']['MGreen']*3.40);
						echo "</th>";
						echo "<th>";
						echo "<button type='submit' name='delete' value='MGreen'>Delete</button>";
						echo "</th>";
					echo "</tr>";
				}
			
				if($_SESSION['cart']['LGreen'] > 0){
					echo "<tr>";
						echo "<th>Green Tea (Large)</th>";
						echo "<th>";
						print_r($_SESSION['cart']['LGreen']);
						echo "</th>";
						echo "<th>";
						print_r($_SESSION['cart']['LGreen']*4.50);
						echo "</th>";
						echo "<th>";
						echo "<button type='submit' name='delete' value='LGreen'>Delete</button>";
						echo "</th>";
					echo "</tr>";
				}
			
				if($_SESSION['cart']['MMint'] > 0){
					echo "<tr>";
						echo "<th>Mint Tea (Medium)</th>";
						echo "<th>";
						print_r($_SESSION['cart']['MMint']);
						echo "</th>";
						echo "<th>";
						print_r($_SESSION['cart']['MMint']*3.40);
						echo "</th>";
						echo "<th>";
						echo "<button type='submit' name='delete' value='MMint'>Delete</button>";
						echo "</th>";
					echo "</tr>";
				}
			
				if($_SESSION['cart']['LMint'] > 0){
					echo "<tr>";
						echo "<th>Mint Tea (Large)</th>";
						echo "<th>";
						print_r($_SESSION['cart']['LMint']);
						echo "</th>";
						echo "<th>";
						print_r($_SESSION['cart']['LMint']*4.50);
						echo "</th>";
						echo "<th>";
						echo "<button type='submit' name='delete' value='LMint'>Delete</button>";
						echo "</th>";
					echo "</tr>";
				}
			
				//update food and prices from here
				if($_SESSION['cart']['spitem1'] > 0){
					echo "<tr>";
						echo "<th>Caramel Slice</th>";
						echo "<th>";
						print_r($_SESSION['cart']['spitem1']);
						echo "</th>";
						echo "<th>";
						print_r($_SESSION['cart']['spitem1']*4.50);
						echo "</th>";
						echo "<th>";
						echo "<button type='submit' name='delete' value='spitem1'>Delete</button>";
						echo "</th>";
					echo "</tr>";
				}
			
				if($_SESSION['cart']['spitem2'] > 0){
					echo "<tr>";
						echo "<th>Vanilla Slice</th>";
						echo "<th>";
						print_r($_SESSION['cart']['spitem2']);
						echo "</th>";
						echo "<th>";
						print_r($_SESSION['cart']['spitem2']*4.50);
						echo "</th>";
						echo "<th>";
						echo "<button type='submit' name='delete' value='spitem2'>Delete</button>";
						echo "</th>";
					echo "</tr>";
				}
			
				if($_SESSION['cart']['spitem3'] > 0){
					echo "<tr>";
						echo "<th>Chocolate Muffin</th>";
						echo "<th>";
						print_r($_SESSION['cart']['spitem3']);
						echo "</th>";
						echo "<th>";
						print_r($_SESSION['cart']['spitem3']*4.00);
						echo "</th>";
						echo "<th>";
						echo "<button type='submit' name='delete' value='spitem3'>Delete</button>";
						echo "</th>";
					echo "</tr>";
				}
				if($_SESSION['cart']['spitem4'] > 0){
					echo "<tr>";
						echo "<th>Blueberry Muffin</th>";
						echo "<th>";
						print_r($_SESSION['cart']['spitem4']);
						echo "</th>";
						echo "<th>";
						print_r($_SESSION['cart']['spitem4']*4.00);
						echo "</th>";
						echo "<th>";
						echo "<button type='submit' name='delete' value='spitem4'>Delete</button>";
						echo "</th>";
					echo "</tr>";
				}
			
				if($_SESSION['cart']['spitem5'] > 0){
					echo "<tr>";
						echo "<th>Macaron Set</th>";
						echo "<th>";
						print_r($_SESSION['cart']['spitem5']);
						echo "</th>";
						echo "<th>";
						print_r($_SESSION['cart']['spitem5']*6.50);
						echo "</th>";
						echo "<th>";
						echo "<button type='submit' name='delete' value='spitem5'>Delete</button>";
						echo "</th>";
					echo "</tr>";
				}

				if(isset($_SESSION['cart']['totalPrice'])){
					echo "<tr>";
						echo "<th></th>";
						echo "<th>Total</th>";
						echo "<th><p id='totalQty'></p></th>";
						echo "<th>";
						print_r($_SESSION['cart']['totalPrice']);
						echo "</th>";
					echo "</tr>";
				}
			echo "</table>";
			echo "</form>";
		}
		else {
			echo "<p>You have cleared the cart or you have tried to access the cart without adding items to it. Please add items to the cart from the <a href='orderform.php'>order form</a>.</p>";
		}

	?>
	<form method='post'>
		<button type='submit' name='clear'>Clear cart</button>
	</form>

	<form action="checkout.php" method='post'>
		<input type='Submit' value='Submit'>
	</form>

</body>
<?php include_once('footer.php'); ?>