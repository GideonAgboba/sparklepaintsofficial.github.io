<?php
/* User login process, checks if user exists and password is correct */

// Escape email to protect against SQL injections
$email = $mysqli->escape_string($_POST['email']);
$result = $mysqli->query("SELECT * FROM users WHERE email='$email'");

if ( $result->num_rows == 0 ){ // User doesn't exist
    $_SESSION['message'] = "User with that email doesn't exist!";
    header("location: error.php");
}
else { // User exists
    $user = $result->fetch_assoc();

    if ( password_verify($_POST['password'], $user['password']) ) {
        $_SESSION['email'] = $user['email'];
        $_SESSION['first_name'] = $user['first_name'];
        $_SESSION['last_name'] = $user['last_name'];
        $_SESSION['phone'] = $user['phone'];
        $_SESSION['active'] = $user['active'];
        

$username = $user['last_name'];
$connect = mysqli_connect("localhost", "root", "", "products");
$create= "
        CREATE TABLE `$username` (
          `id` int(11) NOT NULL,
          `title` varchar(255) NOT NULL,
          `price` varchar(255) NOT NULL,
          `description` text NOT NULL,
          `image` varchar(255) NOT NULL,
          `quantity` varchar(255) NOT NULL
        ) ENGINE=InnoDB DEFAULT CHARSET=latin1;
        ";
mysqli_query($connect, $create); 
        
        /* get users firstname */
        // $res = $mysqli->query("SELECT * FROM users WHERE email='$email'");
        // while ($row = fetch($res)) {
        //     $ss = $row['first_name '];
        //  }

            // $connect = mysqli_connect("localhost", "root", "", "accounts");
            // $query = "SELECT * FROM users WHERE email='$email'";
            // $result = mysqli_query($connect, $query);
            // if (mysqli_num_rows($result) >0) {
            //     while ( $row = mysqli_fetch_array($result)) {
            //         $ss = $row['first_name'];
            //     }
        $ss = $user['last_name'];
        // $ss = md5( rand(0,1000));
        $us = $_POST['email'];
        $_COOKIE['ss'] = setcookie("ss", $ss, time() + 60 * 60 * 60 * 365, '', '', false, true );
        $_COOKIE['us'] = setcookie("us", $us, time() + 60 * 60 * 60 * 365, '', '', false, true );
        // This is how we'll know the user is logged in
        $_SESSION['logged_in'] = true;

        header("location: index.php");
    }
    else {
        $_SESSION['message'] = "You have entered wrong password, try again!";
        header("location: error.php");
    }
}

