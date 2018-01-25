<?php  include 'header.php'; ?>
<?php
  $connect = mysqli_connect("localhost", "root", "", "products");
?>
      <nav class="navbar navbar-extended nav-content white fixed-top mt-5" style="z-index: 3000;" style="position: fixed !important;margin-bottom: 0px !important;">
      <ul class="tabs tabs-transparent justify-content-center my-auto d-flex">
        <li class="tab">
          <a class="nav-link green-font store-nav-item" href="#catemulsion">Emulsion/gloss <i class="fa fa-tint"></i></a>
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
            <div class="col-lg-3 p-2" ontouchstart="this.classList.toggle('hover');">
                <div class="container">
                    <div class="front" style="background-image: url(<?php echo $row["image"];  ?>)">
                      <img src="">
                        <div class="inner">
                            <p><?php echo $row["title"]; ?></p>
                        </div>
                    </div>
                    <div class="back">
                        <div class="inner">
                          <i>Interior: N4,200</i>
                          <i>Exterior: N8,500</i>
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
          <div class="row container-fluid col-lg-12">
<?php
      $query = "SELECT * FROM glos ORDER BY id ASC";
      $result = mysqli_query($connect, $query);
      if (mysqli_num_rows($result) >0) {
        while ( $row = mysqli_fetch_array($result)) {
    ?>
            <div class="col-lg-3 p-2" ontouchstart="this.classList.toggle('hover');">
                <div class="container">
                    <div class="front" style="background-image: url(<?php echo $row["image"];  ?>)">
                      <img src="">
                        <div class="inner">
                            <p><?php echo $row["title"]; ?></p>
                        </div>
                    </div>
                    <div class="back">
                        <div class="inner">
                          <h2 class="text-white"><?php echo $row["description"]; ?></h2>
                          <i>Price: <s class="text-danger">N5,200</s></i>
                          <p>Our price: N<?php echo $row["price"]; ?></p>
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