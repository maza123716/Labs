<?php
    include_once "DBconnector.php";
    session_start();
    if(!isset($_SESSION['username'])){
	header("Location:login.php");
}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Private Page</title>
	<script type="text/javascript" src="validate.js"></script>
	<script type="text/javascript" src="apikey.js"></script>
	<script src="jquery-3.1.1.min.js"></script>
	
	<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	
	<link rel="stylesheet" type="text/css" href="validate.css">

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
	<p align="right"><a href="logout.php ">Log Out</a></p>
	<hr>
	<h3>Here we will create an API that will allow Users/Developers to order items from external systems</h3>
	<hr>
	<h4>We now put this feature of allowing users to generate an API key. Click the button to generate the API key</h4>

	<button class="btn btn-primary" id="api-key-btn">Generate API key</button><br></br>

	<!--This area will hold the api key-->
	<strong>Your API key:</strong><br>
	<textarea cols="100" rows="2" id="api_key" name="api_key" readonly=""><?php echo fetchUserApiKey();?></textarea>

	<h3>Service Description</h3>
</body>
</html>