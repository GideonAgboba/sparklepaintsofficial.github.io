<?php  include 'header.php'; ?>
<?php
  $connect = mysqli_connect("localhost", "root", "", "products");
?>
      <nav class="navbar navbar-extended nav-content white fixed-top mt-5" style="z-index: 3000;" style="position: fixed !important;margin-bottom: 0px !important;">
      <ul class="tabs tabs-transparent justify-content-center my-auto d-flex">
        <li class="tab">
          <a class="nav-link green-font store-nav-item" href="#catemulsion">Emulsion / gloss <i class="fa fa-tint"></i></a>
        </li>
        <li class="tab">
          <a href="#cattexcote" class="nav-link green-font store-nav-item">Texcote <i class="fa fa-soundcloud"></i></a>
        </li>
      </ul>
    </nav>

<div id="catemulsion" class="green-body" style="border-style: none !important;padding-top: 0.8em !important;">
      <div class="col-lg-12 container-fluid green-body text-center">
          <div class="row container-fluid col-lg-12 mt-5">
<?php
      $query = "SELECT * FROM emulsion_exterior ORDER BY id ASC";
      $result = mysqli_query($connect, $query);
      if (mysqli_num_rows($result) >0) {
        while ( $row = mysqli_fetch_array($result)) {
    ?>
            <div class="container col-lg-3">  
                <div class="container-fluid">
                  <div class="card">
                  <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" height="400px" src="<?php echo $row['image'] ?>">
                  </div>
                  <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4"><?php echo $row['title']; ?><i class="fa fa-bars right text-muted"></i></span>
                    
                  </div>
                  <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4"><i class="fa fa-close right text-muted"></i></span>
                    <div class="col-lg-12 text-muted">
                      <h5>Emulsion-interior</h5>
                      <p class="">Price: <s class="text-danger">N5,000</s></p>
                      <b>Our price: N4,200</b>
                    </div>
                    <div class="col-lg-12 text-muted">
                      <h5>Emulsion-exterior</h5>
                      <p class="">Price: <s class="text-danger">N8,999</s></p>
                      <b>Our price: N8,500</b>

                    </div>
                    <div class="col-lg-12 text-muted">
                      <h5>Gloss</h5>
                      <p class="">Price: <s class="text-danger">N5,000</s></p>
                      <b>Our price: N4,500</b>
                    </div>
                    <hr class="container m-2">
                    <br>
                    <div class="col-lg-12">
                      <form action="index.php#test3">
                        <button type="submit" class="btn container-fluid green-body">Go to store</button>
                      </form>
                    </div>
                  </div>
                </div>
                </div>

                
              </div>
    <?php
        }
      }
    ?>
          </div>
      </div>
    </div>


<div id="cattexcote" class="green-body" style="border-style: none !important;padding-top: 0.8em !important;">
  <div class="col-lg-12 container-fluid green-body text-center">
          <div class="row container-fluid col-lg-12 mt-5">
<?php
      $query = "SELECT * FROM texcote_interior ORDER BY id ASC";
      $result = mysqli_query($connect, $query);
      if (mysqli_num_rows($result) >0) {
        while ( $row = mysqli_fetch_array($result)) {
    ?>
             <div class="container col-lg-3">  
                <div class="container-fluid">
                  <div class="card">
                  <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" height="400px" src="<?php echo $row['image'] ?>" style='width: 100% !important;'>
                  </div>
                  <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4"><?php echo $row['title']; ?><i class="fa fa-bars right text-muted"></i></span>
                    
                  </div>
                  <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4"><i class="fa fa-close right text-muted"></i></span>
                    <div class="col-lg-12 text-muted">
                      <h5>Texcote-interior</h5>
                      <p class="">Price: <s class="text-danger">₦6,500</s></p>
                      <b>Our price: ₦6,000</b>
                    </div>
                    <div class="col-lg-12 text-muted">
                      <h5>Texcote-exterior</h5>
                      <p class="">Price: <s class="text-danger">₦10,950</s></p>
                      <b>Our price: ₦10,500</b>

                    </div>
                    <hr class="container m-2">
                    <br>
                    <div class="col-lg-12">
                      <form action="index.php#test3">
                        <button type="submit" class="btn container-fluid green-body">Go to store</button>
                      </form>
                    </div>
                  </div>
                </div>
                </div>

                
              </div>
    <?php
        }
      }
    ?>
          </div>
      </div>
</div>