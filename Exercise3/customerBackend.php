<?php

	echo "<html><head><link href='style.css' rel='stylesheet'></head><body>";
	
	$shirtQ = $_POST["shirtQuantity"];
	$hatQ = $_POST["hatQuantity"];
	$bottleQ = $_POST["bottleQuantity"];
	$shipping = $_POST["shipping"];
	$password = $_POST["password"];
	
	if($shipping == 0) {
		$shippingName = "7 Day";
	} else if($shipping == 5) {
		$shippingName = "3 Day";
	} else {
		$shippingName = "Overnight";
	}
	
	
	echo "<center id=header>Your order has been placed!</center><br><br><center><div id='backendPassword'>Your password: " . $password . "</div>";
	echo "<table><tr id='tableHeader'><th>Item</th><th>Price</th><th>Quantity</th><th>Subtotal</th></tr>";
	echo "<tr><td>Shirt</td><td>$30</td><td>" . $shirtQ . "</td><td>$" . $shirtQ * 30 . "</td></tr>";
	echo "<tr><td>Hat</td><td>$20</td><td>" . $hatQ . "</td><td>$" . $hatQ * 20 . "</td></tr>";
	echo "<tr><td>Water Bottle</td><td>$15</td><td>" . $bottleQ . "</td><td>$" . $bottleQ * 15 . "</td></tr><tr><td colspan='4'> </td></tr>";
	echo "<tr id='shipping'><td colspan='2'>Shipping</td><td>" . $shippingName . "</td><td>$" . $shipping . "</td>";
	echo "<tr id='total'><td colspan='3'>Total</td><td>$" . ($shirtQ * 30 + $hatQ * 20 + $bottleQ * 15 + $shipping) . "</td></tr>";
	echo "</center></body></html>";

?>