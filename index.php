<?php
session_start();

// load up the config file
require_once("config.php");

// load up the autoload file to automatically include classes
require "vendor/autoload.php";

?>

<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<!-- link to bootstrap for styling -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<title>EzyVet Shopping</title>
</head>
 
<body>

<div id="header">
    <h1>EzyVet Shopping</h1>
</div>

<!-- Include CSS for styling -->
<style>
	<?php include 'public_html/css/main.css'; ?>
</style>


<?php
	// add in the products view
	require_once(VIEW_PATH . "/ProductsContent.php");
?>

<?php
	// add in the cart view
	require_once(VIEW_PATH . "/CartContent.php");
?>

<!-- create initial empty cart UI -->
<div id="cart-display">
	<h2>Cart</h2>
	<div id="cart">
		<?php 
require_once "src/ShoppingCart.php";
?>
	</div>
</div>

<script>
    $('#reloadCart').trigger('click');
	
</script>

</body>
</html>