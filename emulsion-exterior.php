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
					<div class='bg-warning text-white text-center mt-3 p-2 container'><h5>Item successfully added to cart!</h5></div>
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
      	<a href="index.php#test3"><i class="fa fa-angle-left brand-logo left ml-3 mt-3"></i></a>
      	<a href="#"><img src="" class="brand-logo center img-responsive" alt="Sparkle"></a>
      	<a href="index.php#test4"><i class="fa fa-shopping-cart brand-logo right mt-3 mr-3 fa-2x" onclick=""></i></a>
      </nav>
			
      <!-- <a href="#"><i class="fa fa-shopping-cart brand-logo right mt-2"  href="#details-7" class="mt-2 container-fluid btn green-body white-text"  data-toggle="modal" data-target="#details-7" onclick="" style="font-size: 40px;color: #fff;position: fixed;top: 0px;right: 20px; z-index: 20000;"></i></a> -->
      <?php include 'pop.php'; ?>
	<div class="container-fluid green-body green-font row p-4">
		<?php
			$query = "SELECT * FROM emulsion_exterior ORDER BY id ASC";
			$result = mysqli_query($connect, $query);
			if (mysqli_num_rows($result) >0) {
				while ( $row = mysqli_fetch_array($result)) {
		?>
			<div class="text-center " style="margin: 0 auto; float: none; text-align: center;">
				<div class="text-center bg-white p-5 mb-3">
					<form method="POST" action="emulsion-exterior.php?action=add&id=<?php echo $row["id"]; ?>">
					<img src="<?php  echo $row['image']; ?>" style="width: 200px;height: 200px;">
					<h4><?php  echo $row["title"]; ?></h4>
					<i><?php echo $row["description"]; ?></i>
					<p>price: <s class="text-danger">N8,999</s></p>
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

