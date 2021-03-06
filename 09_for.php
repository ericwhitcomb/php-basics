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
          for($i = 0; $i < 10; $i++) {
            echo "Number: " . $i . "<br>";
          }

          echo "<hr>";

          for($i = 0; $i < 10; $i++) {
            if ($i == 5) {
              echo "Number: Five<br>";
              continue;
            }
            echo "Number: " . $i . "<br>";
          }

          echo "<hr>";

          for($i = 0; $i < 10; $i++) {
            if ($i == 5) {
              exit;
            }
            echo "Number: " . $i . "<br>";
          }
        ?>
      </div>
    </div>
    
  </body>
</html>