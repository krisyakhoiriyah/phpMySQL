<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Koneksi Database MySQL</title>
  </head>
  <body>
    <h1>Demo Koneksi database MySQL</h1>
    <?php
    $conn = mysqli_connect("localhost","root","","mysql");

    if (mysqli_connect_error()) {
      echo "Failed to connect to MySQL ".
        mysqli_connect_error();
        exit();
    }else {
      echo "Sudah Connect";
    }
     ?>
  </body>
</html>
