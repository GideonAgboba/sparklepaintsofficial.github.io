<div class="modal fade details-7" id="details-7" tabindex="-1" role="dialog" aria-labelledby="details-7" aria-hidden="false">

	<div class=" modal-content">
		<div class="">
			<div class="modal-header mt-0">
				<button class="close" type="button" data-dismiss="modal" aria-label="close">
				<span aria-hidden="true" class=" modal-dialog ">&times;</span>
				</button>
			</div>

			<div class="">
				<section class="mt-5">
					<div class="row">
					<div class="col-lg-6">
						<div class=" col-lg-12">  
			                <div class="">
			                  <div class="card">
			                  <div class="card-image waves-effect waves-block waves-light">
			                    <img  src="imgs/pay.jpg" width="300px" height="300px">
			                  </div>
			                  <div class="card-content">
			                    <span class="card-title activator green-body text-center text-white container p-1">Pay Now <i class="fa fa-money text-white"></i></span>

			                    
			                  </div>
			                  <div class="card-reveal">
			                    <span class="card-title green-font">Make payments now<i class="fa fa-close right text-muted"></i></span>
			                    <div class="text-center">
			                    	<form name="postform" action="form_process.php" method="POST">
                                        <input type="text" placeholder="Txnid" name="txnid" value="<?php echo $txnid=rand(1000000000000,99999999999999) ?>" class="form-control text-center text-muted validate" required />
                                        <input type="text" name="amount" value="" placeholder="Amount" class="form-control text-center text-muted validate" required />
                                        <input type="text" name="firstname" value="" placeholder="Firstname" class="form-control text-center text-muted validate" required />
                                        <input type="text" name="email" value="" placeholder="Email" class="form-control text-center text-muted validate" required />
                                        <input type="text" name="phone" value="" placeholder="Phone" class="form-control text-center text-muted validate" required />
                                        <input type="text" name="productinfo" value="" placeholder="Product info" class="form-control text-center text-muted validate" required />
                                        <input type="text" name="surl" value="" placeholder="Success URL" class="form-control text-center text-muted validate" required />
                                        <input type="text" name="furl" value="" placeholder="Faliure URL" class="form-control text-center text-muted validate" required />
                                        <input type="submit" value="Checkout" class="container-fluid text-center text-white mt-1 mb-1 green-body p-3">
                                        <input type="reset" value="Reset" class="container-fluid text-center text-white bg-danger p-3">
                                    </form>
			                    </div>
			                  </div>
			                </div>
			                </div>
              			</div>
					</div>
					<div class="col-lg-6">
						<div class=" col-lg-12">  
			                <div class="">
			                  <div class="card">
			                  <div class="card-image waves-effect waves-block waves-light">
			                    <img  src="imgs/shutt.jpg" width="300px" height="300px">
			                  </div>
			                  <div class="card-content">
			                    <span class="card-title activator"><button class="btn green-body">Pay on Delivery</button><i class="fa fa-bars right green-font"></i></span>
			                    
			                  </div>
			                  <div class="card-reveal">
			                    <span class="card-title green-font">Make payments<i class="fa fa-close right text-muted"></i></span>
			                    <p class="text-center green-font">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			                  </div>
			                </div>
			                </div>
              			</div>
					</div>
				</div>
				</section>
			</div>
			
		</div>

		</div>
	</div>