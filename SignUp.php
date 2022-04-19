<?php
include('config/app.php');
include('codes/auth.php');
$auth->isLoggedIn();

//include('includes/header.php');
//include('includes/navbar.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet" href="assets/css/bootstrap5.min.css">
    <link rel="stylesheet" href="ccs/reg.css"> 
    <title>Register</title>
    <link rel="icon" type="image/x-icon" href="images/logo.png">
</head>

<body>
        <div class="container">
            <form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Sign-Up</p>
                    <?php include('message.php'); ?>
                                <div class="input-group">
                                    <input type="text" placeholder="First Name"  name="fname" required>
                                </div>
                                <div class="input-group">
                                    <input type="text" placeholder="Last Name"  name="lname" required>
                                </div>
                                <div class="input-group">
                                    <input type="text" placeholder="Enter Email Address"  name="email" required>
                                </div>
                                <div class="input-group">
                                    <input type="password" placeholder="Enter Password"  name="password" required>
                                </div>
                                <div class="input-group">
                                    <input type="password" placeholder="Confrim Password"  name="cpassword" required>
                                </div>
                                <div class="input-group">
                                    <button type="submit" name="register" class="btn">Register</button>
                                </div>
                                <p class="login-register-text">Have an account? <a href="SignIn.php">Sign In Here</a>.</p>
                            </form>
                        </div>
                </div>
            </div>
        </div>
    </dlv>
</body>
</html>