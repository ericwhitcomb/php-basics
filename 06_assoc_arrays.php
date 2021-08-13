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
              $student = array(
                'first_name' => 'Eric',
                'last_name' => 'Whitcomb',
                'country_name' => "United States",
              );

              echo "Name: " . $student['first_name'] . " " . $student['last_name'];
              echo "<br>";
              echo "Country: " . $student['country_name'];
            ?>
          </div>
    </div>
    
  </body>
</html>