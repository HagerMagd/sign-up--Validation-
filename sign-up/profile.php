<?php
session_start();
//if$_SESSION['username'] not exist go to sign-up page
if(!isset($_SESSION['username'])){
    header("location:index.php");
}
echo 'hello mr ' .  $_SESSION['username'] . "<br>".
 "your email is : " . $_SESSION['useremail'] .'<br>'.
" and your password is : " . $_SESSION['userpassword'] ."<br>" ;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- to log out and go sign-up page -->
    <a href="logout.php">logout</a>
</body>
</html>
