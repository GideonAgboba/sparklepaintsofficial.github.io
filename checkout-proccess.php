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
<?php
	$firstname = $_POST['firstname'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$productinfo = $_POST['productinfo'];
	$service_provider = $_POST['service_provider'];
	$amount = $_POST['amount'];
	$txnid = $_POST['txnid'];
	$surl = $_POST['surl'];
	$furl = $_POST['furl'];

	$MERCHANT_KEY = "RcoUUtI6";
	$SALT = "uGKCebqTsm";

	$hash ='sha512'.'(' .$MERCHANT_KEY. '|' .$txnid. '|' .$total. '|' .$productinfo. '|' .$firstname. '|' .$email. '||||||||||||' .$SALT. ')';
	// $hash = sha512(key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5.||||||.$SALT);
	// $hash = strtolower(hash('sha512', $hashseq));
?>

<!DOCTYPE html>
<html>
<head>
	<title>Sparkle | Payment process</title>
	<script type="text/javascript">
		function submitForm(){
			var postform = document.forms.postform;
			postform.submit();
		}
	</script>
  <link href="sparkle-min.css" rel="stylesheet">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- <link rel="stylesheet" href="css/materialize.min.css"> -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
  
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/carousel.css">

    <link rel="icon" href="imgs/icon.png">
</head>
<body onload="submitForm();" class="bg-dark">




	<div class="container card bg-primary">
		<h2>Payment Gateway</h2>
		<div class="row">
			<div class="col-md-6">
				<h4>Transaction ID: <?php echo $_POST['txnid']; ?></h4>
			</div>
			<div class="col-md-6">
				<h4>Transaction AMOUNT: <?php echo $_POST['amount']; ?></h4>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<h4 class="text-white text-center">MERCHANT_KEY: <?php echo $MERCHANT_KEY; ?></h4>
			</div>
			<div class="col-md-6">
				<h4 class="text-white text-center">SALT: <?php echo $SALT; ?></h4>
			</div>
		</div>
	</div>

	<p class="text-center text-white">Please be patient. This proccess might take some time,<br>
	<p class="text-center text-danger">Please do not refresh this page, hit the back button or close this window</p></p>

	<form name="postform" action="https://test.payu.in/_payment" method="POST">
		<input type="text" name="key" value="<?php echo $MERCHANT_KEY; ?>">
		<input type="text" name="hash" value="<?php print_r($hash); ?>">
        <input type="hidden" placeholder="Txnid" name="txnid" value="<?php echo $txnid=rand(000000000, 999999999) ?>" class="form-control text-center text-muted validate" required />
        </i><input type="hidden" name="amount" value="<?php echo $total; ?>" placeholder="Amount" class="form-control text-center text-muted validate" style='border-style: hidden;font-size: 17px;' required />
        <input type="text" name="firstname" value="<?php echo $_COOKIE['ss'] ?>" placeholder="Firstname" class="form-control text-center text-muted validate" required />
        <input type="text" name="email" value="<?php echo $_COOKIE['us'] ?>" placeholder="Email" class="form-control text-center text-muted validate" required />
        <input type="text" name="phone" value="<?php echo $_POST['phone'] ?>" placeholder="Phone" class="form-control text-center text-muted validate" required />
        <input type="text" name="productinfo" value="<?php echo $_POST['productinfo'] ?>" placeholder="productinfo" class="form-control text-center text-muted validate" required />
        <input type="hidden" name="amount" value="<?php echo $total; ?>" placeholder="Amount" class="form-control text-center text-muted validate" style='border-style: hidden;font-size: 17px;' required />
        <input type="text" name="surl" placeholder="Success URL" class="form-control text-center text-muted validate" value="http://pay.indiancybercell.in/simple/success.php" required />
        <input type="text" name="furl" placeholder="Faliure URL" class="form-control text-center text-muted validate" value="http://pay.indiancybercell.in/simple/fail.php" required />
        <input type="reset" value="Reset" class="mt-1 mb-1 container-fluid text-center text-white bg-danger p-3">
        <input type="submit" value="Checkout" class="container-fluid text-center text-white green-body p-3">
    </form>





</body>
</html>