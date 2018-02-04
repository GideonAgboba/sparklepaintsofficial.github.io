<?php 
/* Main page with two forms: sign up and log in */
require 'db.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Sign-Up/Login Form</title>
  <?php include 'css/css.html'; ?>
</head>

    <link rel="stylesheet" href="../css/bootstrap.min.css"> 
    <link rel="stylesheet" href="../font-awesome-4.7.0/css/font-awesome.min.css">
  <!-- <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'> -->
<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    if (isset($_POST['login'])) { 
    //user logging in
        require 'login.php';
        
    }
    
    elseif (isset($_POST['register'])) { 
    //user registering
        
        require 'register.php';
        
    }
}
?>
<body class="" style="background: transparent !important;">
  <div class="form text-white p-3" style="width: 80% !important;  position: absolute !important; top: 50% !important; left: 50% !important;transform: translate(-50%,-50%) !important;background: linear-gradient( rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3) ), url(imgs/bg2.jpg) !important;">
      <h3 class="text-white text-center">Welcome back!</h3>
      <hr class="bg-white text-white">
      <ul class="tab-group">
        <li class="tab"><a style="font-size: 30px;" href="#signup">Sign-Up</a></li>
        <li class="tab active"><a style="font-size: 30px;" href="#login">Log In</a></li>
      </ul>
      
      <div class="tab-content">

         <div id="login">
          <form action="index.php" method="post" autocomplete="off">
          
            <div class="field-wrap">
            <label style="font-size: 30px;">
              Email <i class="fa fa-envelope"></i><span class="req"></i></span>
            </label>
            <input style="font-size: 30px;" type="email" required class="form-control green-font p-3" name="email"/>
          </div>
          
          <div class="field-wrap mb-5">
            <label style="font-size: 30px;">
              Password <i class="fa fa-key"></i><span class="req"></span>
            </label>
            <input style="font-size: 30px;" type="password" required class="form-control text-muted p-3" name="password"/>
          </div>
          
          <p class="forgot text-white"><a style="font-size: 30px;" href="forgot.php" class="text-white btn-danger mb-0 btn justify-content-center my-auto d-flex">Forgot Password?</a></p>
          
          <button style="font-size: 30px;" class="btn container-fluid button p-4 m-0  button-block" name="login" />Log In</button>
          
          </form>

        </div>
          
        <div id="signup">
          <form action="index.php" method="post" autocomplete="off">
          
          <div class="top-row">
            <div class="field-wrap">
              <label style="font-size: 30px;">
                Fullname <i class="fa fa-user"></i><span class="req"></span>
              </label>
              <input style="font-size: 30px;" type="text" required class="form-control text-muted p-3" name='firstname' />
            </div>
        
            <div class="field-wrap">
              <label style="font-size: 30px;">
                Username <i class="fa fa-user-o"></i><span class="req"></span>
              </label>
              <input style="font-size: 30px;" type="text" required class="form-control text-muted p-3" name='lastname' />
            </div>
          </div>

          <div class="top-row">
            <div class="field-wrap">
              <label style="font-size: 30px;">
                Email <i class="fa fa-envelope"></i><span class="req"></span>
              </label>
              <input style="font-size: 30px;" type="email" required class="form-control text-muted p-3" name='email' />
            </div>
        
            <div class="field-wrap">
              <label style="font-size: 30px;">
                tel-phone <i class="fa fa-phone"></i><span class="req"></span>
              </label>
              <input style="font-size: 30px;" type="number" required class="form-control text-muted p-3" name='phone' />
            </div>
          </div>
          <div class="top-row">
            <div class="field-wrap">
            <label style="font-size: 30px;">
              Set Password <i class="fa fa-key"></i><span class="req"></span>
            </label>
            <input style="font-size: 30px;" type="password" required class="form-control text-muted p-3" name='password'/>
            </div>
        
            <div class="field-wrap">
            <label style="font-size: 30px;">
              Confirm Password <i class="fa fa-key"></i><span class="req"></span>
            </label>
            <input style="font-size: 30px;" type="password" required class="form-control text-muted p-3" name='cpassword'/>
            </div>
          </div>
          
          <button style="font-size: 30px;" type="submit" class="btn container-fluid button p-4 mt-2 button-block" name="register" />Register</button>
          
          </form>

        </div>  
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>

<style>
  body{
    zoom: 50% !important;
    font-size: 30px !important;
  }
</style>  