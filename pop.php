<div class="modal fade details-7" id="details-7" tabindex="-1" role="dialog" aria-labelledby="details-7" aria-hidden="false">

	<div class="modal-content">
		<div class="container-fluid">
			<div class="modal-header">
				<button class="close" type="button" data-dismiss="modal" aria-label="close">
				<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title text-center green-font"><i class="fa fa-handshake-o"></i> Make purchase:</h4>
			</div>

			<div class="modal-body">
				<div class="">
				<hr class="container">
						<?php
							if (!empty($_SESSION["shopping_cart"])) {
								$total=0;
								foreach ($_SESSION["shopping_cart"] as $keys => $values) {
						?>
							<ul class="bg-white jusitfy-content-center my-auto d-flex">
								<li class="green-font nav-tiem text-center p-4" style="display: inline-block !important;"><?php echo $values["item_name"]; ?></li>
								<li class="green-font nav-tiem text-center p-4" style="display: inline-block !important;"> <?php echo $values["item_description"]; ?></li>
								<li class="green-font nav-tiem text-center p-4" style="display: inline-block !important;"> <?php echo $values["item_price"]; ?></li>
								<li class="green-font nav-tiem text-center p-4" style="display: inline-block !important;"> Quantity: <?php echo $values["item_quantity"]; ?></li>
								<li class="green-font nav-tiem text-center p-4" style="display: inline-block !important;"> <?php echo number_format($values["item_quantity"] * $values["item_price"], 2) ?></li>
								<li class=" nav-tiem text-center p-4"><a class="btn red" href="emulsion-exterior.php?action=delete&id=<?php  echo $values["item_id"]; ?>">Delete</a></li>
							</ul>
							<?php
									$total = $total + ($values["item_quantity"] * $values["item_price"]);
								}
							?>
								<li style="background-color: #fff; padding: 5px; display: block !important; list-style: none; text-align: center;">Total: N<?php echo number_format($total, 2); ?></li>
							<?php
							}
							?>
							<? require 'emulsion-exterior.php'; ?>


					<div class="container modal-footer modal-dialog ">
						<button class="btn btn-danger mr-3" data-dismiss="modal">Cancle</button>	
						<button type="submit" name="send" class="btn green-body text-white">Checkout<span class="fa fa-shopping-cart"></span></button>
					</div>

			</div>
			</div>
			
		</div>

		</div>
	</div>