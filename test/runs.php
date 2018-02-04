
			<div class="text-center container-fluid white p-3" style="margin: 0 auto; float: none; text-align: center;">
				<?php if (!empty($row["title"])) : ?>
					
				<?php endif ?>
				<div class="row col-lg-12" style="">

<?php
	$connect = mysqli_connect("localhost", "root", "", "products");
			$query = "SELECT * FROM cart ORDER BY id ASC";
			$result = mysqli_query($connect, $query);
			if (mysqli_num_rows($result) >0) {
				while ( $row = mysqli_fetch_array($result)) {
		?>
					<div class="col-lg-3 text-center bg-white p-3 mb-3">
						<div class="card">
						<img src="<?php echo $row['image']; ?>" class="img-responsive"/>
						<h5  class="text-muted"><?php echo $row["title"]; ?></h5>
						<i class="text-muted"><?php echo $row["description"]; ?></i>
						<i class="text-muted"><?php echo $row["price"]; ?> x <?php echo $row["quantity"]; ?></i>
						<i class="text-muted">N<?php echo number_format($row["quantity"] * $row["price"], 2) ?></i>
							<div class="p-4">
								<a onclick="confirm('Are you sure you want to delete item?')" href="?idd=<?php echo $row['id'] ?>" class="btn red btn-lg">Delete</a>


								<?php
	if (isset($_GET["idd"])) {
		$idd = $_GET["idd"];
		$res = $mysqli->query("delete from cart where id='$idd'");
		if ($res) {
			echo "<script>alert('item deleted from cart')</script>";
			header("Location: index.php");
		}else{
?>
	<script>
		alert("failed to delete item");
		window.location.href='index.php';
	</script>
<?php
		}
	}
?>


							</div>
					</div>
					</div>


		<?php
				}
			}
		?>
				</div>
			</div>
			<div class="container bg-white green-font p-2 mb-3">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</div>

















	<?php
	$connect = mysqli_connect("localhost", "root", "", "products");
	if (isset($_POST["add_to_cart"])) {
		$id = $_GET["id"];
		$img = $_POST['hidden_image'];
		$title = $_POST['hidden_name'];
		$description = $_POST['hidden_description'];
		$price = $_POST['hidden_price'];
		$quantity = $_POST['quantity'];

		$create= "
CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
";
		// $create = "CREATE TABLE 'ordereditems' (
		// 		  `title` varchar(255) NOT NULL,
		// 		  `description` text NOT NULL,
		// 		  `price` varchar(255) NOT NULL
		// 		) ENGINE=InnoDB DEFAULT CHARSET=latin1";
			mysqli_query($connect, $create);
		//$q = "INSERT INTO ordereditems (title,description,price,) VALUES ('$title', '$description', '$price');";
		if (!empty($_GET["id"])) {
			$q= "INSERT INTO `cart` (`id`, `title`, `price`, `description`, `image`, `quantity`) VALUES
($id, '$title', '$price', '$description', '$img', '$quantity');";
		mysqli_query($connect, $q) or die(mysqli_error($connect));
	}
	?>
	<div class="bg-warning text-white text-center">
		<?php
			$query = "SELECT * FROM cart ORDER BY id ";
			$result = mysqli_query($connect, $query);
			if (mysqli_num_rows($result) >0) {
				if ( $row = mysqli_fetch_array($result)) {
		?>
					<div class='bg-warning text-white text-center mt-3 p-4'><h5><?php echo  $row['quantity']; ?> <?php echo $row['title'] ?> has successfully been added to cart!</h5></div>
		<?php
				}
			}
		?>
	</div>
	<?php
	}else{
		// echo "<script>alert('failed')</script>";
	}
	?>




















































		<?php
	$connect = mysqli_connect("localhost", "root", "", "products");
	if (isset($_POST["add_to_cart"])) {
		$id = $_GET["id"];
		$img = $_POST['hidden_image'];
		$title = $_POST['hidden_name'];
		$description = $_POST['hidden_description'];
		$price = $_POST['hidden_price'];
		$quantity = $_POST['quantity'];

		$create= "
CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
";
		// $create = "CREATE TABLE 'ordereditems' (
		// 		  `title` varchar(255) NOT NULL,
		// 		  `description` text NOT NULL,
		// 		  `price` varchar(255) NOT NULL
		// 		) ENGINE=InnoDB DEFAULT CHARSET=latin1";
			mysqli_query($connect, $create);
		//$q = "INSERT INTO ordereditems (title,description,price,) VALUES ('$title', '$description', '$price');";
		if (!empty($_GET["id"])) {
			$q= "INSERT INTO `cart` (`id`, `title`, `price`, `description`, `image`, `quantity`) VALUES
($id, '$title', '$price', '$description', '$img', '$quantity');";
		mysqli_query($connect, $q) or die(mysqli_error($connect));
	}
	?>
	<div class="bg-warning text-white text-center">
		<?php
			$query = "SELECT * FROM cart ORDER BY id ";
			$result = mysqli_query($connect, $query);
			if (mysqli_num_rows($result) >0) {
				if ( $row = mysqli_fetch_array($result)) {
		?>
					<div class='bg-warning text-white text-center mt-3 p-4'><h5><?php echo  $row['quantity']; ?> <?php echo $row['title'] ?> has successfully been added to cart!</h5></div>
		<?php
				}
			}
		?>
	</div>
	<?php
	}else{
		// echo "<script>alert('failed')</script>";
	}
	?>

<! DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>Sparkle | Home</title>
    <link href="sparkle-min.css" rel="stylesheet">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/materialize.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
  
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/carousel.css">

      <nav class="navbar-expand green-body fixed-top">
      	<a href="index.php"><i class="fa fa-home brand-logo left ml-3 mt-3"></i></a>
      	<a href="#"><img src="" class="brand-logo center img-responsive" alt="Sparkle"></a>
      </nav>
			
      <a href="#"><i class="fa fa-shopping-cart brand-logo right mt-2"  href="#details-7" class="mt-2 container-fluid btn green-body white-text"  data-toggle="modal" data-target="#details-7" onclick="" style="font-size: 40px;color: #fff;position: fixed;top: 0px;right: 20px; z-index: 20000;"></i></a>
      <?php include 'pop.php'; ?>
	<div class="container-fluid green-body green-font row p-4">
		<h4 class="text-center text-white center container-fluid">Emulsion-interior</h4>
		<hr class="container-fluid">
		<?php
			$query = "SELECT * FROM emulsion_interior ORDER BY id ASC";
			$result = mysqli_query($connect, $query);
			if (mysqli_num_rows($result) >0) {
				while ( $row = mysqli_fetch_array($result)) {
		?>
			<div class="text-center " style="margin: 0 auto; float: none; text-align: center;">
				<div class="text-center bg-white p-5 mb-3">
					<form method="POST" action="emulsion-interior.php?action=add&id=<?php echo $row["id"]; ?>">
					<img src="<?php  echo $row['image']; ?>" style="width: 200px;height: 200px;">
					<h4><?php  echo $row["title"]; ?></h4>
					<i><?php echo $row["description"]; ?></i>
					<p>price: <s class="text-danger">N5,000</s></p>
					<p>Our price: N<?php echo $row["price"]; ?></p>
					<input type="number" align="center" style="width: 100%;" class="form-control text-center" placeholder="Quantity" value="" name="quantity" required />
					<input type="hidden" name="hidden_name" value="<?php echo $row['title']; ?>" />
					<input type="hidden" name="hidden_image" value="<?php echo $row['image']; ?>" />
					<input type="hidden" name="hidden_description" value="<?php echo $row['description']; ?>" />
					<input type="hidden" name="hidden_price" value="<?php echo $row['price']; ?>" /><br>
					<input type="submit" name="add_to_cart" class="btn green-body container-fluid mb-3" value="Add to cart" />
				</form>
				</div>
			</div>
		<?php
				}
			}
		?>
	</div>


  <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js?ver=1.11.2'></script>
    <script src="jquery/jquery.min.js"></script>
    <script src="popper/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/interaction.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/lodash.js/3.10.1/lodash.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/Ladda/0.9.8/spin.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/Ladda/0.9.8/ladda.min.js'></script>
<script  src="js/index.js"></script>
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" src="js/init.js"></script>
</body>
</html>
































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




























