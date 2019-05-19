<?php include_once('header.php'); ?>
<title>Queue Info</title>
<body>	
	<div class="center">
		<h1>Calculate time</h1>
		Order number:<br>
		<input id="ordernum" type="text" name="ordernum"><br>
		<button onclick="time()">Calculate</button>
		<p>Your waiting time is: <strong id="time"></strong>min</p>
	</div>

	<script>
	function time() {
		var ordernum = document.getElementById("ordernum").value;
		var time = document.getElementById("time").value;
		var time = 5 * ordernum;
		document.getElementById("time").innerHTML = time.toFixed(2);
	}
	</script>

</body>
<?php include_once('footer.php'); ?>