<?php
	session_start();
	$connect = mysqli_connect("localhost", "root", "", "products");
	if (isset($_POST["add_to_cart"])) {
		if(isset($_SESSION["shopping_cart"])){
			$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
			if (!in_array($_GET["id"], $item_array_id)) {
				 $count = count($_SESSION["shopping_cart"]);
				 $item_array = array(
						'item_id' => $_GET["id"],
						'item_name' => $_POST["hidden_name"],
						'item_description' => $_POST["hidden_description"],
						'item_price' => $_POST["hidden_price"],
						'item_quantity' => $_POST["quantity"]
						);
				 $_SESSION["shopping_cart"][$count] = $item_array;
			}
			else{
				echo '<script>alert("Item already added to cart")</script>';
				echo '<script>window.location = "emulsion-exterior.php"</script>';
			}
		}
		else{
			$item_array = array(
				'item_id' => $_GET["id"],
				'item_name' => $_POST["hidden_name"],
				'item_description' => $_POST["hidden_description"],
				'item_price' => $_POST["hidden_price"],
				'item_quantity' => $_POST["quantity"]
			);
			$_SESSION["shopping_cart"][0] = $item_array;
		}
	}

	if (isset($_GET["action"])) {
		if ($_GET["action"] == "delete") {
			foreach ($_SESSION["shopping_cart"] as $keys => $values) {
					if ($values["item_id"] == $_GET["id"]) {
						unset($_SESSION["shopping_cart"][$keys]);
				echo '<script>alert("Item deleted from cart!")</script>';
				echo '<script>window.location = "emulsion-exterior.php"</script>';
					}
			}
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>TEST</title>
</head>
<body>

			<div style="background-color: yellow; padding: 10px; width: 100%;">
				<h3 align="center">Order-Details</h3>
				<hr>
						<?php
							if (!empty($_SESSION["shopping_cart"])) {
								$total=0;
								foreach ($_SESSION["shopping_cart"] as $keys => $values) {
						?>
							<ul style="background-color: #fff; padding: 5px; display: block !important; list-style: none; text-align: center;">
								<li style="display: inline-block !important;"><?php echo $values["item_name"]; ?></li>
								<li style="display: inline-block !important;"> <?php echo $values["item_description"]; ?></li>
								<li style="display: inline-block !important;"> <?php echo $values["item_price"]; ?></li>
								<li style="display: inline-block !important;"> Quantity: <?php echo $values["item_quantity"]; ?></li>
								<li style="display: inline-block !important;"> <?php echo number_format($values["item_quantity"] * $values["item_price"], 2) ?></li>
								<li style="display: inline-block !important;"><a href="emulsion-exterior.php?action=delete&id=<?php  echo $values["item_id"]; ?>">Delete</a></li>
							</ul>
							<?php
									$total = $total + ($values["item_quantity"] * $values["item_price"]);
								}
							?>
								<li style="background-color: #fff; padding: 5px; display: block !important; list-style: none; text-align: center;">Total: N<?php echo number_format($total, 2); ?></li>
							<?php
							}
							?>
			</div>
			
	<div style="width: 700px; padding: 10px;background-color: red; margin: 0 auto;">
		<h3 align="center">SHOPPING CART</h3>
		<?php
			$query = "SELECT * FROM emulsion_exterior ORDER BY id ASC";
			$result = mysqli_query($connect, $query);
			if (mysqli_num_rows($result) >0) {
				while ( $row = mysqli_fetch_array($result)) {
		?>
			<div style="padding: 20px; width: 90%; background-color: grey; display: inline-block;">
				<form method="POST" action="emulsion-exterior.php?action=add&id=<?php echo $row["id"]; ?>">
					<img src="../<?php  echo $row['image']; ?>" style="width: 150px;height: 150px;">
					<h4><?php  echo $row["title"]; ?></h4>
					<i><?php echo $row["description"]; ?></i>
					<i>price: <s>N5,000</s></i>
					<p>N<?php echo $row["price"]; ?></p>
					<input type="number" align="center" style="width: 50px;" value="" name="quantity" required />
					<input type="hidden" name="hidden_name" value="<?php echo $row['title']; ?>" />
					<input type="hidden" name="hidden_description" value="<?php echo $row['description']; ?>" />
					<input type="hidden" name="hidden_price" value="<?php echo $row['price']; ?>" />
					<input type="submit" name="add_to_cart" style="margin-top: 5px;width: 100px; padding: 5px;" value="Add to cart" />
				</form>
			</div>
		<?php
				}
			}
		?>
	</div>
</body>
</html>

<?php
//	function array_column($array, $column_name){
//		$output = array();
//		foreach ($array as $keys => $values) {
//			$output[] = $values[$column_name];
//		}
//		return $output;
//	}
?>