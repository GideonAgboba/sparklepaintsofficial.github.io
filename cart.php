
	<h3>Order Details</h3>
	<div class="table-responsive">
		<table class="table table-bordered">
			<tr>
				<th width="30%">Item name</th>
				<th width="20%">Item description</th>
				<th width="15%">Item quantity</th>
				<th width="10%">Item price</th>
				<th width="10%">Total</th>
				<th width="5%">Action</th>
			</tr>
			<?php
				if (!empty($_SESSION["shopping_cart"])) {
					$total = 0;
					foreach ($_SESSION["shopping_cart"] as $keys => $values) {
						
			?>
				<tr>
					<td><?php echo $values["item_name"]; ?></td>
					<td><?php echo $values["item_description"]; ?></td>
					<td><?php echo $values["item_quantity"]; ?></td>
					<td><?php echo $values["item_price"]; ?></td>
					<td><?php echo number_format($values["item_quantity"] * $values["item_price"], 2) ; ?></td>
					<td><a href="cart.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="btn btn-danger">Delete item</span></a></td>
				</tr>
			<?php
				 $total = $total + ($values["item_quantity"] * $values["item_price"]);
			
					}
			?>
				<tr>
					<td colspan="3" align="center">Total</td>
					<td align="center">N <?php echo number_format($total, 2); ?></td>
				</tr>
				}
			?>
		</table>
	</div>

<?php include 'emulsion_exterior.php'; ?>