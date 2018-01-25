
<div class="text-center container-fluid white p-3" style="margin: 0 auto; float: none; text-align: center;">
	<div class="row col-lg-12" style="padding-top: 4em;">

		<?php
			$mysqli = new mysqli("localhost", "root", "", "products");
			if ($mysqli->connect_errno) {
				// echo "<script>alert('')</script>";
				echo "Failed connect(".$mysqli->connect_errno.")".$mysqli->connect_errno;
			}
			$query = $mysqli->query("SELECT id,title,price,description,image,quantity FROM cart");
			while ($row = $query->fetch_assoc()){
			$total=0;
			$total = $total + ($row["quantity"] * $row["price"]);
		?>
		adewole: 08053530938, 08034048762, mr adesina: 08066765510, 08032036726, 08025662144, 08028668951, 08027573551;

<nav class="navbar green-body white fixed-top mt-5">
	<a class="text-muted fa-1x" style="float: left !important;">Total: N<?php echo number_format($total, 2); ?></a>
	<ul class="nav-content right">
		<li><a class="btn red text-white order-btn" href="?del=<?php echo $row['id'] ?>">Delete All</a></li>
		<li><a href="#details-7" data-toggle="modal" data-target="#details-7" class="btn green-body text-white order-btn">Checkout <i class="fa fa-shopping-cart"></i></a></li>
	</ul>
</nav>
		<?php  include 'pop.php'; ?>
		<div class="col-lg-3 text-center bg-white p-3 mb-3">
						<div class="card">
						<img src="<?php echo $row['image']; ?>" class="img-responsive"/>
						<h5  class="text-muted"><?php echo $row["title"]; ?></h5>
						<i class="text-muted"><?php echo $row["description"]; ?></i>
						<i class="text-muted"><?php echo $row["price"]; ?> x <?php echo $row["quantity"]; ?></i>
						<i class="text-muted">N<?php echo number_format($row["quantity"] * $row["price"], 2) ?></i>
							<div class="p-4">
								<a name="del" href="?idd=<?php echo $row['id'] ?>" class="text-white btn red btn-lg">Delete</a>
								
								<!-- <a type="submit" class="text-white btn red btn-lg">Delete</a> -->
							</div>
						</div>
		</div>
		<?php
		}
		if (isset($_GET['idd'])) {
			echo "<script>confirm('Are you sure you want to delete item?')</script>";
			$idd = $_GET['idd'];
			$del ="<script>document.write($idd)</script>";
			$result = $mysqli->query('DELETE FROM cart WHERE id=id LIMIT 1');
			 // $result = $mysqli->query('DELETE FROM cart WHERE id="$del" LIMIT 1');
			if ($result) {
				header("location: index.php#test4");
				echo "<script>
						alert('successfull delete of item id $idd');
						window.location.href='index.php#test4';
					</script>";

			}else{
				echo "<script>
						alert('Failed to delete item');
						window.location.href='index.php#test4';
					</script>";
			}
		}
		?>
	</div>
</div>

<?php
if (isset($_GET['del'])) {
			echo "<script>confirm('Are you sure you want to delete all items?')</script>";
			$result = $mysqli->query('DELETE FROM cart WHERE id=id');
			 // $result = $mysqli->query('DELETE FROM cart WHERE id="$del" LIMIT 1');
			if ($result) {
				header("location: index.php#test4");
				echo "<script>
						alert('All items successfully deleted');
						window.location.href='index.php#test4';
					</script>";

			}else{
				echo "<script>
						alert('Failed to delete items');
						window.location.href='index.php#test4';
					</script>";
			}
		}
?>

<style type="text/css">
	@media (max-width: 1200px){
		.order-btn{
		margin-right: 10px;
		padding: 0px;	
		width: 100%;
		font-size: 10px;
		text-align: center;
	}
	}
</style>