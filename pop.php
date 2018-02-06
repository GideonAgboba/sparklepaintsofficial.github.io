<?php
		
			$total = 0;
			$mysqli = new mysqli("localhost", "root", "", "products");
			if ($mysqli->connect_errno) {
				// echo "<script>alert('')</script>";
				echo "Failed connect(".$mysqli->connect_errno.")".$mysqli->connect_errno;
			}
			if (isset($_COOKIE['ss'])) {
				$teble_name = $_COOKIE['ss'];
			}else{
				$teble_name = "guest";
			}
			$query = $mysqli->query("SELECT id,title,price,description,image,quantity FROM $teble_name ");
			while ($row = $query->fetch_assoc()){
		
			$total =  $total + ($row["quantity"] * $row["price"]);
			}
			$title = 'Sparkle paints';

?>


<div class="modal fade details-7" id="details-7" tabindex="-1" role="dialog" aria-labelledby="details-7" aria-hidden="false">

	<div class=" modal-content">
		<div class="">
			<div class="modal-header mt-0">
				<button class="close" type="button" data-dismiss="modal" aria-label="close">
				<span aria-hidden="true" class=" modal-dialog "><i class="fa fa-close" style="background-color: #fff;"></i></span>
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
<span class="card-title activator green-body text-center text-white container p-1">Pay Now <i class="fa fa-handshake-o text-white"></i></span>


</div>
<div class="card-reveal">
<span class="card-title green-font">Make payments now <i class="fa fa-angle-down"></i> <i class="fa fa-close right text-muted"></i></span>
<div class="text-centertext-white">
	<section class="bg-dark p-1">
		<h6 class="text-white">Payment Details:</h6>
		<hr class="text-white bg-white container-fluid">
		<a class="col-lg-6 text-white">User: <i class="right mr-3"><?php echo $_COOKIE['ss'] ?></i></a>
		<br>
		<a class="col-lg-6 text-white">Amount:	<i class="right mr-3">N<?php echo $total ?></i></a>
		<br>
		<a class="col-lg-6 text-white">Orders:
			<?php
				$connect = mysqli_connect("localhost", "root", "", "products");
				$table_name =$_COOKIE['ss'];
				$query = "SELECT title,quantity FROM $table_name";
				$result = mysqli_query($connect, $query);
				if (mysqli_num_rows($result) >0) {
					while ( $row = mysqli_fetch_array($result)) {
			?>
				<i class="justify-content-end my-auto d-flex mr-3"><?php echo $row['quantity']; ?> <?php echo $row['title']; ?></i>
			<?php
					}
				}
			?></a>
			<br>
		<a class="col-lg-6 text-white">Phone:	<i class="right mr-3">
			<?php
				include 'db.php';
				$mail = $_COOKIE['us'];
				$result = $mysqli->query("SELECT * FROM users WHERE email='$mail'");

				if ( $result->num_rows > 0 ){ // User doesn't exist
				    $user = $result->fetch_assoc();
				    echo $user['phone'];
				}
			?>
		</i></a>
	</section>
	<form name="postform" action="checkout-proccess.php" method="POST">
        <input type="hidden" placeholder="Txnid" name="txnid" value="<?php echo $txnid=rand(000000000, 999999999) ?>" class="form-control text-center text-muted validate" required />
        </i><input type="hidden" name="amount" value="<?php echo $total; ?>" placeholder="Amount" class="form-control text-center text-muted validate" style='border-style: hidden;font-size: 17px;' required />
        <input type="text" name="firstname" value="<?php echo $_COOKIE['ss'] ?>" placeholder="Firstname" class="form-control text-center text-muted validate" required />
        <input type="text" name="email" value="<?php echo $_COOKIE['us'] ?>" placeholder="Email" class="form-control text-center text-muted validate" required />
        <input type="text" name="phone" value="" placeholder="Phone" class="form-control text-center text-muted validate" required />
        <input type="text" name="productinfo" value="" placeholder="productinfo" class="form-control text-center text-muted validate" required />
        <input type="hidden" name="amount" value="Amount: N<?php echo $title; ?>" placeholder="Amount" class="form-control text-center text-muted validate" style='border-style: hidden;font-size: 17px;' required />
        <input type="text" name="surl" placeholder="Success URL" class="form-control text-center text-muted validate" value="http://pay.indiancybercell.in/simple/success.php" required />
        <input type="text" name="furl" placeholder="Faliure URL" class="form-control text-center text-muted validate" value="http://pay.indiancybercell.in/simple/fail.php" required />
        <input type="reset" value="Reset" class="mt-1 mb-1 container-fluid text-center text-white bg-danger p-3">
        <input type="submit" value="Checkout" class="container-fluid text-center text-white green-body p-3">
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