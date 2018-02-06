<div id="texcote" class="green-body container-fluid">
    <div class="row container-fluid">
    	<div class=" container-fluid green-body" style="margin:0 auto; float: none;">
    <div class="row green-body">
      <div class="col-lg-6 pt-2 green-font">
        <div class="card card-main container">
          <div class="card-img">
            <img src="imgs/maxresdefault.jpg" class=" img-responsive pb-2">
          </div>
          <div class="card-body">
          <h4 class="text-center green-font container-fluid mt-5 mb-0">Texcote-interior</h4>
          </div>
          <div class="card-foot p-4">

            <form action="index.php#test3" method="POST" class="form-group white " style="border-style: none;">

            <?php
              $output = NULL;
              if (isset($_POST["search_eml_int"])) {
                $mysqli = NEW mysqli("localhost", "root", "", "products");
                $search_eml_int = $mysqli->real_escape_string($_POST["search_eml_int"]);
                $resultSet = $mysqli->query("SELECT * FROM texcote_interior WHERE title = '$search_eml_int'");
                if ($resultSet->num_rows > 0) {
                  while ($rows = $resultSet->fetch_assoc()) {
                    $title = $rows["title"];
                    $des = $rows["description"];
                    $price = $rows["price"];
                    $image = $rows["image"];

                    $output = "<div class='container-fluid p-2 m-0' style='border-radius: 3px; background-image: url($image) !important;background-size:cover !important;'>
                                <div class='row justify-content-center my-auto d-flex'>
                                  <i style='font-size: 20px;' class='my-auto d-flex text-white left'>$title N$price</i>
                                  <a href='#' class='btn green-body justify-content-end my-auto d-flex'>Add to cart</a>
                                </div>
                              </div>
                              ";
                  }
                }else{
                  // $output = "<script>alert('No result found')</script>";
                    $output = "<div class='bg-danger container-fluid p-2 m-0' style='border-radius: 3px;'>
                                <div class='row justify-content-center my-auto d-flex'>
                                  <i style='font-size: 20px;' class='text-white left'>No result found</i>
                                </div>
                              </div>
                              ";
                }
              }
            ?>

            <input type="text" placeholder="Search item..." name="search_eml_int" value="" class="text-center validate form-control" style="font-size: 20px !important;width: 70% !important;margin: 0 auto !important;border-bottom: 5px solid #25A187 !important;">
          <?php echo $output; ?>
            </form>
            <a href="texcote-interior.php" target="_blank" class="btn green-body justify-content-center my-auto d-flex container-fluid" style="height: 60px;padding-top: 15px;">Go to store <i class="fa fa-shopping-cart"></i></a>
            <!-- <form action="index.php#test3" method="POST" class="form-group white p-2" style="border-style: none;">
              <button type="submit" name="emulsion-interior" class="btn green-body justify-content-center my-auto d-flex container-fluid" style="height: 60px; font-size: 17px;">Go to store <i class="fa fa-shopping-cart"></i></button>
            </form> -->
          </div>
        </div>
      </div>

      
      <div class="col-lg-6 pt-2 green-font">
        <div class="card card-main container">
          <div class="card-img">
            <img src="imgs/stoc.jpg" class=" img-responsive pb-2">
          </div>
          <div class="card-body">
          <h4 class="text-center green-font container-fluid mt-5 mb-0">Texcote-exterior</h4>
          </div>
          <div class="card-foot p-4">

            <form action="index.php#test3" method="POST" class="form-group white " style="border-style: none;">

            <?php
              $output = NULL;
              if (isset($_POST["search_eml_ext"])) {
                $mysqli = NEW mysqli("localhost", "root", "", "products");
                $search_eml_ext = $mysqli->real_escape_string($_POST["search_eml_ext"]);
                $resultSet = $mysqli->query("SELECT * FROM texcote_exterior WHERE title = '$search_eml_ext'");
                if ($resultSet->num_rows > 0) {
                  while ($rows = $resultSet->fetch_assoc()) {
                    $title = $rows["title"];
                    $des = $rows["description"];
                    $price = $rows["price"];
                    $image = $rows["image"];

                    $output = "<div class='container-fluid p-2 m-0' style='border-radius: 3px; background-image: url($image) !important;background-size:cover !important;'>
                                <div class='row justify-content-center my-auto d-flex'>
                                  <i style='font-size: 20px;' class='my-auto d-flex text-white left'>$title N$price</i>
                                  <a href='#' class='btn green-body justify-content-end my-auto d-flex'>Add to cart</a>
                                </div>
                              </div>
                              ";
                  }
                }else{
                  // $output = "<script>alert('No result found')</script>";
                    $output = "<div class='bg-danger container-fluid p-2 m-0' style='border-radius: 3px;'>
                                <div class='row justify-content-center my-auto d-flex'>
                                  <i style='font-size: 20px;' class='text-white left'>No result found</i>
                                </div>
                              </div>
                              ";
                }
              }
            ?>

            <input type="text" placeholder="Search item..." name="search_eml_ext" value="" class="mb-0 text-center validate form-control" style="font-size: 20px !important;width: 70% !important;margin: 0 auto !important;border-bottom: 5px solid #25A187 !important;">
          <?php echo $output; ?>
            </form>
            <a href="texcote-exterior.php" target="_blank" class="btn green-body justify-content-center my-auto d-flex container-fluid" style="height: 60px;padding-top: 15px;">Go to store <i class="fa fa-shopping-cart"></i></a>
            <!-- <form action="index.php#test3" method="POST" class="form-group white p-2" style="border-style: none;">
              <button type="submit" name="emulsion-exterior" class="btn green-body justify-content-center my-auto d-flex container-fluid" style="height: 60px; font-size: 17px;">Go to store <i class="fa fa-shopping-cart"></i></button>
            </form> -->
          </div>
        </div>
      </div>

    </div>
  </div>
    </div>
</div>


<style type="text/css">

.card-main{
  margin: 0 auto;
  float: none;
  margin-bottom: 2em !important;
  border-radius: 20px;
}
  .card-img{
    position: absolute;
    top: 0px;
    left: 0px;
    right: 0px;
    height: 30em;
  }
  .card-img img{
    border-style: none;
    border-top-left-radius: 20px;
    border-top-right-radius: 20px;
    width: 100%;
    height: 100%;
  }
  .card-body{
    background: transparent;
    padding-top: 26em;
  }
  .card-body h4{
    font-size: 28px;
    font-family: sans-serif;
  }
  .card-body i{
    font-family: sans-serif;
    font-size: 16px;
  }
  .card-body p{
    font-family: sans-serif;
    font-size: 20px;
    margin-bottom: 0px !important;
  }
  .card-foot{
    margin-top: -30px !important;
  }
</style>
