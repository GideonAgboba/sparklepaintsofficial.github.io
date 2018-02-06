<?php 
/* Main page with two forms: sign up and log in */
require 'db.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Sign-Up/Login Form</title>
</head>

    <link rel="stylesheet" href="css/bootstrap.min.css"> 
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
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
<body>
  <div class="form text-white p-3 container main-form">
      <!-- <h3 class="text-white text-center">Welcome back!</h3>
      <hr class="bg-white text-white"> -->
      <ul class="tab-group">
        <li class="tab"><a style="font-size: 30px;" href="#signup">Sign-Up</a></li>
        <li class="tab active"><a style="font-size: 30px;" href="#login">Log In</a></li>
      </ul>
      
      <div class="tab-content">

         <div id="login">
          <form action="index-login.php" method="post" autocomplete="off">
          
            <div class="row">
              <div class="field-wrap col-lg-6">
            <label style="font-size: 18px;">
              Email <i class="fa fa-envelope"></i><span class="req"></i></span>
            </label>
            <input style="font-size: 18px;" type="email" required class="form-control green-font p-3" name="email"/>
            </div>
          
          <div class="field-wrap col-lg-6">
            <label style="font-size: 18px;">
              Password <i class="fa fa-key"></i><span class="req"></span>
            </label>
            <input style="font-size: 18px;" type="password" required class="form-control text-muted p-3" name="password"/>
          </div>
            </div>
          <button style="font-size: 18px;" class="btn container-fluid button p-4 m-0  button-block" name="login" />Log In</button>
          
          <p class="text-white"><a style="font-size: 18px;" href="forgot.php" class="mt-2 container-fluid p-3 text-white bg-danger btn">Forgot Password?</a></p>
          </form>

        </div>
          
        <div id="signup">
          <form action="index-login.php" method="post" autocomplete="off">
          
          <div class="row">
            <div class="field-wrap col-lg-6">
              <label style="font-size: 18px;">
                Fullname <i class="fa fa-user"></i><span class="req"></span>
              </label>
              <input style="font-size: 18px;" type="text" required class="form-control text-muted p-3" name='firstname' />
            </div>
        
            <div class="field-wrap col-lg-6">
              <label style="font-size: 18px;">
                Username <i class="fa fa-user-o"></i><span class="req"></span>
              </label>
              <input style="font-size: 18px;" type="text" required class="form-control text-muted p-3" name='lastname' />
            </div>
          </div>

          <div class="row">
            <div class="field-wrap col-lg-6">
              <label style="font-size: 18px;">
                Email <i class="fa fa-envelope"></i><span class="req"></span>
              </label>
              <input style="font-size: 18px;" type="email" required class="form-control text-muted p-3" name='email' />
            </div>
        
            <div class="field-wrap col-lg-6">
              <label style="font-size: 18px;">
                Tel-phone <i class="fa fa-phone"></i><span class="req"></span>
              </label>
              <input style="font-size: 18px;" type="text" required class="form-control text-muted p-3" name='phone' />
            </div>
          </div>
          <div class="row">
            <div class="field-wrap col-lg-6">
            <label style="font-size: 18px;">
              Set Password <i class="fa fa-key"></i><span class="req"></span>
            </label>
            <input style="font-size: 18px;" type="password" required class="form-control text-muted p-3" name='password'/>
            </div>
        
            <div class="field-wrap col-lg-6">
            <label style="font-size: 18px;">
              Confirm Password <i class="fa fa-key"></i><span class="req"></span>
            </label>
            <input style="font-size: 18px;" type="password" required class="form-control text-muted p-3" name='cpassword'/>
            </div>
          </div>
          
          <button style="font-size: 18px;" type="submit" class="btn container-fluid button p-4 mt-2 button-block" name="register" />Register</button>
          
          </form>

        </div>  
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>
    <script type="text/javascript">
      $('.form').find('input, textarea').on('keyup blur focus', function (e) {
  
  var $this = $(this),
      label = $this.prev('label');

    if (e.type === 'keyup') {
      if ($this.val() === '') {
          label.removeClass('active highlight');
        } else {
          label.addClass('active highlight');
        }
    } else if (e.type === 'blur') {
      if( $this.val() === '' ) {
        label.removeClass('active highlight'); 
      } else {
        label.removeClass('highlight');   
      }   
    } else if (e.type === 'focus') {
      
      if( $this.val() === '' ) {
        label.removeClass('highlight'); 
      } 
      else if( $this.val() !== '' ) {
        label.addClass('highlight');
      }
    }

});

$('.tab a').on('click', function (e) {
  
  e.preventDefault();
  
  $(this).parent().addClass('active');
  $(this).parent().siblings().removeClass('active');
  
  target = $(this).attr('href');

  $('.tab-content > div').not(target).hide();
  
  $(target).fadeIn(600);
  
});
    </script>

</body>
</html>

<style>
.main-form{
  background: rgba(160, 179, 176, 0.25);
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
}
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

*, *:before, *:after {
  box-sizing: border-box;
}

html {
  overflow-y: scroll;
}

body {
      background: linear-gradient( rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8) ), url(imgs/bg2.jpg);
      background-size: cover; background-attachment: fixed !important;
      font-family: sans-serif;
}

a {
  text-decoration: none;
  color: #1ab188;
  -webkit-transition: .5s ease;
  transition: .5s ease;
}
a:hover {
  color: #179b77;
}


.tab-group {
  list-style: none;
  padding: 0;
  margin: 0 0 40px 0;

}
.tab-group:after {
  content: "";
  display: table;
  clear: both;
}
.tab-group li a {
  display: block;
  text-decoration: none;
  padding: 5px;
  background: rgba(160, 179, 176, 0.25);
  color: #a0b3b0;
  font-size: 20px;
  float: left;
  width: 50% !important;
  text-align: center;
  cursor: pointer;
  -webkit-transition: .5s ease;
  transition: .5s ease;
}
.tab-group li a:hover {
  background: #179b77;
  color: #ffffff;
}
.tab-group .active a {
  background: #1ab188;
  color: #ffffff;
}

.tab-content > div:last-child {
  display: none;
}

h1 {
  text-align: center;
  color: #ffffff;
  font-weight: 300;
  margin: 0 0 40px;
}

h2 {
    text-align: center;
    color: #1ab188;
    font-weight: 1000;
    margin: 0;
}

span {
    color: #1ab188;
    font-weight: bold;
}

p {
    text-align: center;
    color: #ffffff;
    margin: 0px 0px 50px 0px;
}

div.info {
    color: pink;
    display: box;
    text-align: center;
    padding: 5px;
    margin-top: -20px;
    margin-bottom: 15px;
    border: 1px solid red;
    background: #66131c;
}

label {
  position: absolute;
  -webkit-transform: translateY(6px);
          transform: translateY(6px);
  top: 10px;
  left: 25px;
  color: #25A187;
  -webkit-transition: all 0.25s ease;
  transition: all 0.25s ease;
  -webkit-backface-visibility: hidden;
  pointer-events: none;
}
label .req {
  color: #25A187;
}

label.active {
  color: #fff;
  margin-top: 0px;
  -webkit-transform: translateY(50px);
          transform: translateY(50px);
  left: 25px;
  font-size: 14px;
}
label.active .req {
  opacity: 0;
}

label.highlight {
  color: #fff;
}
label.focus {
  color: #fff;
}

input, textarea {
  font-size: 18px;
  display: block;
  width: 100%;
  height: 100%;
  padding: 10px;
  text-align: center;
  background: none;
  background-image: none;
  border: 1px solid #a0b3b0;
  color: #ffffff;
  border-radius: 0;
  -webkit-transition: border-color .25s ease, box-shadow .25s ease;
  transition: border-color .25s ease, box-shadow .25s ease;
}
input:focus, textarea:focus {
  outline: 0;
  border-color: #1ab188;
}

textarea {
  border: 2px solid #a0b3b0;
  resize: vertical;
}

.field-wrap {
  position: relative;
  margin-bottom: 40px;
}

.top-row:after {
  content: "";
  display: table;
  clear: both;
}
.top-row > div {
  float: left;
  width: 48%;
  margin-right: 4%;
}
.top-row > div:last-child {
  margin: 0;
}

.button {
  border: 0;
  outline: none;
  border-radius: 0;
  padding: 15px 0;
  font-size: 2rem;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: .1em;
  background: #1ab188;
  color: #ffffff;
  -webkit-transition: all 0.5s ease;
  transition: all 0.5s ease;
  -webkit-appearance: none;
}
.button:hover, .button:focus {
  background: #179b77;
}

.button-block {
  display: block;
  width: 100%;
}
</style>  