<?php

//Create object of Class Products
$products = new Products();

//Use object of Class Products to retrieve list of all products
$productList = $products->getAllProducts();
?>

<!-- Populate the UI with products -->
<div id="product-display">
<h2>Products</h2>
	
<?php
// If product list is not empty, loop through product list
if (! empty($productList)) {
    foreach ($productList as $key => $value) {
?>
<!-- For every product in product list, create the UI for the product -->
		<div class="card" id="product">
			<div class="card-body">
				<!-- Insert name of the product from list -->
				<h5 class="card-title"><?php echo $productList[$key]["name"]; ?></h5>
				<p class="card-text">
					<!-- Insert price of the product from list -->
					<p>Price: <?php echo $productList[$key]["price"]; ?></p>
				</p>
				<!-- Button for adding product to cart -->
				<Button type="button" class="remove-product-btn btn">
					Add to Cart
				</Button>
			</div>
		</div>
<?php
    }
	//Unset loop value so it doesn't affect future loops
	unset($value);
}
?>
</div>