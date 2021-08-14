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
          $fruits = array('apple', 'orange', 'melon', 'banana', 'pear', 'grape');

          for($i = 0; $i < count($fruits); $i++) {
            echo "Fruit: " . $fruits[$i] . "<br>";
          }

          echo "<hr>";

          foreach($fruits as $fruit) {
            echo "Fruit: " . $fruit . "<br>";
          }
        ?>
      </div>
    </div>
    
  </body>
</html>