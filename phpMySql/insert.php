<?php
$servername ="localhost";
$username = "root";
$password = "";
$dbname = "myDB";

$conn = mysqli_connect($servername,$username,$password,$dbname);
//cek koneksi
if (!$conn) {
  die("Connection failed: ".mysqli_connect_error());
}

$sql = "INSERT INTO liga (kode,negara,champion)
VALUES ('Jer','Jerman','4')";
$sql = "INSERT INTO liga (kode,negara,champion)
VALUES ('Spa','Spanyol','3')";
$sql = "INSERT INTO liga (kode,negara,champion)
VALUES ('Eng','English','3')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: ".$sql."<br>".mysqli_error($conn);
}
mysqli_close($conn);
 ?>
