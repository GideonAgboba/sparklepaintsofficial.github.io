<?php
/* Displays user information and some useful messages */
session_start();

// Check if user is logged in using the session variable
if ( $_SESSION['logged_in'] != 1 ) {
  $_SESSION['message'] = "You must log in before viewing your profile page!";
  header("location: error.php");    
}
else {
    // Makes it easier to read
    $first_name = $_SESSION['first_name'];
    $last_name = $_SESSION['last_name'];
    $email = $_SESSION['email'];
    $active = $_SESSION['active'];
}

?>
<!DOCTYPE html>
<html>
<head>
  <title>Sign-Up/Login Form</title>
  <?php include 'css/css.html'; ?>
</head>

    <link rel="stylesheet" href="css/bootstrap.min.css"> 
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">

<body class="" style="background: linear-gradient( rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8) ), url(imgs/bg2.jpg);">
  <div class="form text-white container pt-5 " style="width: 80% !important;height: 80% !important;  position: absolute !important; top: 50% !important; left: 50% !important;transform: translate(-50%,-50%) !important;">

          <h1>Welcome<br></h1>
          
          <p>
          <?php 
     
          // Display message about account verification link only once
          if ( isset($_SESSION['message']) )
          {
              echo $_SESSION['message'];
              
              // Don't annoy the user with more messages upon page refresh
              unset( $_SESSION['message'] );
          }
          
          ?>
          </p>
          
          <?php
          
          // Keep reminding the user this account is not active, until they activate
          if ( !$active ){
              echo
              '<div class="info mt-2">
              Account is unverified, please confirm your email by clicking
              on the email link!
              </div>';
          }
          ?>
          <h2 style="text-transform: uppercase;"><?php echo $first_name ?></h2>
          <p><?= $email ?></p>
          
          
          <?php 
            if(isset($_COOKIE['ss'])){
              echo " <a href='logout.php'><button class='btn container-fluid bg-danger button p-4 mt-2 button-block' name='logout'/>Log Out | Back</button></a>";
            }else{
              echo " <a href='logout.php'><button class='btn container-fluid bg-danger button p-4 mt-2 button-block' name='logout'/>Log In | Back</button></a>";
            }

          ?>
    </div>
    
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/index.js"></script>
</body>
</html>


<style type="text/css">
  
#style-1::-webkit-scrollbar
{
  width: 12px;
  background-color: #F5F5F5;
}
::-webkit-scrollbar {
    width: 12px;
}
 
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
    border-radius: 10px;
}
 
::-webkit-scrollbar-thumb {
    border-radius: 10px;
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.5); 
}
</style>