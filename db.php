<?php
/* Databasr connection settions for login */
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'accounts';
$mysqli = new mysqli($host, $user, $pass, $db) or die($mysqli->error);
?>