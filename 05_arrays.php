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
              $fruits = array('apple', 'orange', 'melon', 'banana');

              var_dump($fruits);

              array_push($fruits, 'pear');

              var_dump($fruits);

              unset($fruits[1]);

              var_dump($fruits);

              echo $fruits[1]; // should result in error if in debug
            ?>
          </div>
    </div>
    
  </body>
</html>