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
          function the_title() {
            echo "Title of the blog post";
          }

          function the_date() {
            echo date('m/d/Y');
          }
        ?>

        <h2><?php the_title(); ?></h2>
        <p>Published on: <?php the_date(); ?></p>
      </div>
    </div>
    
  </body>
</html>