<?php include_once('header.php'); ?>
<title>Menu</title>
<body>	
	<h1>Drinks</h1>
		<div class="title-menu">Expresso
			<div class="size-menu">
				<p>Small: $2.75</p>
				<p>Medium: $3.75</p>
			</div>
		</div>
		
		<div class="title-menu">Double Expresso
			<div class="size-menu">
				<p>Small: $3.50</p>
			</div>
		</div>
		
		<div class="title-menu">Latte
			<div class="size-menu">
				<p>Large: $4.70</p>
			</div>
		</div>
		
		<div class="title-menu">Cappuccino, Long Black
			<div class="size-menu">
				<p>Medium: $4.25</p>
				<p>Large: $4.70</p>
			</div>
		</div>

		<div class="title-menu">Hot Chocolate
			<div class="size-menu">
				<p>Medium: $4.20</p>
				<p>Large: $4.65</p>
			</div>
		</div>
		
		<div class="title-menu">Earl Grey, Assam, Green Tea, Mint Tea
			<div class="size-menu">
				<p>Medium: $3.40</p>
				<p>Large: $4.50</p>
			</div>
		</div>

	<h1>Food</h1>
	<!-- Update this if updating food -->

	<?php
		if (file_exists("foodstock.csv") == true){
			echo "<div class='title-menu'>";
			$file = fopen("foodstock.csv", "r");
			$row = fgetcsv($file);
			while(($row = fgetcsv($file)) != false) {
				echo "<p>$row[0]: $".trim($row[1])."</p>";
				if($row[2] == 0){
					echo "<p>Sold out</p>";
				}
			}
			echo "</th>";
			echo "</tr>";
			echo "</div>";
		}	
	?>
</body>
<?php include_once('footer.php'); ?>