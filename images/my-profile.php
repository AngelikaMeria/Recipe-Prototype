<?php
include('config/app.php');
include_once('controllers/authCon.php');
include('codes/auth.php');
//include('includes/navbar.php');
$auth = new authCon;
$data = $auth->authDetail();
$conn = $db->conn;


$id = $_SESSION['user']['user_id'];
$sql = "SELECT * FROM users_account where id=$id";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);
$fname = $row['fname'];
$lname = $row['lname'];
$email = $row['email'];
$password = $row['password'];

if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "UPDATE users_account set fname='$fname',lname='$lname',email='$email',password='$password' WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        if(isset($_SESSION) === TRUE)
        {
            unset($_SESSION['authenticated']);
            unset($_SESSION['user']);
            redirect("Profile Updated", "SignIn.php");
        }
    } else {
        die(mysqli_error($conn));
    }

}
?>

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pat Hair Tricks</title>
    <link rel="stylesheet" href="assets/css/bootstrap5.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
  <link rel="stylesheet" href="myprofile.css">
  <title>Pat Hair Tricks</title>
  <link rel="icon" type="image/x-icon" href="images/logo.png">
    
</head>
<nav class="navbar navbar-expand-lg navbar navbar-light" style="background-color: #DFD683;">
    <div class="container">
    <a href="index.php" class="logo">
            <img src="images/logo2.png" alt="">
          </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?= base_url('homepage.php'); ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" id="service" href="services.php">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="Myappointment.php">Upload Recipe</a>
                </li>
                <?php if (isset($_SESSION['authenticated'])) : ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?= $_SESSION['user']['user_fname'] . " " . $_SESSION['user']['user_lname'] ?></a>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="my-profile.php">My Profile</a></li>
                            <li>
                                <form action="" method="POST">
                                    <button type="submit" name="logout" class="dropdown-item">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                <?php else : ?>
                    
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>
<div class="container">
    <div class="jumbotron">

    <form class="form-style-7">
<ul>
<li>

    <input type="text" name="name" maxlength="100" value="<?= $data['fname'] . ' ' . $data['lname']; ?>">
    <span>Your full name </span>
</li>
<li>
    <input type="email" name="email" maxlength="100" value="<?= $data['email']; ?>">
    <span>Your Email address</span>
</li>
<li>
    <input type="password" name="pass" maxlength="100" value="<?= $data['password']; ?>">
     <span>Password</span> 
</li>

<li>
        <div class="card-body">

            <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#editmodal">
                Update Profile
            </button>

        </div>
  
   

</li>
</ul>
 
</form>
            
      <!--  <h3>My Profile</h3>
        <h3>Full Name: <?= $data['fname'] . ' ' . $data['lname']; ?></h3>
        <h3>Email: <?= $data['email']; ?></h3>
        <h3>Password: <?= $data['password']; ?></h3>
                -->
        <!---Update button--->


    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="editmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Updating Profile</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="POST">
                    <div class="form-group">
                        <label>First Name:</label>
                        <input type="text" class="form-control" placeholder="Enter your Firstname" name="fname" value="<?php echo $fname ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" class="form-control" placeholder="Enter your lastname" name="lname" value="<?php echo $lname ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" placeholder="Enter your Email" name="email" value="<?php echo $email ?>" required>
                    </div>
                    <div class="form-group">
                        <b><label for="password">Password:</label></b>
                        <input class="form-control" id="password" name="password" placeholder="Enter Password" value="<?php echo $password ?>" type="text" required minlength="4" maxlength="21" data-toggle="password">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" name="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>


</div>
<!--    -------- Footer Section Start ------------- -->
<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <a href="index.php" class="logo foo-logo">
          <img src="images/logo2.png" alt="">
        </a>
        <nav class="foo-nav">
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
           <!---- <li><a href="testimonial.html">Testimonial</a></li>
            <li><a href="services.php">Service</a></li>---->
            <li><a href="html.html">TEAM</a></li>
          </ul>
        </nav>
       <!--- <div class="foo-social">
          <a href="https://www.facebook.com/PatHairTricksSalon"><i class="ti-facebook"></i></a>
          <!- <a href="#"><i class="ti-twitter-alt"></i></a>
            <a href="#"><i class="ti-vimeo-alt"></i></a> 
          <a href="https://www.instagram.com/pathairtricksalon/"><i class="ti-instagram"></i></a>
        </div>
        <p class="copyright">&copy; COPYRIGHT 2022 <a href="https://www.instagram.com/pathairtricksalon/">Pat Hair Tricks Salon</a> ALL RIGHTS RESERVED.</p>
      </div>
    </div>
  </div>--->
  <script>
    if (window.history.replaceState) {
      window.history.replaceState(null, null, window.location.href);
    }
  </script>
</footer>
<!--    -------- Footer Section End ------------- -->


<!-- JS -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.fancybox.min.js"></script>
<script src="js/scripts.js"></script>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap5.bundle.min.js"></script>
<script src="assets/js/scripts.js"></script>

</body>

</html>