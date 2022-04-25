<?php
include('config/app.php');
include('codes/auth.php');

$auth = new authCon;

include('includes/navbar.php');
?>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="assets/css/bootstrap5.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/themify-icons.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/jquery.fancybox.min.css">
  <link rel="stylesheet" href="contact.css">
  <title>CONTACT US</title>
  <link rel="icon" type="image/x-icon" href="images/logo.png">
 <!-- main -->
</head>
<main class="page">
 <div id="container">
    <div class="content">
      <div class="image-box">
       <img src="inTouch.png" alt=""> 
      </div>
    <form action="#">
      <div class="topic">Send us a message</div>
      <div class="input-box">
        <input type="text" required>
        <label>Enter your name</label>
      </div>
      <div class="input-box">
        <input type="text" required>
        <label>Enter your email</label>
      </div>
      <div class="message-box">
        <label>Enter your message</label>
         <textarea
            id="message"
            cols="30"
            rows="10"
            placeholder="Enter your message"
            required
          ></textarea>
      </div>
      <div class="input-box">
        <input type="submit" value="SUBMIT">
      </div>
    </form>
  </div>
  </div>
  </main>
<section></section>
    <!-- footer -->
    <footer class="page-footer">
      <p>
      &copy; <span id="date"></span>
        <span class="footer-logo">2022 Recipick</span> Built by
        <a href>CTRL INTELLEGENCE</a>
      </p>
    </footer>
    <script src="./js/app.js"></script>
  </body>
    <!-- JS -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.fancybox.min.js"></script>
<script src="js/scripts.js"></script>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap5.bundle.min.js"></script>
<script src="assets/js/scripts.js"></script>
</html>
