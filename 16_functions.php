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
          function add_tax($amount) {
            return $amount * 1.10;
          }

          $total = add_tax(1000);
          echo $total;

          echo "<hr>";

          function verify_bank_balance($cost) {
            $bank_balance = 2000;

            if($cost > $bank_balance) {
              return false;
            } else {
              return true;
            }
          }

          echo verify_bank_balance($total) ? "Payment submitted" : "Payment denied";
        ?>
      </div>
    </div>
    
  </body>
</html>