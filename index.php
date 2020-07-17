<?php

// load up the config file
require_once("config.php");

// load up the autoload file to automatically include classes
require "vendor/autoload.php";

// add in the header view
require_once(VIEW_PATH . "/header.php");

?>

<!-- link to bootstrap for styling -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">

<!-- Include CSS for styling -->
<style>
	<?php include 'public_html/css/main.css'; ?>
</style>


<?php
	// add in the products view
	require_once(VIEW_PATH . "/products_content.php");
?>

<?php
	// add in the cart view
	require_once(VIEW_PATH . "/cart_content.php");
?>