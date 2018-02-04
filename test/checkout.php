<form name="postform" action="form_process.php" method="POST">
	<input type="text" placeholder="Txnid" name="txnid" value="<?php echo $txnid=rand(1000000000000,99999999999999) ?>" class="form-control text-center text-muted validate" required />
	<input type="text" name="amount" value="" placeholder="Amount" class="form-control text-center text-muted validate" required />
	<input type="text" name="firstname" value="" placeholder="Firstname" class="form-control text-center text-muted validate" required />
	<input type="text" name="email" value="" placeholder="Email" class="form-control text-center text-muted validate" required />
	<input type="text" name="phone" value="" placeholder="Phone" class="form-control text-center text-muted validate" required />
	<input type="text" name="productinfo" value="" placeholder="Product info" class="form-control text-center text-muted validate" required />
	<input type="text" name="surl" value="" placeholder="Success URL" class="form-control text-center text-muted validate" required />
	<input type="text" name="furl" value="" placeholder="Faliure URL" class="form-control text-center text-muted validate" required />
	<input type="submit" class="container-fluid text-center text-white validate">
	<input type="reset" class="container-fluid text-center text-white validate">
</form>