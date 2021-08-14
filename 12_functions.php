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
          var_dump($fruits);
          echo "Fruits count: " . count($fruits);

          echo "<hr>";

          $my_name1 = "Eric Whitcomb";
          echo "my_name1: " . $my_name1 . "<br>";
          echo "length: " . strlen($my_name1);

          echo "<hr>";
          
          $my_name2 = str_replace(' ', '', $my_name1);
          echo "my_name2: " . $my_name2 . "<br>";
          echo "length: " . strlen($my_name2);

          echo "<hr>";

          echo "my_name1 uppercase: " . strtoupper($my_name1);

          echo "<hr>";

          echo "my_name1 lowercase: " . strtolower($my_name1);

          echo "<hr>";

          $password = "abcd";
          if(strlen($password) < 6) {
            echo "Password is weak";
          } else {
            echo "Password is strong";
          }
        ?>
      </div>
    </div>
    
  </body>
</html>