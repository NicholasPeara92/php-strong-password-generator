<?php 
$length = $_GET['length'];

function password_generate($chars) 
{
  $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz!@#$%^&*<>~`+=,.;:/?';
  return substr(str_shuffle($data), 0, $chars);
}

?>

<!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>PHP Strong Password Generator</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="container">
      <h1>PASSWORD GENERATOR</h1>
      <form class="row" method="GET">
        <div class="col-auto">
          <label for="inputPassword">Lunghezza Password</label>
          <input type="number" name="length" class="form-control" id="inputPassword" min="6" max="20" required>
          <button type="submit" class="btn btn-primary mb-3">Genera</button>
        </div>
      </form>
      <h2>Password generata</h2>
      <div>
        <?php 
          echo password_generate($length);
        ?>

      </div>
    </div>
  </body>
</html>