<?php
  $conn = mysqli_connect("localhost","root","","mysql");

  if (mysqli_connect_error()){
    echo "Failed to connect to MySql" .mysqli_connect_error()."<br>";
    exit();
  }else{
    echo"Sudah Connect ke MySQL"."<br>";
  }
  $servername ="localhost";
  $username ="root";
  $password ="";
  $dbname = "myDB";
  $conn = mysqli_connect($servername,$username,$password,$dbname);
	//cek koneksi
	if (!$conn) {
		die("Connection failed: ".mysqli_connect_error()."<br>");
	}else{
		echo "Sudah Connect ke Database".$dbname."<br>";
  }
 ?>
