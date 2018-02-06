<?php
/* Log out process, unsets and destroys session variables */
  if (isset($_POST['clear_cookie'])) {
    session_start();
    session_unset();
    session_destroy();
    $ss = $_SERVER['HTTP_COOKIE'];
    setcookie("ss", $ss, time() -100000, '', '', false, true );
    setcookie("us", $ss, time() -100000, '', '', false, true );
  }
?>

<script type="text/javascript">
	alert('Logout SUCCESSFUL');
	window.location= 'index.php';
</script>

<style type="text/css">
	body{
		background-color: red;
	}
</style>