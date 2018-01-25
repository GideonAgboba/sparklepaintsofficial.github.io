<div class="modal fade details-7" id="details-7" tabindex="-1" role="dialog" aria-labelledby="details-7" aria-hidden="false">

	<div class="modal-content">
		<div class="">
			<div class="modal-header">
				<button class="close" type="button" data-dismiss="modal" aria-label="close">
				<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title text-center green-font"><i class="fa fa-handshake-o"></i> Make purchase:</h4>
			</div>

			<div class="modal-body">
				<div class="card">
						<form name="postform" action="checkout.php" method="POST" class="text-center m-2">
							<input placeholder="Txnid" class="form-control validate" type="hidden" name="txnid" value="<?php echo $txnid=rand(100000000000000,9999999999999999); ?>" required />
							<input placeholder="Amount" class="form-control validate text-center" type="number" name="amount" value="$total">
							<input placeholder="Fullname" class="form-control validate text-center" type="text" name="name" value="" required />
							<input placeholder="Email" class="form-control validate text-center" type="text" name="email" value="" required />
							<input placeholder="Phone" class="form-control validate text-center" type="number" name="phone" value="" required />
							<input placeholder="Productinfo" class="form-control validate text-center" type="text" name="Productinfo" value="" required />
							<input placeholder="Success URL" class="form-control validate text-center" type="text" name="surl" value="https://pay.indiancybercell.in/simple/success.php" required />
							<input placeholder="Failure URL" class="form-control validate text-center" type="text" name="furl" value="https://pay.indiancybercell.in/simple/success.php" required />
							<input type="submit" name="" class="btn green-body right" value="submit">
							<input type="reset" name="" class="btn orange right" value="reset">
							<input type="submit" name="" class="btn red right" value="Cancle">
						</form>
				</div>
			</div>
			
		</div>

		</div>
	</div>