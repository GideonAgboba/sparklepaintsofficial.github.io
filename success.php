<?php
/* Displays all successful messages */
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Success</title>
  <?php include 'css/css.html'; ?>
</head>
<body>
<div class="form">
    <h1><?= 'Success'; ?></h1>
    <p>
    <?php 
    if( isset($_SESSION['message']) AND !empty($_SESSION['message']) ):
        echo $_SESSION['message'];    
    else:
        header( "location: index-login.php" );
    endif;
    ?>
    </p>
    <a href="index-login.php"><button class="btn container-fluid bg-danger button p-4 mt-2 button-block" />BACK</button></a>
</div>
</body>
</html>
