<?php

class ShoppingCart
{
	
	//Create object of Class Products and retrieve list of all products
	private $products = new Products();
	private $allProductsList = $products->getAllProducts();

	//Create object of Class Cart and retrieve list of products in cart
	private $cartProducts = new Products();
	private $cartProductsList = $cartProducts->getCartProducts();

    public function addProduct(string productName)
    {
    }
	
	public function removeProduct(string productName)
    {
    }
}
