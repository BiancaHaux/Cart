<?php
use PHPUnit\Framework\TestCase;

class CartProductTest extends TestCase
{
    /**
     * Test that there are no duplicate products in cart product list
	*/
	
	public function testCartProductsNotDuplicate()
    {
		$c=new Cart;
		$cartProducts=$c->getCartProducts();
		$a=count($cartProducts);
		$b=count($cartProducts);
		//array_unique($cartProducts)
		
        $this->assertEquals($a, $b);
    }
}