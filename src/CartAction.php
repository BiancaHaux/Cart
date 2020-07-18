<?php
session_start();

require_once("ShoppingCart.php");

if(!empty($_POST["toDo"])) {
	
	//Instantiate object for class ShoppingCart
	$shoppingCart = new ShoppingCart();
	
	if($_POST["toDo"] == 'add'){
		//Call function to add product with posted name
		$shoppingCart->addProduct($_POST["name"]);
	}
	else if($_POST["toDo"] == 'remove'){
		//Call function to remove product with posted name
		$shoppingCart->removeProduct($_POST["name"]);
	}
	else if($_POST["toDo"] == 'reload'){
		//Call function to remove product with posted name
		$shoppingCart->populateCartUI();
	}
	
}


?>