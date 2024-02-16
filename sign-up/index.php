<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sign-up-style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>Sign Up</title>
</head>
<body>
    <div class="main-div">
        <div class="main-decor">
            <div class="decor"></div>
        </div>
        <div class="container">
        <?php 
        //show errors for users if exist
        if(isset($_SESSION['errors'])) {
        foreach($_SESSION['errors'] as $error):
            echo $error;
            ?>
        <?php endforeach; }
        //to delete errors when reload page
         unset($_SESSION['errors']); 
        ?>
          

            <h3>Have an account?</h3>
            <button>Log in</button>
        </div>
        <div class="sheet" >
            <form action="validation.php" method="post">
                <input type="text" placeholder="ENTER YOUR NAME" name="user_name" >
                <input type="email" placeholder="ENTER YOUR EMAIL"  name="user_email">
                <input type="password" placeholder=" ENTER YOUR Password" name="password">
                <input type="password" placeholder=" CONFIRM YOUR Password" name="c_p" >
                
                <input type="submit" value="Sign Up" class="btn">
             
            </form>
        </div>
    </div>
</body>
</html>