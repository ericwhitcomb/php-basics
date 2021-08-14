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
          function say_hello($name) {
            echo "Say hello to: {$name}<br>";
          }

          say_hello("Eric");
          say_hello("Stan");
          say_hello("Kyle");
          say_hello("Kenny");

          echo "<hr>";
          
          function sum($num1, $num2) {
            $sum = $num1 + $num2;
            echo "Sum: {$sum}<br>";
          }

          sum(2, 3);
          sum(20, 30);
          sum(200, 300);
          sum(2000, 3000);
        ?>
      </div>
    </div>
    
  </body>
</html>