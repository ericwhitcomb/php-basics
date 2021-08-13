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
              $num_1 = 20;
              $num_2 = 20;

              echo "num_1: " . $num_1;
              echo "<br>";
              echo "num_2: " . $num_2;

              echo "<br><br>";

              if($num_1 > $num_2) {
                echo "num_1 is bigger";
              } else if($num_1 < $num_2) {
                echo "num_2 is bigger";
              } else {
                echo "num_1 and num_2 are equal";
              }

              echo "<br><br>";

              if ($num_1 != $num_2) {
                echo "no, they are not equal";
              } else {
                echo "yes, they are equal";
              }

              echo "<hr>";

              $user_logged_in = true;
              
              echo "user_logged_in: " . $user_logged_in;

              echo "<br><br>";

              if($user_logged_in) {
                echo "Welcome";
              } else {
                echo "Please log in";
              }

            ?>
          </div>
    </div>
    
  </body>
</html>