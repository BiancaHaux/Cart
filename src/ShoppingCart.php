<?php

// Start the session
@session_start();

require_once("Products.php");

class ShoppingCart
{
	
	private $productList;
	
	public function __construct()
	{
		//Create object of Class Products and retrieve list of all products
		$products = new Products();
		$this->productList = $products->getAllProducts();
	}
	
	
	public function addProduct($pName){
		
		//Get all information about selected product from list of all products
		$key = array_search($pName, array_column($this->productList, 'name'));
		$selectedProduct=$this->productList[$key];
		
		//Create array for product variables, including quantity
		$itemArray = array($selectedProduct["name"]=>array('name'=>$selectedProduct["name"], 'quantity'=>1, 'price'=>$selectedProduct["price"]));
		
		//If cart exists in session variable, get products that are already in the cart
		if(!empty($_SESSION["cart"])) {
			$cartProductsExisting = array_keys($_SESSION["cart"]);
			
			//If the selected product is already in the cart, loop through products and increase quantity on identical product
			if(in_array($selectedProduct["name"],$cartProductsExisting)) {
				foreach($_SESSION["cart"] as $k => $v) {
						if($selectedProduct["name"] == $k) {
							$_SESSION["cart"][$k]["quantity"] = $_SESSION["cart"][$k]["quantity"]+1;
						}
				}
			
			//If selected product not in the cart yet, add it to the cart
			} else {
				$_SESSION["cart"] = array_merge($_SESSION["cart"],$itemArray);
			}
		
		//Else, initialise the cart in session variable with selected item
		} else {
			$_SESSION["cart"] = $itemArray;
		}
		
		$this->populateCartUI();
	}
	
	public function removeProduct($pName){
		
		//Get all information about selected product from list of all products
		$key = array_search($pName, array_column($this->productList, 'name'));
		$selectedProduct=$this->productList[$key];
		
		//Create array for product variables, including quantity
		$itemArray = array($selectedProduct["name"]=>array('name'=>$selectedProduct["name"], 'quantity'=>1, 'price'=>$selectedProduct["price"]));
		
		//If cart exists in session variable, get products that are already in the cart
		if(!empty($_SESSION["cart"])) {
			$cartProductsExisting = array_keys($_SESSION["cart"]);
			
			//If the selected product is already in the cart, loop through products and decrease quantity on identical product
			if(in_array($selectedProduct["name"],$cartProductsExisting)) {
				foreach($_SESSION["cart"] as $k => $v) {
						if($selectedProduct["name"] == $k) {
							$_SESSION["cart"][$k]["quantity"] = $_SESSION["cart"][$k]["quantity"]-1;
							if($_SESSION["cart"][$k]["quantity"]<1){
								$array = $_SESSION["cart"];
								unset($array[$k]);
								$_SESSION["cart"] = $array;
							}
						}
				}
			}
		}
		else{
			unset($_SESSION["cart"]);
		}
		
		$this->populateCartUI();
		
	}
	
	
	public function populateCartUI(){
		
		//Get products from session variable and add UI elements for each product
		if(isset($_SESSION["cart"]) && !empty($_SESSION["cart"])){
		$product_total = 0;
		
		foreach ($_SESSION["cart"] as $product){
		
		?>
					<div class="card" id="cart">
						<div class="card-body">
							<!-- Insert name of the product from cart list -->
							<h5 class="card-title"><?php echo $product["name"]; ?></h5>
							<p class="card-text">
								<!-- Insert quantity of the product cart from list -->
								<p>Price: <?php echo "$".$product["price"]; ?></p>
								<!-- Insert price of the product from cart list -->
								<p>Quantity: <?php echo $product["quantity"]; ?></p>
							</p>
							<!-- Button for adding product to cart -->
							<Button type="button" class="btn" onclick="cartAction('remove', '<?php echo $product["name"] ?>')">
								Remove from Cart
							</Button>
						</div>
					</div>
		<?php
			$product_total += ($product["price"]*$product["quantity"]);
			}
		?>

		<tr>
		<td colspan="3" align=right><strong>Total:</strong></td>
		<td align=right><?php echo "$". number_format($product_total,2); ?></td>
		<td></td>
		</tr>
		</tbody>
		</table>		
		  <?php
		}else{
			?>
			<div>Your shopping cart is empty.</div>
			<div>Happy shopping!</div>
			<?php
		}
	}
	
}
?>