<?php
/* Log out process, unsets and destroys session variables */
session_start();
session_unset();
session_destroy();
$ss = $_SERVER['HTTP_COOKIE'];
setcookie("ss", $ss, time() -100000, '/dashboard/SPARKLE-WEB-master/', '', false, true );
setcookie("us", $ss, time() -100000, '/dashboard/SPARKLE-WEB-master/', '', false, true );
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Error</title>
  <?php include 'css/css.html'; ?>
    <link rel="stylesheet" href="../css/bootstrap.min.css"> 
    <link rel="stylesheet" href="../font-awesome-4.7.0/css/font-awesome.min.css">
</head>

<body style="background: linear-gradient( rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8) ), url(imgs/bg2.jpg);">
    <div class="form text-white pt-5" style="width: 80% !important;height: 80% !important;  position: absolute !important; top: 50% !important; left: 50% !important;transform: translate(-50%,-50%) !important;">
          <h1>Thanks for stopping by</h1>
              
          
          <a href="index.php"><button onclick="ref()" class="btn container-fluid bg-danger button p-4 mt-2 button-block" />Back</button></a>

    </div>
</body>
</html>
