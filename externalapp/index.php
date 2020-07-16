<?php

?>

<!DOCTYPE html>
<html>
<head>
	<title>Place Order</title>
	<script type="text/javascript" src="placeorder.js"></script>

	<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css.map">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css.map">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.css.map">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.min.css.map">

</head>
<body>

	<h3>It is time to communicate with the exposed API, all we need is  the API key to be passsed in the header</h3>
	<hr>
	<h4> 1. Feature 1- Placing an Order</h4>

	<form name="order_form" id="order_form">
		<fieldset>
			<legend>Place Order</legend>
			<input type="text" name="name_of_food" id="name_of_food" placeholder="Name of food"><br>
			<input type="number" name="number_of_units" id="number_of_units" placeholder="Number of units"><br>
			<input type="number" name="unit_price" id="unit_price" placeholder="Unit price"><br>
			<input type="hidden" name="status" id="status" placeholder="Status" value="Order placed"><br><br>

			<button class="btn btn-primary" type="submit">Place Order</button>

		</fieldset>
	</form>

	<hr>
	<form name="order_status-form" id="order_status-form" method="post" action="index.php">
		<fieldset>
			<legend>Check Order Status
			</legend>

			<input type="number" name="order_id" id="order_id" placeholder="Order ID"><br><br>
			<button class="btn btn-warning" type="submit"> Check Order Status</button>
		</fieldset>
	</form>
</body>
</html>