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
<! DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>Sparkle | Home</title>
    <link href="sparkle-min.css" rel="stylesheet">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- <link rel="stylesheet" href="css/materialize.min.css"> -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
  
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/carousel.css">

      <nav class="navbar navbar-expand green-body fixed-top">
      	<a href="index.php"><i class="fa fa-home brand-logo left mt-3 ml-3"></i></a>
      	<a href="#"><img src="" class="brand-logo center img-responsive" alt="Sparkle"></a>
      </nav>
			
			
	<div class="container-fluid green-body green-font row p-4">
		<h4 class="text-center text-white center container-fluid">Emulsion-exterior</h4>
		<hr class="container-fluid">
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
					<p>price: <s class="text-danger">N5,000</s></p>
					<p>Our price: N<?php echo $row["price"]; ?></p>
					<input type="number" align="center" style="width: 100%;" class="form-control text-center" placeholder="Quantity" value="" name="quantity" required />
					<input type="hidden" name="hidden_name" value="<?php echo $row['title']; ?>" />
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
</script>
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