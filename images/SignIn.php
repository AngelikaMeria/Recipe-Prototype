<?php
include('config/app.php');
include('codes/auth.php');

$auth->isLoggedIn();
$conn = $db->conn;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="assets/css/bootstrap5.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="ccs/login.css">    
    <title>Log-In</title>
    <link rel="icon" type="image/x-icon" href="images/logo.png">
</head>
<body>
    <div class="container">
        <form action="" method="POST" class="login-email">
            <img src="images/logo.png" class="logo" alt="logo">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Sign-In</p>
            <?php include('message.php'); ?>
            <div class="input-group">
                <input type="text" placeholder="Enter Email" name="email">
            </div>
            <div class="input-group">
                <input type="password" placeholder="Enter Password" name="password">
            </div>
            <div class="input-group">
                <button type="submit" name="login" class="btn">Login</button>
            </div>
            <p class="login-register-text">Don't have an account? <a href="SignUp.php">Sign Up Here</a>.</p>
        </form>
    </div>
</body>
</html>