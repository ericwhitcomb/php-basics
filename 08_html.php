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
                'age' => 44,
                'logged_in' => true
              );              
            ?>

            <h1>Hello: <?php echo $student['first_name']; ?></h1>
            <?php echo "<hr>"; ?>
            <?php echo "<h1>Hello: " . $student['first_name'] . "</h1>"; ?>
          </div>
    </div>
    
  </body>
</html>