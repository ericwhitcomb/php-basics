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
          echo 2 + 2;
          echo "<br>";
          echo 2 + 3;
          echo "<br>";

          echo "<hr>";

          $num1 = 20;
          $num2 = 5;

          $add = $num1 + $num2;
          $sub = $num1 - $num2;
          $mul = $num1 * $num2;
          $div = $num1 / $num2;
          $mod = $num1 % $num2;

          echo "Add: {$add}<br>";
          echo "Sub: {$sub}<br>";
          echo "Mul: {$mul}<br>";
          echo "Div: {$div}<br>";
          echo "Mod: {$mod}<br>";

          echo "<hr>";

          echo 10 * 2 + 5;
          echo "<br>";
          echo 5 + 10 * 2;
          echo "<br>";
          echo 10 * (2 + 5);

          echo "<hr>";

          $total = 20;
          $total += 10;
          $total -= 5;

          echo "Total: " . $total;

          echo "<hr>";

          for($i = 0; $i <=10; $i++) {
            if($i % 2 == 0) {
              echo "Even: ";
            } else {
              echo "Odd: ";
            }
            echo $i . "<br>";
          }

          echo "<hr>";

          // FizzBuzz - I simplified his example a wee bit
          for($i = 0; $i <= 20; $i++) {
            echo $i . " ";
            if($i % 3 == 0 && $i % 5 == 0) {
              echo "FIZZBUZZ";
            } else if($i % 3 == 0) {
              echo "Fizz";
            } else if($i % 5 == 0) {
              echo "Buzz";
            }
            echo "<br>";
          }
        ?>
      </div>
    </div>
    
  </body>
</html>