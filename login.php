<?php
  require 'db.php';
  session_start();

?>
<! DOCTYPE html>
<html>
<head>
<?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['login'])) {
      # user logging in 
      require 'log.php';
    }elseif (isset($_POST['register'])) {
      # user registering
      require 'register.php';
    }
  }

?>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>Sparkle | Login</title>
    <link href="sparkle-min.css" rel="stylesheet">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- <link rel="stylesheet" href="css/materialize.min.css"> -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/carousel.css">

    <link rel="icon" href="imgs/icon.png">
</head>
<body class="text-white" style="background: linear-gradient( rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8) ), url(imgs/bg2.jpg) !important;background-size: cover !important;">

  <div class="container p-4" style="position: absolute;top: 50%;left: 50%; transform: translate(-50%,-50%);border-radius: 10px;">
    <form class="container-fluid" method="POST" action="login.php">
      <h1 class="text-white text-center">LOGIN <i class="fa fa-sign-in"></i></h1>
      <hr class=" text-white bg-white">
      <input type="text" name="username" placeholder="Username" class="p-4 mb-2 text-center validate form-control" required />
      <input type="password" name="password" placeholder="Password" class="p-4 mb-2 text-center validate form-control" required />
      <button type="submit" class="btn text-muted bg-white container-fluid p-4 mb-2" name="login" style="font-size: 20px;">Proceed to login</button>
      <a href="register.php" class="text-center text-white btn bg-danger container-fluid p-4 mb-2">Dont have an account? click to Register</a>
      <a href="" class="btn btn-warning container-fluid p-4 mb-2 text-white">Forgot password? click to reset</a>
      <a href="#" class="text-white text-center justify-content-center my-auto d-flex">Like our facebook page Sparklepaints@2018</a>
    </form>
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