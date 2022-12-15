<?php 
session_start();

?>


<!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Password</title>
  </head>
  <body>
      <div class="container">
        <h2>Password generata</h2>
        <div>
          <?php 
            echo $_SESSION['password'];
          ?>
        </div>
      </div>
  </body>
</html>