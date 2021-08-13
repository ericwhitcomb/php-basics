<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Introduction to PHP</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,900&amp;subset=latin-ext" rel="stylesheet">
  </head>
  <body>
    
    <div class="container">
          <h1>Up & Running with PHP</h1>
          
          <div class="code-content">
            <?php 
              $name = "Eric";
              $favorite_number = 17;
              $happy = true;

              echo $name;
              echo "<hr>";
              echo $favorite_number;
              echo "<hr>";
              echo $happy;
            ?>
          </div>
    </div>
    
  </body>
</html>