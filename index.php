
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

    <link rel="icon" href="imgs/icon.png">
</head>
<body class="green-body text-white">


  <div id="test1" class=" bg-white white green-font ">
      <?php include 'home-first-section.php'; ?>
      <?php include 'quick-order.php'; ?>

      
      <?php include 'home-third-section.php'; ?>

      <?php include 'home-fourth-section.php'; ?>
  </div>










  <div id="test2" class="green-body">
      <?php include 'lab-content.php'; ?>
  </div>





  <div id="test3" class="green-body container-fluid p-4" style="zoom: 80% !important;">
    <?php include 'storenav.php'; ?>
    <?php include 'storenav-texcote.php'; ?>
    <?php include 'storenav-gloss.php'; ?>
  </div>
















































  <div id="test4" class="green-body" style="height: 100vh;">
    <?php
    $mysqli = mysqli_connect("localhost", "root", "", "accounts");
    $username = $_COOKIE['ss'];
    $result = $mysqli->query("SELECT * FROM users WHERE last_name='$username'");
     if ($result->num_rows !== 0) {
       include 'order.php';
     }else{
      echo "
            <div class='row justify-content-center my-auto d-flex bg-danger container-fluid p-2'>
              <h6 class='text-center text-white'>PLEASE LOGIN TO VIEW CART <i class='fa fa-shopping-cart'></i></h6>
              <button style='border: 0;' class='btn-sm ml-3 p-2 bg-primary text-white'>Refresh cart <i class='fa fa-refresh'></i></button>
            </div>
            ";
     }
     ?>
  </div>











<?php
  include 'nav.php';
?>
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