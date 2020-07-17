<?php
use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase
{
    /**
     * Test that product array is not empty
	*/
	
	public function testProductsNotEmpty()
    {
		$p=new Products;
		$products=$p->getAllProducts();
        $this->assertIsArray($products);
    }
}