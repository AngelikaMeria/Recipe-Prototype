<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Recipick</title>
    <!-- favicon -->
    <link rel="stylesheet" href="./css/uploadingRecipe.css" />
    <link rel="shortcut icon" href="./assets/Recipick.png" type="image/x-icon" />
    <!-- normalize -->
  </head>
    <body>
      
      <form action method="post">
  
  <h1><strong>Please fill up all fields to submit a recipe</strong> </h1>
  
  <div class="form-group">
    <label for="title">Recipe Title <span></span></label>
    <input type="text" name="title" id="title" class="form-controll"/>
  </div>
  <div class="form-group">
    <label for="caption">Recipe Description <span></span></label>
    <input type="text" name="caption" id="caption" class="form-controll"/>
  </div>
  
  <div class="form-group file-area">
        <label for="images">Add image <span></span></label>
    <input type="file" name="images" id="images" required="required" multiple="multiple"/>
    <div class="file-dummy">
     <!--  <div class="success">Great, your files are selected. Keep on.</div>
 -->     <!--  <div class="default">Please select some files</div> -->
    </div>

  </div>
  <div class="form-group">
    <label for="title">Tags <span></span></label>
    <input type="text" name="tags" id="tags" class="form-controll"/>
  </div>
  <div class="form-group">
    <label for="title">Add Directions <span></span></label>
    <input type="text" name="directions" id="title" class="form-controll"/>
  </div>
  <div class="form-group">
    <form action="#">
      <label for="lang">Diets</label>
      <select name="Diets" id="diets">
        <option value="Vegan">Vegan</option>
        <option value="Vegetarian">Vegetarian</option>
        <option value="Pescetarians">Pescetarians</option>
        <option value="Ketogenic">Ketogenic</option>
        <option value="Paleo">Paleo</option>
        <option value="Low FodMap">Low FodMap</option>
       
      </select>
      <!-- <input type="submit" value="Submit" /> -->
</form>
  </div>

   <div class="form-group">
    <label for="title">Add Ingredients<span></span></label>
    <input type="text" name="title" id="title" class="form-controll"/>
  </div>
  <div class="form-group">
    <button type="submit">Upload </button>
  </div>
  
</form>






<link href='https://fonts.googleapis.com/css?family=Lato:100,200,300,400,500,600,700' rel='stylesheet' type='text/css'>

<a href="homepage.php" class="back-to-article" class="tag">back to home</a>
    </body>


  </html>
