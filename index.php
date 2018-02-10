
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

    <link rel="icon" href="imgs/icon.png">
<script src="js/loader.js"></script>
<script src="js/loadermat.js"></script>
<script src="jquery/jquery.min.js"></script>
<script src="popper/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/interaction.js"></script>
<script  src="js/index.js"></script>
<script src="js/materialize.min.js"></script>
<script src="js/init.js"></script>

<script>
  //paste this code under the head tag or in a separate js file.
  // Wait for window load
  $(window).load(function() {
    // Animate loader off screen
    $(".se-pre-con").fadeOut("slow");;
  });
</script>
</head>
<body class="green-body text-white">
  <?php include 'pre.php'; ?>
  

<?php
  include 'nav.php';
?>

  <div id="test1" class=" bg-white white green-font ">
    <?php include 'home-first-section.php'; ?>

        <?php include 'home-second-section.php'; ?>
        <?php include 'home-fifth-section.php'; ?>
        <?php include 'home-third-section.php'; ?>

        <?php include 'home-fourth-section.php'; ?>
    <!--Footer-->
    <footer class="green-font center-on-small-only   white ">

        <!--Footer Links-->
        <div class="container">
            <div class="row">

                <!--First column-->
                <div class="col-lg-3 col-md-6">
                    <h5 class="title font-bold mt-3 mb-4">ABOUT SPARKLE PAINTS</h5>

                    <p>Material Design for Bootstrap (MDB) is a powerful Material Design UI KIT for most popular HTML, CSS,
                        and JS framework - Bootstrap.</p>
                </div>
                <!--/.First column-->

                <hr class="w-100 clearfix d-sm-none">

                <!--Second column-->
                <div class="col-lg-2 col-md-6 ml-auto">
                    <h5 class="title font-bold mt-3 mb-4">Recent Trips</h5>
                    <ul>
                        <li>
                            <a href="#!">Balkans</a>
                        </li>
                        <li>
                            <a href="#!">Tatra Mountains</a>
                        </li>
                        <li>
                            <a href="#!">Norway Fjords</a>
                        </li>
                        <li>
                            <a href="#!">Baikal Lake</a>
                        </li>
                    </ul>
                </div>
                <!--/.Second column-->

                <hr class="w-100 clearfix d-sm-none">

                <!--Third column-->
                <!--/.Third column-->

                <hr class="w-100 clearfix d-sm-none">

                <!--Fourth column-->
                <div class="col-lg-2 col-md-6 ml-auto ">
                    <h5 class="title font-bold mt-3 mb-4">Follow me on</h5>
                    <ul>
                        <li>
                            <a href="#!"><i class="fa fa-facebook"></i> Facebook</a>
                        </li>
                        <li>
                            <a href="#!"><i class="fa fa-instagram"></i> Instagram</a>
                        </li>
                        <li>
                            <a href="#!"><i class="fa fa-twitter"></i> Twitter</a>
                        </li>
                        <li>
                            <a href="#!"><i class="fa fa-google"></i>Gmail</a>
                        </li>
                    </ul>
                </div>

                <!--/.Fourth column-->

                <hr class="w-100 clearfix d-sm-none">


            </div>
        </div>
        <!--/.Footer Links-->

    </footer>
    <!--/.Footer-->
  </div>










  <div id="test2" class="green-body">
      <?php include 'lab-content.php'; ?>
  </div>





  <div id="test3" class="green-body container-fluid " style="zoom: 80% !important;">
    <?php include 'storenav.php'; ?>
    <?php include 'storenav-texcote.php'; ?>
    <?php include 'storenav-gloss.php'; ?>
  </div>








































  <div id="test4" class="green-body" style="height: 100vh;">
    <?php
    $mysqli = mysqli_connect("localhost", "root", "", "accounts");
    $username = $_COOKIE['ss'];
    $result = $mysqli->query("SELECT * FROM users WHERE last_name='$username'");
     if (isset($_COOKIE['ss'])) {
       include 'order.php';
     }else{
      echo "
            <div class='row justify-content-center my-auto d-flex bg-danger container-fluid p-3'>
              <h6 class='text-center text-white'>PLEASE LOGIN TO VIEW CART <i class='fa fa-shopping-cart'></i></h6>
            </div>
            ";
     }
     ?>
  </div>




</body>
</html>
