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
  <link rel="stylesheet" href="style.css">
  <title>Pat Hair Tricks</title>
  <link rel="icon" type="image/x-icon" href="images/logo.png">
 <!-- main -->
 <main class="page">
      <form role="search" id="form">
        <input type="search" id="query" name="q"
         placeholder="Search..."
         aria-label="Search through site content">
        <button class="search">
          <svg viewBox="0 0 1024 1024"><path class="path1" d="M848.471 928l-263.059-263.059c-48.941 36.706-110.118 
            55.059-177.412 55.059-171.294 0-312-140.706-312-312s140.706-312 
            312-312c171.294 0 312 140.706 312 312 0 67.294-24.471 128.471-55.059 177.412l263.059 
            263.059-79.529 79.529zM189.623 408.078c0 121.364 97.091 218.455 218.455 218.455s218.455-97.091 218.455-218.
            455c0-121.364-103.159-218.455-218.455-218.455-121.364 0-218.455 97.091-218.455 218.455z"></path></svg>
        </button>
      </form>
      <!-- header -->
      <header class="hero">
        <div class="hero-container">
          <div class="hero-text">
            <h1 style=" font-family: Times New Roman, Times, serif;">Recipick</h1>
            <h4>Let's Personalize your experience</h4>
          </div>
        </div>
      </header>

      <!-- end of header -->
      <section class="recipes-container">
        <!-- tag container -->
        <div class="tags-container">
          <h4>Diets</h4>
          <div class="tags-list">
            <a href="404.php">Vegan </a>
            <a href="404.php">Vegetarian </a>
            <a href="404.php">Pescetarian </a>
            <a href="404.php">Ketogenic </a>
            <a href="404.php">Paleo </a>
            <a href="404.php">Low FodMap </a>
          </div>


        <!--   <div class="tags-list">
            <a href="404.html">Vegan (1)</a>
            <a href="404.html">Vegetarian (2)</a>
            <a href="404.html">Pescetarian (3)</a>
            <a href="404.html">Ketogenic (4)</a>
            <a href="404.html">Paleo (3)</a>
            <a href="404.html">Low FodMap (4)</a>
          </div> -->
        </div>
        <!-- end of tag container -->
        <!-- recipes list -->

        <div class="recipes-list">


          <!-- single recipe -->
          <a href="single-recipe.php" class="recipe">
            <img
              src="./assets/recipes/recipe-1.jpeg"
              class="img recipe-img"
              alt=""
            />
            <h5>Carne Asada</h5>
            <p>Prep : 15min | Cook : 5min</p>
          </a>
          <!-- end of single recipe -->
          <!-- single recipe -->
          <a href="single-recipe.html" class="recipe">
            <img
              src="./assets/recipes/recipe-2.jpeg"
              class="img recipe-img"
              alt=""
            />
            <h5>Greek Ribs</h5>
            <p>Prep : 15min | Cook : 5min</p>
          </a>
          <!-- end of single recipe -->
          <!-- single recipe -->
          <a href="single-recipe.html" class="recipe">
            <img
              src="./assets/recipes/recipe-3.jpeg"
              class="img recipe-img"
              alt=""
            />
            <h5>Vegetable Soup</h5>
            <p>Prep : 15min | Cook : 5min</p>
          </a>
          <!-- end of single recipe -->
          <!-- single recipe -->
          <a href="single-recipe.html" class="recipe">
            <img
              src="./assets/recipes/recipe-4.jpeg"
              class="img recipe-img"
              alt=""
            />
            <h5>Banana Pancakes</h5>
            <p>Prep : 15min | Cook : 5min</p>
          </a>
          <a href="single-recipe.html" class="recipe">
            <img
              src="./assets/recipes/recipe-4.jpeg"
              class="img recipe-img"
              alt=""
            />
            <h5>Banana Pancakes</h5>
            <p>Prep : 15min | Cook : 5min</p>
          </a>
          <a href="single-recipe.html" class="recipe">
            <img
              src="./assets/recipes/recipe-4.jpeg"
              class="img recipe-img"
              alt=""
            />
            <h5>Banana Pancakes</h5>
            <p>Prep : 15min | Cook : 5min</p>
          </a>





           <a href="single-recipe.html" class="recipe">
            <img
              src="./assets/recipes/recipe-3.jpeg"
              class="img recipe-img"
              alt=""
            />
            <h5>Vegetable Soup</h5>
            <p>Prep : 15min | Cook : 5min</p>
          </a>
          <!-- end of single recipe -->
          <!-- single recipe -->
          <a href="single-recipe.html" class="recipe">
            <img
              src="./assets/recipes/recipe-4.jpeg"
              class="img recipe-img"
              alt=""
            />
            <h5>Banana Pancakes</h5>
            <p>Prep : 15min | Cook : 5min</p>
          </a>
          <a href="single-recipe.html" class="recipe">
            <img
              src="./assets/recipes/recipe-4.jpeg"
              class="img recipe-img"
              alt=""
            />
            <h5>Banana Pancakes</h5>
            <p>Prep : 15min | Cook : 5min</p>
          </a>
          <a href="single-recipe.html" class="recipe">
            <img
              src="./assets/recipes/recipe-4.jpeg"
              class="img recipe-img"
              alt=""
            />
            <h5>Banana Pancakes</h5>
            <p>Prep : 15min | Cook : 5min</p>
          </a>

 <a href="single-recipe.html" class="recipe">
            <img
              src="./assets/recipes/recipe-3.jpeg"
              class="img recipe-img"
              alt=""
            />
            <h5>Vegetable Soup</h5>
            <p>Prep : 15min | Cook : 5min</p>
          </a>
          <!-- end of single recipe -->
          <!-- single recipe -->
          <a href="single-recipe.html" class="recipe">
            <img
              src="./assets/recipes/recipe-4.jpeg"
              class="img recipe-img"
              alt=""
            />
            <h5>Banana Pancakes</h5>
            <p>Prep : 15min | Cook : 5min</p>
          </a>
          <!-- end of single recipe -->
        </div>
        <!-- end of recipes list -->
      </section>
    </main>
    <!-- end of main -->
    <!-- footer -->
    <footer class="page-footer">
      <p>
        &copy; <span id="date"></span>
        <span class="footer-logo">Recipick</span> Built by
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
